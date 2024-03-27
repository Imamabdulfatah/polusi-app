
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>
  POLUSI-APP
</title>

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->
<link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
<style>
  @media screen and (max-width: 768px){
    section #point-utama {
      display: block !important;
    }
  } 
</style>






</head>

<body class="index-page bg-gray-300">  
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid px-0">
          <a class="navbar-brand font-weight-bolder ms-sm-3" href="/polusi-app" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
            Polusi App
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                  Pages
                  <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                </a>
                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                          <div class="d-none d-lg-block">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Landing Pages
              </h6>
              <a href="#information" class="dropdown-item border-radius-md">
                  <span>About Us</span>
              </a>
              <a href="#kontak" class="dropdown-item border-radius-md">
                  <span>Contact Us</span>
              </a>
          
             
              </div>
           
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </div>
  </div>
</div>

<!-- header -->
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/Jakarta.jpg')">
    <span class="mask bg-gradient-primary opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Polusi Depok</h1>
          <p class="lead text-white mt-3">Mengurangi emisi kendaraan dan mendaur ulang dapat mencegah polusi.
          </p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  <!-- kunjungan -->
<section class="pt-3 pb-4" id="count-stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto py-3">
        <div class="row">
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"><span id="current-time"></span></h1>
              <h5 class="mt-3">Waktu</h5>
             
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"> <span >100</span></h1>
              <h5 class="mt-3">Polusi Rata-Rata </h5>
              
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary" >10</h1>
              <h5 class="mt-3">Titik Pengamatan</h5>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- information -->
<section class="pt-5 pb-5" id="information">
  <div class="container">
    <div class="row">
      <div class="col text-center my-3">
        <span class="text-4xl text-center font-weight-bold text-dark my-2 mx-2"><i class="material-icons text-dark text-4xl my-3">opacity</i>Nilai Qualitas Udara</span>
      </div>
     
    </div>
  </div>
  <div class="container">
    <div class="row">

      <div class="col-lg-12 pt-3 pb-3">
        <div class="progress-wrapper">
          <div class="progress-info">
            <div class="progress-percentage">
              <span class="text-lg font-weight-bold">1 - 50   GOOD</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 16%;"></div>
          </div>
        </div>
      </div>
  
      <div class="col-lg-12  pt-3 pb-3">
        <div class="progress-wrapper">
          <div class="progress-info">
            <div class="progress-percentage">
              <span class="text-lg font-weight-bold">50 - 100   MODERATE</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 pt-3 pb-3">
        <div class="progress-wrapper">
          <div class="progress-info">
            <div class="progress-percentage">
              <span class="text-lg font-weight-bold">100 - 150   Unhealthy for Sensitive Groups</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%; background-color: orange;"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 pt-3 pb-3">
        <div class="progress-wrapper">
          <div class="progress-info">
            <div class="progress-percentage">
              <span class="text-lg font-weight-bold">150 - 200   Unhealthy</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 pt-3 pb-3">
        <div class="progress-wrapper">
          <div class="progress-info">
            <div class="progress-percentage">
              <span class="text-lg font-weight-bold">200 - 300   Very Unhealthy</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background-color: blueviolet;"></div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  
</section>


