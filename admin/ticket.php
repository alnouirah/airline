
        <?php 
            include('header.php');
            include('../class/Admin.php');
            $adminObject = new Admin();
            $tickets = $adminObject->tickits($_GET['status']);
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
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Date</th>
                                            <th>Start fly</th>
                                            <th>Origin</th>
                                            <th>Distnation</th>
                                            <th>Total Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach($tickets as $ticket){
                                            ?>
                                        <tr>
                                            <td><?php echo $ticket['user_name'] ?></td>
                                            <td><?php echo $ticket['email'] ?></td>
                                            <td><?php echo $ticket['phone'] ?></td>
                                            <td><?php echo $ticket['date'] ?></td>
                                            <td><?php echo $ticket['start_fly'] ?></td>
                                            <td><?php echo $ticket['origin_name'] ?></td>
                                            <td><?php echo $ticket['distnation_name'] ?></td>
                                            <td><?php echo $ticket['total_price'] ?></td>
                                            <td>
                                                <?php
                                                    if($ticket['status'] == 1 ){
                                                            ?>
                                                        <a href="../functions/Admin.php?change_status&id=<?php echo $ticket['id'] ?>&status=<?php echo $_GET['status'] ?>&state=2" class="btn btn-success" style="border-radius: 4px;">Accept</a>
                                                        <a href="../functions/Admin.php?change_status&id=<?php echo $ticket['id'] ?>&status=<?php echo $_GET['status'] ?>&state=3" class="btn btn-danger" style="border-radius: 4px;margin-top:4px">Cancel</a>
                                                    <?php 

                                                }else{
                                                    echo 'No Action Required';
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
