<?php
Kirby::plugin('wiv-gmbh/mediablock', [
  'snippets' => [
    'blocks/mediablock' => __DIR__ . '/snippets/blocks/mediablock.php',
    'blocks/mediahtml' => __DIR__ . '/snippets/blocks/mediahtml.php',
    'blocks/mediaimage' => __DIR__ . '/snippets/blocks/mediaimage.php',
    'blocks/mediayoutube' => __DIR__ . '/snippets/blocks/mediayoutube.php',
  ],
  'blueprints' => [
    'blocks/mediablock' => __DIR__ . '/blueprints/blocks/mediablock.yml',
    'blocks/mediahtml' => __DIR__ . '/blueprints/blocks/mediahtml.yml',
    'blocks/mediaimage' => __DIR__ . '/blueprints/blocks/mediaimage.yml',
    'blocks/mediayoutube' => __DIR__ . '/blueprints/blocks/mediayoutube.yml',
    'fields/mediabuilder' => __DIR__ . '/blueprints/fields/mediabuilder.yml',
  ],
]);