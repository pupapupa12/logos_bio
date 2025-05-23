<?php get_header(); ?>




<div class="line__hero noline">
    <div class="l__1260">
        <div class="line__hero__flex">
            <div class="line__hero__f1" data-ix="load-2">Contact Us</div>
            <div class="line__hero__f2" data-ix="load-3">We Are Headquartered In South Korea, With Offices In The United
                States And France.</div>
        </div>
    </div>
</div>
<div class="contact__com01" data-ix="scroll">
    <div class="l__1260">
        <div class="contact__com01__flex">
            <div class="contact__com01__col">
                <div class="contact__com01__card-in">
                    <div class="contact__com01__f1">HEADQUARTERS</div>
                    <div class="contact__com01__f2">FL 3 28 Simindaero 327beon-gil, Dongan-gu Anyang-si, Gyeonggi-do
                        14055 South Korea</div>
                    <div class="contact__com01__f3">
                        <a href="<?php echo get_home_url(); ?>/email-us">Email us : click here &gt;</a>
                    </div>
                    <div class="contact__com01__f4">Tel : +82 (31) 478-4185<br>Fax : +82 (31) 360-4277</div>
                </div>
            </div>
            <div class="contact__com01__col">
                <div class="contact__com01__card-in">
                    <div class="contact__com01__f1">USA</div>
                    <div class="contact__com01__f2">7700 Little River Turnpike STE 207 Annandale, VA 22003 USA</div>
                    <div class="contact__com01__f3">
                        <a href="<?php echo get_home_url(); ?>/email-us">Email us : click here &gt;</a>
                    </div>
                    <div class="contact__com01__f4">Tel : +1 (703) 622-4660, +1 (703) 942-8867<br>Fax : +1 (571)
                        266-3925</div>
                </div>
            </div>
            <div class="contact__com01__col">
                <div class="contact__com01__card-in">
                    <div class="contact__com01__f1">EUROPE</div>
                    <div class="contact__com01__f2">1 allée Lavoisier 59650 Villeneuve d’Ascq France</div>
                    <div class="contact__com01__f3">
                        <a href="<?php echo get_home_url(); ?>/email-us">Email us : click here &gt;</a>
                    </div>
                    <div class="contact__com01__f4">Tel : +33 (0)3 74 09 44 35<br>Fax : +33 (0)3 59 35 01 98</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact__com02" data-ix="scroll">
    <div class="l__1260">
        <div class="contact__com02__top">
            <div class="contact__com02__f1">WE HAVE DEDICATED DISTRIBUTORS AROUND THE GLOBE. FIND THE DISTRIBUTOR
                NEAREST YOU.</div><img src="<?php echo get_template_directory_uri();?>/images/contact-map.svg"
                loading="lazy" alt="" class="contact__com01__map">
        </div>
        <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="w-tabs">
            <div class="w-tab-menu">
                <a data-w-tab="Tab 1" class="w-inline-block w--current w-tab-link contact__com02__tablink">
                    <div>EUROPE</div>
                </a>
                <a data-w-tab="Tab 2" class="w-inline-block w-tab-link contact__com02__tablink">
                    <div>NORTH AMERICA</div>
                </a>
                <a data-w-tab="Tab 3" class="w-inline-block w-tab-link contact__com02__tablink">
                    <div>MIDDLE EAST</div>
                </a>
                <a data-w-tab="Tab 4" class="w-inline-block w-tab-link contact__com02__tablink">
                    <div>SOUTH AMERICA</div>
                </a>
                <a data-w-tab="Tab 5" class="w-inline-block w-tab-link contact__com02__tablink">
                    <div>AFRICA</div>
                </a>
                <a data-w-tab="Tab 6" class="w-inline-block w-tab-link contact__com02__tablink">
                    <div>OCEANIA</div>
                </a>
                <a data-w-tab="Tab 7" class="w-inline-block w-tab-link contact__com02__tablink">
                    <div>ASIA</div>
                </a>
            </div>




            <?php the_content() ?>






        </div>
    </div>
</div>



<?php get_footer(); ?>