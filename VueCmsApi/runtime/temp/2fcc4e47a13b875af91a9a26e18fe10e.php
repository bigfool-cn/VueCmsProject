<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"G:\phpstudy\PHPTutorial\WWW\Blog\public/../application/home\view\index\about.html";i:1525597225;s:80:"G:\phpstudy\PHPTutorial\WWW\Blog\public/../application/home\view\index\base.html";i:1525419494;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="gb2312">
<title>关于我</title>
<meta name="keywords" content="个人博客,JS_chen个人博客,JS_chen" />
<meta name="description" content="JS_chen个人博客，记录个人学习笔记和生活的个人博客网站。" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/static/css/base.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/static/font-awesome-4.7.0/css/font-awesome.min.css">

<link href="/static/css/about.css" rel="stylesheet">

<link href="/static/css/main.css" rel="stylesheet" >
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<script src="/static/js/scrollreveal.js"></script>
<!-- 返回顶部调用 begin -->
<link href="/static/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/js.js"></script>
<!-- 返回顶部调用 end-->
</head>
<body>
<header>
<script>
  window.onload = function ()
  {
  	var oH2 = document.getElementsByTagName("h2")[0];
  	var oUl = document.getElementsByTagName("ul")[0];
  	oH2.onclick = function ()
  	{
  		var style = oUl.style;
  		style.display = style.display == "block" ? "none" : "block";
  		oH2.className = style.display == "block" ? "open" : ""
  	}
  }
