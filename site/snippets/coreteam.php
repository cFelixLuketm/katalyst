
<?php $coreteamtab = $page->children()->listed()->offset(1)->paginate(1) ?>
<?php foreach ($coreteamtab as $coreteam): ?>
  <div class="core-team approach">
    <div class="title-paragraph-wrapper-core">
      <span>
        <h2><?= $coreteam->coreteammainparagraph()->html() ?></h2>
      </span>
      <ul class="team-core">
        <li class="column">
          <span class="img team-img">
            <?php $jordanimg = $coreteam->jordanimage()->toFile(); ?>
              <img src="<?= $jordanimg->url() ?>"
                   class="team-image"
                   alt="<?= $jordanimg->alt()->esc() ?>"
                   id="<?= $jordanimg->parallax() ?>"
              >
          </span>
          <figcaption class="img-caption-team">
              <span class="team-member__sub">
                <h3 class="white-subtitle"><?= $coreteam->jordanname()->html() ?></h3>
                <h3 class="white-subtitle"><?= $coreteam->jordantitleone()->html() ?></h3>
                <h3 class="white-subtitle"><?= $coreteam->jordantitletwo()->html() ?></h3>
              </span>
              <span class="team-member__paragraph">
                <p class="main-paragraph"><?= $coreteam->jordanparagraph()->html() ?></p>
              </span>
          </figcaption>
        </li>
  
        <li class="column">
          <span class="img team-img">
            <?php $maximg = $coreteam->maximage()->toFile(); ?>
              <img src="<?= $maximg->url() ?>"
                   class="team-image"
                   alt="<?= $maximg->alt()->esc() ?>"
                   id="<?= $maximg->parallax() ?>"
              >
          </span>
          <figcaption class="img-caption-team">
            <span class="team-member__sub">
              <h3 class="white-subtitle"><?= $coreteam->maxname()->html() ?></h3>
              <h3 class="white-subtitle"><?= $coreteam->maxtitleone()->html() ?></h3>
              <h3 class="white-subtitle"><?= $coreteam->maxtitletwo()->html() ?></h3>
            </span>
            <span class="team-member__paragraph">
              <p class="main-paragraph"><?= $coreteam->maxparagraph()->html() ?></p>
            </span>
          </figcaption>
        </li>
      </ul> 
    </div>
  </div>
<?php endforeach; ?>