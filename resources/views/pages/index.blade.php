{{-- @extends('layout')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PPDB SMK WIKRAMA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/logoo.png')}}" rel="icon">
    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/index.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="index.html"><img src="{{asset('assets/img/logoh.png')}}" alt=""></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Jurusan</a></li>
                    <li><a class="nav-link scrollto" href="#services">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Testimoni</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li>
                    @if(Auth::check())
                    <li><a class="nav-link scrollto" href="{{route('dashboard')}}">Dashboard</a></li>

                    @else
                    <li><a class="nav-link scrollto" href="/login">Login</a></li>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-md-left" data-aos="fade-up">
            <h1>PPDB TP 2023-2024</h1> <br>
            <h1>SMK WIKRAMA BOGOR</h1>

            <h2>Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <strong>PENDAFTARAN PPDB</strong> dibawah
                ini! <br>
                Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</h2>
            <a href="{{url('pendaftaran')}}" class="btn btn-warning">PENDAFTARAN PPDB</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= What We Do Section ======= -->
        <section id="services" class="what-we-do">
            <div class="container">
                <div class="section-title">
                    <h2>Budaya Wikrama</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch ">
                        <div class="icon-box">
                            <h4><a>Motto</a></h4>
                            <p>Ilmu yang Ilmiah, Amal yang Amaliah, Akhlakul Karimah
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <h4><a>Afirmasi</a></h4>
                            <p>Padamu negeri - kami berjanji - lulus Wikrama siap membangung negeri</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <h4><a>Atitude</a></h4>
                            <p>Aku ada lingkunganku bahagia</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End What We Do Section -->
        {{-- jurusan --}}
        <section id="portfolio" class="what-we-do">
            <center>
                <div class="section-title">
                    <h2>Jurusan di SMK Wikrama </h2>
                </div>
            </center>
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img src="{{asset('assets/img/pplg.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">PPLG</h5>
                                <p class="card-text">Desktop Programing, Web Programing, Mobile Programing, Bussinies
                                    Analyst, Database Administrasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img src="{{asset('assets/img/tkj.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">TJKT</h5>
                                <p class="card-text">Keahlian Teknik dasar Komputer, sudah memiliki sertivikasi seperti
                                    CNAP dan MCNA <br><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img src="{{asset('assets/img/dkv.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Multimedia / DKV</h5>
                                <p class="card-text">Lulusan dapat memiliki kesempatan kerja yang luas dibidang
                                    periklanan, production house, penerbit majalah, dll.</p>
                            </div>
                        </div>
                    </div>
                    <center><br>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img src="{{asset('assets/img/pmn.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Pemasaran</h5>
                                    <p class="card-text">Kompetisi Keahlian Pemasaran memiliki Kompetisi yang mirip
                                        dengan Multimedia dan MPLB. Lulusan program ini diharuskan mampu membuat foto
                                        produk, desain, copy writing, dll.</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </center>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img src="{{asset('assets/img/mplb.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">MPLB</h5>
                                <p class="card-text">keunggulan dalam bidang prestasi peserta didik, seperti juara II
                                    lomba keterampilan bidang sekertaris, dll.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img src="{{asset('assets/img/kln.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Kuliner</h5>
                                <p class="card-text">Mampu bekerja diberbagai bidang jasa boga seperti restoran, hotel,
                                    rumah sakit, katring sesuai dengan minat dan bakat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img src="{{asset('assets/img/htl.jpg')}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Perhotelan</h5>
                                <p class="card-text">mampu bekerja didepartemen yang ada dihotel dengan kompetensi yang
                                    mereka pelajari.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- ======= About Section ======= -->
            <center>
                <div class="section-title">
                    <h2>Prestasi yang di Raih SMK Wikrama </h2>
                </div>
            </center>
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <iframe width="360" height="200" src="https://www.youtube.com/embed/7xf7D3QnoEc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">SMK Wikrama selalu menerapkan protokol kesehatan dengan ketat, jadi
                                    kamu gak perlu khawatir lagi !</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <iframe width="360" height="200" src="https://www.youtube.com/embed/V8ZWxAcGY4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">SMK Wikrama Menerima Penghargaan "SMK Unggul dan Berprestasi" di
                                    Indonesia dari KEMENDIKBUD</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <iframe width="360" height="200" src="https://www.youtube.com/embed//BeIHXmayzIA"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">Berikut ini lah jurusa-jurusan yang ada di SMK Wikrama Bogor. Ada 7
                                    Jurusan loohh!<br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="what-we-do">
            <div class="container">
                <div class="section-title">
                    <h2>Testimoni</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch ">
                        <div class="icon-box">
                            <h4><a>Akhmad Munito</a></h4>
                            <h6>Administrasi Perkantoran</h6>
                            <p>Maju terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yang bermanfaat dan
                                akhlakul karimah bisa langsung bisa bersaing ke dunia kerja di era modern ini.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <h4><a>Kamaludin</a></h4>
                            <h6>Rekayasa Perangakat Lunak</h6>
                            <p>Menerapkan sistem pembelajaran yang baiak, efektif dan berbasis TI yang sangat memudahkan
                                sisawa.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <h4><a>Lutfi Hakim</a></h4>
                            <h6>Rekayasa Perangakat Lunak</h6>
                            <p>TSMK Wikrama bukan hanya menjadikan siswanya untuk masuk kedunia kerja, melainkan
                                malebihi dari apa yang dibutuhkan pada umumnya</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div><!-- End testimonial item -->
        </div>
        <div class="swiper-pagination"></div>
        </div>
        </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>

                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-10">
                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <h4>Location:</h4>
                                    <p>Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor,
                                        Jawa Barat 16146
                                    </p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <h4>Email:</h4>
                                    <p> prohumasi@smkwikrama.net </p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <h4>Call:</h4>
                                    <p>02518242411 </p>
                                    <p>CS 1 : <a
                                            style="text-decoration: underline !important; font-weight: bold !important"
                                            href="https://wa.me/6281909242411">hubungi kami (klik disini)</a>
                                        <br>CS 2 : <a
                                            style="text-decoration: underline !important; font-weight: bold !important"
                                            href="https://wa.me/6281919242411">hubungi kami (klik disini)</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>SMK WIKRAMA</h3>
                        <p>
                            Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat
                            16146
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Jurusan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">Testimoni</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Hubungi Kami</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Daftar PPDB sekarang!</h4>
                        <p>Pendaftaran PPDB 2023-2024 sudah di buka!</p>
                        <a href="{{url('pendaftaran')}}" class="btn btn-warning">PENDAFTARAN PPDB</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">


            <!-- End Footer -->

            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>

</body>

</html>
