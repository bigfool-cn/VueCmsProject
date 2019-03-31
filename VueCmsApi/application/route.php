<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
        'id' => '\d+',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

    //api
    '[api]'=>[
        '/getswipe'=>['api/Api/getSwipe',['method'=>'get']],
        '/getnewslist'=>['api/Api/getNewsList',['method'=>'get']],
        '/getnewsdetail/[:id]'=>['api/Api/getNewsDetail',['method'=>'get']],
        '/getimgcategory/'=>['api/Api/getImgCategory',['method'=>'get']],
        '/getimages/[:id]'=>['api/Api/getImage',['method'=>'get']],
        '/getimagedetail/[:id]'=>['api/Api/getImageDetail',['method'=>'get']],
        '/getcomment/[:category]/[:cid]'=>['api/Api/getComment',['method'=>'get']],
        '/postcomment/[:category]/[:cid]'=>['api/Api/postComment',['method'=>'post']],
        '/goodslist'=>['api/Api/goodsList',['method'=>'get']],
        '/goodsdetail/[:id]'=>['api/Api/goodsDetail',['method'=>'get']],
        '/goodimages/[:id]'=>['api/Api/goodImages',['method'=>'get']],
        '/getshopcartlist/[:ids]'=>['api/Api/getShopCartList',['method'=>'get']],
        '/getCode/'=>['api/Api/getCode',['method'=>'post']],
        '/register/'=>['api/Api/register',['method'=>'post']],
        '/login/'=>['api/Api/login',['method'=>'post']],
        '/logout/[:username]'=>['api/Api/logout',['method'=>'get']],
        '/getUserInfo/[:username]'=>['api/Api/getUserInfo',['method'=>'get']],
        '/updateFace/'=>['api/Api/updateFace',['method'=>'post']],
    ],


    //后台
    'admin' => ['index/index/index', ['method' => 'get|post']],
    //用户
    '[user]' => [
        '/login' => ['index/user/login', ['method' => 'get|post']],
        '/index' => ['index/user/index', ['method' => 'get']],
    ],
    //轮播图
    '[swipe]' => [
        '/index' => ['index/Swipe/index', ['method' => 'get']],
        '/add' => ['index/Swipe/add', ['method' => 'get|post']],
    ],
    //新闻
    '[news]' => [
        '/index' => ['index/News/index', ['method' => 'get']],
        '/add' => ['index/tag/add', ['method' => 'get|post']],
    ],
    //图文相关
    '[image]' => [
        '/index' => ['index/Image/index', ['method' => 'get']],
        '/add' => ['index/Image/add', ['method' => 'get|post']],
    ],
   //评论
    '[comment]'=>[
        '/index'=>['index/Comment/index',['method'=>'get']],
    ]
];
