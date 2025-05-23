<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="single__hero">
    <div class="l__1260">
        <div class="line__hero__flex single">
            <div class="single__hero__f1" data-ix="load1"><?php the_title(); ?></div>
            <div class="single__hero__f2" data-ix="load1"><?php echo the_date(); ?></div>
        </div>
    </div>
</div>
<div class="sub__wrap single" data-ix="load-2">
    <div class="l__1260">
        <div class="single__wrap">



            <?php the_content();?>


            <div class="single__video-cta">
                <div class="single__video-cta__line"></div>
                <div class="single__video-cta__f1">LOGOS BIOSYSTEMS - Official Channel</div>
                <div class="single__video-cta__btnwrap"><a
                        href="https://www.youtube.com/channel/UCtOafXCt2BAQ332JOsm2HLg" target="_blank"
                        class="single__video-cta__link w-inline-block"><img
                            src="https://assets.website-files.com/6296f10a953f798e3a08903b/62ac23067da4f8d5b129dc68_video-icon01.svg"
                            loading="lazy" alt=""></a><a
                        href="https://www.youtube.com/channel/UCtOafXCt2BAQ332JOsm2HLg?sub_confirmation=1"
                        target="_blank" class="single__video-cta__link w-inline-block"><img
                            src="https://assets.website-files.com/6296f10a953f798e3a08903b/62ac2329c6a2b0ca0862d53c_video-icon02.svg"
                            loading="lazy" alt=""></a></div>
                <div class="single__video-cta__f2"><a href="https://www.youtube.com/playlist?list=PLFJdSpgEQ7I6CELy8RYql6XEueUQ5U5Dc">Customer’s talk videos</a>
                    <span class="single__video-cta__f2--span">/</span> <a href="https://www.youtube.com/playlist?list=PLFJdSpgEQ7I78VrCpbPJ6x42ZgKsnd5MY">Introduction &amp; Information</a>
                    <span class="single__video-cta__f2--span">/</span> <a href="https://www.youtube.com/playlist?list=PLFJdSpgEQ7I7obdcplE2O1say1KOTIucN">Our specialists say videos</a>
                    <span class="single__video-cta__f2--span">/</span> <a href="https://www.youtube.com/playlist?list=PLFJdSpgEQ7I6LaXTI7OnRlH6XHMe-PRhl">Application videos</a>
                    <span class="single__video-cta__f2--span">/</span> <a href="https://www.youtube.com/playlist?list=PLFJdSpgEQ7I5CK0lIW5l_RbCvYCAYG2Bn">How to use videos</a>
                    <span class="single__video-cta__f2--span">/</span> <a href="https://www.youtube.com/playlist?list=PLFJdSpgEQ7I4TGnAJ4pqswLVWd5Fc06_y">Webinars</a>
                </div>
            </div>
        </div>
        <div class="single__btn-wrap">
            <a href="javascript:history.back();" class="single__btn w-inline-block" data-ix="load-3">
                <div>Back</div>
            </a>
        </div>
    </div>
</div>

<style>
  .single__video-cta a:hover {
    color: #d72213;
  }
</style>

<?php endwhile; endif;?>
<?php get_footer(); ?>