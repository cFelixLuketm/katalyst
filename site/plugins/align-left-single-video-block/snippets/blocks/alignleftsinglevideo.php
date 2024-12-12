
<div class="align-left-single-gallery-wrapper">
  <span class="align-right-img">
  <?php if ($video = $block->video()->toFile()): ?>
      <video class="single-video"
             src="<?= $video->url() ?>"
             preload 
             autobuffer 
             muted 
             playsinline
             autoplay
             loop
      >
      </video>
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