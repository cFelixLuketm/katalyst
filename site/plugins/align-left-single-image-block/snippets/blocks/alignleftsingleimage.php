
<style>
  .align-left-single-gallery-wrapper {
    display: grid;
    align-content: end;
    grid-template-columns: 1fr 0.2fr;
    gap: var(--padding);
    padding-top: var(--padding);
  }

  @media screen and (max-width: 768px) {
    .align-left-single-gallery-wrapper{
        display: grid;
        align-content: end;
        grid-template-columns: 1fr;
        gap: var(--padding);
        padding-top: var(--padding);
    }
  }
</style>

<div class="align-left-single-gallery-wrapper">
  <span class="align-right-img">
  <?php if ($image = $block->image()->toFile()): ?>
    <img class="align-right-single-image <?= $image->parallax() ?>"
         id="<?= $image->parallax() ?>"
         src="<?= $image->url() ?>"/>
  <?php endif ?>
  </span>
  <span class="alignright-space"></span>
  <figcaption>
    <?php if ($toptitleblack = $block->toptitleblack()->isNotEmpty()): ?>
      <p class="project-heading"><?= $block->toptitleblack()->html() ?></p>
    <?php endif ?>
    <?php if ($bottomtitlegrey = $block->bottomtitlegrey()->isNotEmpty()): ?>
      <p class="subheading"><?= $block->bottomtitlegrey()->html() ?></p>
    <?php endif ?>
  </figcaption>
  <span class="alignright-space"></span>
</div>