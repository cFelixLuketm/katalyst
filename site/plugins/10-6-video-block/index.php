<?php

Kirby::plugin('cookbook/single-video-block', [
  'blueprints' => [
    'blocks/singlevideo' => __DIR__ . '/blueprints/blocks/singlevideo.yml',
    'files/singlevideo'  => __DIR__ . '/blueprints/files/audio.yml',
  ],
  'snippets' => [
    'blocks/singlevideo' => __DIR__ . '/snippets/blocks/singlevideo.php',
  ],
]);