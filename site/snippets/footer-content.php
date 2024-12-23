<footer class="footer-homepage" id="footer">
  <!-- <footer class="footer" id="footer"> -->
  <div class="footer-paragraph-wrapper" id="footerCont">
    <span class="left-side-paragraph">
      <span>
        <p class="list-title"><?= $site->footerlefttitle() ?></p>
        <br>
        <p class="main-paragraph"><?= $site->footerleftparagraph() ?></p>
        <br>
        <a class="footer-contact"
          href="mailto:<?= $site->footerleftlink() ?>">
          ⮡ Contact
        </a>
      </span>
      <span class="copyright-mobile">
        <p class="main-paragraph footercopyright">Copyright © <?= date("Y") ?> KATALYST™</p>
      </span>
      <span></span>
    </span>
    <span class="right-side-paragraphs-footer">
      <span>
        <p class="list-title"><?= $site->footerrightfirsttitle() ?></p>
        <br>
        <?php if ($site->footerrightfirstlinktwo()->isNotEmpty()): ?>
          <?php foreach ($site->children()->listed()->offset(3)->paginate(1) as $item): ?>
            <p class="main-paragraph blackpage-nav-item"
              id="footerLinks"
              onclick="javascript:setTimeout(()=>{window.location = '<?= $item->url() ?>' },1000);">
              ⮡ <?= $site->footerrightfirstlinktwo() ?>
            </p>
          <?php endforeach ?>
        <?php endif ?>
        <?php if ($site->footerrightfirstlinkthree()->isNotEmpty()): ?>
          <?php foreach ($site->children()->listed()->offset(4)->paginate(1) as $item): ?>
            <p class="main-paragraph blackpage-nav-item"
              id="footerLinks"
              onclick="javascript:setTimeout(()=>{window.location = '<?= $item->url() ?>' },1000);">
              ⮡ <?= $site->footerrightfirstlinkthree() ?>
            </p>
          <?php endforeach ?>
        <?php endif ?>
        <?php if ($site->footerrightfirstlinkfour()->isNotEmpty()): ?>
          <?php foreach ($site->children()->listed()->offset(5)->paginate(1) as $item): ?>
            <p class="main-paragraph blackpage-nav-item"
              id="footerLinks"
              onclick="javascript:setTimeout(()=>{window.location = '<?= $item->url() ?>' },1000);">
              ⮡ <?= $site->footerrightfirstlinkfour() ?>
            </p>
          <?php endforeach ?>
        <?php endif ?>
      </span>
      <span>
        <p class="list-title"><?= $site->footerrightsecondtitle() ?></p>
        <br>
        <?php if ($site->footerrightsecondlinkone()->isNotEmpty()): ?>
          <p href="<?= $site->footerrightsecondlinkonelink() ?>"
            target="blank"
            class="main-paragraph"
            id="footerLinks">
            ⮡ <?= $site->footerrightsecondlinkone() ?>
          </p>
        <?php endif ?>
        <?php if ($site->footerrightsecondlinktwo()->isNotEmpty()): ?>
          <p href="<?= $site->footerrightsecondlinktwolink() ?>"
            target="blank"
            class="main-paragraph"
            id="footerLinks">
            ⮡ <?= $site->footerrightsecondlinktwo() ?>
          </p>
          <br>
        <?php endif ?>
      </span>
      <span class="copyright-desktop">
        <p class="main-paragraph"><?= $site->copyright() ?></p>
      </span>
    </span>
  </div>

  <h1 class="logo">KATALYST</h1>
  <!-- </footer> -->
</footer>