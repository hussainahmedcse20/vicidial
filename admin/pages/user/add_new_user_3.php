<pre>
<?php
if (isset($_GET['id'])) {
    $usereId = $_GET['id'];
    $sql = "SELECT * from vicidial_users where user_id=$usereId";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result);

}


if (isset($_POST['submit'])) {
    $user['user_id'] = $_POST['user_id'];
    $user['admin_hide_phone_data'] = $_POST['admin_hide_phone_data'];
    $user['ignore_group_on_search'] = $_POST['ignore_group_on_search'];
    $user['realtime_block_user_info'] = $_POST['realtime_block_user_info'];
    $user['admin_hide_lead_data'] = $_POST['admin_hide_lead_data'];
    $user['view_reports'] = $_POST['view_reports'];
    $user['alter_agent_interface_options'] = $_POST['alter_agent_interface_options'];
    $user['modify_users'] = $_POST['modify_users'];
    $user['change_agent_campaign'] = $_POST['change_agent_campaign'];
    $user['delete_users'] = $_POST['delete_users'];
    $user['modify_usergroups'] = $_POST['modify_usergroups'];
    $user['delete_user_groups'] = $_POST['delete_user_groups'];
    $user['modify_lists'] = $_POST['modify_lists'];
    $user['delete_lists'] = $_POST['delete_lists'];
    $user['load_leads'] = $_POST['load_leads'];
    $user['modify_leads'] = $_POST['modify_leads'];
    $user['export_gdpr_leads'] = $_POST['export_gdpr_leads'];
    $user['download_lists'] = $_POST['download_lists'];
    $user['export_reports'] = $_POST['export_reports'];
    $user['delete_from_dnc'] = $_POST['delete_from_dnc'];
    $user['custom_fields_modify'] = $_POST['custom_fields_modify'];
    $user['modify_campaigns'] = $_POST['modify_campaigns'];
    $user['campaign_detail'] = $_POST['campaign_detail'];
    $user['delete_campaigns'] = $_POST['delete_campaigns'];
    $user['modify_ingroups'] = $_POST['modify_ingroups'];
    $user['delete_ingroups'] = $_POST['delete_ingroups'];
    $user['modify_inbound_dids'] = $_POST['modify_inbound_dids'];
    $user['delete_inbound_dids'] = $_POST['delete_inbound_dids'];
    $user['modify_custom_dialplans'] = $_POST['modify_custom_dialplans'];
    $user['modify_remoteagents'] = $_POST['modify_remoteagents'];
    $user['delete_remote_agents'] = $_POST['delete_remote_agents'];
    $user['modify_scripts'] = $_POST['modify_scripts'];
    $user['delete_scripts'] = $_POST['delete_scripts'];
    $user['modify_filters'] = $_POST['modify_filters'];
    $user['delete_filters'] = $_POST['delete_filters'];
    $user['ast_admin_access'] = $_POST['ast_admin_access'];
    $user['ast_delete_phones'] = $_POST['ast_delete_phones'];
    $user['modify_call_times'] = $_POST['modify_call_times'];
    $user['delete_call_times'] = $_POST['delete_call_times'];
    $user['modify_servers'] = $_POST['modify_servers'];
    $user['modify_shifts'] = $_POST['modify_shifts'];
    $user['modify_phones'] = $_POST['modify_phones'];
    $user['modify_carriers'] = $_POST['modify_carriers'];
    $user['modify_email_accounts'] = $_POST['modify_email_accounts'];
    $user['modify_labels'] = $_POST['modify_labels'];
    $user['modify_colors'] = $_POST['modify_colors'];
    $user['modify_statuses'] = $_POST['modify_statuses'];
    $user['modify_voicemail'] = $_POST['modify_voicemail'];
    $user['modify_audiostore'] = $_POST['modify_audiostore'];
    $user['modify_moh'] = $_POST['modify_moh'];
    $user['modify_tts'] = $_POST['modify_tts'];
    $user['modify_contacts'] = $_POST['modify_contacts'];
    $user['callcard_admin'] = $_POST['callcard_admin'];
    $user['modify_auto_reports'] = $_POST['modify_auto_reports'];
    $user['add_timeclock_log'] = $_POST['add_timeclock_log'];
    $user['modify_timeclock_log'] = $_POST['modify_timeclock_log'];
    $user['delete_timeclock_log'] = $_POST['delete_timeclock_log'];
    $user['manager_shift_enforcement_override'] = $_POST['manager_shift_enforcement_override'];
    $user['pause_code_approval'] = $_POST['pause_code_approval'];
    $user['two_factor_override'] = $_POST['two_factor_override'];
    $user['modify_ip_lists'] = $_POST['modify_ip_lists'];
    $user['ignore_ip_list'] = $_POST['ignore_ip_list'];
    $user['api_allowed_functions'] = $_POST['api_allowed_functions'];
    $user['vdc_agent_api_access'] = $_POST['vdc_agent_api_access'];
    $user['api_list_restrict'] = $_POST['api_list_restrict'];
    $user['api_only_user'] = $_POST['api_only_user'];
    $user['modify_same_user_level'] = $_POST['modify_same_user_level'];
    $user['alter_admin_interface_options'] = $_POST['alter_admin_interface_options'];

    $sqlUpdte = "UPDATE `vicidial_users` SET `admin_hide_phone_data`='".$user['admin_hide_phone_data']."',
ignore_group_on_search='".$user['ignore_group_on_search']."',
realtime_block_user_info='".$user['realtime_block_user_info']."',
admin_hide_lead_data='".$user['admin_hide_lead_data']."',
view_reports='".$user['view_reports']."',
alter_agent_interface_options='".$user['alter_agent_interface_options']."',
modify_users='".$user['modify_users']."',
change_agent_campaign='".$user['change_agent_campaign']."',
delete_users='',
modify_usergroups='',
delete_user_groups='',
modify_lists='',
delete_lists='',
load_leads='',
modify_leads='',
export_gdpr_leads='',
download_lists='',
export_reports='',
delete_from_dnc='',
custom_fields_modify='',
modify_campaigns='',
campaign_detail='',
delete_campaigns='',
modify_ingroups='',
delete_ingroups='',
modify_inbound_dids='',
delete_inbound_dids='',
delete_inbound_dids='',
modify_remoteagents='',
delete_remote_agents='',
modify_scripts='',
delete_scripts='',
modify_filters='',
delete_filters='',
ast_admin_access='',
ast_delete_phones='',
modify_call_times='',
delete_call_times='',
modify_servers='',
modify_shifts='',
modify_phones='',
modify_carriers='',
modify_email_accounts='',
modify_labels='',
modify_colors='',
modify_statuses='',
modify_voicemail='',
modify_audiostore='',
modify_moh='',
modify_tts='',
modify_contacts='',
callcard_admin='',
modify_auto_reports='',
add_timeclock_log='',
modify_timeclock_log='',
delete_timeclock_log='',
manager_shift_enforcement_override='',
pause_code_approval='',
modify_ip_lists='',
ignore_ip_list='',
api_allowed_functions='',
vdc_agent_api_access='',
api_list_restrict='',
api_only_user='',
modify_same_user_level='',
alter_admin_interface_options='',
allow_alerts='', WHERE user_id =" . $user['user_id'];

    echo $sqlUpdte;
}
?>
</pre>

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
    <h3>Admin Report Options</h3>
    <form action="" method="POST">
        <!--        <div class="alert alert-danger" role="alert">-->
        <!--            Invalid Inputs!-->
        <!--        </div>-->
        <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
        <div class="row">
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4 mb-3">
                <div class="my-dropdown">
                    <select name="admin_hide_phone_data" id="admin_hide_phone_data">
                        <option></option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2_DIGITS">2_DIGITS</option>
                        <option value="3_DIGITS">3_DIGITS</option>
                        <option value="4_DIGITS">4_DIGITS</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="admin_hide_phone_data">Admin Hide Phone Data</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Search Lead Ignore Group Restrictions</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['ignore_group_on_search'] == 1) {
                        echo ' <input type="radio" id="ignore_group_on_search-one" name="ignore_group_on_search" value="1" check="yes"
                               checked />
                        <label for="ignore_group_on_search-one">Yes</label>
                        <input type="radio" id="ignore_group_on_search-two" name="ignore_group_on_search" value="0" check="no" />
                        <label for="ignore_group_on_search-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="ignore_group_on_search-one" name="ignore_group_on_search" value="1" check="yes"
                                />
                        <label for="ignore_group_on_search-one">Yes</label>
                        <input type="radio" id="ignore_group_on_search-two" name="ignore_group_on_search" value="0" check="no" checked />
                        <label for="ignore_group_on_search-two">No</label>';
                    }
                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Realtime Block User Info</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['realtime_block_user_info'] == 1) {
                        echo '  <input type="radio" id="realtime_block_user_info-one" name="realtime_block_user_info" value="1" check="yes"
                               checked />
                        <label for="realtime_block_user_info-one">Yes</label>
                        <input type="radio" id="realtime_block_user_info-two" name="realtime_block_user_info" value="0" check="no" />
                        <label for="realtime_block_user_info-two">No</label>';
                    } else {
                        echo '  <input type="radio" id="realtime_block_user_info-one" name="realtime_block_user_info" value="1" check="yes"
                                />
                        <label for="realtime_block_user_info-one">Yes</label>
                        <input type="radio" id="realtime_block_user_info-two" name="realtime_block_user_info" value="0" check="no" checked />
                        <label for="realtime_block_user_info-two">No</label>';
                    }

                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Admin Hide Lead Data</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['admin_hide_lead_data'] == 1) {
                        echo '  <input type="radio" id="admin_hide_lead_data-one" name="admin_hide_lead_data" value="1" check="yes"
                               checked />
                        <label for="admin_hide_lead_data-one">Yes</label>
                        <input type="radio" id="admin_hide_lead_data-two" name="admin_hide_lead_data" value="0" check="no" />
                        <label for="admin_hide_lead_data-two">No</label>';
                    } else {
                        echo '  <input type="radio" id="admin_hide_lead_data-one" name="admin_hide_lead_data" value="1" check="yes"
                                />
                        <label for="admin_hide_lead_data-one">Yes</label>
                        <input type="radio" id="admin_hide_lead_data-two" name="admin_hide_lead_data" value="0" check="no" checked/>
                        <label for="admin_hide_lead_data-two">No</label>';
                    }

                    ?>


                </div>
            </div>
        </div>
        <hr>

        <h3 class="my-5">Admin Interface Options</h3>
        <div class="row">
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>View Reports</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['view_reports'] == 1) {
                        echo '   <input type="radio" id="view_reports-one" name="view_reports" value="1" check="yes"
                           checked/>
                    <label for="view_reports-one">Yes</label>
                    <input type="radio" id="view_reports-two" name="view_reports" value="0" check="no"/>
                    <label for="view_reports-two">No</label>';
                    } else {
                        echo '   <input type="radio" id="view_reports-one" name="view_reports" value="1" check="yes"
                           />
                    <label for="view_reports-one">Yes</label>
                    <input type="radio" id="view_reports-two" name="view_reports" value="0" check="no" checked/>
                    <label for="view_reports-two">No</label>';
                    }


                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Alter Agent Interface Options</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['alter_agent_interface_options'] == 1) {
                        echo ' <input type="radio" id="alter_agent_interface_options-one" name="alter_agent_interface_options"
                           value="1" check="yes"
                           checked/>
                    <label for="alter_agent_interface_options-one">Yes</label>
                    <input type="radio" id="alter_agent_interface_options-two" name="alter_agent_interface_options"
                           value="0" check="no"/>
                    <label for="alter_agent_interface_options-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="alter_agent_interface_options-one" name="alter_agent_interface_options"
                           value="1" check="yes"
                           />
                    <label for="alter_agent_interface_options-one">Yes</label>
                    <input type="radio" id="alter_agent_interface_options-two" name="alter_agent_interface_options"
                           value="0" check="no" checked/>
                    <label for="alter_agent_interface_options-two">No</label>';
                    }

                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Users</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['modify_users'] == 1) {
                        echo ' <input type="radio" id="modify_users-one" name="modify_users" value="1" check="yes"
                           checked/>
                    <label for="modify_users-one">Yes</label>
                    <input type="radio" id="modify_users-two" name="modify_users" value="0" check="no"/>
                    <label for="modify_users-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="modify_users-one" name="modify_users" value="1" check="yes"
                           />
                    <label for="modify_users-one">Yes</label>
                    <input type="radio" id="modify_users-two" name="modify_users" value="0" check="no" checked/>
                    <label for="modify_users-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Change Agent Campaign</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['change_agent_campaign'] == 1) {
                        echo '<input type="radio" id="change_agent_campaign-one" name="change_agent_campaign" value="1"
                           check="yes"
                           checked/>
                    <label for="change_agent_campaign-one">Yes</label>
                    <input type="radio" id="change_agent_campaign-two" name="change_agent_campaign" value="0"
                           check="no"/>
                    <label for="change_agent_campaign-two">No</label>';
                    } else {
                        echo '<input type="radio" id="change_agent_campaign-one" name="change_agent_campaign" value="1"
                           check="yes"
                           />
                    <label for="change_agent_campaign-one">Yes</label>
                    <input type="radio" id="change_agent_campaign-two" name="change_agent_campaign" value="0"
                           check="no" checked/>
                    <label for="change_agent_campaign-two">No</label>';
                    }
                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete Users</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['delete_users'] == 1) {
                        echo '<input type="radio" id="delete_users-one" name="delete_users" value="1" check="yes"
                           checked/>
                    <label for="delete_users-one">Yes</label>
                    <input type="radio" id="delete_users-two" name="delete_users" value="0" check="no"/>
                    <label for="delete_users-two">No</label>';
                    } else {
                        echo '<input type="radio" id="delete_users-one" name="delete_users" value="1" check="yes"
                           />
                    <label for="delete_users-one">Yes</label>
                    <input type="radio" id="delete_users-two" name="delete_users" value="0" check="no" checked/>
                    <label for="delete_users-two">No</label>';
                    }

                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify User Groups</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['modify_usergroups'] == 1) {
                        echo ' <input type="radio" id="modify_usergroups-one" name="modify_usergroups" value="1" check="yes"
                           checked/>
                    <label for="modify_usergroups-one">Yes</label>
                    <input type="radio" id="modify_usergroups-two" name="modify_usergroups" value="0" check="no"/>
                    <label for="modify_usergroups-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="modify_usergroups-one" name="modify_usergroups" value="1" check="yes"
                           />
                    <label for="modify_usergroups-one">Yes</label>
                    <input type="radio" id="modify_usergroups-two" name="modify_usergroups" value="0" check="no" checked/>
                    <label for="modify_usergroups-two">No</label>';
                    }

                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete User Groups</h6>
                <div class="switch-field ">
                    <?php

                    if ($user['delete_user_groups'] == 1) {
                        echo '<input type="radio" id="delete_user_groups-one" name="delete_user_groups" value="1" check="yes"
                           checked/>
                    <label for="delete_user_groups-one">Yes</label>
                    <input type="radio" id="delete_user_groups-two" name="delete_user_groups" value="0" check="no"/>
                    <label for="delete_user_groups-two">No</label>';
                    } else {
                        echo '<input type="radio" id="delete_user_groups-one" name="delete_user_groups" value="1" check="yes"
                           />
                    <label for="delete_user_groups-one">Yes</label>
                    <input type="radio" id="delete_user_groups-two" name="delete_user_groups" value="0" check="no" checked/>
                    <label for="delete_user_groups-two">No</label>';
                    }


                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Lists</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['modify_lists'] == 1) {
                        echo '<input type="radio" id="modify_lists-one" name="modify_lists" value="1" check="yes"
                           checked/>
                    <label for="modify_lists-one">Yes</label>
                    <input type="radio" id="modify_lists-two" name="modify_lists" value="0" check="no"/>
                    <label for="modify_lists-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_lists-one" name="modify_lists" value="1" check="yes"
                           />
                    <label for="modify_lists-one">Yes</label>
                    <input type="radio" id="modify_lists-two" name="modify_lists" value="0" check="no" checked/>
                    <label for="modify_lists-two">No</label>';
                    }
                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete Lists</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['delete_lists'] == 1) {
                        echo '<input type="radio" id="delete_lists-one" name="delete_lists" value="1" check="yes"
                           checked/>
                    <label for="delete_lists-one">Yes</label>
                    <input type="radio" id="delete_lists-two" name="delete_lists" value="0" check="no"/>
                    <label for="delete_lists-two">No</label>';
                    } else {
                        echo '<input type="radio" id="delete_lists-one" name="delete_lists" value="1" check="yes"
                           />
                    <label for="delete_lists-one">Yes</label>
                    <input type="radio" id="delete_lists-two" name="delete_lists" value="0" check="no" checked/>
                    <label for="delete_lists-two">No</label>';
                    }

                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Load Leads</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['load_leads'] == 1) {
                        echo '   <input type="radio" id="load_leads-one" name="load_leads" value="1" check="yes"
                           checked/>
                    <label for="load_leads-one">Yes</label>
                    <input type="radio" id="load_leads-two" name="load_leads" value="0" check="no"/>
                    <label for="load_leads-two">No</label>';
                    } else {
                        echo '   <input type="radio" id="load_leads-one" name="load_leads" value="1" check="yes"
                           />
                    <label for="load_leads-one">Yes</label>
                    <input type="radio" id="load_leads-two" name="load_leads" value="0" check="no" checked/>
                    <label for="load_leads-two">No</label>';
                    }
                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Leads</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['modify_leads'] == 1) {
                        echo '<input type="radio" id="modify_leads-one" name="modify_leads" value="1" check="yes"
                           checked/>
                    <label for="modify_leads-one">Yes</label>
                    <input type="radio" id="modify_leads-two" name="modify_leads" value="0" check="no"/>
                    <label for="modify_leads-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_leads-one" name="modify_leads" value="1" check="yes"
                           />
                    <label for="modify_leads-one">Yes</label>
                    <input type="radio" id="modify_leads-two" name="modify_leads" value="0" check="no" checked/>
                    <label for="modify_leads-two">No</label>';
                    }

                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>GDPR-Compliant Export Delete Leads</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['export_gdpr_leads'] == 1) {
                        echo '<input type="radio" id="export_gdpr_leads-one" name="export_gdpr_leads" value="1" check="yes"
                           checked/>
                    <label for="export_gdpr_leads-one">Yes</label>
                    <input type="radio" id="export_gdpr_leads-two" name="export_gdpr_leads" value="0" check="no"/>
                    <label for="export_gdpr_leads-two">No</label>';
                    } else {
                        echo '<input type="radio" id="export_gdpr_leads-one" name="export_gdpr_leads" value="1" check="yes"
                           />
                    <label for="export_gdpr_leads-one">Yes</label>
                    <input type="radio" id="export_gdpr_leads-two" name="export_gdpr_leads" value="0" check="no" checked/>
                    <label for="export_gdpr_leads-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Download Lists</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['download_lists'] == 1) {
                        echo ' <input type="radio" id="download_lists-one" name="download_lists" value="1" check="yes"
                           checked/>
                    <label for="download_lists-one">Yes</label>
                    <input type="radio" id="download_lists-two" name="download_lists" value="0" check="no"/>
                    <label for="download_lists-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="download_lists-one" name="download_lists" value="1" check="yes"
                           />
                    <label for="download_lists-one">Yes</label>
                    <input type="radio" id="download_lists-two" name="download_lists" value="0" check="no" checked/>
                    <label for="download_lists-two">No</label>';
                    }

                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Export Reports</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['export_reports'] == 1) {
                        echo '<input type="radio" id="export_reports-one" name="export_reports" value="1" check="yes"
                           checked/>
                    <label for="export_reports-one">Yes</label>
                    <input type="radio" id="export_reports-two" name="export_reports" value="0" check="no"/>
                    <label for="export_reports-two">No</label>';
                    } else {
                        echo '<input type="radio" id="export_reports-one" name="export_reports" value="1" check="yes"
                           />
                    <label for="export_reports-one">Yes</label>
                    <input type="radio" id="export_reports-two" name="export_reports" value="0" check="no" checked/>
                    <label for="export_reports-two">No</label>';
                    }

                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete From DNC Lists</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['delete_from_dnc'] == 1) {
                        echo ' <input type="radio" id="delete_from_dnc-one" name="delete_from_dnc" value="1" check="yes"
                           checked/>
                    <label for="delete_from_dnc-one">Yes</label>
                    <input type="radio" id="delete_from_dnc-two" name="delete_from_dnc" value="0" check="no"/>
                    <label for="delete_from_dnc-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="delete_from_dnc-one" name="delete_from_dnc" value="1" check="yes"
                           />
                    <label for="delete_from_dnc-one">Yes</label>
                    <input type="radio" id="delete_from_dnc-two" name="delete_from_dnc" value="0" check="no" checked/>
                    <label for="delete_from_dnc-two">No</label>';
                    }

                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Custom Fields Modify</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['custom_fields_modify'] == 1) {
                        echo ' <input type="radio" id="custom_fields_modify-one" name="custom_fields_modify" value="1" check="yes"
                           checked/>
                    <label for="custom_fields_modify-one">Yes</label>
                    <input type="radio" id="custom_fields_modify-two" name="custom_fields_modify" value="0" check="no"/>
                    <label for="custom_fields_modify-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="custom_fields_modify-one" name="custom_fields_modify" value="1" check="yes"
                           />
                    <label for="custom_fields_modify-one">Yes</label>
                    <input type="radio" id="custom_fields_modify-two" name="custom_fields_modify" value="0" check="no" checked/>
                    <label for="custom_fields_modify-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Campaigns</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_campaigns'] == 1) {
                        echo '<input type="radio" id="modify_campaigns-one" name="modify_campaigns" value="1" check="yes"
                           checked/>
                    <label for="modify_campaigns-one">Yes</label>
                    <input type="radio" id="modify_campaigns-two" name="modify_campaigns" value="0" check="no"/>
                    <label for="modify_campaigns-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_campaigns-one" name="modify_campaigns" value="1" check="yes"
                           />
                    <label for="modify_campaigns-one">Yes</label>
                    <input type="radio" id="modify_campaigns-two" name="modify_campaigns" value="0" check="no" checked/>
                    <label for="modify_campaigns-two">No</label>';
                    }
                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Campaign Detail</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['custom_fields_modify'] == 1) {
                        echo '<input type="radio" id="campaign_detail-one" name="campaign_detail" value="1" check="yes"
                           checked/>
                    <label for="campaign_detail-one">Yes</label>
                    <input type="radio" id="campaign_detail-two" name="campaign_detail" value="0" check="no"/>
                    <label for="campaign_detail-two">No</label>';
                    } else {
                        echo '<input type="radio" id="campaign_detail-one" name="campaign_detail" value="1" check="yes"
                           />
                    <label for="campaign_detail-one">Yes</label>
                    <input type="radio" id="campaign_detail-two" name="campaign_detail" value="0" check="no" checked/>
                    <label for="campaign_detail-two">No</label>';
                    }
                    ?>
                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete Campaigns</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['delete_campaigns'] == 1) {
                        echo '<input type="radio" id="delete_campaigns-one" name="delete_campaigns" value="1" check="yes"
                           checked/>
                    <label for="delete_campaigns-one">Yes</label>
                    <input type="radio" id="delete_campaigns-two" name="delete_campaigns" value="0" check="no"/>
                    <label for="delete_campaigns-two">No</label>';
                    } else {
                        echo '<input type="radio" id="delete_campaigns-one" name="delete_campaigns" value="1" check="yes"
                           />
                    <label for="delete_campaigns-one">Yes</label>
                    <input type="radio" id="delete_campaigns-two" name="delete_campaigns" value="0" check="no" checked/>
                    <label for="delete_campaigns-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify In-Groups</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_ingroups'] == 1) {
                        echo ' <input type="radio" id="modify_ingroups-one" name="modify_ingroups" value="1" check="yes"
                           checked/>
                    <label for="modify_ingroups-one">Yes</label>
                    <input type="radio" id="modify_ingroups-two" name="modify_ingroups" value="0" check="no"/>
                    <label for="modify_ingroups-two">No</label>';
                    } else {
                        echo ' <input type="radio" id="modify_ingroups-one" name="modify_ingroups" value="1" check="yes"
                           />
                    <label for="modify_ingroups-one">Yes</label>
                    <input type="radio" id="modify_ingroups-two" name="modify_ingroups" value="0" check="no" checked/>
                    <label for="modify_ingroups-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete In-Groups</h6>
                <div class="switch-field ">
                    <?php
                    if ($user['delete_ingroups'] == 1) {
                        echo '<input type="radio" id="delete_ingroups-one" name="delete_ingroups" value="1" check="yes"
                           checked/>
                    <label for="delete_ingroups-one">Yes</label>
                    <input type="radio" id="delete_ingroups-two" name="delete_ingroups" value="0" check="no"/>
                    <label for="delete_ingroups-two">No</label>';
                    } else {
                        echo '<input type="radio" id="delete_ingroups-one" name="delete_ingroups" value="1" check="yes"
                           />
                    <label for="delete_ingroups-one">Yes</label>
                    <input type="radio" id="delete_ingroups-two" name="delete_ingroups" value="0" check="no" checked/>
                    <label for="delete_ingroups-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify DIDs</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_inbound_dids'] == 1) {
                        echo '<input type="radio" id="modify_inbound_dids-one" name="modify_inbound_dids" value="1" check="yes"
                           checked/>
                    <label for="modify_inbound_dids-one">Yes</label>
                    <input type="radio" id="modify_inbound_dids-two" name="modify_inbound_dids" value="0" check="no"/>
                    <label for="modify_inbound_dids-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_inbound_dids-one" name="modify_inbound_dids" value="1" check="yes"
                           />
                    <label for="modify_inbound_dids-one">Yes</label>
                    <input type="radio" id="modify_inbound_dids-two" name="modify_inbound_dids" value="0" check="no" checked/>
                    <label for="modify_inbound_dids-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete DIDs</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['delete_inbound_dids'] == 1) {
                        echo '<input type="radio" id="delete_inbound_dids-one" name="delete_inbound_dids" value="1" check="yes"
                           checked/>
                    <label for="delete_inbound_dids-one">Yes</label>
                    <input type="radio" id="delete_inbound_dids-two" name="delete_inbound_dids" value="0" check="no"/>
                    <label for="delete_inbound_dids-two">No</label>';
                    } else {
                        echo '<input type="radio" id="delete_inbound_dids-one" name="delete_inbound_dids" value="1" check="yes"
                           />
                    <label for="delete_inbound_dids-one">Yes</label>
                    <input type="radio" id="delete_inbound_dids-two" name="delete_inbound_dids" value="0" check="no" checked/>
                    <label for="delete_inbound_dids-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Custom Dialplans</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_custom_dialplans'] == 1) {
                        echo '<input type="radio" id="modify_custom_dialplans-one" name="modify_custom_dialplans" value="1"
                           check="yes"
                           checked/>
                    <label for="modify_custom_dialplans-one">Yes</label>
                    <input type="radio" id="modify_custom_dialplans-two" name="modify_custom_dialplans" value="0"
                           check="no"/>
                    <label for="modify_custom_dialplans-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_custom_dialplans-one" name="modify_custom_dialplans" value="1"
                           check="yes"
                           />
                    <label for="modify_custom_dialplans-one">Yes</label>
                    <input type="radio" id="modify_custom_dialplans-two" name="modify_custom_dialplans" value="0"
                           check="no" checked/>
                    <label for="modify_custom_dialplans-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Remote Agents</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_remoteagents'] == 1) {
                        echo '<input type="radio" id="modify_remoteagents-one" name="modify_remoteagents" value="1" check="yes"
                           checked/>
                    <label for="modify_remoteagents-one">Yes</label>
                    <input type="radio" id="modify_remoteagents-two" name="modify_remoteagents" value="0" check="no"/>
                    <label for="modify_remoteagents-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_remoteagents-one" name="modify_remoteagents" value="1" check="yes"
                           />
                    <label for="modify_remoteagents-one">Yes</label>
                    <input type="radio" id="modify_remoteagents-two" name="modify_remoteagents" value="0" check="no" checked/>
                    <label for="modify_remoteagents-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete Remote Agents</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['delete_remote_agents'] == 1) {
                        echo '<input type="radio" id="delete_remote_agents-one" name="delete_remote_agents" value="1" check="yes"
                           checked/>
                    <label for="delete_remote_agents-one">Yes</label>
                    <input type="radio" id="delete_remote_agents-two" name="delete_remote_agents" value="0" check="no"/>
                    <label for="delete_remote_agents-two">No</label>';
                    } else {
                        echo '<input type="radio" id="delete_remote_agents-one" name="delete_remote_agents" value="1" check="yes"
                           />
                    <label for="delete_remote_agents-one">Yes</label>
                    <input type="radio" id="delete_remote_agents-two" name="delete_remote_agents" value="0" check="no" checked/>
                    <label for="delete_remote_agents-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Scripts</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_scripts'] == 1) {
                        echo '<input type="radio" id="modify_scripts-one" name="modify_scripts" value="1" check="yes"
                           checked/>
                    <label for="modify_scripts-one">Yes</label>
                    <input type="radio" id="modify_scripts-two" name="modify_scripts" value="0" check="no"/>
                    <label for="modify_scripts-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_scripts-one" name="modify_scripts" value="1" check="yes"
                           />
                    <label for="modify_scripts-one">Yes</label>
                    <input type="radio" id="modify_scripts-two" name="modify_scripts" value="0" check="no" checked/>
                    <label for="modify_scripts-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete Scripts</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['delete_scripts'] == 1) {
                        echo '<input type="radio" id="delete_scripts-one" name="delete_scripts" value="1" check="yes"
                           checked/>
                    <label for="delete_scripts-one">Yes</label>
                    <input type="radio" id="delete_scripts-two" name="delete_scripts" value="0" check="no"/>
                    <label for="delete_scripts-two">No</label>';
                    } else {
                        echo '<input type="radio" id="delete_scripts-one" name="delete_scripts" value="1" check="yes"
                           />
                    <label for="delete_scripts-one">Yes</label>
                    <input type="radio" id="delete_scripts-two" name="delete_scripts" value="0" check="no" checked/>
                    <label for="delete_scripts-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Filters</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_filters'] == 1) {
                        echo '<input type="radio" id="modify_filters-one" name="modify_filters" value="1" check="yes"
                           checked/>
                    <label for="modify_filters-one">Yes</label>
                    <input type="radio" id="modify_filters-two" name="modify_filters" value="0" check="no"/>
                    <label for="modify_filters-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_filters-one" name="modify_filters" value="1" check="yes"
                           />
                    <label for="modify_filters-one">Yes</label>
                    <input type="radio" id="modify_filters-two" name="modify_filters" value="0" check="no" checked/>
                    <label for="modify_filters-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete Filters</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['delete_filters'] == 1) {
                        echo '<input type="radio" id="delete_filters-one" name="delete_filters" value="1" check="yes"
                           checked/>
                    <label for="delete_filters-one">Yes</label>
                    <input type="radio" id="delete_filters-two" name="delete_filters" value="0" check="no"/>
                    <label for="delete_filters-two">No</label>';
                    } else {
                        echo '<input type="radio" id="delete_filters-one" name="delete_filters" value="1" check="yes"
                           />
                    <label for="delete_filters-one">Yes</label>
                    <input type="radio" id="delete_filters-two" name="delete_filters" value="0" check="no" checked/>
                    <label for="delete_filters-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>AGC Admin Access</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['ast_admin_access'] == 1) {
                        echo '<input type="radio" id="ast_admin_access-one" name="ast_admin_access" value="1" check="yes"
                           checked/>
                    <label for="ast_admin_access-one">Yes</label>
                    <input type="radio" id="ast_admin_access-two" name="ast_admin_access" value="0" check="no"/>
                    <label for="ast_admin_access-two">No</label>';
                    } else {
                        echo '<input type="radio" id="ast_admin_access-one" name="ast_admin_access" value="1" check="yes"
                           />
                    <label for="ast_admin_access-one">Yes</label>
                    <input type="radio" id="ast_admin_access-two" name="ast_admin_access" value="0" check="no" checked/>
                    <label for="ast_admin_access-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>AGC Delete Phones</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['ast_delete_phones'] == 1) {
                        echo '<input type="radio" id="ast_delete_phones-one" name="ast_delete_phones" value="1" check="yes"
                           checked/>
                    <label for="ast_delete_phones-one">Yes</label>
                    <input type="radio" id="ast_delete_phones-two" name="ast_delete_phones" value="0" check="no"/>
                    <label for="ast_delete_phones-two">No</label>';
                    } else {
                        echo '<input type="radio" id="ast_delete_phones-one" name="ast_delete_phones" value="1" check="yes"
                           />
                    <label for="ast_delete_phones-one">Yes</label>
                    <input type="radio" id="ast_delete_phones-two" name="ast_delete_phones" value="0" check="no" checked/>
                    <label for="ast_delete_phones-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Call Times</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_call_times'] == 1) {
                        echo '<input type="radio" id="Modify Call Times-one" name="modify_call_times" value="1" check="yes"
                           checked/>
                    <label for="Modify Call Times-one">Yes</label>
                    <input type="radio" id="Modify Call Times-two" name="modify_call_times" value="0" check="no"/>
                    <label for="Modify Call Times-two">No</label>';
                    } else {
                        echo '<input type="radio" id="Modify Call Times-one" name="modify_call_times" value="1" check="yes"
                           />
                    <label for="Modify Call Times-one">Yes</label>
                    <input type="radio" id="Modify Call Times-two" name="modify_call_times" value="0" check="no" checked/>
                    <label for="Modify Call Times-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete Call Times</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['delete_call_times'] == 1) {
                        echo '<input type="radio" id="delete_call_times-one" name="delete_call_times" value="1" check="yes"
                           checked/>
                    <label for="delete_call_times-one">Yes</label>
                    <input type="radio" id="delete_call_times-two" name="delete_call_times" value="0" check="no"/>
                    <label for="delete_call_times-two">No</label>';
                    } else {
                        echo '<input type="radio" id="delete_call_times-one" name="delete_call_times" value="1" check="yes"
                           />
                    <label for="delete_call_times-one">Yes</label>
                    <input type="radio" id="delete_call_times-two" name="delete_call_times" value="0" check="no" checked/>
                    <label for="delete_call_times-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Servers</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_servers'] == 1) {
                        echo '<input type="radio" id="modify_servers-one" name="modify_servers" value="1" check="yes"
                           checked/>
                    <label for="modify_servers-one">Yes</label>
                    <input type="radio" id="modify_servers-two" name="modify_servers" value="0" check="no"/>
                    <label for="modify_servers-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_servers-one" name="modify_servers" value="1" check="yes"
                           />
                    <label for="modify_servers-one">Yes</label>
                    <input type="radio" id="modify_servers-two" name="modify_servers" value="0" check="no" checked/>
                    <label for="modify_servers-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Shifts</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_shifts'] == 1) {
                        echo '<input type="radio" id="modify_shifts-one" name="modify_shifts" value="1" check="yes"
                           checked/>
                    <label for="modify_shifts-one">Yes</label>
                    <input type="radio" id="modify_shifts-two" name="modify_shifts" value="0" check="no"/>
                    <label for="modify_shifts-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_shifts-one" name="modify_shifts" value="1" check="yes"
                           />
                    <label for="modify_shifts-one">Yes</label>
                    <input type="radio" id="modify_shifts-two" name="modify_shifts" value="0" check="no" checked/>
                    <label for="modify_shifts-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Phones</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_phones'] == 1) {
                        echo '<input type="radio" id="modify_phones-one" name="modify_phones" value="1" check="yes"
                           checked/>
                    <label for="modify_phones-one">Yes</label>
                    <input type="radio" id="modify_phones-two" name="modify_phones" value="0" check="no"/>
                    <label for="modify_phones-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_phones-one" name="modify_phones" value="1" check="yes"
                           />
                    <label for="modify_phones-one">Yes</label>
                    <input type="radio" id="modify_phones-two" name="modify_phones" value="0" check="no" checked/>
                    <label for="modify_phones-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Carriers</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_carriers'] == 1) {
                        echo '<input type="radio" id="modify_carriers-one" name="modify_carriers" value="1" check="yes"
                           checked/>
                    <label for="modify_carriers-one">Yes</label>
                    <input type="radio" id="modify_carriers-two" name="modify_carriers" value="0" check="no"/>
                    <label for="modify_carriers-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_carriers-one" name="modify_carriers" value="1" check="yes"
                           />
                    <label for="modify_carriers-one">Yes</label>
                    <input type="radio" id="modify_carriers-two" name="modify_carriers" value="0" check="no" checked/>
                    <label for="modify_carriers-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Email Accounts</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_email_accounts'] == 1) {
                        echo '<input type="radio" id="modify_email_accounts-one" name="modify_email_accounts" value="1"
                           check="yes"
                           checked/>
                    <label for="modify_email_accounts-one">Yes</label>
                    <input type="radio" id="modify_email_accounts-two" name="modify_email_accounts" value="0"
                           check="no"/>
                    <label for="modify_email_accounts-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_email_accounts-one" name="modify_email_accounts" value="1"
                           check="yes"
                           />
                    <label for="modify_email_accounts-one">Yes</label>
                    <input type="radio" id="modify_email_accounts-two" name="modify_email_accounts" value="0"
                           check="no" checked/>
                    <label for="modify_email_accounts-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Labels</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_labels'] == 1) {
                        echo '<input type="radio" id="Modify Labels-one" name="modify_labels" value="1" check="yes"
                           checked/>
                    <label for="Modify Labels-one">Yes</label>
                    <input type="radio" id="Modify Labels-two" name="modify_labels" value="0" check="no"/>
                    <label for="Modify Labels-two">No</label>';
                    } else {
                        echo '<input type="radio" id="Modify Labels-one" name="modify_labels" value="1" check="yes"
                           />
                    <label for="Modify Labels-one">Yes</label>
                    <input type="radio" id="Modify Labels-two" name="modify_labels" value="0" check="no" checked/>
                    <label for="Modify Labels-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Colors</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_colors'] == 1) {
                        echo '<input type="radio" id="modify_colors-one" name="modify_colors" value="1" check="yes"
                           checked/>
                    <label for="modify_colors-one">Yes</label>
                    <input type="radio" id="modify_colors-two" name="modify_colors" value="0" check="no"/>
                    <label for="modify_colors-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_colors-one" name="modify_colors" value="1" check="yes"
                           />
                    <label for="modify_colors-one">Yes</label>
                    <input type="radio" id="modify_colors-two" name="modify_colors" value="0" check="no" checked/>
                    <label for="modify_colors-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Statuses</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_statuses'] == 1) {
                        echo '<input type="radio" id="modify_statuses-one" name="modify_statuses" value="1" check="yes"
                           checked/>
                    <label for="modify_statuses-one">Yes</label>
                    <input type="radio" id="modify_statuses-two" name="modify_statuses" value="0" check="no"/>
                    <label for="modify_statuses-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_statuses-one" name="modify_statuses" value="1" check="yes"
                           />
                    <label for="modify_statuses-one">Yes</label>
                    <input type="radio" id="modify_statuses-two" name="modify_statuses" value="0" check="no" checked/>
                    <label for="modify_statuses-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Voicemail</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_voicemail'] == 1) {
                        echo '<input type="radio" id="modify_voicemail-one" name="modify_voicemail" value="1" check="yes"
                           checked/>
                    <label for="modify_voicemail-one">Yes</label>
                    <input type="radio" id="modify_voicemail-two" name="modify_voicemail" value="0" check="no"/>
                    <label for="modify_voicemail-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_voicemail-one" name="modify_voicemail" value="1" check="yes"
                           />
                    <label for="modify_voicemail-one">Yes</label>
                    <input type="radio" id="modify_voicemail-two" name="modify_voicemail" value="0" check="no" checked/>
                    <label for="modify_voicemail-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Audio Store</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_audiostore'] == 1) {
                        echo '<input type="radio" id="modify_audiostore-one" name="modify_audiostore" value="1" check="yes"
                           checked/>
                    <label for="modify_audiostore-one">Yes</label>
                    <input type="radio" id="modify_audiostore-two" name="modify_audiostore" value="0" check="no"/>
                    <label for="modify_audiostore-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_audiostore-one" name="modify_audiostore" value="1" check="yes"
                           />
                    <label for="modify_audiostore-one">Yes</label>
                    <input type="radio" id="modify_audiostore-two" name="modify_audiostore" value="0" check="no" checked/>
                    <label for="modify_audiostore-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Music On Hold</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_moh'] == 1) {
                        echo '<input type="radio" id="modify_moh-one" name="modify_moh" value="1" check="yes"
                           checked/>
                    <label for="modify_moh-one">Yes</label>
                    <input type="radio" id="modify_moh-two" name="modify_moh" value="0" check="no"/>
                    <label for="modify_moh-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_moh-one" name="modify_moh" value="1" check="yes"
                           />
                    <label for="modify_moh-one">Yes</label>
                    <input type="radio" id="modify_moh-two" name="modify_moh" value="0" check="no" checked/>
                    <label for="modify_moh-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify TTS</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_tts'] == 1) {
                        echo '<input type="radio" id="modify_tts-one" name="modify_tts" value="1" check="yes"
                           checked/>
                    <label for="modify_tts-one">Yes</label>
                    <input type="radio" id="modify_tts-two" name="modify_tts" value="0" check="no"/>
                    <label for="modify_tts-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_tts-one" name="modify_tts" value="1" check="yes"
                           />
                    <label for="modify_tts-one">Yes</label>
                    <input type="radio" id="modify_tts-two" name="modify_tts" value="0" check="no" checked/>
                    <label for="modify_tts-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Contacts</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_contacts'] == 1) {
                        echo '<input type="radio" id="modify_contacts-one" name="modify_contacts" value="1" check="yes"
                           checked/>
                    <label for="modify_contacts-one">Yes</label>
                    <input type="radio" id="modify_contacts-two" name="modify_contacts" value="0" check="no"/>
                    <label for="modify_contacts-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_contacts-one" name="modify_contacts" value="1" check="yes"
                           />
                    <label for="modify_contacts-one">Yes</label>
                    <input type="radio" id="modify_contacts-two" name="modify_contacts" value="0" check="no" checked/>
                    <label for="modify_contacts-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>CallCard Access</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['callcard_admin'] == 1) {
                        echo '<input type="radio" id="callcard_admin-one" name="callcard_admin" value="1" check="yes"
                           checked/>
                    <label for="callcard_admin-one">Yes</label>
                    <input type="radio" id="callcard_admin-two" name="callcard_admin" value="0" check="no"/>
                    <label for="callcard_admin-two">No</label>';
                    } else {
                        echo '<input type="radio" id="callcard_admin-one" name="callcard_admin" value="1" check="yes"
                           />
                    <label for="callcard_admin-one">Yes</label>
                    <input type="radio" id="callcard_admin-two" name="callcard_admin" value="0" check="no" checked/>
                    <label for="callcard_admin-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Automated Reports</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_auto_reports'] == 1) {
                        echo '<input type="radio" id="modify_auto_reports-one" name="modify_auto_reports" value="1" check="yes"
                           checked/>
                    <label for="modify_auto_reports-one">Yes</label>
                    <input type="radio" id="modify_auto_reports-two" name="modify_auto_reports" value="0" check="no"/>
                    <label for="modify_auto_reports-two">No</label>';
                    } else {
                        echo 'm<input type="radio" id="modify_auto_reports-one" name="modify_auto_reports" value="1" check="yes"
                           />
                    <label for="modify_auto_reports-one">Yes</label>
                    <input type="radio" id="modify_auto_reports-two" name="modify_auto_reports" value="0" check="no" checked/>
                    <label for="modify_auto_reports-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Add Timeclock Log Record</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['add_timeclock_log'] == 1) {
                        echo '<input type="radio" id="add_timeclock_log-one" name="add_timeclock_log" value="1" check="yes"
                           checked/>
                    <label for="add_timeclock_log-one">Yes</label>
                    <input type="radio" id="add_timeclock_log-two" name="add_timeclock_log" value="0" check="no"/>
                    <label for="add_timeclock_log-two">No</label>';
                    } else {
                        echo '<input type="radio" id="add_timeclock_log-one" name="add_timeclock_log" value="1" check="yes"
                           />
                    <label for="add_timeclock_log-one">Yes</label>
                    <input type="radio" id="add_timeclock_log-two" name="add_timeclock_log" value="0" check="no" checked/>
                    <label for="add_timeclock_log-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Timeclock Log Record</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_timeclock_log'] == 1) {
                        echo '<input type="radio" id="modify_timeclock_log-one" name="modify_timeclock_log" value="1" check="yes"
                           checked/>
                    <label for="modify_timeclock_log-one">Yes</label>
                    <input type="radio" id="modify_timeclock_log-two" name="modify_timeclock_log" value="0" check="no"/>
                    <label for="modify_timeclock_log-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_timeclock_log-one" name="modify_timeclock_log" value="1" check="yes"
                           />
                    <label for="modify_timeclock_log-one">Yes</label>
                    <input type="radio" id="modify_timeclock_log-two" name="modify_timeclock_log" value="0" check="no" checked/>
                    <label for="modify_timeclock_log-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Delete Timeclock Log Record</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['delete_timeclock_log'] == 1) {
                        echo '<input type="radio" id="delete_timeclock_log-one" name="delete_timeclock_log" value="1" check="yes"
                           checked/>
                    <label for="delete_timeclock_log-one">Yes</label>
                    <input type="radio" id="delete_timeclock_log-two" name="delete_timeclock_log" value="0" check="no"/>
                    <label for="delete_timeclock_log-two">No</label>';
                    } else {
                        echo '<input type="radio" id="delete_timeclock_log-one" name="delete_timeclock_log" value="1" check="yes"
                           />
                    <label for="delete_timeclock_log-one">Yes</label>
                    <input type="radio" id="delete_timeclock_log-two" name="delete_timeclock_log" value="0" check="no" checked/>
                    <label for="delete_timeclock_log-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Manager Shift Enforcement Override</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['manager_shift_enforcement_override'] == 1) {
                        echo '<input type="radio" id="manager_shift_enforcement_override-one"
                           name="manager_shift_enforcement_override" value="1" check="yes"
                           checked/>
                    <label for="manager_shift_enforcement_override-one">Yes</label>
                    <input type="radio" id="manager_shift_enforcement_override-two"
                           name="manager_shift_enforcement_override" value="0" check="no"/>
                    <label for="manager_shift_enforcement_override-two">No</label>';
                    } else {
                        echo '<input type="radio" id="manager_shift_enforcement_override-one"
                           name="manager_shift_enforcement_override" value="1" check="yes"
                           />
                    <label for="manager_shift_enforcement_override-one">Yes</label>
                    <input type="radio" id="manager_shift_enforcement_override-two"
                           name="manager_shift_enforcement_override" value="0" check="no" checked/>
                    <label for="manager_shift_enforcement_override-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Manager Pause Code Approval</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['pause_code_approval'] == 1) {
                        echo '<input type="radio" id="pause_code_approval-one" name="pause_code_approval" value="1" check="yes"
                           checked/>
                    <label for="pause_code_approval-one">Yes</label>
                    <input type="radio" id="pause_code_approval-two" name="pause_code_approval" value="0" check="no"/>
                    <label for="pause_code_approval-two">No</label>';
                    } else {
                        echo '<input type="radio" id="pause_code_approval-one" name="pause_code_approval" value="1" check="yes"
                           />
                    <label for="pause_code_approval-one">Yes</label>
                    <input type="radio" id="pause_code_approval-two" name="pause_code_approval" value="0" check="no" checked/>
                    <label for="pause_code_approval-two">No</label>';
                    }
                    ?>


                </div>
            </div>
        </div>
        <hr>
        <h3 class="my-5">Security Options(Only enable if needed)</h3>
        <div class="row">
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="two_factor_override" id="two_factor_override">
                        <option></option>
                        <option value="NOT_ACTIVE">NOT_ACTIVE</option>
                        <option value="DISABLED">DISABLED</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="two_factor_override">Two Factor Auth Override</label>
                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify IP Lists</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_ip_lists'] == 1) {
                        echo '<input type="radio" id="modify_ip_lists-one" name="modify_ip_lists" value="1" check="yes"
                           checked/>
                    <label for="modify_ip_lists-one">Yes</label>
                    <input type="radio" id="modify_ip_lists-two" name="modify_ip_lists" value="0" check="no"/>
                    <label for="modify_ip_lists-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_ip_lists-one" name="modify_ip_lists" value="1" check="yes"
                           />
                    <label for="modify_ip_lists-one">Yes</label>
                    <input type="radio" id="modify_ip_lists-two" name="modify_ip_lists" value="0" check="no" checked/>
                    <label for="modify_ip_lists-two">No</label>';
                    }
                    ?>

                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Ignore IP List</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['ignore_ip_list'] == 1) {
                        echo '<input type="radio" id="ignore_ip_list-one" name="ignore_ip_list" value="1" check="yes"
                           checked/>
                    <label for="ignore_ip_list-one">Yes</label>
                    <input type="radio" id="ignore_ip_list-two" name="ignore_ip_list" value="0" check="no"/>
                    <label for="ignore_ip_list-two">No</label>';
                    } else {
                        echo '<input type="radio" id="ignore_ip_list-one" name="ignore_ip_list" value="1" check="yes"
                           />
                    <label for="ignore_ip_list-one">Yes</label>
                    <input type="radio" id="ignore_ip_list-two" name="ignore_ip_list" value="0" check="no" checked/>
                    <label for="ignore_ip_list-two">No</label>';
                    }
                    ?>


                </div>
            </div>
        </div>
        <hr>
        <h3 class="my-5">API User Options (Only enable if needed)</h3>
        <div class="row">
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                <div class="my-dropdown">
                    <select name="api_allowed_functions[]" id="api_allowed_functions">
                        <option></option>
                        <option value="ALL_FUNCTIONS">ALL_FUNCTIONS</option>
                        <option value="add_group_alias">add_group_alias</option>
                        <option value="add_lead">add_lead</option>
                        <option value="add_list">add_list</option>
                        <option value="add_phone">add_phone</option>
                        <option value="add_phone_alias">add_phone_alias</option>
                        <option value="add_user">add_user</option>
                        <option value="agent_ingroup_info">agent_ingroup_info</option>
                        <option value="agent_stats_export">agent_stats_export</option>
                        <option value="agent_status">agent_status</option>
                        <option value="audio_playback">audio_playback</option>
                        <option value="blind_monitor">blind_monitor</option>
                        <option value="call_agent">call_agent</option>
                        <option value="callid_info">callid_info</option>
                        <option value="change_ingroups">change_ingroups</option>
                        <option value="check_phone_number">check_phone_number</option>
                        <option value="copy_user">copy_user</option>
                        <option value="did_log_export">did_log_export</option>
                        <option value="external_add_lead">external_add_lead</option>
                        <option value="external_dial">external_dial</option>
                        <option value="external_hangup">external_hangup</option>
                        <option value="external_pause">external_pause</option>
                        <option value="external_status">external_status</option>
                        <option value="in_group_status">in_group_status</option>
                        <option value="logout">logout</option>
                        <option value="moh_list">moh_list</option>
                        <option value="park_call">park_call</option>
                        <option value="pause_code">pause_code</option>
                        <option value="preview_dial_action">preview_dial_action</option>
                        <option value="ra_call_control">ra_call_control</option>
                        <option value="recording">recording</option>
                        <option value="recording_lookup">recording_lookup</option>
                        <option value="send_dtmf">send_dtmf</option>
                        <option value="server_refresh">server_refresh</option>
                        <option value="set_timer_action">set_timer_action</option>
                        <option value="sounds_list">sounds_list</option>
                        <option value="st_get_agent_active_lead">st_get_agent_active_lead</option>
                        <option value="st_login_log">st_login_log</option>
                        <option value="transfer_conference">transfer_conference</option>
                        <option value="update_fields">update_fields</option>
                        <option value="update_lead">update_lead</option>
                        <option value="update_list">update_list</option>
                        <option value="list_info">list_info</option>
                        <option value="list_custom_fields">list_custom_fields</option>
                        <option value="update_log_entry">update_log_entry</option>
                        <option value="update_phone">update_phone</option>
                        <option value="update_phone_alias">update_phone_alias</option>
                        <option value="update_user">update_user</option>
                        <option value="user_group_status">user_group_status</option>
                        <option value="vm_list">vm_list</option>
                        <option value="webphone_url">webphone_url</option>
                        <option value="webserver">webserver</option>
                        <option value="logged_in_agents">logged_in_agents</option>
                        <option value="update_campaign">update_campaign</option>
                        <option value="add_did">add_did</option>
                        <option value="update_did">update_did</option>
                        <option value="lead_field_info">lead_field_info</option>
                        <option value="lead_all_info">lead_all_info</option>
                        <option value="phone_number_log">phone_number_log</option>
                        <option value="switch_lead">switch_lead</option>
                        <option value="ccc_lead_info">ccc_lead_info</option>
                        <option value="lead_status_search">lead_status_search</option>
                        <option value="call_status_stats">call_status_stats</option>
                        <option value="calls_in_queue_count">calls_in_queue_count</option>
                        <option value="force_fronter_leave_3way">force_fronter_leave_3way</option>
                        <option value="force_fronter_audio_stop">force_fronter_audio_stop</option>
                        <option value="update_cid_group_entry">update_cid_group_entry</option>
                        <option value="add_dnc_phone">add_dnc_phone</option>
                        <option value="add_fpg_phone">add_fpg_phone</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="api_allowed_functions">API Allowed Functions</label>
                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Agent API Access</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['vdc_agent_api_access'] == 1) {
                        echo '<input type="radio" id="vdc_agent_api_access-one" name="vdc_agent_api_access" value="1" check="yes"
                           checked/>
                    <label for="vdc_agent_api_access-one">Yes</label>
                    <input type="radio" id="vdc_agent_api_access-two" name="vdc_agent_api_access" value="0" check="no"/>
                    <label for="vdc_agent_api_access-two">No</label>';
                    } else {
                        echo '<input type="radio" id="vdc_agent_api_access-one" name="vdc_agent_api_access" value="1" check="yes"
                           />
                    <label for="vdc_agent_api_access-one">Yes</label>
                    <input type="radio" id="vdc_agent_api_access-two" name="vdc_agent_api_access" value="0" check="no" checked/>
                    <label for="vdc_agent_api_access-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>API List Restrict</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['api_list_restrict'] == 1) {
                        echo '<input type="radio" id="api_list_restrict-one" name="api_list_restrict" value="1" check="yes"
                           checked/>
                    <label for="api_list_restrict-one">Yes</label>
                    <input type="radio" id="api_list_restrict-two" name="api_list_restrict" value="0" check="no"/>
                    <label for="api_list_restrict-two">No</label>';
                    } else {
                        echo '<input type="radio" id="api_list_restrict-one" name="api_list_restrict" value="1" check="yes"
                           checked/>
                    <label for="api_list_restrict-one">Yes</label>
                    <input type="radio" id="api_list_restrict-two" name="api_list_restrict" value="0" check="no" checked/>
                    <label for="api_list_restrict-two">No</label>';
                    }
                    ?>


                </div>
            </div>
        </div>
        <hr>
        <h3 class="my-5">Disable Admin & Agent Screen Options</h3>
        <div class="row">
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>API Only User</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['api_only_user'] == 1) {
                        echo '<input type="radio" id="api_only_user-one" name="api_only_user" value="1" check="yes"
                           checked/>
                    <label for="api_only_user-one">Yes</label>
                    <input type="radio" id="api_only_user-two" name="api_only_user" value="0" check="no"/>
                    <label for="api_only_user-two">No</label>';
                    } else {
                        echo '<input type="radio" id="api_only_user-one" name="api_only_user" value="1" check="yes"
                           />
                    <label for="api_only_user-one">Yes</label>
                    <input type="radio" id="api_only_user-two" name="api_only_user" value="0" check="no" checked/>
                    <label for="api_only_user-two">No</label>';
                    }
                    ?>


                </div>
            </div>
        </div>

        <hr>
        <h3 class="my-5">Level 9 Admin Options</h3>
        <div class="row">
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Modify Same User Level</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['modify_same_user_level'] == 1) {
                        echo '<input type="radio" id="modify_same_user_level-one" name="modify_same_user_level" value="1"
                           check="yes"
                           checked/>
                    <label for="modify_same_user_level-one">Yes</label>
                    <input type="radio" id="modify_same_user_level-two" name="modify_same_user_level" value="0"
                           check="no"/>
                    <label for="modify_same_user_level-two">No</label>';
                    } else {
                        echo '<input type="radio" id="modify_same_user_level-one" name="modify_same_user_level" value="1"
                           check="yes"
                           checked/>
                    <label for="modify_same_user_level-one">Yes</label>
                    <input type="radio" id="modify_same_user_level-two" name="modify_same_user_level" value="0"
                           check="no" checked/>
                    <label for="modify_same_user_level-two">No</label>';
                    }
                    ?>


                </div>
            </div>
            <div class="my-switch-field col-12 col-md-6 col-lg-4">
                <h6>Alter Admin Interface Options</h6>
                <div class="switch-field ">

                    <?php
                    if ($user['alter_admin_interface_options'] == 1) {
                        echo '<input type="radio" id="alter_admin_interface_options-one" name="alter_admin_interface_options"
                           value="1" check="yes"
                           checked/>
                    <label for="alter_admin_interface_options-one">Yes</label>
                    <input type="radio" id="alter_admin_interface_options-two" name="alter_admin_interface_options"
                           value="0" check="no"/>
                    <label for="alter_admin_interface_options-two">No</label>';
                    } else {
                        echo '<input type="radio" id="alter_admin_interface_options-one" name="alter_admin_interface_options"
                           value="1" check="yes"
                           checked/>
                    <label for="alter_admin_interface_options-one">Yes</label>
                    <input type="radio" id="alter_admin_interface_options-two" name="alter_admin_interface_options"
                           value="0" check="no" checked/>
                    <label for="alter_admin_interface_options-two">No</label>';
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