<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"G:\phpstudy\PHPTutorial\WWW\VueCmsApi\public/../application/index\view\comment\index.html";i:1527602342;s:87:"G:\phpstudy\PHPTutorial\WWW\VueCmsApi\public/../application/index\view\common\base.html";i:1527602342;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>评论列表--VueCmsApi后台系统</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="/static/css/index/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="/static/font-awesome-4.7.0/css/font-awesome.min.css">
    
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">API后台</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo \think\Session::get('username'); ?></p>
          <p class="app-sidebar__user-designation">超级管理员</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="<?php echo url('index/index/index'); ?>" id="m-1"><i class="app-menu__icon fa fa-bank"></i><span class="app-menu__label">首页</span></a></li>
        <li class="treeview" id="m-2"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">轮播图管理</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo url('index/Swipe/index'); ?>" id="m-2-1"><i class="icon fa fa-circle-o"></i> 轮播图列表</a></li>
            <li><a class="treeview-item" href="<?php echo url('index/Swipe/add'); ?>" rel="noopener" id="m-2-2"><i class="icon fa fa-circle-o"></i> 添加轮播图</a></li>
          </ul>
        </li>
        <li class="treeview" id="m-3"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bookmark"></i><span class="app-menu__label">新闻管理</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo url('index/News/index'); ?>" id="m-3-1"><i class="icon fa fa-circle-o"></i> 新闻列表</a></li>
            <li><a class="treeview-item" href="<?php echo url('index/News/add'); ?>" rel="noopener" id="m-3-2"><i class="icon fa fa-circle-o"></i> 添加新闻</a></li>
          </ul>
        </li>
        <li class="treeview" id="m-4"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-map"></i><span class="app-menu__label">图文管理</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo url('index/Image/index'); ?>" id="m-4-1"><i class="icon fa fa-circle-o"></i> 图文列表</a></li>
            <li><a class="treeview-item" href="<?php echo url('index/Image/add'); ?>" rel="noopener" id="m-4-2"><i class="icon fa fa-circle-o"></i> 添加图文</a></li>
          </ul>
        </li>
         <li class="treeview" id="m-5"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-map"></i><span class="app-menu__label">评论管理</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo url('index/Comment/index'); ?>" id="m-5-1"><i class="icon fa fa-circle-o"></i> 评论列表</a></li>
          </ul>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          
<h1><i class="fa fa-edit"></i> 评论列表</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo url('index/index/admin'); ?>"><i class="fa fa-home fa-lg"></i></a></li>
          
    <li class="breadcrumb-item">评论管理</li>
    <li class="breadcrumb-item">评论列表</li>

        </ul>
      </div>
      
    <div class="tile">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>评论者</th>
			  <th>评论内容</th>
			  <th>添加时间</th>
            </tr>
          </thead>
          <tbody>
          	<?php if(is_array($comments) || $comments instanceof \think\Collection || $comments instanceof \think\Paginator): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?>
	            <tr>
	              <td><?php echo $comment['comment_id']; ?></td>
				  <td><?php echo $comment['author']; ?></td>
	              <td><?php echo $comment['content']; ?></td>
				  <td><?php echo date("Y-m-d H:i:s",strtotime($comment['add_time'])); ?></td>
	            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
        <ul class="pagination">
        	<?php if($current_page==1): ?>
		    	<li class="paginate_button page-item previous disabled">
		    		<a href="" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
		    	</li>
	    	<?php else: ?>
	    		<li class="paginate_button page-item previous">
		    		<a href='?page=<?php echo $current_page-1; ?>' aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
		    	</li>
	    	<?php endif; $__FOR_START_20607__=1;$__FOR_END_20607__=$pages+1;for($page=$__FOR_START_20607__;$page < $__FOR_END_20607__;$page+=1){ if($page==$current_page): ?>
			    	<li class="paginate_button page-item active">
			    		<a href="javascript:;" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $page; ?></a>
			    	</li>
		    	<?php else: ?>
			    	<li class="paginate_button page-item ">
			    		<a href='?page=<?php echo $page; ?>' aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link"><?php echo $page; ?></a>
			    	</li>
		    	<?php endif; } if($current_page == $pages): ?>   
		    	<li class="paginate_button page-item next disabled" >
		    		<a href="#" aria-controls="sampleTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
		    	</li>
	    	<?php else: ?>
	    		<li class="paginate_button page-item next" >
		    		<a href='?page=<?php echo $current_page+1; ?>' aria-controls="sampleTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
		    	</li>
	    	<?php endif; ?>
    	</ul>
    </div>

    </main>
  </body>
<script src="/static/js/index/jquery.min.js"></script>
<script src="/static/js/index/popper.min.js"></script>
<script src="/static/js/index/bootstrap.min.js"></script>
<script src="/static/js/index/main.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$("#m-5").addClass('is-expanded');
        $("#m-5-1").addClass('active');
    })
</script>>

</html>