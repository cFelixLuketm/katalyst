<template>
  <k-block-figure
    :is-empty="!source.url"
    empty-icon="audio-file"
    empty-text="No file selected yet …"
    @open="open"
    @update="update"
  >
    <div class="k-block-type-audio-wrapper">
      <div>
        <k-aspect-ratio
          class="k-block-type-audio-poster"
          cover="true"
          ratio="1/1"
        >
          <img
            v-if="poster.url"
            :src="poster.url"
            alt=""
          >
        </k-aspect-ratio>
      </div>
      <div>
        <h1 class="k-block-type-audio-title">
          {{ content.title }}
        </h1>
        <h2 class="k-block-type-audio-subtitle">
          {{ content.subtitle }}
        </h2>
        <div class="k-block-type-audio-description" v-html="content.description"></div>
        <audio class="k-block-type-audio-element" controls>
          <source :src="source.url" type="audio/mpeg">
        </audio>
      </div>
    </div>
  </k-block-figure>
</template>

<script>
export default {
  computed: {
    poster() {
      return this.content.poster[0] || {};
    },
    source() {
      return this.content.source[0] || {};
    }
  }
};
</script>
<style lang="scss">
.k-block-type-audio-wrapper {
  display: flex;
  padding: 1rem;
  background: black;
  color: white;
}
.k-block-type-audio-poster {
  width: 12rem;
  margin-right: 1rem;
  background: #333;
}
.k-block-type-audio-title,
.k-block-type-audio-subtitle {
  font-size: 1.5rem;
}
.k-block-type-audio-title {
  font-weight: 600;
}
.k-block-type-audio-subtitle {
  margin-bottom: 1rem;
  color: #999;
}
.k-block-type-audio-description {
  line-height: 1.5;
}
.k-block-type-audio-element {
  margin-top: 2rem;
  height: 2rem;
}
</style>