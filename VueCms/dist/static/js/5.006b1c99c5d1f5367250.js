webpackJsonp([5],{"8aio":function(t,i,s){"use strict";Object.defineProperty(i,"__esModule",{value:!0});var a=s("yVX/"),o=s("ODGV"),e={name:"GoodsDetail",data:function(){return{isShow:!1,goodsDetail:{},goodImages:[],num:1}},created:function(){var t=this,i=this.$route.query.id;this.$axios.all([this.$axios.get(this.$host+"/api/goodsdetail/"+i),this.$axios.get(this.$host+"/api/goodimages/"+i)]).then(this.$axios.spread(function(i,s){t.goodsDetail=i.data.data,t.goodImages=s.data.data})).catch(function(t){console.log(t)})},methods:{add:function(){this.num>=this.goodsDetail.stock_quantity||this.num++},subStract:function(){this.num<=1||this.num--},addShopCart:function(){a.a.$emit("addShopCart",this.num),this.isShow=!0,o.a.addorUpdate({id:this.goodsDetail.id,num:this.num})},afterEnter:function(){this.isShow=!1},showComment:function(){var t=this.$route.query.id;this.$router.push({name:"goods.comment",query:{id:t}})},showInfo:function(){var t=this.$route.query.id;this.$router.push({name:"goods.info",query:{id:t}})}}},n={render:function(){var t=this,i=t.$createElement,s=t._self._c||i;return s("div",{staticClass:"tmpl"},[s("nav-bar",{attrs:{title:"商品详情"}}),t._v(" "),s("div",{staticClass:"outer-swiper"},[s("div",{staticClass:"swiper"},[s("mt-swipe",{staticClass:"mint-swipe",attrs:{auto:4e3}},t._l(t.goodImages,function(t,i){return s("mt-swipe-item",{key:i},[s("a",[s("img",{attrs:{src:t.url}})])])}))],1)]),t._v(" "),s("div",{staticClass:"product-desc"},[s("ul",[s("li",[s("span",{staticClass:"product-desc-span"},[t._v("\n        "+t._s(t.goodsDetail.title)+"\n      ")])]),t._v(" "),s("li",{staticClass:"price-li"},[t._v("市场价：\n        "),s("s",[t._v("¥"+t._s(t.goodsDetail.market_price))]),t._v("销售价："),s("span",[t._v("¥"+t._s(t.goodsDetail.sell_price))])]),t._v(" "),s("li",{staticClass:"number-li"},[t._v("购买数量："),s("span",{on:{click:function(i){t.subStract()}}},[t._v("-")]),s("span",{on:{click:function(i){t.add()}}},[t._v(t._s(t.num))]),t._v(" "),s("span",[t._v("+")])])]),t._v(" "),s("li",[s("mt-button",{attrs:{type:"primary"}},[t._v("立即购买")]),t._v(" "),s("mt-button",{attrs:{type:"danger"},on:{click:function(i){t.addShopCart()}}},[t._v("加入购物车")])],1)]),t._v(" "),s("transition",{attrs:{name:"ball"},on:{"after-enter":t.afterEnter}},[t.isShow?s("div",{staticClass:"ball"}):t._e()]),t._v(" "),s("div",{staticClass:"product-props"},[s("ul",[s("li",[t._v("商品参数")]),t._v(" "),s("li",[t._v("商品货号：123456")]),t._v(" "),s("li",[t._v("库存情况："+t._s(t.goodsDetail.stock_quantity)+"件")]),t._v(" "),s("li",[t._v("上架时间："+t._s(t._f("filterTime")(t.goodsDetail.add_time)))])])]),t._v(" "),s("div",{staticClass:"product-info"},[s("ul",[s("li",[s("mt-button",{attrs:{type:"primary",size:"large",plain:""},on:{click:function(i){t.showInfo()}}},[t._v("图文介绍")])],1),t._v(" "),s("li",[s("mt-button",{attrs:{type:"danger",size:"large",plain:""},on:{click:function(i){t.showComment()}}},[t._v("商品评论")])],1)])])],1)},staticRenderFns:[]};var r=s("VU/8")(e,n,!1,function(t){s("zlo2")},"data-v-86e4f39c",null);i.default=r.exports},zlo2:function(t,i){}});
//# sourceMappingURL=5.006b1c99c5d1f5367250.js.map