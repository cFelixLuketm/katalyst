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
      title() {
        return this.content.title[0] || {};
      },
      titleone() {
        return this.content.titleone[0] || {};
      },
      paragraphone() {
        return this.content.paragraphone[0] || {};
      }
    }
  };
  var _sfc_render = function render() {
    var _vm = this, _c = _vm._self._c;
    return _c("div", { staticClass: "k-aspect-wrapper-duo" }, [_c("h1", [_vm._v(_vm._s(_vm.content.title))]), _c("span", { staticClass: "paragraph-wrapper" }, [_c("span", [_c("p", [_vm._v(_vm._s(_vm.content.titleone))]), _c("br"), _c("p", [_vm._v(_vm._s(_vm.content.paragraphone))])]), _c("span", [_c("p", [_vm._v(_vm._s(_vm.content.titletwo))]), _c("br"), _c("p", [_vm._v(_vm._s(_vm.content.paragraphtwo))]), _c("br")]), _c("span", [_c("p", [_vm._v(_vm._s(_vm.content.titlethree))]), _c("br"), _c("p", [_vm._v(_vm._s(_vm.content.paragraphthree))]), _c("br")]), _c("span", [_c("p", [_vm._v(_vm._s(_vm.content.titlefour))]), _c("br"), _c("p", [_vm._v(_vm._s(_vm.content.paragraphfour))]), _c("br")])])]);
  };
  var _sfc_staticRenderFns = [];
  _sfc_render._withStripped = true;
  var __component__ = /* @__PURE__ */ normalizeComponent(
    _sfc_main,
    _sfc_render,
    _sfc_staticRenderFns
  );
  __component__.options.__file = "/Applications/MAMP/htdocs/designbykatalyst.com_01_08_24/site/plugins/testimonial-half-block/src/components/Testimonial_half.vue";
  const Testimonial_half = __component__.exports;
  panel.plugin("cookbook/testimonial-half-block", {
    blocks: {
      testimonial_half: Testimonial_half
    }
  });
})();
