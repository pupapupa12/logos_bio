<?php get_header(); ?>




<?php if ( get_field( 'bg_img' ) ) : ?>

<div class="single-apnote__hero" style="background-image:url('<?php the_field( 'bg_img' ); ?>')">

<?php endif ?>


    <div class="l__1260">
      <div class="line__hero__flex single-apnote">
        <div class="single-apnote__hero__f2" data-ix="load1">Application Note</div>


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

          <!-- Related Documents 커스텀 html -->
          <?php the_field( 'custom_add' ); ?>


        </div>
        </div>
    </div>


  </div>
    </div>
  </div>

  <style>
  .single__wrap p {
    margin-bottom: 20px !important;
  }
  </style>

  <?php get_footer(); ?>