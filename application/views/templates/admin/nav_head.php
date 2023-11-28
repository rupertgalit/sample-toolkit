<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item position-relative">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ol class="breadcrumb float-sm-right" hidden>
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item" hidden>
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item dropdown profile-dropdown d-flex justify-content-center align-items-center">
            <a href="#" class="d-flex flex-inline align-items-center py-2 px-3" data-toggle="dropdown" clickable>
                <?php echo $this->session->userdata('Name'); ?>
                <i class="fa fa-chevron-left ml-2"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-xl dropdown-menu-right">

                <!-- User image -->
                <li class="user-header bg-dark py-5 d-flex justify-content-center align-items-center flex-column">
                    <backdrop></backdrop>
                    <!-- <img class="header-background w-25" src="<?php echo base_url('assets/img/newlogo.png'); ?>"
                        class="user-image img-circle elevation-2" alt="usere"> -->
                        <i class="nav-icon fas fa-user" style="font-size:5rem;"></i>
                    <p class="d-flex flex-column align-items-center">
                        <?php echo $this->session->userdata('Name'); ?>
                        <small>
                            <?php echo $this->session->userdata('Department'); ?>
                        </small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="<?php echo site_url('changepass'); ?>" class="btn btn-default btn-flat">Change
                        Password</a>
                    <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-default btn-flat float-right">Sign
                        out</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>