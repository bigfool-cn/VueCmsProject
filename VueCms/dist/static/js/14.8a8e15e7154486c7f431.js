webpackJsonp([14],{lWgK:function(t,a){},yPja:function(t,a,o){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var i={name:"PhotoDetail",data:function(){return{photoDetail:{},cid:this.$route.params.id}},created:function(){var t=this;this.$axios.get(this.$host+"/api/getimagedetail/"+this.cid).then(function(a){console.log(a.data.data),t.photoDetail=a.data.data}).catch(function(t){console.log(t)})}},e={render:function(){var t=this,a=t.$createElement,o=t._self._c||a;return o("div",{staticClass:"tmpl"},[o("nav-bar",{attrs:{title:"图文详情"}}),t._v(" "),o("div",{staticClass:"photo-title"},[o("p",{domProps:{textContent:t._s(t.photoDetail.img_title)}}),t._v(" "),o("div",{staticClass:"photo-info"},[o("span",[t._v("点击："+t._s(t.photoDetail.click_num))]),t._v(" "),o("span",[t._v("分类："+t._s(t.photoDetail.title))]),t._v(" "),o("span",[t._v("发布时间："+t._s(t._f("filterTime")(t.photoDetail.add_time)))])])]),t._v(" "),o("img",{staticClass:"photo-img",attrs:{src:t.photoDetail.img}}),t._v(" "),o("div",{staticClass:"photo-content",domProps:{innerHTML:t._s(t.photoDetail.content)}}),t._v(" "),o("comment",{attrs:{category:"photo",cid:t.cid}})],1)},staticRenderFns:[]};var s=o("VU/8")(i,e,!1,function(t){o("lWgK")},"data-v-1d74f9a6",null);a.default=s.exports}});
//# sourceMappingURL=14.8a8e15e7154486c7f431.js.map