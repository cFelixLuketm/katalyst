<?php

Kirby::plugin('cookbook/2-8-12-image-block', [
  'blueprints' => [
    'blocks/two_eight_tweleve_image' => __DIR__ . '/blueprints/blocks/two_eight_tweleve_image.yml',
    'files/two_eight_tweleve_image'  => __DIR__ . '/blueprints/files/audio.yml',
  ],
  'snippets' => [
    'blocks/two_eight_tweleve_image' => __DIR__ . '/snippets/blocks/two_eight_tweleve_image.php',
  ],
]);