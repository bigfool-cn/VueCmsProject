webpackJsonp([8],{MOGX:function(t,n){},XgPj:function(t,n,o){"use strict";Object.defineProperty(n,"__esModule",{value:!0});var s={name:"GoodsInfo",data:function(){return{goodsInfo:{}}},created:function(){var t=this,n=this.$route.query.id;this.$axios.get(this.$host+"/api/goodsdetail/"+n).then(function(n){console.log(n.data.data),t.goodsInfo=n.data.data}).catch(function(t){console.log(t)})}},e={render:function(){var t=this,n=t.$createElement,o=t._self._c||n;return o("div",{staticClass:"tmpl"},[o("nav-bar",{attrs:{title:"图文介绍"}}),t._v(" "),o("div",{staticClass:"news-title"},[o("p",{domProps:{textContent:t._s(t.goodsInfo.title)}}),t._v(" "),o("div",{staticClass:"news-info"},[o("span",[t._v("点击："+t._s(t.goodsInfo.click_num))]),t._v(" "),o("span",[t._v("分类：商品")]),t._v(" "),o("span",[t._v("发布时间："+t._s(t._f("filterTime")(t.goodsInfo.add_time)))])])]),t._v(" "),o("div",{staticClass:"news-content",domProps:{innerHTML:t._s(t.goodsInfo.desc)}})],1)},staticRenderFns:[]};var a=o("VU/8")(s,e,!1,function(t){o("MOGX")},"data-v-53f58910",null);n.default=a.exports}});
//# sourceMappingURL=8.63527a336db04c05643e.js.map