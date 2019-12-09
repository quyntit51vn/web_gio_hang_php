<?php

session_start();
include_once('../../model/db.php');
include_once('../../model/product.php');
include_once('../../model/image.php');
include_once('../../model/category.php');
$target_dir = "../../upload/product/";
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $action = $_REQUEST['action'];
  if($action == 'add'){
    // upload icon
    // $extension = pathinfo($_FILES["icon"]["name"], PATHINFO_EXTENSION);
    // $file_name_icon = time().".".$extension;
    // $target_file_icon = $target_dir . $file_name_icon;
    // move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file_icon);
    // // upload banner;
    $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    $file_name_image = time().".".$extension;
    $target_file_image = $target_dir . $file_name_image;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file_image);

    $url_target = 'http://localhost/tiki/upload/product/';
    $product = new product(null,$_REQUEST['name'],$_REQUEST['price'],$_REQUEST['description'],$_REQUEST['deal'],null,$_REQUEST['category_id']);
    $product = product::add($product);
    image::add(new image(null,$product->id,$url_target.$file_name_image));
    header('Location: '.$_SERVER['HTTP_REFERER']);
  }else if($action == "delete"){
    product::delete($_REQUEST['id']);
  }else if($action == "edit"){
    $product = product::getproductById($_REQUEST['id']);
    // upload icon
    $url_target = 'http://localhost/tiki/upload/product/';

    // if(getimagesize($_FILES["icon"]["tmp_name"])){
    //     $extension = pathinfo($_FILES["icon"]["name"], PATHINFO_EXTENSION);
    //     $file_name_icon = time()."-edit.".$extension;
    //     $target_file_icon = $target_dir . $file_name_icon;
    //     move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file_icon);
    //     $product->image = $url_target.$file_name_icon;
    //     // unlink(__DIR__."upload")
    // }
    
    // // upload banner;
    if(getimagesize($_FILES["image"]["tmp_name"])){
      $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
      $file_name_image = time().".".$extension;
      $target_file_image = $target_dir . $file_name_image;
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file_image);
      image::add(new image(null,$product->id,$url_target.$file_name_image));

    }
    $product->name = $_REQUEST['name'];
    $product->price = $_REQUEST['price'];
    $product->description = $_REQUEST['description'];
    $product->category_id = $_REQUEST['category_id'];
    $product->deal = $_REQUEST['deal'];
    product::update($product);
    header('Location: '.$_SERVER['HTTP_REFERER']);
  }else if($action == "view-edit"){ 
    $product = product::getProductById($_REQUEST['id']);
    $category = category::getList();
    $select_category_id = "" ;
    
    foreach($category as $key => $value){ 
        $selected = $value->id == $product->id?"selected":"";
        $select_category_id .= '<option '.$selected.' value="'.$value->id.'">'.$value->name.' </option> ' ;
    }
    echo '<form method="POST" action="http://localhost/tiki/controller/cms/product.php" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addProductModal">Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="'.$_REQUEST['id'].'">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="'.$product->name.'" id="name" name="name" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="price">price</label>
            <input type="number" class="form-control" value="'.$product->price.'" id="price" name="price" placeholder="Enter price">
          </div>
          <div class="form-group">
            <label for="image">images</label>
            <input type="file" class="form-control"  accept="image/*" id="image" name="image" placeholder="Enter image">
            <img src="'.$product->images[0].'">
          </div>
          <div class="form-group">
            <label for="category">category</label>
            <select class="form-control" id="category" name="category_id" placeholder="Enter name">
            '.$select_category_id.'
            </select>
          </div>
          <div class="form-group">
            <label for="deal">deal</label>
            <input type="number" value="'.$product->price.'" class="form-control" id="deal" name="deal" placeholder="Enter deal">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea id="editor2" class="form-control"  name="description" cols="80" rows="10">
              '.$product->description.'
            </textarea>
            <script>
            CKEDITOR.replace( "editor2" );
            </script>
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