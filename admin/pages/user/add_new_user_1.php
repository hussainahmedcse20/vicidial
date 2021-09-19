<?php
require '../include/user.php';
$users = new user();

if (isset($_GET['id'])) {
    $usereId = $_GET['id'];
    $sql = "Select * from vicidial_users where user_id=$usereId";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result);
}


if (isset($_POST['submit'])) {
//    $user_id = $_POST['user_id'];
//    $user = $_POST['user'];
//    $full_name = $_POST['full_name'];
//    $pass = $_POST['pass'];
//    $user_level = $_POST['user_level'];
//    $user_group = $_POST['user_group'];
//    $voicemail_id = $_POST['voicemail_id'];
//    $email = $_POST['email'];
//    $mobile_number = $_POST['mobile_number'];
//    $user_code = $_POST['user_code'];
//    $territory = $_POST['territory'];
//    $user_nickname = $_POST['user_nickname'];
//    $active = $_POST['active'];

    $user['user_id'] = $_POST['user_id'];
    $user['user'] = $_POST['user'];
    $user['full_name'] = $_POST['full_name'];
    $user['pass'] = $_POST['pass'];
    $user['user_level'] = $_POST['user_level'];
    $user['user_group'] = $_POST['user_group'];
    $user['voicemail_id'] = $_POST['voicemail_id'];
    $user['email'] = $_POST['email'];
    $user['mobile_number'] = $_POST['mobile_number'];
    $user['user_code'] = $_POST['user_code'];
    $user['territory'] = $_POST['territory'];
    $user['user_nickname'] = $_POST['user_nickname'];
    $user['active'] = $_POST['active'];
    $sqlUpdate = "UPDATE `vicidial_users` SET `user`='" . $user['user'] . "',full_name='" . $user['full_name'] . "',pass='" . $user['pass'] . "',user_level=" . $user['user_level'] . ",user_group='" . $user['user_group'] . "',voicemail_id='" . $user['user'] . "',mobile_number='" . $user['mobile_number'] . "',email='" . $user['email'] . "',user_code='" . $user['user_code'] . "',territory='" . $user['territory'] . "',user_nickname='" . $user['user_nickname'] . "',active='" . $user['active'] . "'  WHERE user_id =" . $user['user_id'];
    if ($result = mysqli_query($conn, $sqlUpdate)) {
        $msg = "Data Update Success";
    } else {
        $msg = "Data Update Faield";
    }


}
?>

<!-- Code goes here -->

