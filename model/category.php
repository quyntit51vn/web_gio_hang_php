<?php

// require 'db.php';

class category {

    var $id;
    var $banner; // ảnh banner
    var $url_banner; // đường dẫn url cua banner khi click vao
    var $name; // tên của category
    var $image; // icon của category
    var $parent_id; // id cha của cateogry
    
    public function __construct($id,$banner,$url_banner,$name,$image,$parent_id)
    {
        $this->id = $id;
        $this->banner = $banner;
        $this->url_banner = $url_banner;
        $this->name = $name;
        $this->image = $image;
        $this->parent_id = $parent_id;
    }

    static function getList(){
        $conn = db::connect();
        // print_r($conn);
        //Buoc 2: Thao tac voi CSDL: CRUD
        $sql = "SELECT * From categories ";
        $result = $conn->query($sql);
        $ls = [];
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $danhba = new category($row['id'],$row['banner'],$row['url_banner'],$row['name'],$row['image'],$row['parent_id']);
                $ls[] = $danhba;
            }
        }    
        //Buoc 3: Dong ket noi
        $conn->close();
        return $ls;
    }

    static function getListParent(){
        $ls = category::getList();
        $res = [];
        foreach($ls as $category){
            if($category->parent_id == null)
                $res[] = $category;
        }
        return $res;
    }
    static function getListChild($parent_id){
        $ls = category::getList();
        $res = [];
        foreach($ls as $category){
            if($category->parent_id == $parent_id)
                $res[] = $category;
        }
        return $res;
    }

    static function getCategoryById($id){
        $ls = category::getList();
        foreach($ls as $category){
            if($category->id == $id)
                return $category;
        }
        return null;
    }

    static function add($category){
        $conn = db::connect();
        
        $sql = "INSERT INTO `categories` (`banner`, `url_banner`, `name`,`image`,`parent_id`) 
                VALUES ('".$category->banner."','".$category->url_banner."','".$category->name."','".$category->image."','".$category->parent_id."')";
        $result = $conn->query($sql);
        echo $conn->error;
        $conn->close();
    }

    static function deleteFromDB($id){
        $conn = db::connect();
        $sql = "DELETE FROM `categories` WHERE `id` = ".$id;
        $result = $conn->query($sql);
        echo $conn->error;
        $conn->close();
    }


    // static function updateFromDB($danhba){
    //     $conn = db::connect();
        
    //     $sql = "UPDATE `danhba` SET `ten`= '".$danhba->ten."', 
    //                                 `email` = '".$danhba->email."', 
    //                                 `sodienthoai`='".$danhba->sodienthoai."'
    //                                 WHERE id = ".$danhba->id;
    //     $result = $conn->query($sql);
    //     echo $conn->error;
    //     $conn->close();
    // }
}