
<?php

session_start();
define('USER_TIME_SESION', 2);

if (isset($_SESSION['name']) && isset($_SESSION['timeout'])) {
    // Calcular el tiempo de sesion
    $session_time = time() - $_SESSION['timeout'];
    echo "session_time > " . $_SESSION['timeout'];

    if ($session_time >= 60 * USER_TIME_SESION) {
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