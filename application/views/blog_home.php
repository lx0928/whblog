<div class="main_search home_search white_shadow">
    <form action="" method="post" class="main_search_form wrap clearfix">
        <i class="iconfont icon-home"></i>我的位置：首页
        <input type="button" value="搜索" class="main_search_btn home_search_btn outline pull_right">
        <input type="text" class="main_search_msg home_search_msg outline round1 pull_right" placeholder="请输入标题">
    </form>
</div>
<ul class="main_banner home_banner wrap">
    <?php foreach ($blogTopList as $value) {  ?>
        <li class="round2">
            <a href="">
                <img src="<?=base_url('assets/images/'. $value['blog_img_path'])?>" alt="图片" class="img">
            </a>
            <span class="black_shadow mui_ellipsis_1"><?=$value['blog_title']?></span>
        </li>
    <?php } ?>
</ul>
<div class="main_content home_content wrap clearfix">
    <div class="main_content_show pull_left main_show white_shadow round2">
        <!--精彩博文-->
        <div>
            <div class="nav">
                <span class="blogGreat blogIndex"><i class="iconfont icon-great"></i>精彩博文</span>
                <a href="" class="blogMore pull_right"><i class="iconfont icon-more"></i></a>
            </div>
            <ul class="blog_content blog_great">
                <?php if (empty($blogGreatList)) { ?>
                    <li>暂无内容</li>
                <? } else {
                    foreach ($blogGreatList as $value) {  ?>
                        <li>
                            <h3 class="mui_ellipsis_1"><?=$value['blog_title']?></h3>
                            <img src="<?=base_url('assets/images/'. $value['blog_img_path'])?>" alt="博客图片" class="round1">
                            <span class="mui_ellipsis_6"><?=$value['blog_synopsis']?></span>
                            <div class="blog_note">
                                <i class="category iconfont icon-category">&nbsp;<?=$value['blog_category']?></i>
                                <i class="datetime iconfont icon-time">&nbsp;<?=date('Y-m-d H: i:s',$value['blog_dateline'])?></i>
                                <i class="views iconfont icon-views">&nbsp;<?=$value['blog_views']?></i>
                                <a href="javascript:;" class="read pull_right"><i class="iconfont icon-read">&nbsp;阅读全文</i></a>
                            </div>
                        </li>
                    <?php }
                } ?>
            </ul>
        </div>
        <!--博主推荐-->
        <div>
            <div class="nav">
                <span class="blogRecommended blogIndex"><i class="iconfont icon-recommended"></i>博主推荐</span>
                <a href="" class="blogMore pull_right"><i class="iconfont icon-more"></i></a>
            </div>
            <ul class="blog_content blog_recommended">
                <?php if (empty($blogRecommendedList)) { ?>
                    <li>暂无内容</li>
                <? } else {
                    foreach ($blogRecommendedList as $value) {  ?>
                        <li>
                            <h3 class="mui_ellipsis_1"><?=$value['blog_title']?></h3>
                            <img src="<?=base_url('assets/images/'. $value['blog_img_path'] . '')?>" alt="博客图片" class="round1">
                            <span class="mui_ellipsis_6"><?=$value['blog_synopsis']?></span>
                            <div class="blog_note">
                                <i class="category iconfont icon-category">&nbsp;<?=$value['blog_category']?></i>
                                <i class="datetime iconfont icon-time">&nbsp;<?=date('Y-m-d H: i:s',$value['blog_dateline'])?></i>
                                <i class="views iconfont icon-views">&nbsp;<?=$value['blog_views']?></i>
                                <a href="javascript:;" class="read pull_right"><i class="iconfont icon-read">&nbsp;阅读全文</i></a>
                            </div>
                        </li>
                    <?php }
                } ?>
            </ul>
        </div>
        <!--国外资讯-->
        <div>
            <div class="nav">
                <span class="blogForeign blogIndex"><i class="iconfont icon-foreign"></i>国外资讯</span>
                <a href="" class="blogMore pull_right"><i class="iconfont icon-more"></i></a>
            </div>
            <ul class="blog_content blog_foreign">
                <?php if (empty($blogForeignList)) { ?>
                    <li>暂无内容</li>
                <? } else {
                    foreach ($blogForeignList as $value) {  ?>
                        <li>
                            <h3 class="mui_ellipsis_1"><?=$value['blog_title']?></h3>
                            <img src="<?=base_url('assets/images/'. $value['blog_img_path'] . '')?>" alt="博客图片" class="round1">
                            <span class="mui_ellipsis_6"><?=$value['blog_synopsis']?></span>
                            <div class="blog_note">
                                <i class="category iconfont icon-category">&nbsp;<?=$value['blog_category']?></i>
                                <i class="datetime iconfont icon-time">&nbsp;<?=date('Y-m-d H: i:s',$value['blog_dateline'])?></i>
                                <i class="views iconfont icon-views">&nbsp;<?=$value['blog_views']?></i>
                                <a href="javascript:;" class="read pull_right"><i class="iconfont icon-read">&nbsp;阅读全文</i></a>
                            </div>
                        </li>
                    <?php }
                } ?>
            </ul>
        </div>
    </div>
    <div class="main_other_show pull_right main_show">
        <ul class="main_other main_about white_shadow spacing round2">
            <li>
                <h1 class="title underline">关于我</h1>
            </li>
            <li>
                <h3>Name：</h3>
                <span><?=$admin['admin_name']?></span>
            </li>
            <li>
                <h3>Email：</h3>
                <span><?=$admin['admin_email']?></span>
            </li>
            <li>
                <h3>Tel：</h3>
                <span><?=$admin['admin_mobile']?></span>
            </li>
            <li>
                <h3>School：</h3>
                <span><?=$admin['admin_school']?></span>
            </li>
        </ul>
        <ul class="main_other main_newest white_shadow spacing round2">
            <li>
                <h1 class="title underline">最新推荐</h1>
            </li>
            <?php foreach ($latestRecommended as $value) { ?>
                <li>
                    <a href=""><h3 class="mui_ellipsis_1 blog_title"><?=$value['blog_title']?></h3></a>
                    <img src="<?=base_url('assets/images/'.$value['blog_img_path'].'')?>" alt="博客图片" class="round1">
                    <span class="mui_ellipsis_4"><?=$value['blog_synopsis']?></span>
                </li>
            <?php } ?>
        </ul>
        <ul class="main_other main_browse white_shadow spacing round2">
            <li>
                <h1 class="title underline">浏览排行</h1>
            </li>
            <?php foreach ($browseList as $value) { ?>
                <li>
                    <a href=""><h3 class="mui_ellipsis_1 blog_title"><?=$value['blog_title']?></h3></a>
                    <img src="<?=base_url('assets/images/'.$value['blog_img_path'].'')?>" alt="博客图片" class="round1">
                    <span class="mui_ellipsis_4"><?=$value['blog_synopsis']?></span>
                </li>
            <?php } ?>
        </ul>
        <ul class="main_other main_visitor white_shadow spacing round2">
            <li>
                <h3 class="title underline">最近访客</h3>
            </li>
            <?php foreach ($visitorList as $value) { ?>
                <li class="round2">
                    <img src="<?=base_url('assets/images/'.$value['visitor_img_path'].'')?>" alt="访客头像" class="round2">
                </li>
            <?php } ?>
        </ul>
        <ul class="main_other main_custom white_shadow spacing round2">
            <li>
                <h3 class="title underline">个人微信</h3>
            </li>
            <li class="round2">
                <img src="<?=base_url('assets/images/'.$admin['admin_QrCode_path'].'')?>" alt="个人微信" class="round2">
            </li>
        </ul>
    </div>
</div>