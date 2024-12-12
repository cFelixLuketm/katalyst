<?php

Kirby::plugin('cookbook/2-8-12-video-image-block', [
  'blueprints' => [
    'blocks/two_eight_tweleve_video_image' => __DIR__ . '/blueprints/blocks/two_eight_tweleve_video_image.yml',
    'files/two_eight_tweleve_video_image'  => __DIR__ . '/blueprints/files/video_image.yml',
  ],
  'snippets' => [
    'blocks/two_eight_tweleve_video_image' => __DIR__ . '/snippets/blocks/two_eight_tweleve_video_image.php',
  ],
]);