
<div class="duo-gallery-wrapper">
  <span class="duo-img">
  <?php if ($poster = $block->imageone()->toFile()): ?>
      <img class="duo-image <?= $poster->parallax() ?>"
           id="<?= $poster->parallax() ?>"
           src="<?= $poster->url() ?>"/>
  <?php endif ?>
  </span>
  <span class="duo-img">
  <?php if ($poster = $block->imagetwo()->toFile()): ?>
      <img class="duo-image <?= $poster->parallax() ?>"
           id="<?= $poster->parallax() ?>" 
           src="<?= $poster->url() ?>"/>
  <?php endif ?>
  </span>
</div>

<?php if ($toptitleblackright = $block->toptitleblackright()->isNotEmpty()): ?>
<div class="duo-gallery-wrapper-captions">
  <span class="duo-img">
    <figcaption>
      <?php if ($toptitleblackleft = $block->toptitleblackleft()->isNotEmpty()): ?>
        <p class="project-heading"><?= $block->toptitleblackleft()->html() ?></p>
      <?php endif ?>
      <?php if ($bottomtitlegreyleft = $block->bottomtitlegreyleft()->isNotEmpty()): ?>
        <p class="subheading"><?= $block->bottomtitlegreyleft()->html() ?></p>
      <?php endif ?>
    </figcaption>
  </span>

  <span class="duo-img">
    <figcaption>
      <?php if ($toptitleblackright = $block->toptitleblackright()->isNotEmpty()): ?>
        <p class="project-heading"><?= $block->toptitleblackright()->html() ?></p>
      <?php endif ?>
      <?php if ($bottomtitlegreyright = $block->bottomtitlegreyright()->isNotEmpty()): ?>
        <p class="subheading"><?= $block->bottomtitlegreyright()->html() ?></p>
      <?php endif ?>
    </figcaption>
  </span>
</div>
<?php endif ?>