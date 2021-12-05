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

      <form action="update.php" method="post" enctype="multipart/form-data" >
        
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
              
              <label for="inputName">Product id</label>
              <input  type="text" id="inputName" value="<?php echo $_GET['id']?>" class="form-control" name="id" readonly>
            </div>
              <div class="form-group">
                <label for="inputName">Product Name</label>
                <input type="text" id="inputName" value="<?php echo $_GET['name']?>" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label for="inputStatus">Manufacture</label>
                <select class="form-control custom-select" name="manu">
                    <option> <?php echo $_GET['manu']?> </option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Protype</label>
                <select class="form-control custom-select" name="type">

                    

                    <option><?php echo $_GET['type']?> </option>
                    
                  
                </select>
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="desc"><?php echo $_GET['description']?></textarea>
              </div>
          
              <div class="form-group">
                <label for="inputProjectLeader">Price</label>
                <input type="text" id="inputProjectLeader"  value="<?php echo $_GET['price']?>" class="form-control" name="price">
              </div>
             
              <div class="form-group">
                <label for="inputProjectLeader">Image</label>
                <input type="file" id="inputProjectLeader" class="form-control" name="image">
              </div>
              <div class="form-group">
              <img style="width:200px" src="../img/<?php echo $_GET['img'] ?>" alt="">
              </div>
            </div>
            <div class="form-group">
          
                <label for="inputStatus">Feature</label>
                <select id="inputStatus" class="form-control custom-select" name="feature">
                  <option><?php echo ($_GET['feature']) ;?> </option>
                  <?php if($_GET['feature'] == 0){ echo " <option>1</option>";}
                  else {
                    echo " <option>0</option>";
                  }
                  ?>
                </select>
              </div>
            
              <div class="form-group">
                <?php $_GET['created_at'] ?>
                <label for="inputProjectLeader">Created_at</label>
                <input type="text" id="inputProjectLeader" value="<?php echo $_GET['created_at']?>" class="form-control" name="date">
              </div>
            <!-- /.card-body -->
          </div>
    
          <!-- /.card -->

       

      <div class="row">
        <div class="col-12">
          <input name="submit" type="submit" value="Upate Product" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.html"; ?>