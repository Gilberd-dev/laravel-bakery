<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top text-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="padding-left:35px;"><img src="../pict/PET.png" style="width: 42px; "></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Beranda")? 'active' : '' }}" aria-current="page" href="/">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Menu")? 'active' : '' }}" aria-current="page" href="/menu">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Tentang")? 'active' : '' }}" aria-current="page" href="/tentang">TENTANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a{{ ($title === "Masukan")? 'active' : '' }}" aria-current="page" href="/masukan">MASUKAN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- body -->
    @yield('container2')
    <!-- footer -->
    <!-- <footer class="footer footer-section">
    <div class="container">
        <div class="row">
            <div class="footer-col col-lg-2">
                <img src="../pict/PET.png" style="width: 180px;">
            </div>
            <div class="footer-col col-lg-3">
                <h4>Find Us</h4>
                <ul>
                    <li><a href="#"> <img src="../pict/facebook.png" style="width: 20px;"> Pizza Etnik Toba</a></li>
                    <li><a href="#"> <img src="../pict/instagram.png" style="width: 20px;"> Pizza Etnik Toba</a>
                    </li>
                    <li><a href="#"> <img src="../pict/whatsapp.png" style="width:20px;"> +62 813-7508-9145</a></li>
                </ul>
            </div>
            <div class="footer-col col-lg-3">
                <h4>Location</h4>
                <ul>
                    <li><a href="#"> <img src="../pict/gps.png" style="width: 20px;"> Jalan Sisingamangaraja 186
                            22312
                            Balige </a></li>
                    <li><a href="#"> <img src="../Pict/clock.png" style="width:20px;"> Jam Operasi : <br> <br>
                            Setiap
                            Hari <br> 08.00 AM - 22.00 PM</a></li>
                </ul>
            </div>

        </div>
    </div>

    <center>
        <p style="margin: 0; padding: 0;">Copyright © Pizza Etnik Toba 2023</p>
    </center>
</footer> -->