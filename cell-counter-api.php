<?php
/**
 * Plugin Name: Cell Counter Web REST API
 * Description: A REST API endpoint to process cell counter operations.
 * Version: 1.1
 * Author: DIVIS
 */

putenv('LD_LIBRARY_PATH=/var/cellcounter/qt-web-cell-counter-v-0-16/opencv-4.5.0-ag/lib:/lib/x86_64-linux-gnu');

if (!defined('ABSPATH')) {
    exit; // url 통한 직접 접근 방지
}

if (!function_exists('wp_handle_upload')) {
    require_once(ABSPATH . 'wp-admin/includes/file.php');
}

// function add_cors_headers() {
//     header('Access-Control-Allow-Origin: http://localhost:3000');
//     header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
//     header('Access-Control-Allow-Credentials: true');
//     header('Access-Control-Allow-Headers: Content-Type, Authorization');

//     if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
//         status_header(200);
//         exit();
//     }
// }

// add_action('rest_api_init', 'add_cors_headers');

add_action('rest_api_init', function () {
    register_rest_route('cell-counter/v1', '/process', [
        'methods' => 'POST',
        'callback' => 'cell_counter_process',
        // TODO: 필요 시 권한 체크
        'permission_callback' => '__return_true',
    ]);
});

/**
 * @brief "temp/web-cell-counter" 폴더 안에 파일을 업로드하도록
 *        WP 업로드 경로를 일시적으로 변경하는 필터
 */
function cc_custom_upload_dir($dirs)
{
    // 예: wp-content/uploads/temp/web-cell-counter
    $sub_dir = '/temp/web-cell-counter';
    $dirs['subdir'] = $sub_dir;
    $dirs['path'] = $dirs['basedir'] . $sub_dir;
    $dirs['url'] = $dirs['baseurl'] . $sub_dir;
    return $dirs;
}

