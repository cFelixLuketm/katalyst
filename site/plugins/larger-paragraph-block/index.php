<?php

Kirby::plugin('cookbook/larger-paragraph-block', [
  'blueprints' => [
    'blocks/largerparagraph' => __DIR__ . '/blueprints/blocks/largerparagraph.yml',
  ],
  'snippets' => [
    'blocks/largerparagraph' => __DIR__ . '/snippets/blocks/largerparagraph.php',
  ],
]);