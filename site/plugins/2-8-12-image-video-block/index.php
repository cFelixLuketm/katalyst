<?php

Kirby::plugin('cookbook/2-8-12-image-video-block', [
  'blueprints' => [
    'blocks/two_eight_tweleve_image_video' => __DIR__ . '/blueprints/blocks/two_eight_tweleve_image_video.yml',
    'files/two_eight_tweleve_image_video'  => __DIR__ . '/blueprints/files/image_video.yml',
  ],
  'snippets' => [
    'blocks/two_eight_tweleve_image_video' => __DIR__ . '/snippets/blocks/two_eight_tweleve_image_video.php',
  ],
]);