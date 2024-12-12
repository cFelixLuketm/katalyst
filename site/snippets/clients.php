
<?php $clienttab = $page->children()->listed()->offset(2)->paginate(1) ?>
<?php foreach ($clienttab as $clients): ?>
  <figcaption class="img-caption insight-date">
    <p><?= $clients->title() ?></p>
  </figcaption>
  <section id="intro">
      <div class="title-paragraph-wrapper-core approach">
        <span></span>
        <span>
          <h2><?= $clients->clientmainparagraph()->html() ?></h2>
        </span>
      </div>
  </section>
  <section id="projects">
    <div class="projects__sticky approach">
        <div class="slider__container">
            <div class="projects__slider"></div>
        </div>
    </div>
  </section>

  <!-- <section class="client-space">
    <div class="client-space">
    </div>
  </section> -->
<?php endforeach; ?>

