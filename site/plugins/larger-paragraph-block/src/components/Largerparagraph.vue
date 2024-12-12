<template>
  <div class="k-aspect-wrapper-duo">
    <h1></h1>
    <span class="paragraph-wrapper">
      <span>
        <p>{{ content.title }}</p>
        <br>
        <p>{{ content.paragraphone }}</p>
        <br>
        <p>{{ content.paragraphtwo }}</p>
      </span>
    </span>
  </div>
</template>
  
<script>
  export default {
    computed: {
      title() {
        return this.content.titleo[0] || {};
      },
      paragraphone() {
        return this.content.paragraphone[0] || {};
      },
      paragraphtwo() {
        return this.content.paragraphtwo[0] || {};
      },
    }
  };
</script>

<style lang="scss">
  .k-aspect-wrapper-duo {
    display: grid;
    grid-template-columns: 1fr;
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