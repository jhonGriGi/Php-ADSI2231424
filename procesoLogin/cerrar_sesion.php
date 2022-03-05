<?php
session_start();
setcookie('compras', $cantidad_compras, time() - 60, "/");
session_abort();
session_destroy();

header('Location:login.php');
