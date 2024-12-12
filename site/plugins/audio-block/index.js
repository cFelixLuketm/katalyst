(function() {
  "use strict";
  function normalizeComponent(scriptExports, render, staticRenderFns, functionalTemplate, injectStyles, scopeId, moduleIdentifier, shadowMode) {
    var options = typeof scriptExports === "function" ? scriptExports.options : scriptExports;
    if (render) {
      options.render = render;
      options.staticRenderFns = staticRenderFns;
      options._compiled = true;
    }
    if (functionalTemplate) {
      options.functional = true;
    }
    if (scopeId) {
      options._scopeId = "data-v-" + scopeId;
    }
    var hook;
    if (moduleIdentifier) {
      hook = function(context) {
        context = context || // cached call
        this.$vnode && this.$vnode.ssrContext || // stateful
        this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext;
        if (!context && typeof __VUE_SSR_CONTEXT__ !== "undefined") {
          context = __VUE_SSR_CONTEXT__;
        }
        if (injectStyles) {
          injectStyles.call(this, context);
        }
        if (context && context._registeredComponents) {
          context._registeredComponents.add(moduleIdentifier);
        }
      };
      options._ssrRegister = hook;
    } else if (injectStyles) {
      hook = shadowMode ? function() {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        );
      } : injectStyles;
    }
    if (hook) {
      if (options.functional) {
        options._injectStyles = hook;
        var originalRender = options.render;
        options.render = function renderWithStyleInjection(h, context) {
          hook.call(context);
          return originalRender(h, context);
        };
      } else {
        var existing = options.beforeCreate;
        options.beforeCreate = existing ? [].concat(existing, hook) : [hook];
      }
    }
    return {
      exports: scriptExports,
      options
    };
  }
  const _sfc_main = {
    computed: {
      poster() {
        return this.content.poster[0] || {};
      },
      source() {
        return this.content.source[0] || {};
      }
    }
  };
  var _sfc_render = function render() {
    var _vm = this, _c = _vm._self._c;
    return _c("k-block-figure", { attrs: { "is-empty": !_vm.source.url, "empty-icon": "audio-file", "empty-text": "No file selected yet …" }, on: { "open": _vm.open, "update": _vm.update } }, [_c("div", { staticClass: "k-block-type-audio-wrapper" }, [_c("div", [_c("k-aspect-ratio", { staticClass: "k-block-type-audio-poster", attrs: { "cover": "true", "ratio": "1/1" } }, [_vm.poster.url ? _c("img", { attrs: { "src": _vm.poster.url, "alt": "" } }) : _vm._e()])], 1), _c("div", [_c("h1", { staticClass: "k-block-type-audio-title" }, [_vm._v(" " + _vm._s(_vm.content.title) + " ")]), _c("h2", { staticClass: "k-block-type-audio-subtitle" }, [_vm._v(" " + _vm._s(_vm.content.subtitle) + " ")]), _c("div", { staticClass: "k-block-type-audio-description", domProps: { "innerHTML": _vm._s(_vm.content.description) } }), _c("audio", { staticClass: "k-block-type-audio-element", attrs: { "controls": "" } }, [_c("source", { attrs: { "src": _vm.source.url, "type": "audio/mpeg" } })])])])]);
  };
  var _sfc_staticRenderFns = [];
  _sfc_render._withStripped = true;
  var __component__ = /* @__PURE__ */ normalizeComponent(
    _sfc_main,
    _sfc_render,
    _sfc_staticRenderFns,
    false,
    null,
    null,
    null,
    null
  );
  __component__.options.__file = "/Applications/MAMP/htdocs/katalyst/site/plugins/audio-block/src/components/Audio.vue";
  const Audio = __component__.exports;
  panel.plugin("cookbook/audio-block", {
    blocks: {
      audio: Audio
    }
  });
})();
