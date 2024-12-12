<?php

Kirby::plugin('cookbook/12-8-video-block', [
  'blueprints' => [
    'blocks/tweleve_eight_video' => __DIR__ . '/blueprints/blocks/tweleve_eight_video.yml',
    'files/tweleve_eight_video'  => __DIR__ . '/blueprints/files/video.yml',
  ],
  'snippets' => [
    'blocks/tweleve_eight_video' => __DIR__ . '/snippets/blocks/tweleve_eight_video.php',
  ],
]);