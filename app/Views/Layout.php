<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Belanja KUY</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?php echo base_url('template')?>/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <style>
    body {
        background: linear-gradient(to bottom, #000000, #2c2c2c); 
    }
       
    .bg-orange {
    background-color: #FFA500; 
    }
    .bg-orange-nav {
        /* background-color: rgba(255, 165, 0, 0.8); */
        background-color: rgba(0, 0, 0, 0.7);
    }
    
    .btn-orange{
        background-color: #FFA500; 
    }
    
    .bg-orange-di {
    background: linear-gradient(to top, #FFA500, #000000);
    
    }
    main.bg-abu {
    background: linear-gradient(to bottom, #000000, #2c2c2c); 
    }
    .carousel-item img {
    border-radius: 10px;    
    object-fit: cover; /* Agar gambar mengisi area secara proporsional */
    object-position: center; /* Agar gambar terpusat secara vertikal dan horizontal */
    width: 50%; /* Agar gambar memenuhi lebar carousel */
    height: 50%; /* Agar gambar memenuhi tinggi carousel */
    
    }
    .carousel-inner {
    box-shadow: 0 4px 15px rgba(255, 215, 0, 0.8); 
    border-radius: 10px;      
    width: 100%; /* Menyesuaikan lebar carousel dengan lebar kontainer */
    height: 500px; /* Tentukan tinggi yang tetap agar gambar memiliki ukuran yang seragam */
    }
    /* Menjamin gambar memiliki ukuran yang konsisten */
    .card-img-top {
        width: 100%; /* Memastikan gambar memenuhi lebar card */
        height: 200px; /* Atur tinggi gambar agar semua gambar memiliki tinggi yang sama */
        object-fit: cover; /* Memastikan gambar tetap proporsional dan terpotong jika perlu */
    }

    /* Menjaga keseragaman ukuran card */
    .card {
        display: flex;
        flex-direction: column;
        height: 100%; /* Agar card mengambil tinggi penuh kolom */
    }

    /* Menjaga isi card tetap teratur */
    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex-grow: 1;
    }
    .navbar-brand {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 110%; /* Agar video memenuhi tinggi navbar */
    
    }

    .logo-video {
        height: 150%;  /* Mengisi tinggi navbar */
        width: 100%;   /* Menjaga rasio aspek video */
        object-fit: contain;  /* Memastikan video tetap proporsional */
    }
    .btn-orange:hover {
    background-color: #ff8c00; /* Warna oranye lebih gelap saat hover */
    }
    .nav-linka:hover {
    background-color: #ff8c00; /* Warna oranye lebih gelap saat hover */
    }

    </style>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-orange-nav">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-6" href="index.html">
                <video autoplay loop muted class="logo-video ">
                    <source src="<?php echo base_url('pict/logo.mp4')?>" type="video/mp4" >
                    Your browser does not support the video tag.
                </video>
             </a>
            
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-orange" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <<div class="navbar-nav ms-auto ms-md-0 me-3 me-lg-">
            <!-- Tombol Masuk (Arahkan ke halaman login) -->
            <a href="/login" class="btn btn-orange me-2">Masuk</a>

            <!-- Tombol Daftar (Arahkan ke halaman register) -->
            <a href="/register" class="btn btn-orange">Daftar</a>
         </div>

            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"> <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#cc8100"  class="icon icon-tabler icons-tabler-filled icon-tabler-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12.707 2.293l9 9c.63 .63 .184 1.707 -.707 1.707h-1v6a3 3 0 0 1 -3 3h-1v-7a3 3 0 0 0 -2.824 -2.995l-.176 -.005h-2a3 3 0 0 0 -3 3v7h-1a3 3 0 0 1 -3 -3v-6h-1c-.89 0 -1.337 -1.077 -.707 -1.707l9 -9a1 1 0 0 1 1.414 0m.293 11.707a1 1 0 0 1 1 1v7h-4v-7a1 1 0 0 1 .883 -.993l.117 -.007z" /></svg> </div>
                                Beranda
                            </a>

                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#cc8100"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-gamepad-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5h3.5a5 5 0 0 1 0 10h-5.5l-4.015 4.227a2.3 2.3 0 0 1 -3.923 -2.035l1.634 -8.173a5 5 0 0 1 4.904 -4.019h3.4z" /><path d="M14 15l4.07 4.284a2.3 2.3 0 0 0 3.925 -2.023l-1.6 -8.232" /><path d="M8 9v2" /><path d="M7 10h2" /><path d="M14 10h2" /></svg> </div>
                                Game
                            </a>

                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#cc8100"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-checkup-list"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M9 14h.01" /><path d="M9 17h.01" /><path d="M12 16l1 1l3 -3" /></svg> </div>
                                Cek Pesanan

                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#cc8100"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-list-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3.5 5.5l1.5 1.5l2.5 -2.5" /><path d="M3.5 11.5l1.5 1.5l2.5 -2.5" /><path d="M3.5 17.5l1.5 1.5l2.5 -2.5" /><path d="M11 6l9 0" /><path d="M11 12l9 0" /><path d="M11 18l9 0" /></svg></div>
                                Daftar Harga
                            </a>

                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#cc8100"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-ipad-question"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 21h-9a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v6" /><path d="M9 18h5" /><path d="M19 22v.01" /><path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" /></svg></div>
                                FAQ
                                
                            </a>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#cc8100"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-headset"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 14v-3a8 8 0 1 1 16 0v3" /><path d="M18 19c0 1.657 -2.686 3 -6 3" /><path d="M4 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z" /><path d="M15 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z" /></svg></div>
                                Costumer Service
                                
                            </a>

                            <div class="sb-sidenav-menu-heading"></div>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Selamat Berbelanja</div>
                        
                    </div>
                </nav>
            </div>
           

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; PokeStore 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('template')?>/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('template')?>/assets/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url('template')?>/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('template')?>/js/datatables-simple-demo.js"></script>
    </body>
</html>
