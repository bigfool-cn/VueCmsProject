<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"G:\phpstudy\PHPTutorial\WWW\VueCmsApi\public/../application/index\view\user\login.html";i:1525419491;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="/static/css/index/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="/static/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>登陆</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>JS_chen</h1>
        <h3 style="color: red"><?php echo $status; ?></h3>
      </div>
      <div class="login-box">
        <form class="login-form" action="<?php echo url('index/user/login'); ?>" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>登陆</h3>
          <div class="form-group">
            <label class="control-label">用户名</label>
            <input class="form-control" type="text" name="username" placeholder="UserName" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">密码</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox" name="remember" value="remember"><span class="label-text">记住</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">忘记密码 ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>登陆</button>
          </div>
        </form>
        <form class="forget-form" action="<?php echo url('index/index/index'); ?>">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>忘记密码 ?</h3>
          <div class="form-group">
            <label class="control-label">邮箱</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>重置</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> 返回登录</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="/static/js/index/jquery.min.js"></script>
    <script src="/static/js/index/popper.min.js"></script>
    <script src="/static/js/index/bootstrap.min.js"></script>
    <script src="/static/js/index/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="/static/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>