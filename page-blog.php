<?php get_header(); ?>




  <div class="sub__hero-small blog">
    <div class="l__1260">
      <div class="sub__hero__flex">
        <div class="sub__hero-small__f1" data-ix="load1">Blog</div>
      </div>
    </div>
  </div>
  <div class="sub__wrap" data-ix="scroll">
    <div class="l__1260">
      <div class="sidebar__flex">
        <div class="sidebar__left-col">
          <div class="sidebar__box">




          <?php echo do_shortcode('[ajax_load_more_filters id="blog_filter" target="7286268394"]');?>




          </div>
        </div>
        <div class="sidebar__right-col">




        <?php echo do_shortcode('[ajax_load_more id="7286268394" target="blog_filter" orderby="menu_order" filters="true" repeater="template_16" post_type="post" posts_per_page="6" taxonomy="category" ]');?>






        </div>
      </div>
    </div>
  </div>



  <style>

/* filter  */

.alm-filters-container .alm-filter ul ul {
  padding-top: 0px !important;
  padding-left: 0px !important;
}


/* counting */

.field-checkbox {
  display: inline-block !important;
  margin-right: 10px !important;
  margin-bottom: 10px !important;
  padding: 8px 12px !important;
  border: 1px solid #e7e7e7 !important;
  -webkit-transition: all 300ms ease !important;
  transition: all 300ms ease !important;
  font-size: 13px !important;
}
.field-checkbox.active {
    border-color: #c10606 !important;
    background-color: #c10606 !important;
    color: #fff !important;
}
@media screen and (max-width: 767px){
  .field-checkbox{

  }
}
.field-checkbox::after, .field-checkbox::before {display: none !important;}


.alm-filters-container .alm-filter--inner {
    padding: 0 !important;
}
.alm-filters-container {
    margin-bottom: 0px !important;
}

.alm-filters-container .alm-filter li {
    display: inline-block !important;
}


/* in page */
.ajax-load-more-wrap {border-top: 1px solid #e7e7e7;}
@media screen and (max-width: 767px){
    .ajax-load-more-wrap {border-top: 0px}
  }



</style>



  <?php get_footer(); ?>