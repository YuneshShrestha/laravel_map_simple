<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map {
           height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    {{-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script> --}}

</head>
<body>
    <button class="btn" onclick=updatePosition()>Update Position</button>
    {{-- <p>map</p> --}}
    <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8kUGm0OiccZ11SH55Y4VKQbqORf5-OV0&callback=initMap&v=weekly"
      async
    ></script>
    <script>
        let map;
        let marker;
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru = { lat: -25.344, lng: 131.036 };
            // The map, centered at Uluru
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 18,
                center: uluru,
            });
            // The marker, positioned at Uluru
            marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
        function updatePosition()
        {
            const nepal = { lat: 26.8065, lng: 87.2846 };
            marker.setPosition(nepal);
            map.setCenter(nepal);
        }
        
    </script>
</body>
</html>