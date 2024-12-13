<?php $approachprocesstab = $page->children()->listed()->paginate(1) ?>
<section>
  <?php foreach ($approachprocesstab as $approachprocess): ?>
    <figcaption class="img-caption insight-date">
      <p><?= $approachprocess->title() ?></p>
    </figcaption>
    <div class="paragraph-one-wrapper-approachprocess approach">
      <?php if ($page->isMobile()): ?>
      <?php else: ?>
        <span>
        </span>
      <?php endif ?>
      <h3 class="main-paragraph"><?= $approachprocess->paragraphone()->html() ?></h3>
    </div>
    <div class="title-paragraph-wrapper-approachprocess approach">
      <span>
        <h2><?= $approachprocess->approachprocessinitaltitle()->html() ?></h2>
      </span>
    </div>
    <?php $approaches = $approachprocess->children()->listed() ?>
    <?php foreach ($approaches as $approach): ?>
      <div class="title-paragraph-wrapper-approach approach">
        <span class="approach-title">
          <h3 id="approachTitle" class="approach_titles"><?= $approach->number()->html() ?></h3>
          <h3 class="approach_titles subheading"><?= $approach->title()->html() ?></h3>
        </span>
        <span class="approach-paragraph">
          <h3 id="approachParagraph" class="subtitle_two"><?= $approach->paragraph()->html() ?></h3>
        </span>
      </div>
    <?php endforeach; ?>
  <?php endforeach; ?>
</section>

<script>
  <?php if ($page->isMobile()): ?>
    const approachWrappers = document.querySelectorAll(".title-paragraph-wrapper-approach");
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        entry.target.classList.toggle("show", entry.isIntersecting);

        const currentTitles = entry.target.querySelectorAll(".approach-title #approachTitle");
        currentTitles.forEach(title => {
          title.classList.toggle("title-showing", entry.isIntersecting);
        })

        const currentTitles2 = entry.target.querySelectorAll(".approach-title .subheading");
        currentTitles2.forEach(title2 => {
          title2.classList.toggle("title-showing", entry.isIntersecting);
        })

        const currentParagraph = entry.target.querySelector(".approach-paragraph");
        currentParagraph.classList.toggle("paragraph-showing", entry.isIntersecting);
      })
    }, {
      rootMargin: '-50%',
      // threshold: 0.9,
    })
    approachWrappers.forEach(approach => {
      observer.observe(approach)
    })

    var approaches = document.querySelectorAll('.title-paragraph-wrapper-approach');
    var last = approaches[approaches.length - 1];
    last.style.paddingBottom = "5rem";
  <?php else: ?>
    const approachWrappers = document.querySelectorAll(".title-paragraph-wrapper-approach");
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        entry.target.classList.toggle("show", entry.isIntersecting);

        const currentTitles = entry.target.querySelectorAll(".approach-title #approachTitle");
        currentTitles.forEach(title => {
          title.classList.toggle("title-showing", entry.isIntersecting);
        })

        const currentTitles2 = entry.target.querySelectorAll(".approach-title .subheading");
        currentTitles2.forEach(title2 => {
          title2.classList.toggle("title-showing", entry.isIntersecting);
        })

        const currentParagraph = entry.target.querySelector(".approach-paragraph");
        currentParagraph.classList.toggle("paragraph-showing", entry.isIntersecting);
      })
    }, {
      rootMargin: '-50%',
    })
    approachWrappers.forEach(approach => {
      observer.observe(approach)
    })

    var approaches = document.querySelectorAll('.title-paragraph-wrapper-approach');
    var last = approaches[approaches.length - 1];
    last.style.paddingBottom = "6rem";
  <?php endif ?>
</script>