<div class="add-user-step-1">
    <div class="back-btn-title-delete">
        <a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <h4>User Details</h4>
        <a href="#" data-toggle="modal" data-target="#confirmDelete"><img
                    src="../assets/images/common-icons/delete.png" alt=""></a>
    </div>

    <div class="my-step-link">
        <div class="step mx-5 ">
            <a href="?c=user&v=add_new_user_1&id=<?= $user['user_id'] ?>">Option 1</a>
        </div>
        <div class="step mx-5">

            <a href="?c=user&v=add_new_user_2&id=<?= $user['user_id'] ?>">Option 2</a>
        </div>
        <div class="step mx-5">

            <a href="?c=user&v=add_new_user_3&id=<?= $user['user_id'] ?>">Option 3</a>
        </div>
    </div>
    <div class="my-form">
        <h3>Modify Users Record</h3>
        <form action="" method="POST">
            <!--            <div class="alert alert-danger" role="alert">-->
            <!--                Invalid Inputs!-->
            <!--            </div>-->
            <div class="row">
                <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
                <div class="my-input-with-help col-12 col-md-6 col-lg-4">
                    <div class="form-group my-input">

                        <input type="text" class="form-control" id="user-number" name="user"
                               value="<?= $user['user'] ?>"
                               aria-describedby="user-no" required>
                        <label for="user-number">User Number</label>
                    </div>
                </div>
                <div class="my-input-with-help col-12 col-md-6 col-lg-4">
                    <div class="form-group my-input">

                        <input type="text" class="form-control" id="full_name" name="full_name"
                               value="<?= $user['full_name'] ?>"
                               aria-describedby="full_name" required>
                        <label for="full_name">Full Name</label>
                    </div>
                </div>
                <div class="my-input-with-help col-12 col-md-6 col-lg-4">
                    <div class="form-group my-input">

                        <input type="text" class="form-control" id="pass" name="pass"
                               aria-describedby="pass" value="<?= $user['full_name'] ?>" required>
                        <label for="pass">Password</label>
                    </div>
                </div>
                <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                    <div class="my-dropdown">

                        <select name="user_level" id="user_level" required>
                            <option></option>
                            <?php
                            for ($i = 1; $i <= 9; $i++) {
                                if ($i == $user['user_level']) {
                                    echo '<option value="' . $i . '" selected>' . $i . '</option>';
                                } else {
                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                }
                            }

                            ?>

                        </select>
                        <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                        <label for="user_level">User Level</label>
                    </div>
                </div>

                <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                    <div class="my-dropdown">
                        <select name="user_group" id="user_group" required>
                            <option></option>
                            <?php
                            $usersGroups = $users->userGroup();
                            while ($usersGroup = mysqli_fetch_array($usersGroups)) {

                                if ($usersGroup['user_group'] == $user['user_group']) {
                                    echo '<option value="' . $usersGroup['user_group'] . '" selected>' . $usersGroup['user_group'] . '</option>';
                                } else {
                                    echo '<option value="' . $usersGroup['user_group'] . '">' . $usersGroup['user_group'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                        <label for="user_group">User Group</label>
                    </div>
                </div>

                <div class="voicemail-group col-12 col-md-6 col-lg-4">
                    <div class="my-input-with-help  ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="voicemail_id"
                                   name="voicemail_id" value="<?= $user['voicemail_id'] ?>"
                                   aria-describedby="voicemail_id" required>
                            <label for="voicemail_id">Voicemail ID</label>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <table class="my-table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Voicemail Boxes</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td onclick="myFunction()" data-dismiss="modal">102</td>
                                            <td>gs102 - Test Admin Phone</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td onclick="myFunction()" data-dismiss="modal">3001
                                            </td>
                                            <td>3001 -</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td onclick="myFunction()" data-dismiss="modal">8300
                                            </td>
                                            <td>callin - Dial-in Agent Phone</td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->


                <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                    <div class="form-group my-input">

                        <input type="text" class="form-control" id="email" name="email"
                               aria-describedby="email" value="<?= $user['email'] ?>" required>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                    <div class="form-group my-input">

                        <input type="text" class="form-control" id="mobile_number" name="mobile_number"
                               aria-describedby="mobile_number" value="<?= $user['mobile_number'] ?>" required>
                        <label for="mobile_number">Mobile Number</label>
                    </div>
                </div>
                <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                    <div class="form-group my-input">

                        <input type="text" class="form-control" id="user_code" name="user_code"
                               aria-describedby="user_code" value="<?= $user['user_code'] ?>" required>
                        <label for="user_code">User Code (Optional)</label>
                    </div>
                </div>
                <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                    <div class="form-group my-input">

                        <input type="text" class="form-control" id="territory"
                               name="territory" aria-describedby="territory" value="<?= $user['territory'] ?>" required>
                        <label for="territory">User Territory (Optional)</label>
                    </div>
                </div>

                <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                    <div class="form-group my-input">

                        <input type="text" class="form-control" id="user_nickname" name="user_nickname"
                               aria-describedby="user_nickname" value="<?= $user['user_nickname'] ?>" required>
                        <label for="user_nickname">User Nickname (Optional)</label>
                    </div>
                </div>

                <div class="my-switch-field col-12 col-md-6 col-lg-4">
                    <h6>Active</h6>
                    <div class="switch-field ">
                        <?php
                        if ($user['active'] == "Y") {
                            echo '   <input type="radio" id="active-radio-one" name="active" value="Y" check="yes"
                               checked/>
                        <label for="active-radio-one">Yes</label>';

                            echo '<input type="radio" id="active-radio-two" name="active" value="N" check="no"/>
                        <label for="active-radio-two">No</label>';
                        } else {
                            echo '   <input type="radio" id="active-radio-one" name="active" value="Y" check="yes"
                               />
                        <label for="active-radio-one">Yes</label>';

                            echo '<input type="radio" id="active-radio-two" name="active" value="N" check="no" checked/>
                        <label for="active-radio-two">No</label>';
                        }

                        ?>


                    </div>
                </div>

            </div>
            <input class="my-btn-secondary mt-md-4 cancel-btn" type="reset" value="Cancel">
            <input class="my-btn-primary mt-md-4 submit-btn" type="submit" value="Submit" name="submit">
        </form>
    </div>
</div>

<div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Are you sure that you want to delete this user?</h6>
            </div>
            <div class="modal-footer">
                <a href="#" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                <a href="#" type="button" class="btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- Code goes here -->