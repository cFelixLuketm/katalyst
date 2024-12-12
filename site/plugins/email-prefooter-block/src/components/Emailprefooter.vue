<template>
  <div class="k-aspect-wrapper-email">
    <h1>{{ content.title }}</h1>
    <h1>{{ content.email }}</h1>
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
  .k-aspect-wrapper-email {
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