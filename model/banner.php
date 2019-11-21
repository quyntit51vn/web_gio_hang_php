<?php

// require 'db.php';

class banner {

    var $url_banner;
    var $banner;
    var $id;
    
    public function __construct($id,$banner,$url_banner)
    {
        $this->id = $id;
        $this->banner = $banner;
        $this->url_banner = $url_banner;
    }

    static function getList(){

        $conn = db::connect();
        // print_r($conn);
        //Buoc 2: Thao tac voi CSDL: CRUD
        $sql = "SELECT * From banners ";
        $result = $conn->query($sql);
        $ls = [];
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $banner = new banner($row['id'],$row['banner'],$row['url_banner']);
                $ls[] = $banner;
            }
        }    
        //Buoc 3: Dong ket noi
        $conn->close();
        return $ls;
    }

    
    
}