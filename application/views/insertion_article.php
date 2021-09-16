<style type="text/css">


    #carteId {
      height: 100%
    }
  </style>


<div class="container py-5">
    <h2 style="text-align:center" class="h2" >Fampidirina Lahatsoratra</h2>
    <br>
    <hr>
    <div class="row py-5">
        <form class="col-md-9 m-auto" action="<?php echo site_url("Controller/insertion") ?>" method="post" role="form">
          <input type="hidden" name="latitude" id="latitude" value="###">
          <input type="hidden" name="longitude" id="longitude" value="###">
            <h3 class="h3">Hampiditra sary : </h3>
                <br>
                <div class="row">
                    <input type="file" name="nomfichier">
                </div>
                <br>
                <br>
            <h3 class="h3">Hanoratra Lahatsoratra : </h3>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Lohateny</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Lohateny">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputsubject">Sokajy</label>
                        <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Sokajy">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputsubject">Mpanoratra</label>
                        <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Mpanoratra">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Famelabelarana</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Famelabelarana" rows="8"></textarea>
                </div>
                <br>
            <h3 class="row">Hampiditra ny misy azy amin'ny sarin-tany : </h3>
            <section class="contact_section layout_padding-bottom layout_padding2-top">
                <div class="container container-bg">
                <div class="row">
                    <div class="col-lg-8 col-md-7 px-0" style="height:500px" >
                    <div id="carteId">LA CARTE</div>
                    </div>
                    <div class="col-md-5 col-lg-4 px-0">
                        <button class="btn btn-success btn-lg px-3" >Annuler</button>

                    </div>
                </div>
                </div>
            </section>
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="submit" onclick="annuler()" value="lol" class="btn btn-success btn-lg px-3">Mampiditra</button>
                </div>
            </div>
        </form>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFX2v5z34vYKl0We4nHV4KFV1j6uVsltg&callback=main&libraries=places"></script>


<script type="text/javascript" src="<?php echo site_url("assets/js/jquery-3.4.1.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo site_url("assets/js/bootstrap.js") ?>"></script>
<script type="text/javascript" src="<?php echo site_url("assets/js/owl.carousel.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo site_url("assets/js/custom.js") ?>"></script>
<script type="text/javascript">
// function initialize() {
//   var mapOptions =
//       {
//             center: new google.maps.LatLng(-18.9651023,46.3496537),
//             zoom: 6,
//             mapTypeId:google.maps.MapTypeId.ROADMAP
//         };
//       var carte = new google.maps.Map(document.getElementById("carteId"),
//       mapOptions);
//
//        let infoWindow = new google.maps.InfoWindow({
//                 content: "Tondroy ilay toerana tadiavina",
//                 position: mapOptions.center,
//             });
//             infoWindow.open(carte);
//
//             var listMarkers = new Array();
//     var taille = 0;
//     google.maps.event.addListener(carte, 'click', function(event) {
//       marks = new google.maps.Marker({
//       position: event.latLng, //coordonnée de la position du clic sur la carte
//       map: carte, //la carte sur laquelle le marqueur doit être affiché
//     });
//     google.maps.event.addListener(marks, "click", function() {
//       infowindow = new google.maps.InfoWindow({
//         content: maison[taille]
//       });
//       infowindow.open(carte, marks);
//     });
//     listMarkers.push(marks);
//     taille++;
//   });
//
// }
//       google.maps.event.addDomListener(window, 'load', initialize);
  function inserer() {
      listMarkers.pop();
      for( let i = 0 ; i < listCoord.length ; i++)
       {
          document.getElementById('latitude').value = document.getElementById('latitude').value+listCoord[i]['lat']+"###";
          document.getElementById('longitude').value =  document.getElementById('longitude').value+listCoord[i]['long']+"###";
          alert(document.getElementById('latitude').value);
          alert(document.getElementById('longitude').value);
        }
      }
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
