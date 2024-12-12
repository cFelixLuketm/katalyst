<?php

Kirby::plugin('cookbook/email-prefooter-block', [
  'blueprints' => [
    'blocks/emailprefooter' => __DIR__ . '/blueprints/blocks/emailprefooter.yml',
  ],
  'snippets' => [
    'blocks/emailprefooter' => __DIR__ . '/snippets/blocks/emailprefooter.php',
  ],
]);