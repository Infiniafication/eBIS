<div class="navbar-wrapper">
    <div class="navbar">
        <div class="navbar-inner">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <div class="nav-center">
                <div class="span1">
                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url() . 'img/logo.png' ?>" alt="logo" class="logo"></a>
                </div>

                <div class="span10">
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li <?php if(current_url() == (base_url() . 'index.php')) { echo 'class="active"'; } ?> >
                                <a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="<?php echo base_url() . 'services.php'; ?>" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                                    Our Services
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() . 'services.php#workshop'; ?>">Workshop</a></li>
                                    <li><a href="<?php echo base_url() . 'services.php#conference'; ?>">Conference</a></li>
                                </ul>
                            </li>
                            <li <?php if(current_url() == base_url()) { echo 'class="active"'; } ?> >
                                <a href="#">Our Clients</a>
                            </li>
                            <li <?php if(current_url() == base_url()) { echo 'class="active"'; } ?> >
                                <a href="#">Our Trainers</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Career
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Career with EBIS</a></li>
                                    <li><a href="#">Current Vacancy</a></li>
                                </ul>
                            </li>
                            <li <?php if(current_url() == base_url()) { echo 'class="active"'; } ?> >
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>  <!--/.nav-collapse -->
                </div>
            </div>
        </div>  <!-- /.navbar-inner -->
    </div>  <!-- /.navbar -->
</div><!-- /.navbar-wrapper -->

