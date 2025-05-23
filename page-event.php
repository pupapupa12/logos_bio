
<?php get_header(); ?>






  <div class="line__hero">
    <div class="l__1260">
      <div class="line__hero__flex">
        <div class="line__hero__linkname" data-ix="load1">About Us <span class="line__hero__linkname-red">&gt;</span>
          <a href="https://biosystems-3c4557.webflow.io/application-notes#"><span class="line__hero__linkname-red">Events</span></a>
        </div>
        <div class="line__hero__f1" data-ix="load-2">Events</div>
        <div class="line__hero__line" data-ix="load-2"></div>
      </div>
    </div>
  </div>
  <div class="sub__wrap" data-ix="scroll">
    <div class="l__1260">
      <div class="promo__flex">



      <?php echo do_shortcode('[ajax_load_more id="3972605785" repeater="template_14" post_type="event_" posts_per_page="6"]');?>






      </div>
    </div>
  </div>


<style>
  .ajax-load-more-wrap{
    width:100%;
  }
  .alm-reveal {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-right: -1%;
    margin-left: -1%;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
  }
</style>



  <?php get_footer(); ?>