<?php

Kirby::plugin('cookbook/line-two-column-block', [
  'blueprints' => [
    'blocks/linetwocolumn' => __DIR__ . '/blueprints/blocks/linetwocolumn.yml',
  ],
  'snippets' => [
    'blocks/linetwocolumn' => __DIR__ . '/snippets/blocks/linetwocolumn.php',
  ],
]);