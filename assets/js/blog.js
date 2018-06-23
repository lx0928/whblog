$(document).ready(function(){
    $(function(){
        // 导航切换
        $('.main').addClass('display');
        $('.blog_catelog').removeClass('display');
        $('.header_nav li').click(function(){
            var _index= $(this).index();
            // alert(_index);
            $(this).css({'background-color':'#eee','color':'#000'}).siblings().css({'background-color':'#000','color':'#fff'});
            $('.main#'+_index).show();
            for(var i=0; i<6; i++) {
                if (_index != i) {
                    $('.main#' + i).hide();
                }
            }
        });
        
        // 音乐排行标志
        $('.music_banner .music_views_rank').hover(function(){
            var _index = $(this).index();
            $('.music_banner .music_views_rank .icon-musicIcon').eq(_index).css('color','rgba(255,255,255,1)');
        },function(){
            var _index = $(this).index();
            $('.music_banner .music_views_rank .icon-musicIcon').eq(_index).css('color','rgba(255,255,255,.5)');
        });

        // 音乐前面小图标
        $('.music_info_show .music_list .icon-musicIcon').hide();
        $('.music_info_show .music_list').hover(function(){
            var _index = $(this).index() - 1;
            $('.music_info_show .music_list .icon-musicIcon').eq(_index).show();
        },function(){
            var _index = $(this).index() - 1;
            $('.music_info_show .music_list .icon-musicIcon').eq(_index).hide();
        });

        // 播放面板图标更换
        $('.music_play_panel .icon-pause,.icon-next').hide();
        $('.music_play_panel .icon-play-pause').hover(function(){
            $('.music_play_panel .icon-pause').show();
            $('.music_play_panel .icon-play').hide();
        },function(){
            $('.music_play_panel .icon-pause').hide();
            $('.music_play_panel .icon-play').show();
        });

        $('.music_play_panel .icon-cycle-next').hover(function(){
            $('.music_play_panel .icon-next').show();
            $('.music_play_panel .icon-cycle').hide();
        },function(){
            $('.music_play_panel .icon-next').hide();
            $('.music_play_panel .icon-cycle').show();
        });

        // 音乐专辑图片
        // $musicImgWidth = $('.music_play_lyrics').outerWidth();
        // $musicImgHeight = $('.music_play_lyrics').outerHeight();
        // $('.music_play_img').css('width',$musicImgWidth);
        // $('.music_play_img').css('height',$musicImgHeight);

        // 目录显示
        // $('.catelog_info_show .blog_list').click(function(){
        //     alert(1);
        // });

        // 去掉目录第一块上划线
        $('.catelog_comment_info:nth-child(2)').removeClass('upline');

        // 回复与取消回复
        // $('.catelog_comment_info .icon-cancel').hide();
        // $('.catelog_comment_info .icon-reply-cancel').click(function(){
        //     $('.catelog_comment_info .icon-reply').show();
        //     $('.catelog_comment_info .icon-cancel').hide();
        // },function(){
        //     $('.catelog_comment_info .icon-reply').hide();
        //     $('.catelog_comment_info .icon-cancel').show();
        // });
        $('.comment_operate .icon-reply-cancel').append(001);
        $('#001').click(function(){
            $('.comment_reply_area').removeClass('display');
            $('.comment_operate .icon-reply').hide();
            $('.comment_operate .icon-cancel').show();
        },function(){
            $('.comment_reply_area').addClass('display');
            $('.comment_operate .icon-reply').show();
            $('.comment_operate .icon-cancel').hide();
        });

    });
});