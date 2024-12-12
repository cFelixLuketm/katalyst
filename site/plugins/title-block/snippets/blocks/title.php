<style>
  .title-wrapper {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--padding);
    /* padding-top: var(--quad-space); */
    padding-bottom: var(--quad-space);
  }
  
  .right-site-paragraph {
    display: grid;
    grid-template-columns: 0.5fr 1fr;
  }

  @media screen and (max-width: 768px) {
    .title-wrapper {
      grid-template-columns: 1fr;
      gap: var(--padding);
      padding-top: var(--mobile-tripple-space);
      padding-bottom: var(--mobile-quad-space);
      row-gap: var(--mobile-quad-space);
    }
  }
</style>


<div class="title-wrapper">
  <span>
    <h2><?= $block->title()->html() ?></h2>
  </span>
</div>