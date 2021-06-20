
        <?php 
            include('header.php');
            include('../class/Customer.php');
            $userObject = new Customer();
            $users = $userObject->getAllUsers();
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
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Manage Customer</strong>
                            </div>
                            <?php
                                if(isset($_SESSION['message'])){ ?>
                                    <div class="alert alert-success">
                                        <?php echo $_SESSION['message']; ?>
                                    </div>
                                <?php 
                                unset($_SESSION['message']);
                                }
                            ?>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>phone</th>
                                            <th>Role</th>
                                            <th>gender</th>
                                            <th>age</th>
                                            <th>address</th>
                                            <th>image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    foreach($users as $user){
                                        ?>
                                                <tr>
                                                    <td><?php echo $user['name'] ?></td>
                                                    <td><?php echo $user['email'] ?></td>
                                                    <td><?php echo $user['phone'] ?></td>
                                                    <td>
                                                        <?php if($user['role_id'] == 1){
                                                                echo 'Admin';
                                                        }else{
                                                            echo 'Customer';
                                                        } ?>
                                                    </td>
                                                    <td>
                                                        <?php if($user['gender'] == 1){
                                                                    echo 'Male';
                                                            }else{
                                                                echo 'Female';
                                                        } ?>
                                                    </td>

                                                    <td><?php echo $user['age'] ?></td>
                                                    <td><?php echo $user['address'] ?></td>
                                                    <td>image</td>
                                                    <td>
                                                    <?php if($user['status'] == 1){
                                                                    echo 'Active';
                                                            }else{
                                                                echo 'Blocked';
                                                        } ?>
                                                    </td>
                                                    <td>
                                                        <a href="../functions/Customer.php?delete&id=<?php echo $user['id']; ?>" class="btn btn-danger" style="border-radius:4px;">Delete</a>
                                                        <?php 
                                                            if($user['status'] == 1){
                                                                ?>
                                                                <a href="../functions/Customer.php?block&id=<?php echo $user['id']; ?>" class="btn btn-warning" style="border-radius:4px;margin-top:4px">Block</a>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <a href="../functions/Customer.php?Unblock&id=<?php echo $user['id']; ?>" class="btn btn-info" style="border-radius:4px;margin-top:4px">Unblock</a>
                                                            <?php
                                                                }
                                                            ?>
                                                    </td>
                                                </tr>

                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
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
