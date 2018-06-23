<div class="main_search music_search white_shadow">
    <form action="" method="post" class="main_search_form wrap clearfix">
        <i class="iconfont icon-home"></i>我的位置：目录
        <input type="button" value="搜索" class="main_search_btn music_search_btn outline pull_right">
        <input type="text" class="main_search_msg music_search_msg outline round1 pull_right" placeholder="请输入标题">
    </form>
</div>
<div class="main_content catelog_banner wrap clearfix">
    <ul class="main_content_show catelog_show catelog_content_show pull_right main_show white_shadow round2">
        <li class="catelog_content_title mui_ellipsis_1">
            <span><?=$blogTest['blog_title']?></span>
        </li>
        <!--<li class="catelog_content_img">
            <img src="<?/*=base_url('assets/images/'.$blogTest['blog_img_path'])*/?>" alt="封面">
        </li>-->
        <li class="catelog_synopsis white_shadow">
            <span class="mui_ellipsis_4">简介：<?=$blogTest['blog_synopsis']?></span>
        </li>
        <li class="catelog_content">
            <?php
                $blogTest = $blogTest['blog_content'];
                $content = explode('|',$blogTest);
                $contentNum = count($content);
                for($i=0 ; $i<$contentNum ; $i++) {
                    $contentName = $content[$i];
                    echo '<p>'. htmlspecialchars_decode($contentName) . '</p>';
                }
            ?>
        </li>
        <li class="catelog_comment round1">
            <div class="catelog_comment_title">
                <span>交&nbsp;&nbsp;流</span>
                <i class="iconfont icon-down pull_right" title="往下"></i>
                <i class="iconfont icon-up pull_right" title="往上"></i>
            </div>
            <?php foreach ($commentTest as $value) { ?>
                <div class="catelog_comment_info upline clearfix">
                    <span class="comment_name"><?=$value['visitor_name']?></span>
                    <p class="comment_info mui_ellipsis_4"><?=$value['comment_info']?></p>
                    <i class="comment_time iconfont icon-time">&nbsp;<?=date('Y-m-d H:i:s',$value['comment_dateline'])?></i>
                    <img src="<?=base_url('assets/images/'.$value['visitor_img_path'])?>" alt="" class="comment_img">
                    <div class="comment_operate pull_right">
                        <i class="iconfont icon-report">&nbsp;举报(<?php
                            echo "<span class='colorDeep'>".$value['comment_report_num']."</span>"
                        ?>)</i>
                        <i class="iconfont icon-reply-cancel icon-reply">&nbsp;回复(<?php
                            echo "<span class='colorDeep'>0</span>"
                        ?>)</i>
                        <i class="iconfont icon-reply-cancel icon-cancel display">&nbsp;取消回复</i>
                        <i class="iconfont icon-like">&nbsp;点赞(<?php
                            echo "<span class='colorDeep'>".$value['comment_like_num']."</span>"
                        ?>)</i>
                    </div>
                    <div class="comment_reply_area display">
                        <form action="" method="post" class="comment_reply_form">
                            <textarea name="input_comment_reply" id="input_comment_reply" cols="" rows="4" placeholder="请输入内容（不超过180字）" class="input_comment_reply outline"></textarea>
                            <input type="submit" value="提&nbsp;交" class="btn_comment_reply pull_right outline">
                        </form>
                    </div>
                </div>
                <div class="catelog_reply_info">
                    <span class="reply_name"><?="<span class='redDeep'>".$value['visitor_name']."</span>"?>&nbsp;@&nbsp;<?=$value['visitor_name']?></span>
                    <p class="reply_info mui_ellipsis_4"><?=$value['comment_info']?></p>
                    <i class="reply_time iconfont icon-time">&nbsp;<?=date('Y-m-d H:i:s',$value['comment_dateline'])?></i>
                    <img src="<?=base_url('assets/images/'.$value['visitor_img_path'])?>" alt="" class="reply_img">
                    <div class="reply_operate pull_right">
                        <i class="iconfont icon-report">&nbsp;举报(<?php
                            echo "<span class='colorDeep'>".$value['comment_report_num']."</span>"
                            ?>)</i>
                        <i class="iconfont icon-reply-cancel icon-reply">&nbsp;回复(<?php
                            echo "<span class='colorDeep'>0</span>"
                            ?>)</i>
                        <i class="iconfont icon-reply-cancel icon-cancel display">&nbsp;取消回复</i>
                        <i class="iconfont icon-like">&nbsp;点赞(<?php
                            echo "<span class='colorDeep'>".$value['comment_like_num']."</span>"
                            ?>)</i>
                    </div>
                </div>
                <div class="catelog_reply_info">
                    <span class="reply_name"><?="<span class='redDeep'>".$value['visitor_name']."</span>"?>&nbsp;@&nbsp;<?=$value['visitor_name']?></span>
                    <p class="reply_info mui_ellipsis_4"><?=$value['comment_info']?></p>
                    <i class="reply_time iconfont icon-time">&nbsp;<?=date('Y-m-d H:i:s',$value['comment_dateline'])?></i>
                    <img src="<?=base_url('assets/images/'.$value['visitor_img_path'])?>" alt="" class="reply_img">
                    <div class="reply_operate pull_right">
                        <i class="iconfont icon-report">&nbsp;举报(<?php
                            echo "<span class='colorDeep'>".$value['comment_report_num']."</span>"
                            ?>)</i>
                        <i class="iconfont icon-reply-cancel icon-reply">&nbsp;回复(<?php
                            echo "<span class='colorDeep'>0</span>"
                            ?>)</i>
                        <i class="iconfont icon-reply-cancel icon-cancel display">&nbsp;取消回复</i>
                        <i class="iconfont icon-like">&nbsp;点赞(<?php
                            echo "<span class='colorDeep'>".$value['comment_like_num']."</span>"
                            ?>)</i>
                    </div>
                </div>
            <? } ?>
            <!--未识别游客身份显示登录，识别会显示评论-->
            <div class="catelog_comment_title">
                <span>评&nbsp;&nbsp;论</span>
            </div>
            <div class="catelog_comment_area">
                <form action="<?=site_url('blog/comment')?>" method="post" class="comment_form">
                    <textarea name="input_comment" id="input_comment" cols="" rows="4" class="input_comment outline" placeholder="请输入内容（不超过180字）"></textarea>
                    <input type="submit" value="确&nbsp;认" class="btn_comment pull_right outline">
                </form>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('.btn_comment').click(function(){
                        $.ajax({
                            url:"<?=site_url('blog/comment')?>",
                            type:'post',
                            data: $('.comment_form').serialize(),
                            dataType:'json',
                            success:function (rs) {
                                if (rs.msg == '2') {
                                    alert('输入正常！');
                                } else if (rs.msg == '1') {
                                    alert('输入内容超出范围！');
                                } else {
                                    alert('输入内容不能为空！');
                                }
                            }
                        });
                        return false;
                    });
                });
            </script>
        </li>
    </ul>
    <div class="main_other_show catelog_show catelog_info_show pull_left main_show white_shadow round2">
        <li>
            <span>目录列表</span>
            <i class="iconfont icon-down pull_right" title="往下"></i>
            <i class="iconfont icon-up pull_right" title="往上"></i>
        </li>
        <?php if (empty($blogList)) { ?>
            <li class="catelog_show_prompt">暂无目录</li>
        <? } else {
            foreach ($blogList as $value) { ?>
                <li class="blog_list mui_ellipsis_1">
                    <span class="blog_id"><?= $value['blog_id'] ?></span>
                    <span>.</span>
                    <span class="blog_title"><?= $value['blog_title'] ?></span>
                </li>
            <?php } ?>
        <? } ?>
    </div>
</div>