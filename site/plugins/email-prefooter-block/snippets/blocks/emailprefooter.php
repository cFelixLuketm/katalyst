<style>
  .email-prefooter-wrapper {
    display: grid;
    grid-template-columns: 1fr;;
    padding-top:var(--single-space);
    padding-bottom: var(--pent-space);
  }

  @media screen and (max-width: 768px) {
    .email-prefooter-wrapper {
      display: grid;
      grid-template-columns: 1fr;
      width: 80vw;
      padding-top:var(--mobile-double-space);
      padding-bottom: var(--mobile-pent-space);
    }
  }
</style>

<div class="line-wrapper" id="topLineWrapper">
  <div class="line" id="projectLine"></div>
</div>

<div class="email-prefooter-wrapper">
  <span>
    <h2><?= $block->title()->html() ?></h2>
  </span>
  <span>
    <a href="mailto:<?= $block->email()->html() ?>"
       class="large-mail"
    >
      ⮡ <?= $block->email()->html() ?>
    </a>
  </span> 
</div>

<div class="line-wrapper">
  <div class="line" id="projectLine"></div>
</div>