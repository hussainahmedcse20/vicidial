<?php

$sql_agents="Select * from vicidial_campaign_agents";
$sql_agents_call_today="Select * from twoday_vicidial_agent_log";


$Current_user='select * from vicidial_users where user_id='.$_SESSION['user_id'];
$users='select * from vicidial_users';
$user_active='select * from vicidial_users where active="Y"';
$user_inactive='select * from vicidial_users where active="N"';



$count_campaigns='SELECT * from vicidial_campaigns';
$count_campaigns_active='SELECT * from vicidial_campaigns where active="Y"';
$count_campaigns_inactive='SELECT * from vicidial_campaigns where active="N"';

$count_lists='SELECT * from vicidial_lists';
$count_lists_active='SELECT * from vicidial_lists where active="Y"';
$count_lists_inactive='SELECT * from vicidial_lists where active="N"';


$count_dids='SELECT * from vicidial_inbound_dids';
$count_dids_active='SELECT * from vicidial_inbound_dids where did_active="Y"';
$count_dids_inactive='SELECT * from vicidial_inbound_dids where did_active="N"';








$query_active_call = "SELECT Count(vicidial_auto_calls.`status`) FROM vicidial_auto_calls";
$query_calling = "SELECT Count(vicidial_auto_calls.call_type) FROM vicidial_auto_calls WHERE vicidial_auto_calls.stage = 'START'";