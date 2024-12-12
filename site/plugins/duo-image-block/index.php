<?php

Kirby::plugin('cookbook/duo-image-block', [
  'blueprints' => [
    'blocks/duoimage' => __DIR__ . '/blueprints/blocks/duoimage.yml',
    'files/duoimage'  => __DIR__ . '/blueprints/files/audio.yml',
  ],
  'snippets' => [
    'blocks/duoimage' => __DIR__ . '/snippets/blocks/duoimage.php',
  ],
]);