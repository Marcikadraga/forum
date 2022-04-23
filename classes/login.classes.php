<?php
class Login extends Dbh{
    protected function getUser($email, $pwd){
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE users_email='$email';");
        $stmt->execute();

        $pwdHashed =$stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd=password_verify($pwd, $pwdHashed[0]["users_pwd"]);


        if($checkPwd==true){
            echo $pwdHashed[0]["users_uid"];
        }

        session_start();
        $_SESSION['uid'] = $pwdHashed[0]["users_uid"];
        $_SESSION['img'] = $pwdHashed[0]["users_img"];
    }
}