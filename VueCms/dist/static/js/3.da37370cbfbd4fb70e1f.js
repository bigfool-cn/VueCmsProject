webpackJsonp([3],{Apvl:function(i,t){},h6qm:function(i,t,s){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var a={name:"home",data:function(){return{imgList:[]}},created:function(){var i=this;this.$axios.get(this.$host+"/api/getswipe").then(function(t){i.imgList=t.data.data}).catch(function(i){console.log(i)})}},e={render:function(){var i=this,t=i.$createElement,s=i._self._c||t;return s("div",[s("mt-swipe",{staticClass:"mint-swipe",attrs:{auto:4e3}},i._l(i.imgList,function(i,t){return s("mt-swipe-item",{key:t},[s("a",{attrs:{href:i.img}},[s("img",{attrs:{src:i.img}})])])})),i._v(" "),s("div",{staticClass:"mui-content"},[s("ul",{staticClass:"mui-table-view mui-grid-view mui-grid-9"},[s("li",{staticClass:"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"},[s("router-link",{attrs:{to:{name:"news.list"}}},[s("span",{staticClass:"mui-icon mui-icon-home"}),i._v(" "),s("div",{staticClass:"mui-media-body"},[i._v("新闻资讯")])])],1),i._v(" "),s("li",{staticClass:"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"},[s("router-link",{attrs:{to:{name:"photo.share"}}},[s("span",{staticClass:"mui-icon mui-icon-email"}),i._v(" "),s("div",{staticClass:"mui-media-body"},[i._v("图文分享")])])],1),i._v(" "),s("li",{staticClass:"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"},[s("router-link",{attrs:{to:{name:"goods.list"}}},[s("span",{staticClass:"mui-icon mui-icon-chatbubble"}),i._v(" "),s("div",{staticClass:"mui-media-body"},[i._v("商品展示")])])],1),i._v(" "),i._m(0),i._v(" "),i._m(1),i._v(" "),i._m(2)])])],1)},staticRenderFns:[function(){var i=this.$createElement,t=this._self._c||i;return t("li",{staticClass:"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"},[t("a",{attrs:{href:"#"}},[t("span",{staticClass:"mui-icon mui-icon-location"}),this._v(" "),t("div",{staticClass:"mui-media-body"},[this._v("留言反馈")])])])},function(){var i=this.$createElement,t=this._self._c||i;return t("li",{staticClass:"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"},[t("a",{attrs:{href:"#"}},[t("span",{staticClass:"mui-icon mui-icon-search"}),this._v(" "),t("div",{staticClass:"mui-media-body"},[this._v("搜索资讯")])])])},function(){var i=this.$createElement,t=this._self._c||i;return t("li",{staticClass:"mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3"},[t("a",{attrs:{href:"#"}},[t("span",{staticClass:"mui-icon mui-icon-phone"}),this._v(" "),t("div",{staticClass:"mui-media-body"},[this._v("联系我们")])])])}]};var m=s("VU/8")(a,e,!1,function(i){s("Apvl")},"data-v-a5faedb6",null);t.default=m.exports}});
//# sourceMappingURL=3.da37370cbfbd4fb70e1f.js.map