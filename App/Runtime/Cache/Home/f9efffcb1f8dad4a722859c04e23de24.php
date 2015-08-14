<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
	<head>
		<title>For优个人中心</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		
		<link href="/fuwebapp/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="/fuwebapp/Public/css/commonstyle.css" />
		<link type="text/css" rel="stylesheet" href="/fuwebapp/Public/css/style.css" />

	</head>
	<body>
		<div id="login-head">
			<div class="head-top background-special">
				<span class="fl history-back glyphicon glyphicon-circle-arrow-left"></span>
				<span class="head-title">登陆</span>
				<span class="fr"><a class="text-middle" href="/fuwebapp/index.php/Home/Login/register">注册</a></span>
			</div>
			<div class="head-bottom">
				<dl>
					<dt>
						<img src="/fuwebapp/Public/img/loginshow.png" alt="">
					</dt>
					<dd>
						For优
					</dd>
				</dl>
			</div>
		</div>
		<div id="login-input">
			<div class="error-message-wrapper none">
				 <label class="error-message" ></label>
	   		</div>
	   		<div class="user-info-input">
	   			<span class="glyphicon glyphicon-earphone"></span>
	   			<span class="spliter"></span>
	   			<input type="text" id="username" name="username" placeholder="请输入手机号">
	   		</div>
	   		<div class="user-info-input">
	   			<span class="glyphicon glyphicon-lock"></span>
	   			<span class="spliter"></span>
	   			<input id="password" type="password" name="password" placeholder="请输入密码">
	   		</div>
	   		<div id="rm-password">
	   			<input id="ck_rmbUser" type="checkbox">
	   			<span>记住密码</span>
	   			<span class="fr"><a href="">忘记密码</a></span>
	   		</div>
	   		<input type="button" id="login-button" value="登陆" onclick="login();">
		</div>
		
		<!-- <div id="common-nav">
	<div class="row">
	   <div class="col-xs-4">
	   		<a href="<?php echo U('Index/index');?>">
	   			<dl>
	   				<dt>
	   					<span class="glyphicon glyphicon-home"></span>
	   				</dt>
	   				<dd>首页</dd>
	   			</dl>
	   		</a> 		
	   </div>
	   <div class="col-xs-4">
	   		<a href="<?php echo U('ShoppingCart/shoppingcart');?>">
		   		<dl>
		   			<dt>
		   				<span class="glyphicon glyphicon-shopping-cart"></span>
		   			</dt>
		   			<dd>购物车</dd>
		   		</dl>
	   		</a>
	   </div>
	    <div class="col-xs-4 active">
	    	<a href="<?php echo U('Login/homepage');?>">
		   		<dl>
		   			<dt>
		   				<span class="glyphicon glyphicon-user"></span>
		   			</dt>
		   			<dd>个人中心</dd>
		   		</dl>
	   		</a>
	   </div>
	</div>
</div> -->
		
		<script type="text/javascript" src="/fuwebapp/Public/script/plugins/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="/fuwebapp/Public/script/plugins/jquery.cookie.js"></script>
		<script src="/fuwebapp/Public/script/login.js" type="text/javascript"></script>
		<script src="/fuwebapp/Public/script/common.js" type="text/javascript"></script>
	</body>
</html>