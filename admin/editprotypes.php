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

      <form action="updateprotyps.php" method="post" enctype="multipart/form-data" >
        
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

            
            <div class="form-group">
              <label for="inputName">Protypes id</label>
              <input  type="text" id="inputName" value="<?php echo $_GET['id']?>" class="form-control" name="id" readonly>
            </div>
              <div class="form-group">
                <label for="inputName">Protypes name</label>
                <input type="text" id="inputName" value="<?php echo $_GET['name']?>" class="form-control" name="name">
              </div>
              <input name="submit" type="submit" value="Edit" class="btn btn-success float-right">
              </div>
             
            </div>

                </select>
              </div>
            
             
            <!-- /.card-body -->
          </div>
    
          <!-- /.card -->

       

      
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.html"; ?>