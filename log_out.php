<?php
session_start();


if (session_destroy()) {
header("location:index.php");
} else {
    die("No pudo cerrar sesion");
}
?>