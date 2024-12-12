<style>
  .two-column-paragraph-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--padding);
    padding-top: var(--padding);
    padding-bottom:var(--pent-space);
  }
  
  .right-side-paragraphs-line-two-column {
    display: grid;
    grid-template-columns: 0.65fr 0.65fr 0.5fr;
  }

  @media screen and (max-width: 768px) {
    .two-column-paragraph-wrapper {
      grid-template-columns: 0fr 1fr;
      gap: 0px;
      padding-top: var(--mobile-tripple-space);
      padding-bottom: var(--mobile-pent-space);
      row-gap: var(--mobile-quad-space);
    }

    .right-side-paragraphs-line-two-column {
      display: grid;
      gap: var(--padding);
      grid-template-columns: 1fr 1fr 0fr;
    }
  }
</style>

<div class="two-colmn-parapgraph-wrapper">
  <div class="line-wrapper">
    <div class="line" id="projectLine"></div>
  </div>
  <div class="two-column-paragraph-wrapper">
    <span></span>
    <span class="right-side-paragraphs-line-two-column">
      <span>
        <p class="list-title"><?= $block->titleone()->html() ?></p>
        <br>
        <p class="main-paragraph"><?= $block->listoneone()->html() ?></p>
        <p class="main-paragraph"><?= $block->listonetwo()->html() ?></p>
        <p class="main-paragraph"><?= $block->listonethree()->html() ?></p>
        <p class="main-paragraph"><?= $block->listonefour()->html() ?></p>
        <p class="main-paragraph"><?= $block->listonefive()->html() ?></p>
        <p class="main-paragraph"><?= $block->listonesix()->html() ?></p>
        <p class="main-paragraph"><?= $block->listoneseven()->html() ?></p>
        <p class="main-paragraph"><?= $block->listoneeight()->html() ?></p>
        <p class="main-paragraph"><?= $block->listonenine()->html() ?></p>
        <p class="main-paragraph"><?= $block->listoneten()->html() ?></p>
      </span>
      <span>
        <p class="list-title"><?= $block->titletwo()->html() ?></p>
        <br>
        <p class="main-paragraph"><?= $block->listtwoone()->html() ?></p>
        <p class="main-paragraph"><?= $block->listtwotwo()->html() ?></p>
        <p class="main-paragraph"><?= $block->listtwothree()->html() ?></p>
        <p class="main-paragraph"><?= $block->listtwofour()->html() ?></p>
        <p class="main-paragraph"><?= $block->listtwofive()->html() ?></p>
        <p class="main-paragraph"><?= $block->listtwosix()->html() ?></p>
        <p class="main-paragraph"><?= $block->listtwoseven()->html() ?></p>
        <p class="main-paragraph"><?= $block->listtwoeight()->html() ?></p>
        <p class="main-paragraph"><?= $block->listtwonine()->html() ?></p>
        <p class="main-paragraph"><?= $block->listtwoten()->html() ?></p>
      </span>
      <span>
        <p class="list-title"><?= $block->titlethree()->html() ?></p>
        <br>
        <p class="main-paragraph"><?= $block->listthreeone()->html() ?></p>
        <p class="main-paragraph"><?= $block->listthreetwo()->html() ?></p>
        <p class="main-paragraph"><?= $block->listthreethree()->html() ?></p>
        <p class="main-paragraph"><?= $block->listthreefour()->html() ?></p>
        <p class="main-paragraph"><?= $block->listthreefive()->html() ?></p>
        <p class="main-paragraph"><?= $block->listthreesix()->html() ?></p>
        <p class="main-paragraph"><?= $block->listthreeseven()->html() ?></p>
        <p class="main-paragraph"><?= $block->listthreeeight()->html() ?></p>
        <p class="main-paragraph"><?= $block->listthreenine()->html() ?></p>
        <p class="main-paragraph"><?= $block->listthreeten()->html() ?></p>
      </span>
    </span> 
  </div>
</div>