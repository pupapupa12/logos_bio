<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>





  <div class="l__relative">
    <div class="u__gra-bg"></div>
    <div class="line__hero center">
      <div class="l__1260">
        <div class="line__hero__linkname" data-ix="load1">Tissue Clearing  <span class="line__hero__linkname-red">&gt;</span> Consumables & Accessories  <span class="line__hero__linkname-red">&gt;</span> <span class="line__hero__linkname-red">


        <?php
        $terms = get_the_terms( get_the_ID(), 'tissue_clearing_acc_category' ); // 카테고리 맞는 이름으로 변경
        if(!empty($terms)){
        foreach($terms as $term){
            echo $term->name.'<br>';
        }
        }
        ?>

        </span></div>
      </div>
    </div>
  </div>
  <div class="sub__wrap single-consumables" data-ix="load-2">
    <div class="l__1260">
      <div class="etc__com01">
        <div class="etc__com01__col40">



        <?php the_post_thumbnail('medium', array('class' => 'etc__com01__img')); ?>



      </div>
        <div class="etc__com01__col60">
          <div class="etc__com01__f1"><?php the_title(); ?></div>
          <div class="etc__com01__f2"><?php the_content();?></div>



          <?php if ( get_field( 'compatible_instruments' ) == true ) : ?>
            <div class="etc__com01__f3">Compatible Instruments</div>
            <div><?php the_field( 'compatible_instruments' ); ?></div>
          <?php else : ?>
          <?php endif; ?>


          <div class="etc__com01__btn-wrap">



        <?php $oder_link = get_field( 'oder_link' ); ?>
        <?php if ( $oder_link ) : ?>

            <a href="<?php echo esc_url( $oder_link ); ?>" target="blank" class="etc__com01__btn ip w-inline-block">
              <div>Order Now</div>
            </a>

        <?php endif; ?>


            <a href="<?php echo get_home_url(); ?>/quote-demo-request" class="etc__com01__btn--red w-inline-block">
              <div>Request a Quote</div>
            </a>
          </div>
        </div>
      </div>
      <div class="etc__com02">


        <?php $product_insert = get_field( 'product_insert' ); ?>
          <?php if ( $product_insert ) : ?>
            <a href="<?php echo esc_url( $product_insert['url'] ); ?>" target="blank"  class="etc__com02__btn w-inline-block"><img src="<?php echo get_template_directory_uri();?>/images/etc-download.svg" loading="lazy" alt="">
          <div class="etc__com02__btn-p">Product Insert</div>
        </a>
        <?php endif; ?>









        <?php if ( get_field( 'coa_view' ) == 1 ) : ?>
          <a href="<?php echo get_home_url(); ?>/coa" class="etc__com02__btn w-inline-block">
          <div class="etc__com02__btn-p">Request CoA ></div>
          </a>
        <?php else : ?>
          <?php // echo 'false'; ?>
        <?php endif; ?>





        <?php if ( have_rows( 'link01' ) ) : ?>
          <?php while ( have_rows( 'link01' ) ) : the_row(); ?>
            <?php $link01_link = get_sub_field( 'link01-link' ); ?>
            <?php if ( $link01_link ) : ?>


              <a href="<?php echo esc_url( $link01_link['url'] ); ?>" target="<?php echo esc_attr( $link01_link['target'] ); ?>" class="etc__com02__btn w-inline-block">
              <div class="etc__com02__btn-p"><?php the_sub_field( 'link01-title' ); ?></div>
              </a>


              <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>





        <?php if ( have_rows( 'link02' ) ) : ?>
          <?php while ( have_rows( 'link02' ) ) : the_row(); ?>
            <?php $link02_link = get_sub_field( 'link02-link' ); ?>
            <?php if ( $link02_link ) : ?>


              <a href="<?php echo esc_url( $link02_link['url'] ); ?>" target="<?php echo esc_attr( $link02_link['target'] ); ?>" class="etc__com02__btn w-inline-block">
              <div class="etc__com02__btn-p"><?php the_sub_field( 'link02-title' ); ?></div>
              </a>

            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>











      </div>




      <div class="etc__com03">




          <!-- order-table div add script-->
            <?php the_field( 'foot_contents' ); ?>
            <script>
              $( "table" ).wrap( "<div class='order__table'></div>" );
            </script>

          </div>
      </div>
  </div>


<?php endwhile; endif;?>



<style>

  /* .etc__com03 table tr td:nth-child(1) {
    border-bottom: 1px solid #e7e7e7;
    background-color: #f6f6f6;
  } */
  .etc__com03 .order__table {
    overflow-x:auto;
    border-top: 1px solid #333 !important;
  }
  .etc__com03 .order__table {
    margin-bottom: 10px !important;
  }
  .etc__com03 h4 {
    padding-bottom: 15px;
    margin-bottom: 0px;
    transform: translateY(1px);
  }
  .etc__com03 tbody {
    border-right: 1px solid #e7e7e7 !important;
    border-left: 1px solid #e7e7e7 !important;
  }
  .order__table table td:last-child {
    border-right: 1px solid #e7e7e7 !important;
  }

</style>



  <?php get_footer(); ?>