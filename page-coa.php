<?php get_header(); ?>






  <div class="l__relative">
    <div class="u__gra-bg"></div>
    <div class="line__hero center">
      <div class="l__1260">
        <div class="line__hero__linkname" data-ix="load1">Support  <span class="line__hero__linkname-red">&gt;</span> CoA &amp; MSDS  <span class="line__hero__linkname-red">&gt;</span> <span class="line__hero__linkname-red">CoA</span></div>
        <div class="line__hero__flex">
          <div class="line__hero__f1" data-ix="load-2">CoA</div>
          <div class="line__hero__f2" data-ix="load-2">Please enter the Product Catalog Number and Lot Number(or Product key) to find a CoA. (Slides / Reagents)</div><br>
          <div data-ix="load-2"><span class="coa__com01__form-label--span">*</span> In case of Validation Slide, please enter the 23-character Product key with dashes ('-').</div>
          <div data-ix="load-2"><span class="coa__com01__form-label--span">*</span> For KIT products, please enter the Cat# from the product pouch (the third or fourth character is 'K').</div>
        </div>
      </div>
    </div>
    <div class="support__com-all01" data-ix="scroll">
      <div class="l__1260">
        <div class="coa__com01__formbox">
          <div>
              <div class="coa__com01__form-wrap">
                <div class="coa__com01__form-flex"><label for="cat" class="coa__com01__form-label">Catalog number <span class="coa__com01__form-label--span">*</span></label><input type="text" class="coa__com01__form-input w-input" maxlength="256" placeholder="" id="catInput"></div>
                <div class="coa__com01__form-flex"><label for="lot" class="coa__com01__form-label">Lot number <span class="coa__com01__form-label--span">*</span></label><input type="text" class="coa__com01__form-input w-input" maxlength="256" placeholder="" id="lotInput"></div>
              </div>

              <a href="#" onclick="coaClick()" class="coa__com01__form-submit w-button">Download Certificate</a>
              <a href="#" id="downbtn"></a>
          </div>
          <div class="coa__com01__error" id="coa__com01__error">
            <div><strong>No results found.</strong></div>
            <div>No results found.In some cases, a COA may not be available on-line.</div>
            <div>if your search was unable to find the COA please contact <a href="mailto:info@logosbio.com" class="coa__com01__error-link">info@logosbio.com</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<style>
.coa__com01__form-submit {
    line-height: 1.8;
  }
.coa__com01__error {
    display:none;
}

.coa__com01__error.view {
  display:block;
}
</style>



  <?php get_footer(); ?>








