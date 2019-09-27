<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"./views/home/mobile/profile\alipay.phtml";i:1569494330;s:72:"C:\phpStudy\PHPTutorial\WWW\public\views\home\mobile\common\header.phtml";i:1555171596;}*/ ?>
﻿<!DOCTYPE HTML>
<html>

<head>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>绑定支付宝</title>
    		
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
        <span class="navbar-title">绑定手机</span>
    </div>
    <a href="#" class="navbar-item">
    </a>
</header>
<div class=" bindMail">
<div class="m-cell">
    <div class="cell-item">
        <div class="cell-left">支付宝账号：</div>
        <div class="cell-right">
        <input type="text" class="m_txt cell-input" placeholder="请输入支付宝账号" id="alipay_account"  value="<?php echo !empty($member['alipay_account'])?$member['alipay_account']:''; ?>" <?php echo !empty($member['is_bind_alipay'])?'readonly':''; ?>>
        </div>
    </div>
    <div class="cell-item">
        <div class="cell-left">真实姓名：</div>
        <div class="cell-right">
        <input type="text" class="m_txt cell-input" placeholder="请输入真实姓名" id="alipay_realname"  value="<?php echo !empty($member['alipay_realname'])?$member['alipay_realname']:''; ?>" <?php echo !empty($member['is_bind_alipay'])?'readonly':''; ?>>
        </div>
    </div>
    <div class="member-ts">
            <label>温馨提示</label>
            <p>支付宝绑定后，不可修改</p>
        </div>
</div>
    <div class="member-btn">
    <input type="button" class="button1" value="确认" <?php echo !empty($member['is_bind_alipay'])?'disabled':''; ?>>
    </div>
</div>
<script type="text/javascript">
    $(function () {
            //设置邮箱
            $('.button1').click(function () {
                var alipay_account = $('#alipay_account').val();
                var alipay_realname = $('#alipay_realname').val();
                $.post(
                    window.location.href,
                    {
                        alipay_account:alipay_account,
                        alipay_realname:alipay_realname
                    },
                    function (ret) {
                        message(ret.message,ret.redirect,ret.type);
                    },'json'
                );
            });
        });
</script>
</body>
</html>