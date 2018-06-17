    <link rel="stylesheet" href="<?= base_url()?>resources/css/tarjet_p.css">

    <center>
      <br>
      <p class="title"><span class="fa fa-users"></span> Miembros del equipos</p>
    </center>

    <div class="container">
      <?php
        if($person != null)
        {
          foreach ($person->result() as $persona) {
            foreach ($persona as $fila => $value) {
              if($fila == "nombre")
              {
              ?>
              <div class="tarjet_person">
                <div class="left">
                  <img class="foto" src="<?= base_url()?>resources/img/<?= $persona->img ?>" alt="Foto">
                </div>

                <div class="right">
                  <span class="name_p">
                    <?= $value ?>
                  </span>
                  <br>
                  <span class="carrier">
                    <?= $persona->carrera ?>
                  </span>
                  <p class="desc">
                    <?= $persona->descripcion ?>
                  </p>
                </div>
              </div>
              <?php
              }
            }
          }
        }
      ?>
    </div>
