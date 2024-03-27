<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
    <title>Material Kit 2 by Creative Tim</title>
    <!--     Fonts and icons     -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"
    />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/42d5adcbca.js"
      crossorigin="anonymous"
    ></script>
    <!-- Material Icons -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Round"
      rel="stylesheet"
    />
    <!-- CSS Files -->
    <link
      id="pagestyle"
      href="./assets/css/material-kit.css?v=3.0.4"
      rel="stylesheet"
    />

    <style>
      header #maps {
        width: 1400px;
        height: 1000px;
      }

      @media screen and (max-width: 768px) {
        header #maps {
          width: 600px;
          height: 400px;
          margin-top: 20px;
        }

        header .page-header .container {
          margin-top:20px;
        }

        header .page-header .container .row h1{
          font-size: 25px;
        }

        header .page-header .container .row p{
          font-size: 15px;
        }
      }
    </style>
  </head>

  <body class="about-us bg-gray-200">
    <!-- Navbar Transparent -->
    <nav
      class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent"
    >
      <div class="container">
        <button
          class="navbar-toggler shadow-none ms-2"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navigation"
          aria-controls="navigation"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon mt-2">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </span>
        </button>
        <div
          class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5"
          id="navigation"
        >
          <ul class="navbar-nav navbar-nav-hover ms-auto">
            <li class="nav-item ms-lg-auto">
              <a
                class="nav-link nav-link-icon me-2"
                href="/polusi-app"
                target="_blank"
              >
                <i class="fa fa-home me-1"></i>
                <p
                  class="d-inline text-sm z-index-1 font-weight-bold"
                  data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  title="Star us on Github"
                >
                  Home
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header style="background-color: #079902">
      <div class="page-header min-vh-75">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid"
          id="maps"
        ></iframe>
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center mx-auto my-auto">
              <h1  class="text-white"><?php
              $action = isset($_GET['action']) ? $_GET['action'] : '';

              switch ($action) {
                  case 'point1':
                      echo "Margonda Pertama";
                      break;
                  case 'point2':
                      echo "Margonda Kedua";
                      break;
                  case 'point3':
                      echo "Margonda Ketiga";
                      break;
                  case 'point4':
                      echo "Margonda Keempat";
                      break;
                  case 'point5':
                     echo "Margonda Kelima";
                      break;
                  case 'point6':
                      echo "Margonda Keenam";
                      break;
                  case 'point7':
                      echo "Margonda Ketujuh";
                      break;
                  case 'point8':
                     echo "Margonda Kedelapan";
                      break;
                  case 'point9':
                      echo "Margonda Kesembilan";
                      break;
                  case 'point10':
                    echo "Margonda Kesepuluh";
                    break;
                  default:
                      echo "Detail tidak ditemukan</h2>";
                      break;
              }
              ?>
              </h1>

              <p class="lead mb-4 text-white opacity-8">
                Kualitas udara di kategori ini dianggap baik. Udara dalam
                kategori ini biasanya aman untuk dihirup oleh semua orang,
                termasuk kelompok sensitif seperti anak-anak, lansia, dan
                individu dengan masalah kesehatan kronis.
              </p>
              <a href="" class="btn btn-primary w-100">LOKASI</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    <div class="card card-body shadow-xl mx-3 mx-md-4">
      <!-- Section with four info areas left & one card right with image and waves -->
      <section class="pt-3 pb-4">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div class="row justify-content-start">
                <div class="col-md-6">
                  <div class="info">
                    <i
                      class="material-icons text-3xl text-gradient text-info mb-3"
                      >opacity</i
                    >
                    <h5>Kualitas Udara</h5>
                    <h2 class="font-weight-bold">
                      <?php
                          $action = isset($_GET['action']) ? $_GET['action'] : '';

                          switch ($action) {
                              case 'point1':
                                  echo "50";
                                  break;
                              case 'point2':
                                  echo "60";
                                  break;
                              case 'point3':
                                  echo "80";
                                  break;
                              case 'point4':
                                  echo "65";
                                  break;
                              case 'point5':
                                 echo "85";
                                  break;
                              case 'point6':
                                  echo "90";
                                  break;
                              case 'point7':
                                  echo "113";
                                  break;
                              case 'point8':
                                 echo "120";
                                  break;
                              case 'point9':
                                  echo "90";
                                  break;
                              case 'point10':
                                echo "200";
                                break;
                              default:
                                  echo "Detail tidak ditemukan</h2>";
                                  break;
                          }
                      ?>
                    </h2>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info">
                    <i
                      class="material-icons text-3xl text-gradient text-info mb-3"
                      >access_time</i
                    >
                    <h5>Waktu</h5>
                    <h2 class="font-weight-bold">40 Februari 2024</h2>
                  </div>
                </div>
              </div>
              <a href="/polusi-app" class="btn btn-primary w-100 my-3">KEMBALI</a>
              <!-- <div class="row justify-content-start mt-4">
                <div class="col-md-6">
                  <div class="info">
                    <i
                      class="material-icons text-3xl text-gradient text-info mb-3"
                      >apps</i
                    >
                    <h5>Prebuilt components</h5>
                    <p>
                      We get insulted by others, lose trust for those We get
                      back freezes
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info">
                    <i
                      class="material-icons text-3xl text-gradient text-info mb-3"
                      >3p</i
                    >
                    <h5>Improved platform</h5>
                    <p>
                      We get insulted by others, lose trust for those We get
                      back freezes
                    </p>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </section>
    </div>

    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script
      src="./assets/js/core/bootstrap.min.js"
      type="text/javascript"
    ></script>

    <script
      src="./assets/js/material-kit.min.js?v=3.0.4"
      type="text/javascript"
    ></script>

    <script>
      if (document.getElementsByClassName("page-header")) {
        window.onscroll = debounce(function () {
          var scrollPosition = window.pageYOffset;
          var bgParallax = document.querySelector(".page-header");
          var oVal = window.scrollY / 3;
          bgParallax.style.transform = "translate3d(0," + oVal + "px,0)";
        }, 6);
      }
    </script>
  </body>
</html>
