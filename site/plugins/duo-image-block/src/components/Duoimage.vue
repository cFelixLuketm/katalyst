<template>
    <k-block-figure
      :is-empty="!imageone.url"
      empty-icon="audio-file"
      empty-text="No file selected yet …"
      @open="open"
      @update="update"
    >
        <div>
            <div class="k-aspect-wrapper-duo">
                <k-aspect-ratio>
                  <img
                    v-if="imageone.url"
                    :src="imageone.url"
                    alt=""
                    class="duo-image-panel"
                  >
                </k-aspect-ratio>
                <k-aspect-ratio>
                  <img
                    v-if="imagetwo.url"
                    :src="imagetwo.url"
                    alt=""
                    class="duo-image-panel"
                  >
                </k-aspect-ratio>
            </div>
        </div>
    </k-block-figure>
</template>
  
  <script>
  export default {
    computed: {
      imageone() {
        return this.content.imageone[0] || {};
      },
      imagetwo() {
        return this.content.imagetwo[0] || {};
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
  img.duo-image-panel {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>