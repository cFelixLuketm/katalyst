<?php snippet('header') ?>

<article class="homepage">
  <div class="scroll__container">
    <section id="hero">
      <div class="hero__container">
        <div class="hero__title">
          <h1 class="hero__title__header text__reveal"><?= $site->initallineone()->html() ?></h1>
          <h1 class="hero__title__header text__reveal__second"><?= $site->initallinetwo()->html() ?></h1>
        </div>
      </div>
    </section>

    <section id="video">
      <div class="video__sticky">
        <?php $video = $site->initalvideo()->toFile(); ?>
        <video class="main__video"
          autoplay
          muted
          loop
          playsinline
          src="<?= $video->url() ?>">
        </video>
      </div>
    </section>

    <section>
      <div class="homepage-paragraph__one">
        <h2>
          <?= $site->wearekatalystparagraphone()->html() ?>
        </h2>
      </div>
    </section>

    <section class="recent-work">
      <?php snippet('recentwork-homepage') ?>
    </section>

    <section class="discover-section">
      <?php snippet('discover-more') ?>
    </section>

    <section class="footer-block">
      <?php snippet('footer-content') ?>
    </section>

  </div>

</article>

<script type="module" src="./assets/js/app.js"></script>
<script type="module" src="./assets/js/homepageapp.js"></script>

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

<?php snippet('footer') ?>