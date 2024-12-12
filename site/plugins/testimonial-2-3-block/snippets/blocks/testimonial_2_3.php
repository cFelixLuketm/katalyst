<style>
  .title-paragraph-wrapper-testimonial_2_3 {
    display: grid;
    grid-template-columns: 0.2fr 1fr;
    gap: var(--padding);
    padding-top:var(--quad-space);
    padding-bottom: var(--pent-space);
  }
  
  .right-side-testimonial-half {
    display: grid;
    grid-template-columns: 1fr;
  }

  span.desktop-space {
      display: block;
    }

  div.testimonial-half {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--padding);
    padding-top: 0px;
    height: 0px;
    height: 3rem;
  }

  @media screen and (max-width: 768px) {
    .title-paragraph-wrapper-testimonial_2_3 {
      grid-template-columns: 1fr;
      gap: var(--padding);
      padding-top: var(--mobile-tripple-space);
      padding-bottom: var(--mobile-pent-space);
      row-gap: var(--mobile-quad-space);
    }

    .right-side-paragraph-only {
      display: grid;
      grid-template-columns: 1fr;
    }

    span.desktop-space {
      display: none;
    }
  }
</style>


<div class="title-paragraph-wrapper-testimonial_2_3">
  <span class="desktop-space"></span>
  <span class="right-side-paragraph-testimonial-half">
    <span>  
      <?php if ($paragraphone = $block->paragraphone()->isNotEmpty()): ?>
        <h3 class="main-paragraph"><?= $block->paragraphone()->html() ?></h3>
        <?php if ($titletwo = $block->titletwo()->isNotEmpty()): ?>
          <br>
        <?php endif ?>
      <?php endif ?>

      <?php if ($toptitleblackright = $block->toptitleblackright()->isNotEmpty()): ?>
      <div class="duo-gallery-wrapper-captions testimonial-half">
        <!-- <span class="duo-img"> -->
          <figcaption>
            <?php if ($toptitleblackleft = $block->toptitleblackleft()->isNotEmpty()): ?>
              <p class="project-heading"><?= $block->toptitleblackleft()->html() ?></p>
            <?php endif ?>
            <?php if ($bottomtitlegreyleft = $block->bottomtitlegreyleft()->isNotEmpty()): ?>
              <p class="subheading"><?= $block->bottomtitlegreyleft()->html() ?></p>
            <?php endif ?>
          </figcaption>
        <!-- </span> -->
      
        <!-- <span class="duo-img"> -->
          <figcaption>
            <?php if ($toptitleblackright = $block->toptitleblackright()->isNotEmpty()): ?>
              <p class="project-heading"><?= $block->toptitleblackright()->html() ?></p>
            <?php endif ?>
            <?php if ($bottomtitlegreyright = $block->bottomtitlegreyright()->isNotEmpty()): ?>
              <p class="subheading"><?= $block->bottomtitlegreyright()->html() ?></p>
            <?php endif ?>
          </figcaption>
        <!-- </span> -->
      </div>
      <?php endif ?>
    </span>
  </span> 
</div>