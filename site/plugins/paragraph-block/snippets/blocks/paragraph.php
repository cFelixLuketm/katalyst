<style>
  .title-paragraph-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--padding);
    padding-top:var(--quad-space);
    padding-bottom: var(--pent-space);
  }
  
  .right-side-paragraph-only {
    display: grid;
    grid-template-columns: 0.65fr 1.15fr;
  }

  span.desktop-space {
      display: block;
    }

  @media screen and (max-width: 768px) {
    .title-paragraph-wrapper {
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


<div class="title-paragraph-wrapper">
  <span class="desktop-space"></span>
  <span class="right-side-paragraph-only">
    <span class="desktop-space"></span>
    <span>  
      <?php if ($titleone = $block->titleone()->isNotEmpty()): ?>
        <p class="list-title"><?= $block->titleone()->html() ?></p>
        <br>
      <?php endif ?>
      <?php if ($paragraphone = $block->paragraphone()->isNotEmpty()): ?>
        <p class="main-paragraph"><?= $block->paragraphone()->html() ?></p>
        <?php if ($titletwo = $block->titletwo()->isNotEmpty()): ?>
          <br>
        <?php endif ?>
      <?php endif ?>

      <?php if ($titletwo = $block->titletwo()->isNotEmpty()): ?>
        <p class="list-title"><?= $block->titletwo()->html() ?></p>
        <br>
      <?php endif ?>
      <?php if ($paragraphtwo = $block->paragraphtwo()->isNotEmpty()): ?>
        <p class="main-paragraph"><?= $block->paragraphtwo()->html() ?></p>
        <?php if ($titlethree = $block->titlethree()->isNotEmpty()): ?>
          <br>
        <?php endif ?>
      <?php endif ?>

      <?php if ($titlethree = $block->titlethree()->isNotEmpty()): ?>
        <p class="list-title"><?= $block->titlethree()->html() ?></p>
        <br>
      <?php endif ?>
      <?php if ($paragraphthree = $block->paragraphthree()->isNotEmpty()): ?>
        <p class="main-paragraph"><?= $block->paragraphthree()->html() ?></p>
        <?php if ($titlefour = $block->titlefour()->isNotEmpty()): ?>
          <br>
        <?php endif ?>
      <?php endif ?>

      <?php if ($titlefour = $block->titlefour()->isNotEmpty()): ?>
        <p class="list-title"><?= $block->titlefour()->html() ?></p>
        <br>
      <?php endif ?>
      <?php if ($paragraphfour = $block->paragraphfour()->isNotEmpty()): ?>
        <p class="main-paragraph"><?= $block->paragraphfour()->html() ?></p>
        <br>
      <?php endif ?>
    </span>
  </span> 
</div>