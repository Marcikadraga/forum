<?php
class Login extends Dbh{
    protected function getUser($email, $pwd){
        
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE users_email='$email';");
            $stmt->execute();
    
            $userData =$stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd=password_verify($pwd, $userData[0]["users_pwd"]);
    
            session_start();
            $_SESSION['uid'] = $userData[0]["users_uid"];
            $_SESSION['img'] = $userData[0]["users_img"];
            $_SESSION['email'] = $userData[0]["users_email"];
            $_SESSION['status'] = $userData[0]["users_status"];
            $_SESSION['points'] = $userData[0]["users_points"];        


    }
    protected function getPages(){
        $stmt =$this->connect()->prepare("SELECT * FROM pages");
        $stmt->execute();

        $pageData=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['uPagesData']=$pageData;
    }
}