        <?php 
                include('header.php');
                include('../class/Schedule.php');
                $scheduleObject = new Schedule();
                $schedules = $scheduleObject->getAllSchedules();         
        ?>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Schedules</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Schedules</a></li>
                            <li class="active"><a href="#">Manage</a></li>
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
                                <strong class="card-title">Schedules list</strong>
                                <a href="schedule.php" class="btn btn-primary pull-right">Add Schedule</a>
                                <?php
                                    if(isset($_SESSION['message'])){
                                        ?>
                                            <div class="alert alert-success">
                                                <?php
                                                    echo $_SESSION['message'];
                                                ?>

                                            </div>
                                        <?php
                                        unset($_SESSION['message']);
                                    }
                                ?>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Fly time</th>
                                            <th>Origin</th>
                                            <th>Distnation</th>
                                            <th>Fly Agency</th>
                                            <th>Maximum passengers</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach($schedules as $schedule){
                                                ?>
                                                    <tr>
                                                        <td><?php echo $schedule['date'] ?></td>
                                                        <td><?php echo $schedule['start_fly'] ?></td>
                                                        <td><?php echo $schedule['origin_name'] ?></td>
                                                        <td><?php echo $schedule['distantion_name'] ?></td>
                                                        <td><?php echo $schedule['agency_name'] ?></td>
                                                        <td><?php echo $schedule['maximum_passengers'] ?></td>
                                                        <td><?php echo $schedule['price'] ?></td>
                                                        <td>
                                                            <a href="../functions/Schedule.php?deactivate&id=<?php  echo  $schedule['id'] ?>" class="btn btn-danger">Deactiate</a>
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