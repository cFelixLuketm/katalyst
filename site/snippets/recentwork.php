<div class="recent-work">
  <div class="line-wrapper">
    <div class="line" id="projectLine"></div>
  </div>
  <span class="link_wrapper__h2 recentwork-header">
    <h2>More Work</h2>
  </span>
  <ul class="grid-recent-work">
    <?php if ($prev = $page->prevListed()): ?>
      <li class="column">
        <a class="project-link projects-nav-item"
          onclick="javascript:setTimeout(()=>{window.location = '<?= $prev->url() ?>' },1000);">
          <?php if ($coverone = $prev->coverone()->toFile()): ?>
            <span class="img">
              <?php if ($covertwo = $prev->covertwo()->toFile()): ?>
                <span class="image_video_wrapper single-img-12-8">
                  <img src="<?= $covertwo->url() ?>"
                    alt="<?= $covertwo->alt()->esc() ?>"
                    class="project_image_alt" />
                  <img src="<?= $coverone->url() ?>"
                    onmouseover="this.style.opacity = 0"
                    onmouseout="this.style.opacity = 1"
                    alt="<?= $coverone->alt()->esc() ?>"
                    class="project_image_alt" />
                </span>
              <?php elseif ($video = $prev->video()->toFile()): ?>
                <span class="image_video_wrapper single-img-12-8">
                  <video class="video"
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
                    class="project_image_alt">
                </span>
              <?php else: ?>
                <span class="image_video_wrapper single-img-12-8">
                  <img src="<?= $coverone->url() ?>"
                    alt="<?= $coverone->alt()->esc() ?>"
                    class="project_image_alt">
                </span>
              <?php endif ?>
            </span>
          <?php endif ?>
          <figcaption class="img-caption">
            <p class="project-heading"><?= $prev->title()->esc() ?></p>
            <p class="subheading"><?= $prev->subheadline()->esc() ?></p>
          </figcaption>
        </a>
      </li>
    <?php endif ?>

    <?php if ($prev = $page->prevListed() == false): ?>
      <?php if ($next = $page->nextListed()->nextListed()): ?>
        <li class="column">
          <a class="project-link projects-nav-item"
            onclick="javascript:setTimeout(()=>{window.location = '<?= $next->url() ?>' },1000);">
            <?php if ($coverone = $next->coverone()->toFile()): ?>
              <span class="img">
                <?php if ($covertwo = $next->covertwo()->toFile()): ?>
                  <span class="image_video_wrapper single-img-12-8">
                    <img src="<?= $covertwo->url() ?>"
                      alt="<?= $covertwo->alt()->esc() ?>"
                      class="project_image_alt" />
                    <img src="<?= $coverone->url() ?>"
                      onmouseover="this.style.opacity = 0"
                      onmouseout="this.style.opacity = 1"
                      alt="<?= $coverone->alt()->esc() ?>"
                      class="project_image_alt" />
                  </span>
                <?php elseif ($video = $next->video()->toFile()): ?>
                  <span class="image_video_wrapper single-img-12-8">
                    <video class="video"
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
                      class="project_image_alt">
                  </span>
                <?php else: ?>
                  <span class="image_video_wrapper single-img-12-8">
                    <img src="<?= $coverone->url() ?>"
                      alt="<?= $coverone->alt()->esc() ?>"
                      class="project_image_alt">
                  </span>
                <?php endif ?>
              </span>
            <?php endif ?>
            <figcaption class="img-caption">
              <p class="project-heading"><?= $next->title()->esc() ?></p>
              <p class="subheading"><?= $next->subheadline()->esc() ?></p>
            </figcaption>
          </a>
        </li>
      <?php endif ?>
    <?php endif ?>

    <?php if ($next = $page->nextListed()): ?>
      <li class="column">
        <a class="project-link projects-nav-item"
          onclick="javascript:setTimeout(()=>{window.location = '<?= $next->url() ?>' },1000);">
          <?php if ($coverone = $next->coverone()->toFile()): ?>
            <span class="img">
              <?php if ($covertwo = $next->covertwo()->toFile()): ?>
                <span class="image_video_wrapper single-img-12-8">
                  <img src="<?= $covertwo->url() ?>"
                    alt="<?= $covertwo->alt()->esc() ?>"
                    class="project_image_alt" />
                  <img src="<?= $coverone->url() ?>"
                    onmouseover="this.style.opacity = 0"
                    onmouseout="this.style.opacity = 1"
                    alt="<?= $coverone->alt()->esc() ?>"
                    class="project_image_alt" />
                </span>
              <?php elseif ($video = $next->video()->toFile()): ?>
                <span class="image_video_wrapper single-img-12-8">
                  <video class="video"
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
                    class="project_image_alt">
                </span>
              <?php else: ?>
                <span class="image_video_wrapper single-img-12-8">
                  <img src="<?= $coverone->url() ?>"
                    alt="<?= $coverone->alt()->esc() ?>"
                    class="project_image_alt">
                </span>
              <?php endif ?>
            </span>
          <?php endif ?>
          <figcaption class="img-caption">
            <p class="project-heading"><?= $next->title()->esc() ?></p>
            <p class="subheading"><?= $next->subheadline()->esc() ?></p>
          </figcaption>
        </a>
      </li>
    <?php endif ?>

    <?php if ($next = $page->nextListed() == false): ?>
      <?php if ($prev = $page->prevListed()->prevListed()): ?>
        <li class="column">
          <a class="project-link projects-nav-item"
            onclick="javascript:setTimeout(()=>{window.location = '<?= $prev->url() ?>' },1000);">
            <?php if ($coverone = $prev->coverone()->toFile()): ?>
              <span class="img">
                <?php if ($covertwo = $prev->covertwo()->toFile()): ?>
                  <span class="image_video_wrapper single-img-12-8">
                    <img src="<?= $covertwo->url() ?>"
                      alt="<?= $covertwo->alt()->esc() ?>"
                      class="project_image_alt" />
                    <img src="<?= $coverone->url() ?>"
                      onmouseover="this.style.opacity = 0"
                      onmouseout="this.style.opacity = 1"
                      alt="<?= $coverone->alt()->esc() ?>"
                      class="project_image_alt" />
                  </span>
                <?php elseif ($video = $prev->video()->toFile()): ?>
                  <span class="image_video_wrapper single-img-12-8">
                    <video class="video"
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
                      class="project_image_alt">
                  </span>
                <?php else: ?>
                  <span class="image_video_wrapper single-img-12-8">
                    <img src="<?= $coverone->url() ?>"
                      alt="<?= $coverone->alt()->esc() ?>"
                      class="project_image_alt">
                  </span>
                <?php endif ?>
              </span>
            <?php endif ?>
            <figcaption class="img-caption">
              <p class="project-heading"><?= $prev->title()->esc() ?></p>
              <p class="subheading"><?= $prev->subheadline()->esc() ?></p>
            </figcaption>
          </a>
        </li>
      <?php endif ?>
    <?php endif ?>
  </ul>
  <div class="line-wrapper">
    <div class="line" id="projectLine"></div>
  </div>
</div>