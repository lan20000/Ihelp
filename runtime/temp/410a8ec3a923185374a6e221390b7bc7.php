<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:41:"./views/home/mobile/profile\channel.phtml";i:1569494942;s:72:"C:\phpStudy\PHPTutorial\WWW\public\views\home\mobile\common\header.phtml";i:1555171596;s:72:"C:\phpStudy\PHPTutorial\WWW\public\views\home\mobile\common\footer.phtml";i:1555171596;}*/ ?>
﻿<!DOCTYPE HTML>
<html>

<head>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>合作渠道</title>
    		
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
</head>
<body>

<header class="m-navbar">
    <a href="javascript:history.back()" class="navbar-item">
        <i class="back-ico"></i>
    </a>
    <div class="navbar-center">
        <span class="navbar-title">合作渠道</span>
    </div>
    <a href="#" class="navbar-item">
    </a>
</header>
<div class="main" style="">
    <!--<div class="member-ts"></div>-->
    <div class="task-tab">
        <ul class="task-tab-tit">
            <li class="task-tit1" style="width:100%;">
                <?php if(!empty($member['is_bind_channel'])): ?>
                <div class="li_txt"><?php echo !empty($member['channel_name'])?$member['channel_name']:''; ?></div>
                <?php else: ?>
                <div class="li_txt" id="select_reward">选择合作渠道<i class="sj"></i></div>
                <?php endif; ?>
            </li>
        </ul>
        <div class="task-tab-cont" style="display: none">
            <ul class="second-nav second-nav-one">
                <?php if(!empty($channels)): if(is_array($channels) || $channels instanceof \think\Collection || $channels instanceof \think\Paginator): $i = 0; $__LIST__ = $channels;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                        <li data-id="<?php echo $channel['id']; ?>"><?php echo $channel['title']; ?></li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
        </div>
    </div>
    <div class="member-form">
        <div class="item-box">
            <form id="post_form">
                <input type="hidden" name="channel_id" value="0">
                <input type="text" name="desc" class="m_txt" <?php echo !empty($member['is_bind_channel'])?'readonly':''; ?> value="<?php echo !empty($member['channel_desc'])?$member['channel_desc']:''; ?>" placeholder="请输入群号、号码、网址备注信息" id="account">
            </form>
        </div>
    </div>
</div>
<div class="member-btn">
    <input type="button" class="button1" value="提交" <?php echo !empty($member['is_bind_channel'])?'disabled':''; ?> >
</div>
<footer class="new-footer">
    <ul>
        <li>
            <a href="/home/index.html">
                <img <?php if($controller != 'index'): ?>class="gray"<?php endif; ?> src="/static/home/mobile/picture/home.png" />
                <span>首页</span>
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
        $('#select_reward').click(function () {
            $('.task-tab-cont').toggle();
        });
        
        $('.second-nav li').click(function () {
            var channel_id = $(this).attr('data-id');
            var html = $(this).text();
            $("input[name='channel_id']").val(channel_id);
            $('#select_reward').html(html+'<i class="sj"></i>');
            $(this).parent().parent().hide();
        });

        //设置邮箱
        $('.button1').click(function () {
            $.post(
                window.location.href,
                $('#post_form').serialize(),
                function (ret) {
                    message(ret.message,ret.redirect,ret.type);
                },'json'
            );
        });
    });
</script>
</body>
</html>




