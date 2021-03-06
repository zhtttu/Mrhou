<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>幼儿园信息管理系统</title>

    <link rel="stylesheet" href="/<?php echo (ADMIN_CSS_PATH); ?>/index.css" type="text/css" media="screen">

    <script type="text/javascript" src="/<?php echo (ADMIN_JS_PATH); ?>/jquery.js"></script>
    <script type="text/javascript" src="/<?php echo (ADMIN_JS_PATH); ?>/tendina.js"></script>
    <script type="text/javascript" src="/<?php echo (ADMIN_JS_PATH); ?>/common.js"></script>

</head>
<body>
<!--顶部-->
<div class="layout_top_header">
    <div style="float: left"><span style="font-size: 16px;line-height: 45px;padding-left: 20px;color: #8d8d8d">幼儿园信息管理系统后台</span></div>
    <div id="ad_setting" class="ad_setting">
        <a class="ad_setting_a" href="javascript:;">
            <i class="icon-user glyph-icon" style="font-size: 20px"></i>
            <span>管理员</span>
            <i class="icon-chevron-down glyph-icon"></i>
        </a>
        <ul class="dropdown-menu-uu" style="display: none" id="ad_setting_ul">
            <li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-user glyph-icon"></i> 个人中心 </a> </li>
            <li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-cog glyph-icon"></i> 设置 </a> </li>
            <li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-signout glyph-icon"></i> <span class="font-bold">退出</span> </a> </li>
        </ul>
    </div>
</div>
<!--顶部结束-->
<!--菜单-->
<div class="layout_left_menu">
    <ul class="tendina" id="menu">
        <li class="childUlLi">
            <a href="#" target="menuFrame"><i class="glyph-icon icon-home"></i>首页</a>
            <ul style="display: none;">
                <li><a href="<?php echo U('/Admin/Platform/index');?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>平台信息汇总</a></li>
            </ul>
        </li>
        <li class="childUlLi">
            <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>幼儿园信息列表</a>
            <ul style="display: none;">
                <li><a href="<?php echo U('/Admin/Info/transfer',array('status'=>1));?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>转让列表</a></li>
                <li><a href="<?php echo U('/Admin/Info/transfer',array('status'=>2));?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>求购列表</a></li>
                <li><a href="<?php echo U('/Admin/Info/transfer',array('status'=>3));?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>出租列表</a></li>
                <li><a href="<?php echo U('/Admin/Info/transfer',array('status'=>4));?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>招标列表</a></li>
            </ul>
        </li>
        <li class="childUlLi">
            <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>信息审核列表</a>
            <ul style="display: none;">
                <li><a href="<?php echo U('/Admin/Check/index',array('status'=>0));?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>发布中</a></li>
                <li><a href="<?php echo U('/Admin/Check/index',array('status'=>1));?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>审核成功</a></li>
                <li><a href="<?php echo U('/Admin/Check/index',array('status'=>-1));?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>审核失败</a></li>
            </ul>
        </li>
        <li class="childUlLi">
            <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>角色管理</a>
            <ul style="display: none;">
                <li><a href="<?php echo U('/Admin/User/updpwd');?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>修改密码</a></li>
            </ul>
        </li>
        <li class="childUlLi">
            <a href="#"> <i class="glyph-icon  icon-location-arrow"></i>资料管理</a>
            <ul style="display: none;">
                <li><a href="<?php echo U('/Admin/Messge/common');?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>常用资料</a></li>
                <li><a href="<?php echo U('/Admin/Messge/law');?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>法政法规</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--菜单-->
<div id="layout_right_content" class="layout_right_content">
    <div class="mian_content">
        <div id="page_content">
            <iframe id="menuFrame" name="menuFrame" src="/index.php/Admin/Platform/index" style="overflow:visible;" scrolling="yes" frameborder="no" height="100%" width="100%"></iframe>
        </div>
    </div>
</div>
<div class="layout_footer">
    <p>Copyright © 2016-05-16 - 317149766@qq.com</p>
</div>
    </body>
</html>