<?php
require_once(dirname(__DIR__) ."/dashboard/head.php");
if (empty($_SESSION['user'])) {
    header("Location:/tech_department/index.php");
}
?>

<div>
    <!--Dashboard menu-->
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-3 primary-text fs-4 fw-bold text-uppercase border-bottom bg-transparent"><i class="fas fa-user-secret me-2"></i>Two Canoes</div>
            <div class="list-group list-group-flush my-3">
                <a href="/tech_department/view/views/employees_table.php" class="list-group-item list-group-item-action bg-transparent second-text <?php if ($page == 'employees') {
                                                                                                                                                    echo 'active';
                                                                                                                                                } ?>"><i class="fas fa-tachometer-alt me-2"></i>Employees</a>
                <a href="/tech_department/view/views/users_table.php" class="list-group-item list-group-item-action bg-transparent second-text <?php if ($page == 'users') {
                                                                                                                                                    echo 'active';
                                                                                                                                                } ?>"><i class="fas fa-tachometer-alt me-2"></i>Users</a>
            
                <!--Logout Button-->
                <!--<a href="/tech_department/view/home/logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>-->
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <!-- Nav -->
            <nav class="navbar navbar-expand-lg navbar-light  py-3 px-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <!--To show the session user-->
                                <i class="fas fa-user me-2"></i><?= $_SESSION['user'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!--Logout Button-->
                                <li><a class="dropdown-item" href="/tech_department/view/home/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>