
<div class="single-gallery-wrapper">
  <span class="single-img-10-6">
    <?php if ($image = $block->image()->toFile()): ?>
      <img id="<?= $image->parallax() ?>"
           class="single-image <?= $image->parallax() ?>" 
           src="<?= $image->url() ?>"/>
    <?php endif ?>
  </span>
  <figcaption>
    <?php if ($toptitleblack = $block->toptitleblack()->isNotEmpty()): ?>
      <p class="project-heading"><?= $block->toptitleblack()->html() ?></p>
    <?php endif ?>
    <?php if ($bottomtitlegrey = $block->bottomtitlegrey()->isNotEmpty()): ?>
      <p class="subheading"><?= $block->bottomtitlegrey()->html() ?></p>
    <?php endif ?>
  </figcaption>
</div>