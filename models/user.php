<?php
class UserModel extends Model{
    public function index(){
        return;
    }

    public function register(){
        //sanitize post
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['password']);
        
        

        if ($post['submit']){

            if ($post['name'] == "" || $post['email'] == ""|| $post['password'] == ""){
                Messages::setMsg('Fill all fields to continue', 'error');
                return;
            }
            
            //insert unto sql
            $this->query("INSERT INTO users(name, email, password) values(:name, :email, :password)");
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();
            //verify
            if ($this->lastInsertId()){
                //redirect
                header('Location: '.ROOT_URL.'users/login');

            }
        }
        return;
    }

    public function login(){
                //sanitize post
                $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $password = md5($post['password']);
                // die($password);

                if ($post['submit']){
    
                    //query the DB
                    $this->query("SELECT * from  users where email = :email and password = :password ");
                    $this->bind(':email', $post['email']); 
                    $this->bind(':password', $password);
                    $this->execute();
                    
                    $row = $this->single();
                    if ($row){
                        $_SESSION['is_logged_in'] = true;
                        $_SESSION['userData']= array(
                            "id" => $row['id'],
                            "name" => $row['name'],
                            "email" => $row['email'],
                        );
                        header('Location: '.ROOT_URL.'shares');
                    }else{
                        Messages::setMsg('Incorrect Details', 'error');
                    }
                }
                return;
    }
}
?>