</script>
<style>
  #mnav { display: none; width: 100%; position: fixed; top: 0; right: 0; }
  #mnav h2 { text-align: right; color: #fff; font-size: 18px; height: 40px; line-height: 40px; padding-left: 10px; width: 100% }
  #mnav h2.open { text-align: right; background: rgba(1,1,1,0.8); width: 100%; }
  #mnav ul { display: none; background: rgba(1,1,1,0.8); width: 100%; padding-bottom:40px}    
  #mnav li {  height: 40px; line-height: 40px; vertical-align: top; font-size: 16px; display: block; overflow: hidden; text-align: center }
  #mnav a:hover { color: #fff;}
  /* 默认= */
  #mnav h2 .navicon { margin-top:18px; margin-right: 15px; }
  .navicon { display: inline-block; position: relative; width: 30px; height: 5px; background-color: #FFFFFF; }
  .navicon:before, .navicon:after { content: ''; display: block; width: 30px; height: 5px; position: absolute; background: #FFFFFF; -webkit-transition-property: margin, -webkit-transform; transition-property: margin, -webkit-transform; transition-property: margin, transform; transition-property: margin, transform, -webkit-transform; -webkit-transition-duration: 300ms; transition-duration: 300ms; }
  .navicon:before { margin-top: -10px; }
  .navicon:after { margin-top: 10px; }
  /* 展开后导航栏目 */
  #mnav h2.open .navicon { background: rgba(1,1,1,0.8) }/* 使用背景色隐藏中间的红线 */
  #mnav h2.open .navicon:before { margin-top: 0; -webkit-transform: rotate(45deg); transform: rotate(45deg); }
  #mnav h2.open .navicon:after { margin-top: 0; -webkit-transform: rotate(-45deg); transform: rotate(-45deg); }
  #mnav h2.open .navicon:before, #mnav h2.open .navicon:after { content: ''; display: block; width: 30px; height: 5px; position: absolute; background: #FFFFFF; -webkit-transition-property: margin, -webkit-transform; transition-property: margin, -webkit-transform; transition-property: margin, transform; transition-property: margin, transform, -webkit-transform; -webkit-transition-duration: 300ms; transition-duration: 300ms; }


  /* for 480px or less */
  @media screen and (max-width: 480px) {

    .logo { margin: 50px 0 20px 0; width: 100% }
    .logo img { margin: auto; width: 80% }
    nav { display: none }
    #mnav { display: block; z-index: 99999; margin-bottom: 30px }

  }
</style>
<div id="mnav">
    <h2><span class="navicon"></span></h2>
    <ul>
        <li><a href="/">网站首页</a></li>
        <li><a href="<?php echo url('home/index/about'); ?>">关于我</a></li>
        <li><a href="<?php echo url('home/index/life'); ?>">生活小记</a></li>
        <li><a href="<?php echo url('home/index/learn'); ?>">学无止境</a></li>
        <li><a href="<?php echo url('home/index/download'); ?>">分享下载</a></li>
        <li><a href="<?php echo url('home/index/saying'); ?>">留言</a></li>
    </ul>
</div> 
<div class="logo"  data-scroll-reveal="enter right over 1s">
<a href="/"><img src="/static/images/logo.png"></a></div>
<nav class="topnav" >
  <a href="/" id="index"><span>首页</span><span class="en">Home</span></a>
  <a href="<?php echo url('home/index/about'); ?>" id="about"><span>关于我</span><span class="en">About</span></a>
  <a href="<?php echo url('home/index/life'); ?>" id="life"><span>生活小记</span><span class="en">Life</span></a>
  <a href="<?php echo url('home/index/learn'); ?>" id="learn"><span>学无止境</span><span class="en">Learn</span></a>
  <a href="<?php echo url('home/index/download'); ?>" id="download"><span>分享下载</span><span class="en">Share</span></a>
  <a href="<?php echo url('home/index/saying'); ?>" id="saying"><span>留言</span><span class="en ">Saying</span></a>
</nav>
</header>

<article>
  <div class="contain">
    <div class="banner">
      <p data-scroll-reveal="enter top over 2s">或许，最美的事不是留住时光。</p>
      <p data-scroll-reveal="enter left over 2s after 1s">而是留住记忆，如最初相识的感觉一样，哪怕一个不经意的笑容，便是我们最怀念的故事。</p>
      <p data-scroll-reveal="enter bottom over 2s after 2s">但愿，时光，如初见。</p>
    </div>
    <div class="memorial_day">
      <div class="time_axis"></div>
      <ul>
        <li class="n1"><a href="javascript::void(0);">出生</a>
          <div class="dateview">1995-05-12</div>
        </li>
        <li class="n2"><a href="javascript:void(0);">上学</a>
          <div class="dateview">2002-09-01</div>
        </li>
        <li class="n3"><a href="javascript:void(0);">初中毕业</a>
          <div class="dateview">2012-07-01</div>
        </li>
        <li class="n4"><a href="javascript:void(0);">高中毕业</a>
          <div class="dateview">2014-07-01</div>
        </li>
        <li class="n5"><a href="javascript:void(0);">大学毕业</a>
          <div class="dateview">2018-07-01</div>
        </li>
      </ul>
    </div>
    <div class="about left">
      <h2>I am here</h2>
      <ul> 
        <p>
          <div id='allmap' class="map"></div> 
        </p>
      </ul>
      <div id="getinfo" class="getinfo">
        <audio src="someaudio.wav" autoplay>
          您的浏览器不支持 audio 标签。
        </audio>
        <span class="inputName">
            <input type="text" class="input" placeholder="输入姓名">
        </span>
        <span>
            <input type="button" value="获取联系" class="button">
        </span>
      </div>
      <div class="blog" data-scroll-reveal="enter top" >
        <figure>
          <ul>
            <a href="/"><img src="/uploads/wechat.jpg" width="100%" height="100%"></a>
          </ul>
        </figure>
        <figure>
          <ul>
            <a href="/"><img src="/uploads/qq.jpg" width="100%" height="100%"></a>
          </ul>
        </figure>
        <figure>
          <ul>
            <a href="/"><img src="/uploads/phone.png" width="100%" height="100%"></a>
          </ul>
        </figure>
      </div>
      <h2>About my blog</h2>
      <p>域  名：www.bigfool.cn</p>
      <p>编程语言：PHP</p>
      <p>模板来自：<a href="http://www.yangqq.com" target="_blank" style="font-size:15px;font-weight: 600;font-style: italic;">杨青个人博客</a></p>
      <p>免责声明：本博客未注明原创的资源，均来自互联网，如无意侵犯了你的权益，请及时联系网站管理员，并提供相关证明，管理员将在24小时内删除。《 联系方式：1063944784@qq.com 》</p>
    </div>
  </div>
  </aside>
</article>

<div id="tbox"> <a id="togbook" href="<?php echo url('home/index/saying'); ?>"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
<footer>
Since 2018 by JS_chen <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备17147325号-1</a>
</footer>
<script>
	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		(function(){
			window.scrollReveal = new scrollReveal({reset: true});
		})();
	};
</script> 

<script type="text/javascript">
  $(function(){
    $("#about").css("color","#111");
  });
</script>
<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=FQGefAdzhVtzQTYGUp9PsDHcVu3UvBtl&s=1"></script>
<script type="text/javascript">
  var map = new BMap.Map("allmap");
  map.centerAndZoom(new BMap.Point(116.331398,39.897445),15);
  map.enableScrollWheelZoom(true);
  map.clearOverlays(); 

  var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
  var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
  var top_right_navigation = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}); //右上角，仅包含平移和缩放按钮
  /*缩放控件type有四种类型:
  BMAP_NAVIGATION_CONTROL_SMALL：仅包含平移和缩放按钮；BMAP_NAVIGATION_CONTROL_PAN:仅包含平移按钮；BMAP_NAVIGATION_CONTROL_ZOOM：仅包含缩放按钮*/
  
  //添加控件和比例尺
  map.addControl(top_left_control);        
  map.addControl(top_left_navigation);     
  map.addControl(top_right_navigation);    

  //经纬度定位
  var new_point = new BMap.Point("<?php echo $location['x']; ?>","<?php echo $location['y']; ?>");//113.331133,23.11222
  //创建人物
  var myIcon = new BMap.Icon("/static/images/location.ico", new BMap.Size(60,100));
  var marker = new BMap.Marker(new_point,{icon:myIcon});  // 创建标注
  map.addOverlay(marker); 
  map.panTo(new_point);               // 将标注添加到地图中
  marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
  marker.addEventListener("click",getAttr);
  function getAttr(){
    alert("我在: <?php echo $location['address']; ?>");   
  }
</script>

</body>
</html>
