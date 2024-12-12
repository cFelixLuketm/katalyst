<?php

Kirby::plugin('cookbook/align-right-single-video-block', [
  'blueprints' => [
    'blocks/alignrightsinglevideo' => __DIR__ . '/blueprints/blocks/alignrightsinglevideo.yml',
  ],
  'snippets' => [
    'blocks/alignrightsinglevideo' => __DIR__ . '/snippets/blocks/alignrightsinglevideo.php',
  ],
]);