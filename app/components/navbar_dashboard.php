<!-- Navbar dashboard component -->
<nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo BASE_URL . "app/admin/dashboard.php" ?>">
        <div class="d-flex align-items-center">
            <img src="https://svgur.com/i/Hr_.svg" alt="logo blog" style="height: 45px" />
            <h5 style="font-weight: bold; margin-left: 10px; color: white" class="mt-2">Creative Blog</h5>
        </div>
    </a>
    <ul class="navbar-nav">
        <div class="d-flex align-items-center">
            <?php if (isset($_SESSION["user_name"])): ?>
            <li class="nav-item text-nowrap mr-3">
                <a href="<?php echo BASE_URL ?>">
                    <button class="btn" href="#" style="font-weight: bold; color: #006cff">
                        <i class='uil uil-document-layout-left'></i>Blog
                    </button>
                </a>
            </li>
            <li class="nav-item text-nowrap mr-3">
                <button class="btn" style="font-weight: bold; color: #010116">
                    <i class='uil uil-user-circle'></i><?php echo $_SESSION['user_name']; ?>
                </button>
            </li>
            <li class="nav-item text-nowrap mr-3">
                <a href="<?php echo BASE_URL . 'logout.php' ?>">
                    <button class="btn" style="font-weight: bold; color: #e53935">
                        <i class='uil uil-sign-out-alt'></i>Log out
                    </button>
                </a>
            </li>
            <?php endif; ?>
        </div>
    </ul>
</nav>
<nav class="col-md-2 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column mt-3">
            <li class="nav-item">
                <a class="nav-link btn text-left" href="<?php echo BASE_URL . "app/admin/dashboard.php" ?>"
                    style="font-weight: bold"><i class='uil uil-apps mr-2'></i>Dashboard</a>
            </li>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link btn text-left" href="<?php echo BASE_URL . "app/admin/posts/posts.php" ?>"
                    style="font-weight: bold"><i class="uil uil-edit mr-2"></i>Post section</a>
            </li>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link btn text-left" href="<?php echo BASE_URL . "app/admin/users/users.php" ?>"
                    style="font-weight: bold"><i class="uil uil-user-circle mr-2"></i>Users section</a>
            </li>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link btn text-left" href="<?php echo BASE_URL . "app/admin/categories/categories.php" ?>"
                    style="font-weight: bold">
                    <i class="uil uil-document-layout-left mr-2"></i>
                    Categories
                    section
                </a>
            </li>
        </ul>
    </div>
</nav>