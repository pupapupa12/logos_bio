<?php


// Install jQuery
function vpsb_custom_jquery() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', (get_template_directory_uri() . '/js/jquery-3.5.1.min.js'), false);
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'vpsb_custom_jquery');



if ( ! function_exists( 'divis_enqueue_scripts' ) ) :
  function divis_enqueue_scripts() {

      /* divis generated Enqueue Scripts Begin */


  wp_deregister_script( 'logos' );
  wp_enqueue_script( 'logos', get_template_directory_uri() . '/js/logos.js', false, null, true);

  wp_deregister_script( 'coa' );
  wp_enqueue_script( 'coa', get_template_directory_uri() . '/js/coa.js', false, null, true);


  /* divis generated Enqueue Scripts End */

  /* divis generated Enqueue Styles Begin */

  wp_deregister_style( 'normalize' );
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, null, 'all');

  wp_deregister_style( 'components' );
  wp_enqueue_style( 'components', get_template_directory_uri() . '/css/components.css', false, null, 'all');

  wp_deregister_style( 'logos' );
  wp_enqueue_style( 'logos', get_template_directory_uri() . '/css/logos.css', false, filemtime(get_template_directory() . '/css/logos.css'), 'all');

  wp_deregister_style( 'style' );
  wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

  /* divis generated Enqueue Styles End */

  }
  add_action( 'wp_enqueue_scripts', 'divis_enqueue_scripts' );
endif;



//보안상 워드프레스 버전 제거
remove_action( 'wp_head', 'wp_generator' ) ;


// 썸네일 추가
add_theme_support( 'post-thumbnails' );



//코멘트제거
function df_disable_comments_post_types_support() {
  $post_types = get_post_types();
  foreach ($post_types as $post_type) {
     if(post_type_supports($post_type, 'comments')) {
        remove_post_type_support($post_type, 'comments');
        remove_post_type_support($post_type, 'trackbacks');
     }
  }
}
add_action('admin_init', 'df_disable_comments_post_types_support');

function df_disable_comments_status() {
  return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);


function df_disable_comments_hide_existing_comments($comments) {
  $comments = array();
  return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

add_filter('cosmosfarm_members_page_restriction', 'my_cosmosfarm_members_page_restriction', 10, 1);
function my_cosmosfarm_members_page_restriction($page_restriction){
	if(is_home()){
		$page_restriction = '';
	}
	return $page_restriction;
}


// 임베드 반응형 가로 풀사이즈
add_theme_support( 'responsive-embeds' );


// 큰사이즈 이미지 허용
add_filter( 'big_image_size_threshold', '__return_false' );



// 댓글 포스트 페이지 제거
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}

// 댓글 어드민 제거
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

// 댓글 어드민 제거
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );


// wp-embed 제거
function my_deregister_scripts(){
  wp_dequeue_script( 'wp-embed' );
 }
 add_action( 'wp_footer', 'my_deregister_scripts' );


// 어드민바 워프 로고 삭제
function example_admin_bar_remove_logo() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action( 'wp_before_admin_bar_render', 'example_admin_bar_remove_logo', 0 );


/*Contact form 7 remove p*/
add_filter ( 'wpcf7_autop_or_not' , '__return_false' );



// 로그인 워드프레스 로고 삭제
function my_login_logo() { ?>
  <style type="text/css">
  body.login div#login h1 a {
    display: none !important;
  }
  </style>
  <?php }
  add_action( 'login_enqueue_scripts', 'my_login_logo' );


function remove_core_updates() {
  global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
  }
  // 워드프레스 코어 업데이트 알림 비활성화
  add_filter ( 'pre_site_transient_update_core', 'remove_core_updates');
  // 모든 플러그인 업데이트 알림 비활성화
  add_filter ( 'pre_site_transient_update_plugins', 'remove_core_updates');
  // 테마 업데이트 알림 비활성화
  add_filter ( 'pre_site_transient_update_themes', 'remove_core_updates');


