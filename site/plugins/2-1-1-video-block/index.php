<?php

Kirby::plugin('cookbook/2-1-1-video-block', [
  'blueprints' => [
    'blocks/two_one_one_video' => __DIR__ . '/blueprints/blocks/two_one_one_video.yml',
    'files/two_one_one_video'  => __DIR__ . '/blueprints/files/video.yml',
  ],
  'snippets' => [
    'blocks/two_one_one_video' => __DIR__ . '/snippets/blocks/two_one_one_video.php',
  ],
]);