webpackJsonp([10],{B0H4:function(t,i){},dddR:function(t,i,a){"use strict";Object.defineProperty(i,"__esModule",{value:!0});var e=a("Au9i"),s=a("t8+E"),l={name:"Member",data:function(){return{isLogin:!1,username:"",face:"/static/img/default.png"}},created:function(){var t=s.a.getCookie("username");if(t){this.isLogin=!0,this.username=t;var i=s.a.getCookie("face");i?this.face=i:s.a.setCookie("face",this.face,7)}},methods:{logout:function(){var t=this;this.$axios.get(this.$host+"api/logout/"+this.username).then(function(i){200==i.data.code?(s.a.delCookie("username"),s.a.delCookie("face"),s.a.delCookie("token"),Object(e.Toast)(i.data.msg),t.$router.push({name:"login"})):Object(e.Toast)(i.data.msg)})}}},r={render:function(){var t=this,i=t.$createElement,a=t._self._c||i;return a("div",{staticClass:"tmpl"},[a("div",{staticClass:"mui-page-content"},[a("div",{staticClass:"mui-scroll-wrapper"},[a("div",{staticClass:"mui-scroll"},[a("ul",{staticClass:"mui-table-view mui-table-view-chevron"},[a("li",{staticClass:"mui-table-view-cell mui-media"},[a("a",{staticClass:"mui-navigate-right",attrs:{href:"javascript:;"}},[a("img",{staticClass:"mui-media-object mui-pull-left head-img",attrs:{id:"head-img",src:t.face}}),t._v(" "),a("router-link",{attrs:{to:{name:"userinfo",query:{username:t.username}}}},[a("div",{directives:[{name:"show",rawName:"v-show",value:t.isLogin,expression:"isLogin"}],staticClass:"mui-media-body"},[t._v("\n                  "+t._s(t.username)+"\n                  "),a("p",{staticClass:"mui-ellipsis"},[t._v("账号:"+t._s(t.username))])])]),t._v(" "),a("div",{directives:[{name:"show",rawName:"v-show",value:!t.isLogin,expression:"!isLogin"}],staticClass:"mui-media-body"},[a("router-link",{attrs:{to:{name:"login"}}},[t._v("登录")]),t._v(" "),a("p",{staticClass:"mui-ellipsis"},[t._v("未登录")])],1)],1)])]),t._v(" "),t._m(0),t._v(" "),t._m(1),t._v(" "),a("ul",{staticClass:"mui-table-view"},[a("li",{staticClass:"mui-table-view-cell",staticStyle:{"text-align":"center"}},[a("a",{attrs:{href:"javascript:;"},on:{click:function(i){t.logout()}}},[t._v("退出登录")])])])])])])])},staticRenderFns:[function(){var t=this.$createElement,i=this._self._c||t;return i("ul",{staticClass:"mui-table-view mui-table-view-chevron"},[i("li",{staticClass:"mui-table-view-cell"},[i("a",{staticClass:"mui-navigate-right",attrs:{href:"#account"}},[this._v("我的订单")])])])},function(){var t=this.$createElement,i=this._self._c||t;return i("ul",{staticClass:"mui-table-view mui-table-view-chevron"},[i("li",{staticClass:"mui-table-view-cell"},[i("a",{staticClass:"mui-navigate-right",attrs:{href:"#notifications"}},[this._v("修改用户名")])]),this._v(" "),i("li",{staticClass:"mui-table-view-cell"},[i("a",{staticClass:"mui-navigate-right",attrs:{href:"#privacy"}},[this._v("修改密码")])]),this._v(" "),i("li",{staticClass:"mui-table-view-cell"},[i("a",{staticClass:"mui-navigate-right",attrs:{href:"#general"}},[this._v("绑定手机")])]),this._v(" "),i("li",{staticClass:"mui-table-view-cell"},[i("a",{staticClass:"mui-navigate-right",attrs:{href:"#general"}},[this._v("绑定邮箱")])])])}]};var n=a("VU/8")(l,r,!1,function(t){a("B0H4")},"data-v-3f206d59",null);i.default=n.exports}});
//# sourceMappingURL=10.08ffbf6584fea47e131f.js.map