//워드프레스 대쉬보드 정리
  function remove_dashboard_widgets() {
    global $wp_meta_boxes;

    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

}
remove_action('welcome_panel', 'wp_welcome_panel');
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );




  // acf option
  add_filter('acf-options-page-adder/capability', 'my_acf_options_page_adder_cap');
  function my_acf_options_page_adder_cap($cap) {
    $cap = 'edit_published_posts';
    return $cap;
  }


  remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );


  // ajax - post number
  // Default: Viewing {post_count} of {total_posts} results.
    add_filter('alm_display_results', function(){
      return '{total_posts}';
    });




    // 404 home move
    add_action('template_redirect', 'redirect_404_to_homepage', 999);
      function redirect_404_to_homepage(){

          if(!is_404())
              return;

          wp_redirect(home_url());
          exit;

      }

      // pdf 다운로드 경로 번역 안되게
        add_filter( 'trp_no_translate_selectors', 'trpc_no_stranslate_selectors', 10, 2);
        function trpc_no_stranslate_selectors($selectors_array, $language){
            $selectors_array[] = '.no-tr';
            $selectors_array[] = '#pdf';
            return $selectors_array;
        }




/*Contact form 7 remove p*/
add_filter ( 'wpcf7_autop_or_not' , '__return_false' );




function fb_move_admin_bar() {
  echo '
  <style type="text/css">
 * html body {
      margin-top: 0 !important;
  }
  body.admin-bar {
      margin-top: -32px;
      padding-bottom: 28px;
  }
  body.wp-admin #footer {
      padding-bottom: 32px;
  }
  #wpadminbar {
      top: auto !important;
      bottom: 0;
  }
  #wpadminbar .quicklinks .ab-sub-wrapper {
      bottom: 32px;
  }
  #wpadminbar .quicklinks .ab-sub-wrapper ul .ab-sub-wrapper {
      bottom: -7px;
  }

  #wp-admin-bar-alm-cache{
    display: none !important;
  }

  #wp-admin-bar-wple-ssl-health {
    display: none !important;
  }
  #wp-admin-bar-duplicate-post {
    display: none !important;
  }



  .alm-err-notice {
    display: none !important;
  }

  .trp-notice.notice.error.is-dismissible {
    display: none !important;
  }

  .wp-list-table.widefat.plugins .plugin-update{
    display: none !important;
  }



  </style>';
}
// on backend area
add_action( 'admin_head', 'fb_move_admin_bar' );
// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );




// menu_order로 게시물을 주문할 때 올바른 이전/다음 게시물 링크를 가져옵니다.
function my_previous_post_where() {

	global $post, $wpdb;

	return $wpdb->prepare( "WHERE p.menu_order < %s AND p.post_type = %s AND p.post_status = 'publish'", $post->menu_order, $post->post_type);
}
add_filter( 'get_previous_post_where', 'my_previous_post_where' );

function my_next_post_where() {

	global $post, $wpdb;

	return $wpdb->prepare( "WHERE p.menu_order > %s AND p.post_type = %s AND p.post_status = 'publish'", $post->menu_order, $post->post_type);
}
add_filter( 'get_next_post_where', 'my_next_post_where' );

function my_previous_post_sort() {

	return "ORDER BY p.menu_order desc LIMIT 1";
}
add_filter( 'get_previous_post_sort', 'my_previous_post_sort' );

function my_next_post_sort() {

	return "ORDER BY p.menu_order asc LIMIT 1";
}
add_filter( 'get_next_post_sort', 'my_next_post_sort' );




if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'photo_thumbnails' );
  set_post_thumbnail_size( 800, 800, true ); // 원하는 가로, 세로 크기 설정
}


// parrotnavy(kwonkiseok) logosbio online cell counter
// 250120 16:35
require_once 'cell-counter-api.php';
