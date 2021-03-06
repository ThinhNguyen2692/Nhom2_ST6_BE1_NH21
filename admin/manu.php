<?php include "header.php"; 
if(isset($_GET['err'])){ 
  if($_GET['err'] == "false"){ alert("Không thể xóa");
  }
  if($_GET['err'] == "true"){ alert("Lỗi");
  }
}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manufactures</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manufactures</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Manufactures</h3>
          <br>
          <a class="btn btn-info btn-sm" href="addManu.php">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Add
                          </a>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 20%">
                        Full Name
                      </th>
                      <th style="width: 20%" class="text-center">
                       Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                 
                  <?php 
                  foreach($getAllManu as $value):?>
                  <tr>
                      <td>
                          <?php echo $value['manu_id'] ?>
                      </td>
                      <td>
                      <?php echo $value['manu_name'] ?>
                      </td>
                    
                      <td class="project-actions text-center" >
                          <a class="btn btn-info btn-sm" href="editmanu.php?id=<?php echo $value['manu_id']?>&name=<?php echo $value['manu_name'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="delmanu.php?id=<?php echo $value['manu_id']?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.html"?>