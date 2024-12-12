
<?php foreach ($field->toLayouts() as $layout): ?>
<section id="<?= esc($layout->id(), 'attr') ?>">
  <?php foreach ($layout->columns() as $column): ?>
  <div class="column">
    <div class="text">
      <?= $column->blocks() ?>
    </div>
  </div>
  <?php endforeach ?>
</section>
<?php endforeach ?>
