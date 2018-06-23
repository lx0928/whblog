<?php
class Blog_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getBlogInfo(){
        $result = array(
            /*关于博主*/
            'admin' => $this->db->select('admin_name, admin_email, admin_mobile ,admin_school, admin_QrCode_path')
                ->from('blog_admin')
                ->get()
                ->row_array(),
            
            /*博客总览*/
            'blogList' => $this->db->select('blog_id, blog_title')
                ->from('blog_info')
                ->order_by('blog_id ASC')
                ->limit(15)
                ->get()
                ->result_array(),

            /*精彩博客*/
            'blogGreatList' => $this->db->select('bi.*, br.blog_range_name')
                ->from('blog_info as bi')
                ->join('blog_range as br','bi.blog_range_id = br.blog_range_id')
                ->where('bi.blog_range_id', 1)
                ->order_by('bi.blog_dateline DESC')
                ->limit(4)
                ->get()
                ->result_array(),

            /*博主推荐*/
            'blogRecommendedList' => $this->db->select('bi.*, br.blog_range_name')
                ->from('blog_info as bi')
                ->join('blog_range as br','bi.blog_range_id = br.blog_range_id')
                ->where('bi.blog_range_id', 2)
                ->order_by('bi.blog_dateline DESC')
                ->limit(4)
                ->get()
                ->result_array(),

            /*国外资讯*/
            'blogForeignList' => $this->db->select('bi.*, br.blog_range_name')
                ->from('blog_info as bi')
                ->join('blog_range as br','bi.blog_range_id = br.blog_range_id')
                ->where('bi.blog_range_id', 3)
                ->order_by('bi.blog_dateline DESC')
                ->limit(4)
                ->get()
                ->result_array(),

            /*最新推荐*/
            'latestRecommended' => $this->db->select('blog_title, blog_synopsis,blog_img_path')
                ->from('blog_info')
                ->where('is_recommend',1)
                ->order_by('blog_recommend_dateline DESC')
                ->limit(3)
                ->get()
                ->result_array(),

            /*置顶*/
            'blogTopList' => $this->db->select('blog_title, blog_img_path')
                ->from('blog_info')
                ->where('is_top',1)
                ->order_by('blog_top_dateline DESC')
                ->limit(3)
                ->get()
                ->result_array(),

            /*浏览排行*/
            'browseList' => $this->db->select('blog_title, blog_synopsis, blog_img_path')
                ->from('blog_info')
                ->order_by('blog_views DESC')
                ->limit(3)
                ->get()
                ->result_array(),

            /*最近访客*/
            'visitorList' => $this->db->select('visitor_img_path')
                ->from('blog_visitor')
                ->order_by('visitor_dateline DESC')
                ->limit(9)
                ->get()
                ->result_array(),

            /*音乐总览*/
            'musicList' => $this->db->select('music_id, music_name, music_artist, music_format')
                ->from('blog_music')
                ->order_by('music_id ASC')
                ->limit(15)
                ->get()
                ->result_array(),

            /*音乐播放排行*/
            'musicViewsList' => $this->db->select('music_name, music_img_path, music_artist')
                ->from('blog_music')
                ->order_by('music_views DESC')
                ->limit(3)
                ->get()
                ->result_array(),

             /*音乐歌词*/
            'musicLyr' => $this->db->select('music_name, music_artist, music_lyr, music_img_path, music_lyr_path, music_format')
            ->from('blog_music')
            ->where('music_id',12)
            ->get()
            ->row_array(),

            /*测试目录*/
            'blogTest' => $this->db->select('blog_title, blog_img_path, blog_content, blog_synopsis')
            ->from('blog_info')
            ->where('blog_id',2)
            ->get()
            ->row_array(),

            /*测试评论*/
            'commentTest' => $this->db->select('bc.comment_id, bc.comment_info, bc.comment_dateline, bc.comment_report_num, bc.comment_like_num, bv.visitor_name, bv.visitor_img_path')
                ->from('blog_comment as bc')
                ->join('blog_visitor as bv','bc.visitor_id = bv.visitor_id')
                ->order_by('comment_dateline DESC')
                ->get()
                ->result_array(),
        );

        return $result;
    }

//    public function getMusic($music_id) {
//        $result = $this->db->select('music_name, music_artist, music_lyr')
//            ->from('blog_music')
//            ->where('music_id',$music_id)
//            ->get()
//            ->row_array();
//        return $result;
//    }


}