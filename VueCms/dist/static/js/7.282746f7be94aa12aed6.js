webpackJsonp([7],{BJGO:function(t,a){},vsaQ:function(t,a,s){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var o={name:"GoodsList",data:function(){return{pageIndex:1,goodsList:[],allLoaded:!1,isAutoFill:!1}},created:function(){var t=this;this.$axios.get(this.$host+"/api/goodslist/?page="+this.pageIndex).then(function(a){t.goodsList=a.data.data.data}).catch(function(t){console.log(t)})},methods:{loadBottom:function(){this.loadMore()},loadMore:function(){var t=this;this.$axios.get(this.$host+"/api/goodslist/?page="+ ++this.pageIndex).then(function(a){t.goodsList=t.goodsList.concat(a.data.data.data),console.log("触发上拉了"),t.$refs.loadmore.onBottomLoaded(),8!=a.data.data.data.length&&(t.allLoaded=!0)}).catch(function(t){console.log(t)})}}},i={render:function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("div",{staticClass:"tmpl",staticStyle:{height:"577px",overflow:"scroll"}},[s("nav-bar",{attrs:{title:"商品列表"}}),t._v(" "),s("mt-loadmore",{ref:"loadmore",attrs:{"bottom-method":t.loadBottom,"bottom-all-loaded":t.allLoaded,"auto-fill":t.isAutoFill}},[s("ul",{staticClass:"mui-table-view mui-grid-view "},t._l(t.goodsList,function(a,o){return s("li",{key:o,staticClass:"mui-table-view-cell mui-media mui-col-xs-6"},[s("router-link",{attrs:{to:{name:"goods.detail",query:{id:a.id}}}},[s("img",{staticClass:"mui-media-object",attrs:{src:a.face}}),t._v(" "),s("div",{staticClass:"mui-media-body"},[t._v(t._s(a.title))]),t._v(" "),s("div",{staticClass:"desc"},[s("div",{staticClass:"sell"},[s("span",[t._v("¥"+t._s(a.sell_price))]),t._v(" "),s("s",[t._v("¥"+t._s(a.market_price))])]),t._v(" "),s("div",{staticClass:"detail"},[s("div",{staticClass:"hot"},[t._v("\n              热卖中\n            ")]),t._v(" "),s("div",{staticClass:"count"},[t._v("\n              剩"+t._s(a.stock_quantity)+"件\n            ")])])])])],1)}))])],1)},staticRenderFns:[]};var e=s("VU/8")(o,i,!1,function(t){s("BJGO")},"data-v-63b8e072",null);a.default=e.exports}});
//# sourceMappingURL=7.282746f7be94aa12aed6.js.map