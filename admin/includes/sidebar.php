<!-- Sidebar start -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="index.php">
            <img src="../assets/images/logo.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white <?php echo ($active_page == 'dashboard') ? 'active bg-gradient-primary' : ''; ?>" href="index.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo ($active_page == 'pages') ? 'active bg-gradient-primary' : ''; ?>" href="pages.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">article</i>
                    </div>
                    <span class="nav-link-text ms-1">Pages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo ($active_page == 'blogs') ? 'active bg-gradient-primary' : ''; ?>" href="manage-blogs.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">feed</i>
                    </div>
                    <span class="nav-link-text ms-1">Blog Posts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo ($active_page == 'faqs') ? 'active bg-gradient-primary' : ''; ?>" href="manage-faqs.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">question_answer</i>
                    </div>
                    <span class="nav-link-text ms-1">FAQs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo ($active_page == 'testimonials') ? 'active bg-gradient-primary' : ''; ?>" href="manage-testimonials.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">format_quote</i>
                    </div>
                    <span class="nav-link-text ms-1">Testimonials</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo ($active_page == 'inquiries') ? 'active bg-gradient-primary' : ''; ?>" href="inquiries.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">contact_mail</i>
                    </div>
                    <span class="nav-link-text ms-1">Inquiries</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo ($active_page == 'settings') ? 'active bg-gradient-primary' : ''; ?>" href="settings.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">settings</i>
                    </div>
                    <span class="nav-link-text ms-1">Settings</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo ($active_page == 'profile') ? 'active bg-gradient-primary' : ''; ?>" href="profile.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="logout.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">logout</i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- Sidebar end --> 