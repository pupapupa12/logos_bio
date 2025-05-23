<?php get_header(); ?>




  <div class="line__hero">
    <div class="l__1260">
      <div class="line__hero__flex">
        <div class="line__hero__linkname" data-ix="load1">About Us <span class="line__hero__linkname-red">&gt;</span>
          <span class="line__hero__linkname-red">News</span>
        </div>
        <div class="line__hero__f1" data-ix="load-2">News</div>
        <div class="line__hero__line" data-ix="load-2"></div>
      </div>
    </div>
  </div>

  <div class="sub__wrap" data-ix="scroll">
    <div class="l__1260">
      <div class="news__wrap">


        <div class="news__card__flex first">
          <div class="news__card__col02">
            <p class="news__card__f1">Title</p>
          </div>
          <div class="news__card__col03">
            <p class="news__card__f1">Date</p>
          </div>
        </div>


        <?php echo do_shortcode('[ajax_load_more seo="true" repeater="template_13"  paging="true" paging_controls="true" paging_show_at_most="0" paging_scroll="true;50" post_type="news" posts_per_page="10" css_classes="seo-paging"]');?>





      </div>
    </div>
  </div>


  <style>
    ul.alm-paging li a {
    display: block;
    padding: 12px 12px;
    margin: 0 4px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    color: #333;
    border: 1px solid #f1f1f1;
    background: white;
    text-decoration: none;
    -webkit-transition: all .15s ease;
    -o-transition: all .15s ease;
    transition: all .15s ease;
  }

  ul.alm-paging li.active a {
    background: #d72213;
    border-color: #d72213;
    color: #fff;
    cursor: default;
    text-decoration: none;
}
  </style>






  <?php get_footer(); ?>