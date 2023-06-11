
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Pizza Etnik Toba</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">


            <li class="nav-item dropdown pe-3">
            
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="Pict/{{ $row -> foto_admin }}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ $row -> nama_admin }}</span>
                </a>

                

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ $row -> nama_admin }}</h6>
                        <span>Pemilik</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="logout.php">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ ($title === "index")? '' : 'collapsed' }}" href="/admin">
                <i class="bi bi-grid"></i>
                <span>Beranda</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link {{ ($title === "Profile")? '' : 'collapsed' }}" href="/profile">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($title === "Promosi")? '' : 'collapsed' }}" href="/promosi">
                <i class="bi bi-bar-chart-fill"></i>
                <span>Promosi</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($title === "Produk")? '' : 'collapsed' }}" href="/menu_admin">
                <i class="ri ri-cake-3-line"></i>
                <span>Menu</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($title === "Prestasi")? '' : 'collapsed' }}" href="/prestasi">
                <i class="bi bi-stars"></i>
                <span>Prestasi</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($title === "Sertifikat")? '' : 'collapsed' }}"" href="/sertifikat">
                <i class="bi bi-card-heading"></i>
                <span>Sertifikat</span>
            </a>
        </li><!-- End Sertifikat Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ ($title === "Feedback")? '' : 'collapsed' }}" href="/masukan_admin">
                <i class="bi bi-chat-square-text"></i>
                <span>Masukan</span>
            </a>
        </li><!-- End Masukan Page Nav -->



</aside><!-- End Sidebar-->

@yield('admin')
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>Pizza Etnik Toba Bakery</span></strong> 2023
    </div>
</footer><!-- End Footer -->
