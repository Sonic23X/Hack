      <script>
        function myMap() {
          var mapCanvas = document.getElementById("map");
          var mapOptions = {
            center: new google.maps.LatLng(20.1275586, -98.734081), zoom: 10
          };
          var map = new google.maps.Map(mapCanvas, mapOptions);

          <?php

          if($basureros != null)
          {
            foreach ($basureros->result() as $fila) {
              foreach ($fila as $fil => $value) {
                if($fil == "nombre")
                {
                ?>
                var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(<?= $fila->lon ?>, <?= $fila->lat ?>),
                  map: map,
                  title: '<?= $fila->nombre ?>'
                });
                <?php
                }
              }
            }
          }

          ?>
        }
      </script>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVqy3gsdJ2jNL1ocIciYph6Y7byQ8vEck&callback=myMap"></script>
    </div>
