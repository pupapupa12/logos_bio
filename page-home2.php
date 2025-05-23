<?php get_header(); ?>


<div class="main_hero">
    <div data-poster-url="<?php echo get_template_directory_uri();?>/videos/video-poster-00001.jpg" data-video-urls="<?php echo get_template_directory_uri();?>/videos/video-transcode.mp4,<?php echo get_template_directory_uri();?>/videos/video-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="hero__video w-background-video w-background-video-atom"><video id="2f8f68d1-9685-bfd0-b772-23ebb72fb47d-video" autoplay="" loop="" style="background-image:url('<?php echo get_template_directory_uri();?>/videos/video-poster-00001.jpg');" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
        <source src="<?php echo get_template_directory_uri();?>/videos/video-transcode.mp4" data-wf-ignore="true">
        <source src="<?php echo get_template_directory_uri();?>/videos/video-transcode.webm" data-wf-ignore="true">
      </video></div>
    <div class="hero__symbol">

      <img src="<?php echo get_template_directory_uri();?>/images/hero__header01.png" loading="lazy" sizes="(max-width: 767px) 140.8671875px, 234.78125px" height="100" srcset="<?php echo get_template_directory_uri();?>/images/hero__header01-p-500.png 500w, <?php echo get_template_directory_uri();?>/images/hero__header01.png 540w" alt="" class="hero__symbol-img"></div>
    <div class="hero__body">
      <h1 class="hero-f1 br-none" data-ix="load1">Accurate counts and results <br>you can trust.</h1>
      <div class="hero-f2" data-ix="load-2">Cell counting will never be the same.</div>
      <a href="<?php echo get_home_url(); ?>/cell-counting-overview/" class="hero__btn w-inline-block" data-ix="load-3">
        <div>Explore Our Counters</div>
      </a>
    </div>
  </div>



  <div class="main__01" data-ix="scroll">
    <div class="l__1260">
      <div class="main__01__flex">
        <div class="main__01__col">
          <a href="<?php echo get_home_url(); ?>/customer-reviews" class="main01__card w-inline-block">



          <?php $main_img01 = get_field( 'main-img01', 'option' ); ?>
          <?php if ( $main_img01 ) : ?>
            <img src="<?php echo esc_url( $main_img01['url'] ); ?>" alt="<?php echo esc_attr( $main_img01['alt'] ); ?>" />
          <?php endif; ?>



            <div class="main__01__f1">Customer Reviews</div>
            <div class="main__01-f2">See what real users have to say about the Logos Biosystems&#x27; family of products &gt;</div>
          </a>
        </div>
        <div class="main__01__col">
          <a href="<?php echo get_home_url(); ?>/application-notes" class="main01__card w-inline-block">



          <?php $main_img02 = get_field( 'main-img02', 'option' ); ?>
          <?php if ( $main_img02 ) : ?>
            <img src="<?php echo esc_url( $main_img02['url'] ); ?>" alt="<?php echo esc_attr( $main_img02['alt'] ); ?>" />
          <?php endif; ?>


            <div class="main__01__f1">Application Notes</div>
            <div class="main__01-f2">From academia to biomanufacturing, explore our extensive collection of application notes and whitepapers &gt;</div>
          </a>
        </div>
        <div class="main__01__col">
          <a href="<?php echo get_home_url(); ?>/blog" class="main01__card w-inline-block">



          <?php $main_img03 = get_field( 'main-img03', 'option' ); ?>
          <?php if ( $main_img03 ) : ?>
            <img src="<?php echo esc_url( $main_img03['url'] ); ?>" alt="<?php echo esc_attr( $main_img03['alt'] ); ?>" />
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
          <div class="main__02__f2"><?php the_field( 'what-title', 'option' ); ?></div>
          <div class="main__02__card">



          <?php $what_s_new_link = get_field( 'what’s_new_link', 'option' ); ?>
            <?php if ( $what_s_new_link ) : ?>
            <a href="<?php echo esc_url( $what_s_new_link['url'] ); ?>" target="<?php echo esc_attr( $what_s_new_link['target'] ); ?>" class="w-inline-block">



                      <?php $what_s_new_image = get_field( 'what’s_new_image', 'option' ); ?>
                      <?php if ( $what_s_new_image ) : ?>
                        <img src="<?php echo esc_url( $what_s_new_image['url'] ); ?>" alt="<?php echo esc_attr( $what_s_new_image['alt'] ); ?>" />
                      <?php endif; ?>



                      <div class="main__02__card-p">Learn More &gt;</div>

            </a>
            <?php endif; ?>



          </div>
        </div>
        <div class="main__02__col">
          <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="main__02__tabs w-tabs">
            <div class="main__02__tabsmenu w-tab-menu">
              <a data-w-tab="Tab 1" class="main__02__tablink w-inline-block w-tab-link w--current">
                <div class="main__02__tablink-p">In the News</div>
              </a>
              <a data-w-tab="Tab 2" class="main__02__tablink w-inline-block w-tab-link">
                <div class="main__02__tablink-p">In the Events</div>
              </a>
            </div>
            <div class="w-tab-content">



              <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">




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
                  $divis_query = new WP_Query($divis_query) ;

                  if ($divis_query -> have_posts()) :
                      while ($divis_query -> have_posts()) :
                          $divis_query ->the_post() ;
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







                <?php echo do_shortcode('[ajax_load_more id="9208056403" container_type="div" repeater="template_15" post_type="event_" posts_per_page="4" destroy_after="1"]');?>



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
            $divis_query2 = new WP_Query($divis_query2) ;

            if ($divis_query2 -> have_posts()) :
                while ($divis_query2 -> have_posts()) :
                    $divis_query2 ->the_post() ;
          ?>



                <div class="main__03__col">
                  <a href="<?php the_permalink(); ?>" class="main__03__link w-inline-block">

                  <?php the_post_thumbnail('thumbnail' ); ?>


                  <?php if ( get_field( 'off_text' ) == true ) : ?>
                    <div class="main__03__tag">
                  <div><?php the_field( 'off_text' ); ?></div>
                    </div>
                  <?php else : ?>
                  <?php endif; ?>



                    <div class="main__03__f1"><?php the_field( 'day' ); ?></div>
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
      <a href="<?php echo get_home_url(); ?>/promotions" class="pro__com04__btn w-inline-block">
          <div>Show More &gt;</div>
      </a>
    </div>
  </div>






  <div class="main__04" data-ix="scroll">
    <div class="l__1260">
      <div class="section-f1">Our Products</div>
      <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="main__04__btn w-inline-block">
        <div>Request Quote/ Demo</div>
      </a>
      <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="main__04__tabs w-tabs">
        <div class="main__04__tabmenu w-tab-menu">
          <a data-w-tab="Tab 1" class="main__04__tablink w-inline-block w-tab-link w--current">
            <div>Cell Counters</div>
          </a>
          <a data-w-tab="Tab 2" class="main__04__tablink w-inline-block w-tab-link">
            <div>Cell Imaging</div>
          </a>
          <a data-w-tab="Tab 3" class="main__04__tablink last w-inline-block w-tab-link">
            <div>Tissue Clearing</div>
          </a>
        </div>
        <div class="w-tab-content">
          <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
            <div data-delay="4000" data-animation="slide" class="main__04__slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
              <div class="w-slider-mask">
                <div class="main__04__slide w-slide">
                  <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri();?>/images//main04-01.jpg" alt="">
                    <div class="main__04__f1">LUNA-II<sup class="main__04__f1--sub">TM</sup></div>
                    <div class="main__04__f2">Automated Cell Counter</div>
                    <a href="<?php echo get_home_url(); ?>/luna-ll" class="main__04__morebtn w-inline-block">
                      <div>Learn More</div>
                    </a>
                  </div>
                </div>
                <div class="main__04__slide w-slide">
                  <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri();?>/images//main04-02.jpg" alt="">
                    <div class="main__04__f1">LUNA-FX7<sup class="main__04__f1--sub">TM</sup></div>
                    <div class="main__04__f2">Automated Cell Counter</div>
                    <a href="<?php echo get_home_url(); ?>/luna-fx7" class="main__04__morebtn w-inline-block">
                      <div>Learn More</div>
                    </a>
                  </div>
                </div>
                <div class="main__04__slide w-slide">
                  <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri();?>/images//main04-03.jpg" alt="">
                    <div class="main__04__f1">LUNA-FL<sup class="main__04__f1--sub">TM</sup></div>
                    <div class="main__04__f2">Dual Fluorescence Cell Counter</div>
                    <a href="<?php echo get_home_url(); ?>/luna-fl" class="main__04__morebtn w-inline-block">
                      <div>Learn More</div>
                    </a>
                  </div>
                </div>
                <div class="main__04__slide w-slide">
                  <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri();?>/images//main04-05.jpg" alt="">
                    <div class="main__04__f1">LUNA-STEM™</div>
                    <div class="main__04__f2">Automated Fluorescence</div>
                    <a href="<?php echo get_home_url(); ?>/luna-stem" class="main__04__morebtn w-inline-block">
                      <div>Learn More</div>
                    </a>
                  </div>
                </div>
                <div class="main__04__slide w-slide">
                  <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri();?>/images//main04-06.jpg" alt="">
                    <div class="main__04__f1">LUNA-II YF™</div>
                    <div class="main__04__f2">Automated Yeast</div>
                    <a href="<?php echo get_home_url(); ?>/luna-ll-yf" class="main__04__morebtn w-inline-block">
                      <div>Learn More</div>
                    </a>
                  </div>
                </div>
                <div class="main__04__slide w-slide">
                  <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri();?>/images//main04-04.jpg" alt="">
                    <div class="main__04__f1">QUANTOM Tx<sup class="main__04__f1--sub">TM</sup></div>
                    <div class="main__04__f2">Microbial Cell Counter</div>
                    <a href="<?php echo get_home_url(); ?>/quantom-tx" class="main__04__morebtn w-inline-block">
                      <div>Learn More</div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="main__04__arrow w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
              </div>
              <div class="main__04__arrow w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
              </div>
              <div class="slide-nav w-slider-nav w-round"></div>
            </div>
          </div>
          <div data-w-tab="Tab 2" class="w-tab-pane">
            <div data-delay="4000" data-animation="slide" class="main__04__slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
              <div class="main__04__mask-ml-textleft w-slider-mask">
                <div class="main__04__slide w-slide">
                  <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri();?>/images//main04-07.jpg" alt="">
                    <div class="main__04__f1">CELENA® X</div>
                    <div class="main__04__f2">Cell Imaging</div>
                    <a href="<?php echo get_home_url(); ?>/celena-x" class="main__04__morebtn w-inline-block">
                      <div>Learn More</div>
                    </a>
                  </div>
                </div>
                <div class="main__04__slide w-slide">
                  <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri();?>/images//main04-08.jpg" alt="">
                    <div class="main__04__f1">CELENA® S</div>
                    <div class="main__04__f2">Cell Imaging</div>
                    <a href="<?php echo get_home_url(); ?>/celena-s" class="main__04__morebtn w-inline-block">
                      <div>Learn More</div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="main__04__arrow hidden w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
              </div>
              <div class="main__04__arrow hidden w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
              </div>
              <div class="slide-nav w-slider-nav w-round"></div>
            </div>
          </div>
          <div data-w-tab="Tab 3" class="w-tab-pane">
            <div data-delay="4000" data-animation="slide" class="main__04__slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
              <div class="main__04__mask-ml-textleft w-slider-mask">
                <div class="main__04__slide w-slide">
                  <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri();?>/images//main04-09.jpg" alt="">
                    <div class="main__04__f1">X-CLARITY™</div>
                    <div class="main__04__f2">Tissue Clearing</div>
                    <a href="<?php echo get_home_url(); ?>/x-clarity" class="main__04__morebtn w-inline-block">
                      <div>Learn More</div>
                    </a>
                  </div>
                </div>
                <div class="main__04__slide w-slide">
                  <div class="main__04__slide-in"><img loading="eager" width="238" src="<?php echo get_template_directory_uri();?>/images//main04-10.jpg" alt="">
                    <div class="main__04__f1">DeepLabel™</div>
                    <div class="main__04__f2">Tissue Clearing</div>
                    <a href="<?php echo get_home_url(); ?>/deeplabel" class="main__04__morebtn w-inline-block">
                      <div>Learn More</div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="main__04__arrow hidden w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
              </div>
              <div class="main__04__arrow hidden w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
              </div>
              <div class="slide-nav w-slider-nav w-round"></div>
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
          <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="main__05__link w-inline-block">
            <div class="main__05__f1">Quotation/Demo</div>
            <div class="main__05__redline"></div>
            <div class="main__05__f2">Request a quote/demo for the productof your choice.</div><img src="<?php echo get_template_directory_uri();?>/images//main05-01.svg" loading="lazy" alt="" class="main__05__icon">
          </a>
        </div>
        <div class="main__05__col">
          <a href="<?php echo get_home_url(); ?>/coa" class="main__05__link w-inline-block">
            <div class="main__05__f1">CoA/MSDS</div>
            <div class="main__05__redline"></div>
            <div class="main__05__f2">Access material safety data sheets and request certificates of analysis.</div><img src="<?php echo get_template_directory_uri();?>/images//main05-02.svg" loading="lazy" alt="" class="main__05__icon">
          </a>
        </div>
        <div class="main__05__col">
          <a href="<?php echo get_home_url(); ?>/application-notes" class="main__05__link w-inline-block">
            <div class="main__05__f1">Technical Documents</div>
            <div class="main__05__redline"></div>
            <div class="main__05__f2">Look through our product brochures, user guides, tech notes, and posters.</div><img src="<?php echo get_template_directory_uri();?>/images//main05-03.svg" loading="lazy" alt="" class="main__05__icon">
          </a>
        </div>
        <div class="main__05__col">
          <a href="<?php echo get_home_url(); ?>/software" class="main__05__link w-inline-block">
            <div class="main__05__f1">Software</div>
            <div class="main__05__redline"></div>
            <div class="main__05__f2">Find software updates for your Logos product here.</div><img src="<?php echo get_template_directory_uri();?>/images//main05-04.svg" loading="lazy" alt="" class="main__05__icon">
          </a>
        </div>
      </div>
    </div>
  </div>






<?php get_footer("main"); ?>