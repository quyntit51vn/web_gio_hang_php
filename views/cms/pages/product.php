<?php
include_once('../layout/cms-header.php');
include_once('../layout/cms-sidebar.php');
include_once('../layout/cms-topbar.php');
include_once('../../../model/product.php');
include_once('../../../model/category.php');
$list = product::getList();
$category = category::getList();
?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800 d-sm-flex align-items-center justify-content-between mb-4">
    Tables Product
    <button data-toggle="modal" data-target="#addProduct" class="btn btn-primary btn-icon-split">
      <span class="text">Add New</span>
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="POST" action="http://localhost/tiki/controller/cms/product.php" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addProductModal">Add Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="action" value="add">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="price">price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
              </div>
              <div class="form-group">
                <label for="image">images</label>
                <input type="file" class="form-control" accept="image/*" id="image" name="image" placeholder="Enter image">
              </div>
              <div class="form-group">
                <label for="category">category</label>
                <select class="form-control" id="category" name="category_id" placeholder="Enter name">
                  <?php foreach ($category as $key => $value) { ?>
                    <option value="<?= $value->id ?>"><?= $value->name; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="deal">deal</label>
                <input type="number" class="form-control" id="deal" name="deal" placeholder="Enter deal">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea id="editor1" class="form-control"  name="description" cols="80" rows="10">
                    
                </textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </h1>
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Product</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Images</th>
              <th>Price</th>
              <th>Description</th>
              <th>Deal</th>
              <th>Category id</th>
              <th width="120px">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Images</th>
              <th>Price</th>
              <th>Description</th>
              <th>Deal</th>
              <th>Category id</th>
              <th width="120px">Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($list as $value) { ?>
              <tr>
                <td><?= $value->id ?></td>
                <td><?= $value->name ?></td>
                <td><img height="100px" src="<?= $value->images[0] ?>" alt=""></td>
                <td><?= $value->price ?></td>
                <td><?= $value->description ?></td>
                <td><?= $value->deal ?></td>
                <td><?= $value->category_id ?></td>
                <td>
                  <button class="btn btn-danger" onclick="confirm('aaa')?deleteProduct(<?=$value->id?>):alert('xxx')" data-id="<?=$value->id?>"><i class="fa fa-trash"></i></button>
                  <button class="btn btn-warning" onclick="editProduct(<?=$value->id?>)" data-id="<?=$value->id?>"><i class="fa fa-pencil-alt"></i></button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="editProductModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        
      </div>
  </div>
</div>
<!-- /.container-fluid -->

<?php
include_once('../layout/cms-footer.php');
?>
<script>
  function deleteProduct(id){
    $.post( "http://localhost/tiki/controller/cms/product.php",{id:id,action:"delete"}, function( data ) {
      // console.log(data);
      alert("delete success");
      location.reload();
    });
  }
  function editProduct(id){
    $.post( "http://localhost/tiki/controller/cms/product.php",{id:id,action:"view-edit"}, function( data ) {
    
      $("#editProduct .modal-dialog").html(data);
      $("#editProduct").modal('show');
    });
  }
  $(document).ready(function() {
    console.log("asdasdasd");
  });
 CKEDITOR.replace( 'editor1' );

</script>

</body>

</html>