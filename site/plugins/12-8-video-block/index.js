(function(){"use strict";function n(t,e,o,c,u,p,v,_){var i=typeof t=="function"?t.options:t;return e&&(i.render=e,i.staticRenderFns=o,i._compiled=!0),{exports:t,options:i}}const s={computed:{video(){return this.content.video[0]||{}}}};var a=function(){var e=this,o=e._self._c;return o("k-block-figure",{attrs:{"is-empty":!e.video.url,"empty-icon":"audio-file","empty-text":"No file selected yet …"},on:{open:e.open,update:e.update}},[o("div",[o("div",{staticClass:"k-aspect-wrapper-single-12-8"},[o("k-aspect-ratio",[e.video.url?o("video",{staticClass:"single-video-panel",attrs:{src:e.video.url,preload:"",autobuffer:"",muted:"",playsinline:"",autoplay:"",loop:""},domProps:{muted:!0}}):e._e()])],1)])])},d=[],r=n(s,a,d);const l=r.exports;panel.plugin("cookbook/12-8-video-block",{blocks:{tweleve_eight_video:l}})})();
