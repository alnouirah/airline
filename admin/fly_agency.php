
        <?php 
        include('header.php');
        include('../class/AirAgency.php');
        $Agency = new AirAgency();
        $allAgencies = $Agency->get_all();
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
                                <strong class="card-title">Fly Agencies</strong>
                                <a href="add_fly.php" class="btn btn-primary pull-right" style="border-radius: 4px;">Add new</a>
                            </div>
                            <?php
                                if(isset($_SESSION['message'])){
                                    ?>
                                        <div class="alert alert-success">
                                            <?php 
                                                echo $_SESSION['message'];
                                                unset($_SESSION['message']);
                                            ?>
                                        </div>
                                    <?php
                                }
                            ?>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>phone</th>
                                            <th>Logo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($allAgencies as $agency){ ?>
                                        <tr>
                                            <td><?php echo $agency['name'] ?></td>
                                            <td><?php echo $agency['phone'] ?></td>
                                            <td><img width="200px" height="200px" src="../<?php echo $agency['logo'] ?>"/></td>
                                            <td>
                                                <a href="../functions/AirAgency.php?delete&id=<?php echo $agency['id'] ?>" class="btn btn-danger">Delete</a>
                                                <a href="update_fly.php?update&id=<?php echo $agency['id'] ?>" class="btn btn-warning">Update</a>
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
