<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="single__hero">
    <div class="l__1260">
      <div class="line__hero__flex single">
        <div class="single__hero__f1" data-ix="load1"><?php the_title(); ?></div>
        <div class="single__hero__f2" data-ix="load1"><?php echo the_date(); ?></div>
      </div>
    </div>
  </div>
  <div class="sub__wrap single" data-ix="load-2">
    <div class="l__1260">
      <div class="single__wrap">



      <?php the_content();?>



      </div>
      <div class="single__btn-wrap">
        <a href="javascript:history.back();" class="single__btn w-inline-block" data-ix="load-3">
          <div>Back</div>
        </a>
      </div>
    </div>
  </div>


<?php endwhile; endif;?>
<?php get_footer(); ?>