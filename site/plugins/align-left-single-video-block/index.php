<?php

Kirby::plugin('cookbook/align-left-single-video-block', [
  'blueprints' => [
    'blocks/alignleftsinglevideo' => __DIR__ . '/blueprints/blocks/alignleftsinglevideo.yml',
  ],
  'snippets' => [
    'blocks/alignleftsinglevideo' => __DIR__ . '/snippets/blocks/alignleftsinglevideo.php',
  ],
]);