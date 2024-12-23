<?php snippet('header') ?>

<article class="article">
  <div class="scroll__container">
    <section class="project-header">
      <div class="project__header">
        <span class="link_wrapper__h1">
          <h1>FAQ'S</h1>
        </span>
      </div>
    </section>

    <div class="line-wrapper" id="projectTopLine">
      <div class="top-line"></div>
    </div>

    <section class="discover-section">
      <?= $page->blocks()->toBlocks() ?>
    </section>

    <section class="footer-block">
      <?php snippet('footer-content') ?>
    </section>

  </div>

</article>

<style>
  .title-paragraph-wrapper {
    padding-left: var(--padding);
    padding-right: var(--padding);
    padding-bottom: var(--tripple-space);
    padding-top: 0px;
  }

  h2 {
    font-size: var(--subtitle-2-copy-size);
    line-height: var(--subtitle-2-copy-lineheight);
    font-weight: normal;
    color: var(--base-paper);
  }

  @media screen and (max-width: 768px) {
    h2 {
      font-size: var(--subtitle-2-copy-size-mobile);
      line-height: var(--subtitle-2-copy-lineheight-mobile);
    }

    .title-paragraph-wrapper {
      padding-left: var(--padding);
      padding-right: var(--padding);
      padding-bottom: var(--tripple-space);
      padding-bottom: var(--mobile-pent-space);
      padding-top: 0px;
    }
  }
</style>

<script>
  var question = document.querySelectorAll('.discover-section');

  var first = document.querySelectorAll('.discover-section').item(0);;
  first.style.paddingTop = "35vh";

  var last = question[question.length - 1];
  <?php if ($page->isMobile()): ?>
    last.style.paddingBottom = "var(--mobile-pent-space)";
  <?php else: ?>
    last.style.paddingBottom = "var(--pent-space)";
  <?php endif ?>

  var titles = document.querySelectorAll(".title-paragraph-wrapper");
  var lastTitle = titles[titles.length - 1];
  lastTitle.style.paddingBottom = "0px";
</script>

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