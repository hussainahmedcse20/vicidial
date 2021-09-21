<?php
session_start();
require 'conf/db.php';
require 'conf/sql_operation.php';
$sqlO = new sql_operation;
$msg = null;
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * from vicidial_users where user ='" . $username . "' AND pass='" . $password . "'";
    $row = $sqlO->sql_execution($sql);


    if ($row['user_level'] == 1) {
        header('location:agent/home.php');
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_level'] = $row['user_level'];
    } elseif ($row['user_level'] == 9) {
        header('location:admin/index.php');
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_level'] = $row['user_level'];
    } else {
        $msg = "Invalid input";

    }


    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>iDial</title>

    <!-- All the css files here -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./assets/css/style.css"/>
</head>
<body>
<section>
    <div class="login">
        <div class="top-bar">
            <img src="./assets/images/dashboard/iDIAL.png" alt=""/>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="left">
                    <img src="./assets/images/login/sideImg1.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right">
                    <h3>Log In</h3>

                    <form method="POST" action="" autocomplete="off">
                        <div class="login-options">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                       value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Administration
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                       value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    TimeClock
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                       value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Agent
                                </label>
                            </div>
                        </div>
                        <?php

                        if (isset($msg)) {

                            echo '<span class="error-msg" > Invalid input </span >';

                        }
                        ?>

                        <div class="form-group">
                            <input type="text" id="email" name="username" class="form-control" required>
                            <label class="form-control-placeholder" for="email">Username</label>

                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" required>
                            <label class="form-control-placeholder" for="password">Password</label>
                        </div>


                        <!-- Will be needed later -->

                        <!-- <div class="remember-me">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Remember Me
                                </label>
                              </div>
                        </div> -->

                        <!-- Will be needed later -->
                        <input type="submit" class="btn btn-primary btn-block" value="Log In" name="submit"/>

                    </form>
                    <div class="footer">
                        <div class="footer-links">
                            <a href="#"><span></span> About iBOS</a>
                            <a href="#"><span></span> About iBMS</a>
                            <a href="#"><span></span> Condition of use</a>
                            <a href="#"><span></span> Privacy Notice</a>
                            <a href="#"><span></span> Need help?</a>
                        </div>
                        <p>Copyright &copy 2021 iBOS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- All the js files here -->
<script src="./assets/js/jquery.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/chart.min.js"></script>
<script src="./assets/js/custom.js"></script>
</body>
</html>


<!-- Tazbin Ahad -->