<?php
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('blog_model'));
    }

    public function index()
    {
        $data = $this->blog_model->getBlogInfo();
        $this->load->view('blog',$data);
    }

//    public function music($music_id = null) {
//        $music_id = (int)$_POST['music_id'];
//        $data = $this->blog_model->getMusic($music_id);
//        var_dump($data);
//    }

    public function comment() {
        $commentInfo = $_POST['input_comment'];
        if (!empty($commentInfo)) {
            $commentInfoLength = mb_strlen($commentInfo);
            if ($commentInfoLength <= 180) {
                echo json_encode(array('msg'=>'2'));/*输入合法*/
                exit;
            } else {
                echo json_encode(array('msg'=>'1'));/*输入长度超出范围*/
                exit;
            }
        } else {
            echo json_encode(array('msg'=>'0'));/*输入为空*/
            exit;
        }
    }
}
?>