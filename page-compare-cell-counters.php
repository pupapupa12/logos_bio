<?php get_header(); ?>


<!-- 슬라이드 스크립트 및 스타일 완료되어있다 신제품 나오면 적용 -->

<style>
  .l__1260.scroll {
    overflow-x: hidden;
  }

  .compare__flex {
    min-width: 1400px;
  }

  .compare__table {
    min-width: 1400px;
  }

  .u__scroll {
    overflow: scroll;
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
  }

  .u__scroll::-webkit-scrollbar {
      display: none; /* Safari and Chrome */
  }

  .u__scorll-btnwrap {
    width: 1200px;
    max-width: 100%;
    margin: 0 auto;
    position: relative;
    height: 0;
    top: 190px;
    display: flex;
    justify-content: space-between;
    z-index: 1;


  }

  @media screen and (max-width: 1366px) {
    .u__scorll-btnwrap {
      top: 130px;
    }
  }

  @media screen and (max-width: 767px) {
    .u__scorll-btnwrap {
      display: none;
    }
  }
</style>


<div class="u__scroll__guide" data-ix="swipe-wrap-view"><img src="<?php echo get_template_directory_uri(); ?>/images/swipe-icon.svg" loading="lazy" alt="" class="swipe-icon" data-ix="swipe-icon"></div>
<div class="line__hero">
  <div class="l__1260">
    <div class="line__hero__flex">
      <div class="line__hero__linkname" data-ix="load1">Cell Counting  <span class="line__hero__linkname-red">&gt;</span> <span class="line__hero__linkname-red">Compare Cell Counters</span></div>
      <div class="line__hero__f1" data-ix="load-2">Compare Cell Counters</div>
      <div class="line__hero__line" data-ix="load-2"></div>
    </div>
  </div>
</div>
<div class="u__scorll-btnwrap">
  <a href=" #" id="scrollLeftButton">
    <img src="<?php echo get_template_directory_uri(); ?>/images/scroll-left-btn.svg" width="34" alt="">
  </a>
  <a href="#" id="scrollRightButton">
    <img src="<?php echo get_template_directory_uri(); ?>/images/scroll-right-btn.svg" width="34" alt="">
  </a>
