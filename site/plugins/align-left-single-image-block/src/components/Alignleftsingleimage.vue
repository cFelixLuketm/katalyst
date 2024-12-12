<template>
    <k-block-figure
      :is-empty="!image.url"
      empty-icon="audio-file"
      empty-text="No file selected yet …"
      @open="open"
      @update="update"
    >
        <div>
            <div class="k-aspect-wrapper-align-left">
                <k-aspect-ratio>
                  <img
                    v-if="image.url"
                    :src="image.url"
                    alt=""
                  >
                </k-aspect-ratio>
                <k-aspect-ratio>
                </k-aspect-ratio>
            </div>
        </div>
    </k-block-figure>
</template>
  
  <script>
  export default {
    computed: {
      image() {
        return this.content.image[0] || {};
      },
    }
  };
  </script>

<style lang="scss">
  .k-aspect-wrapper-align-left {
    display: grid;
    grid-template-columns: 1fr 0.2fr;
  }
  img.duo-image-panel {
      width: 100%;
      height: 100%;
      object-fit: cover;
  }
</style>