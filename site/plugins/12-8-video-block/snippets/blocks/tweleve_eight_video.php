
<div class="single-gallery-wrapper">
  <span class="single-img-12-8">
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
</div>