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
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="updatePass.php">
                            <div class="form-group col-md-12">
                            A new password 1
                                <input type="text" name="pass" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                            A new password 2
                                <input type="text" name="pass1" class="form-control">
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