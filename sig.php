<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<!-- attribut style: initialisation css ,afficher la carte sur la page entiere   -->

<style type="text/css">

html { height: 100% }
body { height: 100%; margin: 0; padding: 0 }
      #carteId{ height: 100% }
</style>
<!-- Ce script charge l'api google maps  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFX2v5z34vYKl0We4nHV4KFV1j6uVsltg&callback=main&libraries=places"></script>

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

     let infoWindow = new google.maps.InfoWindow({
              content: "Tondroy ilay toerana tadiavina",
              position: mapOptions.center,
          });
          infoWindow.open(carte);

          var listeMaison = new Array();
  var parcours = new Array();
  var i = 0;
  var taille = 0;
  google.maps.event.addListener(carte, 'click', function(event) {
    marks = new google.maps.Marker({
    position: event.latLng, //coordonnée de la position du clic sur la carte
    map: carte, //la carte sur laquelle le marqueur doit être affiché
  });
  google.maps.event.addListener(marks, "click", function() {
    infowindow = new google.maps.InfoWindow({
      content: maison[taille]
    });
    infowindow.open(carte, marks);
  });
  listeMaison.push(marks);
  taille++;
  parcours.push(event.latLng);
  console.log(new google.maps.LatLng(-18.9171853,47.8112976));
});

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
</head>
<body >
      <!-- endroit a afficher la carte  -->
      <div id="carteId">
      </div>

</body>
</html>
