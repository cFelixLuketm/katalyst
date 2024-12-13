<?php snippet('header') ?>

<?php snippet('layouts', ['field' => $page->layout()])  ?>

<style>
  li.column {
    margin-bottom: 0px;
  }

  /* section.footer-block {
    display: none;
  } */
</style>

<article class="ourstudio article">
  <div class="scroll__container">
    <section id="header">
      <div class="title-wrapper about-header">
        <div></div>
        <div class="project__header">
          <span class="link_wrapper__h1">
            <h2><?= $page->intro()->esc() ?></h2>
          </span>
        </div>
      </div>
    </section>

    <div class="line-wrapper" id="projectTopLine">
      <div class="line"></div>
    </div>

    <?php snippet('approachandprocess') ?>

    <div class="line-wrapper" id="projectTopLine">
      <div class="line"></div>
    </div>

    <?php snippet('services') ?>

    <div class="line-wrapper" id="projectTopLine">
      <div class="line"></div>
    </div>

    <?php snippet('clients') ?>

    <style>
      .email-prefooter-wrapper {
        display: grid;
        grid-template-columns: 1fr;
        ;
        padding-top: var(--single-space);
        padding-bottom: var(--pent-space);
        padding-left: var(--padding);
        padding-right: var(--padding);
        box-sizing: border-box;
      }

      @media screen and (max-width: 768px) {
        .email-prefooter-wrapper {
          display: grid;
          grid-template-columns: 1fr;
          width: 80vw;
          padding-top: var(--mobile-double-space);
          padding-bottom: var(--mobile-pent-space);
        }
      }
    </style>

    <div class="line-wrapper">
      <div class="line"></div>
    </div>

    <section class="email-prefooter-wrapper">
      <span>
        <h2>Has your brand got a story to tell?</h2>
      </span>
      <span>
        <a href="mailto:hello@designbykatalyst.com"
          class="large-mail aboutpage">
          ⮡ hello@designbykatalyst.com
        </a>
      </span>
    </section>

    <section class="footer-block">
      <?php snippet('footer-content') ?>
    </section>

  </div>

</article>

<script type="module" src="./assets/js/app.js"></script>
<script type="module" src="./assets/js/testimonialsapp.js"></script>

<?php snippet('footer') ?>


<script>
  const header = document.getElementById("header");
  var headerheight = header.offsetHeight;
  const element = document.querySelector('.article');
  element.style.marginTop = headerheight + 'px';
  element.style.height = window.innerHeight - headerheight + 'px'

  // document.addEventListener("DOMContentLoaded", function(){
  //    const mainwrapper = document.getElementById('main');
  //    mainwrapper.classList.remove('main'); 
  // });
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