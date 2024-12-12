<?php

Kirby::plugin('cookbook/align-left-single-image-block', [
  'blueprints' => [
    'blocks/alignleftsingleimage' => __DIR__ . '/blueprints/blocks/alignleftsingleimage.yml',
  ],
  'snippets' => [
    'blocks/alignleftsingleimage' => __DIR__ . '/snippets/blocks/alignleftsingleimage.php',
  ],
]);