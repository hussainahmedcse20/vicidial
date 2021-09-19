<?php

require '../include/user.php';
require '../include/function.php';
require '../include/sql_query.php';
$user = new user();
$Current_user = sql_execute($Current_user);
$campaigns_count = sql_count($count_campaigns);
$count_agent = sql_count($sql_agents);
$count_agent_call_Today = sql_count($sql_agents_call_today);
$Count_user = sql_count($users);
$Count_user_active = sql_count($user_active);
$Count_user_inactive = sql_count($user_inactive);
$count_campaigns = sql_count($count_campaigns);
$count_campaigns_active = sql_count($count_campaigns_active);
$count_campaigns_inactive = sql_count($count_campaigns_inactive);
$count_lists = sql_count($count_lists);
$count_lists_active = sql_count($count_lists_active);
$count_lists_inactive = sql_count($count_lists_inactive);
$count_dids = sql_count($count_dids);
$count_dids_active = sql_count($count_dids_active);
$count_dids_inactive = sql_count($count_dids_inactive);
$query_active_call = sql_count($query_active_call);
$query_calling = sql_count($query_calling);
$date = date("Y M d");
?>


<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="weather-card">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="row align-items-center">
                        <div class="todays-icon col-6">
                            <img src="../assets/images/dashboard/sun.png" alt=""/>
                        </div>
                        <div class="todays-info col-6">
                            <h5><?= strtoupper(date('D') . "day"); ?></h5>
                            <h5><?= $date; ?></h5>
                        </div>
                    </div>
                    <div class="admin">
                        <img src="./assets/images/dashboard/Profile.png" alt="">
                        <h5><?= $Current_user['full_name'] ?></h5>
                    </div>
                    <div class="location">
                        <h5>
                            <img src="../assets/images/dashboard/Location.png" alt=""/>
                            Dhaka, Bangladesh
                        </h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="welcome-info">
                        <div>
                            <h4>Welcome back</h4>
                            <h4 id="demo"></h4>
                        </div>
                        <img
                                src="../assets/images/dashboard/weather-girl.png"
                                alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-xl-6">
        <div class="row small-cards-group">
            <div class="col-lg-6">
                <div class="dashboard-card">
                    <div class="card-head">
                        <h5>Agents Logged in</h5>
                        <div class="card-head-icon">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2><?= $count_agent ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dashboard-card">
                    <div class="card-head">
                        <h5>Agents in Calls</h5>
                        <div class="card-head-icon">
                            <i class="fa fa-headphones" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2><?= $count_agent ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dashboard-card">
                    <div class="card-head">
                        <h5>Active Calls</h5>
                        <div class="card-head-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2><?= $query_active_call ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dashboard-card">
                    <div class="card-head">
                        <h5>Call Ringing</h5>
                        <div class="card-head-icon">
                            <i
                                    class="fa fa-volume-control-phone"
                                    aria-hidden="true"
                            ></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2><?= $query_calling ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="system-summary">
            <h3>Total Stats <span>Total records</span></h3>
            <p><span></span> Active</p>
            <p><span></span> Inactive</p>
            <div class="stats-group">
                <div class="stats-card">
                    <div class="chart">
                        <canvas
                                id="users-stats"
                                style="max-width: 70px; max-height: 70px"
                        ></canvas>
                        <div class="chart-icon">
                            <img src="./assets/images/dashboard/chart-icon-1.png" alt="">
                        </div>
                    </div>
                    <div class="chart-data">
                        <p>Users</p>
                        <h5><?= $Count_user ?></h5>
                    </div>
                </div>
                <div class="stats-card">
                    <div class="chart">
                        <canvas
                                id="campaign-stats"
                                style="max-width: 70px; max-height: 70px"
                        ></canvas>
                        <div class="chart-icon">
                            <img src="./assets/images/dashboard/chart-icon-2.png" alt="">
                        </div>
                    </div>
                    <div class="chart-data">
                        <p>Campaigns</p>
                        <h5><?= $count_campaigns ?></h5>
                    </div>
                </div>
                <div class="stats-card">
                    <div class="chart">
                        <canvas
                                id="lists-stats"
                                style="max-width: 70px; max-height: 70px"
                        ></canvas>
                        <div class="chart-icon">
                            <img src="./assets/images/dashboard/chart-icon-3.png" alt="">
                        </div>
                    </div>
                    <div class="chart-data">
                        <p>Lists</p>
                        <h5><?= $count_lists ?></h5>
                    </div>
                </div>
                <div class="stats-card">
                    <div class="chart">
                        <canvas
                                id="in-group-stats"
                                style="max-width: 70px; max-height: 70px"
                        ></canvas>
                        <div class="chart-icon">
                            <img src="./assets/images/dashboard/chart-icon-3.png" alt="">
                        </div>
                    </div>
                    <div class="chart-data">
                        <p>Active Calls</p>
                        <h5><?= $query_active_call ?></h5>
                    </div>
                </div>
                <div class="stats-card">
                    <div class="chart">
                        <canvas
                                id="dids-stats"
                                style="max-width: 70px; max-height: 70px"
                        ></canvas>
                        <div class="chart-icon">
                            <img src="./assets/images/dashboard/chart-icon-4.png" alt="">
                        </div>
                    </div>
                    <div class="chart-data">
                        <p>DIDs</p>
                        <h5><?= $count_dids ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="total-stats">
            <div>
                <h3>System Summary</h3>
                <div class="select">
                    <select name="cars" id="cars">
                        <option value="today">Today</option>
                        <option value="tommorrow">Tommorrow</option>
                        <option value="yesterday">Yesterday</option>
                    </select>
                </div>
            </div>
            <div class="total-stats-table table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Records</th>
                        <th scope="col">Active</th>
                        <th scope="col">Inactive</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="#">Users: </a></td>
                        <td><?= $Count_user_active ?></td>
                        <td><?= $Count_user_inactive ?></td>
                        <td><?= $Count_user ?></td>
                    </tr>
                    <tr>
                        <td><a href="#">Campaigns: </a></td>
                        <td><?= $count_campaigns_active ?></td>
                        <td><?= $count_campaigns_inactive ?></td>
                        <td><?= $count_campaigns ?></td>
                    </tr>
                    <tr>
                        <td><a href="#">Lists: </a></td>
                        <td><?= $count_lists_active ?></td>
                        <td><?= $count_lists_inactive ?></td>
                        <td><?= $count_lists ?></td>
                    </tr>
                    <tr>
                        <td><a href="#">In-Groups: </a></td>
                        <td><?= $count_campaigns_active ?></td>
                        <td><?= $count_campaigns_inactive ?></td>
                        <td><?= $count_campaigns ?></td>
                    </tr>
                    <tr>
                        <td><a href="#">DIDs: </a></td>
                        <td><?=$count_dids_active ?></td>
                        <td><?= $count_dids_inactive?></td>
                        <td><?=$count_dids ?></td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="view-all">
                <p>View All <i class="fa fa-angle-right" aria-hidden="true"></i></p>
            </div>
        </div>
    </div>
</div>
