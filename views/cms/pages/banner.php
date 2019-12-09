<?php 
    include_once('../layout/cms-header.php');
    include_once('../layout/cms-sidebar.php');
    include_once('../layout/cms-topbar.php');
    include_once('../../../model/banner.php');
    $list = banner::getList();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 d-sm-flex align-items-center justify-content-between mb-4">
    Tables Banner
    <button data-toggle="modal" data-target="#addBanner" class="btn btn-primary btn-icon-split">
      <span class="text">Add New</span>
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addBanner" tabindex="-1" role="dialog" aria-labelledby="addBannerModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="POST" action="http://localhost/tiki/controller/cms/Banner.php" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addBannerModal">Add Banner</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="action" value="add">
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
    <h6 class="m-0 font-weight-bold text-primary">DataTables Banner</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Banner</th>
            <th>Url Banner</th>
            <th width="120px">Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>Id</th>
            <th>Banner</th>
            <th>Url Banner</th>
            <th width="120px">Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach($list as $value){ ?>
          <tr>
            <td><?=$value->id?></td>
            <td class="text-center"><img src="<?=$value->banner?>" height="150px" alt=""></td>
            <td><a href="<?=$value->url_banner?>"></a></td>
            <td>
              <button class="btn btn-danger" onclick="confirm('aaa')?deleteBanner(<?=$value->id?>):alert('xxx')" data-id="<?=$value->id?>"><i class="fa fa-trash"></i></button>
              <button class="btn btn-warning" onclick="editBanner(<?=$value->id?>)" data-id="<?=$value->id?>"><i class="fa fa-pencil-alt"></i></button>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="modal fade" id="editBanner" tabindex="-1" role="dialog" aria-labelledby="editBannerModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        
      </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php 
    include_once('../layout/cms-footer.php');
?>
<script>
  function deleteBanner(id){
    $.post( "http://localhost/tiki/controller/cms/banner.php",{id:id,action:"delete"}, function( data ) {
      // console.log(data);
      alert("delete success");
      location.reload();
    });
  }
  function editBanner(id){
    $.post( "http://localhost/tiki/controller/cms/banner.php",{id:id,action:"view-edit"}, function( data ) {
    
      $("#editBanner .modal-dialog").html(data);
      $("#editBanner").modal('show');
    });
  }
    $(document).ready(function(){
        console.log("asdasdasd");
    });
</script>
</body>

</html>