<?php get_header(); ?>



<div class="sub__hero">
   <div class="l__1260">
      <div class="sub__hero__flex">
         <div class="sub__hero__f1" data-ix="load1">Photo Testimonials</div>
         <p class="sub__hero__f2" data-ix="load-2">Peer-tested and peer-reviewed! <br>
Real feedback and reviews by researchers and scientists from around the world.</p>
      </div>
   </div>
</div>


  <div class="sub__wrap" data-ix="scroll">
    <div class="l__1260">
    <div class="image__hero__linkname" data-ix="load1">Customer Reviews  <span class="line__hero__linkname-red">&gt;</span> <span class="line__hero__linkname-red">Photo Testimonials</span></div>
      <div class="sidebar__flex">
        <div class="sidebar__left-col">
          <div class="sidebar__box">


          <?php echo do_shortcode('[ajax_load_more_filters id="photo_testimonials_filter" target="57383827"]');?>



        </div>


        <div class="sidebar__banner-wrap">
               <a href="https://logosbio.com/event_/advancing-research-one-review-and-one-photo-at-a-time/" class="sidebar__banner w-inline-block"><img src="<?php  echo get_template_directory_uri();?>/images/reivew_banner2.jpg" alt="">
               </a>
        </div>



      </div>
      <div class="sidebar__right-col-two">




        <?php echo do_shortcode('[ajax_load_more id="57383827" target="photo_testimonials_filter" orderby="menu_order" filters="true" repeater="template_18" post_type="photo_testimonials" posts_per_page="6" taxonomy="photo_testimonials_category" ]');?>




        </div>
      </div>
    </div>
  </div>

  <style>




.sub__hero {
    background-image: url(<?php echo get_template_directory_uri();?>/images/new--photo-testimonials.jpg);
    background-position: 100%;
    background-repeat: no-repeat;
    background-size: cover;
}


.gallery__card img {
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.sidebar__right-col-two {
  display: block;
}

.gallery__card .imgwrap {
    position: relative;
    padding-top: 100%;
}



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
  .page-id-8922 .alm-reveal.alm-filters {
      width: 100%;
      padding-left: 0px;
  }
}





</style>


  <?php get_footer(); ?>