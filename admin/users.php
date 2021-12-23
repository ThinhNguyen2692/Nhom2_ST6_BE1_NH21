<?php include "header.php";
if(isset($_GET['err'])){ alert("Lỗi");
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
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
          <h3 class="card-title">User</h3>
          <br>
          <a class="btn btn-info btn-sm" href="adduser.php">
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
                      <th style="width: 30%">
                      Address
                      </th>
                      <th >
                          Email
                      </th>
                      <th style="width: 8%" class="text-center">
                          Number phone
                      </th>
                      <th style="width: 20%"  class="text-center">
                      role_id
                      </th>
                       <th style="width: 20%"  class="text-center">
                       password
                      </th>
                      <th style="width: 20%" class="text-center">
                       action
                      </th>
                  </tr>
              </thead>
              <tbody>
                 
                  <?php 
                   $getAlluser = $user->getAllUsers();
                  foreach($getAlluser as $value):?>
                  <tr>
                      <td>
                          <?php echo $value['id'] ?>
                      </td>
                      <td>
                      <?php echo $value['Name'] ?>
                      </td>
                      <td>
                      <?php echo $value['Diachi'] ?>
                      <td>
                      <?php echo $value['email']?>
                      </td>
                      <td class="project_progress">
                      <?php echo $value['sodienthoai']?>
                      </td>
                      <td class="project-state">
                      <?php echo $value['role_id'] ?>
                      </td>
                      <td class="project-state">
                      <?php echo $value['password'] ?>
                      </td>
                      <td class="project-actions text-center" >
                          <a class="btn btn-info btn-sm" href="editUser.php?id=<?php echo $value['id']?>&name=<?php echo $value['Name']?>&diachi=<?php echo $value['Diachi']?>&email=<?php echo $value['email'] ?>&phone=<?php echo$value['sodienthoai']?>&role=<?php echo $value['role_id'] ?>&pass=<?php echo $value['password'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <?php 
                            if($value['role_id'] == 0){?>
                             <a class="btn btn-danger btn-sm" href="delUser.php?id=<?php echo $value['id']?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                            
                            <?php
                              
                            }
                          ?>
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