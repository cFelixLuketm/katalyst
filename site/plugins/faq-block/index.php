<?php

Kirby::plugin('cookbook/faq-block', [
  'blueprints' => [
    'blocks/faq' => __DIR__ . '/blueprints/blocks/faq.yml',
  ],
  'snippets' => [
    'blocks/faq' => __DIR__ . '/snippets/blocks/faq.php',
  ],
]);