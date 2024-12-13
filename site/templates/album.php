<?php snippet('header') ?>

<article class="article">
  <div class="scroll__container">
    <section class="project-header">
      <div class="project__header">
        <span class="link_wrapper__h1">
          <h1><?= $page->headline() ?></h1>
          <?php if ($page->headlinetwo()->isNotEmpty()): ?>
            <h1><?= $page->headlinetwo() ?></h1>
            <style>
              span.link_wrapper__h1 {
                display: block;
                gap: var(--padding);
              }

              /* div.project__header {
                  padding-top: 25vh;
              } */
              @media screen and (max-width: 768px) {
                div.project__header {
                  padding-top: 32.5vh;
                }
              }
            </style>
          <?php endif ?>
        </span>
        <span class="right-site-paragraph">
          <span>
          </span>
          <span>
          </span>
        </span>
      </div>
    </section>

    <div class="line-wrapper" id="projectTopLine">
      <div class="top-line" id="projectLine"></div>
    </div>

    <section class="project-inital">
      <div class="project__header__specs">
        <span>
        </span>
        <span class="right-side-paragraphs">
          <span class="project-initals">
            <p class="list-title"><?= $page->initaltitleone()->html() ?></p>
            <br>
            <p class="main-paragraph"><?= $page->initaltitleoneone()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitleonetwo()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitleonethree()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitleonefour()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitleonefive()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitleonesix()->html() ?></p>
          </span>
          <span class="project-initals">
            <p class="list-title"><?= $page->initaltitletwo()->html() ?></p>
            <br>
            <p class="main-paragraph"><?= $page->initaltitletwoone()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitletwotwo()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitletwothree()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitletwofour()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitletwofive()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitletwosix()->html() ?></p>
          </span>
          <?php if ($page->isMobile()): ?>
            <span class="project-initals"></span>
          <?php endif ?>
          <span class="project-initals">
            <p class="list-title"><?= $page->initaltitlethree()->html() ?></p>
            <br>
            <p class="main-paragraph"><?= $page->initaltitlethreeone()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitletwothree()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitlethreethree()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitlethreefour()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitlethreefive()->html() ?></p>
            <p class="main-paragraph"><?= $page->initaltitlethreesix()->html() ?></p>
          </span>
        </span>
      </div>
    </section>

    <section class="project-grid">
      <div class="project__start">
        <?= $page->blocks()->toBlocks() ?>
      </div>
    </section>

    <section class="project-recent-work">
      <?php snippet('recentwork') ?>
    </section>

    <section class="footer-block">
      <?php snippet('footer-content') ?>
    </section>

  </div>

</article>

<!-- <div id="footerGap"></div> -->

<script>
  let projects = document.querySelectorAll('.project-link');
  projects.forEach(project => {
    const subheadingCont = project.querySelector('figcaption.img-caption');
    const subheading = subheadingCont.querySelector('.subheading');
    var originalText = subheadingCont.querySelector('.subheading').innerHTML;
    project.addEventListener('mouseover', () => {
      subheading.innerHTML = "⮡ View Project";
    });
    project.addEventListener('mouseleave', () => {
      subheading.innerHTML = originalText;
    });
  })
</script>

<script type="module" src="../assets/js/app.js"></script>

<?php snippet('footer') ?>

<script>
  const blackpageItems = document.querySelectorAll(".blackpage-nav-item");
  blackpageItems.forEach(blackpageItem => {
    blackpageItem.addEventListener("click", function() {
      loader.style.transform = "translateY(0%)";
      const header = document.querySelector(".header");
      const html = document.documentElement;
      const body = document.querySelector("body");
      html.classList.add("active");
    })
  })

  const header = document.getElementById("header");
  var headerheight = header.offsetHeight;
  const element = document.querySelector('.article');
  element.style.marginTop = headerheight + 'px';
  element.style.height = window.innerHeight - headerheight + 'px'
</script>