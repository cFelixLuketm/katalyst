<?php

Kirby::plugin('cookbook/2-1-1-image-video-block', [
  'blueprints' => [
    'blocks/two_one_one_image_video' => __DIR__ . '/blueprints/blocks/two_one_one_image_video.yml',
    'files/two_one_one_image_video'  => __DIR__ . '/blueprints/files/image_video.yml',
  ],
  'snippets' => [
    'blocks/two_one_one_image_video' => __DIR__ . '/snippets/blocks/two_one_one_image_video.php',
  ],
]);