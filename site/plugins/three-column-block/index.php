<?php

Kirby::plugin('cookbook/three-column-block', [
  'blueprints' => [
    'blocks/threecolumn' => __DIR__ . '/blueprints/blocks/threecolumn.yml',
  ],
  'snippets' => [
    'blocks/threecolumn' => __DIR__ . '/snippets/blocks/threecolumn.php',
  ],
]);