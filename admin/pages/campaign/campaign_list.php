<?php

$campaign = new campaign();
$sql = "Select campaign_id, campaign_name, active, user_group, dial_method,hopper_level, lead_order,dial_statuses  from vicidial_campaigns";
$reslut = mysqli_query($conn, $sql);
$msg=0;
if (isset($_POST['add_campaign'])) {
    $campaign->campaign_id = $_POST['campaign_id'];
    $campaign->campaign_name = $_POST['campaign_name'];
    $campaign->campaign_description = $_POST['campaign_description'];
    $campaign->user_group = $_POST['user_group'];
    $campaign->active = $_POST['active'];
    $campaign->park_file_name = $_POST['park_file_name'];
    $campaign->web_form_address = $_POST['web_form_address'];
    $campaign->allow_closers = $_POST['allow_closers'];
    $campaign->hopper_level = $_POST['hopper_level'];
    $campaign->auto_dial_level = $_POST['auto_dial_level'];
    $campaign->next_agent_call = $_POST['next_agent_call'];
    $campaign->local_call_time = $_POST['local_call_time'];
    $campaign->voicemail_ext = $_POST['voicemail_ext'];
    $campaign->script_id = $_POST['script_id'];
    $campaign->campaign_script_two = $_POST['campaign_script_two'];
    $campaign->get_call_launch = $_POST['get_call_launch'];
    $sql_New = "INSERT INTO vicidial_campaigns (campaign_id,campaign_name,campaign_description,user_group,active,park_file_name,web_form_address,allow_closers,hopper_level,auto_dial_level,next_agent_call,local_call_time,voicemail_ext,campaign_script_two,get_call_launch) VALUES ('" . $campaign->campaign_id . "','" . $campaign->campaign_name . "','" . $campaign->campaign_description . "','" . $campaign->user_group . "','" . $campaign->user_group . "','" . $campaign->active . "','" . $campaign->park_file_name . "','" . $campaign->web_form_address . "','" . $campaign->allow_closers . "','" . $campaign->hopper_level . "','" . $campaign->auto_dial_level . "','" . $campaign->next_agent_call . "','" . $campaign->local_call_time . "','" . $campaign->voicemail_ext . "','" . $campaign->campaign_script_two . "')";


    if(mysqli_query($conn, $sql_New)){
        $msg=1;
    }else{
        $msg=2;
    }



}


?>
<!--  -->
<div>
    <div class="show-users">
        <!-- this is the top navbar that containes add user, copy user, time sheet and search option -->
        <?php

     if($msg==1){
         echo '<div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Data Insert Succefull.
                          </div>';
     }elseif($msg==2){
         echo '<div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Failed!</strong> Data Insert Failed.
                          </div>';
     }else{

     }
     ?>
        <div class="my-nav">
            <ul>
                <li>
                    <a class="nav-active" href="#add-user" data-toggle="modal" data-target="#add-user"><i
                            class="fa fa-plus-circle" aria-hidden="true"></i>
                        Add New Campaign</a>
                </li>
                <li>
                    <a href="#copy-user" data-toggle="modal" data-target="#copy-user"><i class="fa fa-clone"
                            aria-hidden="true"></i> Copy Campaign</a>
                </li>
                <li>
                    <input type="search" placeholder="Search" name="search" id="search-user">
                </li>
            </ul>
        </div>
        <!-- this is where top navbar ends -->

        <!-- user list table start -->
        <div class="table-responsive my-table">
            <div class="table-top">
                <h4>Campaign List</h4>
                <div class="my-filter-dropdown">
                    <div class="dropdown">
                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="../../assets/images/common-icons/filter_list.png" alt="">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M16.5 15.5C18.22 15.5 20.25 16.3 20.5 16.78V17.5H12.5V16.78C12.75 16.3 14.78 15.5 16.5 15.5M16.5 14C14.67 14 11 14.92 11 16.75V19H22V16.75C22 14.92 18.33 14 16.5 14M9 13C6.67 13 2 14.17 2 16.5V19H9V17.5H3.5V16.5C3.5 15.87 6.29 14.34 9.82 14.5A5.12 5.12 0 0 1 11.37 13.25A12.28 12.28 0 0 0 9 13M9 6.5A1.5 1.5 0 1 1 7.5 8A1.5 1.5 0 0 1 9 6.5M9 5A3 3 0 1 0 12 8A3 3 0 0 0 9 5M16.5 8.5A1 1 0 1 1 15.5 9.5A1 1 0 0 1 16.5 8.5M16.5 7A2.5 2.5 0 1 0 19 9.5A2.5 2.5 0 0 0 16.5 7Z" />
                                </svg>
                                </i> All</a>
                            <a class="dropdown-item" href="#">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M21.1,12.5L22.5,13.91L15.97,20.5L12.5,17L13.9,15.59L15.97,17.67L21.1,12.5M11,4A4,4 0 0,1 15,8A4,4 0 0,1 11,12A4,4 0 0,1 7,8A4,4 0 0,1 11,4M11,6A2,2 0 0,0 9,8A2,2 0 0,0 11,10A2,2 0 0,0 13,8A2,2 0 0,0 11,6M11,13C11.68,13 12.5,13.09 13.41,13.26L11.74,14.93L11,14.9C8.03,14.9 4.9,16.36 4.9,17V18.1H11.1L13,20H3V17C3,14.34 8.33,13 11,13Z" />
                                </svg>
                                Active</a>
                        </div>
                    </div>
                </div>
            </div>
            <table class="all-user-table table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><a href="#">CAMP ID</a></th>
                        <th scope="col"><a href="#">NAME</a></th>
                        <th scope="col"><a href="#">ACTIVE</a></th>
                        <th scope="col"><a href="#">GROUP</a></th>
                        <th scope="col">DIAL-METHOD</th>
                        <th scope="col">LEVEL</th>
                        <th scope="col">LEAD-ORDER</th>
                        <th scope="col">DIAL-STATUSES</th>
                        <th scope="col">MODIFY</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                while ($row = mysqli_fetch_assoc($reslut)) {
                    echo ' <tr>';
                    echo "<td><a>" . $row['campaign_id'] . "</a></td>";
                    echo "<td>" . $row['campaign_name'] . "</td>";

                    if ($row['active'] == "Y") {
                        echo "<td><span class='active-yes'>" . $row['active'] . "</span></td>";
                    } else {
                        echo "<td><span class='active-no'>" . $row['active'] . "</span></td>";
                    }
                    echo "<td>" . $row['user_group'] . "</td>";
                    echo "<td>" . $row['dial_method'] . "</td>";
                    echo "<td>" . $row['hopper_level'] . "</td>";
                    echo "<td>" . $row['lead_order'] . "</td>";
                    echo "<td>" . $row['dial_statuses'] . "</td>";
                    echo '<td><a href="?c=campaign&v=campaign_modify_1&id=' . $row['campaign_id'] . '">MODIFY</a></td>';
                    echo ' </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
        <!-- user list table ends -->
        <?php
require 'modals.php';
?>
    </div>
</div>
<!--  -->