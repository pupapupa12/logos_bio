<?php get_header(); ?>


<div class="main_hero">
  <div data-video-urls="<?php echo get_template_directory_uri(); ?>/videos/video-transcode2.mp4,<?php echo get_template_directory_uri(); ?>/videos/video-transcode2.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="w-background-video w-background-video-atom hero__video"><video id="2f8f68d1-9685-bfd0-b772-23ebb72fb47d-video" autoplay="" loop="" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
      <source src="<?php echo get_template_directory_uri(); ?>/videos/video-transcode2.mp4" data-wf-ignore="true">
      <source src="<?php echo get_template_directory_uri(); ?>/videos/video-transcode2.webm" data-wf-ignore="true">
    </video></div>
  <div class="hero__symbol">

    <img src="<?php echo get_template_directory_uri(); ?>/images/hero__header01.png" loading="lazy" sizes="(max-width: 767px) 140.8671875px, 234.78125px" height="100" srcset="<?php echo get_template_directory_uri(); ?>/images/hero__header01-p-500-1.png 500w, <?php echo get_template_directory_uri(); ?>/images/hero__header01-p-500-1.png 540w" alt="" class="hero__symbol-img">
  </div>
  <div class="hero__body">

    <h1 class="hero-f1 br-none" data-ix="load1">The best keeps getting better.</h1>
    <div class="hero-f2 br-none" data-ix="load-2">From the award-winning LUNA™ family of automated cell counters, <br>
the LUNA-III™ wins ‘Best New Life Science Product of the Year.’
    </div>
    <a href="<?php echo get_home_url(); ?>/luna-lll/" class="w-inline-block hero__btn" data-ix="load-3">
      <div>Learn more</div>
    </a>
    <!-- <a href="<?php echo get_home_url(); ?>/event_/receive-free-cell-counting-slides-with-the-purchase-of-the-brand-new-luna-iii-automated-cell-counter/" class="w-inline-block hero__btn" data-ix="load-3">
      <div>Get Free Slides!</div>
    </a> -->
  </div>
</div>



<div class="main__01" data-ix="scroll">
  <div class="l__1260">
    <div class="main__01__flex">
      <div class="main__01__col">
        <a href="<?php echo get_home_url(); ?>/customer-reviews" class="w-inline-block main01__card">



          <?php $main_img01 = get_field('main-img01', 'option'); ?>
          <?php if ($main_img01) : ?>
            <img src="<?php echo esc_url($main_img01['url']); ?>" alt="<?php echo esc_attr($main_img01['alt']); ?>" />
          <?php endif; ?>



          <div class="main__01__f1">Customer Reviews</div>
          <div class="main__01-f2">See what real users have to say about the Logos Biosystems&#x27; family of products &gt;</div>
        </a>
      </div>
      <div class="main__01__col">
        <a href="<?php echo get_home_url(); ?>/application-notes" class="w-inline-block main01__card">



          <?php $main_img02 = get_field('main-img02', 'option'); ?>
          <?php if ($main_img02) : ?>
            <img src="<?php echo esc_url($main_img02['url']); ?>" alt="<?php echo esc_attr($main_img02['alt']); ?>" />
          <?php endif; ?>


          <div class="main__01__f1">Application Notes</div>
          <div class="main__01-f2">From academia to biomanufacturing, explore our extensive collection of application notes and whitepapers &gt;</div>
        </a>
      </div>
      <div class="main__01__col">
        <a href="<?php echo get_home_url(); ?>/blog" class="w-inline-block main01__card">



          <?php $main_img03 = get_field('main-img03', 'option'); ?>
          <?php if ($main_img03) : ?>
            <img src="<?php echo esc_url($main_img03['url']); ?>" alt="<?php echo esc_attr($main_img03['alt']); ?>" />
          <?php endif; ?>


          <div class="main__01__f1">Blog</div>
          <div class="main__01-f2">Exchange ideas, protocols, and experiences with your peers &gt;</div>
        </a>
      </div>
    </div>
  </div>
</div>






