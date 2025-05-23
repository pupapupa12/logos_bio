<?php get_header(); ?>




  <div class="line__hero">
    <div class="l__1260">
      <div class="line__hero__flex">
        <div class="line__hero__linkname" data-ix="load1">Resources &gt; Technical Documents <span class="line__hero__linkname-red">&gt;</span>
          <span class="line__hero__linkname-red">Brochures</span>
        </div>
        <div class="line__hero__f1" data-ix="load-2">Brochures</div>
        <div class="line__hero__line" data-ix="load-2"></div>
      </div>
    </div>
  </div>
  <div class="sub__wrap" data-ix="scroll">
    <div class="l__1260">
      <div class="sidebar__flex">
        <div class="sidebar__left-col">
          <div class="sidebar__box">




          <?php echo do_shortcode('[ajax_load_more_filters id="brochures_filter" target="6074919768"]');?>





          </div>
        </div>
        <div class="sidebar__right-col">







        <?php echo do_shortcode('[ajax_load_more id="6074919768" target="brochures_filter" orderby="menu_order" filters="true" repeater="template_9" post_type="brochures_" posts_per_page="8"]');?>





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

.field-cell-counting {
  display: block !important;
  margin-bottom: 25px !important;
  font-size: 18px !important;
  font-weight: 700 !important;
  padding-left: 0 !important;
}
@media screen and (max-width: 767px){
  .field-cell-counting{
    margin-bottom: 15px !important;
    font-size: 14px !important;
  }
}
.field-cell-counting::after, .field-cell-counting::before {display: none !important;}


/* imaging */

.field-cell-imaging {
  display: block !important;
  margin-bottom: 25px !important;
  font-size: 18px !important;
  font-weight: 700 !important;
  padding-left: 0 !important;
}
@media screen and (max-width: 767px){
  .field-cell-imaging{
    margin-bottom: 15px !important;
    font-size: 14px !important;
  }
}
.field-cell-imaging::after, .field-cell-imaging::before {display: none !important;}


/* tissue-clearing */

.field-tissue-clearing {
  display: block !important;
  margin-bottom: 25px !important;
  font-size: 18px !important;
  font-weight: 700 !important;
  padding-left: 0 !important;
}
@media screen and (max-width: 767px){
  .field-tissue-clearing{
    margin-bottom: 15px !important;
    font-size: 14px !important;
  }
}
.field-tissue-clearing::after, .field-tissue-clearing::before {display: none !important;}




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