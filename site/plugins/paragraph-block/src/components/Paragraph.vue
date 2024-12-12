<template>
  <div class="k-aspect-wrapper-duo">
    <h1>{{ content.title }}</h1>
    <span class="paragraph-wrapper">
      <span>
        <p>{{ content.titleone }}</p>
        <br>
        <p>{{ content.paragraphone }}</p>
      </span>
      <span>
        <p>{{ content.titletwo }}</p>
        <br>
        <p>{{ content.paragraphtwo }}</p>
        <br>
      </span>
      <span>
        <p>{{ content.titlethree }}</p>
        <br>
        <p>{{ content.paragraphthree }}</p>
        <br>
      </span>
      <span>
        <p>{{ content.titlefour }}</p>
        <br>
        <p>{{ content.paragraphfour }}</p>
        <br>
      </span>
    </span>
  </div>
</template>
  
<script>
  export default {
    computed: {
      title() {
        return this.content.title[0] || {};
      },
      titleone() {
        return this.content.titleone[0] || {};
      },
      paragraphone() {
        return this.content.paragraphone[0] || {};
      },
    }
  };
</script>

<style lang="scss">
  .k-aspect-wrapper-duo {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
  }

  .paragraph-wrapper {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem 1rem;
  }

  h1 {
    font-size: 35px;
  }
</style>