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
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php echo site_url("assets/img/").'/'.$article[0]["photo"].'1.png' ?>" alt="Card image cap" id="product-detail">
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
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo site_url("assets/img/").'/'.$article[0]["photo"].'1.png' ?>" alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo site_url("assets/img/").'/'.$article[0]["photo"].'2.png' ?>" alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo site_url("assets/img/").'/'.$article[0]["photo"].'3.png' ?>" alt="Product Image 3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo site_url("assets/img/").'/'.$article[0]["photo"].'1.png' ?>" alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo site_url("assets/img/").'/'.$article[0]["photo"].'2.png' ?>" alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo site_url("assets/img/").'/'.$article[0]["photo"].'3.png' ?>" alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                                <!--Third slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo site_url("assets/img/").'/'.$article[0]["photo"].'1.png' ?>" alt="Product Image 7">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo site_url("assets/img/").'/'.$article[0]["photo"].'2.png' ?>" alt="Product Image 8">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo site_url("assets/img/").'/'.$article[0]["photo"].'3.png' ?>" alt="Product Image 9">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Third slide-->
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
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?php echo $article[0]['titre']; ?></h1>
                            <p class="py-2">
                                <span class="list-inline-item text-dark"><?php echo $article[0]['visites']; ?></span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Sokajy:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $article[0]['categories']; ?></strong></p>
                                </li>
                            </ul>

                            <h6>Mombamomba:</h6>
                            <p> <?php echo $article[0]['texte']; ?>
                            </p>
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
            <div class="col-lg-12 col-md-7 px-0" style="height:500px" >
            <div id="carteId">LA CARTE</div>
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
          zoom: 5,
          mapTypeId:google.maps.MapTypeId.ROADMAP
      };
    var carte = new google.maps.Map(document.getElementById("carteId"),
    mapOptions);

  var liste = new Array();
//atsofoka eto le data avy any am base
  for(let i = 0; i < liste.length; i++){
    marks = new google.maps.Marker({
      position:liste[i], //coordonnée de la position du clic sur la carte
      map: carte, //la carte sur laquelle le marqueur doit être affiché
    });
  }

  var locations=[
      ['Makiplast',-13.021516, 49.562189],
      
]

// var marker = new google.maps.Marker({
// 		position: location,
// 		draggable: true,
// 		map: carte
// 	});
var marker, i;
for (i = 0; i < locations.length; i++) {
marker = new google.maps.Marker({
position: new google.maps.LatLng(locations[i][1], locations[i][2]),
map: carte,
cursor:locations[i][0],
title: locations[i][0]
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
