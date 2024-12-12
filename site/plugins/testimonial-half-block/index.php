<?php

Kirby::plugin('cookbook/testimonial-half-block', [
  'blueprints' => [
    'blocks/testimonial_half' => __DIR__ . '/blueprints/blocks/testimonial_half.yml',
  ],
  'snippets' => [
    'blocks/testimonial_half' => __DIR__ . '/snippets/blocks/testimonial_half.php',
  ],
]);