<?php
class SignupContr extends Signup{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;
    private $status;
    private $points;
    private $imgs;

    public function __construct($uid, $pwd, $pwdRepeat, $email, $status, $points, $imgs ) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
        $this->status = $status;
        $this->points = $points;
        $this->imgs =$imgs;
    }
    public function signupUser(){
        session_start();
        $_SESSION['uid'] = $_POST['uid'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['img']=$_POST['img'];

        if($this->pwdMatch()==false){


            echo '<form action="../signup.inc.php" method="post">
            <input type="text" name="uid" value="'.$_SESSION['uid'].'" required>
            <br>
            <input type="password" name="pwd" placeholder="Password" required>
            <br>
            <input type="password" name="pwdrepeat" placeholder="Repeat password" required>
            <br>
            <input type="text" name="email" value="'.$_SESSION['email'].'" required>
            <br>
            <button type="submit" name="submit">SIGN IN</button required>
            </form>';
            echo 'Passwords do not match';
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email, $this->status, $this->points, $this->imgs );
        
    }
    private function emptyInput(){
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email) ){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    private function pwdMatch(){
        return $this->pwd == $this->pwdRepeat;
    }
}