<div class="footer main">
  <div class="footer__deco main"></div>
  <a href="#top" class="c__topbtn w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/top-btn.svg" loading="lazy" width="40" height="40" alt="" class="top__img"></a>
  <div class="l__1260">
    <div class="footer__top">
      <div class="footer__top__col"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.svg" loading="lazy" alt=""></div>
      <div class="footer__top__col--right">
        <div class="footer__top__f1">Subscribe to Logos Biosystems News</div>
        <div class="footer__formblock">



          <div class="footer__form">
            <?php echo do_shortcode('[contact-form-7 id="5530" title="Subscribe"]'); ?>
          </div>




        </div>
      </div>
    </div>
    <div class="line__grey"></div>
    <div class="footer__body">
      <div class="footer__body__col">
        <div class="footer__body__f1">ⓒAligned Genetics, Inc. All rights reserved.</div>
        <div class="footer__body__f1">
          <a href="<?php echo get_home_url(); ?>/about-us">About</a>  |  <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a>  |  <a href="<?php echo get_home_url(); ?>/contact-us">Contact Us</a>  |  <a href="<?php echo get_home_url(); ?>/sitemap">Site Map</a>
        </div>
      </div>
      <div class="footer__body__col--right">
        <a href="https://www.facebook.com/logosbiosystems" target="_blank" class="footer__sns-btn w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/sns01.svg" loading="lazy" alt=""></a>
        <a href="https://twitter.com/LogosBiosystems" target="_blank" class="footer__sns-btn w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/sns02.svg" loading="lazy" alt=""></a>
        <a href="https://www.instagram.com/logos_biosystems_official/" target="_blank" class="footer__sns-btn w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/sns05.svg" loading="lazy" alt=""></a>
        <a href="https://www.youtube.com/channel/UCtOafXCt2BAQ332JOsm2HLg" target="_blank" class="footer__sns-btn w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/sns03.svg" loading="lazy" alt=""></a>
        <a href="https://www.linkedin.com/company/logosbio" target="_blank" class="footer__sns-btn w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/sns04.svg" loading="lazy" alt=""></a>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZMK2WV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script>
  // Hide Header on on scroll down
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  $(window).scroll(function(event) {
    didScroll = true;
  });
  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    var st = $(this).scrollTop();
    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
      return;

    if (st > lastScrollTop && st > 150) {
      // Scroll Down
      $('.nav__body').addClass('hidden');
      $('.nav__body-line').addClass('hidden');
    } else {
      // Scroll Up
      if (st + $(window).height() < $(document).height()) {
        $('.nav__body').removeClass('hidden');
        $('.nav__body-line').removeClass('hidden');
      }
    }
    lastScrollTop = st;
  }
</script>
<script type="text/javascript" src='https://crm.zoho.com/crm/javascript/zcga.js'></script>
</body>