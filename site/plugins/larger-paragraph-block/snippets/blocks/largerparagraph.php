<style>
  .title-paragraph-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--padding);
    padding-top: var(--padding);
    /* padding-bottom: var(--pent-space); */
  }
  
  .right-site-paragraph {
    display: grid;
    grid-template-columns: 1fr;
  }

  @media screen and (max-width: 768px) {
    .title-paragraph-wrapper {
      grid-template-columns: 1fr;
      gap: var(--padding);
      padding-top: var(--mobile-tripple-space);
      padding-bottom: var(--mobile-quad-space);
      row-gap: var(--mobile-quad-space);
    }
  }
</style>


<div class="title-paragraph-wrapper">
  <?php if ($page->isMobile()): ?>
  <?php else: ?>
    <span>
      <h2></h2>
    </span>
  <?php endif ?>
  <span class="right-site-paragraph">
    <span>  
      <?php if ($titleone = $block->title()->isNotEmpty()): ?>
        <h3 class="insight-subtitle"><?= $block->title()->html() ?></h3>
        <br>
      <?php endif ?>
      <?php if ($paragraphone = $block->paragraphone()->isNotEmpty()): ?>
        <h3 class="main-paragraph"><?= $block->paragraphone()->html() ?></h3>
        <?php if ($paragraphtwo = $block->paragraphtwo()->isNotEmpty()): ?>
          <br>
        <?php endif ?>
      <?php endif ?>
      <?php if ($paragraphtwo = $block->paragraphtwo()->isNotEmpty()): ?>
        <h3 class="main-paragraph"><?= $block->paragraphtwo()->html() ?></h3>
      <?php endif ?>
    </span>
  </span> 
</div>