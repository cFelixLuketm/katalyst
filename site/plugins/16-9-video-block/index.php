<?php

Kirby::plugin('cookbook/16-9-video-block', [
  'blueprints' => [
    'blocks/sixteen_nine_video' => __DIR__ . '/blueprints/blocks/sixteen_nine_video.yml',
    'files/sixteen_nine_video'  => __DIR__ . '/blueprints/files/video.yml',
  ],
  'snippets' => [
    'blocks/sixteen_nine_video' => __DIR__ . '/snippets/blocks/sixteen_nine_video.php',
  ],
]);