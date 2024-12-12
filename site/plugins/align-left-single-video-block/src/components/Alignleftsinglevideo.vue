<template>
    <k-block-figure
      :is-empty="!video.url"
      empty-icon="audio-file"
      empty-text="No file selected yet …"
      @open="open"
      @update="update"
    >
        <div>
            <div class="k-aspect-wrapper-align-left">
                <k-aspect-ratio>
                  <video v-if="video.url"
                         :src="video.url"
                         class="single-video-panel"
                         preload 
                         autobuffer 
                         muted 
                         playsinline
                         autoplay
                         loop
                   >
                   </video>
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
      video() {
        return this.content.video[0] || {};
      },
    }
  };
  </script>

<style lang="scss">
  .k-aspect-wrapper-align-left {
    display: grid;
    grid-template-columns: 1fr 0.2fr;
  }
  video.single-video-panel {
      width: 100%;
      height: 100%;
      object-fit: cover;
  }
</style>