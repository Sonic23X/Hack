      <link rel="stylesheet" href="<?= base_url()?>resources/css/routes.css">

      <center>
        <br>
        <p class="title"><span class="fa fa-trash"></span> Rutas del Camión de Basura</p>
        <br>
        <form class="s_ruta">
          <span id="title_ru">Rutas Disponibles</span>
          <select id="select_ruta" class="form-control" style="width: 200px">
            <?php

              if($rutas == null)
              {
                ?>
                  <script type="text/javascript">
                    alert('Error al obtener las Rutas');
                  </script>
                <?php
              }
              else
              {
                ?>
                  <option value="" style="Display: none">Seleccione una Ruta</option>
                <?php
                foreach ($rutas->result() as $fila)
                {
                  foreach ($fila as $fil => $value)
                  {
                    if($fil == "no_ruta")
                    {
                      ?>
                        <option value="<?= $value ?>">Ruta <?= $value ?></option>
                      <?php
                    }
                  }
                }
              }
            ?>
          </select>
        </form>
      </center>

      <div class="container">
