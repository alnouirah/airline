
        <?php require('header.php'); ?>

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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-lg-4 col-md-6">
                <a href="hi">
                    <div class="social-box facebook">
                        <i class="fa fa fa-share"></i>
                        <ul>
                            <li>
                                <span>Pending reversation</span>
                                <!-- <span>40</span> -->
                            </li>
                            <li class="text-center">
                                <!-- <span>Pending reversation</span> -->
                                <span class="count">40</span>
                            </li>
                        </ul>
                    </div>
                </a>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="social-box google-plus">
                        <i class="fa fa-ban"></i>
                        <ul>
                            <li>
                                <span>Pending reversation</span>
                                <!-- <span>40</span> -->
                            </li>
                            <li class="text-center">
                                <!-- <span>Pending reversation</span> -->
                                <span class="count">40</span>
                            </li>
                        </ul>
                    </div>
                </a>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-4 col-md-6">
                <a href="">
                    <div class="social-box linkedin">
                        <i class="fa fa-linkedin" style="background: #28a745;"></i>
                        <ul>
                            <li>
                                <span>Accepted reversation</span>
                                <!-- <span>40</span> -->
                            </li>
                            <li class="text-center">
                                <!-- <span>Pending reversation</span> -->
                                <span class="count">40</span>
                            </li>
                        </ul>
                    </div>
                </a>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="social-box google-plus">
                        <i class="fa fa-plane" style="background: #5da3df;"></i>
                        <ul>
                            <li>
                                <span>Fly Agency</span>
                                <!-- <span>40</span> -->
                            </li>
                            <li class="text-center">
                                <!-- <span>Pending reversation</span> -->
                                <span class="count">4</span>
                            </li>
                        </ul>
                    </div>
                </a>
                <!--/social-box-->
            </div>


            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="social-box google-plus">
                        <i class="fa fa-users" style="background: #514b4a;"></i>
                        <ul>
                            <li>
                                <span>Customers</span>
                                <!-- <span>40</span> -->
                            </li>
                            <li class="text-center">
                                <!-- <span>Pending reversation</span> -->
                                <span class="count">30</span>
                            </li>
                        </ul>
                    </div>
                </a>
                <!--/social-box-->
            </div>


            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="social-box google-plus">
                        <i class="fa fa-ban"></i>
                        <ul>
                            <li>
                                <span>Customers</span>
                                <!-- <span>40</span> -->
                            </li>
                            <li class="text-center">
                                <!-- <span>Pending reversation</span> -->
                                <span class="count">30</span>
                            </li>
                        </ul>
                    </div>
                </a>
                <!--/social-box-->
            </div>
            <!--/.col-->
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
