<?php 
    require_once "./procesar.php";
?>
<div class="row">
    <div class="col-8 offset-2 bg-success py-2">
        <h4 class="mt-2 text-center">EL nombre de la persona es: <?php echo $name; ?> </h4>
        <h4 class="mt-2 text-center">EL correo de la persona es: <?php echo $email; ?> </h4>
        <h4 class="mt-2 text-center">Ubicado en la ciudad de: <?php echo $city; ?></h4>
        <h3 class="text-center">La persona es mayor de edad</h3>
    </div>
</div>