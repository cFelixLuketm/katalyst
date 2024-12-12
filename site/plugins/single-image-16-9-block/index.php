<?php

Kirby::plugin('cookbook/single-image-16-9-block', [
  'blueprints' => [
    'blocks/singleimage169' => __DIR__ . '/blueprints/blocks/singleimage169.yml',
    'files/singleimage169'  => __DIR__ . '/blueprints/files/audio.yml',
  ],
  'snippets' => [
    'blocks/singleimage169' => __DIR__ . '/snippets/blocks/singleimage169.php',
  ],
]);