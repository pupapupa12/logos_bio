<?php get_header(); ?>

<style>
/* Hide scrollbar for Chrome, Safari and Opera */
.no-scroll-bar::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.no-scroll-bar {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}

</style>



  <div class="line__hero">
    <div class="l__1260">
      <div class="line__hero__flex">
        <div class="line__hero__linkname" data-ix="load1">Resources  <span class="line__hero__linkname-red">&gt;</span>  <span class="line__hero__linkname-red">OnCellCounter™- Free Online Cell Counter Tool</span></div>
        <!-- <div class="line__hero__f1" data-ix="load-2">Application Notes</div>
        <div class="line__hero__line" data-ix="load-2"></div> -->
      </div>
    </div>
  </div>
  <div data-ix="scroll">
    <div class="l__1260">


    <div class="oncellcouter_notice">
      <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect width="50" height="50" fill="#FFFFFF"/>
      <rect x="10" y="10" width="30" height="30" rx="3" fill="#FFFFFF" stroke="black" stroke-width="2"/>
      <rect x="12" y="14" width="26" height="4" fill="#E0E0E0"/>
      <rect x="12" y="22" width="26" height="4" fill="#E0E0E0"/>
      <circle cx="30" cy="33" r="1.5" fill="black"/>
      <rect x="20" y="42" width="10" height="4" fill="#C0C0C0"/>
      </svg>
      <p>PC access required. This is not supported on mobile.</p>
    </div>
    <iframe class="no-scroll-bar" src="/wp-content/uploads/next-app/index.html" style="width: 100%; height: 800px; border: none;"></iframe>


      <div class="banner">
            <h3 style="margin-bottom: 0;"><p style="color:#3470d1;">Are you satisfied with the results from OnCellCounter?</p></h3>
            <p>If you have any questions, feel free to ask or share your feedback. Please see our license terms <a style="color:#3470d1;" href="<?php echo get_home_url(); ?>/oncellcounter_user-guide">here.</a></p>
              <br>
            <div class="flex-btn">
              <a href="https://logosbio.com/oncellcounter_qa/" data-type="page" data-id="11275" target="_blank" rel="noreferrer noopener"><img decoding="async" width="600" height="300" class="wp-image-5046 alignnone" src="https://logosbio.com/wp-content/uploads/logosbiosystems_oncellcounter_qa.jpg" alt=""></a>
              <a href="https://logosbio.com/oncellcounter_review/" data-type="page" data-id="11277" target="_blank" rel="noreferrer noopener"><img decoding="async" width="600" height="300" class="wp-image-5046 alignnone" src="https://logosbio.com/wp-content/uploads/logosbiosystems_oncellcounter_review.jpg" alt=""></a>
            </div>
            <br>
            <br>
            <a href="https://logosbio.com/cell-counting-overview/" data-type="page" target="_blank" rel="noreferrer noopener"><img decoding="async" class="wp-image-5046 alignnone" src="https://logosbio.com/wp-content/uploads/logosbiosystems_oncellcounter_banner.jpg" alt=""></a>
        </div>
    </div>
  </div>

<style>
  .oncellcouter_notice {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    gap: 20px;
    min-height: 300px;
    display: none;
  }
  @media (min-width: 768px) and (max-width: 1084px) {
    iframe {
    height: 1600px !important;
  }
}
  /* 모바일 기기에서 스크롤바 숨기기 */
    @media (max-width: 767px) {
      .oncellcouter_notice {
      display: flex;
  }
      .no-scroll-bar {
        display: none;
      }
    }
  .flex-btn {
    display: flex;
    gap: 10px;
    max-width: 100%;
    width: 796px;
  }
  @media (max-width: 1080px) {
    .flex-btn {
      width: 100%;
    }
  }
  @media (max-width: 768px) {
    .banner {
        display: none
    }
  }
</style>




  <?php get_footer(); ?>
