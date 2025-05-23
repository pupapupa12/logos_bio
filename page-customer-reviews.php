<?php get_header(); ?>


<div class="sub__hero cr">
   <div class="l__1260">
      <div class="sub__hero__flex">
         <div class="sub__hero__f1" data-ix="load1">Customer Reviews</div>
         <p class="sub__hero__f2" data-ix="load-2">We value our customers&#x27; feedback and experiences.Learn what
            your peers say about our products and make more confident and well-informed decisions.</p>
      </div>
   </div>
</div>




<div class="sub__wrap" data-ix="scroll">
   <div class="l__1260">
      <div class="image__hero__linkname" data-ix="load1">Customer Reviews  <span class="line__hero__linkname-red">&gt;</span> <span class="line__hero__linkname-red">Customer
            Reviews</span></div>
      <div class="sidebar__flex">
         <div class="sidebar__left-col">

            <div class="sidebar__box">




               <?php echo do_shortcode('[ajax_load_more_filters id="customer_reviews_filter" target="7067327119"]');?>




            </div>


            <div class="sidebar__banner-wrap">
               <a href="https://logosbio.com/event_/advancing-research-one-review-and-one-photo-at-a-time/" class="sidebar__banner w-inline-block"><img src="<?php  echo get_template_directory_uri();?>/images/reivew_banner2.jpg" alt="">
               </a>
            </div>



         </div>
         <div class="sidebar__right-col">
            <p style="color: #a0a0a0;font-size: 14px;margin-bottom: 20px;">The reviews below have cited reviews left by customers on SelectScience and BioCompare.</p>
            <div class="cr01__total">Total <span class="alm-results-text cr01__total--span"></span> reviews</div>



            <?php echo do_shortcode('[ajax_load_more id="7067327119" target="customer_reviews_filter" orderby="menu_order" filters="true" repeater="template_1" post_type="customer_reviews" posts_per_page="8" taxonomy="customer_reviews_category"]');?>



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

@media screen and (max-width: 767px) {
   .field-cell-counting {
      margin-bottom: 15px !important;
      font-size: 14px !important;
   }
}

.field-cell-counting::after,
.field-cell-counting::before {
   display: none !important;
}


/* imaging */

.field-cell-imaging {
   display: block !important;
   margin-bottom: 25px !important;
   font-size: 18px !important;
   font-weight: 700 !important;
   padding-left: 0 !important;
}

@media screen and (max-width: 767px) {
   .field-cell-imaging {
      margin-bottom: 15px !important;
      font-size: 14px !important;
   }
}

.field-cell-imaging::after,
.field-cell-imaging::before {
   display: none !important;
}


/* tissue-clearing */

.field-tissue-clearing {
   display: block !important;
   margin-bottom: 25px !important;
   font-size: 18px !important;
   font-weight: 700 !important;
   padding-left: 0 !important;
}

@media screen and (max-width: 767px) {
   .field-tissue-clearing {
      margin-bottom: 15px !important;
      font-size: 14px !important;
   }
}

.field-tissue-clearing::after,
.field-tissue-clearing::before {
   display: none !important;
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




/* review */

.pro__com04__f4 span {
   font-family: Inter, sans-serif !important;
}

.ajax-load-more-wrap {
   border-top: 1px solid #e7e7e7;
}

/* ajax review 모바일 세팅 */
@media screen and (max-width: 767px) {
   .ajax-load-more-wrap {
      border-top: 0px
   }
}

.alm-filters-container .alm-filters-edit {
   display: none !important;
}


/* ajax review 모바일 세팅 */
@media screen and (max-width: 991px) {
   .page-id-1625 .sidebar__left-col {
      min-width: 240px;
   }
}

@media screen and (max-width: 767px) {
   .sidebar__banner-wrap iframe {
      display: none;
   }
}
</style>

<?php get_footer(); ?>