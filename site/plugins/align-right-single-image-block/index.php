<?php

Kirby::plugin('cookbook/align-right-single-image-block', [
  'blueprints' => [
    'blocks/alignrightsingleimage' => __DIR__ . '/blueprints/blocks/alignrightsingleimage.yml',
  ],
  'snippets' => [
    'blocks/alignrightsingleimage' => __DIR__ . '/snippets/blocks/alignrightsingleimage.php',
  ],
]);