
<div class="align-right-single-gallery-wrapper">
  <span class="alignright-space"></span>
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
</div>