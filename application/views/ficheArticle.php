<style type="text/css">
    html {
      height: 100%
    }

    body {
      height: 100%;
      margin: 0;
      padding: 0
    }

    #carteId {
      height: 100%
    }
  </style>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />
  <link href="<?php echo site_url("assets/css/style.css") ?>" rel="stylesheet">
  <link href="<?php echo site_url("assets/css/responsive.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFX2v5z34vYKl0We4nHV4KFV1j6uVsltg&callback=main&libraries=places"></script>

  </script>
  <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-3 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php echo $default_image; ?>" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <?php for($i=0;$i<count($nom_image);$i++) {?>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo $nom_image[$i]; ?>" alt="Product Image".<?php echo $i; ?>>
                                            </a>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <?php for($i=0;$i<count($nom_image);$i++) {?>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo $nom_image[$i]; ?>" alt="Product Image".<?php echo $i; ?>>
                                            </a>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-9 mt-5">
                    <div class="card">
                        <div class="card-body">
                        <?php for($i=0;$i<count($article);$i++) {?>
                            <h1 class="h2"><?php echo $article[$i]['titre']; ?></h1>
                            <p class="py-2">
                                <span class="list-inline-item text-dark">Nojeren'olona <?php echo $article[$i]['visites']; ?>  </span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Sokajy:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $article[$i]['categories']; ?></strong></p>
                                </li>
                            </ul>

                            <h6>Mombamomba:</h6>
                            <p><?php echo $article[$i]['texte']; ?></p>
                            
                        <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_section layout_padding-bottom layout_padding2-top">
        </div>
        <div class="container container-bg">
        <div class="row">
            <div class="col-lg-8 col-md-7 px-0" style="height:500px" >
            <div id="carteId">LA CARTE</div>
            </div>
            <div class="col-md-5 col-lg-4 px-0">
                <p>Marquage des articles sur la carte</p>
            </div>
        </div>
        </div>
    </section>

<script type="text/javascript" src="<?php echo site_url("assets/js/jquery-3.4.1.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo site_url("assets/js/bootstrap.js") ?>"></script>
<script type="text/javascript" src="<?php echo site_url("assets/js/owl.carousel.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo site_url("assets/js/custom.js") ?>"></script>
<script type="text/javascript">
function initialize() {
    var mapOptions =
      {
          center: new google.maps.LatLng(-18.9651023,46.3496537),
          zoom: 6,
          mapTypeId:google.maps.MapTypeId.ROADMAP
      };
    var carte = new google.maps.Map(document.getElementById("carteId"),
    mapOptions);

  var liste = new Array();
//atsofoka eto le data avy any am base
  //alert(liste.length);
  for(let i = 0; i < liste.length; i++){
    marks = new google.maps.Marker({
      position:liste[i], //coordonnée de la position du clic sur la carte
      map: carte, //la carte sur laquelle le marqueur doit être affiché
    });
  }
}
      google.maps.event.addDomListener(window, 'load', initialize);

 function getCoordinates(carte) {
          google.maps.event.addListener(carte,"click",function(event){
            var lat=event.latLng.lat();
            var lng=event.latLng.lng();
            console.log(lng);
            alert( lat +" , " +lng);
            var location = new google.maps.LatLng(lat,lng);
            return location;
          });
        }


    </script>
