<?php
require '../include/user.php';
$user = new user();
$usersql = "Select user,user_id, full_name, user_level, user_group, active from vicidial_users";
$usersresult = mysqli_query($conn, $usersql);


$eUser = "";
$full_name = "";
$user_level = "";
$user_group = "";
$pass = "";
$error = 0;

if (isset($_POST['add_user'])) {
    $user->user = $_POST['user'];
    $user->full_name = $_POST['full_name'];
    $user->user_level = $_POST['user_level'];
    $user->user_group = $_POST['user_group'];
    $user->pass = $_POST['pass'];


    $sql="INSERT INTO vicidial_users (user, full_name, user_level, user_group, pass) VALUES ('".$user->user."','".$user->full_name."','".$user->user_level."','".$user->user_group."','".$user->pass."')";
    mysqli_query($conn,$sql);

} else {
    $user->user = "";
    $user->full_name = "";
    $user->user_level = "";
    $user->user_group = "";
    $user->pass = "";
}

?>

<div>
    <div class="show-users">

        <!-- this is the top navbar that containes add user, copy user, time sheet and search option -->
        <div class="my-nav">
            <ul>
                <li>
                    <a class="nav-active" href="#add-user" data-toggle="modal" data-target="#add-user"><i
                                class="fa fa-plus-circle" aria-hidden="true"></i>
                        Add User</a>
                </li>
                <li>
                    <a href="#copy-user" data-toggle="modal" data-target="#copy-user"><i
                                class="fa fa-clone" aria-hidden="true"></i> Copy User</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Time Sheet</a>
                </li>
                <li>
                    <input type="search" placeholder="Search User" name="search" id="search-user">
                </li>
            </ul>
        </div>
        <!-- this is where top navbar ends -->

        <!-- user list table start -->
        <div class="table-responsive my-table">
            <div class="table-top">
                <h4>User List</h4>
                <div class="my-filter-dropdown">
                    <div class="dropdown">
                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/images/common-icons/filter_list.png" alt="">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                          d="M16.5 15.5C18.22 15.5 20.25 16.3 20.5 16.78V17.5H12.5V16.78C12.75 16.3 14.78 15.5 16.5 15.5M16.5 14C14.67 14 11 14.92 11 16.75V19H22V16.75C22 14.92 18.33 14 16.5 14M9 13C6.67 13 2 14.17 2 16.5V19H9V17.5H3.5V16.5C3.5 15.87 6.29 14.34 9.82 14.5A5.12 5.12 0 0 1 11.37 13.25A12.28 12.28 0 0 0 9 13M9 6.5A1.5 1.5 0 1 1 7.5 8A1.5 1.5 0 0 1 9 6.5M9 5A3 3 0 1 0 12 8A3 3 0 0 0 9 5M16.5 8.5A1 1 0 1 1 15.5 9.5A1 1 0 0 1 16.5 8.5M16.5 7A2.5 2.5 0 1 0 19 9.5A2.5 2.5 0 0 0 16.5 7Z"/>
                                </svg>
                                </i> All</a>
                            <a class="dropdown-item" href="#">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                          d="M21.1,12.5L22.5,13.91L15.97,20.5L12.5,17L13.9,15.59L15.97,17.67L21.1,12.5M11,4A4,4 0 0,1 15,8A4,4 0 0,1 11,12A4,4 0 0,1 7,8A4,4 0 0,1 11,4M11,6A2,2 0 0,0 9,8A2,2 0 0,0 11,10A2,2 0 0,0 13,8A2,2 0 0,0 11,6M11,13C11.68,13 12.5,13.09 13.41,13.26L11.74,14.93L11,14.9C8.03,14.9 4.9,16.36 4.9,17V18.1H11.1L13,20H3V17C3,14.34 8.33,13 11,13Z"/>
                                </svg>
                                Active</a>
                        </div>
                    </div>
                </div>
            </div>
            <table class="all-user-table table table-hover">
                <thead>
                <tr>
                    <th scope="col"><a href="#">USER</a></th>
                    <th scope="col"><a href="#">FULL NAME</a></th>
                    <th scope="col"><a href="#">LEVEL</a></th>
                    <th scope="col"><a href="#">GROUP</a></th>
                    <th>ACTIVE</th>
                    <th>MODIFY</th>
                    <th>STATS</th>
                    <th>STATUS</th>
                    <th>TIME</th>
                </tr>
                </thead>
                <tbody>

                <?php

                while ($usersrow = mysqli_fetch_array($usersresult)) {
                    echo '<tr>';
                    echo '<td>' . $usersrow['user'] . '</td>';
                    echo '<td>' . $usersrow['full_name'] . '</td>';
                    echo '<td>' . $usersrow['user_level'] . '</td>';
                    echo '<td>' . $usersrow['user_group'] . '</td>';
                    if ($usersrow['active'] == 'Y') {
                        echo '<td><span class="active-yes">' . 'Yes' . '</span></td>';
                    } else {
                        echo '<td><span class="active-no">' . 'No' . '</span></td>';
                    }

                    echo '<td><a href="?c=user&v=add_new_user_1&id=' . $usersrow['user_id'] . '">MODIFY</a></td>';
                    echo '<td><a href="?c=user&v=user-stats&id=' . $usersrow['user_id'] . '">STATS</a></td>';
                    echo '<td><a href="?c=user&v=user_status&id=' . $usersrow['user_id'] . '">STATUS</a></td>';

                    echo '<td><a href="' . $usersrow['user_id'] . '">TIME</a></td>';


                    echo '</tr>';
                }

                ?>

                </tbody>
            </table>
        </div>
        <!-- user list table ends -->

    </div>