</div>
<div class="sub__wrap" data-ix="scroll">
  <div class="l__1260 scroll">
    <div class="u__scroll">
      <div class="compare__flex">
      <div class="m-bg-none campare__card">
          <a href="<?php echo get_home_url(); ?>/luna-bx7" class="w-inline-block campare__card-link"><img src="<?php echo get_template_directory_uri(); ?>/images/sellover-hero-bx7.png" loading="lazy" width="177" alt="" class="campare__card-img">
            <div class="campare__card__f1">LUNA-BX7™</div>
            <div class="campare__card__f2">Automated Cell Counter &gt;</div>
          </a>
        </div>
        <div class="m-bg-none campare__card">
          <a href="<?php echo get_home_url(); ?>/luna-lll" class="w-inline-block campare__card-link"><img src="<?php echo get_template_directory_uri(); ?>/images/sellover-hero-luna3.png" loading="lazy" width="177" alt="" class="campare__card-img">
            <div class="campare__card__f1">LUNA-III™</div>
            <div class="campare__card__f2">Automated Cell Counter &gt;</div>
          </a>
        </div>
        <div class="m-bg-none campare__card">
          <a href="<?php echo get_home_url(); ?>/luna-ll" class="w-inline-block campare__card-link"><img src="<?php echo get_template_directory_uri(); ?>/images/sellover-hero01.png" loading="lazy" width="177" alt="" class="campare__card-img">
            <div class="campare__card__f1">LUNA-II™</div>
            <div class="campare__card__f2">Automated Cell Counter &gt;</div>
          </a>
        </div>
        <div class="m-bg-none campare__card">
          <a href="<?php echo get_home_url(); ?>/luna-fx7" class="w-inline-block campare__card-link"><img src="<?php echo get_template_directory_uri(); ?>/images/sellover-hero02.png" loading="lazy" width="177" alt="" class="campare__card-img">
            <div class="campare__card__f1">LUNA-FX7™</div>
            <div class="campare__card__f2">Automated Cell Counter &gt;</div>
          </a>
        </div>
        <div class="m-bg-none campare__card">
          <a href="<?php echo get_home_url(); ?>/luna-fl" class="w-inline-block campare__card-link"><img src="<?php echo get_template_directory_uri(); ?>/images/sellover-hero03.png" loading="lazy" width="177" alt="" class="campare__card-img">
            <div class="campare__card__f1">LUNA-FL™</div>
            <div class="campare__card__f2">Dual Fluorescence<br>Cell Counter &gt;</div>
          </a>
        </div>
        <div class="m-bg-none campare__card">
          <a href="<?php echo get_home_url(); ?>/luna-stem" class="w-inline-block campare__card-link"><img src="<?php echo get_template_directory_uri(); ?>/images/sellover-hero04.png" loading="lazy" width="177" alt="" class="campare__card-img">
            <div class="campare__card__f1">LUNA-STEM™</div>
            <div class="campare__card__f2">Automated Fluorescence<br>Cell Counter &gt;</div>
          </a>
        </div>
        <!-- <div class="m-bg-none campare__card">
          <a href="<?php echo get_home_url(); ?>/luna-ll-yf" class="w-inline-block campare__card-link"><img src="<?php echo get_template_directory_uri(); ?>/images/sellover-hero05.png" loading="lazy" width="177" alt="" class="campare__card-img">
            <div class="campare__card__f1">LUNA-II YF™</div>
            <div class="campare__card__f2">Automated Yeast<br>Cell Counter &gt;</div>
          </a>
        </div> -->
        <div class="m-bg-none campare__card">
          <a href="<?php echo get_home_url(); ?>/quantom-tx" class="w-inline-block campare__card-link"><img src="<?php echo get_template_directory_uri(); ?>/images/sellover-hero06.png" loading="lazy" width="177" alt="" class="campare__card-img">
            <div class="campare__card__f1">QUANTOM Tx™</div>
            <div class="campare__card__f2">Microbial Cell Counter &gt;</div>
          </a>
        </div>
      </div>
      <div class="compare__table__f1">Main Features<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">Efficient cell counter designed for brightfield cell analysis. An excellent choice for higher throughput and/or regulatory needs.</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Versatile and affordable cell counter.</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Most affordable cell counter.</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Versatile cell counter that serves a wide variety of applications. An excellent choice for higher throughput and/or regulatory needs.</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Versatile and affordable fluorescence cell counter with manual focus.</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Fluorescence cell counter specialized for SVF derived- cells.</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">Affordable yeast cell counter.</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">Image-based bacterial cell counter.</div>
        </div>
      </div>
      <div class="compare__table__f1">Cell Types<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">Stable cell lines</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Stable cell lines</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Stable cell lines</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell lines<br>Primary cells<br>Whole blood<br>PBMCs<br>Splenocyte<br>Thymocyte<br>Yeast cells</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell lines<br>Primary cells<br>Blood cells<br>PBMCs<br>Splenocyte<br>Thymocyte<br>Yeast cells<br>GFP expressing cells</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Stem cells<br>SVF-derived cells<br>• Nucleated<br>• Non-nucleated</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">Yeast cells</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">Bacterial cells</div>
        </div>
      </div>
      <div class="compare__table__f1">Detection Method<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">Brightfield</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Brightfield</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Brightfield</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Dual fluorescence<br>Brightfield</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Dual fluorescence<br>Brightfield</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Dual fluorescence</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">Dual fluorescence</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">Fluorescence</div>
        </div>
      </div>
      <div class="compare__table__f1">Compatible Dyes<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">Trypan blue<br>Erythrosin B<br>Methylene Blue</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Trypan blue<br>Erythrosin B</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Trypan blue<br>Erythrosin B</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Trypan blue<br>Erythrosin B<br>Acridine orange<br>Propidium iodide<br>Fluorescein diacetate</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Trypan blue<br>Erythrosin B<br>Acridine orange<br>Propidium iodide<br>Fluorescein diacetate</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Acridine orange<br>Propidium iodide</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">Acridine orange<br>Propidium iodide<br>Fluorescein diacetate</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">QUANTOM Total Cell<br>Staining Kit<br>QUANTOM Viable Cell<br>Staining Kit</div>
        </div>
      </div>
      <div class="compare__table__f1">Recommended Slide Options<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">PhotonSlides<br>LUNA™ 1-Channel Slide<br>LUNA™ 3-Channel Slide<br>LUNA™ 8-Channel Slide</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">LUNA™ Cell Counting Slides<br>LUNA™ Reusable Slide</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">LUNA™ Cell Counting Slides<br>LUNA™ Reusable Slide</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">PhotonSlides<br>LUNA™ 1-Channel Slide<br>LUNA™ 3-Channel Slide<br>LUNA™ 8-Channel Slide</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">PhotonSlide™<br>LUNA™ Reusable Slide</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">PhotonSlide™<br>LUNA™ Reusable Slide</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">PhotonSlide™<br>LUNA™ Reusable Slide</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">QUANTOM™ M50 <br>Cell Counting Slides</div>
        </div>
      </div>
      <div class="compare__table__f1">Focusing Options<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">Autofocus<br>Manual focus</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Autofocus<br>Manual focus</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Autofocus<br>Manual focus</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Autofocus<br>Manual focus</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Manual focus</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Manual focus</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">Autofocus<br>Manual focus</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">Autofocus<br>Manual focus</div>
        </div>
      </div>
      <div class="compare__table__f1">Counting Volume/Chamber<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">0.5 - 5.1 µL by slide types</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">0.5 µL</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">0.5 µL</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">0.5 - 5.1 µL by slide types</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">0.5 µL</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">0.5 µL</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">0.5 µL</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">&lt; 0.1 µL (10 images)</div>
        </div>
      </div>
      <div class="compare__table__f1">Counting Speed<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">&lt; 10 s (brightfield, without autofocus, 12 images)<br>&lt; 20 s (brightfield, with autofocus, 12 images)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">&lt; 10 s (manual focus)<br>&lt; 15 s (autofocus)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">&lt; 10 s (manual focus)<br>&lt; 15 s (autofocus)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">&lt; 10 s (brightfield, without autofocus, 12 images)<br>&lt; 20 s (brightfield, with autofocus, 12 images)<br>&lt; 30 s (fluorescence, without autofocus, 12 images)<br>&lt; 40 s (fluorescence, with autofocus, autofocus, 12 images)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">&lt; 10 s (brightfield)<br>&lt; 30 s (fluorescence)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">&lt; 30 s</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">&lt; 10 s (manual focus)<br>&lt; 15 s (autofocus)</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">&lt; 30 s (autofocus, 10 images)</div>
        </div>
      </div>
      <div class="compare__table__f1">Adjustable Protocol Parameters<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">Search size / Cell size<br>Cell detection sensitivity<br>Live cell sensitivity<br>Noise reduction<br>Dilution factor</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Search size / Cell size<br>Cell detection sensitivity<br>Live cell sensitivity<br>Noise reduction<br>Dilution factor</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell size<br>Declustering<br>Dilution factor<br>Live cell sensitivity<br>Noise reduction<br>Roundness</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Search size / Cell size<br>Cell detection sensitivity<br>Live cell sensitivity<br>Noise reduction<br>Fluorescence exposure<br>Fluorescence threshold<br>Dilution factor</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell size<br>Dilution factor<br>Fluorescence threshold<br>Live cell sensitivity<br>Noise reductionRoundness</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell size<br>Dilution factor<br>Fluorescence threshold<br>Noise reduction<br>Roundness</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">Fluorescent object size<br>Dilution factor<br>Fluorescence exposure<br>Light intensity</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">Fluorescent object size<br>Dilution factor<br>Roundness<br>Declustering<br>Multi-field imaging</div>
        </div>
      </div>
      <div class="compare__table__f1">Additional Features<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">Cell size gating<br>Cluster map<br>Dilution calculator<br>Review previous count<br>results<br>Bioprocess<br>Quality control<br>Reanalysis<br>Auto exposure</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell size gating<br>Cluster map<br>Dilution calculator<br>Review previous count<br>results<br>Auto exposure<br>Reanalysis</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell size gating<br>Cluster map<br>Dilution calculator<br>Review previous count <br>results<br>Auto exposure</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell size gating<br>Cluster map<br>Dilution calculator<br>Review previous count <br>results<br>Bioprocess<br>Quality control<br>Reanalysis<br>Auto exposure</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">GFP expression analysis<br>Cell size gating<br>Cluster map<br>Dilution calculator<br>Review previous count <br>results<br>Auto exposure</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell size gating<br>Cluster map<br>Dilution calculator<br>Review previous count <br>results</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">Fluorescent object size <br>gating<br>Dilution calculator<br>Review previous count <br>results</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">Fluorescent object size <br>gating<br>Dilution calculator<br>Review previous count <br>results<br>Reanalysis</div>
        </div>
      </div>
      <div class="compare__table__f1">IQOQ Protocol<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">Yes</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Yes</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Yes</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Yes</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Yes</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Yes</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">-</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">Yes</div>
        </div>
      </div>
      <div class="compare__table__f1">21 CFR Part 11 ready<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">Yes(With CountWire™ software)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">-</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">-</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Yes(With CountWire™ software)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">-</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">-</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">-</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">-</div>
        </div>
      </div>
      <div class="compare__table__f1">Saving Options<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">Cell count and viability data (CSV)<br>Raw image (TIF)<br>Analyzed image (annotated TIF)<br>Full report (PDF)<br>Bioprocess (Onboard, CSV, PNG graph images)<br>Quality Control (Onboard, CSV, PNG graph images)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell count and viability data (CSV)<br>Raw image (TIF)<br>Analyzed image (annotated TIF)<br>Full report (PDF)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell count and viability data (CSV)<br>Raw image (TIF)<br>Analyzed image (annotated TIF)<br>Full report (PDF)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell count and viability data (CSV)<br>Raw image (TIF)<br>Analyzed image (annotated TIF)<br>Full report (PDF)<br>Bioprocess (Onboard, CSV, PNG graph images)<br>Quality Control (Onboard, CSV, PNG graph images)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell count and viability data (CSV)<br>Raw image (TIF)<br>Analyzed image (annotated TIF)<br>Full report (PDF)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">Cell count and viability data (CSV)<br>Raw image (TIF)<br>Analyzed image (annotated TIF)<br>Full report (PDF)</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">Cell count and viability data (CSV)<br>Raw image (TIF)<br>Analyzed image (annotated TIF)<br>Full report (PDF)</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">Cell count data (CSV)<br>Raw image (TIF)<br>Analyzed image (annotated TIF)<br>Full report (PDF)</div>
        </div>
      </div>
      <div class="compare__table__f1">Data Transfer<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">USB memory stick, WiFi, Ethernet</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">USB memory stick<br>Ethernet</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">USB memory stick</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">USB memory stick, WiFi, Ethernet</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">USB memory stick</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">USB memory stick</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">USB memory stick</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">USB memory stick, WiFi</div>
        </div>
      </div>
      <div class="compare__table__f1">Technical Specifications<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">7” TFT LCD screen<br>1024 X 600 pixels<br>Built-in computer<br>External printer (optional)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">5” TFT LCD screen<br>800 X 480 pixels<br>Built-in computer<br>External printer (optional)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">5” TFT LCD screen<br>800 X 480 pixels<br>Built-in computer<br>Built-in printer (optional)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">7” TFT LCD screen<br>1024 X 600 pixels<br>Built-in computer<br>External printer (optional)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">7” TFT LCD screen<br>800 X 480 pixels<br>Built-in computer<br>External printer (optional)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">7” TFT LCD screen<br>800 X 480 pixels<br>Built-in computer<br>External printer (optional)</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">5” TFT LCD screen<br>800 X 480 pixels<br>Built-in computer<br>Built-in printer (optional)</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">10” TFT LCD screen<br>1280 x 800 pixels<br>Built-in computer<br>External printer (optional)</div>
        </div>
      </div>
      <div class="compare__table__f1">Onboard Storage<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">250GB / 1TB</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">10 GB</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">-</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">250GB / 1TB</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">-</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">-</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">-</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">128GB</div>
        </div>
      </div>
      <div class="compare__table__f1">Weight<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">4.5 kg (9.9 lb)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">1.8 kg (4.0 lb)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">1.6 kg (3.5 lb)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">4.5 kg (9.9 lb)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">1.8 kg (4 lb)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">1.8 kg (4 lb)</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">1.8 kg (3.9 lb)</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">10.8 kg (23.9 lb)</div>
        </div>
      </div>
      <div class="compare__table__f1">Dimensions<br></div>
      <div class="compare__table">
        <div class="campare__card">
          <div class="compare__table__f2">24.5 x 28 x 24 cm<br>(9.6 x 11.0 x 9.4 in)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">16 x 18 x 28 cm<br>(6.3 x 7.0 x 11.0 in)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">16 x 18 x 28 cm<br>(6.3 x 7.0 x 11.0 in)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">24.5 x 28 x 24 cm<br>(9.6 x 11.0 x 9.4 in)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">22 x 21 x 9 cm<br>(8.6 x 8.3 x 3.5 in)</div>
        </div>
        <div class="campare__card">
          <div class="compare__table__f2">22 x 21 x 9 cm<br>(8.6 x 8.3 x 3.5 in)</div>
        </div>
        <!-- <div class="campare__card">
          <div class="compare__table__f2">16 x 18 x 28 cm<br>(6.3 x 7.0 x 11.0 in)</div>
        </div> -->
        <div class="campare__card">
          <div class="compare__table__f2">43.3 × 31.0 × 22.5 cm<br>(17.0 x 12.2 x 8.8 in)</div>
        </div>
      </div>
      <div class="compare__table__f1">Brochure<br></div>
      <div class="compare__table noline">
        <div class="m-bg-none campare__card">
          <a href="https://logosbio.com/wp-content/uploads/LUNA-BX7%E2%84%A2-Automated-Cell-Counter-Brochure.pdf" id="pdf" class="w-inline-block compare__btn">
            <div>Download</div>
          </a>
        </div>
        <div class="m-bg-none campare__card">
          <a href="https://logosbio.com//wp-content/uploads/LUNA-III™_Automated-Cell-Counter_brochure.pdf" id="pdf" class="w-inline-block compare__btn">
            <div>Download</div>
          </a>
        </div>
        <div class="m-bg-none campare__card">
          <a href="https://logosbio.com//wp-content/uploads/LUNA-II™-Automated-Cell-Counter_Brochure.pdf" id="pdf" class="w-inline-block compare__btn">
            <div>Download</div>
          </a>
        </div>
        <div class="m-bg-none campare__card">
          <a href="https://logosbio.com//wp-content/uploads/LUNA-FX7™-Automated-Cell-Counter_Brochure.pdf" id="pdf" class="w-inline-block compare__btn">
            <div>Download</div>
          </a>
        </div>
        <div class="m-bg-none campare__card">
          <a href="https://logosbio.com//wp-content/uploads/LUNA-FL™-Dual-Fluorescence-Cell-Counter_Brochure.pdf" id="pdf" class="w-inline-block compare__btn">
            <div>Download</div>
          </a>
        </div>
        <div class="m-bg-none campare__card">
          <a href="https://logosbio.com//wp-content/uploads/LUNA-STEM™-Automated-Fluorescence-Cell-Counter-for-Stem-Cells-SVF_Brochure.pdf" id="pdf" class="w-inline-block compare__btn">
            <div>Download</div>
          </a>
        </div>
        <!-- <div class="m-bg-none campare__card">
          <a href="https://logosbio.com//wp-content/uploads/LUNA-II-YF™-Automated-Yeast-Cell-Counter_Flyer.pdf" id="pdf" class="w-inline-block compare__btn">
            <div>Download</div>
          </a>
        </div> -->
        <div class="m-bg-none campare__card">
          <a href="https://logosbio.com//wp-content/uploads/QUANTOM-Tx-Microbial-Cell-Counter_Brochure.pdf" id="pdf" class="w-inline-block compare__btn">
            <div>Download</div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>







