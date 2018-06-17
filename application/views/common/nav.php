    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">
         <img src="<?= base_url() ?>resources/img/logo.png" alt="Logo" style="width:32px"><?= $name ?></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li <?php
            if($home)
            {
            ?>
            class="nav-item active"
            <?php
            }
            else
            {
            ?>
            class="nav-item"
            <?php
            }
            ?>
            ><a class="nav-link" href="<?= base_url() ?>"><span class="fa fa-home"></span> Inicio</a>
          </li>

          <li <?php
            if($rules)
            {
            ?>
            class="nav-item active"
            <?php
            }
            else
            {
            ?>
            class="nav-item"
            <?php
            }
            ?>
            ><a class="nav-link" href="<?= base_url('Rules') ?>"><span class="fa fa-clipboard-check"></span> Reglamento</a>
          </li>

          <li <?php
            if($center)
            {
            ?>
            class="nav-item active"
            <?php
            }
            else
            {
            ?>
            class="nav-item"
            <?php
            }
            ?>
            ><a class="nav-link" href="<?= base_url('Center') ?>"><span class="fa fa-truck-moving"></span> Basureros</a>
          </li>

          <li <?php
            if($routes)
            {
            ?>
            class="nav-item active"
            <?php
            }
            else
            {
            ?>
            class="nav-item"
            <?php
            }
            ?>
            ><a class="nav-link" href="<?= base_url('Routes') ?>"><span class="fa fa-road"></span> Rutas</a>
          </li>

          <li <?php
            if($about)
            {
            ?>
            class="nav-item active"
            <?php
            }
            else
            {
            ?>
            class="nav-item"
            <?php
            }
            ?>
            ><a class="nav-link" href="<?= base_url('About') ?>"><span class="fa fa-info-circle"></span> Acerca de</a>
          </li>

        </ul>
      </div>
    </nav>
