<?php
session_start();
print_r($_SESSION);
unset($_SESSION['user_level']);
header('location:../');