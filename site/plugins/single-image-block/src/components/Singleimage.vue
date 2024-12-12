<template>
    <k-block-figure
      :is-empty="!image.url"
      empty-icon="audio-file"
      empty-text="No file selected yet …"
      @open="open"
      @update="update"
    >
        <div>
            <div class="k-aspect-wrapper-single">
                <k-aspect-ratio>
                  <img
                    v-if="image.url"
                    :src="image.url"
                    alt=""
                    class="duo-image-panel"
                  >
                </k-aspect-ratio>
                <span>
                  <p>{{ content.toptitleblack }}</p>
                  <br>
                  <p>{{ content.bottomtitlegrey }}</p>
                </span>
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
      toptitleblack() {
        return this.content.title[0] || {};
      },
      bottomtitlegrey() {
        return this.content.titleone[0] || {};
      }
    }
  };
  </script>

<style lang="scss">
  .k-aspect-wrapper-single {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem;
  }
  img.duo-image-panel {
      width: 100%;
      height: 100%;
      object-fit: cover;
  }

  .paragraph-wrapper {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem 1rem;
  }
</style>