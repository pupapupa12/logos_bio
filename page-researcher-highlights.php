<?php get_header(); ?>



<div class="line__hero">
    <div class="l__1260">
      <div class="line__hero__flex">
        <div class="line__hero__linkname" data-ix="load1">Customer Reviews  <span class="line__hero__linkname-red">&gt;</span> <span class="line__hero__linkname-red">Researcher highlights</span></div>
        <div class="line__hero__f1" data-ix="load-2">Researcher highlights</div>
        <div class="line__hero__line" data-ix="load-2"></div>
      </div>
    </div>
  </div>


  <div class="sub__wrap" data-ix="scroll">
    <div class="l__1260">
      <div class="sidebar__flex">
        <div class="sidebar__left-col">
          <div class="sidebar__box">


          <?php echo do_shortcode('[ajax_load_more_filters id="researcher_highlights_filter" target="1294466954"]');?>



        </div>
      </div>
      <div class="sidebar__right-col-two">




        <?php echo do_shortcode('[ajax_load_more id="1294466954" target="researcher_highlights_filter" orderby="menu_order" filters="true" repeater="template_2" post_type="researcher_highlight" posts_per_page="6" taxonomy="researcher_highlights_category" ]');?>




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






/* ajax Researcher highlights flex */
.alm-reveal.alm-filters {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-align-content: flex-start;
  -ms-flex-line-pack: start;
  align-content: flex-start;
}

@media screen and (max-width: 767px){
  .page-id-4105 .alm-reveal.alm-filters {
      width: 100%;
      padding-left: 0px;
  }
}





</style>


  <?php get_footer(); ?>