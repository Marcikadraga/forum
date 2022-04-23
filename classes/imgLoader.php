<?php
require_once "dbh.classes.php";

class ImgLoader extends Dbh {

    public function displayImages(){
        $stmt = $this->connect()->prepare("SELECT * FROM images");
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
//        var_dump($data);

        return $data;
    }
}