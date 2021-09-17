<?php
  if (!isset($page) || $page == null ) {
      $page = 'accueil';
  }
  // echo $page;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>WikiMadagasikara</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css"> -->


    <link rel="apple-touch-icon" href="<?php echo site_url("assets/img/iconlogo.png") ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url("assets/img/iconlogo.png") ?>">

    <link href="<?php echo site_url("assets/css/bootstrap.css") ?>" rel="stylesheet">
    <link href="<?php echo site_url("assets/css/style.css") ?>" rel="stylesheet">
    <link href="<?php echo site_url("assets/css/responsive.css") ?>" rel="stylesheet">

    <link href="<?php echo site_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link href="<?php echo site_url("assets/css/templatemo.css") ?>" rel="stylesheet">
    <link href="<?php echo site_url("assets/css/custom.css") ?>" rel="stylesheet">

    <link href="<?php echo site_url("assets/css/slicknav.min.css") ?>" rel="stylesheet">
    <link href="<?php echo site_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link href="<?php echo site_url("assets/css/style2.css") ?>" rel="stylesheet">
    <link href="<?php echo site_url("assets/css/font-awesome.min.css") ?>" rel="stylesheet">

    <!-- Load fonts style after rendering the layout styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <!-- <link rel="stylesheet" href="assets/css/fontawesome.min.css"> -->

    <link href="<?php echo site_url("assets/css/fontawesome.min.css") ?>" rel="stylesheet">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">wikiMadagascar@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">+261 34 34 334 34</a>
                </div>
                
                <div>
                    <a class="text-light" href="https://fb.com/" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light mr-5" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                    
                    <a class="btn  bg-success text-light" href="<?php echo site_url('controller/loadFPDF'); ?>">Mamadika ho Boky</a>
                  </div>
                
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="#">
             <img src="<?php echo site_url("assets/img/logo.png") ?>" >
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('controller/index'); ?>">Pejy Fandraisana</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('controller/contenu'); ?>">Karazan'Tahiry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('controller/insertion'); ?>">Hampiditra Tahiry</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Hiraroka ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    
                    <a class="nav-icon position-relative text-decoration-none" href="<?php echo base_url('Controller/login'); ?>">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <!-- <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span> -->
                    Hiditra |
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">Hivoaka</a>


                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo site_url('Controller/recherche')?>" method="post" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="titre" placeholder="Hikaroka ...">
                    
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                    <a class="btn btn-dark btn-lg px-3" href="<?php echo site_url('controller/rechercheAvance'); ?>">Hikaroka an-tsipirihiny</a>
                </div>
            </form>
            
        </div>
    </div>



    <!-- Start Banner Hero -->
        <?php include($page.".php") ?>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">WikiMad</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i> 
                            Madagasikara
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">+261 34 56 555 55</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">WikiMadagasikara@gmail.com</a>
                        </li>
                    </ul>
            </div>
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Karazan'Tahiry</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Boky</a></li>
                        <li><a class="text-decoration-none" href="#">Lahatsoratra</a></li>
                        <li><a class="text-decoration-none" href="#">Horonam-Peo</a></li>
                        <li><a class="text-decoration-none" href="#">Horonan-Tsary</a></li>
                        
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Mombamomba</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Accueil</a></li>
                        <li><a class="text-decoration-none" href="#">A Propos</a></li>
                    </ul>
                </div>

            </div>
            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a rel="nofollow" class="text-light text-decoration-none" target="_blank" href="http://fb.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>

        <div class="w-100 bg-black py-3"> 
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 WikiMadagasikara
                            | Namboarin'ny <a rel="sponsored" href="#" target="_blank">WeFly</a>
                        </p>
                    </div>
                    <a class="btn  bg-success text-light" href="<?php echo site_url('controller/loadFPDF'); ?>">Version PDF</a>
                </div>
            </div>
        </div>

    </footer>
    
    <!-- End Footer -->

    <!-- Start Script -->


   <!--  <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script> -->

    <script src="<?php echo site_url("assets/js/jquery-1.11.0.min.js") ?>"></script>
    <script src="<?php echo site_url("assets/js/jquery-migrate-1.2.1.min.js") ?>"></script>
    <script src="<?php echo site_url("assets/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?php echo site_url("assets/js/templatemo.js") ?>"></script>
    <script src="<?php echo site_url("assets/js/custom.js") ?>"></script>


    
    <script src="<?php echo site_url("assets/js/jquery.jplayer.min.js") ?>"></script>
    <script src="<?php echo site_url("assets/js/wavesurfer.min.js") ?>"></script>
    <script src="<?php echo site_url("assets/js/WaveSurferInit.js") ?>"></script>
    <script src="<?php echo site_url("assets/js/jplayerInit.js") ?>"></script>


    <!-- End Script -->
</body>

</html>