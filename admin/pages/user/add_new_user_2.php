<?php
if (isset($_GET['id'])) {
    $usereId = $_GET['id'];
    $sql = "Select * from vicidial_users where user_id=$usereId";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result);

}


if (isset($_POST['submit'])) {
    $user['next_dial_my_callbacks'] = $_POST['next_dial_my_callbacks'];
    $user['vicidial_recording_override'] = $_POST['vicidial_recording_override'];
    $user['alter_custdata_override'] = $_POST['alter_custdata_override'];
    $user['alter_custphone_override'] = $_POST['alter_custphone_override'];
    $user['agent_shift_enforcement_override'] = $_POST['agent_shift_enforcement_override'];
    $user['agent_call_log_view_override'] = $_POST['agent_call_log_view_override'];
    $user['hide_call_log_info'] = $_POST['hide_call_log_info'];
    $user['agent_lead_search'] = $_POST['agent_lead_search'];
    $user['lead_filter_id'] = $_POST['lead_filter_id'];
    $user['preset_contact_search'] = $_POST['preset_contact_search'];
    $user['max_inbound_calls'] = $_POST['max_inbound_calls'];
    $user['max_hopper_calls'] = $_POST['max_hopper_calls'];
    $user['max_hopper_calls_hour'] = $_POST['max_hopper_calls_hour'];
    $user['wrapup_seconds_override'] = $_POST['wrapup_seconds_override'];
    $user['ready_max_logout'] = $_POST['ready_max_logout'];
    $user['status_group_id'] = $_POST['status_group_id'];
    $user['custom_one'] = $_POST['custom_one'];
    $user['custom_two'] = $_POST['custom_two'];
    $user['custom_three'] = $_POST['custom_three'];
    $user['custom_four'] = $_POST['custom_four'];
    $user['custom_five'] = $_POST['custom_five'];
    $user['max_inbound_filter_statuses'] = $_POST['max_inbound_filter_statuses'];
    $user['max_inbound_filter_ingroups'] = $_POST['max_inbound_filter_ingroups'];
    $user['max_inbound_filter_min_sec'] = $_POST['max_inbound_filter_min_sec'];
    $user['agent_choose_blended'] = $_POST['agent_choose_blended'];
    $user['hotkeys_active'] = $_POST['hotkeys_active'];
    $user['scheduled_callbacks'] = $_POST['scheduled_callbacks'];
    $user['agentonly_callbacks'] = $_POST['agentonly_callbacks'];
    $user['agentcall_manual'] = $_POST['agentcall_manual'];
    $user['agentcall_email'] = $_POST['agentcall_email'];
    $user['agentcall_chat'] = $_POST['agentcall_chat'];
    $user['vicidial_recording'] = $_POST['vicidial_recording'];
    $user['vicidial_transfers'] = $_POST['vicidial_transfers'];
    $user['closer_default_blended'] = $_POST['closer_default_blended'];
    $user['agent_choose_ingroups'] = $_POST['agent_choose_ingroups'];
    $user['max_inbound_filter_enabled'] = $_POST['max_inbound_filter_enabled'];
    $user['allow_alerts'] = $_POST['allow_alerts'];
    $sqlUpdate = "UPDATE `vicidial_users` SET `next_dial_my_callbacks`='" . $user['next_dial_my_callbacks'] . "',vicidial_recording_override='" . $user['vicidial_recording_override'] . "',alter_custdata_override='" . $user['alter_custdata_override'] . "',alter_custphone_override='" . $user['alter_custphone_override'] . "',agent_shift_enforcement_override='" . $user['agent_shift_enforcement_override'] . "',agent_call_log_view_override='" . $user['agent_call_log_view_override'] . "',hide_call_log_info='" . $user['hide_call_log_info'] . "',agent_lead_search='" . $user['agent_lead_search'] . "',lead_filter_id='" . $user['lead_filter_id'] . "',preset_contact_search='" . $user['preset_contact_search'] . "',max_inbound_calls='" . $user['max_inbound_calls'] . "',max_hopper_calls='" . $user['max_hopper_calls'] . "',max_hopper_calls_hour='" . $user['max_hopper_calls_hour'] . "',wrapup_seconds_override='" . $user['wrapup_seconds_override'] . "',ready_max_logout='" . $user['ready_max_logout'] . "',status_group_id='" . $user['status_group_id'] . "',custom_one='" . $user['custom_one'] . "',custom_two='" . $user['custom_two'] . "',custom_three='" . $user['custom_three'] . "',custom_four='" . $user['custom_four'] . "',custom_five='" . $user['custom_five'] . "',max_inbound_filter_statuses='" . $user['max_inbound_filter_statuses'] . "',max_inbound_filter_ingroups='" . $user['max_inbound_filter_ingroups'] . "',max_inbound_filter_min_sec='" . $user['max_inbound_filter_min_sec'] . "',agent_choose_blended='" . $user['agent_choose_blended'] . "',hotkeys_active='" . $user['hotkeys_active'] . "',scheduled_callbacks='" . $user['scheduled_callbacks'] . "',agentonly_callbacks='" . $user['agentonly_callbacks'] . "',agentcall_manual='" . $user['agentcall_manual'] . "',agentcall_email='".$user['agentcall_email']."',agentcall_chat='".$user['agentcall_chat']."',vicidial_recording='".$user['vicidial_recording']."',vicidial_transfers='".$user['vicidial_transfers']."',closer_default_blended='".$user['closer_default_blended']."',agent_choose_ingroups='".$user['agent_choose_ingroups']."',max_inbound_filter_enabled='".$user['max_inbound_filter_enabled']."',allow_alerts='".$user['allow_alerts']."', WHERE user_id =" . $user['user_id'];
    echo $sqlUpdate;
}
?>


