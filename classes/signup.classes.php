<?php
class Signup extends Dbh{
    protected function setUser($uid, $pwd, $email, $status, $points ,$img){
        $stmt = $this->connect()->prepare("INSERT INTO users(users_uid, users_pwd,users_email,users_status,users_points,users_img) VALUES (?, ?, ?, ?, ?, ?);");
        
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $stmt->execute(array($uid, $hashedPwd, $email, $status, $points, $img));
        
    }
}