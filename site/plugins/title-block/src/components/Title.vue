<template>
    <h1>{{ content.title }}</h1>
</template>
  
<script>
  export default {
    computed: {
      title() {
        return this.content.title[0] || {};
      }
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