<?php include "header.php"?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <form action="updateUser.php" method="post" enctype="multipart/form-data" >
        
      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="inputName">ID</label>
                <input type="text" id="inputName" value="<?php echo $_GET['id']?>" class="form-control" name="id">
              </div>
              <div class="form-group">
                <label for="inputName">Full Name</label>
                <input type="text" id="inputName" value="<?php echo $_GET['name']?>" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Địa chỉ</label>
                <input type="text" id="inputProjectLeader" value="<?php echo $_GET['diachi']?>" class="form-control" name="diachi">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Email</label>
                <input type="text" id="inputProjectLeader" value="<?php echo $_GET['email']?>" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Number Phone</label>
                <input type="text" id="inputProjectLeader" value="<?php echo$_GET['phone']?>" class="form-control" name="phone">
              </div>
              <div class="form-group">
                <label for="inputStatus">Role_id</label>
                <select class="form-control custom-select"  name="role">
                <option value="<?php echo $_GET['role']?>"><?php echo $_GET['role']?></option>
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Password</label>
                <input type="password" id="inputProjectLeader" class="form-control" name="pass">
              </div>
              </div>
             
            </div>
            <!-- /.card-body -->
          </div>
    
          <!-- /.card -->

       

      <div class="row">
        <div class="col-12">
          <input name="submit" type="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.html"; ?>