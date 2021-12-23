<?php
include "header.php";

?>

<body>

    </header>
    <!--/header-->
    <section>
        <section id="cart_items">
            <div class="container">
                <H3><b>Update information</b></H3>
                <div class="table-responsive cart_info">
                   
                    <?php
                    if (isset($_SESSION['Name'])) {
                    ?>
                        
                        </td>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="update.php">
                            <div class="form-group col-md-6">
                                Full name
                                <input type="text" name="Name" class="form-control" value="<?php echo $_SESSION['Name'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                Email
                                <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email'] ?>">
                            </div>
                            <div class="form-group col-md-12">
                                Phone
                                <input type="text" name="sodienthoai" class="form-control" value="<?php echo $_SESSION['sdt'] ?>">
                            </div>
                            <div class="form-group col-md-12">
                                Address
                                <textarea name="Diachi" id="address" class="form-control" rows="2"><?php echo $_SESSION['diachi'] ?></textarea>
                            </div>
                            
                        <?php
                    } 
                        ?>
                            
                            <td>

                                <style>
                                    .btn-default {
                                        background-color: #D10024;
                                        color: #fff;
                                        font-weight: bold;
                                    }

                                    .btn-default:hover {
                                        background-color: #fff;
                                        color: red;
                                        font-weight: bold;
                                    }
                                </style>

                                <div class="form-group col-md-12">
                                    <a class="btn btn-default update" href="index.php">Back</a>
                                    
                                    <!-- btn-primary // viền màu blue-->
                                   
                                     <input type="submit" name="submit" class="btn pull-right btn-default" value="update">
                                </div>
                            </form>
                </div>
            </div>
        </section>
        <!--/#cart_items-->
        <!--features_items-->
        </div>
        </div>
    </section>
    <?php
    include "footer.html"
    ?>