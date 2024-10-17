<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Events Organiser</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <!-- inject:css -->
  <link rel="stylesheet" href="style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="logo.png" /> -->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- -------- slick slide --------- -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


</head>
<body style="background:#eb984e">
<div class="container-fluid">
    <?php
      $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1);
      if($page == "index.php"){
        ?>
            <video src="videos/1.mp4" class="video-slide active" autoplay muted loop></video>
            <video src="videos/2.mp4" class="video-slide" autoplay muted loop></video>
            <video src="videos/3.mp4" class="video-slide" autoplay muted loop></video>
            <video src="videos/4.mp4" class="video-slide" autoplay muted loop></video>
            <video src="videos/5.mp4" class="video-slide" autoplay muted loop></video>
            <video src="videos/6.mp4" class="video-slide" autoplay muted loop></video>

            <marquee class="text-secondary bg-light hidden-1" style="z-index:888;position:relative">
                <div class="row">
                    <div class="col-md-6">
                        <p class="fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </marquee>
        <?php
      }
    ?>
    <!-- ------------- slide word -------------- -->
    <div class="container bg-light" style="position:relative;z-index:888;">
        <div class="row mt-3 text-center text-light hidden-2">
            <div class="col-md-3">
               <p class="fw-bold text-secondary"><i class="fas fa-phone" style="margin-right:10px"> </i>+254 7700770077</p>
            </div>
            <div class="col-md-3">
               <p class="fw-bold text-secondary"><i class="fas fa-phone-square" style="margin-right:10px"> </i>+254 900800700</p>
            </div>
            <div class="col-md-3">
               <p class="fw-bold text-secondary"><i class="fas fa-envelope" style="margin-right:10px"> </i>example12@gmail.com</p>
            </div>
            <div class="col-md-3">
               <p class="fw-bold text-secondary"><i class="fas fa-map-marker" style="margin-right:10px"> </i>Nairobi Rd, Nam 231</p>
            </div>
        </div>
        <hr style="position:relative;z-index:888;background:black">
        <!-- ---------- detailes top ----------- -->
        <nav class="navbar navbar-expand-lg bg-light shadow" style="">
            <div class="container" style="margin-bottom:-10px">
                <a class="navbar-brand fw-bold" style="font-family:arigerian" href="#"><img src="images/logo.png" height="50" width="50" style="border-radius:50%;mix-blend-mode:multiply"> Momento Starts</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">About US</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="category.php">Events</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="category.php">Category</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">Contact US</a>
                    </li>
                    <li class="nav-item">
                       <a class="btn text-white" style="background:#d35400" href="#">List Your Event</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
</div>