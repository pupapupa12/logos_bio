<?php get_header(); ?>



  <div class="line__hero noline">
    <div class="l__1260">
      <div class="line__hero__flex">
        <div class="line__hero__f1 center" data-ix="load-2">Search</div>
      </div>
    </div>
  </div>
  <div class="sitemap__com01" data-ix="scroll">
    <div class="l__1260">




          <div class="sitemap__f1">result: <span style="color:#c10606"><?php echo $s ; ?></span></div>







          <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post() ;
            ?>




                <div class="sitemap__col-in">
                  <a href="<?php the_permalink(); ?>">
                  <div class="sitemap__f2--span" style="font-weight: 500; color:#333; padding: 8px 0px;"><?php the_title(); ?></div>
                    <div style="color:#bfbfbf"><?php the_excerpt(); ?></div>
                  </a>
                </div>



          <?php
          endwhile;
          else :
          ?>

            <p style="padding:20px; margin: 0 auto;text-align: center; margin-bottom: 50px;">Sorry, but nothing matched your search.</p>
          <?php
          endif;
          ?>

          <!-- 끝 -->






      </div>
    </div>
  </div>




  <?php get_footer(); ?>