<section class="my-5 py-5" id="titik">
  <div class="container">
    <div class="row">
      <div class="col text-center my-3">

        <span class="text-4xl text-center font-weight-bold text-dark my-2 mx-2"><i class="material-icons text-dark text-4xl my-3">location_on</i>Titik Pengamatan dan kualitas</span>
      </div>
     
    </div>
  </div> 
  <div id="point-utama" class="container d-flex ">
      <!-- point1 -->
    <div class="row">
      <div class="col-lg-12 me-auto p-lg-4 mt-lg-0 mt-4">
          <div id="point1" class="card card-rotate card-background card-background-mask-primary shadow-primary " style="opacity: 0.5 ;">
            <div id="point1" class="back back-background" style="opacity: 0.5 !important; cursor: pointer;" >
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid" width="400" height="350" ></iframe>
              
            </div> 
            <div class="card-body text-center ">
              <span id="point1"></span>
              <h3 class="text-white">Margonda Point 1</h3>
              <button onclick="redirectToDetail('point1')" class="btn btn-white btn-sm w-60 mx-auto">Selengkapnya</button>
            </div>
          </div>
    
      </div>
  
    </div>
      
    <!-- point2 -->
    <div class="row">
      <div class="col-lg-12 me-auto p-lg-4 mt-lg-0 mt-4">
          <div id="point2" class="card card-rotate card-background card-background-mask-primary shadow-primary " style="opacity: 0.5 ;">
           <div id="point2" class="back back-background" style=" opacity: 0.5 !important; cursor: pointer;" >
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid" width="400" height="350" ></iframe>
             
            </div> 
            <div class="card-body text-center ">
              <h3 class="text-white">Margonda Point 2</h3>
              <button onclick="redirectToDetail('point2')" class="btn btn-white btn-sm w-60 mx-auto">Selengkapnya</button>
            </div>
          </div>
      </div>
    </div>

    <!-- point3 -->
    <div class="row">
      <div class="col-lg-12 me-auto p-lg-4 mt-lg-0 mt-4">
          <div id="point3" class="card card-rotate card-background card-background-mask-primary shadow-primary " style=" opacity: 0.5 ;">
           <div id="point3" class="back back-background" style=" opacity: 0.5 !important; cursor: pointer;" >
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid" width="400" height="350" ></iframe>
            </div> 
            <div class="card-body text-center ">
              <h3 class="text-white">Margonda Point 3</h3>
              <button onclick="redirectToDetail('point3')" class="btn btn-white btn-sm w-60 mx-auto">Selengkapnya</button>
            </div>
          </div>       
      </div> 
    </div>
  </div>
  <div id="point-utama"  class="container  d-flex">
    <!-- point 4 -->
    <div class="row">
      <div class="col-lg-12 me-auto p-lg-4 mt-lg-0 mt-4">
       

          <div id="point1" class="card card-rotate card-background card-background-mask-primary shadow-primary " style="background:#f27c05 !important; opacity: 0.5 ;">
           <div class="back back-background" style="background-color: #f27c05 !important; opacity: 0.5 !important; cursor: pointer;" >
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid" width="400" height="350" ></iframe>
             
            </div> 
            <div class="card-body text-center ">
              <h3 class="text-white">Margonda Point 5</h3>
              <button onclick="redirectToDetail('point4')" class="btn btn-white btn-sm w-60 mx-auto">Selengkapnya</button>
            </div>
          </div>
        
      </div>
  
    </div>
    <!-- point5 -->
    <div class="row">
      <div class="col-lg-12 me-auto p-lg-4 mt-lg-0 mt-4">
      

          <div id="point1" class="card card-rotate card-background card-background-mask-primary shadow-primary " style="background:#f27c05 !important; opacity: 0.5 ;">
           <div class="back back-background" style="background-color: #f27c05 !important; opacity: 0.5 !important; cursor: pointer;" >
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid" width="400" height="350" ></iframe>
             
            </div> 
            <div class="card-body text-center ">
              <h3 class="text-white">Margonda Point 5</h3>
              <button onclick="redirectToDetail('point5')" class="btn btn-white btn-sm w-60 mx-auto">Selengkapnya</button>
            </div>
          </div>
        
      </div>
  
    </div>
    <!-- point 6 -->
    <div class="row">
      <div class="col-lg-12 me-auto p-lg-4 mt-lg-0 mt-4">   
          <div id="point1" class="card card-rotate card-background card-background-mask-primary shadow-primary " style="background:#f27c05 !important; opacity: 0.5 ;">
           <div class="back back-background" style="background-color: #f27c05 !important; opacity: 0.5 !important; cursor: pointer;" >
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid" width="400" height="350" ></iframe>
             
            </div> 
            <div class="card-body text-center ">
              <h3 class="text-white">Margonda Point 6</h3>
              <button onclick="redirectToDetail('point6')" class="btn btn-white btn-sm w-60 mx-auto">Selengkapnya</button>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div id="point-utama"  class="container  d-flex">
    
   <!-- point7 -->
   <div class="row">
    <div class="col-lg-12 me-auto p-lg-4 mt-lg-0 mt-4">
        <div id="point1" class="card card-rotate card-background card-background-mask-primary shadow-primary " style="background:#f27c05 !important; opacity: 0.5 ;">
         <div class="back back-background" style="background-color: #f27c05 !important; opacity: 0.5 !important; cursor: pointer;" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid" width="400" height="350" ></iframe> 
          </div> 
          <div class="card-body text-center ">
            <h3 class="text-white">Margonda Point 7</h3>
            <button onclick="redirectToDetail('point7')" class="btn btn-white btn-sm w-60 mx-auto">Selengkapnya</button>
          </div>
        </div>
    </div>
  </div>

   <!-- point 8 -->
   <div class="row">
    <div class="col-lg-12 me-auto p-lg-4 mt-lg-0 mt-4">
      <div id="point1" class="card card-rotate card-background card-background-mask-primary shadow-primary " style="background:#f27c05 !important; opacity: 0.5 ;">
         <div class="back back-background" style="background-color: #f27c05 !important; opacity: 0.5 !important; cursor: pointer;" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid" width="400" height="350" ></iframe>
           
          </div> 
          <div class="card-body text-center ">
            <h3 class="text-white">Margonda Point 8</h3>
            <button onclick="redirectToDetail('point8')" class="btn btn-white btn-sm w-60 mx-auto">Selengkapnya</button>
          </div>
        </div>     
    </div>
  </div>

    <!-- point 9 -->
    <div class="row">
      <div class="col-lg-12 me-auto p-lg-4 mt-lg-0 mt-4">
         <div id="point1" class="card card-rotate card-background card-background-mask-primary shadow-primary " style="background:#f27c05 !important; opacity: 0.5 ;">
           <div class="back back-background" style="background-color: #f27c05 !important; opacity: 0.5 !important; cursor: pointer;" >
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid" width="400" height="350" ></iframe>
            </div> 
            <div class="card-body text-center ">
              <h3 class="text-white">Margonda Point 9</h3>
              <button onclick="redirectToDetail('point9')" class="btn btn-white btn-sm w-60 mx-auto">Selengkapnya</button>
            </div>
          </div>   
      </div>  
    </div>
  </div>
  <div id="point-utama"  class="container justify-content-center">
  <!-- point 10 -->
    <div class="row ">
      <div class="col-lg-4 me-auto p-lg-4 mt-lg-0 mt-4">
          <div id="point1" class="card card-rotate card-background card-background-mask-primary shadow-primary " style="background:#f2f205 !important; opacity: 0.5 ;">
              <div class="back back-background" style="background-color: #f2f205 !important; opacity: 0.5 !important" >
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.106753767915!2d106.8306511!3d-6.3802195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec11e6ecbe35%3A0x45e4fdba5c9fa9c0!2sJl.%20Margonda%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1711121132034!5m2!1sid!2sid" width="400" height="350" ></iframe>     
               </div> 
               <div class="card-body text-center ">
                 <h3 class="text-white">Margonda Point 10</h3>
                 <button onclick="redirectToDetail('point10')" class="btn btn-white btn-sm w-60 mx-auto">Selengkapnya</button>
               </div>        
          </div>        
      </div>
    </div>
  </div>
