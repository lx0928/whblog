<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/blog.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/iconfonts/iconfont.css')?>">
    <script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/blog.js')?>"></script>
    <title>127.0.0.1</title>
</head>
<body>
    <div class="header black_shadow_deep min_width">
        <ul class="header_nav wrap">
            <li><i class="iconfont icon-home"></i>首页</li>
            <li><i class="iconfont icon-catelog"></i>目录</li>
            <li><i class="iconfont icon-music"></i>音乐</li>
            <li><i class="iconfont icon-chat"></i>留言</li>
            <li><i class="iconfont icon-live"></i>直播间</li>
            <li><i class="iconfont icon-aboutUs"></i>关于</li>
        </ul>
    </div>
    <!--首页-->
    <div class="main blog_home" id="0">
        <?php include 'blog_home.php';?>
    </div>
    <!--目录-->
    <div class="main blog_catelog" id="1">
        <?php include 'blog_catelog.php';?>
    </div>
    <!--音乐播放-->
    <div class="main blog_music" id="2">
        <?php include 'blog_music.php';?>
    </div>
    <!--留言墙-->
    <div class="main blog_chat" id="3">
        <?php include 'blog_chat.php';?>
    </div>
    <!--直播间-->
    <div class="main blog_live" id="4">
        <?php include 'blog_live.php';?>
    </div>
    <!--关于我-->
    <div class="main blog_about" id="5">
        <?php include 'blog_about.php';?>
    </div>
    <ul class="footer black_shadow min_width">
        <li>&copy;Design by 安辰 皖ICP备88888888号</li>
        <li><?=date('Y-m-d H:i:s',time())?></li>
    </ul>
</body>
</html>