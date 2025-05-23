
<?php get_header(); ?>





  <div class="sub__hero-small acc-04">
    <div class="l__1260">
      <div class="sub__hero__flex">
        <div class="sub__hero-small__f1" data-ix="load1">Accessories</div>
      </div>
    </div>
  </div>
  <div class="sub__wrap" data-ix="scroll">
    <div class="l__1260">



      <div class="acc__tab__wrap">


      <?php echo do_shortcode('[ajax_load_more_filters id="cell_imaging_acc_filter" target="5329056457"]');?>


      </div>




      <div class="acc__flex">



      <?php echo do_shortcode('[ajax_load_more id="5329056457" target="cell_imaging_acc_filter" orderby="menu_order" filters="true" repeater="template_17" post_type="cell_imaging_acc" posts_per_page="12" taxonomy="cell_imaging_acc_category"]');?>


      </div>
    </div>
  </div>



  <style>

/* tab   */

.alm-filters-container {
    margin-bottom: 0px !important;
}
.alm-filters-container .alm-filter--inner {
    padding: 0px !important;
}

.alm-filters-container .alm-filter ul ul {
  padding-top: 0px !important;
  padding-left: 0px !important;
}

.alm-filter--inner > ul {
    display: -webkit-box !important;
    display: -webkit-flex !important;
    display: -ms-flexbox !important;
    display: flex !important;

    -webkit-flex-wrap: wrap !important;
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
}


@media screen and (max-width: 767px){
  .alm-filter--radio  {
      width: 100% !important;
  }
}

.alm-filters-container .alm-filter li {
    margin: 0 !important;
}
@media screen and (max-width: 767px){
  .alm-filters-container .alm-filter li {
    margin-bottom: 4px !important;
}
}


.alm-filter--link {
    margin-right: 25px !important;
    margin-bottom: 0 !important;
    padding-top: 15px !important;
    padding-bottom: 15px !important;
    font-size: 16px !important;
}
@media screen and (max-width: 767px){
  .alm-filter--link {
    font-size: 14px !important;
    margin-bottom: 4px !important;
    margin-top: 4px !important;
    padding-top: 10px !important;
    padding-bottom: 10px !important;
}
}

.alm-filter--link.active {
    box-shadow: 0 2px 0 0 #c10606 !important;
    color: #c10606 !important;
}
@media screen and (max-width: 767px){
  .alm-filter--link.active {
    margin-bottom: 4px !important;
    margin-top: 4px !important;
    padding-top: 10px !important;
    padding-bottom: 10px !important;
}
}

.alm-filter--link::before {
  display: none !important;
}
.alm-filter--link::after {
  display: none !important;
}


.alm-filters-container .alm-filter li div.alm-filter--link {
    padding: 0 0 15px 0 !important;
}
@media screen and (max-width: 767px){
  .alm-filters-container .alm-filter li div.alm-filter--link {
    padding: 0 0 10px 0 !important;
}
}


/* flex */
.ajax-load-more-wrap{width:100%}


/* in page.. */

.alm-filters-container .alm-filters-edit{display: none !important;}

.alm-reveal.alm-filters{
    display: -webkit-box !important;
    display: -webkit-flex !important;
    display: -ms-flexbox !important;
    display: flex !important;
    margin-right: -1% !important;
    margin-left: -1% !important;
    -webkit-flex-wrap: wrap !important;
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
}




</style>


  <?php get_footer(); ?>