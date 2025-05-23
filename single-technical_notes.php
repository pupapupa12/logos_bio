<?php get_header(); ?>




<?php if ( get_field( 'bg_img' ) ) : ?>

<div class="single-apnote__hero" style="background-image:url('<?php the_field( 'bg_img' ); ?>')">

<?php endif ?>


    <div class="l__1260">
      <div class="line__hero__flex single-apnote">
        <div class="single-apnote__hero__f2" data-ix="load1">Technical Note</div>


        <?php if ( get_field( 'title_white_color' ) == 1 ) : ?>
          <div class="single-apnote__hero__f1 white" data-ix="load1"><?php the_title(); ?></div>
        <?php else : ?>
          <div class="single-apnote__hero__f1" data-ix="load1"><?php the_title(); ?></div>
        <?php endif; ?>



            <?php $download = get_field( 'download' ); ?>
            <?php if ( $download ) : ?>
              <a href="<?php echo esc_url( $download['url'] ); ?>" class="pro__hero__btn--red w-inline-block" target="blank">
                <div>Download PDF</div>
              </a>
            <?php endif; ?>


          </div>
        </div>
      </div>
      <div class="sub__wrap single" data-ix="load-2">
        <div class="l__1260">
          <div class="single__wrap">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content();?>
            <?php endwhile; endif;?>



          </div>
        </div>
        </div>
    </div>
  </div>


  <!-- <div class="pro__com06 pt50" data-ix="scroll" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 500ms ease-out 0s, transform 500ms ease-out 0s;">
   <div class="l__1260">
      <div class="pro__com__titlewrap">
         <div class="pro__com__title-f2">Related Documents</div>
      </div>
 -->



          <!-- Related Documents 커스텀 html -->
            <?php the_field( 'custom_add' ); ?>





          <!-- Related Documents 쿼리 -->

<!--
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $terms = get_the_terms( get_the_ID(), 'category' );
            $postid = get_the_ID();
            $divis_query = array(
              'post_type' => 'application_notes',
              'post_status'    => 'publish',
              'tax_query' =>
                      array(
                        array(
                          'taxonomy' => 'application_notes_category',
                          'field'    => 'name',
                          'terms'    => $terms
                        ),
                      ),
              'paged' => $paged,
              'post__not_in' => array($postid),
            );


            $divis_query = new WP_Query($divis_query) ;

            if ($divis_query -> have_posts()) :
                while ($divis_query -> have_posts()) :
                    $divis_query ->the_post() ;
          ?>





          <div class="pro__com06__flex">
            <div class="pro__com06__col--left">
                <div class="pro__com06__f1">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="pro__com06__f2">Application Note</div>
            </div>
            <div class="pro__com06__col--right">
                <p class="pro__com06__f3"><?php the_field( 'date-file_size' ); ?></p>



                <?php $download = get_field( 'download' ); ?>
                <?php if ( $download ) : ?>

                  <a href="<?php echo esc_url( $download['url'] ); ?>" target="_blank" class="pro__com06__btn w-inline-block">
                    <div>Download</div>
                  </a>

                <?php endif; ?>




            </div>
          </div>


          <?php
          endwhile;
          else :
          ?>

          <?php
          endif;
          ?>
      -->





    </div>
  </div>
  <style>
  .single__wrap p {
    margin-bottom: 20px !important;
  }
  </style>



  <?php get_footer(); ?>