<div class="main__02" data-ix="scroll">
  <div class="l__1260">
    <div class="main__02__flex">
      <div class="main__02__col">
        <div class="main__02__f1">What’s New</div>
        <div class="main__02__f2"><?php the_field('what-title', 'option'); ?></div>
        <div class="main__02__card">



          <?php $what_s_new_link = get_field('what’s_new_link', 'option'); ?>
          <?php if ($what_s_new_link) : ?>
            <a href="<?php echo esc_url($what_s_new_link['url']); ?>" target="<?php echo esc_attr($what_s_new_link['target']); ?>" class="w-inline-block">



              <?php $what_s_new_image = get_field('what’s_new_image', 'option'); ?>
              <?php if ($what_s_new_image) : ?>
                <img src="<?php echo esc_url($what_s_new_image['url']); ?>" alt="<?php echo esc_attr($what_s_new_image['alt']); ?>" />
              <?php endif; ?>



              <div class="main__02__card-p">Learn More &gt;</div>

            </a>
          <?php endif; ?>



        </div>
      </div>
      <div class="main__02__col">
        <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="w-tabs main__02__tabs">
          <div class="w-tab-menu main__02__tabsmenu">
            <a data-w-tab="Tab 1" class="w-inline-block w--current w-tab-link main__02__tablink">
              <div class="main__02__tablink-p">In the News</div>
            </a>
            <a data-w-tab="Tab 2" class="w-inline-block w-tab-link main__02__tablink">
              <div class="main__02__tablink-p">In the Events</div>
            </a>
          </div>
          <div class="w-tab-content">



            <div data-w-tab="Tab 1" class="w--tab-active w-tab-pane tab-pane-tab-1">




              <!-- 쿼리 -->
              <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $divis_query = array(
                'post_type' => 'news',
                'post_status'    => 'publish',
                'posts_per_page'    => 4,
                // 'cat' => 2,
                // 'order' => 'DESC',
                'paged' => $paged,
              );

              // 사용자 정의 쿼리
              $divis_query = new WP_Query($divis_query);

              if ($divis_query->have_posts()) :
                while ($divis_query->have_posts()) :
                  $divis_query->the_post();
              ?>





                  <!-- news query -->
                  <div class="main__02__tabbody">
                    <div class="main__02__f3"><?php echo get_the_date(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="w-inline-block">
                      <div class="main__02__f4"><?php the_title(); ?></div>
                    </a>
                  </div>
                  <!-- ### news query -->



                <?php
                endwhile;
              else :
                ?>

                <p style="padding:20px; margin: 0 auto;text-align: center; margin-bottom: 50px;">게시글이 없습니다.</p>
              <?php
              endif;
              ?>

              <!-- 끝 -->

              <div class="main__02__tabbtn">
                <a href="<?php echo get_home_url(); ?>/news" class="w-inline-block">
                  <div class="main__02__f5">View All News &gt;</div>
                </a>
              </div>

            </div>







            <div data-w-tab="Tab 2" class="w-tab-pane">







              <?php echo do_shortcode('[ajax_load_more id="9208056403" container_type="div" repeater="template_15" post_type="event_" posts_per_page="4" destroy_after="1"]'); ?>



              <div class="main__02__tabbtn">
                <a href="<?php echo get_home_url(); ?>/event" class="w-inline-block">
                  <div class="main__02__f5">View All  Events &gt;</div>
                </a>
              </div>
            </div>




          </div>
        </div>
      </div>
    </div>
  </div>
</div>








<div class="main__03 ip" data-ix="scroll">
  <div class="l__1260">
    <div class="section-f1">Promotions</div>
    <div class="main__03__flex">




      <!-- 쿼리 -->
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $divis_query2 = array(
        'post_type' => 'promotions_',
        'post_status'    => 'publish',
        'posts_per_page'    => 3,
        // 'cat' => 3,
        // 'order' => 'DESC',
        'paged' => $paged,
      );

      // 사용자 정의 쿼리
      $divis_query2 = new WP_Query($divis_query2);

      if ($divis_query2->have_posts()) :
        while ($divis_query2->have_posts()) :
          $divis_query2->the_post();
      ?>



          <div class="main__03__col">
            <a href="<?php the_permalink(); ?>" class="w-inline-block main__03__link">

              <?php the_post_thumbnail('thumbnail'); ?>


              <?php if (get_field('off_text') == true) : ?>
                <div class="main__03__tag">
                  <div><?php the_field('off_text'); ?></div>
                </div>
              <?php else : ?>
              <?php endif; ?>



              <div class="main__03__f1"><?php the_field('day'); ?></div>
              <div class="main__03__f2"><?php the_title(); ?></div>
            </a>
          </div>



        <?php
        endwhile;
      else :
        ?>

        <p style="padding:20px; margin: 0 auto;text-align: center; margin-bottom: 50px;">게시글이 없습니다.</p>
      <?php
      endif;
      ?>

      <!-- 끝 -->





    </div>
    <a href="<?php echo get_home_url(); ?>/promotions" class="w-inline-block pro__com04__btn">
      <div>Show More &gt;</div>
    </a>
  </div>
</div>






<div class="main__04" data-ix="scroll">
  <div class="l__1260">
    <div class="section-f1">Our Products</div>
    <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="w-inline-block main__04__btn">
      <div>Request Quote/ Demo</div>
    </a>
    <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="w-tabs main__04__tabs">
      <div class="w-tab-menu main__04__tabmenu">
        <a data-w-tab="Tab 1" class="w-inline-block w--current w-tab-link main__04__tablink">
          <div>Cell Counters</div>
        </a>
        <a data-w-tab="Tab 2" class="w-inline-block w-tab-link main__04__tablink">
          <div>Cell Imaging</div>
        </a>
        <a data-w-tab="Tab 3" class="w-inline-block w-tab-link main__04__tablink last">
          <div>Tissue Clearing</div>
        </a>
      </div>
      <div class="w-tab-content">
        <div data-w-tab="Tab 1" class="w--tab-active w-tab-pane">
          <div data-delay="4000" data-animation="slide" class="w-slider main__04__slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="w-slider-mask">
              <div class="w-slide main__04__slide">
                <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri(); ?>/images//main04-bx7.jpg" alt="">
                  <div class="main__04__f1">LUNA-BX7<sup class="main__04__f1--sub">TM</sup></div>
                  <div class="main__04__f2">Automated Cell Counter</div>
                  <a href="<?php echo get_home_url(); ?>/luna-bx7" class="w-inline-block main__04__morebtn">
                    <div>Learn More</div>
                  </a>
                </div>
              </div>
              <div class="w-slide main__04__slide">
                <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri(); ?>/images//main04-luna3.jpg" alt="">
                  <div class="main__04__f1">LUNA-III<sup class="main__04__f1--sub">TM</sup></div>
                  <div class="main__04__f2">Automated Cell Counter</div>
                  <a href="<?php echo get_home_url(); ?>/luna-lll" class="w-inline-block main__04__morebtn">
                    <div>Learn More</div>
                  </a>
                </div>
              </div>
              <div class="w-slide main__04__slide">
                <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri(); ?>/images//main04-01.jpg" alt="">
                  <div class="main__04__f1">LUNA-II<sup class="main__04__f1--sub">TM</sup></div>
                  <div class="main__04__f2">Automated Cell Counter</div>
                  <a href="<?php echo get_home_url(); ?>/luna-ll" class="w-inline-block main__04__morebtn">
                    <div>Learn More</div>
                  </a>
                </div>
              </div>
              <div class="w-slide main__04__slide">
                <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri(); ?>/images//main04-02.jpg" alt="">
                  <div class="main__04__f1">LUNA-FX7<sup class="main__04__f1--sub">TM</sup></div>
                  <div class="main__04__f2">Automated Cell Counter</div>
                  <a href="<?php echo get_home_url(); ?>/luna-fx7" class="w-inline-block main__04__morebtn">
                    <div>Learn More</div>
                  </a>
                </div>
              </div>
              <div class="w-slide main__04__slide">
                <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri(); ?>/images//main04-03.jpg" alt="">
                  <div class="main__04__f1">LUNA-FL<sup class="main__04__f1--sub">TM</sup></div>
                  <div class="main__04__f2">Dual Fluorescence Cell Counter</div>
                  <a href="<?php echo get_home_url(); ?>/luna-fl" class="w-inline-block main__04__morebtn">
                    <div>Learn More</div>
                  </a>
                </div>
              </div>
              <div class="w-slide main__04__slide">
                <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri(); ?>/images//main04-05.jpg" alt="">
                  <div class="main__04__f1">LUNA-STEM™</div>
                  <div class="main__04__f2">Automated Fluorescence</div>
                  <a href="<?php echo get_home_url(); ?>/luna-stem" class="w-inline-block main__04__morebtn">
                    <div>Learn More</div>
                  </a>
                </div>
              </div>
              <div class="w-slide main__04__slide">
                <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri(); ?>/images//main04-04.jpg" alt="">
                  <div class="main__04__f1">QUANTOM Tx<sup class="main__04__f1--sub">TM</sup></div>
                  <div class="main__04__f2">Microbial Cell Counter</div>
                  <a href="<?php echo get_home_url(); ?>/quantom-tx" class="w-inline-block main__04__morebtn">
                    <div>Learn More</div>
                  </a>
                </div>
              </div>
            </div>
            <div class="w-slider-arrow-left main__04__arrow">
              <div class="w-icon-slider-left"></div>
            </div>
            <div class="w-slider-arrow-right main__04__arrow">
              <div class="w-icon-slider-right"></div>
            </div>
            <div class="w-round w-slider-nav slide-nav"></div>
          </div>
        </div>
        <div data-w-tab="Tab 2" class="w-tab-pane">
          <div data-delay="4000" data-animation="slide" class="w-slider main__04__slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="main__04__mask-ml-textleft w-slider-mask">
              <div class="w-slide main__04__slide">
                <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri(); ?>/images//main04-07.jpg" alt="">
                  <div class="main__04__f1">CELENA® X</div>
                  <div class="main__04__f2">Cell Imaging</div>
                  <a href="<?php echo get_home_url(); ?>/celena-x" class="w-inline-block main__04__morebtn">
                    <div>Learn More</div>
                  </a>
                </div>
              </div>
              <div class="w-slide main__04__slide">
                <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri(); ?>/images//main04-08.jpg" alt="">
                  <div class="main__04__f1">CELENA® S</div>
                  <div class="main__04__f2">Cell Imaging</div>
                  <a href="<?php echo get_home_url(); ?>/celena-s" class="w-inline-block main__04__morebtn">
                    <div>Learn More</div>
                  </a>
                </div>
              </div>
            </div>
            <div class="hidden w-slider-arrow-left main__04__arrow">
              <div class="w-icon-slider-left"></div>
            </div>
            <div class="hidden w-slider-arrow-right main__04__arrow">
              <div class="w-icon-slider-right"></div>
            </div>
            <div class="w-round w-slider-nav slide-nav"></div>
          </div>
        </div>
        <div data-w-tab="Tab 3" class="w-tab-pane">
          <div data-delay="4000" data-animation="slide" class="w-slider main__04__slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="main__04__mask-ml-textleft w-slider-mask">
              <div class="w-slide main__04__slide">
                <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri(); ?>/images//main04-09.jpg" alt="">
                  <div class="main__04__f1">X-CLARITY™</div>
                  <div class="main__04__f2">Tissue Clearing</div>
                  <a href="<?php echo get_home_url(); ?>/x-clarity" class="w-inline-block main__04__morebtn">
                    <div>Learn More</div>
                  </a>
                </div>
              </div>
              <div class="w-slide main__04__slide">
                <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri(); ?>/images//main04-10.jpg" alt="">
                  <div class="main__04__f1">DeepLabel™</div>
                  <div class="main__04__f2">Tissue Clearing</div>
                  <a href="<?php echo get_home_url(); ?>/deeplabel" class="w-inline-block main__04__morebtn">
                    <div>Learn More</div>
                  </a>
                </div>
              </div>
            </div>
            <div class="hidden w-slider-arrow-left main__04__arrow">
              <div class="w-icon-slider-left"></div>
            </div>
            <div class="hidden w-slider-arrow-right main__04__arrow">
              <div class="w-icon-slider-right"></div>
            </div>
            <div class="w-round w-slider-nav slide-nav"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="main__05" data-ix="scroll">
  <div class="l__1260">
    <div class="section-f1">Support</div>
    <div class="main__05__flex">
      <div class="main__05__col">
        <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="w-inline-block main__05__link">
          <div class="main__05__f1">Quotation/Demo</div>
          <div class="main__05__redline"></div>
          <div class="main__05__f2">Request a quote/demo for the productof your choice.</div><img src="<?php echo get_template_directory_uri(); ?>/images//main05-01.svg" loading="lazy" alt="" class="main__05__icon">
        </a>
      </div>
      <div class="main__05__col">
        <a href="<?php echo get_home_url(); ?>/coa" class="w-inline-block main__05__link">
          <div class="main__05__f1">CoA/MSDS</div>
          <div class="main__05__redline"></div>
          <div class="main__05__f2">Access material safety data sheets and request certificates of analysis.</div><img src="<?php echo get_template_directory_uri(); ?>/images//main05-02.svg" loading="lazy" alt="" class="main__05__icon">
        </a>
      </div>
      <div class="main__05__col">
        <a href="<?php echo get_home_url(); ?>/application-notes" class="w-inline-block main__05__link">
          <div class="main__05__f1">Technical Documents</div>
          <div class="main__05__redline"></div>
          <div class="main__05__f2">Look through our product brochures, user guides, tech notes, and posters.</div><img src="<?php echo get_template_directory_uri(); ?>/images//main05-03.svg" loading="lazy" alt="" class="main__05__icon">
        </a>
      </div>
      <div class="main__05__col">
        <a href="<?php echo get_home_url(); ?>/software" class="w-inline-block main__05__link">
          <div class="main__05__f1">Software</div>
          <div class="main__05__redline"></div>
          <div class="main__05__f2">Find software updates for your Logos product here.</div><img src="<?php echo get_template_directory_uri(); ?>/images//main05-04.svg" loading="lazy" alt="" class="main__05__icon">
        </a>
      </div>
    </div>
  </div>
</div>






<?php get_footer("main"); ?>