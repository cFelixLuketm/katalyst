<?php

Kirby::plugin('cookbook/title-paragraph-block', [
  'blueprints' => [
    'blocks/titleparagraph' => __DIR__ . '/blueprints/blocks/titleparagraph.yml',
  ],
  'snippets' => [
    'blocks/titleparagraph' => __DIR__ . '/snippets/blocks/titleparagraph.php',
  ],
]);