<!-- style="
      aspect-ratio: <?= $ratio ?? 'auto' ?>;
      object-fit: <?= ($contain ?? false) ? 'contain' : 'cover' ?>
    " -->

<?php

$attrs = attr([
  'data-lightbox' => $lightbox ?? false,
  'href'          => $href     ?? $src,
]);

?>
<a <?= $attrs ?>>
  <img
    src="<?= esc($src, 'attr') ?>"
    alt="<?= esc($alt, 'attr') ?>"
    style="
    width: 100vw;
    "
  >
</a>
