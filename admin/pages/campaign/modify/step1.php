<pre>
<?php
$camp = new campaign();


if (isset($_POST['campaign1'])) {

    $camp->campaign_id = $_POST['campaign_id'];
    $camp->campaign_name = $_POST['campaign_name'];
    $camp->campaign_description = $_POST['campaign_description'];
    $camp->user_group = $_POST['user_group'];
    $camp->park_file_name = $_POST['park_file_name'];
    $camp->web_form_address = $_POST['web_form_address'];
    $camp->web_form_address_two = $_POST['web_form_address_two'];
    $camp->web_form_address_three = $_POST['web_form_address_three'];
    $camp->web_form_target = $_POST['web_form_target'];
    $camp->lead_order = $_POST['lead_order'];
    $camp->lead_order_randomize = $_POST['lead_order_randomize'];
    $camp->lead_order_secondary = $_POST['lead_order_secondary'];
    $camp->list_order_mix = $_POST['list_order_mix'];
    $camp->lead_filter_id = $_POST['lead_filter_id'];
    $camp->drop_lockout_time = $_POST['drop_lockout_time'];
    $camp->call_count_limit = $_POST['call_count_limit'];
    $camp->call_count_target = $_POST['call_count_target'];
    $camp->hopper_level = $_POST['hopper_level'];
    $camp->auto_hopper_multi = $_POST['auto_hopper_multi'];
    $camp->use_auto_hopper = $_POST['use_auto_hopper'];
    $camp->auto_trim_hopper = $_POST['auto_trim_hopper'];
    $camp->hopper_vlc_dup_check = $_POST['hopper_vlc_dup_check'];
    $camp->manual_dial_hopper_check = $_POST['manual_dial_hopper_check'];
    $camp->dial_method = $_POST['dial_method'];
    $camp->auto_dial_level = $_POST['auto_dial_level'];
    $camp->dial_level_threshold = $_POST['dial_level_threshold'];
    $camp->dial_level_threshold_agents = $_POST['dial_level_threshold_agents'];
    $camp->available_only_tally_threshold = $_POST['available_only_tally_threshold'];
    $camp->available_only_tally_threshold_agents = $_POST['available_only_tally_threshold_agents'];
    $camp->adaptive_dropped_percentage = $_POST['adaptive_dropped_percentage'];
    $camp->adaptive_maximum_level = $_POST['adaptive_maximum_level'];
    $camp->adaptive_latest_server_time = $_POST['adaptive_latest_server_time'];
    $camp->adaptive_intensity = $_POST['adaptive_intensity'];
    $camp->adaptive_dl_diff_target = $_POST['adaptive_dl_diff_target'];
    $camp->dl_diff_target_method = $_POST['dl_diff_target_method'];
    $camp->concurrent_transfers = $_POST['concurrent_transfers'];
    $camp->queue_priority = $_POST['queue_priority'];
    $camp->drop_rate_group = $_POST['drop_rate_group'];
    $camp->inbound_queue_no_dial = $_POST['inbound_queue_no_dial'];
    $camp->inbound_no_agents_no_dial_container = $_POST['inbound_no_agents_no_dial_container'];
    $camp->inbound_no_agents_no_dial_threshold = $_POST['inbound_no_agents_no_dial_threshold'];
    $camp->auto_alt_dial = $_POST['auto_alt_dial'];
    $camp->next_agent_call = $_POST['next_agent_call'];
    $camp->local_call_time = $_POST['local_call_time'];
    $camp->dial_timeout = $_POST['dial_timeout'];
    $camp->dial_timeout_lead_container = $_POST['dial_timeout_lead_container'];
    $camp->dial_prefix = $_POST['dial_prefix'];
    $camp->manual_dial_prefix = $_POST['manual_dial_prefix'];
    $camp->campaign_cid = $_POST['campaign_cid'];
    $camp->use_custom_cid = $_POST['use_custom_cid'];
    $camp->cid_group_id = $_POST['cid_group_id'];
    $camp->campaign_vdad_exten = $_POST['campaign_vdad_exten'];
    $camp->campaign_rec_exten = $_POST['campaign_rec_exten'];
    $camp->campaign_recording = $_POST['campaign_recording'];
    $camp->campaign_rec_filename = $_POST['campaign_rec_filename'];
    $camp->allcalls_delay = $_POST['allcalls_delay'];
    $camp->omit_phone_code = $_POST['omit_phone_code'];
    $camp->routing_initiated_recordings = $_POST['routing_initiated_recordings'];

    $sql = "UPDATE `vicidial_campaigns` SET campaign_id='".$camp->campaign_id."',
    campaign_name='".$camp->campaign_name."',
    campaign_description='".$camp->campaign_description."',
    user_group='".$camp->user_group."',
    park_file_name='".$camp->park_file_name."',
    web_form_address='".$camp->web_form_address."',
    web_form_address_two='".$camp->web_form_address_two."',
    web_form_address_three='".$camp->web_form_address_three."',
    web_form_target='".$camp->web_form_target."',
    lead_order='".$camp->lead_order."',
    lead_order_randomize='".$camp->lead_order_randomize."',
    lead_order_secondary='".$camp->lead_order_secondary."',
    list_order_mix='".$camp->list_order_mix."',
    lead_filter_id='".$camp->lead_filter_id."',
    drop_lockout_time='".$camp->drop_lockout_time."',
    call_count_limit='".$camp->call_count_limit."',
    call_count_target='".$camp->call_count_target."',
    hopper_level='".$camp->hopper_level."',
    auto_hopper_multi='".$camp->auto_hopper_multi."',
    use_auto_hopper='".$camp->use_auto_hopper."',
    auto_trim_hopper='".$camp->auto_trim_hopper."',
    hopper_vlc_dup_check='".$camp->hopper_vlc_dup_check."',
    manual_dial_hopper_check='".$camp->manual_dial_hopper_check."',
    dial_method='".$camp->dial_method."',
    auto_dial_level='".$camp->auto_dial_level."',
    dial_level_threshold='".$camp->dial_level_threshold."',
    dial_level_threshold_agents='".$camp->dial_level_threshold_agents."',
    available_only_tally_threshold='".$camp->available_only_tally_threshold."',available_only_tally_threshold_agents='".$camp->available_only_tally_threshold_agents."',
    adaptive_dropped_percentage='".$camp->adaptive_dropped_percentage."',adaptive_maximum_level='".$camp->adaptive_maximum_level."',
    adaptive_latest_server_time='".$camp->adaptive_latest_server_time."',
    adaptive_intensity='".$camp->adaptive_intensity."',
    adaptive_dl_diff_target='".$camp->adaptive_dl_diff_target."',
    dl_diff_target_method='".$camp->dl_diff_target_method."',
    concurrent_transfers='".$camp->concurrent_transfers."',
    queue_priority='".$camp->queue_priority."',
    drop_rate_group='".$camp->drop_rate_group."',
    inbound_queue_no_dial='".$camp->inbound_queue_no_dial."',inbound_no_agents_no_dial_container='".$camp->inbound_no_agents_no_dial_container."',inbound_no_agents_no_dial_threshold='".$camp->inbound_no_agents_no_dial_threshold."',auto_alt_dial='".$camp->auto_alt_dial."',
    next_agent_call='".$camp->next_agent_call."',
    local_call_time='".$camp->local_call_time."',
    dial_timeout='".$camp->dial_timeout."',
    dial_timeout_lead_container='".$camp->dial_timeout_lead_container."',
    dial_prefix='".$camp->dial_prefix."',
    manual_dial_prefix='".$camp->manual_dial_prefix."',
    campaign_cid='".$camp->campaign_cid."',
    use_custom_cid='".$camp->use_custom_cid."',
    cid_group_id='".$camp->cid_group_id."',
    campaign_vdad_exten='".$camp->campaign_vdad_exten."',
    campaign_rec_exten='".$camp->campaign_rec_exten."',
    campaign_recording='".$camp->campaign_recording."',
    campaign_rec_filename='".$camp->campaign_rec_filename."',
    allcalls_delay='".$camp->allcalls_delay."',
    omit_phone_code='".$camp->omit_phone_code."',
    routing_initiated_recordings='".$camp->routing_initiated_recordings."' 
    where campaign_id='" . $camp->campaign_id . "'";
    $result=mysqli_query($conn, $sql);
}
?>
</pre>
<h3>Modify Users Record</h3>
<form action="#" method="POST">
    <!--    <div class="alert alert-danger" role="alert">-->
    <!--        Invalid Inputs!-->
    <!--    </div>-->
    <div class="row">
        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="campaign_id" name="campaign_id"
                    aria-describedby="campaign_id" value="<?= $datacamp['campaign_id'] ?>">
                <label for="campaign_id">Campaing ID</label>
            </div>
        </div>
        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="campaign_name" name="campaign_name"
                    aria-describedby="campaign_name" value="<?= $datacamp['campaign_name'] ?>">
                <label for="campaign_name">Campaign Name</label>
            </div>
        </div>
        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="campaign_description" name="campaign_description"
                    aria-describedby="campaign_description" value="<?= $datacamp['campaign_description'] ?>">
                <label for="campaign_description">Campaign Description</label>
            </div>
        </div>
        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
            <div class="form-group my-input mt-2 mb-5">

                <p>Campaign Change Date</p>
                <small>N/A</small>
            </div>
        </div>
        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
            <div class="form-group my-input mt-2 mb-5">

                <p>Campaign Change Date</p>
                <small>N/A</small>
            </div>
        </div>
        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
            <div class="form-group my-input mt-2 mb-5">

                <p>Campaign Change Date</p>
                <small>N/A</small>
            </div>
        </div>
        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="user_group" id="user_group">
                    <option></option>
                    <option value="---ALL---">All Admin User Groups</option>
                    <option value="ADMIN">ADMIN - VICIDIAL ADMINISTRATORS</option>
                    <option value="AGENTS">AGENTS - VICIDIAL AGENTS</option>
                    <option value="CUSTOM-ADMIN">CUSTOM-ADMIN - CUSTOM-ADMIN</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="user_group">Admin User Group</label>
            </div>
        </div>

        <div class="voicemail-group col-12 col-md-6 col-lg-4">
            <div class="my-input-with-help  ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="park_file_name" name="park_file_name"
                        aria-describedby="park_file_name" value="<?= $datacamp['park_file_name'] ?>">
                    <label for="park_file_name">Park Music-On-Hold</label>
                </div>
            </div>

            <a type="button" class="btn btn-primary voice-dropdown" data-toggle="modal" data-target="#exampleModal">
                moh
            </a>

            <!-- Modal -->

        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="web_form_address" name="web_form_address"
                    aria-describedby="web_form_address" value="<?= $datacamp['web_form_address'] ?>">
                <label for="web_form_address">Web Form</label>
            </div>
        </div>
        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="web_form_address_two" name="web_form_address_two"
                    aria-describedby="web_form_address_two" value="<?= $datacamp['web_form_address_two'] ?>">
                <label for="web_form_address_two">Web Form Two</label>
            </div>
        </div>
        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="web_form_address_three" name="web_form_address_three"
                    aria-describedby="web_form_address_three" value="<?= $datacamp['web_form_address_three'] ?>">
                <label for="web_form_address_three">Web Form Three</label>
            </div>
        </div>
        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="web_form_target" name="web_form_target"
                    aria-describedby="web_form_target" value="<?= $datacamp['web_form_target'] ?>">
                <label for="web_form_target">Web Form Target</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 d-flex flex-row mb-5">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="user_nickname" name="user_nickname"
                    aria-describedby="user_nickname" value="<?= $datacamp['park_file_name'] ?>" disabled>
                <label for="user_nickname">User Nickname (Optional)</label>
            </div>
            <button class="my-btn-primary ml-4 mt-1">Add</button>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="lead_order" id="lead_order">
                    <option></option>
                    <option value='' SELECTED></option>
                    <option value='DOWN'>DOWN</option>
                    <option value='UP'>UP</option>
                    <option value='DOWN PHONE'>DOWN PHONE</option>
                    <option value='UP PHONE'>UP PHONE</option>
                    <option value='DOWN LAST NAME'>DOWN LAST NAME</option>
                    <option value='UP LAST NAME'>UP LAST NAME</option>
                    <option value='DOWN COUNT'>DOWN COUNT</option>
                    <option value='UP COUNT'>UP COUNT</option>
                    <option value='RANDOM'>RANDOM</option>
                    <option value='DOWN LAST CALL TIME'>DOWN LAST CALL TIME</option>
                    <option value='UP LAST CALL TIME'>UP LAST CALL TIME</option>
                    <option value='DOWN RANK'>DOWN RANK</option>
                    <option value='UP RANK'>UP RANK</option>
                    <option value='DOWN OWNER'>DOWN OWNER</option>
                    <option value='UP OWNER'>UP OWNER</option>
                    <option value='DOWN TIMEZONE'>DOWN TIMEZONE</option>
                    <option value='UP TIMEZONE'>UP TIMEZONE</option>
                    <option value='DOWN 2nd NEW'>DOWN 2nd NEW</option>
                    <option value='DOWN 3rd NEW'>DOWN 3rd NEW</option>
                    <option value='DOWN 4th NEW'>DOWN 4th NEW</option>
                    <option value='DOWN 5th NEW'>DOWN 5th NEW</option>
                    <option value='DOWN 6th NEW'>DOWN 6th NEW</option>
                    <option value='UP 2nd NEW'>UP 2nd NEW</option>
                    <option value='UP 3rd NEW'>UP 3rd NEW</option>
                    <option value='UP 4th NEW'>UP 4th NEW</option>
                    <option value='UP 5th NEW'>UP 5th NEW</option>
                    <option value='UP 6th NEW'>UP 6th NEW</option>
                    <option value='DOWN PHONE 2nd NEW'>DOWN PHONE 2nd NEW</option>
                    <option value='DOWN PHONE 3rd NEW'>DOWN PHONE 3rd NEW</option>
                    <option value='DOWN PHONE 4th NEW'>DOWN PHONE 4th NEW</option>
                    <option value='DOWN PHONE 5th NEW'>DOWN PHONE 5th NEW</option>
                    <option value='DOWN PHONE 6th NEW'>DOWN PHONE 6th NEW</option>
                    <option value='UP PHONE 2nd NEW'>UP PHONE 2nd NEW</option>
                    <option value='UP PHONE 3rd NEW'>UP PHONE 3rd NEW</option>
                    <option value='UP PHONE 4th NEW'>UP PHONE 4th NEW</option>
                    <option value='UP PHONE 5th NEW'>UP PHONE 5th NEW</option>
                    <option value='UP PHONE 6th NEW'>UP PHONE 6th NEW</option>
                    <option value='DOWN LAST NAME 2nd NEW'>DOWN LAST NAME 2nd NEW</option>
                    <option value='DOWN LAST NAME 3rd NEW'>DOWN LAST NAME 3rd NEW</option>
                    <option value='DOWN LAST NAME 4th NEW'>DOWN LAST NAME 4th NEW</option>
                    <option value='DOWN LAST NAME 5th NEW'>DOWN LAST NAME 5th NEW</option>
                    <option value='DOWN LAST NAME 6th NEW'>DOWN LAST NAME 6th NEW</option>
                    <option value='UP LAST NAME 2nd NEW'>UP LAST NAME 2nd NEW</option>
                    <option value='UP LAST NAME 3rd NEW'>UP LAST NAME 3rd NEW</option>
                    <option value='UP LAST NAME 4th NEW'>UP LAST NAME 4th NEW</option>
                    <option value='UP LAST NAME 5th NEW'>UP LAST NAME 5th NEW</option>
                    <option value='UP LAST NAME 6th NEW'>UP LAST NAME 6th NEW</option>
                    <option value='DOWN COUNT 2nd NEW'>DOWN COUNT 2nd NEW</option>
                    <option value='DOWN COUNT 3rd NEW'>DOWN COUNT 3rd NEW</option>
                    <option value='DOWN COUNT 4th NEW'>DOWN COUNT 4th NEW</option>
                    <option value='DOWN COUNT 5th NEW'>DOWN COUNT 5th NEW</option>
                    <option value='DOWN COUNT 6th NEW'>DOWN COUNT 6th NEW</option>
                    <option value='UP COUNT 2nd NEW'>UP COUNT 2nd NEW</option>
                    <option value='UP COUNT 3rd NEW'>UP COUNT 3rd NEW</option>
                    <option value='UP COUNT 4th NEW'>UP COUNT 4th NEW</option>
                    <option value='UP COUNT 5th NEW'>UP COUNT 5th NEW</option>
                    <option value='UP COUNT 6th NEW'>UP COUNT 6th NEW</option>
                    <option value='RANDOM 2nd NEW'>RANDOM 2nd NEW</option>
                    <option value='RANDOM 3rd NEW'>RANDOM 3rd NEW</option>
                    <option value='RANDOM 4th NEW'>RANDOM 4th NEW</option>
                    <option value='RANDOM 5th NEW'>RANDOM 5th NEW</option>
                    <option value='RANDOM 6th NEW'>RANDOM 6th NEW</option>
                    <option value='DOWN LAST CALL TIME 2nd NEW'>DOWN LAST CALL TIME 2nd NEW
                    </option>
                    <option value='DOWN LAST CALL TIME 3rd NEW'>DOWN LAST CALL TIME 3rd NEW
                    </option>
                    <option value='DOWN LAST CALL TIME 4th NEW'>DOWN LAST CALL TIME 4th NEW
                    </option>
                    <option value='DOWN LAST CALL TIME 5th NEW'>DOWN LAST CALL TIME 5th NEW
                    </option>
                    <option value='DOWN LAST CALL TIME 6th NEW'>DOWN LAST CALL TIME 6th NEW
                    </option>
                    <option value='UP LAST CALL TIME 2nd NEW'>UP LAST CALL TIME 2nd NEW</option>
                    <option value='UP LAST CALL TIME 3rd NEW'>UP LAST CALL TIME 3rd NEW</option>
                    <option value='UP LAST CALL TIME 4th NEW'>UP LAST CALL TIME 4th NEW</option>
                    <option value='UP LAST CALL TIME 5th NEW'>UP LAST CALL TIME 5th NEW</option>
                    <option value='UP LAST CALL TIME 6th NEW'>UP LAST CALL TIME 6th NEW</option>
                    <option value='DOWN RANK 2nd NEW'>DOWN RANK 2nd NEW</option>
                    <option value='DOWN RANK 3rd NEW'>DOWN RANK 3rd NEW</option>
                    <option value='DOWN RANK 4th NEW'>DOWN RANK 4th NEW</option>
                    <option value='DOWN RANK 5th NEW'>DOWN RANK 5th NEW</option>
                    <option value='DOWN RANK 6th NEW'>DOWN RANK 6th NEW</option>
                    <option value='UP RANK 2nd NEW'>UP RANK 2nd NEW</option>
                    <option value='UP RANK 3rd NEW'>UP RANK 3rd NEW</option>
                    <option value='UP RANK 4th NEW'>UP RANK 4th NEW</option>
                    <option value='UP RANK 5th NEW'>UP RANK 5th NEW</option>
                    <option value='UP RANK 6th NEW'>UP RANK 6th NEW</option>
                    <option value='DOWN OWNER 2nd NEW'>DOWN OWNER 2nd NEW</option>
                    <option value='DOWN OWNER 3rd NEW'>DOWN OWNER 3rd NEW</option>
                    <option value='DOWN OWNER 4th NEW'>DOWN OWNER 4th NEW</option>
                    <option value='DOWN OWNER 5th NEW'>DOWN OWNER 5th NEW</option>
                    <option value='DOWN OWNER 6th NEW'>DOWN OWNER 6th NEW</option>
                    <option value='UP OWNER 2nd NEW'>UP OWNER 2nd NEW</option>
                    <option value='UP OWNER 3rd NEW'>UP OWNER 3rd NEW</option>
                    <option value='UP OWNER 4th NEW'>UP OWNER 4th NEW</option>
                    <option value='UP OWNER 5th NEW'>UP OWNER 5th NEW</option>
                    <option value='UP OWNER 6th NEW'>UP OWNER 6th NEW</option>
                    <option value='DOWN TIMEZONE 2nd NEW'>DOWN TIMEZONE 2nd NEW</option>
                    <option value='DOWN TIMEZONE 3rd NEW'>DOWN TIMEZONE 3rd NEW</option>
                    <option value='DOWN TIMEZONE 4th NEW'>DOWN TIMEZONE 4th NEW</option>
                    <option value='DOWN TIMEZONE 5th NEW'>DOWN TIMEZONE 5th NEW</option>
                    <option value='DOWN TIMEZONE 6th NEW'>DOWN TIMEZONE 6th NEW</option>
                    <option value='UP TIMEZONE 2nd NEW'>UP TIMEZONE 2nd NEW</option>
                    <option value='UP TIMEZONE 3rd NEW'>UP TIMEZONE 3rd NEW</option>
                    <option value='UP TIMEZONE 4th NEW'>UP TIMEZONE 4th NEW</option>
                    <option value='UP TIMEZONE 5th NEW'>UP TIMEZONE 5th NEW</option>
                    <option value='UP TIMEZONE 6th NEW'>UP TIMEZONE 6th NEW</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="lead_order">List Order</label>
            </div>
        </div>
        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="lead_order_randomize" id="lead_order_randomize">
                    <option></option>
                    <option value='Y'>Y</option>
                    <option value='N'>N</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="lead_order_randomize">List Order Randomize</label>
            </div>
        </div>
        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="lead_order_secondary" id="lead_order_secondary">
                    <option></option>
                    <option value='LEAD_ASCEND'>LEAD_ASCEND</option>
                    <option value='LEAD_DESCEND'>LEAD_DESCEND</option>
                    <option value='CALLTIME_ASCEND'>CALLTIME_ASCEND</option>
                    <option value='CALLTIME_DESCEND'>CALLTIME_DESCEND</option>
                    <option value='VENDOR_ASCEND'>VENDOR_ASCEND</option>
                    <option value='VENDOR_DESCEND'>VENDOR_DESCEND</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="lead_order_secondary">List Order Secondary</label>
            </div>
        </div>
        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="list_order_mix" id="list_order_mix">
                    <option></option>
                    <option value="DISABLED">DISABLED</option>
                    <option value="ACTIVE">ACTIVE ()</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="list_order_mix">List Mix</label>
            </div>
        </div>
        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="lead_filter_id" id="lead_filter_id">
                    <option></option>
                    <option value="">NONE</option>
                    <option value="DROP72HOUR">DROP72HOUR - UK 72 hour Drop No Call</option>
                    <option value="NONE">NONE -</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="lead_filter_id">Lead Filter</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 d-flex flex-row align-items-center">
            <input type="checkbox" id="hopper_drop_run_trigger" name="hopper_drop_run_trigger" class="mr-3 mb-2"
                value="<?= $datacamp['hopper_drop_run_trigger'] ?>">
            <label for="hopper_drop_run_trigger">Hopper Drop-Run Trigger</label>
        </div>

        <div class="my-input-with-help col-12 d-flex flex-row align-items-center mt-3 mb-5">
            <input type="checkbox" id="hopper_drop_run_trigger_all" name="hopper_drop_run_trigger_all" class="mr-3 mb-2"
                value="<?= $datacamp['hopper_drop_run_trigger_all'] ?>">
            <label for="hopper_drop_run_trigger_all">Hopper Drop-Run Trigger</label>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="drop_lockout_time" name="drop_lockout_time"
                    aria-describedby="drop_lockout_time" value="<?= $datacamp['drop_lockout_time'] ?>">
                <label for="drop_lockout_time">Drop Lockout Time</label>
            </div>
        </div>
        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="call_count_limit" name="call_count_limit"
                    aria-describedby="call_count_limit" value="<?= $datacamp['call_count_limit'] ?>">
                <label for="call_count_limit">Call Count Limit</label>
            </div>
        </div>
        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="call_count_target" name="call_count_target"
                    aria-describedby="call_count_target" value="<?= $datacamp['call_count_target'] ?>">
                <label for="call_count_target">Call Count Target</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="hopper_level" id="hopper_level">
                    <option></option>
                    <option>1</option>
                    <option>5</option>
                    <option>10</option>
                    <option>20</option>
                    <option>50</option>
                    <option>100</option>
                    <option>200</option>
                    <option>500</option>
                    <option>700</option>
                    <option>1000</option>
                    <option>2000</option>
                    <option>3000</option>
                    <option>4000</option>
                    <option>5000</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="hopper_level">Minimum Hopper Level</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="auto_hopper_multi" id="auto_hopper_multi">
                    <option></option>
                    <option>0.1</option>
                    <option>0.2</option>
                    <option>0.3</option>
                    <option>0.4</option>
                    <option>0.5</option>
                    <option>0.6</option>
                    <option>0.7</option>
                    <option>0.8</option>
                    <option>0.9</option>
                    <option>1.0</option>
                    <option>1.1</option>
                    <option>1.2</option>
                    <option>1.3</option>
                    <option>1.4</option>
                    <option>1.5</option>
                    <option>1.6</option>
                    <option>1.7</option>
                    <option>1.8</option>
                    <option>1.9</option>
                    <option>2.0</option>
                    <option>2.2</option>
                    <option>2.4</option>
                    <option>2.6</option>
                    <option>2.8</option>
                    <option>3.0</option>
                    <option>3.5</option>
                    <option>4.0</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="auto_hopper_multi">Automatic Hopper Multiplier</label>
            </div>
        </div>

        <div class="my-switch-field col-12 col-md-6 col-lg-4">
            <h6>Automatic Hopper Level</h6>
            <div class="switch-field ">
                <?php
                if ($datacamp['use_auto_hopper'] == 'Y') {
                    echo ' <input type="radio" id="use_auto_hopper-radio-one" name="use_auto_hopper" value="Y" check="yes" checked >
                <label for="use_auto_hopper-radio-one">Yes</label>
                <input type="radio" id="use_auto_hopper-radio-two" name="use_auto_hopper" value="N" check="no" >
                <label for="use_auto_hopper-radio-two">No</label>';
                } else {
                    echo ' <input type="radio" id="use_auto_hopper-radio-one" name="use_auto_hopper" value="Y" check="yes"  >
                <label for="use_auto_hopper-radio-one">Yes</label>
                <input type="radio" id="use_auto_hopper-radio-two" name="use_auto_hopper" value="N" check="no" checked>
                <label for="use_auto_hopper-radio-two">No</label>';
                }

                ?>


            </div>
        </div>

        <div class="my-switch-field col-12 col-md-6 col-lg-4">
            <h6>Auto Trim Hopper</h6>
            <div class="switch-field ">
                <?php
                if ($datacamp['auto_trim_hopper'] == 'Y') {
                    echo '   <input type="radio" id="auto_trim_hopper-radio-one" name="auto_trim_hopper"
                       value="Y" check="yes" checked />
                <label for="auto_trim_hopper-radio-one">Yes</label>
                <input type="radio" id="auto_trim_hopper-radio-two" name="auto_trim_hopper"
                       value="N" check="no"  />
                <label for="auto_trim_hopper-radio-two">No</label>';
                } else {
                    echo '   <input type="radio" id="auto_trim_hopper-radio-one" name="auto_trim_hopper"
                       value="Y" check="yes" />
                <label for="auto_trim_hopper-radio-one">Yes</label>
                <input type="radio" id="auto_trim_hopper-radio-two" name="auto_trim_hopper"
                       value="N" check="no" checked />
                <label for="auto_trim_hopper-radio-two">No</label>';
                }


                ?>


            </div>
        </div>

        <div class="my-switch-field col-12 col-md-6 col-lg-4">
            <h6>Hopper VLC Dup Check</h6>
            <div class="switch-field ">
                <?php
                if ($datacamp['hopper_vlc_dup_check'] == 'Y') {
                    echo '<input type="radio" id="hopper_vlc_dup_check-radio-one"
                       name="hopper_vlc_dup_check" value="Y" check="yes" checked/>
                <label for="hopper_vlc_dup_check-radio-one">Yes</label>
                <input type="radio" id="hopper_vlc_dup_check-radio-two"
                       name="hopper_vlc_dup_check" value="N" check="no"/>
                <label for="hopper_vlc_dup_check-radio-two">No</label>';
                } else {
                    echo '<input type="radio" id="hopper_vlc_dup_check-radio-one"
                       name="hopper_vlc_dup_check" value="Y" check="yes" />
                <label for="hopper_vlc_dup_check-radio-one">Yes</label>
                <input type="radio" id="hopper_vlc_dup_check-radio-two"
                       name="hopper_vlc_dup_check" value="N" check="no" checked/>
                <label for="hopper_vlc_dup_check-radio-two">No</label>';
                }
                ?>

            </div>
        </div>

        <div class="my-switch-field col-12 col-md-6 col-lg-4">
            <h6>Manual Dial Hopper Check</h6>
            <div class="switch-field ">
                <?php
                if ($datacamp['manual_dial_hopper_check'] == 'Y') {
                    echo '  <input type="radio" id="manual_dial_hopper_check-radio-one"
                       name="manual_dial_hopper_check" value="Y" check="yes" checked/>
                <label for="manual_dial_hopper_check-radio-one">Yes</label>
                <input type="radio" id="manual_dial_hopper_check-radio-two"
                       name="manual_dial_hopper_check" value="N" check="no"/>
                <label for="manual_dial_hopper_check-radio-two">No</label>';
                } else {
                    echo '  <input type="radio" id="manual_dial_hopper_check-radio-one"
                       name="manual_dial_hopper_check" value="Y" check="yes" />
                <label for="manual_dial_hopper_check-radio-one">Yes</label>
                <input type="radio" id="manual_dial_hopper_check-radio-two"
                       name="manual_dial_hopper_check" value="N" check="no" checked/>
                <label for="manual_dial_hopper_check-radio-two">No</label>';
                }
                ?>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="dial_method" id="dial_method">
                    <option></option>
                    <option value='MANUAL'>MANUAL</option>
                    <option value='RATIO'>RATIO</option>
                    <option value='ADAPT_HARD_LIMIT'>ADAPT_HARD_LIMIT</option>
                    <option value='ADAPT_TAPERED'>ADAPT_TAPERED</option>
                    <option value='ADAPT_AVERAGE'>ADAPT_AVERAGE</option>
                    <option value='INBOUND_MAN'>INBOUND_MAN</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="dial_method">Dial Method</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">
                <select name="auto_dial_level" id="auto_dial_level">
                    <option></option>
                    <option>0</option>
                    <option>1</option>
                    <option>1.1</option>
                    <option>1.2</option>
                    <option>1.3</option>
                    <option>1.4</option>
                    <option>1.5</option>
                    <option>1.6</option>
                    <option>1.7</option>
                    <option>1.8</option>
                    <option>1.9</option>
                    <option>2</option>
                    <option>2.1</option>
                    <option>2.2</option>
                    <option>2.3</option>
                    <option>2.4</option>
                    <option>2.5</option>
                    <option>2.6</option>
                    <option>2.7</option>
                    <option>2.8</option>
                    <option>2.9</option>
                    <option>3</option>
                    <option>3.25</option>
                    <option>3.5</option>
                    <option>3.75</option>
                    <option>4</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="auto_dial_level">Auto Dial Level</label>
            </div>
        </div>


        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="dial_level_threshold" id="dial_level_threshold" uired>
                    <option></option>
                    <option value='DISABLED'>DISABLED</option>
                    <option value='LOGGED-IN_AGENTS'>LOGGED-IN_AGENTS</option>
                    <option value='NON-PAUSED_AGENTS'>NON-PAUSED_AGENTS</option>
                    <option value='WAITING_AGENTS'>WAITING_AGENTS</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="dial_level_threshold">Auto Dial Level Threshold</label>
            </div>
        </div>


        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="dial_level_threshold_agents" id="dial_level_threshold_agents" uired>
                    <option></option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                    <option>35</option>
                    <option>40</option>
                    <option>50</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="dial_level_threshold_agents">Auto Dial Threshold Agent</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="available_only_tally_threshold" id="available_only_tally_threshold" uired>
                    <option></option>
                    <option value='DISABLED'>DISABLED</option>
                    <option value='LOGGED-IN_AGENTS'>LOGGED-IN_AGENTS</option>
                    <option value='NON-PAUSED_AGENTS'>NON-PAUSED_AGENTS</option>
                    <option value='WAITING_AGENTS'>WAITING_AGENTS</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="available_only_tally_threshold">Available Only Tally
                    Threshold</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="available_only_tally_threshold_agents" id="available_only_tally_threshold_agents" uired>
                    <option></option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                    <option>35</option>
                    <option>40</option>
                    <option>50</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="available_only_tally_threshold_agents">Available Only Tally
                    Threshold Agent</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="adaptive_dropped_percentage" id="adaptive_dropped_percentage" uired>
                    <option></option>
                    <option>100</option>
                    <option>99</option>
                    <option>98</option>
                    <option>97</option>
                    <option>96</option>
                    <option>95</option>
                    <option>94</option>
                    <option>93</option>
                    <option>92</option>
                    <option>91</option>
                    <option>90</option>
                    <option>89</option>
                    <option>88</option>
                    <option>87</option>
                    <option>86</option>
                    <option>85</option>
                    <option>84</option>
                    <option>83</option>
                    <option>82</option>
                    <option>81</option>
                    <option>80</option>
                    <option>79</option>
                    <option>78</option>
                    <option>77</option>
                    <option>76</option>
                    <option>75</option>
                    <option>74</option>
                    <option>73</option>
                    <option>72</option>
                    <option>71</option>
                    <option>70</option>
                    <option>69</option>
                    <option>68</option>
                    <option>67</option>
                    <option>66</option>
                    <option>65</option>
                    <option>64</option>
                    <option>63</option>
                    <option>62</option>
                    <option>61</option>
                    <option>60</option>
                    <option>59</option>
                    <option>58</option>
                    <option>57</option>
                    <option>56</option>
                    <option>55</option>
                    <option>54</option>
                    <option>53</option>
                    <option>52</option>
                    <option>51</option>
                    <option>50</option>
                    <option>49</option>
                    <option>48</option>
                    <option>47</option>
                    <option>46</option>
                    <option>45</option>
                    <option>44</option>
                    <option>43</option>
                    <option>42</option>
                    <option>41</option>
                    <option>40</option>
                    <option>39</option>
                    <option>38</option>
                    <option>37</option>
                    <option>36</option>
                    <option>35</option>
                    <option>34</option>
                    <option>33</option>
                    <option>32</option>
                    <option>31</option>
                    <option>30</option>
                    <option>29</option>
                    <option>28</option>
                    <option>27</option>
                    <option>26</option>
                    <option>25</option>
                    <option>24</option>
                    <option>23</option>
                    <option>22</option>
                    <option>21</option>
                    <option>20</option>
                    <option>19</option>
                    <option>18</option>
                    <option>17</option>
                    <option>16</option>
                    <option>15</option>
                    <option>14</option>
                    <option>13</option>
                    <option>12</option>
                    <option>11</option>
                    <option>10</option>
                    <option>9</option>
                    <option>8</option>
                    <option>7</option>
                    <option>6</option>
                    <option>5</option>
                    <option>4</option>
                    <option>3</option>
                    <option>2.9</option>
                    <option>2.8</option>
                    <option>2.7</option>
                    <option>2.6</option>
                    <option>2.5</option>
                    <option>2.4</option>
                    <option>2.3</option>
                    <option>2.2</option>
                    <option>2.1</option>
                    <option>2</option>
                    <option>1.9</option>
                    <option>1.8</option>
                    <option>1.7</option>
                    <option>1.6</option>
                    <option>1.5</option>
                    <option>1.4</option>
                    <option>1.3</option>
                    <option>1.2</option>
                    <option>1.1</option>
                    <option>1</option>
                    <option>0.9</option>
                    <option>0.8</option>
                    <option>0.7</option>
                    <option>0.6</option>
                    <option>0.5</option>
                    <option>0.4</option>
                    <option>0.3</option>
                    <option>0.2</option>
                    <option>0.099999999999998</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="adaptive_dropped_percentage">Drop Percentage Limit</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="adaptive_maximum_level" name="adaptive_maximum_level"
                    aria-describedby="adaptive_maximum_level" value="<?= $datacamp['adaptive_maximum_level'] ?>" uired>
                <label for="adaptive_maximum_level">Maximum Adapt Dial Level</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="adaptive_latest_server_time"
                    name="adaptive_latest_server_time" aria-describedby="adaptive_latest_server_time" maxlength="4"
                    value="<?= $datacamp['adaptive_latest_server_time'] ?>" uired>
                <label for="adaptive_latest_server_time">Latest Server Time (4 digit
                    only)</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="adaptive_intensity" id="adaptive_intensity" uired>
                    <option></option>
                    <option value="40">40 - More Intense</option>
                    <option value="39">39 - More Intense</option>
                    <option value="38">38 - More Intense</option>
                    <option value="37">37 - More Intense</option>
                    <option value="36">36 - More Intense</option>
                    <option value="35">35 - More Intense</option>
                    <option value="34">34 - More Intense</option>
                    <option value="33">33 - More Intense</option>
                    <option value="32">32 - More Intense</option>
                    <option value="31">31 - More Intense</option>
                    <option value="30">30 - More Intense</option>
                    <option value="29">29 - More Intense</option>
                    <option value="28">28 - More Intense</option>
                    <option value="27">27 - More Intense</option>
                    <option value="26">26 - More Intense</option>
                    <option value="25">25 - More Intense</option>
                    <option value="24">24 - More Intense</option>
                    <option value="23">23 - More Intense</option>
                    <option value="22">22 - More Intense</option>
                    <option value="21">21 - More Intense</option>
                    <option value="20">20 - More Intense</option>
                    <option value="19">19 - More Intense</option>
                    <option value="18">18 - More Intense</option>
                    <option value="17">17 - More Intense</option>
                    <option value="16">16 - More Intense</option>
                    <option value="15">15 - More Intense</option>
                    <option value="14">14 - More Intense</option>
                    <option value="13">13 - More Intense</option>
                    <option value="12">12 - More Intense</option>
                    <option value="11">11 - More Intense</option>
                    <option value="10">10 - More Intense</option>
                    <option value="9">9 - More Intense</option>
                    <option value="8">8 - More Intense</option>
                    <option value="7">7 - More Intense</option>
                    <option value="6">6 - More Intense</option>
                    <option value="5">5 - More Intense</option>
                    <option value="4">4 - More Intense</option>
                    <option value="3">3 - More Intense</option>

                    <option value="-26">-26 - Less Intense</option>
                    <option value="-27">-27 - Less Intense</option>
                    <option value="-28">-28 - Less Intense</option>
                    <option value="-29">-29 - Less Intense</option>
                    <option value="-30">-30 - Less Intense</option>
                    <option value="-31">-31 - Less Intense</option>
                    <option value="-32">-32 - Less Intense</option>
                    <option value="-33">-33 - Less Intense</option>
                    <option value="-34">-34 - Less Intense</option>
                    <option value="-35">-35 - Less Intense</option>
                    <option value="-36">-36 - Less Intense</option>
                    <option value="-37">-37 - Less Intense</option>
                    <option value="-38">-38 - Less Intense</option>
                    <option value="-39">-39 - Less Intense</option>
                    <option value="-40">-40 - Less Intense</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="adaptive_intensity">Adapt Intensity Modifier</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="adaptive_dl_diff_target" id="adaptive_dl_diff_target" uired>
                    <option></option>
                    <option value="40">40 --- 40 Calls Waiting for Agents</option>
                    <option value="39">39 --- 39 Calls Waiting for Agents</option>
                    <option value="38">38 --- 38 Calls Waiting for Agents</option>
                    <option value="37">37 --- 37 Calls Waiting for Agents</option>
                    <option value="36">36 --- 36 Calls Waiting for Agents</option>
                    <option value="35">35 --- 35 Calls Waiting for Agents</option>
                    <option value="34">34 --- 34 Calls Waiting for Agents</option>
                    <option value="33">33 --- 33 Calls Waiting for Agents</option>
                    <option value="32">32 --- 32 Calls Waiting for Agents</option>
                    <option value="-33">-33 --- 33 Agents Waiting for Calls</option>
                    <option value="-34">-34 --- 34 Agents Waiting for Calls</option>
                    <option value="-35">-35 --- 35 Agents Waiting for Calls</option>
                    <option value="-36">-36 --- 36 Agents Waiting for Calls</option>
                    <option value="-37">-37 --- 37 Agents Waiting for Calls</option>
                    <option value="-38">-38 --- 38 Agents Waiting for Calls</option>
                    <option value="-39">-39 --- 39 Agents Waiting for Calls</option>
                    <option value="-40">-40 --- 40 Agents Waiting for Calls</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="adaptive_dl_diff_target">Dial Level Difference Target</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="dl_diff_target_method" id="dl_diff_target_method" uired>
                    <option></option>
                    <option value='ADAPT_CALC_ONLY'>ADAPT_CALC_ONLY</option>
                    <option value='CALLS_PLACED'>CALLS_PLACED</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="dl_diff_target_method">Dial Level Difference Target Method</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="concurrent_transfers" id="concurrent_transfers" uired>
                    <option></option>
                    >
                    <option value='AUTO'>AUTO</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                    <option>40</option>
                    <option>50</option>
                    <option>60</option>
                    <option>80</option>
                    <option>100</option>
                    <option>1000</option>
                    <option>10000</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="concurrent_transfers">Concurrent Transfers</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="queue_priority" id="queue_priority" uired>
                    <option></option>
                    <option value="99">99 - Higher</option>
                    <option value="98">98 - Higher</option>
                    <option value="97">97 - Higher</option>

                    <option value="57">57 - Higher</option>


                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="queue_priority">Queue Priority</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="drop_rate_group" id="drop_rate_group" uired>
                    <option></option>
                    <option value="DISABLED">DISABLED</option>
                    <option value="101">101 ( -EMPTY- )</option>
                    <option value="102">102 ( -EMPTY- )</option>
                    <option value="103">103 ( -EMPTY- )</option>
                    <option value="104">104 ( -EMPTY- )</option>
                    <option value="105">105 ( -EMPTY- )</option>
                    <option value="106">106 ( -EMPTY- )</option>
                    <option value="107">107 ( -EMPTY- )</option>
                    <option value="108">108 ( -EMPTY- )</option>
                    <option value="109">109 ( -EMPTY- )</option>
                    <option value="110">110 ( -EMPTY- )</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="drop_rate_group">Multiple Campaign Drop Rate Group</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="inbound_queue_no_dial" id="inbound_queue_no_dial" uired>
                    <option></option>
                    <option value='DISABLED'>DISABLED</option>
                    <option value='ENABLED'>ENABLED</option>
                    <option value='ALL_SERVERS'>ALL_SERVERS</option>
                    <option value='ENABLED_WITH_CHAT'>ENABLED_WITH_CHAT</option>
                    <option value='ALL_SERVERS_WITH_CHAT'>ALL_SERVERS_WITH_CHAT</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="inbound_queue_no_dial">Inbound Queue No Dial</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="inbound_no_agents_no_dial_container" id="inbound_no_agents_no_dial_container" uired>
                    <option></option>
                    <option value="">---DISABLED---</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="inbound_no_agents_no_dial_container">Inbound No-Agents
                    No-Dial</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="number" class="form-control" id="inbound_no_agents_no_dial_threshold"
                    name="inbound_no_agents_no_dial_threshold" aria-describedby="inbound_no_agents_no_dial_threshold"
                    value="<?= $datacamp['inbound_no_agents_no_dial_threshold'] ?>" uired>
                <label for="inbound_no_agents_no_dial_threshold">Inbound No-Agents No-Dial
                    Threshold</label>
            </div>
        </div>

        <!--        <div class="my-switch-field col-12 col-md-6 col-lg-4 mb-5">-->
        <!--            <h6>Force Reset of Hopper</h6>-->
        <!--            <div class="switch-field ">-->
        <!---->
        <!--                <input type="radio" id="reset_hopper-radio-one" name="reset_hopper" value="Y"-->
        <!--                       check="yes" checked/>-->
        <!--                <label for="reset_hopper-radio-one">Yes</label>-->
        <!--                <input type="radio" id="reset_hopper-radio-two" name="reset_hopper" value="N"-->
        <!--                       check="no"/>-->
        <!--                <label for="reset_hopper-radio-two">No</label>-->
        <!--            </div>-->
        <!--        </div>-->

        <div class="my-input-with-help col-12 col-md-6 col-lg-8 d-flex flex-row align-items-center mb-5">
            <input type="checkbox" id="dial_level_override" name="dial_level_override" class="mr-3 mb-2"
                value="<?= $datacamp['dial_level_override'] ?>">
            <label for="dial_level_override">Adapt Override</label>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="auto_alt_dial" id="auto_alt_dial" uired>
                    <option></option>
                    <option value='NONE'>NONE</option>
                    <option value='ALT_ONLY'>ALT_ONLY</option>
                    <option value='ADDR3_ONLY'>ADDR3_ONLY</option>
                    <option value='ALT_AND_ADDR3'>ALT_AND_ADDR3</option>
                    <option value='ALT_AND_EXTENDED'>ALT_AND_EXTENDED</option>
                    <option value='ALT_AND_ADDR3_AND_EXTENDED'>ALT_AND_ADDR3_AND_EXTENDED
                    </option>
                    <option value='EXTENDED_ONLY'>EXTENDED_ONLY</option>
                    <option value='MULTI_LEAD'>MULTI_LEAD</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="auto_alt_dial">Auto Alt-Number Dialing</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="next_agent_call" id="next_agent_call" uired>
                    <option></option>
                    <option value='random'>random</option>
                    <option value='oldest_call_start'>oldest_call_start</option>
                    <option value='oldest_call_finish'>oldest_call_finish</option>
                    <option value='overall_user_level'>overall_user_level</option>
                    <option value='campaign_rank'>campaign_rank</option>
                    <option value='campaign_grade_random'>campaign_grade_random</option>
                    <option value='fewest_calls'>fewest_calls</option>
                    <option value='longest_wait_time'>longest_wait_time</option>
                    <option value='overall_user_level_wait_time'>overall_user_level_wait_time
                    </option>
                    <option value='campaign_rank_wait_time'>campaign_rank_wait_time</option>
                    <option value='fewest_calls_wait_time'>fewest_calls_wait_time</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="next_agent_call">Next Agent Call</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="local_call_time" id="local_call_time" uired>
                    <option></option>
                    <option value="12pm-5pm">12pm-5pm - default 12pm to 5pm calling</option>
                    <option value="12pm-9pm">12pm-9pm - default 12pm to 9pm calling</option>
                    <option value="24hours">24hours - default 24 hours calling</option>
                    <option value="5pm-9pm">5pm-9pm - default 5pm to 9pm calling</option>
                    <option value="9am-5pm">9am-5pm - default 9am to 5pm calling</option>
                    <option value="9am-9pm">9am-9pm - default 9am to 9pm calling</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="local_call_time">Local Call Time</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="dial_timeout" name="dial_timeout"
                    aria-describedby="dial_timeout" maxlength="3" value="<?= $datacamp['dial_timeout'] ?>" uired>
                <label for="dial_timeout">Dial Timeout</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="dial_timeout_lead_container" id="dial_timeout_lead_container" uired>
                    <option></option>
                    <option value='DISABLED'>DISABLED</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="dial_timeout_lead_container">Dial Timeout Lead Container</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="dial_prefix" name="dial_prefix"
                    aria-describedby="dial_prefix" value="<?= $datacamp['dial_prefix'] ?>" uired>
                <label for="dial_prefix">Dial Prefix</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="manual_dial_prefix" name="manual_dial_prefix"
                    aria-describedby="manual_dial_prefix" value="<?= $datacamp['manual_dial_prefix'] ?>" uired>
                <label for="manual_dial_prefix">Manual Dial Prefix</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="campaign_cid" name="campaign_cid"
                    aria-describedby="campaign_cid" value="<?= $datacamp['campaign_cid'] ?>" uired>
                <label for="campaign_cid">Campaign CallerID</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="use_custom_cid" id="use_custom_cid" uired>
                    <option></option>
                    <option value='Y'>Y</option>
                    <option value='N'>N</option>
                    <option value='AREACODE'>AREACODE</option>
                    <option value='USER_CUSTOM_1'>USER_CUSTOM_1</option>
                    <option value='USER_CUSTOM_2'>USER_CUSTOM_2</option>
                    <option value='USER_CUSTOM_3'>USER_CUSTOM_3</option>
                    <option value='USER_CUSTOM_4'>USER_CUSTOM_4</option>
                    <option value='USER_CUSTOM_5'>USER_CUSTOM_5</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="use_custom_cid">Custom CallerID</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="cid_group_id" id="cid_group_id" uired>
                    <option></option>
                    <option value="---DISABLED---">---DISABLED---</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="cid_group_id">CID Group</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="campaign_vdad_exten" name="campaign_vdad_exten"
                    aria-describedby="campaign_vdad_exten" value="<?= $datacamp['campaign_vdad_exten'] ?>" uired>
                <label for="campaign_vdad_exten">Routing Extension</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="campaign_rec_exten" name="campaign_rec_exten"
                    aria-describedby="campaign_rec_exten" value="<?= $datacamp['campaign_rec_exten'] ?>" uired>
                <label for="campaign_rec_exten">Campaign Rec exten</label>
            </div>
        </div>

        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
            <div class="my-dropdown">

                <select name="campaign_recording" id="campaign_recording" uired>
                    <option></option>
                    <option value='NEVER'>NEVER</option>
                    <option value='ONDEMAND'>ONDEMAND</option>
                    <option value='ALLCALLS'>ALLCALLS</option>
                    <option value='ALLFORCE'>ALLFORCE</option>
                </select>
                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                <label for="campaign_recording">Campaign Recording</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="campaign_vdad_exten" name="campaign_vdad_exten"
                    aria-describedby="campaign_vdad_exten" value="<?= $datacamp['campaign_vdad_exten'] ?>" uired>
                <label for="campaign_vdad_exten">Routing Extension</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="campaign_rec_filename" name="campaign_rec_filename"
                    aria-describedby="campaign_rec_filename" value="<?= $datacamp['campaign_rec_filename'] ?>" uired>
                <label for="campaign_rec_filename">Campaign Rec Filename</label>
            </div>
        </div>

        <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
            <div class="form-group my-input">

                <input type="text" class="form-control" id="allcalls_delay" name="allcalls_delay"
                    aria-describedby="allcalls_delay" value="<?= $datacamp['allcalls_delay'] ?>" uired>
                <label for="allcalls_delay">Recording Delay</label>
            </div>
        </div>

        <div class="my-switch-field col-12 col-md-6 col-lg-4">
            <h6>Omit Phone Code</h6>
            <div class="switch-field ">
                <?php
                if ($datacamp['omit_phone_code'] == 'Y') {
                    echo ' <input type="radio" id="omit_phone_code-radio-one" name="omit_phone_code" value="Y" check="yes"
                       checked/>
                <label for="omit_phone_code-radio-one">Yes</label>
                <input type="radio" id="omit_phone_code-radio-two" name="omit_phone_code" value="N" check="no"/>
                <label for="omit_phone_code-radio-two">No</label>';
                } else {
                    echo ' <input type="radio" id="omit_phone_code-radio-one" name="omit_phone_code" value="Y" check="yes"
                       />
                <label for="omit_phone_code-radio-one">Yes</label>
                <input type="radio" id="omit_phone_code-radio-two" name="omit_phone_code" value="N" check="no" checked/>
                <label for="omit_phone_code-radio-two">No</label>';
                }

                ?>


            </div>
        </div>

        <div class="my-switch-field col-12 col-md-6 col-lg-4">
            <h6>Routing Initiated Recording</h6>
            <div class="switch-field ">

                <?php
                if ($datacamp['routing_initiated_recordings'] == 'Y') {
                    echo '<input type="radio" id="routing_initiated_recordings-radio-one"
                       name="routing_initiated_recordings" value="Y" check="yes"
                       checked/>
                <label for="routing_initiated_recordings-radio-one">Yes</label>
                <input type="radio" id="routing_initiated_recordings-radio-two"
                       name="routing_initiated_recordings" value="N" check="no"/>
                <label for="routing_initiated_recordings-radio-two">No</label>';
                } else {
                    echo '<input type="radio" id="routing_initiated_recordings-radio-one"
                       name="routing_initiated_recordings" value="Y" check="yes"
                       />
                <label for="routing_initiated_recordings-radio-one">Yes</label>
                <input type="radio" id="routing_initiated_recordings-radio-two"
                       name="routing_initiated_recordings" value="N" check="no" checked/>
                <label for="routing_initiated_recordings-radio-two">No</label>';
                }

                ?>

            </div>
        </div>

    </div>
    <input class="my-btn-secondary mt-md-4 cancel-btn" type="reset" value="Cancel">
    <input class="my-btn-primary mt-md-4 submit-btn" type="submit" value="Submit" name="campaign1">
</form>