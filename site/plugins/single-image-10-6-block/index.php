<?php

Kirby::plugin('cookbook/single-image-10-6-block', [
  'blueprints' => [
    'blocks/singleimage106' => __DIR__ . '/blueprints/blocks/singleimage106.yml',
    'files/singleimage106'  => __DIR__ . '/blueprints/files/audio.yml',
  ],
  'snippets' => [
    'blocks/singleimage106' => __DIR__ . '/snippets/blocks/singleimage106.php',
  ],
]);