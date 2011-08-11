<html>
    <head>
        <title>Insert Deals</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.3, maximum-scale=1.3, user-scalable=no" /> 
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 
        <script type="text/javascript"> 
     
          function codeAddress() {
            var geocoder = new google.maps.Geocoder();
            var address = document.getElementById("deal1address").value;
            geocoder.geocode( { 'address': address}, function(results, status) {
              if (status == google.maps.GeocoderStatus.OK) {
                var latitudeDom = document.getElementById("deal1latitude");
                var longitudeDom = document.getElementById("deal1longitude");
                latitudeDom.value = results[0].geometry.location.lat();
                longitudeDom.value = results[0].geometry.location.lng();
              } else {
                alert("Geocode was not successful for the following reason: " + status);
              }
            });
          }
          
        </script> 
        
    </head>
    <body>
        <?php
            $status = $_GET['status'];
            if ($status == "Success"){
                echo "<div>Success</div>";
            }
        ?>
        <form action="insert.php" method="get">
            <div>
                <input type="button" value="Populate Lat & Lng" onclick="codeAddress()">
                <input type="submit" value="Submit Deal"/>
            </div>
            <div>Deal</div> 
            <div>Name: <input type="text" id="deal1name" name="deal1name"/></div>
            <div>Address: <input type="text" id="deal1address" name="deal1address"/></div>
            <div>Deal: <input type="text" id="deal1dealinfo" name="deal1dealinfo"/></div>
            <div>Latitude: <input type="text" id="deal1latitude" name="deal1latitude"/></div>
            <div>Longitude: <input type="text" id="deal1longitude" name="deal1longitude"/></div>
        </form>   
    </body>
</html>
