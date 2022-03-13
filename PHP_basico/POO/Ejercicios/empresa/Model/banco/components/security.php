<?php
if (!isset($_SESSION['sesion_actual'])) {
  header('Location: ../../Views/banco/view_registrar_banco.php?error=1');
}
?>
