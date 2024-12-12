
<!-- <article class="note-excerpt">
  <a id="titleLink"
     onclick="javascript:setTimeout(()=>{window.location = '<?= $note->url() ?>' },1000);"
  >
    <div class="insight_wrapper">
      <figure class="insight_img">
        <?php if ($cover = $note->cover()): ?>
          <img src="<?= $cover->url() ?>" alt="<?= $cover->alt()->esc() ?>">
        <?php endif ?>
      </figure>
      <div class="insight_preview_text">
        <p><?= $note->datetext()->esc() ?></p>
        <p class="insights__title"><?= $note->title()->esc() ?> :</p>
        <p class="insights__subtitle"><?= $note->subtitle()->esc() ?></p>
      </div>
      <div class="insight_preview_text read_more_wrapper">
        <p class="title_link">⮡ Read More</p>
      </div>
    </div>
  </a>
</article> -->
