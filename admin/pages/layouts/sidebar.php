
<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="../assets/brand/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">GFP</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION['fullname'] ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">Menu</li>
                        <li class="nav-item">
                            <a href="./" class="nav-link <?php echo $_SERVER['PHP_SELF'] == '/blog/admin/pages/index.php'? 'active' : '' ?>">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    
                                    Dashboard
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item <?php echo $_SERVER['PHP_SELF'] == '/blog/admin/pages/add.php' || $_SERVER['PHP_SELF'] == '/blog/admin/pages/view.php'? 'menu-open' : 'menu-close' ?>">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    บทความ
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./view.php" class="nav-link <?php echo $_SERVER['PHP_SELF'] == '/blog/admin/pages/view.php'? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>รายการบทความ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./add.php" class="nav-link <?php echo $_SERVER['PHP_SELF'] == '/blog/admin/pages/add.php'? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>เพิ่มบทความ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item <?php echo $_SERVER['PHP_SELF'] == '/blog/admin/pages/category.php'? 'menu-open' : 'menu-close' ?>">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-list-alt "></i>
                                <p>
                                    หมวดหมู่
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="badge badge-info right">1</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./category.php" class="nav-link <?php echo $_SERVER['PHP_SELF'] == '/blog/admin/pages/category.php'? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>รายการหมวดหมู่</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="./profile.php" class="nav-link <?php echo $_SERVER['PHP_SELF'] == '/blog/admin/pages/profile.php'? 'active' : '' ?>">
                                <i class="far fa-address-card nav-icon"></i>
                                <p>
                                    โปรไฟล์
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./layouts/logout.php" class="nav-link">
                                <i class="fas fa-sign-out-alt nav-icon"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>