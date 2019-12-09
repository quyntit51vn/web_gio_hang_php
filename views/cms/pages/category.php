<?php
include_once('../layout/cms-header.php');
include_once('../layout/cms-sidebar.php');
include_once('../layout/cms-topbar.php');
include_once('../../../model/category.php');
$list = category::getList();
$category_parent = category::getListParent();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800 d-sm-flex align-items-center justify-content-between mb-4">
    Tables Category
    <button data-toggle="modal" data-target="#addCategory" class="btn btn-primary btn-icon-split">
      <span class="text">Add New</span>
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addCategoryModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="POST" action="http://localhost/tiki/controller/cms/category.php" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addCategoryModal">Add Category</h5>
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
                <label for="icon">Icon</label>
                <input type="file" accept="image/*" class="form-control" id="icon" name="icon" placeholder="Enter icon">
              </div>
              <div class="form-group">
                <label for="parent_id">Parent id</label>
                <select class="form-control" id="parent_id" name="parent_id" placeholder="Enter name">
                  <option value="null">None</option>
                  <?php foreach($category_parent as $key => $value){ ?>
                  <option value="<?=$value->id?>"><?=$value->name;?></option>  
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="name">banner</label>
                <input type="file" accept="image/*" class="form-control" id="banner" name="banner" placeholder="Enter banner">
              </div>
              <div class="form-group">
                <label for="url_banner">Url banner</label>
                <input type="text" class="form-control" id="url_banner" name="url_banner" placeholder="Enter url banner">
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

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Category</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Icon</th>
              <th>Parent Id</th>
              <th>Banner</th>
              <th>Url Banner</th>
              <th width="120px">Action</th>

            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Icon</th>
              <th>Parent Id</th>
              <th>Banner</th>
              <th>Url Banner</th>
              <th width="120px">Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($list as $value) { ?>
              <tr>
                <td><?= $value->id ?></td>
                <td><?= $value->name ?></td>
                <td><img height="50px" src="<?= $value->image ?>" alt=""></td>
                <td><?= $value->parent_id ?></td>
                <td><img height="150px" src="<?= $value->banner ?>" alt=""></td>
                <td><a href="<?= $value->url_banner ?>"><?= $value->url_banner ?></a></td>
                <td>
                  <button class="btn btn-danger" onclick="confirm('aaa')?deleteCategory(<?=$value->id?>):alert('xxx')" data-id="<?=$value->id?>"><i class="fa fa-trash"></i></button>
                  <button class="btn btn-warning" onclick="editCategory(<?=$value->id?>)" data-id="<?=$value->id?>"><i class="fa fa-pencil-alt"></i></button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="editCategoryModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        
      </div>
  </div>
</div>
<!-- /.container-fluid -->

<?php
include_once('../layout/cms-footer.php');
?>
<script>
  function deleteCategory(id){
    $.post( "http://localhost/tiki/controller/cms/category.php",{id:id,action:"delete"}, function( data ) {
      // console.log(data);
      alert("delete success");
      location.reload();
    });
  }
  function editCategory(id){
    $.post( "http://localhost/tiki/controller/cms/category.php",{id:id,action:"view-edit"}, function( data ) {
    
      $("#editCategory .modal-dialog").html(data);
      $("#editCategory").modal('show');
    });
  }
  $(document).ready(function() {
    
  });
</script>
</body>

</html>