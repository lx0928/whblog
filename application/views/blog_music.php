<div class="main_search music_search white_shadow">
    <form action="" method="post" class="main_search_form wrap clearfix">
        <i class="iconfont icon-home"></i>我的位置：音乐
        <input type="button" value="搜索" class="main_search_btn music_search_btn outline pull_right">
        <input type="text" class="main_search_msg music_search_msg outline round1 pull_right" placeholder="请输入歌曲或歌手名">
    </form>
</div>
<ul class="main_banner music_banner wrap">
    <?php foreach ($musicViewsList as $value) {  ?>
        <li class="round2 music_views_rank">
            <a href="">
                <img src="<?=base_url('assets/images/'. $value['music_img_path'] . '')?>" alt="图片">
                <i class="iconfont icon-musicIcon"></i>
                <span class="black_shadow mui_ellipsis_1"><?=$value['music_artist']?>&nbsp;-&nbsp;<?=$value['music_name']?></span>
            </a>
        </li>
    <?php } ?>
</ul>
<div class="main_content music_banner wrap clearfix">
    <ul class="main_content_show music_play_show pull_right main_show white_shadow round2">
        <?php if (empty($musicLyr)) { ?>
            <li class="music_play_prompt">请选择播放曲目</li>
        <? } else { ?>
            <li class="music_play_track mui_ellipsis_1">
                <span class="music_artist"><?=$musicLyr['music_artist']?></span>
                <span>-</span>
                <span class="music_name"><?=$musicLyr['music_name']?></span>
                <span>.</span>
                <span class="music_format"><?= $musicLyr['music_format'] ?></span>
                <div class="music_play_panel">
                    <i class="iconfont icon-retreat" title="快退"></i>
                    <i class="iconfont icon-play icon-play-pause" title="播放"></i>
                    <i class="iconfont icon-pause icon-play-pause" title="暂停"></i>
                    <i class="iconfont icon-forward" title="快进"></i>
                    <i class="iconfont icon-cycle icon-cycle-next" title="循环"></i>
                    <i class="iconfont icon-next icon-cycle-next" title=下一首></i>
                </div>
            </li>
            <?php if (!empty($musicLyr['music_lyr'])) { ?>
                <li class="music_play_lyrics">
<!--                    <img src="--><?//=base_url('assets/images/'. $musicLyr['music_img_path'] . '')?><!--" alt="" class="round1 music_play_img">-->
            <?php
//                $musicLyr = file_get_contents('./lyr/'.$musicLyr['music_lyr_path']);
//                echo $musicLyr;
                $musicLyr = $musicLyr['music_lyr'];
                $lyr = explode('|',$musicLyr);
                $lyrNum = count($lyr);
                for($i=0 ; $i<$lyrNum ; $i++) {
                    $lyrName = $lyr[$i];
                    echo '<p>'. $lyrName . '</p>';
                }
            ?>
                </li>
                <li class="music_play_rate">
                    <span class="play_bar black_shadow"></span>
                    <span class="play_time">13:20</span>
                </li>
            <? } else { ?>
                <li class="music_play_lyrics">暂无歌词</li>
            <? }
        } ?>
    </ul>
    <ul class="main_other_show music_info_show pull_left main_show white_shadow round2">
        <li>
            <span>可播放音乐列表</span>
            <i class="iconfont icon-down pull_right" title="往下"></i>
            <i class="iconfont icon-up pull_right" title="往上"></i>
        </li>
        <?php if (empty($musicList)) { ?>
            <li class="music_play_prompt">暂无可播放音乐</li>
        <? } else {
            foreach ($musicList as $value) { ?>
                <li class="music_list mui_ellipsis_1">
                    <i class="iconfont icon-musicIcon"></i>
                    <span class="music_artist"><?= $value['music_artist'] ?></span>
                    <span>-</span>
                    <span class="music_name"><?= $value['music_name'] ?></span>
                    <span>.</span>
                    <span class="music_format"><?= $value['music_format'] ?></span>
                </li>
            <?php } ?>
        <? } ?>
    </ul>
</div>