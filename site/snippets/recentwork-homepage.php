<!-- <style>
  li.recent-work-homepage-display {
    display: none;
  }

  li#display {
    display: block;
  }
</style> -->

<div class="line-wrapper">
  <div class="line"></div>
</div>

<div class="recent-work-homepage">
  <span class="link_wrapper__h2">
    <h2>Recent Work</h2>
    <!-- <span class="link_wrapper__h2__inner">
      <?php if ($projectsurl = page('work')): endif;?>
      <p onclick="javascript:setTimeout(()=>{window.location = '<?= $projectsurl->url() ?>' },1000);" 
         class="title_link"
         id="titleLink"
      >
        ⮡All Projects
      </p>
    </span> -->
  </span>
  <ul class="grid-recent-work">
    <?php $projects = page('work')->children()->listed()->filterBy('tags', 'homepage'); foreach ($projects as $project): ?>
        <?php if ($coverone = $project->coverone()->toFile()): ?>
          <li class="column recent-work-homepage-display" id="<?= $project->display()->esc() ?>">
          <a class="project-link projects-nav-item" 
             onclick="javascript:setTimeout(()=>{window.location = '<?= $project->url() ?>' },1000);"
          >
            <span class="img">
              <?php if($video = $project->video()->toFile()): ?>
                <span class="image_video_wrapper single-img-12-8">
                      <?php if ($page->isMobile()): ?>
                      <?php else: ?>
                        <video class="video"
                               id="<?= $covertwo->parallax() ?>"
                               <?php if ($covertwo = $project->covertwo()->toFile()): ?>
                               poster="<?= $covertwo->url() ?>"
                               <?php endif ?>
                               src="<?= $video->url() ?>"
                               preload 
                               autobuffer 
                               muted 
                               playsinline
                               autoplay
                               loop
                        >
                        </video>
                      <?php endif ?>
                  <img src="<?= $coverone->url() ?>"
                       alt="<?= $coverone->alt()->esc() ?>"
                       onmouseover="this.style.opacity = 0"
                       onmouseout="this.style.opacity = 1"
                       class="project_image_alt"
                       id="<?= $coverone->parallax() ?>"
                  >
                </span>
              <?php elseif ($covertwo = $project->covertwo()->toFile()): ?>
                <span class="image_video_wrapper single-img-12-8">
                <?php if ($page->isMobile()): ?>
                <?php else: ?>
                  <img src="<?= $covertwo->url() ?>"
                       alt="<?= $covertwo->alt()->esc() ?>"
                       class="project_image_alt"
                       id="<?= $covertwo->parallax() ?>"
                  />
                <?php endif ?>
                  <img src="<?= $coverone->url() ?>"
                       onmouseover="this.style.opacity = 0"
                       onmouseout="this.style.opacity = 1"
                       alt="<?= $coverone->alt()->esc() ?>"
                       class="project_image_alt"
                       id="<?= $coverone->parallax() ?>"
                  />
                </span>
              <?php else: ?>
                <span class="image_video_wrapper single-img-12-8">
                  <img src="<?= $coverone->url() ?>"
                       alt="<?= $coverone->alt()->esc() ?>"
                       class="project_image_alt"
                       id="<?= $coverone->parallax() ?>"
                  >
                </span>
              <?php endif ?>
            </span>
            <figcaption class="img-caption">
                <p><?= $project->title()->esc() ?></p>
                <p class="subheading homepage"><?= $project->subheadline()->esc() ?></p>
              </figcaption>
          </a>
        </li>
        <?php endif ?>
      <?php endforeach ?>
  </ul>
</div>


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