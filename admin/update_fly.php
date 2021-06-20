        <?php 
        include('header.php');
        if(!isset($_GET['id'])){
            die('<div class="alert alert-danger">You are not allowd to do this action</div>');
        }else{
            include('../class/AirAgency.php');
            $agencyObject = new AirAgency();
            $agency = $agencyObject->getAgency($_GET['id']);
        }
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
                            <div class="card">
                                <div class="card-header"><strong>Update Fly Agencies</strong><small> Form</small></div>
                                <div class="card-body card-block">
                                    <form action="../functions/AirAgency.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $agency['id'] ?>"/>
                                        <div class="form-group">
                                            <label for="name" class=" form-control-label">Name</label>
                                            <input type="text" id="name" name="name" value="<?php echo $agency['name'] ?>" placeholder="Enter Agency Name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="phone" class=" form-control-label">phone</label>
                                            <input type="text" id="phone" name="phone" value="<?php echo $agency['phone'] ?>" placeholder="774873474" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="logo" class=" form-control-label">logo</label>
                                            <input type="file" id="logo" name="logo"  class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <button type="submit" value="update" name="update" class="btn btn-primary" style="border-radius: 4px;">update</button>
                                        </div>
                                    </form>
                                </div>
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