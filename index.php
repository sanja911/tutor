<?php
session_start();
include "comp/koneksi.php";
//cek apakah user sudah login
if(!isset($_SESSION['username'])){


?>
   <?php include "comp/head.php"; ?>
   <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="" href="#panduan">Panduan</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#tutor">Tutor</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#mapel">Mapel</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#kelas">Kelas</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="login.php">Login</a>
                  </li>
                  <?php } else {
                   include "comp/head.php";  
                    $sql = "select * from user where username='$_SESSION[username]'";
                    $hasil = mysql_query($sql);
                    $data  = mysql_fetch_array($hasil);?>
                    <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="" href="#panduan">Panduan</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#tutor">Tutor</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#mapel">Mapel</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#kelas">Kelas</a>
                  </li>
                   <li>
                    <a class="page-scroll" href="<?php echo $data['akses']?>/"><?php echo $_SESSION['username'];}?></a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="assets/img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
        <img src="assets/img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
        <img src="assets/img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Tutor </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Memilih Tutor sesuai kriteria anda</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#tutor"> Tutor </a>
                  <a class="ready-btn page-scroll" href="#"> Kelas </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Pengguna </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Tentukan Pilihan tutormu </h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services"> Tutor </a>
                  <a class="ready-btn page-scroll" href="#about"> Kelas</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Pengguna</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Jadilah pemilih terbaik untuk proses belajarmu</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services"> Tutor </a>
                  <a class="ready-btn page-scroll" href="#about"> Kelas </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start Panduan area -->
  <div id="panduan" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Panduan</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="assets/img/about/1.jpg" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">Menu yang disediakan</h4>
              </a>
              <p>
                Ada beberapa menu yaitu :
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Menu Tutor menampilkan tutor anda dan semua tutor. 
                </li>
                <li>
                  <i class="fa fa-check"></i> Menu Mapel untuk memilih matakuliah dengan tambahan memilih tutor sesuai kriteria yang anda diinginkan.
                </li>
                <li>
                  <i class="fa fa-check"></i> Menu Kelas yaitu kelas yang sudah di ambil anda.
                </li>
                <li>
                  <i class="fa fa-check"></i> Menu Akun yaitu setting untuk mengubah akun anda.
                </li>
                <li>
                  <i class="fa fa-check"></i> Menu Logout yaitu menu untuk anda keluar.
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End Panduan area -->

<!-- Start Tutor Area -->
  <div id="tutor" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Tutor Online</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Tutor -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">Tutor</a>
                </li>
               
               
              </ul>
            </div>
          </div>
        </div>
      
        <div class="awesome-project-content">
        <?php
        $sql1 = mysql_query("select DISTINCT user.id_user,user.username,user.foto,ambil_mapel.mapel from user join ambil_mapel ON user.id_user=ambil_mapel.id_user group by user.id_user ASC");
        //$data1  = mysql_fetch_array($sql1);
        while ($data1 = mysql_fetch_array($sql1)) {
        ?>
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 tutor ">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="comp/foto/<?php echo $data1['foto'] ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="comp/foto/<?php echo $data1['foto'] ?>">
                      <h4><?php echo $data1['mapel']; ?></h4>
                      <h6></h6>
                      <span><?php echo $data1['username'];?></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
        <?php } ?>
          <!-- single-awesome-project end -->
    <div>
      <div class="container">
          <div class="row">
            <div class="text-center">
                <a class="ready-btn btn-primary " href="#"> Selengkapnya </a>
            </div>
          </div>       
        </div>
    </div>                 
          

        </div>
      </div>
    </div>
  </div>
  <!-- awesome-tutor end -->


<!-- Start matpel Area -->
  <div id="matpel" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Matpel</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="#">
                    <img src="assets/img/blog/1.jpg" alt="">
                  </a>
              </div>

              <div class="blog-text">
                <h4>
                    <a href="#">Data Mining</a>
                  </h4>
                <p>
                  Pemanfaatan dari data mining data mining bisa digunakan untuk menangani adanya peledakan dari volume data. Dengan melihat bagaimana menyimpannnya, mengekstraknya dan memanfaatkannya. Tentunya berbagai ilmu komputasi dapat untuk menghasilkan informasi yang dibutuhkan.
                </p>
              </div>
              <span>
                  <a href="" class="ready-btn">Pilih Tutor</a>
                </span>
            </div>
            <!-- Start single matkul -->
          </div>
          <!-- End Left matkul-->
          
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="#">
                    <img src="assets/img/blog/1.jpg" alt="">
                  </a>
              </div>

              <div class="blog-text">
                <h4>
                    <a href="#">Basis Data</a>
                  </h4>
                <p>
                  Belajar Basis data akan memberikan kerangka kerja dan berfikir sehingga mampu menyederhanakan suatu persoalan kompleks menuju penyelesaian yang efektif dan efisien. Basis data bermanfaat agar data terjaga dengan aman, kemudahan berbagi data, serta kemudahan akses data.
                </p>
              </div>
              <span>
                  <a href="" class="ready-btn">Pilih Tutor</a>
                </span>
            </div>
            <!-- Start single matkul -->
          </div>
          <!-- End Left matkul-->



        </div>
      </div>
    </div>
  </div>
  <!-- End matkul -->


  <!-- class="ready-btn" -->



  <!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Memilih tutor sendiri dengan kriteria saya sendiri.<br> belajar dengan pilihan sendiri.
                    </p>
                    <h6>Rani</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Belajar dengan pilihan guru.<br>kenapa tidak. ayo buruan pilih gurumu.
                    </p>
                    <h6>Mutia</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Belajar sesuai pilihan.<br>itu yang dimau tiap orang
                    </p>
                    <h6>Beni</h6>
                  </div>
                </div>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
  

  <!-- Start Footer bottom Area -->
  <footer>
    
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eTutor</strong>
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/lib/venobox/venobox.min.js"></script>
  <script src="assets/lib/knob/jquery.knob.js"></script>
  <script src="assets/lib/wow/wow.min.js"></script>
  <script src="assets/lib/parallax/parallax.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="assets/lib/appear/jquery.appear.js"></script>
  <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="assets/contactform/contactform.js"></script>

  <script src="assets/js/main.js"></script>
</body>

</html>