<script>
  // 버튼과 스크롤 요소 선택
  const scrollContainer = document.querySelector('.l__1260.scroll .u__scroll');
  const scrollLeftButton = document.getElementById('scrollLeftButton');
  const scrollRightButton = document.getElementById('scrollRightButton');

  // 스크롤 상태를 체크하여 버튼의 오퍼시티 업데이트
  function updateButtonOpacity() {
    // 좌측 끝에 있으면 좌측 버튼의 오퍼시티를 0.3으로 설정
    if (scrollContainer.scrollLeft === 0) {
      scrollLeftButton.style.opacity = '0.3';
    } else {
      scrollLeftButton.style.opacity = '1';
    }

    // 우측 끝에 있으면 우측 버튼의 오퍼시티를 0.3으로 설정
    if (scrollContainer.scrollLeft + scrollContainer.clientWidth >= scrollContainer.scrollWidth) {
      scrollRightButton.style.opacity = '0.3';
    } else {
      scrollRightButton.style.opacity = '1';
    }
  }

  // 초기 버튼 상태 업데이트
  updateButtonOpacity();

  // 우측 끝으로 스크롤하는 버튼 이벤트
  scrollRightButton.addEventListener('click', function() {
    scrollContainer.scrollTo({
      left: scrollContainer.scrollWidth,
      behavior: 'smooth'
    });
  });

  // 좌측 끝으로 스크롤하는 버튼 이벤트
  scrollLeftButton.addEventListener('click', function() {
    scrollContainer.scrollTo({
      left: 0,
      behavior: 'smooth'
    });
  });

  // 스크롤 시 버튼 상태 업데이트
  scrollContainer.addEventListener('scroll', updateButtonOpacity);
</script>





<?php get_footer(); ?>