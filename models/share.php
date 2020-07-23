<?php
class ShareModel extends Model{
    public function index(){
        $this->query('select * from shares order by created_at desc');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add(){
        //sanitize post
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($post['submit']){
            if ($post['title'] == "" || $post['body'] == ""|| $post['link'] == ""){
                Messages::setMsg('Fill all fields to continue', 'error');
                return;
            }
            //insert unto sql
            $this->query('INSERT INTO shares(title, body, link, user_id) values(:title, :body, :link, :user_id)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id',1);
            $this->execute();
            //verify
            if ($this->lastInsertId()){
                //redirect
                header('Location: '.ROOT_URL.'shares');

            }
        }
        return;
    }
}
?>