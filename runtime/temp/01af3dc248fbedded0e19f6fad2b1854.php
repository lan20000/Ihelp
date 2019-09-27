<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:38:"./views/home/mobile/account\info.phtml";i:1569495043;s:72:"C:\phpStudy\PHPTutorial\WWW\public\views\home\mobile\common\header.phtml";i:1555171596;s:72:"C:\phpStudy\PHPTutorial\WWW\public\views\home\mobile\common\footer.phtml";i:1569495089;}*/ ?>
﻿<!DOCTYPE HTML>
<html>

	<head>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<link rel="stylesheet" type="text/css" href="/static/home/mobile/css/ydui.css"/>
    <script type="text/javascript" src="/static/home/mobile/js/ydui.flexible.js"></script>
		<title>账户信息</title>
        <link rel="shortcut icon" href="clientapp/images/new_images/favicon.ico" />
<link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
<link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">
<link href="/static/home/mobile/css/new_style.css" rel="stylesheet" type="text/css" />
<!-- 弹出层 -->
<link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
<script src="/static/home/mobile/js/jquery-2.0.3.min.js"></script>
<script src="/static/plugins/dialog/js/dialog.js"></script>
<!-- 弹出层 -->
<script type="text/javascript" src="/static/plugins/clipboard.min.js"></script>
<script type="text/javascript" src="/static/home/mobile/js/global.js?v=2"></script>
	</head>
	<style type="text/css">
		body{
            background: #F5F5F5 !important;
        }
		.maskInfo {
			position: fixed;
			left: 0;
			top: 0;
			background-color: rgba(0, 0, 0, 0.4);
			height: 100%;
			width: 100%;
			display: none;
		}
		
		.maskInfo div {
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			background-color: #fff;
			height: 60px;
			width: 60%;
			line-height: 60px;
			color: #333;
			font-size: 1.6rem;
			text-align: center;
			border-radius: 3px;
		}
		
		.zhuanghu-info .info-item .noset {
			float: right;
			height: 30px;
			line-height: 30px;
			color: #fff;
			font-size: 16px;
			margin-right: 0;
			border-radius: 0;
			background: none;
			padding: 0;
		}
		
		.info-item a {
			display: block;
			overflow: hidden;
		}
		
	</style>

	<body>
		<!-- <div class="site-header header-fixed">
			<a  class="back"></a>
			<div class="tit-name"></div>
		</div> -->
		<header class="m-navbar">
			<a href="#" onclick="history.back()" class="navbar-item">
				<i class="back-ico"></i>
			</a>
			<div class="navbar-center">
				<span class="navbar-title">账号信息</span>
			</div>
			<a href="#" class="navbar-item">
			</a>
		</header>
		<div class=" accountInfo">
			<div class="m-cell" style="margin-top:0.1rem;">
				<div class="cell-item">
					<div class="cell-left">头像</div>
					<div class="cell-right">
						<form id="post_form" enctype="multipart/form-data">
							<div class="t_img">
								<img onerror="this.src='/static/home/mobile/picture/user.png'" src="<?php echo to_media($member['avatar']); ?>" id="photo" style="width:50px;height:50px;">
								<input type="file" name="avatar" style="position: absolute;width: 100%;height: 100%;left: 0;top: 0;opacity: 0;z-index: 2;" >
							</div>
						</form>
					</div>
				</div>
				<div class="cell-item">
					<div class="cell-left">用户名</div>
					<div class="cell-right i_info" id="accountName">
						<?php echo $member['username']; ?>
					</div>
				</div>
				<div class="cell-item">
					<div class="cell-left">绑定邮箱</div>
					<a href="/home/profile/email.html" class="cell-right cell-arrow" >
						<span id="email" class="more-btn"><?php if(empty($member['is_bind_email'])): ?>未绑定<?php else: ?>已绑定<?php endif; ?> </span>
					</a>
				</div>
				<div class="cell-item">
					<div class="cell-left">绑定支付宝</div>
					<a href="/home/profile/alipay.html" class="cell-right cell-arrow" >
						<span class="more-btn"><?php if(empty($member['is_bind_alipay'])): ?>未绑定<?php else: ?>已绑定<?php endif; ?> </span>
					</a>
				</div>
				<div class="cell-item">
					<div class="cell-left">绑定手机</div>
					<a href="/home/profile/phone.html" class="cell-right cell-arrow" >
						<span id="email" class="more-btn"><?php if(empty($member['is_bind_mobile'])): ?>未绑定<?php else: ?>已绑定<?php endif; ?></span>
					</a>
				</div>
			</div>
			<div class="m-cell" style="">
				
				<div class="cell-item" id="email2">
					<div class="cell-left">修改密码</div>
					<a href="/home/profile/password.html" class="cell-right cell-arrow" >
						<span id="email" class="more-btn"><?php if(empty($member['is_bind_mobile'])): ?>未绑定<?php else: ?>已绑定<?php endif; ?></span>
					</a>
				</div>
				<div class="cell-item">
					<div class="cell-left">合作渠道登记</div>
					<a href="/home/profile/channel.html" class="cell-right cell-arrow" >
						<span id="email" class="more-btn"><?php if(empty($member['is_bind_channel'])): ?>未登记<?php else: ?>已登记<?php endif; ?></span>
					</a>
				</div>
			</div>

			<div class="member-btn">
				<input type="button" class="button3" value="退出账号" onclick="location.href='/home/auth/login.html'">
			</div>
		</div>
		<footer class="new-footer">
    <ul>
        <li>
            <a href="/home/index.html">
                <img <?php if($controller != 'index'): ?>class="gray"<?php endif; ?> src="/static/home/mobile/picture/home.png" />
                <span>首页1</span>
            </a>
        </li>
        <li>
            <a href="/home/activity.html">
                <img  <?php if($controller != 'activity'): ?>class="gray"<?php endif; ?>  src="/static/home/mobile/picture/activity.png" />
                <span>活动</span>
            </a>
        </li>
        <li>
            <a href="/home/task/add.html">
                <span class="add-span"></span>
                <span>发布</span>
            </a>
        </li>
        <li>
            <a href="/home/invite.html">
                <img  <?php if($controller != 'invite'): ?>class="gray"<?php endif; ?>  src="/static/home/mobile/picture/news.png" />
                <span>收徒</span>
            </a>
        </li>
        <li>
            <a href="/home/account.html">
                <img <?php if($controller != 'account'): ?>class="gray"<?php endif; ?>  src="/static/home/mobile/picture/users.png" />
                <span>我的</span>
            </a>
        </li>
    </ul>
</footer>
        <script type="text/javascript">
           $(function () {
               
               $('#accountName').click(function () {
                   message('用户名不能修改','','error');
               });
               
               $('input[name="avatar"]').bind('change',function(){
                   var formData = new FormData($( "#post_form" )[0]);
                   $.ajax({
                       url: window.location.href ,
                       type: 'POST',
                       data: formData,
                       dataType: "json",
                       async: false,
                       cache: false,
                       contentType: false,
                       processData: false,
                       success: function (ret) {
                           message(ret.message,ret.redirect,ret.type);
                       },
                       error: function () {
                          message('出现错误','','error');
                       }
                   });
               });
           });
        </script>
</body>
</html>