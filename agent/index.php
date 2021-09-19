<?php
session_start();

print_r($_SESSION);
if ($_SESSION['user_level'] == 1) {
    header('location:../index.php');
}
?>


