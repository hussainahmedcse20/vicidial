<?php
$camp = new campaign();
if (isset($_POST['campaign3'])) {
    $camp->dead_trigger_action = $_POST['dead_trigger_action'];
    $camp->dead_trigger_seconds = $_POST['dead_trigger_seconds'];
    $camp->dead_trigger_repeat = $_POST['dead_trigger_repeat'];
    $camp->dead_max = $_POST['dead_max'];
    $camp->comments_all_tabs = $_POST['comments_all_tabs'];
    $camp->hide_call_log_info = $_POST['hide_call_log_info'];
    $camp->agent_lead_search = $_POST['agent_lead_search'];
    $camp->qc_comment_history = $_POST['qc_comment_history'];
    $camp->script_id = $_POST['script_id'];
    $camp->campaign_script_two = $_POST['campaign_script_two'];
    $camp->agent_lead_search_method = $_POST['agent_lead_search_method'];
    $camp->clear_form = $_POST['clear_form'];
    $camp->get_call_launch = $_POST['get_call_launch'];
    $camp->clear_script = $_POST['clear_script'];
    $camp->am_message_exten = $_POST['am_message_exten'];
    $camp->vmm_daily_limit = $_POST['vmm_daily_limit'];
    $camp->waitforsilence_options = $_POST['waitforsilence_options'];
    $camp->amd_type = $_POST['amd_type'];
    $camp->amd_agent_route_options = $_POST['amd_agent_route_options'];
    $camp->cpd_amd_action = $_POST['cpd_amd_action'];
    $camp->cpd_unknown_action = $_POST['cpd_unknown_action'];
    $camp->amd_inbound_group = $_POST['amd_inbound_group'];
    $camp->amd_callmenu = $_POST['amd_callmenu'];
    $camp->leave_vm_message_group_id = $_POST['leave_vm_message_group_id'];
    $camp->leave_vm_no_dispo = $_POST['leave_vm_no_dispo'];
    $camp->xferconf_a_dtmf = $_POST['xferconf_a_dtmf'];
    $camp->xferconf_a_number = $_POST['xferconf_a_number'];
    $camp->xferconf_b_dtmf = $_POST['xferconf_b_dtmf'];
    $camp->xferconf_b_number = $_POST['xferconf_b_number'];
    $camp->xferconf_c_number = $_POST['xferconf_c_number'];
    $camp->xferconf_d_number = $_POST['xferconf_d_number'];
    $camp->enable_xfer_presets = $_POST['enable_xfer_presets'];
    $camp->hide_xfer_number_to_dial = $_POST['hide_xfer_number_to_dial'];
    $camp->prepopulate_transfer_preset = $_POST['prepopulate_transfer_preset'];
    $camp->quick_transfer_button = $_POST['quick_transfer_button'];
    $camp->transfer_button_launch = $_POST['transfer_button_launch'];
    $camp->custom_3way_button_transfer = $_POST['custom_3way_button_transfer'];
    $camp->three_way_call_cid = $_POST['three_way_call_cid'];
    $camp->three_way_volume_buttons = $_POST['three_way_volume_buttons'];
    $camp->customer_3way_hangup_logging = $_POST['customer_3way_hangup_logging'];
    $camp->customer_3way_hangup_seconds = $_POST['customer_3way_hangup_seconds'];
    $camp->customer_3way_hangup_action = $_POST['customer_3way_hangup_action'];
    $camp->three_way_record_stop_exception = $_POST['three_way_record_stop_exception'];
    $camp->leave_3way_start_recording = $_POST['leave_3way_start_recording'];
    $camp->leave_3way_start_recording_exception = $_POST['leave_3way_start_recording_exception'];
    $camp->three_way_record_stop = $_POST['three_way_record_stop'];
    $camp->hangup_xfer_record_start = $_POST['hangup_xfer_record_start'];
    $camp->ivr_park_call = $_POST['ivr_park_call'];
    $camp->ivr_park_call_agi = $_POST['ivr_park_call_agi'];
    $camp->timer_action = $_POST['timer_action'];
    $camp->timer_action_message = $_POST['timer_action_message'];
    $camp->timer_action_seconds = $_POST['timer_action_seconds'];
    $camp->timer_action_destination = $_POST['timer_action_destination'];
    $camp->scheduled_callbacks_alert = $_POST['scheduled_callbacks_alert'];
    $camp->scheduled_callbacks_count = $_POST['scheduled_callbacks_count'];
    $camp->callback_days_limit = $_POST['callback_days_limit'];
    $camp->callback_hours_block = $_POST['callback_hours_block'];
    $camp->callback_list_calltime = $_POST['callback_list_calltime'];
    $camp->callback_active_limit = $_POST['callback_active_limit'];
    $camp->callback_display_days = $_POST['callback_display_days'];
    $camp->callback_dnc = $_POST['callback_dnc'];
    $camp->my_callback_option = $_POST['my_callback_option'];
    $camp->show_previous_callback = $_POST['show_previous_callback'];
    $camp->callback_useronly_move_minutes = $_POST['callback_useronly_move_minutes'];
    $camp->next_dial_my_callbacks = $_POST['next_dial_my_callbacks'];
    $camp->scheduled_callbacks_auto_reschedule = $_POST['scheduled_callbacks_auto_reschedule'];
    $camp->scheduled_callbacks = $_POST['scheduled_callbacks'];
    $camp->scheduled_callbacks_email_alert = $_POST['scheduled_callbacks_email_alert'];
    $camp->callback_active_limit_override = $_POST['callback_active_limit_override'];
    $camp->scheduled_callbacks_force_dial = $_POST['scheduled_callbacks_force_dial'];
    $camp->am_message_wildcards = $_POST['am_message_wildcards'];
    $camp->amd_send_to_vmx = $_POST['amd_send_to_vmx'];
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql= "UPDATE vicidial_campaigns SET dead_trigger_action=' "  .$camp->dead_trigger_action." ' ,
    dead_trigger_seconds='" .$camp->dead_trigger_seconds." ',
    dead_trigger_repeat=' ".$camp->dead_trigger_repeat. "',
    dead_max='" .$camp->dead_max. "',
    comments_all_tabs='" .$camp->comments_all_tabs. "',
    hide_call_log_info=' ".$camp->hide_call_log_info. "',
    agent_lead_search=' ".$camp->agent_lead_search. "',
    qc_comment_history=' ".$camp->qc_comment_history. "',
    script_id=' ".$camp->script_id. "',
    campaign_script_two=' ".$camp->campaign_script_two." ',
    agent_lead_search_method=' ".$camp->agent_lead_search_method. "',
    clear_form=' ".$camp->clear_form." ',
    get_call_launch=' ".$camp->get_call_launch. "',
    clear_script=' ".$camp->clear_script. "',
    am_message_exten=' ".$camp->am_message_exten. "',
    vmm_daily_limit=' ".$camp->vmm_daily_limit." ',
    waitforsilence_options=' ".$camp->waitforsilence_options." ',
    amd_type=' ".$camp->amd_type." ',
    amd_agent_route_options=' ".$camp->amd_agent_route_options. "',
    cpd_amd_action='" .$camp->cpd_amd_action." ',
    cpd_unknown_action='" .$camp->cpd_unknown_action." ',
    amd_inbound_group='" .$camp->amd_inbound_group." ',
    amd_callmenu='" .$camp->amd_callmenu." ',
    leave_vm_message_group_id='" .$camp->leave_vm_message_group_id. "',
    leave_vm_no_dispo=' ".$camp->leave_vm_no_dispo." ',
    xferconf_a_dtmf='" .$camp->xferconf_a_dtmf. "',
    xferconf_a_number=' ".$camp->xferconf_a_number. "',
    xferconf_b_dtmf='" .$camp->xferconf_b_dtmf." ',
    xferconf_b_number='" .$camp->xferconf_b_number." ',
    xferconf_c_number='" .$camp->xferconf_c_number. "',
    xferconf_d_number='" .$camp->xferconf_d_number." ',
    enable_xfer_presets=' ".$camp->enable_xfer_presets." ',
    hide_xfer_number_to_dial='" .$camp->hide_xfer_number_to_dial." ',
    prepopulate_transfer_preset='" .$camp->prepopulate_transfer_preset." ',
    quick_transfer_button='" .$camp->quick_transfer_button." ',
    transfer_button_launch=' ".$camp->transfer_button_launch." ',
    custom_3way_button_transfer=' ".$camp->custom_3way_button_transfer. "',
    three_way_call_cid='" .$camp->three_way_call_cid. "',
    three_way_volume_buttons=' ".$camp->three_way_volume_buttons." ',
    customer_3way_hangup_logging='" .$camp->customer_3way_hangup_logging." ',
    customer_3way_hangup_seconds='" .$camp->customer_3way_hangup_seconds." ',
    customer_3way_hangup_action='" .$camp->customer_3way_hangup_action. "',
    three_way_record_stop_exception='" .$camp->three_way_record_stop_exception." ',
    leave_3way_start_recording='" .$camp->leave_3way_start_recording." ',
    leave_3way_start_recording_exception=' ".$camp->leave_3way_start_recording_exception." ',
    three_way_record_stop='" .$camp->three_way_record_stop. "',
    hangup_xfer_record_start=' ".$camp->hangup_xfer_record_start." ',
    ivr_park_call=' ".$camp->ivr_park_call." ',
    ivr_park_call_agi=' ".$camp->ivr_park_call_agi." ',
    timer_action=' ".$camp->timer_action. "',
    timer_action_message=' ".$camp->timer_action_message. "',
    timer_action_seconds=' ".$camp->timer_action_seconds. "',
    timer_action_destination=' ".$camp->timer_action_destination." ',
    scheduled_callbacks_alert=' ".$camp->scheduled_callbacks_alert." ',
    scheduled_callbacks_count=' ".$camp->scheduled_callbacks_count. "',
    callback_days_limit='" .$camp->callback_days_limit." ',
    callback_hours_block=' ".$camp->callback_hours_block." ',
    callback_list_calltime=' ".$camp->callback_list_calltime." ',
    callback_active_limit=' ".$camp->callback_active_limit." ',
    callback_display_days=' ".$camp->callback_display_days." ',
    callback_dnc=' ".$camp->callback_dnc. "',
    my_callback_option=' ".$camp->my_callback_option. "',
    show_previous_callback=' ".$camp->show_previous_callback. "',
    callback_useronly_move_minutes=' ".$camp->callback_useronly_move_minutes." ',
    next_dial_my_callbacks=' ".$camp->next_dial_my_callbacks. "',
    scheduled_callbacks_auto_reschedule=' ".$camp->scheduled_callbacks_auto_reschedule." ',
    scheduled_callbacks=' ".$camp->scheduled_callbacks." ',
    scheduled_callbacks_email_alert=' ".$camp->scheduled_callbacks_email_alert." ',
    callback_active_limit_override=' ".$camp->callback_active_limit_override. "',
    scheduled_callbacks_force_dial=' ".$camp->scheduled_callbacks_force_dial." ',
    am_message_wildcards='" .$camp->am_message_wildcards. "',
    amd_send_to_vmx=' ".$camp->amd_send_to_vmx. "' WHERE campaign_id=' ".$id. "'";


    $result=mysqli_query($conn,$sql);
?>


<div class="my-form">
    <h3>Modify Users Record</h3>
    <form action="" method="POST">
        <div class="alert alert-danger" role="alert">
            Invalid Inputs!
        </div>
        <div class="row">
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="dead_trigger_action" id="dead_trigger_action">
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='AUDIO'>AUDIO</option>
                        <option value='URL'>URL</option>
                        <option value='AUDIO_AND_URL'>AUDIO_AND_URL</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="dead_trigger_action">Dead Call Trigger Action</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="dead_trigger_seconds" name="dead_trigger_seconds"
                        aria-describedby="dead_trigger_seconds">
                    <label for="dead_trigger_seconds">Dead Call Trigger Seconds</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="dead_trigger_repeat" id="dead_trigger_repeat">
                        <option></option>
                        <option value='NO'>NO</option>
                        <option value='REPEAT_ALL'>REPEAT_ALL</option>
                        <option value='REPEAT_AUDIO'>REPEAT_AUDIO</option>
                        <option value='REPEAT_URL'>REPEAT_URL</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="dead_trigger_repeat">Dead Call Trigger Repeat</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="dead_max" name="dead_max" aria-describedby="dead_max">
                    <label for="dead_max">Dead Call Max Seconds</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="comments_all_tabs" id="comments_all_tabs">
                        <option></option>
                        <option value="ENABLED">ENABLED</option>
                        <option value="DISABLED">DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="comments_all_tabs">Comments All Tabs</label>
                </div>
            </div>


            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="hide_call_log_info" id="hide_call_log_info">
                        <option></option>
                        <option value='Y'>Y</option>
                        <option value='N'>N</option>
                        <option value='SHOW_1'>SHOW_1</option>
                        <option value='SHOW_2'>SHOW_2</option>
                        <option value='SHOW_3'>SHOW_3</option>
                        <option value='SHOW_4'>SHOW_4</option>
                        <option value='SHOW_5'>SHOW_5</option>
                        <option value='SHOW_6'>SHOW_6</option>
                        <option value='SHOW_7'>SHOW_7</option>
                        <option value='SHOW_8'>SHOW_8</option>
                        <option value='SHOW_9'>SHOW_9</option>
                        <option value='SHOW_10'>SHOW_10</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="hide_call_log_info">Hide Call Log Info</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="agent_lead_search" id="agent_lead_search">
                        <option></option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='LIVE_CALL_INBOUND'>LIVE_CALL_INBOUND</option>
                        <option value='LIVE_CALL_INBOUND_AND_MANUAL'>LIVE_CALL_INBOUND_AND_MANUAL
                        </option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="agent_lead_search">Agent Lead Search</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="qc_comment_history" id="qc_comment_history">
                        <option></option>
                        <option value='CLICK'>CLICK</option>
                        <option value='AUTO_OPEN'>AUTO_OPEN</option>
                        <option value='CLICK_ALLOW_MINIMIZE'>CLICK_ALLOW_MINIMIZE</option>
                        <option value='AUTO_OPEN_ALLOW_MINIMIZE'>AUTO_OPEN_ALLOW_MINIMIZE</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="qc_comment_history">QC Comments History</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="script_id" id="script_id">
                        <option></option>
                        <option value="">NONE</option>
                        <option value="CALLNOTES">CALLNOTES - Call Notes and Appointment Setting
                        </option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="script_id">Script</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="campaign_script_two" id="campaign_script_two">
                        <option></option>
                        <option value="">NONE</option>
                        <option value="CALLNOTES">CALLNOTES - Call Notes and Appointment Setting
                        </option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="campaign_script_two">Script Two</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="agent_lead_search_method" id="agent_lead_search_method">
                        <option></option>
                        <option value='SYSTEM'>SYSTEM</option>
                        <option value='CAMPAIGNLISTS'>CAMPAIGNLISTS</option>
                        <option value='CAMPLISTS_ALL'>CAMPLISTS_ALL</option>
                        <option value='LIST'>LIST</option>
                        <option value='USER_CAMPAIGNLISTS'>USER_CAMPAIGNLISTS</option>
                        <option value='USER_CAMPLISTS_ALL'>USER_CAMPLISTS_ALL</option>
                        <option value='USER_LIST'>USER_LIST</option>
                        <option value='GROUP_SYSTEM'>GROUP_SYSTEM</option>
                        <option value='GROUP_CAMPAIGNLISTS'>GROUP_CAMPAIGNLISTS</option>
                        <option value='GROUP_CAMPLISTS_ALL'>GROUP_CAMPLISTS_ALL</option>
                        <option value='GROUP_LIST'>GROUP_LIST</option>
                        <option value='TERRITORY_SYSTEM'>TERRITORY_SYSTEM</option>
                        <option value='TERRITORY_CAMPAIGNLISTS'>TERRITORY_CAMPAIGNLISTS</option>
                        <option value='TERRITORY_CAMPLISTS_ALL'>TERRITORY_CAMPLISTS_ALL</option>
                        <option value='TERRITORY_LIST'>TERRITORY_LIST</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="agent_lead_search_method">Agent Lead Search Method</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="clear_form" id="clear_form">
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='ACKNOWLEDGE'>ACKNOWLEDGE</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="clear_form">Clear Form Tab</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="get_call_launch" id="get_call_launch">F
                        <option></option>
                        <option value='NONE'>NONE</option>
                        <option value='SCRIPT'>SCRIPT</option>
                        <option value='PREVIEW_SCRIPT'>PREVIEW_SCRIPT</option>
                        <option value='WEBFORM'>WEBFORM</option>
                        <option value='PREVIEW_WEBFORM'>PREVIEW_WEBFORM</option>
                        <option value='SCRIPTTWO'>SCRIPTTWO</option>
                        <option value='PREVIEW_SCRIPTTWO'>PREVIEW_SCRIPTTWO</option>
                        <option value="WEBFORMTWO">WEBFORMTWO</option>
                        <option value="PREVIEW_WEBFORMTWO">PREVIEW_WEBFORMTWO</option>
                        <option value='WEBFORMTHREE'>WEBFORMTHREE</option>
                        <option value='PREVIEW_WEBFORMTHREE'>PREVIEW_WEBFORMTHREE</option>
                        <option value="FORM">FORM</option>
                        <option value="PREVIEW_FORM">PREVIEW_FORM</option>
                        <option value='EMAIL'>EMAIL</option>
                        <option value="CHAT">CHAT</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="get_call_launch">Get Call Launchs</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="clear_script" id="clear_script">F
                        <option></option>
                        <option value="DISABLED">DISABLED</option>
                        <option value="ENABLED">ENABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="clear_script">Clear Scripts</label>
                </div>
            </div>

        </div>

        <div class="row mt-5">
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="am_message_exten" name="am_message_exten"
                        aria-describedby="am_message_exten">
                    <label for="am_message_exten">Answering Machine Message</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="vmm_daily_limit" name="vmm_daily_limit"
                        aria-describedby="vmm_daily_limit">
                    <label for="vmm_daily_limit">Voicemail Message Daily Limit</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="xferconf_d_number" name="waitforsilence_options"
                        aria-describedby="waitforsilence_options">
                    <label for="waitforsilence_options">WaitForSilence Options</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="amd_type" id="amd_type">F
                        <option></option>
                        <option value='AMD'>AMD built-in</option>
                        <option value='KHOMP'>KHOMP Gateway</option>
                        <option value='CPD'>Sangoma CPD</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="amd_type">AMD Type</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="amd_agent_route_options" id="amd_agent_route_options">F
                        <option></option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='PENDING'>PENDING</option>
                        <option value='DISABLED'>DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="amd_agent_route_options">AMD Agent Route Options</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="cpd_amd_action" id="cpd_amd_action">F
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='DISPO'>DISPO</option>
                        <option value='MESSAGE'>MESSAGE</option>
                        <option value='INGROUP'>INGROUP</option>
                        <option value='CALLMENU'>CALLMENU</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="cpd_amd_action">CPD AMD Action</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="cpd_unknown_action" id="cpd_unknown_action">
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='DISPO'>DISPO</option>
                        <option value='MESSAGE'>MESSAGE</option>
                        <option value='INGROUP'>INGROUP</option>
                        <option value='CALLMENU'>CALLMENU</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="cpd_unknown_action">CPD Unknown Action</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="amd_inbound_group" id="amd_inbound_group">
                        <option></option>
                        <option value="AGENTDIRECT">AGENTDIRECT - Single Agent Direct Queue</option>
                        <option value="AGENTDIRECT_CHAT">AGENTDIRECT_CHAT - Agent Direct Queue for
                            Chats
                        </option>
                        <option value="---NONE---">---NONE---</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="amd_inbound_group">AMD Inbound Group</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="amd_callmenu" id="amd_callmenu">
                        <option></option>
                        <option value="2FA_say_auth_code">2FA_say_auth_code</option>
                        <option value="default---agent">default---agent</option>
                        <option value="defaultlog">defaultlog</option>
                        <option value="ind-Welcome">ind-Welcome</option>
                        <option value="---NONE---">---NONE---</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="amd_callmenu">AMD Call Menu</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="leave_vm_message_group_id" id="leave_vm_message_group_id">
                        <option></option>
                        <option value="---NONE---">---NONE---</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="leave_vm_message_group_id">VM Message Group</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="leave_vm_no_dispo" id="leave_vm_no_dispo">
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='ENABLED'>ENABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="leave_vm_no_dispo">Leave VM No Dispo</label>
                </div>
            </div>

            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>AM Message Wildcards</h6>
                <div class="switch-field ">
                    <input type="radio" id="am_message_wildcards-one" name="am_message_wildcards" value="1" check="yes"
                        checked />
                    <label for="am_message_wildcards-one">Yes</label>
                    <input type="radio" id="am_message_wildcards-two" name="am_message_wildcards" value="0"
                        check="no" />
                    <label for="am_message_wildcards-two">No</label>
                </div>
            </div>

            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>AMD send to Action</h6>
                <div class="switch-field ">
                    <input type="radio" id="amd_send_to_vmx-one" name="amd_send_to_vmx" value="1" check="yes" checked />
                    <label for="amd_send_to_vmx-one">Yes</label>
                    <input type="radio" id="amd_send_to_vmx-two" name="amd_send_to_vmx" value="0" check="no" />
                    <label for="amd_send_to_vmx-two">No</label>
                </div>
            </div>


        </div>

        <div class="row mt-5">
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="xferconf_a_dtmf" name="xferconf_a_dtmf"
                        aria-describedby="xferconf_a_dtmf">
                    <label for="xferconf_a_dtmf">Transfer-Conf DTMF 1</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="xferconf_a_number" name="xferconf_a_number"
                        aria-describedby="xferconf_a_number">
                    <label for="xferconf_a_number">Transfer-Conf Number 1</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="xferconf_b_dtmf" name="xferconf_b_dtmf"
                        aria-describedby="xferconf_b_dtmf">
                    <label for="xferconf_b_dtmf">Transfer-Conf DTMF 2</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="xferconf_b_number" name="xferconf_b_number"
                        aria-describedby="xferconf_b_number">
                    <label for="xferconf_b_number">Transfer-Conf Number 2</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="xferconf_c_number" name="xferconf_c_number"
                        aria-describedby="xferconf_c_number">
                    <label for="xferconf_c_number">Transfer-Conf Number 3</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="xferconf_d_number" name="xferconf_d_number"
                        aria-describedby="xferconf_d_number">
                    <label for="xferconf_d_number">Transfer-Conf Number 4</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="xferconf_d_number" name="xferconf_d_number"
                        aria-describedby="xferconf_d_number">
                    <label for="xferconf_d_number">Transfer-Conf Number 5</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="enable_xfer_presets" id="enable_xfer_presets">
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='CONTACTS'>CONTACTS</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="enable_xfer_presets">Enable Transfer Presets</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="hide_xfer_number_to_dial" id="hide_xfer_number_to_dial">
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='ENABLED'>ENABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="hide_xfer_number_to_dial">Hide Transfer Number to Dial</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="prepopulate_transfer_preset" id="prepopulate_transfer_preset">
                        <option></option>
                        <option value='N'>N</option>
                        <option value='PRESET_1'>PRESET_1</option>
                        <option value='PRESET_2'>PRESET_2</option>
                        <option value='PRESET_3'>PRESET_3</option>
                        <option value='PRESET_4'>PRESET_4</option>
                        <option value='PRESET_5'>PRESET_5</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="prepopulate_transfer_preset">PrePopulate Transfer Preset</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="quick_transfer_button" id="quick_transfer_button">
                        <option></option>
                        <option value='N'>N</option>
                        <option value='IN_GROUP'>IN_GROUP</option>
                        <option value='PRESET_1'>PRESET_1</option>
                        <option value='PRESET_2'>PRESET_2</option>
                        <option value='PRESET_3'>PRESET_3</option>
                        <option value='PRESET_4'>PRESET_4</option>
                        <option value='PRESET_5'>PRESET_5</option>
                        <option value='LOCKED_IN_GROUP'>LOCKED_IN_GROUP</option>
                        <option value='LOCKED_PRESET_1'>LOCKED_PRESET_1</option>
                        <option value='LOCKED_PRESET_2'>LOCKED_PRESET_2</option>
                        <option value='LOCKED_PRESET_3'>LOCKED_PRESET_3</option>
                        <option value='LOCKED_PRESET_4'>LOCKED_PRESET_4</option>
                        <option value='LOCKED_PRESET_5'>LOCKED_PRESET_5</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="quick_transfer_button">Quick Transfer Button</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="transfer_button_launch" id="transfer_button_launch">
                        <option></option>
                        <option value='NONE'>NONE</option>
                        <option value='SCRIPT'>SCRIPT</option>
                        <option value='WEBFORM'>WEBFORM</option>
                        <option value='SCRIPTTWO'>SCRIPTTWO</option>
                        <option value="WEBFORMTWO">WEBFORMTWO</option>
                        <option value='WEBFORMTHREE'>WEBFORMTHREE</option>
                        <option value="FORM">FORM</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="transfer_button_launch">Transfer-Conf Button Launch</label>
                </div>
            </div>


        </div>

        <div class="row mt-5">
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="custom_3way_button_transfer" id="custom_3way_button_transfer">
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='PRESET_1'>PRESET_1</option>
                        <option value='PRESET_2'>PRESET_2</option>
                        <option value='PRESET_3'>PRESET_3</option>
                        <option value='PRESET_4'>PRESET_4</option>
                        <option value='PRESET_5'>PRESET_5</option>
                        <option value='FIELD_address3'>FIELD_address3</option>
                        <option value='FIELD_province'>FIELD_province</option>
                        <option value='FIELD_security_phrase'>FIELD_security_phrase</option>
                        <option value='FIELD_vendor_lead_code'>FIELD_vendor_lead_code</option>
                        <option value='FIELD_email'>FIELD_email</option>
                        <option value='FIELD_owner'>FIELD_owner</option>
                        <option value='PARK_PRESET_1'>PARK_PRESET_1</option>
                        <option value='PARK_PRESET_2'>PARK_PRESET_2</option>
                        <option value='PARK_PRESET_3'>PARK_PRESET_3</option>
                        <option value='PARK_PRESET_4'>PARK_PRESET_4</option>
                        <option value='PARK_PRESET_5'>PARK_PRESET_5</option>
                        <option value='PARK_FIELD_address3'>PARK_FIELD_address3</option>
                        <option value='PARK_FIELD_province'>PARK_FIELD_province</option>
                        <option value='PARK_FIELD_security_phrase'>PARK_FIELD_security_phrase
                        </option>
                        <option value='PARK_FIELD_vendor_lead_code'>PARK_FIELD_vendor_lead_code
                        </option>
                        <option value='PARK_FIELD_email'>PARK_FIELD_email</option>
                        <option value='PARK_FIELD_owner'>PARK_FIELD_owner</option>
                        <option value='VIEW_PRESET'>VIEW_PRESET</option>
                        <option value='VIEW_CONTACTS'>VIEW_CONTACTS</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="custom_3way_button_transfer">Custom 3-Way Button Transfer</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="three_way_call_cid" id="three_way_call_cid">
                        <option></option>
                        <option value='CAMPAIGN'>CAMPAIGN</option>
                        <option value='CUSTOMER'>CUSTOMER</option>
                        <option value='AGENT_PHONE'>AGENT_PHONE</option>
                        <option value='AGENT_CHOOSE'>AGENT_CHOOSE</option>
                        <option value='CUSTOM_CID'>CUSTOM_CID</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="three_way_call_cid">3-Way Call Outbound CallerID</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="three_way_dial_prefix" name="waitforsilence_options"
                        aria-describedby="waitforsilence_options">
                    <label for="three_way_dial_prefix">3-Way Call Dial Prefix</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="three_way_volume_buttons" id="three_way_volume_buttons">
                        <option></option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='DISABLED'>DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="three_way_volume_buttons">3-Way Volume Buttons</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="customer_3way_hangup_logging" id="customer_3way_hangup_logging">
                        <option></option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='DISABLED'>DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="customer_3way_hangup_logging">Customer 3-Way Hangup Logging</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="customer_3way_hangup_seconds"
                        name="customer_3way_hangup_seconds" aria-describedby="customer_3way_hangup_seconds">
                    <label for="customer_3way_hangup_seconds">Customer 3-Way Hangup Seconds</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="customer_3way_hangup_action" id="customer_3way_hangup_action">
                        <option></option>
                        <option value='NONE'>NONE</option>
                        <option value="DISPO">DISPO</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="customer_3way_hangup_action">Customer 3-Way Hangup Action</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="three_way_record_stop_exception" id="three_way_record_stop_exception">
                        <option></option>
                        <option value="DISABLED">DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="three_way_record_stop_exception">3-Way Recording Stop
                        Exception</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="leave_3way_start_recording" id="leave_3way_start_recording">
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='ALL_CALLS'>ALL_CALLS</option>
                        <option value='ALL_BUT_EXCEPTIONS'>ALL_BUT_EXCEPTIONS</option>
                        <option value='ONLY_EXCEPTIONS'>ONLY_EXCEPTIONS</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="leave_3way_start_recording">Leave 3-Way Start Recording</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="leave_3way_start_recording_exception" id="leave_3way_start_recording_exception">
                        <option></option>
                        <option value="DISABLED">DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="leave_3way_start_recording_exception">Leave 3-Way Start Recording
                        Exception</label>
                </div>
            </div>

            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>3-Way Recording Stop</h6>
                <div class="switch-field ">
                    <input type="radio" id="three_way_record_stop-one" name="three_way_record_stop" value="1"
                        check="yes" checked />
                    <label for="three_way_record_stop-one">Yes</label>
                    <input type="radio" id="three_way_record_stop-two" name="three_way_record_stop" value="0"
                        check="no" />
                    <label for="three_way_record_stop-two">No</label>
                </div>
            </div>

            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Hangup Xfer Recording Start</h6>
                <div class="switch-field ">
                    <input type="radio" id="hangup_xfer_record_start-one" name="hangup_xfer_record_start" value="1"
                        check="yes" checked />
                    <label for="hangup_xfer_record_start-one">Yes</label>
                    <input type="radio" id="hangup_xfer_record_start-two" name="hangup_xfer_record_start" value="0"
                        check="no" />
                    <label for="hangup_xfer_record_start-two">No</label>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="ivr_park_call" id="ivr_park_call">
                        <option></option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value="ENABLED_PARK_ONLY">ENABLED_PARK_ONLY</option>
                        <option value="ENABLED_BUTTON_HIDDEN">ENABLED_BUTTON_HIDDEN</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="ivr_park_call">Park Call IVR</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="ivr_park_call_agi" name="ivr_park_call_agi"
                        aria-describedby="ivr_park_call_agi">
                    <label for="ivr_park_call_agi">Park Call IVR AGI</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="timer_action" id="timer_action">
                        <option></option>
                        <option value='NONE'>NONE</option>
                        <option value='D1_DIAL'>D1_DIAL</option>
                        <option value='D2_DIAL'>D2_DIAL</option>
                        <option value='D3_DIAL'>D3_DIAL</option>
                        <option value='D4_DIAL'>D4_DIAL</option>
                        <option value='D5_DIAL'>D5_DIAL</option>
                        <option value='D1_DIAL_QUIET'>D1_DIAL_QUIET</option>
                        <option value='D2_DIAL_QUIET'>D2_DIAL_QUIET</option>
                        <option value='D3_DIAL_QUIET'>D3_DIAL_QUIET</option>
                        <option value='D4_DIAL_QUIET'>D4_DIAL_QUIET</option>
                        <option value='D5_DIAL_QUIET'>D5_DIAL_QUIET</option>
                        <option value='MESSAGE_ONLY'>MESSAGE_ONLY</option>
                        <option value='WEBFORM'>WEBFORM</option>
                        <option value='SCRIPTTWO'>SCRIPTTWO</option>
                        <option value="WEBFORMTWO">WEBFORMTWO</option>
                        <option value='WEBFORMTHREE'>WEBFORMTHREE</option>
                        <option value='HANGUP'>HANGUP</option>
                        <option value='CALLMENU'>CALLMENU</option>
                        <option value='EXTENSION'>EXTENSION</option>
                        <option value='IN_GROUP'>IN_GROUP</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="timer_action">Timer Action</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="timer_action_message" name="timer_action_message"
                        aria-describedby="timer_action_message">
                    <label for="timer_action_message">Timer Action Message</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="timer_action_seconds" name="timer_action_seconds"
                        aria-describedby="timer_action_seconds">
                    <label for="timer_action_seconds">Timer Action Seconds</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="timer_action_destination"
                        name="timer_action_destination" aria-describedby="timer_action_destination">
                    <label for="timer_action_destination">Timer Action Destination</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="scheduled_callbacks_alert" id="scheduled_callbacks_alert">
                        <option></option>
                        <option value='NONE'>NONE</option>
                        <option value='BLINK'>BLINK</option>
                        <option value='RED'>RED</option>
                        <option value='BLINK_RED'>BLINK_RED</option>
                        <option value='BLINK_DEFER'>BLINK_DEFER</option>
                        <option value='RED_DEFER'>RED_DEFER</option>
                        <option value='BLINK_RED_DEFER'>BLINK_RED_DEFER</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="scheduled_callbacks_alert">Scheduled Callbacks Alert</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="scheduled_callbacks_count" id="scheduled_callbacks_count">
                        <option></option>
                        <option value="LIVE">LIVE</option>
                        <option value="ALL_ACTIVE">ALL_ACTIVE</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="scheduled_callbacks_count">Scheduled Callbacks Count</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="callback_days_limit" name="callback_days_limit"
                        aria-describedby="callback_days_limit">
                    <label for="callback_days_limit">Scheduled Callbacks Days Limit</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="callback_hours_block" name="callback_hours_block"
                        aria-describedby="callback_hours_block">
                    <label for="callback_hours_block">Scheduled Callbacks Hours Block</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="callback_list_calltime" id="callback_list_calltime">
                        <option></option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='DISABLED'>DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="callback_list_calltime">Scheduled Callbacks Calltime Block</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="callback_active_limit" name="callback_active_limit"
                        aria-describedby="callback_active_limit">
                    <label for="callback_active_limit">Scheduled Callbacks Active Limit</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="callback_display_days" name="callback_display_days"
                        aria-describedby="callback_display_days">
                    <label for="callback_display_days">Scheduled Callbacks Display Days</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="callback_dnc" id="callback_dnc">
                        <option></option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='DISABLED'>DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="callback_dnc">Anyone Callbacks DNC Filter</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="my_callback_option" id="my_callback_option">
                        <option></option>
                        <option value="CHECKED">CHECKED</option>
                        <option value="UNCHECKED">UNCHECKED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="my_callback_option">My Callbacks Checkbox Default</label>
                </div>
            </div>


            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="show_previous_callback" id="show_previous_callback">
                        <option></option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='DISABLED'>DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="show_previous_callback">Show Previous Callback</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="callback_useronly_move_minutes"
                        name="callback_useronly_move_minutes" aria-describedby="callback_useronly_move_minutes">
                    <label for="callback_useronly_move_minutes">Scheduled Callbacks Useronly Move
                        Minutes</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="next_dial_my_callbacks" id="next_dial_my_callbacks">
                        <option></option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='DISABLED'>DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="next_dial_my_callbacks">Next-Dial My Callbacks</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="next_dial_my_callbacks" id="next_dial_my_callbacks">
                        <option></option>
                        <option value="DISABLED">---DISABLED---</option>
                        <option value="TIMEZONES_AUSTRALIA">TIMEZONES_AUSTRALIA - Australian
                            Timezone List
                        </option>
                        <option value="TIMEZONES_CANADA">TIMEZONES_CANADA - Canadian Timezone List
                        </option>
                        <option value="TIMEZONES_USA">TIMEZONES_USA - USA Timezone List</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="next_dial_my_callbacks">Scheduled Callbacks Local Timezones</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="scheduled_callbacks_auto_reschedule" id="scheduled_callbacks_auto_reschedule">
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='DAY_1'>DAY_1</option>
                        <option value='DAY_2'>DAY_2</option>
                        <option value='DAY_3'>DAY_3</option>
                        <option value='DAY_4'>DAY_4</option>
                        <option value='DAY_5'>DAY_5</option>
                        <option value='DAY_6'>DAY_6</option>
                        <option value='WEEK_1'>WEEK_1</option>
                        <option value='WEEK_2'>WEEK_2</option>
                        <option value='WEEK_3'>WEEK_3</option>
                        <option value='MONTH_1'>MONTH_1</option>
                        <option value='MONTH_2'>MONTH_2</option>
                        <option value='MONTH_3'>MONTH_3</option>
                        <option value='MONTH_4'>MONTH_4</option>
                        <option value='MONTH_5'>MONTH_5</option>
                        <option value='MONTH_6'>MONTH_6</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="scheduled_callbacks_auto_reschedule">Scheduled Callbacks Auto
                        Reschedule</label>
                </div>
            </div>

            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Scheduled Callbacks</h6>
                <div class="switch-field ">
                    <input type="radio" id="scheduled_callbacks-one" name="scheduled_callbacks" value="1" check="yes"
                        checked />
                    <label for="scheduled_callbacks-one">Yes</label>
                    <input type="radio" id="scheduled_callbacks-two" name="scheduled_callbacks" value="0" check="no" />
                    <label for="scheduled_callbacks-two">No</label>
                </div>
            </div>

            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Send Callbacks Email</h6>
                <div class="switch-field ">
                    <input type="radio" id="scheduled_callbacks_email_alert-one" name="scheduled_callbacks_email_alert"
                        value="1" check="yes" checked />
                    <label for="scheduled_callbacks_email_alert-one">Yes</label>
                    <input type="radio" id="scheduled_callbacks_email_alert-two" name="scheduled_callbacks_email_alert"
                        value="0" check="no" />
                    <label for="scheduled_callbacks_email_alert-two">No</label>
                </div>
            </div>

            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Scheduled Callbacks Active Limit Override</h6>
                <div class="switch-field ">
                    <input type="radio" id="callback_active_limit_override-one" name="callback_active_limit_override"
                        value="1" check="yes" checked />
                    <label for="callback_active_limit_override-one">Yes</label>
                    <input type="radio" id="callback_active_limit_override-two" name="callback_active_limit_override"
                        value="0" check="no" />
                    <label for="callback_active_limit_override-two">No</label>
                </div>
            </div>

            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Scheduled Callbacks Force Dial</h6>
                <div class="switch-field ">
                    <input type="radio" id="scheduled_callbacks_force_dial-one" name="scheduled_callbacks_force_dial"
                        value="1" check="yes" checked />
                    <label for="scheduled_callbacks_force_dial-one">Yes</label>
                    <input type="radio" id="scheduled_callbacks_force_dial-two" name="scheduled_callbacks_force_dial"
                        value="0" check="no" />
                    <label for="scheduled_callbacks_force_dial-two">No</label>
                </div>
            </div>


        </div>

        <div class="row mt-5">
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="am_message_exten" name="am_message_exten"
                        aria-describedby="am_message_exten">
                    <label for="am_message_exten">Answering Machine Message</label>
                </div>
            </div>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="vmm_daily_limit" name="vmm_daily_limit"
                        aria-describedby="vmm_daily_limit">
                    <label for="vmm_daily_limit">Voicemail Message Daily Limit</label>
                </div>
            </div>

            <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="waitforsilence_options" name="waitforsilence_options"
                        aria-describedby="waitforsilence_options">
                    <label for="waitforsilence_options">WaitForSilence Options</label>
                </div>
            </div>

            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="amd_type" id="amd_type">
                        <option></option>
                        <option value="AMD">AMD built-in</option>
                        <option value="KHOMP">KHOMP Gateway</option>
                        <option value="CPD">Sangoma CPD</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="amd_type">AMD Type</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="amd_agent_route_options" id="amd_agent_route_options">
                        <option></option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value="PENDING">PENDING</option>
                        <option value='DISABLED'>DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="amd_agent_route_options">AMD Agent Route Options</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="cpd_amd_action" id="cpd_amd_action">
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='DISPO'>DISPO</option>
                        <option value='MESSAGE'>MESSAGE</option>
                        <option value='INGROUP'>INGROUP</option>
                        <option value='CALLMENU'>CALLMENU</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="cpd_amd_action">CPD AMD Action</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="cpd_unknown_action" id="cpd_unknown_action">
                        <option></option>
                        <option value='DISABLED'>DISABLED</option>
                        <option value='DISPO'>DISPO</option>
                        <option value='MESSAGE'>MESSAGE</option>
                        <option value='INGROUP'>INGROUP</option>
                        <option value='CALLMENU'>CALLMENU</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="cpd_unknown_action">CPD Unknown Action</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="amd_inbound_group" id="amd_inbound_group">
                        <option></option>
                        <option value="AGENTDIRECT">AGENTDIRECT - Single Agent Direct Queue</option>
                        <option value="AGENTDIRECT_CHAT">AGENTDIRECT_CHAT - Agent Direct Queue for
                            Chats
                        </option>
                        <option value="---NONE---">---NONE---</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="amd_inbound_group">AMD Inbound Group</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="amd_callmenu" id="amd_callmenu">
                        <option></option>
                        <option value="2FA_say_auth_code">2FA_say_auth_code</option>
                        <option value="default---agent">default---agent</option>
                        <option value="defaultlog">defaultlog</option>
                        <option value="ind-Welcome">ind-Welcome</option>
                        <option value="---NONE---">---NONE---</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="amd_callmenu">AMD Call Menu</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="leave_vm_message_group_id" id="leave_vm_message_group_id">
                        <option></option>
                        <option="" value="---NONE---">---NONE---</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="leave_vm_message_group_id">VM Message Group</label>
                </div>
            </div>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="leave_vm_no_dispo" id="leave_vm_no_dispo">
                        <option></option>
                        <option value='ENABLED'>ENABLED</option>
                        <option value='DISABLED'>DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="leave_vm_no_dispo">Leave VM No Dispo</label>
                </div>
            </div>

            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>AM Message Wildcards</h6>
                <div class="switch-field ">
                    <input type="radio" id="am_message_wildcards-one" name="am_message_wildcards" value="1" check="yes"
                        checked />
                    <label for="am_message_wildcards-one">Yes</label>
                    <input type="radio" id="am_message_wildcards-two" name="am_message_wildcards" value="0"
                        check="no" />
                    <label for="am_message_wildcards-two">No</label>
                </div>
            </div>

            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>AMD send to Action</h6>
                <div class="switch-field ">
                    <input type="radio" id="amd_send_to_vmx-one" name="amd_send_to_vmx" value="1" check="yes" checked />
                    <label for="amd_send_to_vmx-one">Yes</label>
                    <input type="radio" id="amd_send_to_vmx-two" name="amd_send_to_vmx" value="0" check="no" />
                    <label for="amd_send_to_vmx-two">No</label>
                </div>
            </div>
        </div>
        <input class="my-btn-secondary mt-md-4 cancel-btn" type="reset" value="Cancel" name="campaign3_cancel">
        <input class="my-btn-primary mt-md-4 submit-btn" type="submit" value="Submit" name="campaign3">
    </form>
</div>