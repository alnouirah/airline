
        <?php 
                include('header.php');
                include('../class/Customer.php');
                $customerObject = new Customer();
                $Agency_schedules  = $customerObject->agencySchedules($_GET['id']);
                $accomdations = $customerObject->accomidation();

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

        <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Schedule</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Fly Time</th>
                                            <th>Origin</th>
                                            <th>Distnation</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach($Agency_schedules as $schedule){
                                            ?>
                                                <tr>
                                                    <td><?php echo $schedule['date'] ?> + <?php echo $schedule['id'] ?></td>
                                                    <td><?php echo $schedule['start_fly'] ?></td>
                                                    <td><?php echo $schedule['origin_name'] ?></td>
                                                    <td><?php echo $schedule['distantion_name'] ?></td>
                                                    <td><?php echo $schedule['price'] ?></td>
                                                    <td>
                                                        <button class="btn btn-primary  mb-1" style="border-radius: 4px;" type="button" data-toggle="modal" data-target="#mediumModal<?php echo $schedule['id'] ?>">Reserve</button>
                                                        <div class="modal fade" id="mediumModal<?php echo $schedule['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="mediumModalLabel">Reserve insure</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="../functions/Customer.php" method="POST">
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Chose your accomdiation : 
                                                                            <select class="form-control" style="margin-top: 6px;" name="accomidation_id">
                                                                                <?php
                                                                                    foreach($accomdations as $accomdation){
                                                                                        ?>
                                                                                            <option value="<?php echo $accomdation['id'] ?>"><?php echo $accomdation['name'] ?> + <?php echo $accomdation['price'] ?></option>
                                                                                        <?php
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        
                                                                            <input type="hidden" value="<?php echo $schedule['id']  ?>" name="schedule_id"/>
                                                                            <input type="hidden" value="<?php echo $_SESSION['user_id']  ?>" name="user_id"/>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                            <button type="submit" name="reserve" value="reserve" class="btn btn-primary">Confirm</button>
                                                                        
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
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