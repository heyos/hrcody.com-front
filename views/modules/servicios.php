<?php

$name = Servicio::headerServicio();

?>
<div class="jumbotron header-simple contact text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $name; ?></h2>
                <p><a href="<?php echo BASE_URL; ?>">Inicio</a> / Servicios</p>
            </div>
        </div>
    </div>
</div>

<?php
    Servicio::rutaServiciosController();
?>

