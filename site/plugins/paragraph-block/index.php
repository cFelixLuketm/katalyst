<?php

Kirby::plugin('cookbook/paragraph-block', [
  'blueprints' => [
    'blocks/paragraph' => __DIR__ . '/blueprints/blocks/paragraph.yml',
  ],
  'snippets' => [
    'blocks/paragraph' => __DIR__ . '/snippets/blocks/paragraph.php',
  ],
]);