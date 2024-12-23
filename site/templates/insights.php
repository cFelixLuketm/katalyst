<?php snippet('header') ?>

<article class="article">
  <div class="scroll__container">
    <section id="header">
      <div class="project__header">
        <span class="link_wrapper__h1">
          <h1><?= $page->title()->esc() ?></h1>
        </span>
      </div>
    </section>

    <div class="line-wrapper" id="projectTopLine">
      <div class="top-line"></div>
    </div>

    <section class="project-inital">
      <div class="project__header__specs">
        <span>
        </span>
        <span class="right-side-paragraphs">
          <span class="project-initals">
            <p id="filterButton"
              class="title_link insight-link active"
              data-filter="all">
              All Insights [<?php echo ($page->children()->listed()->count()); ?>]
            </p>

            <?php
            $tags = $page->children()->listed()->pluck('dataname', ',', true);
            foreach ($tags as $tag):
              $totalDataNames = $page->children()->listed()->filterBy('dataname', $tag)->count();
            ?>
              <p id="filterButton"
                class="title_link insight-link <?= $tag ?>"
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

    <section>
      <ul class="insight_grid">
        <?php foreach ($page->children()->listed() as $insight): ?>
          <li class="column"
            data-name="<?= $insight->dataname() ?>">
            <article class="note-excerpt">
              <a id="titleLink"
                onclick="javascript:setTimeout(()=>{window.location = '<?= $insight->url() ?>' },1000);">
                <div class="insight_wrapper">
                  <!-- <figure class="insight_img"> -->
                  <span class="insight-img">
                    <img src="<?= $insight->coverimage()->toFile()->url() ?>"
                      alt="<?= $insight->coverimage()->alt()->esc() ?>"
                      id="<?= $insight->parallax() ?>">
                  </span>
                  <!-- </figure> -->
                  <div class="insight_preview_text">
                    <p><?= $insight->datetext()->esc() ?></p>
                    <p class="insights__title"><?= $insight->title()->esc() ?> :</p>
                    <p class="insights__subtitle"><?= $insight->subtitle()->esc() ?></p>
                  </div>
                  <div class="insight_preview_text read_more_wrapper">
                    <p class="title_link">⮡ Read More</p>
                  </div>
                </div>
              </a>
            </article>
          </li>
        <?php endforeach ?>
      </ul>
    </section>

    <section class="footer-block">
      <?php snippet('footer-content') ?>
    </section>

  </div>

</article>

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