<!-- Code goes here -->

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
    <h3>Agent Interface Options</h3>
    <form action="" method="POST">
        <!--        <div class="alert alert-danger" role="alert">-->
        <!--            Invalid Inputs!-->
        <!--        </div>-->
        <div class="row">
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select id="next_dial_my_callbacks" name="next_dial_my_callbacks">
                        <option></option>
                        <option value="NOT_ACTIVE">NOT_ACTIVE</option>
                        <option value="ENABLED">ENABLED</option>
                        <option value="DISABLED">DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="next_dial_my_callbacks">Next-Dial My Callbacks Override</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select id="vicidial_recording_override" name="vicidial_recording_override">
                        <option></option>
                        <option value="DISABLED">DISABLED</option>
                        <option value="NEVER">NEVER</option>
                        <option value="ONDEMAND">ONDEMAND</option>
                        <option value="ALLCALLS">ALLCALLS</option>
                        <option value="ALLFORCE">ALLFORCE</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="vicidial_recording_override">Agent Recording Override</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="alter_custdata_override" id="alter_custdata_override">
                        <option></option>
                        <option value="NOT_ACTIVE">NOT_ACTIVE</option>
                        <option value="ALLOW_ALTER">ALLOW_ALTER</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="alter_custdata_override">Agent Alter Customer Data Override </label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="alter_custphone_override" id="alter_custphone_override">
                        <option></option>
                        <option value="NOT_ACTIVE">NOT_ACTIVE</option>
                        <option value="ALLOW_ALTER">ALLOW_ALTER</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="alter_custphone_override">Agent Alter Customer Phone Override</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="agent_shift_enforcement_override" id="agent_shift_enforcement_override">
                        <option></option>
                        <option value="DISABLED">DISABLED</option>
                        <option value="OFF">OFF</option>
                        <option value="START">START</option>
                        <option value="ALL">ALL</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="agent_shift_enforcement_override">Agent Shift Enforcement Override</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="agent_call_log_view_override" id="agent_call_log_view_override">
                        <option></option>
                        <option value="DISABLED">DISABLED</option>
                        <option value="Y">Y</option>
                        <option value="N">N</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="agent_call_log_view_override">Agent Call Log View Override</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="hide_call_log_info" id="hide_call_log_info">
                        <option></option>
                        <option value="DISABLED">DISABLED</option>
                        <option value="Y">Y</option>
                        <option value="N">N</option>
                        <option value="SHOW_1">SHOW_1</option>
                        <option value="SHOW_2">SHOW_2</option>
                        <option value="SHOW_3">SHOW_3</option>
                        <option value="SHOW_4">SHOW_4</option>
                        <option value="SHOW_5">SHOW_5</option>
                        <option value="SHOW_6">SHOW_6</option>
                        <option value="SHOW_7">SHOW_7</option>
                        <option value="SHOW_8">SHOW_8</option>
                        <option value="SHOW_9">SHOW_9</option>
                        <option value="SHOW_10">SHOW_10</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="hide_call_log_info">Campaign Hide Call Log Override</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="agent_lead_search" id="agent_lead_search">
                        <option></option>
                        <option value="DISABLED">DISABLED</option>
                        <option value="ENABLED">ENABLED</option>
                        <option value="LIVE_CALL_INBOUND">LIVE_CALL_INBOUND</option>
                        <option value="LIVE_CALL_INBOUND_AND_MANUAL">LIVE_CALL_INBOUND_AND_MANUAL</option>
                        <option value="NOT_ACTIVE">NOT_ACTIVE</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="agent_lead_search">Agent Lead Search Override</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="lead_filter_id" id="lead_filter_id">
                        <option></option>
                        <option value="--">--</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="lead_filter_id">Lead Filter</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="preset_contact_search" id="preset_contact_search">
                        <option></option>
                        <option value="NOT_ACTIVE">NOT_ACTIVE</option>
                        <option value="DISABLED">DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="preset_contact_search">Preset Contact Search</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="max_inbound_calls"
                           name="max_inbound_calls" aria-describedby="max_inbound_calls">
                    <label for="max_inbound_calls">Max Inbound Calls</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="max_hopper_calls"
                           name="max_hopper_calls" aria-describedby="max_hopper_calls">
                    <label for="max_hopper_calls">Max Manual Dial Hopper Calls</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="max_hopper_calls_hour"
                           name="max_hopper_calls_hour" aria-describedby="max_hopper_calls_hour">
                    <label for="max_hopper_calls_hour">Max Manual Dial Hopper Calls Per Hour</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="wrapup_seconds_override"
                           name="wrapup_seconds_override" aria-describedby="wrapup_seconds_override">
                    <label for="wrapup_seconds_override">Wrap Seconds Override</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="ready_max_logout"
                           name="ready_max_logout" aria-describedby="ready_max_logout">
                    <label for="ready_max_logout">Agent Ready Max Logout Override</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="status_group_id" id="status_group_id">
                        <option></option>
                        <option value="none">NONE</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="status_group_id">Additional Status Group</label>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="custom_one"
                           name="custom_one" aria-describedby="custom_one">
                    <label for="custom_one">Custom 1</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="custom_two"
                           name="custom_two" aria-describedby="custom_two">
                    <label for="custom_two">Custom 2</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="custom_three"
                           name="custom_three" aria-describedby="custom_three">
                    <label for="custom_three">Custom 3</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="custom_four"
                           name="custom_four" aria-describedby="custom_four">
                    <label for="custom_four">Custom 4</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="custom_five"
                           name="custom_five" aria-describedby="custom_five">
                    <label for="custom_five">Custom 5</label>
                </div>
            </div>
        </div>
        <h3 class="my-5">Max Inbound Calls Filtering Options</h3>
        <div class="row">
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select id="max_inbound_filter_statuses" name="max_inbound_filter_statuses">
                        <option></option>
                        <option value="null">Null</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="max_inbound_filter_statuses">Filter Statuses</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select id="max_inbound_filter_ingroups" name="max_inbound_filter_ingroups">
                        <option></option>
                        <option value="null">Null</option>

                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="max_inbound_filter_ingroups">Filter In-Groups</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="max_inbound_filter_min_sec"
                           name="max_inbound_filter_min_sec" aria-describedby="max_inbound_filter_min_sec">
                    <label for="max_inbound_filter_min_sec">Filter Minimum Seconds</label>
                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Agent Choose Blended</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['agent_choose_blended'] == 1) {
                        echo '<input type="radio" id="agent-choose-switch-one" name="agent_choose_blended" value="1"
                           check="yes"
                           checked/>
                    <label for="agent-choose-switch-one">Yes</label>
                    <input type="radio" id="agent-choose-switch-two" name="agent_choose_blended" value="0"
                           check="no"/>
                    <label for="agent-choose-switch-two">No</label>';
                    } else {
                        echo '<input type="radio" id="agent-choose-switch-one" name="agent_choose_blended" value="1"
                           check="yes"
                         />
                    <label for="agent-choose-switch-one">Yes</label>
                    <input type="radio" id="agent-choose-switch-two" name="agent_choose_blended" value="0"
                           check="no" checked/>
                    <label for="agent-choose-switch-two">No</label>';
                    }

                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Hot Keys Active</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['hotkeys_active'] == 1) {
                        echo '<input type="radio" id="hot-keys-switch-one" name="hotkeys_active" value="1" check="yes"
                           checked/>
                    <label for="hot-keys-switch-one">Yes</label>
                    <input type="radio" id="hot-keys-switch-two" name="hot-keys-active" value="0" check="no"/>
                    <label for="hot-keys-switch-two">No</label>';
                    } else {
                        echo '<input type="radio" id="hot-keys-switch-one" name="hotkeys_active" value="1" check="yes"
                           />
                    <label for="hot-keys-switch-one">Yes</label>
                    <input type="radio" id="hot-keys-switch-two" name="hotkeys_active" value="0" check="no" checked/>
                    <label for="hot-keys-switch-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Scheduled Callbacks</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['scheduled_callbacks'] == 1) {
                        echo '<input type="radio" id="scheduled-callbacks-one" name="scheduled_callbacks" value="1"
                           check="yes"
                           checked/>
                    <label for="scheduled-callbacks-one">Yes</label>
                    <input type="radio" id="scheduled-callbacks-two" name="scheduled_callbacks" value="0"
                           check="no"/>
                    <label for="scheduled-callbacks-two">No</label>';
                    } else {
                        echo '<input type="radio" id="scheduled-callbacks-one" name="scheduled_callbacks" value="1"
                           check="yes"
                           />
                    <label for="scheduled-callbacks-one">Yes</label>
                    <input type="radio" id="scheduled-callbacks-two" name="scheduled_callbacks" value="0"
                           check="no" checked/>
                    <label for="scheduled-callbacks-two">No</label>';
                    }
                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Agent Only Callbacks</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['agentonly_callbacks'] == 1) {
                        echo '     <input type="radio" id="agentonly-one" name="agentonly_callbacks" value="1" check="yes"
                           checked/>
                    <label for="agentonly-one">Yes</label>
                    <input type="radio" id="agentonly-two" name="agentonly_callbacks" value="0" check="no"/>
                    <label for="agentonly-two">No</label>';
                    } else {
                        echo '     <input type="radio" id="agentonly-one" name="agentonly_callbacks" value="1" check="yes"
                           />
                    <label for="agentonly-one">Yes</label>
                    <input type="radio" id="agentonly-two" name="agentonly_callbacks" value="0" check="no" checked/>
                    <label for="agentonly-two">No</label>';
                    }

                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Agent Call Manual</h6>
                <div class="switch-field ">
                    <input type="radio" id="agentcall_manual-one" name="agentcall_manual" value="1" check="yes"
                           checked/>
                    <label for="agentcall_manual-one">Yes</label>
                    <input type="radio" id="agentcall_manual-two" name="agentcall_manual" value="0" check="no"/>
                    <label for="agentcall_manual-two">No</label>
                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Agent Call Email</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['agentcall_email'] == 1) {
                        echo '<input type="radio" id="agent-call-email-one" name="agentcall_email" value="1" check="yes"
                           checked/>
                    <label for="agent-call-email-one">Yes</label>
                    <input type="radio" id="agent-call-email-two" name="agentcall_email" value="0" check="no"/>
                    <label for="agent-call-email-two">No</label>';
                    } else {
                        echo '<input type="radio" id="agent-call-email-one" name="agentcall_email" value="1" check="yes"
                           />
                    <label for="agent-call-email-one">Yes</label>
                    <input type="radio" id="agent-call-email-two" name="agentcall_email" value="0" check="no" checked/>
                    <label for="agent-call-email-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Agent Call Chat</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['agentcall_chat'] == 1) {
                        echo ' <input type="radio" id="agent-call-chat-one" name="agentcall_chat" value="`1" check="yes"
                           checked/>
                    <label for="agent-call-chat-one">Yes</label>
                    <input type="radio" id="agent-call-chat-two" name="agentcall_chat" value="0" check="no"/>
                    <label for="agent-call-chat-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="agent-call-chat-one" name="agentcall_chat" value="`1" check="yes"
                           />
                    <label for="agent-call-chat-one">Yes</label>
                    <input type="radio" id="agent-call-chat-two" name="agentcall_chat" value="0" check="no" checked/>
                    <label for="agent-call-chat-two">No</label>';
                    }
                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Agent Recording</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['vicidial_recording'] == 1) {
                        echo ' <input type="radio" id="agent-recording-one" name="vicidial_recording" value="1" check="yes"
                           checked/>
                    <label for="agent-recording-one">Yes</label>
                    <input type="radio" id="agent-recording-two" name="vicidial_recording" value="0" check="no"/>
                    <label for="agent-recording-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="agent-recording-one" name="vicidial_recording" value="1" check="yes"
                           />
                    <label for="agent-recording-one">Yes</label>
                    <input type="radio" id="agent-recording-two" name="vicidial_recording" value="0" check="no" checked/>
                    <label for="agent-recording-two">No</label>';
                    }


                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Agent Transfers</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['vicidial_transfers'] == 1) {
                        echo ' <input type="radio" id="agent-transfers-one" name="vicidial_transfers" value="1" check="yes"
                           checked/>
                    <label for="agent-transfers-one">Yes</label>
                    <input type="radio" id="agent-transfers-two" name="vicidial_transfers" value="0" check="no"/>
                    <label for="agent-transfers-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="agent-transfers-one" name="vicidial_transfers" value="1" check="yes"
                           />
                    <label for="agent-transfers-one">Yes</label>
                    <input type="radio" id="agent-transfers-two" name="vicidial_transfers" value="0" check="no" checked/>
                    <label for="agent-transfers-two">No</label>';
                    }
                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Closer Default Blended</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['closer_default_blended']) {
                        echo ' <input type="radio" id="closer-blended-one" name="closer_default_blended" value="1" check="yes"
                           checked/>
                    <label for="closer-blended-one">Yes</label>
                    <input type="radio" id="closer-blended-two" name="closer_default_blended" value="0" check="no"/>
                    <label for="closer-blended-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="closer-blended-one" name="closer_default_blended" value="1" check="yes"
                           />
                    <label for="closer-blended-one">Yes</label>
                    <input type="radio" id="closer-blended-two" name="closer_default_blended" value="0" check="no" checked/>
                    <label for="closer-blended-two">No</label>';
                    }


                    ?>
                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Agent Choose Ingroups</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['agent_choose_ingroups']) {
                        echo ' <input type="radio" id="agent-choose-ingroups-one" name="agent_choose_ingroups" value="1"
                           check="yes"
                           checked/>
                    <label for="agent-choose-ingroups-one">Yes</label>
                    <input type="radio" id="agent-choose-ingroups-two" name="agent_choose_ingroups" value="0"
                           check="no"/>
                    <label for="agent-choose-ingroups-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="agent-choose-ingroups-one" name="agent_choose_ingroups" value="1"
                           check="yes"
                           />
                    <label for="agent-choose-ingroups-one">Yes</label>
                    <input type="radio" id="agent-choose-ingroups-two" name="agent_choose_ingroups" value="0"
                           check="no" checked/>
                    <label for="agent-choose-ingroups-two">No</label>';
                    }

                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Max Inbound Calls Filtering Enabled</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['max_inbound_filter_enabled'] == 1) {
                        echo '<input type="radio" id="max-inbound-filter-one" name="max_inbound_filter_enabled" value="1"
                           check="yes"
                           checked/>
                    <label for="max-inbound-filter-one">Yes</label>
                    <input type="radio" id="max-inbound-filter-two" name="max_inbound_filter_enabled" value="0"
                           check="no"/>
                    <label for="max-inbound-filter-two">No</label>';
                    } else {
                        echo '<input type="radio" id="max-inbound-filter-one" name="max_inbound_filter_enabled" value="1"
                           check="yes"
                           />
                    <label for="max-inbound-filter-one">Yes</label>
                    <input type="radio" id="max-inbound-filter-two" name="max_inbound_filter_enabled" value="0"
                           check="no" checked/>
                    <label for="max-inbound-filter-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Allow Alerts</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['allow_alerts'] == 1) {
                        echo '  <input type="radio" id="allow-alerts-one" name="allow_alerts" value="1" check="yes"
                           checked/>
                    <label for="allow-alerts-one">Yes</label>
                    <input type="radio" id="allow-alerts-two" name="allow_alerts" value="0" check="no"/>
                    <label for="allow-alerts-two">No</label>';
                    } else {
                        echo '  
                    <input type="radio" id="allow-alerts-one" name="allow_alerts" value="1" check="yes"
                           />
                    <label for="allow-alerts-one">Yes</label>
                    <input type="radio" id="allow-alerts-two" name="allow_alerts" value="0" check="no" checked/>
                    <label for="allow-alerts-two">No</label>';
                    }
                    ?>

                </div>
            </div>
        </div>
        <input class="my-btn-secondary mt-md-4 cancel-btn" type="submit" value="Cancel">
        <input class="my-btn-primary mt-md-4 submit-btn" type="submit" value="Submit" name="submit">
    </form>
</div>
</div>

<div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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