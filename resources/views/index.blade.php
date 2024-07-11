<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>FasKes</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-scholar.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <style>
      .header-area .main-nav {
        display: flex;
        align-items: center;
        justify-content: center; /* Center align items horizontally */
        height: 120px; /* Adjust height as needed */
      }
  
      .header-area .main-nav .nav {
        display: flex;
        align-items: center;
        list-style: none;
        padding: 0;
        margin: 0;
      }
  
      .header-area .main-nav .nav li {
        margin-right: 20px;
      }
  
      .header-area .main-nav .nav li a {
        text-decoration: none;
        color: #000;
        transition: color 0.3s;
      }
  
      .header-area .main-nav .nav li a:hover,
      .header-area .main-nav .nav li a:focus {
        color: #FF2D20;
      }
  
      .header-area .main-nav .menu-trigger {
        display: none; /* Hide the menu trigger for larger screens */
      }
  
      /* Add responsive design to handle smaller screens */
      @media (max-width: 768px) {
        .header-area .main-nav .menu-trigger {
          display: block;
        }
  
        .header-area .main-nav .nav {
          display: none; /* Hide the nav items initially */
          flex-direction: column;
        }
  
        .header-area .main-nav .nav li {
          margin: 10px 0;
        }
  
        .header-area .main-nav .menu-trigger.active + .nav {
          display: flex; /* Show nav items when the menu trigger is active */
        }
      }
    </style>
  
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h1 style="height: 100px">FasKes</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Search Start ***** -->
            <div class="search-input">
              {{-- <form id="search" action="#">
                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                <i class="fa fa-search"></i>
              </form> --}}
            </div>
            <!-- ***** Search End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#faskes">Informasion</a></li>
              <li class="scroll-to-section"><a href="#team">Team</a></li>
              @if (Route::has('login'))
              @auth
                @if(Auth::user()->hasRole('admin'))
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @elseif (Auth::user()->hasRole('faskes'))
                <li><a href="{{ route('faskes.index') }}">Dashboard</a></li>
                @endif
              @else
                <li><a href="{{ route('login') }}">Log in</a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
              @endauth
              @endif
              <a class='menu-trigger'>
                <span>Menu</span>
              </a>
            </ul>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  
  
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <div class="owl-carousel owl-banner">
                    <div class="item item-1" style="background-image: url('https://senator.id/wp-content/uploads/2023/08/ilustrasi-nakes.png'); background-repeat: no-repeat; background-size: cover; height: 500px; filter: brightness(0.9);">
                        <div class="header-text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-01.png" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>Online Degrees</h4>
              <p>Whenever you need free templates in HTML CSS, you just remember TemplateMo website.</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-02.png" alt="short courses">
            </div>
            <div class="main-content">
              <h4>Short Courses</h4>
              <p>You can browse free templates based on different tags such as digital marketing, etc.</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-03.png" alt="web experts">
            </div>
            <div class="main-content">
              <h4>Web Experts</h4>
              <p>You can start learning HTML CSS by modifying free templates from our website too.</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="faskes" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h2>Informasi Faskes</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">RSU</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">RSK</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">Puskesmas</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/rs1.png" alt=""></a>
              <span class="price"><h6><em>$</em>160</h6></span>
            </div>
            <div class="down-content">
              <span class="author"><h4>Rumah Sakit Umum</h4></span>
              <p>Melayani berbagai jenis perawatan dan pengobatan untuk pasien dengan berbagai kondisi medis. Termasuk layanan darurat, rawat inap, dan rawat jalan.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/rs2.jpg" alt=""></a>
              <span class="price"><h6><em>$</em>340</h6></span>
            </div>
            <div class="down-content">
              <span class="author"><h4>Rumah Sakit Khusus</h4></span>
              <p>Rumah Sakit Umum menyediakan berbagai jenis layanan medis dan bedah, termasuk perawatan darurat, rawat inap, rawat jalan, dan berbagai spesialisasi medis.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/rs3.jpeg" alt=""></a>
              <span class="price"><h6><em>$</em>640</h6></span>
            </div>
            <div class="down-content">
              <span class="author"><h4>Rumah Sakit Halik</h4></span>
              <p>Rumah Sakit Khusus fokus pada bidang medis tertentu, seperti jantung, kanker, kesehatan jiwa, atau ibu dan anak, dengan fasilitas dan tenaga medis yang terlatih di bidang tersebut.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/ps1.png" alt=""></a>
              <span class="price"><h6><em>$</em>100</h6></span>
            </div>
            <div class="down-content">
              <span class="author"><h4>Puskesmas</h4></span>
              <p> Fasilitas kesehatan tingkat pertama yang menyediakan layanan kesehatan dasar, termasuk imunisasi, pemeriksaan kesehatan rutin, dan penanganan penyakit menular.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/ps2.jpeg" alt=""></a>
              <span class="price"><h6><em>$</em>120</h6></span>
            </div>
            <div class="down-content">
              <span class="author"><h4>Puskesmas Abadi</h4></span>
              <p>Mereka aktif dalam program promosi kesehatan dan pencegahan penyakit, seperti penyuluhan kesehatan, kampanye imunisasi, dan kegiatan posyandu.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/ps3.jpeg" alt=""></a>
              <span class="price"><h6><em>$</em>140</h6></span>
            </div>
            <div class="down-content">
              <span class="author"><h4>Puskesmas Jaya</h4></span>
              <p>Puskesmas biasanya terletak di dekat atau di dalam komunitas yang dilayaninya, memudahkan akses masyarakat terhadap layanan kesehatan, dan sering bekerja sama dengan kader kesehatan masyarakat setempat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h2>Daftar Fasilitas Kesehatan</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/rumahsakit.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Umum</span>
                    <h4>Rumah Sakit UI</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>16 Feb 2024</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>20 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$120</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/rsj.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Khusus</span>
                    <h4>Rumah Sakit Jantung</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>24 Feb 2024</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>10 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$120</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/puskesmas.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Umum</span>
                    <h4>Puskesmas Abadi</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>12 Mar 2024</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>15 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$140</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-01.jpg" alt="">
              <span class="category">Backend</span>
              <h4>Abd.Kholik</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>F
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-02.jpg" alt="">
              <span class="category">Frontend</span>
              <h4>M. Wildan Jamil</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-03.jpg" alt="">
              <span class="category">Frontend</span>
              <h4>M. Fadilah AlFarouk</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-04.jpg" alt="">
              <span class="category">Frontend</span>
              <h4>M.Faqihuddin</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 FasKes. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com" rel="nofollow" target="_blank">ThemeWagon</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/isotope.min.js')}}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js')}}"></script>
  <script src="{{ asset('assets/js/counter.js')}}"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>

  </body>
</html>