<style>
  .title-paragraph-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--padding);
    padding-top: var(--quad-space);
    padding-bottom: var(--pent-space);
  }

  span.projects-title-span {
    width: 95%;
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
  
  .right-site-paragraph {
    display: grid;
    grid-template-columns: 0.65fr 1.15fr;
  }

  @media screen and (max-width: 768px) {
    .title-paragraph-wrapper {
      grid-template-columns: 1fr;
      gap: var(--padding);
      padding-top: var(--mobile-tripple-space);
      padding-bottom: var(--mobile-quad-space);
      row-gap: var(--mobile-quad-space);
    }

    span.projects-title-span {
      width: 100%;
    }

    span.projects-title-span {
      width: 95%;
      display: block;
      grid-template-columns: 1fr 1fr;
    }
  }
</style>


<div class="title-paragraph-wrapper">
  <span class="projects-title-span">
    <span>
    </span>
    <h2><?= $block->title()->html() ?></h2>
  </span>
  <span class="right-site-paragraph">
    <span>  
      <?php if ($titleone = $block->titleone()->isNotEmpty()): ?>
        <h3 class="insight-subtitle"><?= $block->titleone()->html() ?></h3>
        <br>
      <?php endif ?>
      <?php if ($paragraphone = $block->paragraphone()->isNotEmpty()): ?>
        <h3 class="main-paragraph"><?= $block->paragraphone()->html() ?></h3>
        <?php if ($titletwo = $block->titletwo()->isNotEmpty()): ?>
          <br>
        <?php endif ?>
      <?php endif ?>

      <?php if ($titletwo = $block->titletwo()->isNotEmpty()): ?>
        <h3 class="insight-subtitle"><?= $block->titletwo()->html() ?></h3>
        <br>
      <?php endif ?>
      <?php if ($paragraphtwo = $block->paragraphtwo()->isNotEmpty()): ?>
        <h3 class="main-paragraph"><?= $block->paragraphtwo()->html() ?></h3>
        <?php if ($titlethree = $block->titlethree()->isNotEmpty()): ?>
          <br>
        <?php endif ?>
      <?php endif ?>

      <?php if ($titlethree = $block->titlethree()->isNotEmpty()): ?>
        <h3 class="insight-subtitle"><?= $block->titlethree()->html() ?></h3>
        <br>
      <?php endif ?>
      <?php if ($paragraphthree = $block->paragraphthree()->isNotEmpty()): ?>
        <h3 class="main-paragraph"><?= $block->paragraphthree()->html() ?></h3>
        <?php if ($titlefour = $block->titlefour()->isNotEmpty()): ?>
          <br>
        <?php endif ?>
      <?php endif ?>

      <?php if ($titlefour = $block->titlefour()->isNotEmpty()): ?>
        <h3 class="insight-subtitle"><?= $block->titlefour()->html() ?></h3>
        <br>
      <?php endif ?>
      <?php if ($paragraphfour = $block->paragraphfour()->isNotEmpty()): ?>
        <h3 class="main-paragraph"><?= $block->paragraphfour()->html() ?></h3>
        <br>
      <?php endif ?>
    </span>
  </span> 
</div>