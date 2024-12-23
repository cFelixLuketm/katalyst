<?php snippet('header') ?>

<style>
  section.project-header {
    display: none;
  }

  .grid {
    padding-top: 6.5vh;
  }

  .right-side-paragraphs {
    display: none;
  }

  @media screen and (max-width: 1000px) {
    li.column {
      padding-top: 0px;
    }
  }

  @media screen and (max-width: 768px) {
    .grid {
      margin-top: 0vh;
      padding-top: 7.25vh;
    }
  }
</style>

<article class="article">
  <div class="scroll__container">
    <section class="project-header">
      <div class="project__header">
        <span class="link_wrapper__h1">
          <h1><?= $page->headline() ?></h1>
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
            <p id="filterButton"
              class="title_link active"
              data-filter="all">
              All Projects [<?php echo ($page->children()->listed()->count()); ?>]
            </p>

            <?php
            $tags = $page->children()->listed()->pluck('dataname', ',', true);
            foreach ($tags as $tag):
              $totalDataNames = $page->children()->listed()->filterBy('dataname', $tag)->count();
            ?>
              <p id="filterButton"
                class="title_link <?= $tag ?>"
                data-filter="<?= $tag ?>">
                <?= $tag ?> [<?= $totalDataNames ?>]
              </p>
            <?php endforeach ?>
          </span>
          <span>
          </span>
          <?php if ($page->isMobile()): ?>
            <span class="project-initals"></span>
          <?php endif ?>
          <span>
          </span>
        </span>
      </div>
    </section>

    <section class="project-grid projects-grid">
      <ul class="grid project-grid">
        <?php foreach ($page->children()->listed() as $project): ?>
          <li class="column"
            data-name="<?= $project->dataname() ?>">
            <a class="project-link"
              onclick="javascript:setTimeout(()=>{window.location = '<?= $project->url() ?>' },1000);">
              <?php if ($coverone = $project->coverone()->toFile()): ?>
                <span class="img">
                  <?php if ($video = $project->video()->toFile()): ?>
                    <span class="image_video_wrapper single-img-12-8">
                      <video class="video"
                        <?php if ($covertwo = $project->covertwo()->toFile()): ?>
                        poster="<?= $covertwo->url() ?>"
                        <?php endif ?>
                        src="<?= $video->url() ?>"
                        preload
                        autobuffer
                        muted
                        playsinline
                        autoplay
                        loop>
                      </video>
                      <img src="<?= $coverone->url() ?>"
                        alt="<?= $coverone->alt()->esc() ?>"
                        onmouseover="this.style.opacity = 0"
                        onmouseout="this.style.opacity = 1"
                        class="project_image_alt"
                        id="<?= $coverone->parallax() ?>">
                    </span>
                  <?php elseif ($covertwo = $project->covertwo()->toFile()): ?>
                    <span class="image_video_wrapper single-img-12-8">
                      <img src="<?= $covertwo->url() ?>"
                        alt="<?= $covertwo->alt()->esc() ?>"
                        class="project_image_alt"
                        id="<?= $covertwo->parallax() ?>" />
                      <img src="<?= $coverone->url() ?>"
                        onmouseover="this.style.opacity = 0"
                        onmouseout="this.style.opacity = 1"
                        alt="<?= $coverone->alt()->esc() ?>"
                        class="project_image_alt"
                        id="<?= $coverone->parallax() ?>" />
                    </span>
                  <?php else: ?>
                    <span class="image_video_wrapper single-img-12-8">
                      <img src="<?= $coverone->url() ?>"
                        alt="<?= $coverone->alt()->esc() ?>"
                        class="project_image_alt"
                        id="<?= $coverone->parallax() ?>">
                    </span>
                  <?php endif ?>
                </span>
              <?php endif ?>
              <figcaption class="img-caption">
                <p class="project-heading"><?= $project->title()->esc() ?></p>
                <p class="subheading"><?= $project->subheadline()->esc() ?></p>
              </figcaption>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </section>

    <section class="footer-block">
      <?php snippet('footer-content') ?>
    </section>

  </div>

</article>

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

<script type="module" src="./assets/js/app.js"></script>

<?php snippet('footer') ?>

<script>
  const header = document.getElementById("header");
  var headerheight = header.offsetHeight;
  const element = document.querySelector('.article');
  element.style.marginTop = headerheight + 'px';
  element.style.height = window.innerHeight - headerheight + 'px'

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
</script>