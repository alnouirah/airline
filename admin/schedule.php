
        <?php 
                include('header.php');
                include('../class/Schedule.php');
                $schudelObject = new Schedule();
                $countries = $schudelObject->getCoutries();
                $agencies = $schudelObject->getAgencies();
                
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header"><strong>Schedules</strong><small> Form</small></div>
                                <?php
                                    if(isset($_SESSION['message'])){
                                        ?>
                                            <div class="alert alert-success">
                                                <?php echo $_SESSION['message'] ?>
                                            </div>
                                        <?php
                                            unset($_SESSION['message']);
                                    }
                                ?>
                                <div class="card-body card-block">
                                <form action="../functions/Schedule.php" method="POST">
                                    <div class="form-group">
                                        <label for="date" class=" form-control-label">date</label>
                                        <input type="date" id="date" name="date"  class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="start_fly" class=" form-control-label">fly time</label>
                                        <input type="time" id="start_fly" name="start_fly"  class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="origin" class=" form-control-label">Origin</label>
                                        <select class="form-control" name="origin_id">
                                            <?php 
                                                foreach($countries as $country){ ?>
                                                    <option value="<?php echo $country['id'] ?>"> <?php echo $country['name'] ?> </option>;
                                                <?php 
                                                }
                                                ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="distnation" class=" form-control-label">Distnation</label>
                                        <select class="form-control" name="distnation_id">
                                        <?php 
                                                foreach($countries as $country){ ?>
                                                    <option value="<?php echo $country['id'] ?>"> <?php echo $country['name'] ?> </option>;
                                                <?php 
                                                }
                                                ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="distnation" class=" form-control-label">Flay Agency</label>
                                        <select class="form-control" name="agency_id">
                                        <?php 
                                                foreach($agencies as $agency){ ?>
                                                    <option value="<?php echo $agency['id'] ?>"> <?php echo $agency['name'] ?> </option>;
                                                <?php 
                                                }
                                                ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="maximum_passengers" class=" form-control-label">Maximum passengers</label>
                                        <input type="number" class="form-control" name="maximum_passengers" id="maximum_passengers"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="price" class=" form-control-label">Price</label>
                                        <input type="number" class="form-control" name="price"/>
                                    </div>

                                    <div class="form-group">
                                        <button value="create_Schedule" name="create_Schedule" class="btn btn-primary" style="border-radius: 4px;">Save</button>
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