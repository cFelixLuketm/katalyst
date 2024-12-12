<?php

Kirby::plugin('cookbook/2-8-12-video-block', [
  'blueprints' => [
    'blocks/two_eight_tweleve_video' => __DIR__ . '/blueprints/blocks/two_eight_tweleve_video.yml',
    'files/two_eight_tweleve_video'  => __DIR__ . '/blueprints/files/video.yml',
  ],
  'snippets' => [
    'blocks/two_eight_tweleve_video' => __DIR__ . '/snippets/blocks/two_eight_tweleve_video.php',
  ],
]);