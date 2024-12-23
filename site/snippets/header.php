<!DOCTYPE html>
<!-- (c) Katalyst 2024 -->
<!-- Site Development; Felix Luke -->
<!-- Site Design; Felix Luke & Jordan Smith  -->
<html lang="en">

<head>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#000000">
  <meta name="robots" content="index,follow">
  <meta name="googlebot" content="index,follow">

  <meta http-equiv="Expires" CONTENT="0">
  <meta http-equiv="Pragma" CONTENT="no-cache">
  <meta http-equiv="Cache-Control" CONTENT="no-cache">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170813881-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-170813881-1');
  </script>

  <?php
  $detect = $page->detect();
  // https://github.com/serbanghita/Mobile-Detect/wiki/Code-examples
  $detect->is('Chrome');

  $isMobile = $page->isMobile();
  // or
  $isMobile = Bnomei\MobileDetect::instance()->isMobile();
  $isTablet = $page->isTablet();
  ?>

  <title><?= $site->title() ?></title>
  <meta name="keywords" content="">
  <meta name="subject" content="">
  <meta name="description" content="<?= $site->about() ?>">

  <?= css('assets/scss/stylesheet.css') ?>

  <?= css([
    'assets/css/index.css',
    '@auto'
  ]) ?>
</head>


<body>

  <header class="header" id="header">
    <?php if ($logo = $site->image('logo.png')): ?>
      <span class="logo-wrapper">
        <h3 class="logo blackpage-nav-item"
          id="pageNav"
          onclick="javascript:setTimeout(()=>{window.location = '<?= $site->url() ?>' },1000);">
          KATALYST
        </h3>
      </span>
    <?php endif ?>
    <nav class="menu-button">
      <div id="menuToggle">
        <input class="mobile-input" type="checkbox" />
        <span class="lines"></span>
        <span class="lines"></span>
        <span class="lines"></span>
        <ul id="menu">
        </ul>
      </div>
    </nav>
    <nav class="menu">
      <?php foreach ($site->children()->listed()->paginate(1) as $item): ?>
        <a
          <?php e($item->isOpen(), 'aria-current="page"') ?>
          onclick="javascript:setTimeout(()=>{window.location = '<?= $item->url() ?>' },1000);"
          class="page-nav-items projects-nav-item">
          <?= $item->title()->esc() ?>
        </a>
      <?php endforeach ?>

      <?php foreach ($site->children()->listed()->offset(1)->paginate(2) as $item): ?>
        <a
          <?php e($item->isOpen(), 'aria-current="page"') ?>
          onclick="javascript:setTimeout(()=>{window.location = '<?= $item->url() ?>' },1000);"
          class="page-nav-items blackpage-nav-item">
          <?= $item->title()->esc() ?>
        </a>
      <?php endforeach ?>

      <a href="mailto:<?= $site->footerleftlink() ?>"
        class="contact-button">
        Contact
      </a>
    </nav>
  </header>


  <div class="mobile-nav">
    <nav class="menu-mobile">
      <?php foreach ($site->children()->listed()->paginate(1) as $item): ?>
        <a
          <?php e($item->isOpen(), 'aria-current="page"') ?>
          onclick="javascript:setTimeout(()=>{window.location = '<?= $item->url() ?>' },1000);"
          class="page-nav-items projects-nav-item">
          <?= $item->title()->esc() ?>
        </a>
      <?php endforeach ?>

      <?php foreach ($site->children()->listed()->offset(1)->paginate(2) as $item): ?>
        <a
          <?php e($item->isOpen(), 'aria-current="page"') ?>
          onclick="javascript:setTimeout(()=>{window.location = '<?= $item->url() ?>' },1000);"
          class="page-nav-items blackpage-nav-item">
          <?= $item->title()->esc() ?>
        </a>
      <?php endforeach ?>

      <a href="mailto:<?= $site->footerleftlink() ?>"
        class="contact-button">
        Contact
      </a>
    </nav>

    <div class="mobile-nav-socials">
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
      <?php endif ?>
    </div>
  </div>

  <?php if ($page->isChildOf('work')): ?>
    <style>
      html,
      body {
        background-color: var(--base-white);
        ;
      }

      meta {
        content: #ffffff;
      }

      header.header {
        -webkit-filter: invert(100%);
        filter: invert(100%);
        border-bottom: 1px solid var(--base-white);
      }

      .line {
        height: 1px;
      }

      img.footer_logo {
        -webkit-filter: invert(0%);
        filter: invert(0%);
      }

      .loader {
        -webkit-filter: invert(100%);
        filter: invert(100%);
        border-top: 1px solid var(--base-white);
      }

      div.mobile-nav {
        background-color: var(--base-white);
        border-top: 1px solid var(--base-black);
      }


      .menu-mobile a {
        color: var(--base-black);
      }

      /* .menu a[aria-current] {
        color: var(--white-temp-text);
      } */

      .menu-mobile a:hover {
        color: var(--white-temp-text);
      }

      .scroll__container>section {
        background-color: var(--base-white);
      }

      .scroll__container>*:nth-last-child(2) {
        border-bottom: 0.75px solid var(--base-black);
      }

      footer.footer {
        background-color: var(--base-white);
      }

      h1 {
        color: var(--base-black);
        /* height: 15vh; */
      }

      /* @media screen and (max-width: 768px) {
        h1 {
          height: 7.5vh;
        }
      } */

      h2 {
        color: var(--base-black);
      }

      p.main-paragraph {
        color: var(--white-temp-text)
      }

      p.list-title {
        color: var(--base-black);
      }

      p.subheading {
        color: var(--white-temp-text);
      }

      a.title_link {
        color: var(--white-temp-text);
      }

      p.title_link {
        color: var(--white-temp-text);
      }

      a.title_link:hover {
        color: var(--base-black);
      }

      a.title_link.active {
        color: var(--base-black);
      }

      a.main-paragraph {
        color: var(--base-black);
      }

      p#footerLinks:hover {
        color: var(--base-black);
      }

      article {
        background-color: white;
      }

      footer.footer-homepage {
        background-color: var(--base-white);
      }

      section {
        background-color: var(--base-white);
      }

      .footer-contact {
        color: var(--white-temp-text);
      }

      .footer-contact:hover {
        color: var(--base-black);
      }

      div#footerLine {
        background-color: var(--base-black);
      }
    </style>
  <?php elseif ($page->is('work')): ?>
    <style>
      html,
      body {
        background-color: var(--base-white);
        ;
      }

      meta {
        content: #ffffff;
      }

      header.header {
        -webkit-filter: invert(100%);
        filter: invert(100%);
        border-bottom: 1px solid var(--base-white);
      }

      .line {
        height: 1px;
      }

      img.footer_logo {
        -webkit-filter: invert(0%);
        filter: invert(0%);
      }

      .loader {
        -webkit-filter: invert(100%);
        filter: invert(100%);
        border-top: 1px solid var(--base-white);
      }

      div.mobile-nav {
        background-color: var(--base-white);
        border-top: 1px solid var(--base-black);
      }


      .menu-mobile a {
        color: var(--base-black);
      }

      /* .menu a[aria-current] {
        color: var(--white-temp-text);
      } */

      .menu-mobile a:hover {
        color: var(--white-temp-text);
      }


      .scroll__container>section {
        background-color: var(--base-white);
      }

      .scroll__container>*:nth-last-child(2) {
        border-bottom: 0.75px solid var(--base-black);
      }

      footer.footer {
        background-color: var(--base-white);
      }

      h1,
      h2 {
        color: var(--base-black);
      }

      p.main-paragraph {
        color: var(--white-temp-text)
      }

      p.list-title {
        color: var(--base-black);
      }

      p.subheading {
        color: var(--white-temp-text);
      }

      a.title_link {
        color: var(--white-temp-text);
      }

      p.title_link {
        color: var(--white-temp-text);
      }

      a.title_link:hover {
        color: var(--base-black);
      }

      a.title_link.active {
        color: var(--base-black);
      }

      a.main-paragraph {
        color: var(--base-black);
      }

      p#footerLinks:hover {
        color: var(--base-black);
      }

      p.title_link:hover {
        color: var(--base-black);
      }

      p.title_link.active {
        color: var(--base-black);
      }

      article {
        background-color: white;
      }

      footer.footer-homepage {
        background-color: var(--base-white);
      }

      section {
        background-color: var(--base-white);
      }

      .footer-contact {
        color: var(--white-temp-text);
      }

      .footer-contact:hover {
        color: var(--base-black);
      }

      div#footerLine {
        background-color: var(--base-black);
      }
    </style>
  <?php endif ?>


  <div class="loader"></div>

  <main class="main" id="main">