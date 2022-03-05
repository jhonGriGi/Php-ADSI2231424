
<?php

session_start();
define('USER_TIME_SESION', 2);

if (isset($_SESSION['name']) && isset($_SESSION['timeout'])) {
    // Calcular el tiempo de sesion
    $session_time = time() - $_SESSION['timeout'];

    if ($session_time >= 60 * USER_TIME_SESION) {
        setcookie('compras', $cantidad_compras, time() + 365 * 24 * 60 * 60, "/");
        session_abort();
        session_destroy();
        header('Location:login.php?error=2');
    } else {
        $_SESSION['timeout'] = time();
    }
} else {
    header('Location:login.php?error=3');
}

?>