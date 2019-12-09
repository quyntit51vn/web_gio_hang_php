<?php

session_start();
include_once('../../model/db.php');
include_once('../../model/banner.php');
$target_dir = "../../upload/banner/";
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $action = $_REQUEST['action'];
  if($action == 'add'){
    
    // upload banner;
    $extension = pathinfo($_FILES["banner"]["name"], PATHINFO_EXTENSION);
    $file_name_banner = time().".".$extension;
    $target_file_banner = $target_dir . $file_name_banner;
    move_uploaded_file($_FILES["banner"]["tmp_name"], $target_file_banner);

    $url_target = 'http://localhost/tiki/upload/banner/';
    $banner = new banner(null,$url_target.$file_name_banner,$_REQUEST['url_banner']);
    banner::add($banner);
    header('Location: '.$_SERVER['HTTP_REFERER']);
  }else if($action == "delete"){
    banner::delete($_REQUEST['id']);
  }else if($action == "edit"){
    $banner = banner::getBannerById($_REQUEST['id']);
    // upload banner
    $url_target = 'http://localhost/tiki/upload/banner/';

    if(getimagesize($_FILES["banner"]["tmp_name"])){
        $extension = pathinfo($_FILES["banner"]["name"], PATHINFO_EXTENSION);
        $file_name_banner = time()."-edit.".$extension;
        $target_file_banner = $target_dir . $file_name_banner;
        move_uploaded_file($_FILES["banner"]["tmp_name"], $target_file_banner);
        $banner->banner = $url_target.$file_name_banner;
        // unlink(__DIR__."upload")
    }
  
    $banner->url_banner = $_REQUEST['url_banner'];
    // $category = new category(null,$url_target.$file_name_banner,$_REQUEST['url_banner'],$_REQUEST['name'],$url_target.$file_name_icon,$_REQUEST['parent_id']);
    banner::update($banner);
    header('Location: '.$_SERVER['HTTP_REFERER']);
  }else if($action == "view-edit"){ 
    $banner = banner::getBannerById($_REQUEST['id']);

    echo '<form method="POST" action="http://localhost/tiki/controller/cms/Banner.php" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addBannerModal">Add Banner</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="id" value="'.$_REQUEST['id'].'">
        <div class="form-group">
            <label for="name">banner</label>
            <input type="file" accept="image/*" class="form-control" id="banner" name="banner" placeholder="Enter banner">
            <img src="'.$banner->banner.'" height="100px">  
        </div>
          <div class="form-group">
            <label for="url_banner">Url banner</label>
            <input type="text" value="'.$banner->price.'"  class="form-control" id="url_banner" name="url_banner" placeholder="Enter url banner">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </form>';
  }


}
?>