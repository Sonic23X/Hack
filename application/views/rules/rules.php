    <link rel="stylesheet" href="<?= base_url()?>resources/css/rules.css">

    <center>
      <br>
      <p class="title"><span class="fa fa-bookmark"></span> Articulos referentes a la basura</p>
    </center>

    <div class="container">
      <?php
        if($reglas != null)
        {
          foreach ($reglas->result() as $fila) {
            foreach ($fila as $fil => $value) {
              if($fil == "descripcion")
              {
              ?>
              <div class="article">
                <div>
                  <center>
                    <span class="num">Articulo <?= $fila->numero ?></span>
                  </center>
                </div>
                <div class="text">
                  <?= $fila->descripcion ?>
                </div>
              </div>
              <?php
              }
            }
          }
        }
      ?>
    </div>
