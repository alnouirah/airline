        <!-- Header-->
        <?php 
            include('header.php');
            include('../class/Customer.php');
            $customerObject = new Customer();
            $info = $customerObject->userInfo($_SESSION['user_id']);
        ?>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="col-lg-12">
                            <form action="../functions/Customer.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $_SESSION['user_id'] ?>"/>
                                <div class="card">
                                    <div class="card-header"><strong>Profile Agencies</strong><small> Form</small></div>
                                    <?php
                                        if(isset($_SESSION['message'])){
                                                ?>
                                                    <div class="alert alert-success"><?php echo $_SESSION['message'] ?></div>
                                        <?php
                                        unset($_SESSION['message']);
                                            }
                                        ?>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="name" class=" form-control-label">Name</label>
                                            <input type="text" id="name" name="name" value="<?php echo $info['name'] ?>" placeholder="Enter Agency Name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class=" form-control-label">Email</label>
                                            <input type="email" id="email" name="email" value="<?php echo $info['email'] ?>" placeholder="a@gmail.com" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class=" form-control-label">password</label>
                                            <input type="password" id="password" value="" name="password"  class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="phone" class=" form-control-label">phone</label>
                                            <input type="number" id="phone" name="phone" value="<?php echo $info['phone'] ?>"  class="form-control">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="gender" class=" form-control-label">gender</label>
                                            <select class="form-control" name="gender">
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="age" class=" form-control-label">age</label>
                                            <input type="number" id="age" name="age" value="<?php echo $info['age'] ?>"  class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="address" class=" form-control-label">address</label>
                                            <input type="text" id="address" name="address"  value="<?php echo $info['address'] ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" value="update_profile" name="update_profile" style="border-radius: 4px;">update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form action="../functions/Customer.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $_SESSION['user_id'] ?>"/>
                                <div class="card">
                                    <div class="card-header"><strong>Profile Image</strong><small> Form</small></div>

                                    <div class="card-body card-block">

                                        <div class="form-group">
                                            <label for="image" class=" form-control-label">Image</label>
                                            <input required type="file" id="image" name="image"  class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" value="update_image" name="update_image" style="border-radius: 4px;">update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>