</div>

<!-- Copy user modal starts here -->
<div class="modal fade" id="copy-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Copy User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">

                    <div class="row">
                        <div class="my-input-with-help col-6">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="new-user-number" name="new-user-no"
                                       aria-describedby="new-user-no" required>
                                <label for="new-user-number">New User Number</label>
                            </div>
                            <span class="error-msg">Error Msg</span>
                        </div>
                        <div class="my-input-with-help col-6">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="full-name" name="full-name"
                                       aria-describedby="full-name" required>
                                <label for="full-name">Full Name</label>
                            </div>
                            <span class="error-msg">Error Msg</span>
                        </div>
                        <div class="my-input-with-help col-6">
                            <div class="form-group my-input">

                                <input type="password" class="form-control" id="password" name="password"
                                       aria-describedby="password" required>
                                <label for="password">password</label>
                            </div>
                            <span class="error-msg">Error Msg</span>
                        </div>
                        <div class="my-dropdown-with-help col-6">
                            <div class="my-dropdown">
                                <select name="source-user" id="source-user" required>
                                    <option></option>
                                    <option value="3001">3001 - 3001</option>
                                    <option value="6666">6666 - Admin</option>
                                    <option value="7777">7777 - Afzal Hossain</option>
                                    <option value="ibosadmin">ibosadmin - iBos Admin</option>
                                </select>
                                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                <label for="source-user">Source User</label>
                            </div>
                            <span class="error-msg">Error Msg</span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary my-btn-secondary"
                            data-dismiss="modal">Cancel
                    </button>
                    <input class="my-btn-primary" type="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Copy user modal ends here -->

<!-- Add user modal starts here -->


<div class="modal fade" id="add-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">

                    <div class="row">
                        <div class="my-input-with-help col-6">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="new-user-number" name="user"
                                       aria-describedby="new-user-no" required>
                                <label for="new-user-number">User Name</label>
                            </div>

                        </div>
                        <div class="my-input-with-help col-6">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="full-name" name="full_name"
                                       aria-describedby="full-name" required>
                                <label for="full-name">Full Name</label>
                            </div>

                        </div>
                        <div class="my-dropdown-with-help col-6">
                            <div class="my-dropdown">
                                <select name="user_level" id="user-level" required>
                                    <option></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                <label for="user-level">User Level</label>
                            </div>

                        </div>
                        <div class="my-dropdown-with-help col-6">
                            <div class="my-dropdown">
                                <select name="user_group" id="user-group" required>
                                    <option></option>
                                    <?php
                                    $userGroups = $user->userGroup();
                                    while ($userGroup = mysqli_fetch_array($userGroups)) {
                                        echo '<option>' . $userGroup['user_group'] . '</option>';
                                    }
                                    ?>


                                </select>
                                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                <label for="user-group">User Group</label>
                            </div>

                        </div>
                        <div class="my-input-with-help col-6">
                            <div class="form-group my-input">

                                <input type="password" class="form-control" id="password" name="pass"
                                       aria-describedby="password" required>
                                <label for="password">password</label>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary my-btn-secondary"
                            data-dismiss="modal">Cancel
                    </button>
                    <input class="my-btn-primary" type="submit" value="submit" name="add_user">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add user modal ends here -->