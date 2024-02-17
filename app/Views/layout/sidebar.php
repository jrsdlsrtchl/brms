        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="  fa fa-medkit"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BRMS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php //if($_SESSION['aid']):
            ?>

            <li class="nav-item <?= (current_url() == base_url('dashboardcontroller/dashboard')) ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>dashboardcontroller/dashboard">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa-solid fa-clipboard-user"></i>
                    <span>Officials & Staff</span></a>
            </li>

            <li class="nav-item <?= (current_url() == base_url('residentcontroller/viewresident')) ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>residentcontroller/viewresident">
                    <i class="fa-solid fa-users"></i>
                    <span>Residents</span></a>
            </li>
            <li class="nav-item <?= (current_url() == base_url('purokcontroller/puroklist')) ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>purokcontroller/puroklist">
                    <i class="fa-solid fa-warehouse"></i>
                    <span>Purok</span></a>
            </li>
            <li class="nav-item <?= (current_url() == base_url('householdcontroller/householdlist')) ? 'active' : ''; ?> ">
                <a class="nav-link" href="<?= base_url(); ?>householdcontroller/householdlist">
                    <i class="fa-solid fa-house-flag"></i>
                    <span>Household</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa-solid fa-newspaper"></i>
                    <span>Barangay Certificates</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa-solid fa-hand-holding-hand"></i>
                    <span>Assistance</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa-solid fa-scroll"></i>
                    <span>Generate Report</span></a>
            </li>



            <?php //else:    
            ?>

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>
            <hr class="sidebar-divider">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="registration.php">
                    <i class="fas fa-users"></i>
                    <span>Signup/ Registration</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="login.php">
                    <i class="fas fa-users"></i>
                    <span>Login</span></a>
            </li>



            <?php //endif;    
            ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->