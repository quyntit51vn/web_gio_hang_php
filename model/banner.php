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

    static function getBannerById($id){
        $ls = banner::getList();
        foreach($ls as $banner){
            if($banner->id == $id)
                return $banner;
        }
        return null;
    }

    static function add($banner){
        $conn = db::connect();
        
        $sql = "INSERT INTO `banners` (`banner`, `url_banner`) 
                VALUES ('".$banner->banner."',
                        '".$banner->url_banner."')";
        echo $sql;
        
        $result = $conn->query($sql);
        echo $conn->error;
        $conn->close();
    }

    static function delete($id){
        $conn = db::connect();
        $sql = "DELETE FROM `banners` WHERE `id` = ".$id;
        $result = $conn->query($sql);
        echo $result;
        echo $conn->error;
        $conn->close();
    }


    static function update($banner){
        $conn = db::connect();
        $sql = "UPDATE `banners` SET `banner`= '".$banner->banner."', 
                                    `url_banner` = '".$banner->url_banner."', 
                                    WHERE id = ".$banner->id;
        $result = $conn->query($sql);
        echo $conn->error;
        $conn->close();
    }
    
    
}