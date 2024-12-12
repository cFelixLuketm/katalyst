<?php

Kirby::plugin('cookbook/2-1-1-video-image-block', [
  'blueprints' => [
    'blocks/two_one_one_video_image' => __DIR__ . '/blueprints/blocks/two_one_one_video_image.yml',
    'files/two_one_one_video_image'  => __DIR__ . '/blueprints/files/video_image.yml',
  ],
  'snippets' => [
    'blocks/two_one_one_video_image' => __DIR__ . '/snippets/blocks/two_one_one_video_image.php',
  ],
]);