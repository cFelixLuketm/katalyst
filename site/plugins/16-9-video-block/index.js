(function() {
  "use strict";
  function normalizeComponent(scriptExports, render, staticRenderFns, functionalTemplate, injectStyles, scopeId, moduleIdentifier, shadowMode) {
    var options = typeof scriptExports === "function" ? scriptExports.options : scriptExports;
    if (render) {
      options.render = render;
      options.staticRenderFns = staticRenderFns;
      options._compiled = true;
    }
    return {
      exports: scriptExports,
      options
    };
  }
  const _sfc_main = {
    computed: {
      video() {
        return this.content.video[0] || {};
      }
    }
  };
  var _sfc_render = function render() {
    var _vm = this, _c = _vm._self._c;
    return _c("k-block-figure", { attrs: { "is-empty": !_vm.video.url, "empty-icon": "audio-file", "empty-text": "No file selected yet …" }, on: { "open": _vm.open, "update": _vm.update } }, [_c("div", [_c("div", { staticClass: "k-aspect-wrapper-single-16-9" }, [_c("k-aspect-ratio", [_vm.video.url ? _c("video", { staticClass: "single-video-panel", attrs: { "src": _vm.video.url, "preload": "", "autobuffer": "", "muted": "", "playsinline": "", "autoplay": "", "loop": "" }, domProps: { "muted": true } }) : _vm._e()])], 1)])]);
  };
  var _sfc_staticRenderFns = [];
  _sfc_render._withStripped = true;
  var __component__ = /* @__PURE__ */ normalizeComponent(
    _sfc_main,
    _sfc_render,
    _sfc_staticRenderFns
  );
  __component__.options.__file = "/Applications/MAMP/htdocs/designbykatalyst.com_01_08_24/site/plugins/16-9-video-block/src/components/Sixteen_nine_video.vue";
  const Sixteen_nine_video = __component__.exports;
  panel.plugin("cookbook/16-9-video-block", {
    blocks: {
      sixteen_nine_video: Sixteen_nine_video
    }
  });
})();