function cell_counter_process(WP_REST_Request $request)
{
    try {
        // -----------------------------
        // 1. 업로드 파일 기본 검증
        // -----------------------------
        if (empty($_FILES['image']['tmp_name'])) {
            return new WP_Error(
                'CC_NO_FILE',
                '이미지 파일이 전송되지 않았습니다.',
                [
                    'status' => 400,
                    'cc_err_code' => 1001
                ]
            );
        }

        // 파일 사이즈 제한 (100MB)
        $max_size = 100 * 1024 * 1024;
        if (filesize($_FILES['image']['tmp_name']) > $max_size) {
            return new WP_Error(
                'CC_FILE_SIZE_EXCEEDED',
                '최대 파일 크기(100MB)를 초과했습니다.',
                [
                    'status' => 400,
                    'cc_err_code' => 1002
                ]
            );
        }

        // -----------------------------
        // 2. 확장자 / MIME 화이트리스트
        // -----------------------------
        $allowed_extensions = ['jpg', 'jpeg', 'jpe', 'png', 'bmp', 'gif', 'tif', 'tiff'];
        $allowed_mimes = [
            'image/jpeg',
            'image/png',
            'image/bmp',
            'image/gif',
            'image/tiff',
            'image/x-tiff',
        ];

        $file_info = wp_check_filetype_and_ext($_FILES['image']['tmp_name'], $_FILES['image']['name']);

        if (
            !$file_info['ext'] ||
            !in_array(strtolower($file_info['ext']), $allowed_extensions) ||
            !in_array($file_info['type'], $allowed_mimes)
        ) {
            return new WP_Error(
                'CC_INVALID_FILE_TYPE',
                'jpg, jpeg, png, bmp, gif, tif, tiff 파일만 업로드할 수 있습니다.',
                [
                    'status' => 400,
                    'cc_err_code' => 1003
                ]
            );
        }

        // -----------------------------
        // 3. 직접 파일 저장 (WP 필터 우회)
        // -----------------------------
        $file = $_FILES['image'];

        // MIME 타입 검사
        error_log('실제 MIME 타입: ' . mime_content_type($_FILES['image']['tmp_name']));
        $allowed_mime_types = [
            'image/jpeg'            => 'jpg',
            'image/png'             => 'png',
            'image/bmp'             => 'bmp',
            'image/x-ms-bmp'        => 'bmp',
            'application/octet-stream' => 'bmp',
            'image/gif'             => 'gif',
            'image/tiff'            => 'tiff',
            'image/x-tiff'          => 'tiff',
        ];

        $file_info = wp_check_filetype_and_ext($file['tmp_name'], $file['name']);
        $mime = $file_info['type'];

        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, ['jpg', 'jpeg', 'jpe', 'png', 'bmp', 'gif', 'tif', 'tiff']) || !array_key_exists($mime, $allowed_mime_types)) {
            return new WP_Error(
                'CC_INVALID_FILE_TYPE',
                '허용되지 않은 MIME 형식 또는 파일 확장자입니다.',
                [
                    'status' => 400,
                    'cc_err_code' => 1009
                ]
            );
        }

        // 업로드 디렉토리 설정
        $upload_dir = wp_upload_dir();
        $custom_subdir = '/temp/web-cell-counter';
        $target_dir = $upload_dir['basedir'] . $custom_subdir;

        if (!file_exists($target_dir)) {
            wp_mkdir_p($target_dir);
        }

        // 고유 파일명 생성
        $original_filename = basename($file['name']);
        $target_path = $target_dir . '/' . wp_unique_filename($target_dir, $original_filename);

        // 파일 저장
        if (move_uploaded_file($file['tmp_name'], $target_path)) {
            $file_url = $upload_dir['baseurl'] . $custom_subdir . '/' . basename($target_path);
            $image_path = $target_path;
        } else {
            return new WP_Error(
                'CC_UPLOAD_FAILED',
                '파일 저장에 실패했습니다.',
                [
                    'status' => 500,
                    'cc_err_code' => 1010
                ]
            );
        }

        // -----------------------------
        // 4. 파일 처리 (CLI 호출)
        // -----------------------------
        // 업로드 경로(기본 = wp-content/uploads)를 파악
        $uploadDir = wp_upload_dir();
        // 최종 결과도 같은 temp/web-cell-counter 폴더에 저장되도록 설정
        // ex) $uploadDir['basedir'] . '/temp/web-cell-counter'
        $baseDir = $uploadDir['basedir'] . '/temp/web-cell-counter';
        $baseUrl = $uploadDir['baseurl'] . '/temp/web-cell-counter';

        $unique_id = uniqid();
        $random_suffix = bin2hex(random_bytes(6));
        $output_filename = 'output-' . $unique_id . '-' . $random_suffix . '.jpg';
        $output_path = $baseDir . '/' . $output_filename;

        // REST API 파라미터
        $data = $request->get_params();

        // CLI 옵션 구성
        $options = [
            '--minSearchSize' => $data['minSearchSize'] ?? 7,
            '--maxSearchSize' => $data['maxSearchSize'] ?? 24,
            '--detectionSensitivity' => $data['detectionSensitivity'] ?? 5,
            '--liveSensitivity' => $data['liveSensitivity'] ?? 5,
            '--noiseReduction' => $data['noiseReduction'] ?? 5,
            // '--dilutionFactor' => $data['dilutionFactor'] ?? 1,
            // '--newAlgorithm' => $data['newAlgorithm'] ?? 'true',
            // '--magnification' => $data['magnification'] ?? 1.0,
            // '--pixelSize' => $data['pixelSize'] ?? 1.0,
            // '--chamberHeight' => $data['chamberHeight'] ?? 500,
            '--outputPath' => $output_path
        ];

        // 옵션 문자열 생성
        $option_string = '';
        foreach ($options as $key => $value) {
            $option_string .= ' ' . escapeshellarg($key) . '=' . escapeshellarg($value);
        }

        // CLI 명령어 실행
        $command = sprintf(
            '/var/cellcounter/qt-web-cell-counter-v-0-16/CellCounterCLI/build/CellCounterCLI %s %s 2>&1',
            escapeshellarg($image_path),
            $option_string
        );
        exec($command, $cli_output, $return_var);

        // CLI 실행 결과 체크
        if ($return_var !== 0) {
            error_log('이미지 처리에 실패했습니다: ' . implode("\n", $cli_output));
            return new WP_Error(
                'CC_PROCESSING_ERROR',
                '이미지 처리에 실패했습니다:',
                [
                    'status' => 500,
                    'cc_err_code' => 1005
                ]
            );
        }

        error_log('CLI 결과: ' . implode("\n", $cli_output));

        // 결과 JSON 디코딩
        $raw_output = implode("\n", $cli_output);
        $raw_output = mb_convert_encoding($raw_output, 'UTF-8', 'UTF-8');

        // NaN을 0으로 치환 (정규식 활용 또는 str_replace 사용)
        $raw_output = str_replace('nan', '0', $raw_output);

        // JSON 디코딩 수행
        $result = json_decode($raw_output, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log('JSON 디코딩에 실패했습니다: ' . json_last_error_msg() . ' - ' . $raw_output);
            return new WP_Error(
                'CC_JSON_DECODE_ERROR',
                'JSON 디코딩에 실패했습니다.',
                [
                    'status' => 500,
                    'cc_err_code' => 1006
                ]
            );
        }

        // CLI JSON 결과에 'error' 필드가 있으면 에러 처리
        if (isset($result['error'])) {
            error_log('이미지 처리 중 오류가 발생했습니다: ' . $result['error']);
            return new WP_Error(
                'CC_CLI_ERROR',
                $result['error'],
                [
                    'status' => 500,
                    'cc_err_code' => 1007
                ]
            );
        }

        // CLI JSON 결과에 'image' 필드가 있으면 파일명 확인 후 대체
        if (!empty($result['image'])) {
            $result_basename = basename($result['image']);
            if ($result_basename !== $output_filename) {
                $output_filename = $result_basename;
            }
        }

        $result['image'] = $baseUrl . '/' . $output_filename;

        return rest_ensure_response($result);
    } catch (Exception $e) {
        return new WP_Error(
            'CC_EXCEPTION_ERROR',
            $e->getMessage(),
            [
                'status' => 500,
                'cc_err_code' => 1008
            ]
        );
    }
}
