<?php

Kirby::plugin('cookbook/single-image-block', [
  'blueprints' => [
    'blocks/singleimage' => __DIR__ . '/blueprints/blocks/singleimage.yml',
    'files/singleimage'  => __DIR__ . '/blueprints/files/audio.yml',
  ],
  'snippets' => [
    'blocks/singleimage' => __DIR__ . '/snippets/blocks/singleimage.php',
  ],
]);