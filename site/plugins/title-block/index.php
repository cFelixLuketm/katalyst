<?php

Kirby::plugin('cookbook/title-block', [
  'blueprints' => [
    'blocks/title' => __DIR__ . '/blueprints/blocks/title.yml',
  ],
  'snippets' => [
    'blocks/title' => __DIR__ . '/snippets/blocks/title.php',
  ],
]);