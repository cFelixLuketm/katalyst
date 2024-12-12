<template>
  <div class="k-aspect-wrapper-duo-colmn">
    <span></span>
    <span></span>
    <span>
      <p>{{ content.titleone }}</p>
      <br>
      <p>{{ content.listoneone }}</p>
      <p>{{ content.listonetwo }}</p>
      <p>{{ content.listonethree }}</p>
      <p>{{ content.listonefour }}</p>
      <p>{{ content.listonefive }}</p>
      <p>{{ content.listonesix }}</p>
      <p>{{ content.listoneseven }}</p>
      <p>{{ content.listoneeight }}</p>
      <p>{{ content.listonenine }}</p>
      <p>{{ content.listoneten }}</p>
    </span>
    <span>
      <p>{{ content.titletwo }}</p>
      <br>
      <p>{{ content.listtwoone }}</p>
      <p>{{ content.listtwotwo }}</p>
      <p>{{ content.listtwothree }}</p>
      <p>{{ content.listtwofour }}</p>
      <p>{{ content.listtwofive }}</p>
      <p>{{ content.listtwosix }}</p>
      <p>{{ content.listtwoseven }}</p>
      <p>{{ content.listtwoeight }}</p>
      <p>{{ content.listtwonine }}</p>
      <p>{{ content.listtwoten }}</p>
    </span>
    <span>
      <p>{{ content.titlethree }}</p>
      <br>
      <p>{{ content.listthreeone }}</p>
      <p>{{ content.listthreetwo }}</p>
      <p>{{ content.listthreethree }}</p>
      <p>{{ content.listthreefour }}</p>
      <p>{{ content.listthreefive }}</p>
      <p>{{ content.listthreesix }}</p>
      <p>{{ content.listthreeseven }}</p>
      <p>{{ content.listthreeeight }}</p>
      <p>{{ content.listthreenine }}</p>
      <p>{{ content.listthreeten }}</p>
    </span>
  </div>
</template>
  
<script>
  export default {
    computed: {
      titleone() {
        return this.content.titleone[0] || {};
      },
      titletwo() {
        return this.content.titletwo[0] || {};
      },
    }
  };
</script>

<style lang="scss">
  .k-aspect-wrapper-duo-colmn {
    display: grid;
    grid-template-columns: 1.15fr 2fr 1fr 1fr 1fr;
    gap: 1rem;
  }
</style>