
    <div>
      <center id="caminos">

      </center>
    </div>

    <select id="waypoints" style="Display: none">

    </select>

    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 20.1275586, lng: -98.734081}
        });
        directionsDisplay.setMap(map);

        $('#select_ruta').change(function(event) {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {

        var array;

        $.ajax({
          url: '<?= base_url('Routes/Caminos') ?>',
          type: 'POST',
          data: {ruta: $('#select_ruta').val()},
          success: function (response)
          {
            $('#caminos').html(response);
            $.ajax({
              url: '<?= base_url('Routes/Array') ?>',
              type: 'POST',
              data: {ruta: $('#select_ruta').val()},
              success: function (response3) {
                array = response3.split(';');

                if(array.length > 2)
                {
                  var waypts = [];
                  for (var i = 1; i <= array.length - 2; i++)
                  {
                      waypts.push({
                        location: ' ' + array[i],
                        stopover: true
                      });
                  }
                  directionsService.route({
                    origin: array[0],
                    destination: array[array.length - 1],
                    waypoints: waypts,
                    optimizeWaypoints: true,
                    travelMode: 'DRIVING'
                  }, function(response, status) {
                    if (status === 'OK') {
                      directionsDisplay.setDirections(response);
                      var route = response.routes[0];
                    } else {
                      window.alert('Error al obtener la informacion: ' + status);
                    }
                  });
                }
                else
                {
                  var waypts = [];
                  for (var i = 1; i <= array.length - 2; i++)
                  {
                      waypts.push({
                        location: ' ' + array[i],
                        stopover: true
                      });
                  }
                  directionsService.route({
                    origin: array[0],
                    destination: array[array.length - 1],
                    waypoints: waypts,
                    optimizeWaypoints: true,
                    travelMode: 'DRIVING'
                  }, function(response, status) {
                    if (status === 'OK') {
                      directionsDisplay.setDirections(response);
                      var route = response.routes[0];
                    } else {
                      window.alert('Error al obtener la informacion: ' + status);
                    }
                  });
                }
              }
            });

          }
        });

      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVqy3gsdJ2jNL1ocIciYph6Y7byQ8vEck&callback=initMap">
    </script>
