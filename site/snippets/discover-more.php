<div class="line-wrapper">
   <div class="line"></div>
</div>

<div class="homepage-paragraph__two">
   <h2><?= $site->wearekatalystparagraphtwo()->html() ?></h2>
   <span class="link_wrapper__h2-homepage">
      <?php if ($ourstudiourl = page('services')): endif; ?>
      <p onclick="javascript:setTimeout(()=>{window.location = '<?= $ourstudiourl->url(); ?>' },1000);"
         class="insights__subtitle"
         id="discoverMoreLinks">
         <?= $site->wearekatalystparagraphtwotitle()->html() ?>
      </p>
      <?php if ($insightsurl = page('news')): endif; ?>
      <p onclick="javascript:setTimeout(()=>{window.location = '<?= $insightsurl->url(); ?>' },1000);"
         class="insights__subtitle"
         id="discoverMoreLinks">
         <?= $site->wearekatalystparagraphtwotitletwo()->html() ?>
      </p>
   </span>
</div>

<div class="line-wrapper">
   <div class="line"></div>
</div>