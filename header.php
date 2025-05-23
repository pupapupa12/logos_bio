<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>





  <meta charset="utf-8">

  <meta name="format-detection" content="telephone=no">
  <meta name="theme-color" content="#333" />
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("consent", "default", {
      ad_storage: "denied",
      ad_user_data: "denied",
      ad_personalization: "denied",
      analytics_storage: "denied",
      functionality_storage: "denied",
      personalization_storage: "denied",
      security_storage: "granted",
      wait_for_update: 2000,
    });
    gtag("set", "ads_data_redaction", true);
    gtag("set", "url_passthrough", true);
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Inter:300,regular,500,700"]
      }
    });
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WZMK2WV');
  </script>
  <!-- End Google Tag Manager -->



  <!-- Global site tag (gtag.js) - Google Ads: 1008578653 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1008578653"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-1008578653');
  </script>


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-36675797-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-36675797-1');
  </script>


  <!-- Clixtell Tracking Code -->
  <script type='text/javascript'>
    var script = document.createElement('script');
    var prefix = document.location.protocol;
    script.async = true;
    script.type = 'text/javascript';
    var target = prefix + '//scripts.clixtell.com/track.js';
    script.src = target;
    var elem = document.head;
    elem.appendChild(script);
  </script>




<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>



  <header class="main__nav">
    <div class="l__1260">
      <div class="nav__header">
        <div class="nav__header__col">
          <a href="<?php echo get_home_url(); ?>/" aria-current="page" class="w-inline-block w--current"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_logo.svg" loading="lazy" alt="" class="nav__logo"></a>
        </div>
        <div class="nav__header__col">
          <a href="<?php echo get_home_url(); ?>/blog" class="w-inline-block">
            <div class="nav__f1">Blog</div>
          </a>
          <div class="nav__f1">    |    </div>
          <a href="<?php echo get_home_url(); ?>/contact-us" class="w-inline-block">
            <div class="nav__f1">Contact</div>
          </a>
          <div data-hover="false" data-delay="0" class="w-dropdown nav__tran-btn">
            <div class="w-dropdown-toggle nav__tran-toggle"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_tran.svg" loading="lazy" alt="" class="nav__header__tranicon">
              <div class="nav__f1">International</div>
            </div>
            <nav class="w-dropdown-list nav__tran-list">
              <a href="https://logosbio.com/" class="w-dropdown-link nav__tran-list-link">EN</a>
              <a href="https://logosbio.com/ko" class="w-dropdown-link nav__tran-list-link">KR</a>
              <a href="https://logosbio.com/fr" class="w-dropdown-link nav__tran-list-link">FR</a>
              <a href="https://logosbio.com/es" class="w-dropdown-link nav__tran-list-link">ES</a>
              <a href="https://logosbio.com.cn/" class="w-dropdown-link nav__tran-list-link">CN</a>
            </nav>
          </div><img src="<?php echo get_template_directory_uri(); ?>/images/nav_search-icon.svg" loading="lazy" alt="" class="nav__search-icon" data-ix="search-open">
          <div class="search__form-wrap">
            <div class="search__form">



              <!--search -->
              <?php get_search_form(); ?>
              <!-- <form method="get" class="search__form-in"><input type="text" class="w-input search__input" maxlength="256" name="search" data-name="search" placeholder="search" id="search-2"><input type="submit" data-wait="Please wait..." value="Search" class="w-button search__btn"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/nav-search-close.svg" alt="" class="nav__search-close-icon" data-ix="search-close"></form> -->





            </div>
          </div>
        </div>
      </div>
      <div class="nav__m-header">
        <div class="nav__header__col">
          <a href="<?php echo get_home_url(); ?>/" aria-current="page" class="w-inline-block w--current"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_logo.svg" loading="lazy" width="Auto" alt="" class="nav__m-logo"></a>
        </div>
        <div class="nav__header__col">
          <a href="<?php echo get_home_url(); ?>/blog" class="w-inline-block">
            <div class="nav__f1">Blog</div>
          </a>
          <div data-hover="false" data-delay="0" class="w-dropdown nav__tran-btn">
            <div class="w-dropdown-toggle nav__tran-toggle"><img src="<?php echo get_template_directory_uri(); ?>/images/nav_tran.svg" loading="lazy" alt="" class="nav__header__tranicon"></div>
            <nav class="w-dropdown-list nav__tran-list">
              <a href="https://logosbio.com/" class="w-dropdown-link nav__tran-list-link">EN</a>
              <a href="https://logosbio.com/ko" class="w-dropdown-link nav__tran-list-link">KR</a>
              <a href="https://logosbio.com/fr" class="w-dropdown-link nav__tran-list-link">FR</a>
              <a href="https://logosbio.com/es" class="w-dropdown-link nav__tran-list-link">ES</a>
              <a href="https://logosbio.com.cn" class="w-dropdown-link nav__tran-list-link">CN</a>
            </nav>
          </div>
          <div class="nav__ham-wrap" data-ix="nav-m-open">
            <div class="ham1"></div>
            <div class="ham2"></div>
            <div class="ham3"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="line__grey"></div>
    <div class="ml-nopadding l__1260">
      <div class="nav__body">
        <div data-hover="true" data-delay="0" class="w-dropdown nav__main-drop" data-ix="nav-drop">
          <div class="w-dropdown-toggle nav__main-link no-click">
            <div>Products</div>
          </div>
          <nav class="w-dropdown-list nav__drop-list">
            <div class="nav__drop-flex">
              <div class="nav_drop-col">
                <div data-hover="true" data-delay="0" class="w-dropdown nav__drop-step1">
                  <div class="w-dropdown-toggle drop-f1 no-click">
                    <div>Cell Counting</div>
                  </div>
                  <nav class="w-dropdown-list drop-step2">
                    <a href="<?php echo get_home_url(); ?>/cell-counting-overview" class="w-dropdown-link drop-step2__link" data-ix="load1">Overview</a>
                    <div class="drop-step2__line"></div>
                    <div class="drop-step2__title">Brightfield Cell Counters</div>
                    <a href="<?php echo get_home_url(); ?>/luna-bx7" class="w-dropdown-link drop-step2__link sub" data-ix="load1">LUNA-BX7™</a>
                    <a href="<?php echo get_home_url(); ?>/luna-lll" class="w-dropdown-link drop-step2__link sub" data-ix="load1">LUNA-III™</a>
                    <a href="<?php echo get_home_url(); ?>/luna-ll" class="w-dropdown-link drop-step2__link sub" data-ix="load1">LUNA-II™</a>
                    <div class="drop-step2__title">Fluorescence Cell Counters</div>
                    <a href="<?php echo get_home_url(); ?>/luna-fx7" class="w-dropdown-link drop-step2__link sub" data-ix="load1">LUNA-FX7™</a>
                    <a href="<?php echo get_home_url(); ?>/luna-fl" class="w-dropdown-link drop-step2__link sub" data-ix="load1">LUNA-FL™</a>
                    <a href="<?php echo get_home_url(); ?>/luna-stem" class="w-dropdown-link drop-step2__link sub" data-ix="load1">LUNA-STEM™</a>
                    <div class="drop-step2__title">Microbial Cell Counters</div>
                    <!-- <a href="<?php echo get_home_url(); ?>/luna-ll-yf" class="w-dropdown-link drop-step2__link sub" data-ix="load1">LUNA-II YF™</a> -->
                    <a href="<?php echo get_home_url(); ?>/quantom-tx" class="w-dropdown-link drop-step2__link sub" data-ix="load1">QUANTOM Tx™</a>
                    <div class="drop-step2__line"></div>
                    <a href="<?php echo get_home_url(); ?>/cell-counting-consumables" class="w-dropdown-link drop-step2__link" data-ix="load1">Consumables &amp; Accessories</a>
                    <a href="<?php echo get_home_url(); ?>/compare-cell-counters" class="w-dropdown-link drop-step2__link" data-ix="load1">Compare Cell Counters</a>
                  </nav>
                </div>
                <div data-hover="true" data-delay="0" class="w-dropdown nav__drop-step1">
                  <div class="w-dropdown-toggle drop-f1 no-click">
                    <div>Cell Imaging</div>
                  </div>
                  <nav class="w-dropdown-list drop-step2">
                    <a href="<?php echo get_home_url(); ?>/celena-x" class="w-dropdown-link drop-step2__link">CELENA® X</a>
                    <a href="<?php echo get_home_url(); ?>/celena-s" class="w-dropdown-link drop-step2__link">CELENA® S</a>
                    <a href="<?php echo get_home_url(); ?>/cell-imaging-accessories" class="w-dropdown-link drop-step2__link">Accessories</a>
                  </nav>
                </div>
                <div data-hover="true" data-delay="0" class="w-dropdown nav__drop-step1">
                  <div class="w-dropdown-toggle drop-f1 no-click">
                    <div>Tissue Clearing</div>
                  </div>
                  <nav class="w-dropdown-list drop-step2">
                    <a href="<?php echo get_home_url(); ?>/tissue-clearing-overview" class="w-dropdown-link drop-step2__link" data-ix="load1">Overview</a>
                    <div class="drop-step2__line"></div>
                    <div class="drop-step2__title">Tissue Clearing</div>
                    <a href="<?php echo get_home_url(); ?>/x-clarity" class="w-dropdown-link drop-step2__link sub" data-ix="load1">X-CLARITY™</a>
                    <div class="drop-step2__title">Labeling &amp; Imaging</div>
                    <a href="<?php echo get_home_url(); ?>/deeplabel" class="w-dropdown-link drop-step2__link sub" data-ix="load1">DeepLabel™</a>
                    <div class="drop-step2__line"></div>
                    <a href="<?php echo get_home_url(); ?>/tissue-clearing-consumables" class="w-dropdown-link drop-step2__link" data-ix="load1">Consumables &amp; Accessories</a>
                  </nav>
                </div>
                <a href="<?php echo get_home_url(); ?>/oem-products" class="w-inline-block drop-link">
                  <div class="drop-f1">OEM Products</div>
                </a>
              </div>
              <div class="nav_drop-col"></div>
              <div class="nav_drop-col last"><img src="<?php echo get_template_directory_uri(); ?>/images/drop_col3_2.jpg" loading="lazy" srcset="<?php echo get_template_directory_uri(); ?>/images/drop_col3_2-p-500.jpg 500w, <?php echo get_template_directory_uri(); ?>/images/drop_col3_2-p-800.jpg 800w, <?php echo get_template_directory_uri(); ?>/images/drop_col3_2.jpg 814w" width="407" sizes="100vw" alt="" class="drop-col-img">
                <div class="drop-f2">Request a quote demo</div>
                <div class="drop-f3">Request a quote for the cell counter of your choice.</div>
                <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="w-inline-block">
                  <div class="drop-f4">Learn More &gt;</div>
                </a>
              </div>
            </div>
          </nav>
        </div>
        <div data-hover="true" data-delay="0" class="w-dropdown nav__main-drop" data-ix="nav-drop">
          <div class="w-dropdown-toggle nav__main-link no-click">
            <div>Customer Reviews</div>
          </div>
          <nav class="w-dropdown-list nav__drop-list">
            <div class="nav__drop-flex">
              <div class="nav_drop-col">
                <a href="<?php echo get_home_url(); ?>/customer-reviews" class="w-inline-block drop-link">
                  <div class="drop-f1">Customer Reviews</div>
                </a>
                <a href="<?php echo get_home_url(); ?>/photo-testimonials " class="w-inline-block drop-link">
                  <div class="drop-f1">Photo Testimonials</div>
                </a>
                <a href="<?php echo get_home_url(); ?>/researcher-highlights" class="w-inline-block drop-link">
                  <div class="drop-f1">Researcher Highlights</div>
                </a>
                <a href="<?php echo get_home_url(); ?>/citations" class="w-inline-block drop-link">
                  <div class="drop-f1">Citations</div>
                </a>
              </div>
              <div class="nav_drop-col"></div>
              <div class="nav_drop-col last"><img src="<?php echo get_template_directory_uri(); ?>/images/drop_col3_2.jpg" loading="lazy" srcset="<?php echo get_template_directory_uri(); ?>/images/drop_col3_2-p-500.jpg 500w, <?php echo get_template_directory_uri(); ?>/images/drop_col3_2-p-800.jpg 800w, <?php echo get_template_directory_uri(); ?>/images/drop_col3_2.jpg 814w" width="407" sizes="100vw" alt="" class="drop-col-img">
                <div class="drop-f2">Request a quote demo</div>
                <div class="drop-f3">Request a quote for the cell counter of your choice.</div>
                <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="w-inline-block">
                  <div class="drop-f4">Learn More &gt;</div>
                </a>
              </div>
            </div>
          </nav>
        </div>
        <div data-hover="true" data-delay="0" class="w-dropdown nav__main-drop" data-ix="nav-drop">
          <div class="w-dropdown-toggle nav__main-link no-click">
            <div>Resources</div>
          </div>
          <nav class="w-dropdown-list nav__drop-list">
            <div class="nav__drop-flex">
              <div class="nav_drop-col">
                <div data-hover="true" data-delay="0" class="w-dropdown nav__drop-step1">
                  <div class="w-dropdown-toggle drop-f1 no-click">
                    <div>Technical Documents</div>
                  </div>
                  <nav class="w-dropdown-list drop-step2">
                    <a href="<?php echo get_home_url(); ?>/application-notes" class="w-dropdown-link drop-step2__link">Application Notes</a>
                    <a href="<?php echo get_home_url(); ?>/technical-notes" class="w-dropdown-link drop-step2__link">Technical Notes</a>
                    <a href="<?php echo get_home_url(); ?>/white-papers-posters" class="w-dropdown-link drop-step2__link">White Papers / Posters</a>
                    <a href="<?php echo get_home_url(); ?>/brochures" class="w-dropdown-link drop-step2__link">Brochures</a>
                    <a href="<?php echo get_home_url(); ?>/user-guides" class="w-dropdown-link drop-step2__link">User Guides</a>
                  </nav>
                </div>
                <a href="<?php echo get_home_url(); ?>/videos-webinars" class="w-inline-block drop-link">
                  <div class="drop-f1">Videos / Webinars</div>
                </a>
                <a href="<?php echo get_home_url(); ?>/image-gallery" class="w-inline-block drop-link">
                  <div class="drop-f1">Image Gallery</div>
                </a>
                <a href="<?php echo get_home_url(); ?>/oncellcounter" class="w-inline-block drop-link">
                  <div class="drop-f1">OnCellCounter™- Free Online Cell Counter Tool</div>
                </a>
              </div>
              <div class="nav_drop-col"></div>
              <div class="nav_drop-col last"><img src="<?php echo get_template_directory_uri(); ?>/images/drop_col3_2.jpg" loading="lazy" srcset="<?php echo get_template_directory_uri(); ?>/images/drop_col3_2-p-500.jpg 500w, <?php echo get_template_directory_uri(); ?>/images/drop_col3_2-p-800.jpg 800w, <?php echo get_template_directory_uri(); ?>/images/drop_col3_2.jpg 814w" width="407" sizes="100vw" alt="" class="drop-col-img">
                <div class="drop-f2">Request a quote demo</div>
                <div class="drop-f3">Request a quote for the cell counter of your choice.</div>
                <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="w-inline-block">
                  <div class="drop-f4">Learn More &gt;</div>
                </a>
              </div>
            </div>
          </nav>
        </div>
        <div data-hover="true" data-delay="0" class="w-dropdown nav__main-drop" data-ix="nav-drop">
          <div class="w-dropdown-toggle nav__main-link">
            <a href="<?php echo get_home_url(); ?>/support" class="w-inline-block nav__main-link-in">
              <div>Support</div>
            </a>
          </div>
          <nav class="w-dropdown-list nav__drop-list">
            <div class="nav__drop-flex">
              <div class="nav_drop-col">
                <div data-hover="true" data-delay="0" class="w-dropdown nav__drop-step1">
                  <div class="w-dropdown-toggle drop-f1 no-click">
                    <div>Requests &amp; Inquiries</div>
                  </div>
                  <nav class="w-dropdown-list drop-step2">
                    <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="w-dropdown-link drop-step2__link">Quote/Demo Request</a>
                    <a href="<?php echo get_home_url(); ?>/tech-support-service-request" class="w-dropdown-link drop-step2__link">Tech Support/Service Request</a>
                    <a href="<?php echo get_home_url(); ?>/email-us" class="w-dropdown-link drop-step2__link">Email Us</a>
                  </nav>
                </div>
                <div data-hover="true" data-delay="0" class="w-dropdown nav__drop-step1">
                  <div class="w-dropdown-toggle drop-f1 no-click">
                    <div>CoA &amp; MSDS</div>
                  </div>
                  <nav class="w-dropdown-list drop-step2">
                    <a href="<?php echo get_home_url(); ?>/coa" class="w-dropdown-link drop-step2__link">CoA</a>
                    <a href="<?php echo get_home_url(); ?>/msds" class="w-dropdown-link drop-step2__link">MSDS</a>
                  </nav>
                </div>
                <a href="<?php echo get_home_url(); ?>/software" class="w-inline-block drop-link">
                  <div class="drop-f1">Software</div>
                </a>
              </div>
              <div class="nav_drop-col"></div>
              <div class="nav_drop-col last"><img src="<?php echo get_template_directory_uri(); ?>/images/drop_col3_2.jpg" loading="lazy" srcset="<?php echo get_template_directory_uri(); ?>/images/drop_col3_2-p-500.jpg 500w, <?php echo get_template_directory_uri(); ?>/images/drop_col3_2-p-800.jpg 800w, <?php echo get_template_directory_uri(); ?>/images/drop_col3_2.jpg 814w" width="407" sizes="100vw" alt="" class="drop-col-img">
                <div class="drop-f2">Request a quote demo</div>
                <div class="drop-f3">Request a quote for the cell counter of your choice.</div>
                <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="w-inline-block">
                  <div class="drop-f4">Learn More &gt;</div>
                </a>
              </div>
            </div>
          </nav>
        </div>
        <div data-hover="true" data-delay="0" class="w-dropdown nav__main-drop" data-ix="nav-drop">
          <div class="w-dropdown-toggle nav__main-link no-click">
            <div>About Us</div>
          </div>
          <nav class="w-dropdown-list nav__drop-list">
            <div class="nav__drop-flex">
              <div class="nav_drop-col">
                <a href="<?php echo get_home_url(); ?>/about-us" class="w-inline-block drop-link">
                  <div class="drop-f1">About Us</div>
                </a>
                <a href="<?php echo get_home_url(); ?>/contact-us" class="w-inline-block drop-link">
                  <div class="drop-f1">Contact Us</div>
                </a>
                <a href="<?php echo get_home_url(); ?>/news" class="w-inline-block drop-link">
                  <div class="drop-f1">News</div>
                </a>
                <a href="<?php echo get_home_url(); ?>/event" class="w-inline-block drop-link">
                  <div class="drop-f1">Events</div>
                </a>
              </div>
              <div class="nav_drop-col"></div>
              <div class="nav_drop-col last"><img src="<?php echo get_template_directory_uri(); ?>/images/drop_col3_2.jpg" loading="lazy" srcset="<?php echo get_template_directory_uri(); ?>/images/drop_col3_2-p-500.jpg 500w, <?php echo get_template_directory_uri(); ?>/images/drop_col3_2-p-800.jpg 800w, <?php echo get_template_directory_uri(); ?>/images/drop_col3_2.jpg 814w" width="407" sizes="100vw" alt="" class="drop-col-img">
                <div class="drop-f2">Request a quote demo</div>
                <div class="drop-f3">Request a quote for the cell counter of your choice.</div>
                <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="w-inline-block">
                  <div class="drop-f4">Learn More &gt;</div>
                </a>
              </div>
            </div>
          </nav>
        </div>
        <a href="https://shop.logosbio.com/" target="_blank" class="w-inline-block nav__main-link ip">
          <div>Shop / Buy</div>
        </a>
        <a href="<?php echo get_home_url(); ?>/oncellcounter" class="w-inline-block nav__main-link" style="margin-left: auto;">
          <div>OnCellCounter™</div>
        </a>
      </div>
      <div class="nav__m-body">
        <div class="nav__m-wrap">
          <div class="nav__m-1dep-link" data-ix="nav-m-1dep-link">Products</div>
          <div class="nav__m-2dep-wrap">
            <div class="nav__m-2dep-back" data-ix="nav-m-1dep-back">&lt; Back</div>
            <div data-hover="false" data-delay="0" class="w-dropdown nav__m-2dep-link">
              <div class="w-dropdown-toggle nav__m-2dep-link-toggle">
                <div>Cell Counting</div>
              </div>
              <nav class="w-dropdown-list nav__m-2dep-link-list">
                <a href="<?php echo get_home_url(); ?>/cell-counting-overview" class="w-dropdown-link nav__m-3dep-link">Overview</a>
                <a href="<?php echo get_home_url(); ?>/luna-bx7" class="w-dropdown-link nav__m-3dep-link">LUNA-BX7™</a>
                <a href="<?php echo get_home_url(); ?>/luna-lll" class="w-dropdown-link nav__m-3dep-link">LUNA-III™</a>
                <a href="<?php echo get_home_url(); ?>/luna-ll" class="w-dropdown-link nav__m-3dep-link">LUNA-II™</a>
                <a href="<?php echo get_home_url(); ?>/luna-fx7" class="w-dropdown-link nav__m-3dep-link">LUNA-FX7™</a>
                <a href="<?php echo get_home_url(); ?>/luna-fl" class="w-dropdown-link nav__m-3dep-link">LUNA-FL™</a>
                <a href="<?php echo get_home_url(); ?>/luna-stem" class="w-dropdown-link nav__m-3dep-link">LUNA-STEM™</a>
                <!-- <a href="<?php echo get_home_url(); ?>/luna-ll-yf" class="w-dropdown-link nav__m-3dep-link">LUNA-II YF™</a> -->
                <a href="<?php echo get_home_url(); ?>/quantom-tx" class="w-dropdown-link nav__m-3dep-link">QUANTOM Tx™</a>
                <a href="<?php echo get_home_url(); ?>/cell-counting-consumables" class="w-dropdown-link nav__m-3dep-link">Consumables &amp; Accessories</a>
                <a href="<?php echo get_home_url(); ?>/compare-cell-counters" class="w-dropdown-link nav__m-3dep-link">Compare Cell Counters</a>
              </nav>
            </div>
            <div data-hover="false" data-delay="0" class="w-dropdown nav__m-2dep-link">
              <div class="w-dropdown-toggle nav__m-2dep-link-toggle">
                <div>Cell Imaging</div>
              </div>
              <nav class="w-dropdown-list nav__m-2dep-link-list">
                <a href="<?php echo get_home_url(); ?>/celena-x" class="w-dropdown-link nav__m-3dep-link">CELENA® X</a>
                <a href="<?php echo get_home_url(); ?>/celena-s" class="w-dropdown-link nav__m-3dep-link">CELENA® S</a>
                <a href="<?php echo get_home_url(); ?>/cell-imaging-accessories" class="w-dropdown-link nav__m-3dep-link">Accessories</a>
              </nav>
            </div>
            <div data-hover="false" data-delay="0" class="w-dropdown nav__m-2dep-link">
              <div class="w-dropdown-toggle nav__m-2dep-link-toggle">
                <div>Tissue Clearing</div>
              </div>
              <nav class="w-dropdown-list nav__m-2dep-link-list">
                <a href="<?php echo get_home_url(); ?>/tissue-clearing-overview" class="w-dropdown-link nav__m-3dep-link">Overview</a>
                <a href="<?php echo get_home_url(); ?>/x-clarity" class="w-dropdown-link nav__m-3dep-link">X-CLARITY™</a>
                <a href="<?php echo get_home_url(); ?>/deeplabel" class="w-dropdown-link nav__m-3dep-link">DeepLabel™</a>
                <a href="<?php echo get_home_url(); ?>/tissue-clearing-consumables" class="w-dropdown-link nav__m-3dep-link">Consumables &amp; Accessories</a>
              </nav>
            </div>
            <a href="<?php echo get_home_url(); ?>/OEM-Products" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>OEM Products</div>
            </a>
          </div>
        </div>
        <div class="nav__m-wrap">
          <div class="nav__m-1dep-link" data-ix="nav-m-1dep-link">Customer Reviews</div>
          <div class="nav__m-2dep-wrap">
            <div class="nav__m-2dep-back" data-ix="nav-m-1dep-back">&lt; Back</div>
            <a href="<?php echo get_home_url(); ?>/customer-reviews" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>Customer Reviews</div>
            </a>
            <a href="<?php echo get_home_url(); ?>/Photo-Testimonials" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>Photo Testimonials </div>
            </a>
            <a href="<?php echo get_home_url(); ?>/researcher-highlights" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>Researcher Highlight</div>
            </a>
            <a href="<?php echo get_home_url(); ?>/citations" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>Citations</div>
            </a>
          </div>
        </div>
        <div class="nav__m-wrap">
          <div class="nav__m-1dep-link" data-ix="nav-m-1dep-link">Resources</div>
          <div class="nav__m-2dep-wrap">
            <div class="nav__m-2dep-back" data-ix="nav-m-1dep-back">&lt; Back</div>
            <div data-hover="false" data-delay="0" class="w-dropdown nav__m-2dep-link">
              <div class="w-dropdown-toggle nav__m-2dep-link-toggle">
                <div>Technical Documents</div>
              </div>
              <nav class="w-dropdown-list nav__m-2dep-link-list">
                <a href="<?php echo get_home_url(); ?>/application-notes" class="w-dropdown-link nav__m-3dep-link">Application Notes</a>
                <a href="<?php echo get_home_url(); ?>/technical-notes" class="w-dropdown-link nav__m-3dep-link">Technical Notes</a>
                <a href="<?php echo get_home_url(); ?>/white-papers-posters" class="w-dropdown-link nav__m-3dep-link">White Papers / Posters</a>
                <a href="<?php echo get_home_url(); ?>/brochures" class="w-dropdown-link nav__m-3dep-link">Brochures</a>
                <a href="<?php echo get_home_url(); ?>/user-guides" class="w-dropdown-link nav__m-3dep-link">User Guides</a>
              </nav>
            </div>
            <a href="<?php echo get_home_url(); ?>/videos-webinars" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>Videos / Webinars</div>
            </a>
            <a href="<?php echo get_home_url(); ?>/image-gallery" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>Image Gallery</div>
            </a>
            <a href="<?php echo get_home_url(); ?>/oncellcounter" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>OnCellCounter™- Free Online Cell Counter Tool</div>
            </a>
          </div>
        </div>
        <div class="nav__m-wrap">
          <div class="nav__m-1dep-link" data-ix="nav-m-1dep-link">Support</div>
          <div class="nav__m-2dep-wrap">
            <div class="nav__m-2dep-back" data-ix="nav-m-1dep-back">&lt; Back</div>
            <div data-hover="false" data-delay="0" class="w-dropdown nav__m-2dep-link">
              <div class="w-dropdown-toggle nav__m-2dep-link-toggle">
                <div>Requests &amp; Inquiries</div>
              </div>
              <nav class="w-dropdown-list nav__m-2dep-link-list">
                <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="w-dropdown-link nav__m-3dep-link">Quote/Demo Request</a>
                <a href="<?php echo get_home_url(); ?>/tech-support-service-request" class="w-dropdown-link nav__m-3dep-link">Tech Support/Service Request</a>
                <a href="<?php echo get_home_url(); ?>/email-us" class="w-dropdown-link nav__m-3dep-link">Email Us</a>
              </nav>
            </div>
            <div data-hover="false" data-delay="0" class="w-dropdown nav__m-2dep-link">
              <div class="w-dropdown-toggle nav__m-2dep-link-toggle">
                <div>CoA &amp; MSDS</div>
              </div>
              <nav class="w-dropdown-list nav__m-2dep-link-list">
                <a href="<?php echo get_home_url(); ?>/coa" class="w-dropdown-link nav__m-3dep-link">CoA</a>
                <a href="<?php echo get_home_url(); ?>/msds" class="w-dropdown-link nav__m-3dep-link">MSDS</a>
              </nav>
            </div>
            <a href="<?php echo get_home_url(); ?>/software" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>Software</div>
            </a>
          </div>
        </div>
        <div class="nav__m-wrap">
          <div class="nav__m-1dep-link" data-ix="nav-m-1dep-link">About Us</div>
          <div class="nav__m-2dep-wrap">
            <div class="nav__m-2dep-back" data-ix="nav-m-1dep-back">&lt; Back</div>
            <a href="<?php echo get_home_url(); ?>/about-us" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>About Us</div>
            </a>
            <a href="<?php echo get_home_url(); ?>/contact-us" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>Contact Us</div>
            </a>
            <a href="<?php echo get_home_url(); ?>/news" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>News</div>
            </a>
            <a href="<?php echo get_home_url(); ?>/event" class="w-inline-block nav__m-2dep-link arrow-none">
              <div>Events</div>
            </a>
          </div>
          <a href="https://shop.logosbio.com/" target="_blank" class="w-inline-block nav__m-1dep-link arrow-none ip">
            <div>Shop / Buy</div>
          </a>
        </div>
        <div class="search__m-form-wrap">
          <div class="search__form">



            <!--m search -->
            <?php get_search_form(); ?>
            <!-- <form method="get" class="search__form-in"><input type="text" class="w-input search__input" maxlength="256" name="m-search" data-name="m-search" placeholder="Search" id="m-search-2"><input type="submit" data-wait="Please wait..." value="Search" class="w-button search__btn"></form> -->




          </div>
        </div>
      </div>
    </div>
    <div class="nav__body-line"></div>
  </header>
  <div id="top" class="nav__box"></div>