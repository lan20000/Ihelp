<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:39:"./views/home/mobile/profile\email.phtml";i:1569494130;s:72:"C:\phpStudy\PHPTutorial\WWW\public\views\home\mobile\common\header.phtml";i:1555171596;}*/ ?>
﻿
<!DOCTYPE HTML>
<html>

<head>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>绑定邮箱</title>
    		
		<link rel="stylesheet" type="text/css" href="/static/home/mobile/css/ydui.css"/>
    <script type="text/javascript" src="/static/home/mobile/js/ydui.flexible.js"></script>
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
    <style>
        body{
            background: #F5F5F5 !important;
        }
    </style>
</head>
<body>

<header class="m-navbar">
    <a href="javascript:history.back()" class="navbar-item">
        <i class="back-ico"></i>
    </a>
    <div class="navbar-center">
        <span class="navbar-title">绑定邮箱</span>
    </div>
    <a href="#" class="navbar-item">
    </a>
</header>
<div class=" bindMail">
<div class="m-cell">
    <div class="cell-item">
        <div class="cell-left">邮箱：</div>
        <div class="cell-right">
        <input type="text" class="cell-input m_txt" placeholder="请输入邮箱账号" id="email" value="<?php echo !empty($member['email'])?$member['email']:''; ?>" <?php echo !empty($member['is_bind_email'])?'readonly':''; ?>>
        </div>
    </div>
</div>
    <div class="member-btn">
    <button type="button" class="button1 js-bind"  <?php echo !empty($member['is_bind_email'])?'disabled':''; ?>>确认</button>
    </div>
</div>
<script type="text/javascript">
    $(function () {
            //设置邮箱
            $('.js-bind').click(function () {
                var email = $('#email').val();
                $.post(
                    window.location.href,
                    {email:email},
                    function (ret) {
                        message(ret.message,ret.redirect,ret.type);
                    },'json'
                );
            });
        });
</script>
</body>
</html>