</section>

<section id="kontak">
  <div class="container py-4">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center">Contact us</h3>
        <form role="form" id="contact-form" method="post" autocomplete="off">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <label class="form-label">First Name</label>
                  <input class="form-control" aria-label="First Name..." type="text" >
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <div class="input-group input-group-dynamic">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" placeholder="" aria-label="Last Name..." >
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group input-group-dynamic">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="input-group mb-4 input-group-static">
              <label>Your message</label>
              <textarea name="message" class="form-control" id="message" rows="4"></textarea>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="footer pt-5 mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3 mb-4 ">
        <div>
          <a href="https://www.creative-tim.com/product/material-kit">
            <img src="./assets/img/logo-ct-dark.png" class="mb-3 footer-logo" alt="main_logo">
          </a>
          <h6 class="font-weight-bolder mb-4">Polusi App</h6>
        </div>
     
      </div>



      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Company</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="#about" target="_blank">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#titik" target="_blank">
                Services
              </a>
            </li>
          </ul>
        </div>
      </div>


      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Help & Support</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="#kontak" target="_blank">
                Contact Us
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#kontak" target="_blank">
                Knowledge Center
              </a>
            </li>
          </ul>
        </div>
      </div>


      <div class="col-12">
        <div class="text-center">
          <p class="text-dark my-4 text-sm font-weight-normal">
            All rights reserved. Copyright © <script>document.write(new Date().getFullYear())</script> Material Kit by <a href="https://www.linkedin.com/in/imam-abdul-fatah/" target="_blank">Imam Abdul Fatah</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>


<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="./assets/js/plugins/countup.min.js"></script>
<script src="./assets/js/plugins/choices.min.js"></script>
<script src="./assets/js/plugins/prism.min.js"></script>

<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="./assets/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="./assets/js/plugins/tilt.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="./assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
<script src="./assets/js/time.js"></script>
<script src="./assets/js/redirect.js"></script>
<script src="./assets/js/database/satu.js"></script>


</body>
</html>
