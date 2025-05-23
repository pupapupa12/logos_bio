<?php get_header(); ?>




  <div class="line__hero">
    <div class="l__1260">
      <div class="line__hero__flex">
        <div class="line__hero__linkname" data-ix="load1">Support &gt; CoA & MSDS <span class="line__hero__linkname-red">&gt;</span>
          <span class="line__hero__linkname-red">MSDS</span>
        </div>
        <div class="line__hero__f1" data-ix="load-2">Material safety data sheets</div>
        <div class="line__hero__line" data-ix="load-2"></div>
      </div>
    </div>
  </div>
  <div class="sub__wrap" data-ix="scroll">
    <div class="l__1260">
      <div class="sidebar__flex">
        <div class="sidebar__left-col">
          <div class="sidebar__box">




          <?php echo do_shortcode('[ajax_load_more_filters id="msds_filter" target="8414883194"]');?>





          </div>
        </div>
        <div class="sidebar__right-col">







        <?php echo do_shortcode('[ajax_load_more id="8414883194" target="msds_filter" orderby="menu_order" filters="true" repeater="template_11" post_type="msds_" posts_per_page="8"]');?>





        </div>
      </div>
    </div>
  </div>


  <style>



/* filter  */

.alm-filters-container {
    margin-bottom: 0px;
}

.alm-filters-container .alm-filter ul ul {
  padding-top: 0px !important;
  padding-left: 0px !important;
}



li.alm-filter--radio li:nth-last-child(1) {
  margin-bottom: 35px;
}
@media screen and (max-width: 767px) {
  li.alm-filter--radio li:nth-last-child(1) {
    margin-bottom: 15px;
  }
}

li.alm-filter--radio:nth-last-child(1) li:nth-last-child(1) {
  margin-bottom: 0px;
}


.alm-filters-container .alm-filter--inner {
  padding: 0 !important;
}

.sidebar__box {
  padding: 40px 30px 20px;
}




/* white papers.. */


.ajax-load-more-wrap {border-top: 1px solid #e7e7e7;}
@media screen and (max-width: 767px){
    .ajax-load-more-wrap {border-top: 0px}
  }
.alm-filters-container .alm-filters-edit{display: none !important;}




</style>




  <?php get_footer(); ?>