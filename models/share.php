<?php
class ShareModel extends Model{
    public function index(){
        $this->query('select * from shares');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add(){
        //sanitize post
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($post['submit']){
            echo 'SUBMITTED';
        }
    }
}
?>