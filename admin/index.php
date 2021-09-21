<?php
require '../conf/db.php';
require '../include/campaign.php';
session_start();
if (!$_SESSION['user_level'] == 9) {
    header('location:../');
}
$sql = "Select * from vicidial_users where user_id =" . $_SESSION['user_id'];
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iDial</title>

    <!-- All the css files here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/datatables.min.css" />
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <div class="idial-dashboard">
        <div class="row">
            <section class="idial-sidebar-mbl">
                <div id="mySidebar" class="sidebar">
                    <div class="dashboard-sidedrawer">
                        <img src="../assets/images/dashboard/iDIAL.png" alt="" />
                        <h2>Administration</h2>
                        <a href="../index.html"><i class="fa fa-th-large" aria-hidden="true"></i> Overview</a>
                        <a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Report</a>
                        <a data-toggle="collapse" href="#collapseUserMbl" role="button" aria-expanded="false"
                            aria-controls="collapseUserMbl"><i class="fa fa-user" aria-hidden="true"></i>
                            User <i class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                        <div class="collapse show sidebar-submenu" id="collapseUserMbl">
                            <ul>
                                <li><a href="#">User List</a></li>
                                <li><a href="?c=user&v=user_status">User Status</a></li>
                                <li><a href="#">User Stats</a></li>
                            </ul>
                        </div>

                        <a data-toggle="collapse" href="#collapseCampaignMbl" role="button" aria-expanded="false"
                            aria-controls="collapseCampaignMbl"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                            Campaigns <i class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                        <div class="collapse sidebar-submenu" id="collapseCampaignMbl">
                            <ul>
                                <li><a href=>Campaign Main</a></li>
                                <li><a href="?c=campaign&v=campaign_status">Statuses</a></li>
                                <li><a href="?c=campaign&v=campaign_hotkeys_list">Hotkeys</a></li>
                                <li><a href="?c=campaign&v=campaign_lead_recycle_list">Lead Recycle</a></li>
                                <li><a href="?c=campaign&v=campaign_auto_alt_dial_list">Auto-Alt Dial</a></li>
                                <li><a href="#">List Mix</a></li>
                                <li><a href="#">Pause Codes</a></li>
                                <li><a href="#">Presets</a></li>
                                <li><a href="#">AC-CID</a></li>
                            </ul>
                        </div>

                        <a data-toggle="collapse" href="#collapseListMbl" role="button" aria-expanded="false"
                            aria-controls="collapseListMbl"><i class="fa fa-list" aria-hidden="true"></i> Lists <i
                                class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                        <div class="collapse sidebar-submenu" id="collapseListMbl">
                            <ul>
                                <li><a href="#">List List</a></li>
                                <li><a href="#">List Status</a></li>
                                <li><a href="#">List Stats</a></li>
                            </ul>
                        </div>

                        <a data-toggle="collapse" href="#collapseScriptsMbl" role="button" aria-expanded="false"
                            aria-controls="collapseScriptsMbl"><i class="fa fa-file-o" aria-hidden="true"></i> Scripts
                            <i class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                        <div class="collapse sidebar-submenu" id="collapseScriptsMbl">
                            <ul>
                                <li><a href="#">Scripts List</a></li>
                                <li><a href="#">Scripts Status</a></li>
                                <li><a href="#">Scripts Stats</a></li>
                            </ul>
                        </div>

                        <a data-toggle="collapse" href="#collapseFiltersMbl" role="button" aria-expanded="false"
                            aria-controls="collapseFiltersMbl"><i class="fa fa-filter" aria-hidden="true"></i> Filters
                            <i class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                        <div class="collapse sidebar-submenu" id="collapseFiltersMbl">
                            <ul>
                                <li><a href="#">Filters List</a></li>
                                <li><a href="#">Filters Status</a></li>
                                <li><a href="#">Filters Stats</a></li>
                            </ul>
                        </div>

                        <a data-toggle="collapse" href="#collapseInboundMbl" role="button" aria-expanded="false"
                            aria-controls="collapseInboundMbl"><i class="fa fa-phone" aria-hidden="true"></i> Inbound <i
                                class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                        <div class="collapse sidebar-submenu" id="collapseInboundMbl">
                            <ul>
                                <li><a href="?c=Inbound&v=show_in_groups">Show In-Groups</a></li>
                                <li><a href="?c=Inbound&v=show_dids">Show DIDS</a></li>
                                <li><a href="?c=Inbound&v=show_call_menus">Show Call Menus</a></li>
                                <li><a href="?c=Inbound&v=filter_phone_groups">Filter Phone Groups</a></li>
                            </ul>
                        </div>


                        <a data-toggle="collapse" href="#collapseUserGroupMbl" role="button" aria-expanded="false"
                            aria-controls="collapseUserGroupMbl"><i class="fa fa-users" aria-hidden="true"></i> User
                            Groups <i class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                        <div class="collapse sidebar-submenu" id="collapseUserGroupMbl">
                            <ul>
                                <li><a href="?c=user_group&v=show_user_group"> Show User Groups </a></li>
                                <li><a href="#">User Group Status</a></li>
                                <li><a href="#">User Group Stats</a></li>
                            </ul>
                        </div>

                        <a data-toggle="collapse" href="#collapseRemoteAgentMbl" role="button" aria-expanded="false"
                            aria-controls="collapseRemoteAgentMbl"><i class="fa fa-headphones" aria-hidden="true"></i>
                            Remote
                            Agents <i class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                        <div class="collapse sidebar-submenu" id="collapseRemoteAgentMbl">
                            <ul>
                                <li><a href="#">Remote Agent List</a></li>
                                <li><a href="#">Remote Agent Status</a></li>
                                <li><a href="#">Remote Agent Stats</a></li>
                            </ul>
                        </div>

                        <a data-toggle="collapse" href="#collapseAdminMbl" role="button" aria-expanded="false"
                            aria-controls="collapseAdminMbl"><i class="fa fa-cog" aria-hidden="true"></i> Admin <i
                                class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                        <div class="collapse sidebar-submenu" id="collapseAdminMbl">
                            <ul>
                                <li><a href="#">Admin List</a></li>
                                <li><a href="#">Admin Status</a></li>
                                <li><a href="#">Admin Stats</a></li>
                            </ul>
                        </div>
                    </div>
            </section>
            <section class="idial-sidebar col-2">
                <div class="sidebar-lg">
                    <img src="../assets/images/dashboard/iDIAL.png" alt="" />
                    <h2>Administration</h2>
                    <a href="?c=dashboard&v=index"><i class="fa fa-th-large" aria-hidden="true"></i> Overview</a>
                    <a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Report</a>
                    <a data-toggle="collapse" href="#collapseUser" role="button" aria-expanded="false"
                        aria-controls="collapseUser"><i class="fa fa-user" aria-hidden="true"></i>
                        User <i class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                    <div class="collapse show sidebar-submenu" id="collapseUser">
                        <ul>
                            <li><a href="?c=user&v=user_list">User List</a></li>
                            <li><a href="?c=user&v=user_status">User Status</a></li>
                            <li><a href="?c=user&v=user-stats">User Stats</a></li>
                        </ul>
                    </div>

                    <a data-toggle="collapse" href="#collapseCampaign" role="button" aria-expanded="false"
                        aria-controls="collapseCampaign"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        Campaigns <i class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                    <div class="collapse sidebar-submenu" id="collapseCampaign">
                        <ul>
                            <li><a href="?c=campaign&v=campaign_list">Campaign Main</a></li>
                            <li><a href="?c=campaign&v=campaign_status">Statuses</a></li>
                            <li><a href="?c=campaign&v=campaign_hotkeys_list">Hotkeys</a></li>
                            <li><a href="?c=campaign&v=campaign_lead_recycle_list">Lead Recycle</a></li>

                            <li><a href="?c=campaign&v=campaign_auto_alt_dial_list">Auto-Alt Dial</a></li>
                            <li><a href="?c=campaign&v=campaign_list_mix_list">List Mix</a></li>
                            <li><a href="?c=campaign&v=campaign_pause_code_list">Pause Codes</a></li>
                            <li><a href="?c=campaign&v=campaign_presets_list">Presets</a></li>
                            <li><a href="?c=campaign&v=campaign_ac_cid_list">AC-CID</a></li>

                        </ul>
                    </div>

                    <a data-toggle="collapse" href="#collapseList" role="button" aria-expanded="false"
                        aria-controls="collapseList"><i class="fa fa-list" aria-hidden="true"></i> Lists <i
                            class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                    <div class="collapse sidebar-submenu" id="collapseList">
                        <ul>
                            <li><a href="?c=lists&v=lists_list">List List</a></li>
                            <li><a href="#">List Status</a></li>
                            <li><a href="#">List Stats</a></li>
                        </ul>
                    </div>

                    <a data-toggle="collapse" href="#collapseScripts" role="button" aria-expanded="false"
                        aria-controls="collapseScripts"><i class="fa fa-file-o" aria-hidden="true"></i> Scripts <i
                            class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                    <div class="collapse sidebar-submenu" id="collapseScripts">
                        <ul>
                            <li><a href="#">Scripts List</a></li>
                            <li><a href="#">Scripts Status</a></li>
                            <li><a href="#">Scripts Stats</a></li>
                        </ul>
                    </div>

                    <a data-toggle="collapse" href="#collapseFilters" role="button" aria-expanded="false"
                        aria-controls="collapseFilters"><i class="fa fa-filter" aria-hidden="true"></i> Filters <i
                            class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                    <div class="collapse sidebar-submenu" id="collapseFilters">
                        <ul>
                            <li><a href="#">Filters List</a></li>
                            <li><a href="#">Filters Status</a></li>
                            <li><a href="#">Filters Stats</a></li>
                        </ul>
                    </div>

                    <a data-toggle="collapse" href="#collapseInbound" role="button" aria-expanded="false"
                        aria-controls="collapseInbound"><i class="fa fa-phone" aria-hidden="true"></i> Inbound <i
                            class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                    <div class="collapse sidebar-submenu" id="collapseInbound">
                        <ul>
                            <li><a href="?c=Inbound&v=show_in_groups">Show In-Groups</a></li>
                            <li><a href="?c=Inbound&v=show_dids">Show DIDS</a></li>
                            <li><a href="?c=Inbound&v=show_call_menus">Show Call Menus</a></li>
                            <li><a href="?c=Inbound&v=filter_phone_groups">Filter Phone Groups</a></li>
                        </ul>
                    </div>


                    <a data-toggle="collapse" href="#collapseUserGroup" role="button" aria-expanded="false"
                        aria-controls="collapseUserGroup"><i class="fa fa-users" aria-hidden="true"></i> User Groups <i
                            class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                    <div class="collapse sidebar-submenu" id="collapseUserGroup">
                        <ul>
                            <li><a href="?c=user_group&v=show_user_group">Show User Group</a></li>
                            <li><a href="?c=user_group&v=group_hourly_report">Group Hourly Report</a></li>
                            <li><a href="?c=user_group&v=bulk_group_change">Bulk Group Change</a></li>
                        </ul>
                    </div>

                    <a data-toggle="collapse" href="#collapseRemoteAgent" role="button" aria-expanded="false"
                        aria-controls="collapseRemoteAgent"><i class="fa fa-headphones" aria-hidden="true"></i> Remote
                        Agents <i class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                    <div class="collapse sidebar-submenu" id="collapseRemoteAgent">
                        <ul>
                            <li><a href="#">Remote Agent List</a></li>
                            <li><a href="#">Remote Agent Status</a></li>
                            <li><a href="#">Remote Agent Stats</a></li>
                        </ul>
                    </div>

                    <a data-toggle="collapse" href="#collapseAdmin" role="button" aria-expanded="false"
                        aria-controls="collapseAdmin"><i class="fa fa-cog" aria-hidden="true"></i> Admin <i
                            class="sidebar-collapse-arrow fa fa-chevron-right" aria-hidden="true"></i></a>
                    <div class="collapse sidebar-submenu" id="collapseAdmin">
                        <ul>
                            <li><a href="#">Admin List</a></li>
                            <li><a href="#">Admin Status</a></li>
                            <li><a href="#">Admin Stats</a></li>
                        </ul>
                    </div>

                </div>
            </section>
            <div class="col-12 col-lg-12 col-xl-10">
                <section class="top-bar">
                    <div id="main">
                        <button class="openbtn">&#9776;</button>
                    </div>
                    <a href="#">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </a>
                    <!-- Will be needed later -->
                    <!-- <a href="#" style="display: none;">
            <i class="fa fa-bell" aria-hidden="true"></i>
          </a>
          <span"></span> -->
                    <!-- Will be needed later -->

                    <a href="logout.php" data-toggle="tooltip" data-placement="bottom" title="Log Out">
                        <img src="../assets/images/dashboard/logout.png" alt="" />
                    </a>
                </section>
                <div>
                    <!-- Layout Start -->
                    <?php
                if (isset($_GET['c'])) {
                    include 'pages/' . $_GET['c'] . '/' . $_GET['v'] . '.php';
                } else {
                    include 'pages/dashboard/index.php';
                }
                ?>

                    <!-- Layout End -->
                </div>


            </div>
        </div>
    </div>


    <!-- All the js files here -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/chart.min.js"></script>
    <script src="../assets/js/chart_function.js"></script>
    <script src="../assets/js/datatables.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/inputField.js"></script>


</body>

</html>