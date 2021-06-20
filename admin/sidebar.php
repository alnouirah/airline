
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><span>AireLine System</span></a>
                <a class="navbar-brand hidden" href="./"><span>AireLine System</span></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                        <h3 class="menu-title">Fly-Agencie Management</h3><!-- /.menu-title -->
                    <li>
                        <a href="add_fly.php"> <i class="menu-icon fa fa-plus-square-o"></i>Add Fly Agency</a>
                    </li>
                    
                    <li>
                        <a href="fly_agency.php"> <i class="menu-icon fa fa-plane"></i>Browse Agency</a>
                    </li>

                    <h3 class="menu-title">Manage Reservation</h3><!-- /.menu-title -->
                    <li>
                        <a href="ticket.php?status=1"> <i class="menu-icon fa fa-share"></i>Pending Reservation </a>
                    </li>
                    
                    
                    <li>
                        <a href="ticket.php?status=2"> <i class="menu-icon fa fa-check-square-o"></i>Accepted Reservation </a>
                    </li>
                    
                    <li>
                        <a href="ticket.php?status=3"> <i class="menu-icon fa  fa-ban"></i>Canceled Reservation </a>
                    </li>


                    <h3 class="menu-title">Manage Customers</h3><!-- /.menu-title -->
                    <li>
                        <a href="customer.php?status=1"> <i class="menu-icon fa fa-user"></i>Browse customers </a>
                    </li>
                    <h3 class="menu-title">Manage Schedule</h3><!-- /.menu-title -->
                    <li>
                        <a href="schedule.php"> <i class="menu-icon fa  fa-clock-o"></i>Add New Schedules </a>
                    </li>
                    <li>
                        <a href="browse_schedule.php"> <i class="menu-icon fa  fa-list"></i>Browse Schedules </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->