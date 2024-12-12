<?php

Kirby::plugin('cookbook/testimonial-2-3-block', [
  'blueprints' => [
    'blocks/testimonial_2_3' => __DIR__ . '/blueprints/blocks/testimonial_2_3.yml',
  ],
  'snippets' => [
    'blocks/testimonial_2_3' => __DIR__ . '/snippets/blocks/testimonial_2_3.php',
  ],
]);