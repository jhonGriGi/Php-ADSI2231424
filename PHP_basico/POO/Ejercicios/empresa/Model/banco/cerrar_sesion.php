<?php

session_start();
session_destroy();
session_abort();

header('Location: ../../Views/banco/view_registrar_banco.php');

?>
