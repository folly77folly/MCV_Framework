<?php
class ShareModel extends Model{
    public function index(){
        $this->query('select * from shares');
        $rows = $this->resultSet();
        return $rows;
    }
}
?>