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
      titleone() {
        return this.content.titleone[0] || {};
      },
      titletwo() {
        return this.content.titletwo[0] || {};
      }
    }
  };
  var _sfc_render = function render() {
    var _vm = this, _c = _vm._self._c;
    return _c("div", { staticClass: "k-aspect-wrapper-duo-colmn" }, [_c("span"), _c("span"), _c("span", [_c("p", [_vm._v(_vm._s(_vm.content.titleone))]), _c("br"), _c("p", [_vm._v(_vm._s(_vm.content.listoneone))]), _c("p", [_vm._v(_vm._s(_vm.content.listonetwo))]), _c("p", [_vm._v(_vm._s(_vm.content.listonethree))]), _c("p", [_vm._v(_vm._s(_vm.content.listonefour))]), _c("p", [_vm._v(_vm._s(_vm.content.listonefive))]), _c("p", [_vm._v(_vm._s(_vm.content.listonesix))]), _c("p", [_vm._v(_vm._s(_vm.content.listoneseven))]), _c("p", [_vm._v(_vm._s(_vm.content.listoneeight))]), _c("p", [_vm._v(_vm._s(_vm.content.listonenine))]), _c("p", [_vm._v(_vm._s(_vm.content.listoneten))])]), _c("span", [_c("p", [_vm._v(_vm._s(_vm.content.titletwo))]), _c("br"), _c("p", [_vm._v(_vm._s(_vm.content.listtwoone))]), _c("p", [_vm._v(_vm._s(_vm.content.listtwotwo))]), _c("p", [_vm._v(_vm._s(_vm.content.listtwothree))]), _c("p", [_vm._v(_vm._s(_vm.content.listtwofour))]), _c("p", [_vm._v(_vm._s(_vm.content.listtwofive))]), _c("p", [_vm._v(_vm._s(_vm.content.listtwosix))]), _c("p", [_vm._v(_vm._s(_vm.content.listtwoseven))]), _c("p", [_vm._v(_vm._s(_vm.content.listtwoeight))]), _c("p", [_vm._v(_vm._s(_vm.content.listtwonine))]), _c("p", [_vm._v(_vm._s(_vm.content.listtwoten))])]), _c("span", [_c("p", [_vm._v(_vm._s(_vm.content.titlethree))]), _c("br"), _c("p", [_vm._v(_vm._s(_vm.content.listthreeone))]), _c("p", [_vm._v(_vm._s(_vm.content.listthreetwo))]), _c("p", [_vm._v(_vm._s(_vm.content.listthreethree))]), _c("p", [_vm._v(_vm._s(_vm.content.listthreefour))]), _c("p", [_vm._v(_vm._s(_vm.content.listthreefive))]), _c("p", [_vm._v(_vm._s(_vm.content.listthreesix))]), _c("p", [_vm._v(_vm._s(_vm.content.listthreeseven))]), _c("p", [_vm._v(_vm._s(_vm.content.listthreeeight))]), _c("p", [_vm._v(_vm._s(_vm.content.listthreenine))]), _c("p", [_vm._v(_vm._s(_vm.content.listthreeten))])])]);
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
  __component__.options.__file = "/Applications/MAMP/htdocs/katalyst/site/plugins/line-two-column-block/src/components/Linetwocolumn.vue";
  const Linetwocolumn = __component__.exports;
  panel.plugin("cookbook/title-paragraph-block", {
    blocks: {
      linetwocolumn: Linetwocolumn
    }
  });
})();
