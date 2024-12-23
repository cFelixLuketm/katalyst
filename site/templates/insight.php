<?php snippet('header') ?>

<article class="article">
  <div class="scroll__container">
    <section id="header">
      <div class="title-wrapper">
        <div></div>
        <div class="project__header insight-header">
          <span class="insight-title-mobile">
            <h2><?= $page->title()->esc() ?>:</h2>
          </span>
          <h2 class="insight__subtitle"><?= $page->subtitle()->esc() ?></h2>
        </div>
      </div>
    </section>

    <div class="line-wrapper" id="projectTopLine">
      <div class="top-line"></div>
    </div>

    <figcaption class="img-caption insight-date">
      <p class="project-heading">Published ↓</p>
      <p class="subheading"><?= $page->datetext()->esc() ?></p>
    </figcaption>

    <section id="insight">
      <div class="project__start insight-start">
        <?= $page->text()->toBlocks() ?>
        <div class="project__header__specs insight_author">
          <?php if ($page->isMobile()): ?>
          <?php else: ?>
            <span></span>
          <?php endif ?>
          <span>
            <span>
              <p>Written by <?= $page->author()->esc() ?></p>
              <p class="main-paragraph"><?= $page->authortitle()->esc() ?></p>
            </span>
            <?php if ($page->isMobile()): ?>
            <?php else: ?>
              <span></span>
              <span></span>
            <?php endif ?>
          </span>
        </div>
      </div>
    </section>

    <section class="footer-block">
      <?php snippet('footer-content') ?>
    </section>

  </div>

</article>

<style>
  p.project-heading {
    color: var(--base-white);
  }

  p.subheading {
    color: var(--black-temp-text);
  }

  span.single-img-12-8 {
    position: relative;
    display: block;
    /* width: 49.5%; */
    aspect-ratio: 12/8;
    overflow: hidden;
  }

  .single-gallery-wrapper {
    display: flex;
    grid-template-columns: 1fr;
    /* align-items: end; */
    flex-direction: column;
    width: 49.5%;
    margin-left: 50.5%;
    padding-top: var(--double-space);
    padding-bottom: var(--quad-space);
  }

  .title-paragraph-wrapper {
    display: grid;
    gap: var(--padding);
    padding-top: var(--padding);
    padding-top: var(--single-space);
    padding-bottom: var(--double-space);
  }

  .title-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--padding);
  }

  @media screen and (max-width: 768px) {
    span.single-img-12-8 {
      position: relative;
      display: block;
      width: 100%;
      aspect-ratio: 12/8;
      overflow: hidden;
    }

    .single-gallery-wrapper {
      display: flex;
      grid-template-columns: 1fr;
      /* align-items: end; */
      width: 100%;
      margin-left: 0%;
      flex-direction: column;
      gap: var(--padding);
      padding-top: var(--mobile-tripple-space);
      padding-bottom: var(--mobile-pent-space);
    }

    .title-wrapper {
      display: grid;
      grid-template-columns: 1fr;
      gap: var(--padding);
      padding-left: var(--padding);
    }

    h2.insight__subtitle {
      font-size: var(--subtitle-copy-size-mobile);
      line-height: var(--subtitle-copy-lineheight-mobile);
      font-weight: normal;
      color: var(--black-temp-text);
      padding-bottom: 1vh;
      margin-top: -1vh;
    }
  }
</style>

<?php snippet('footer') ?>

<script>
  const header = document.getElementById("header");
  var headerheight = header.offsetHeight;
  const element = document.querySelector('.article');
  element.style.marginTop = headerheight + 'px';
  element.style.height = window.innerHeight - headerheight + 'px'
</script>

<script>
  const projectItems = document.querySelectorAll(".projects-nav-item");
  projectItems.forEach(projectItem => {
    projectItem.addEventListener("click", function() {
      loader.style.transform = "translateY(0%)";

      const header = document.querySelector(".header");
      const html = document.documentElement;
      const body = document.querySelector("body");
      html.classList.add("active");
    })
  })
</script>