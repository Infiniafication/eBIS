<div class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner pull-center">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <div class="nav-center">
                <div class="span11">
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li <?php if(current_url() == (base_url() . 'index.php')) { echo 'class="active"'; } ?> >
                                <a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li <?php if(current_url() == base_url() . 'index.php/about_us') { echo 'class="active"'; } ?> >
                                <a href="<?php echo base_url() . 'index.php/about_us'; ?>">About Us</a>
                            </li>
                            <li class="dropdown <?php if(current_url() == base_url() . 'index.php/services') { echo ' active'; } ?>">
                                <a href="<?php echo base_url() . 'index.php/services'; ?>" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                                    Our Services
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() . 'index.php/services'; ?>">Our Services</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url() . 'index.php/services#workshop'; ?>">Workshop</a></li>
                                    <li><a href="<?php echo base_url() . 'index.php/services#conference'; ?>">Conference</a></li>
                                </ul>
                            </li>
                            <li <?php if(current_url() == base_url() . 'index.php/clients') { echo 'class="active"'; } ?> >
                                <a href="<?php echo base_url() . 'index.php/clients'; ?>">Our Clients</a>
                            </li>
                            <li <?php if(current_url() == base_url() . 'index.php/trainers') { echo 'class="active"'; } ?> >
                                <a href="<?php echo base_url() . 'index.php/trainers'; ?>">Our Trainers</a>
                            </li>
                            <li class="dropdown <?php if(current_url() == base_url() . 'index.php/career') { echo ' active'; } ?> ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Career
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() . 'index.php/career'; ?>">Career</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url() . 'index.php/career#career'; ?>">Career with EBIS</a></li>
                                    <li><a href="<?php echo base_url() . 'index.php/career#vacancy'; ?>">Current Vacancy</a></li>
                                </ul>
                            </li>
                            <li <?php if(current_url() == base_url() . 'index.php/contact_us') { echo 'class="active"'; } ?> >
                                <a href="<?php echo base_url() . 'index.php/contact_us'; ?>">Contact Us</a>
                            </li>
                        </ul>
                    </div>  <!--/.nav-collapse -->
                </div>
            </div>
        </div>  <!-- /.navbar-inner -->
    </div>  <!-- /.navbar -->
</div><!-- /.navbar-wrapper -->

