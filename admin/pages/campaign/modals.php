<!--Add Campaign Modal -->

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

                                <input type="text" class="form-control" id="campaign_id" name="campaign_id"
                                    aria-describedby="campaign_id">
                                <label for="campaign_id">Campaign ID</label>
                            </div>

                        </div>
                        <div class="my-input-with-help col-6">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="campaign_name" name="campaign_name"
                                    aria-describedby="campaign_name">
                                <label for="campaign_name">Campaign Name</label>
                            </div>

                        </div>
                        <div class="my-dropdown-with-help col-6">
                            <div class="my-dropdown">
                                <select name="source_campaign_id" id="source_campaign_id">
                                    <option></option>
                                    <option value="DEMO">DEMO - DEMO Camp</option>
                                    <option value="DEMO1">DEMO1 - DEMO Camp</option>
                                    <option value="test">test - test12</option>
                                </select>
                                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                <label for="source_campaign_id">Source User</label>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary my-btn-secondary" data-dismiss="modal">Cancel
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
    <div style="min-width: 1080px;" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Campaign</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">

                    <div class="row">
                        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="campaign_id" name="campaign_id"
                                    aria-describedby="campaign_id">
                                <label for="campaign_id">Campaign ID</label>
                            </div>
                        </div>
                        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="campaign_name" name="campaign_name"
                                    aria-describedby="campaign_name">
                                <label for="campaign_name">Campaign Name</label>
                            </div>
                        </div>
                        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="campaign_description"
                                    name="campaign_description" aria-describedby="campaign_description">
                                <label for="campaign_description">Campaign Description</label>
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
                                <label for="user_group">User Group</label>
                            </div>

                        </div>
                        <div class="my-switch-field col-12 col-md-6 col-lg-4">
                            <h6>Active</h6>
                            <div class="switch-field ">
                                <input type="radio" id="active-radio-one" name="active" value="Y" check="yes" checked />
                                <label for="active-radio-one">Yes</label>
                                <input type="radio" id="active-radio-two" name="active" value="N" check="no" />
                                <label for="active-radio-two">No</label>
                            </div>
                        </div>
                        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="park_file_name" name="park_file_name"
                                    aria-describedby="park_file_name">
                                <label for="park_file_name">Park Music-on-Hold</label>
                            </div>

                        </div>
                        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="web_form_address" name="web_form_address"
                                    aria-describedby="web_form_address" required>
                                <label for="web_form_address">Web Form</label>
                            </div>

                        </div>
                        <div class="my-switch-field col-12 col-md-6 col-lg-4">
                            <h6>Allow Closers</h6>
                            <div class="switch-field ">
                                <input type="radio" id="allow_closers-radio-one" name="allow_closers" value="Y"
                                    check="yes" checked />
                                <label for="allow_closers-radio-one">Yes</label>
                                <input type="radio" id="allow_closers-radio-two" name="allow_closers" value="N"
                                    check="no" />
                                <label for="allow_closers-radio-two">No</label>
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
                                <label for="auto_dial_level">Auto Dial Level (0 = off)</label>
                            </div>

                        </div>
                        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                            <div class="my-dropdown">
                                <select name="next_agent_call" id="next_agent_call">
                                    <option></option>
                                    ext_agent_call>
                                    <option value='random'>random</option>
                                    <option value='oldest_call_start'>oldest_call_start</option>
                                    <option value='oldest_call_finish'>oldest_call_finish</option>
                                    <option value='overall_user_level'>overall_user_level</option>
                                    <option value='campaign_rank'>campaign_rank</option>
                                    <option value='campaign_grade_random'>campaign_grade_random</option>
                                    <option value='fewest_calls'>fewest_calls</option>
                                    <option value='longest_wait_time'>longest_wait_time</option>
                                    <option value='overall_user_level_wait_time'>
                                        overall_user_level_wait_time
                                    </option>
                                    <option value='campaign_rank_wait_time'>campaign_rank_wait_time
                                    </option>
                                    <option value='fewest_calls_wait_time'>fewest_calls_wait_time
                                    </option>
                                </select>
                                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                <label for="next_agent_call">Next Agent Call</label>
                            </div>

                        </div>
                        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                            <div class="my-dropdown">
                                <select name="local_call_time" id="local_call_time">
                                    <option></option>
                                    <option value="12pm-5pm">12pm-5pm - default 12pm to 5pm calling
                                    </option>
                                    <option value="12pm-9pm">12pm-9pm - default 12pm to 9pm calling
                                    </option>
                                    <option value="24hours">24hours - default 24 hours calling</option>
                                    <option value="5pm-9pm">5pm-9pm - default 5pm to 9pm calling
                                    </option>
                                    <option value="9am-5pm">9am-5pm - default 9am to 5pm calling
                                    </option>
                                    <option value="9am-9pm">9am-9pm - default 9am to 9pm calling
                                    </option>
                                </select>
                                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                <label for="local_call_time">Local Call Time</label>
                            </div>

                        </div>
                        <div class="my-input-with-help col-12 col-md-6 col-lg-4">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="voicemail_ext" name="voicemail_ext"
                                    aria-describedby="voicemail_ext">
                                <label for="voicemail_ext">Voicemail</label>
                            </div>

                        </div>
                        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                            <div class="my-dropdown">
                                <select name="script_id" id="script_id">
                                    <option></option>
                                    <option value="">NONE</option>
                                    <option value="CALLNOTES">CALLNOTES - Call Notes and Appointment
                                        Setting
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
                                    <option value="CALLNOTES">CALLNOTES - Call Notes and Appointment
                                        Setting
                                    </option>
                                </select>
                                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                <label for="campaign_script_two">Script Two</label>
                            </div>

                        </div>
                        <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                            <div class="my-dropdown">
                                <select name="get_call_launch" id="get_call_launch">
                                    <option></option>
                                    <option value='NONE'>NONE</option>
                                    <option value='SCRIPT'>SCRIPT</option>
                                    <option value='WEBFORM'>WEBFORM</option>
                                    <option value='SCRIPTTWO'>SCRIPTTWO</option>
                                    <option value='WEBFORMTWO'>WEBFORMTWO</option>
                                    <option value='WEBFORMTHREE'>WEBFORMTHREE</option>
                                    <option value='FORM'>FORM</option>
                                    <option value='EMAIL'>EMAIL</option>
                                    <option value='CHAT'>CHAT</option>
                                </select>
                                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                <label for="get_call_launch">Get Call Launch</label>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary my-btn-secondary" data-dismiss="modal">Cancel
                    </button>
                    <input class="my-btn-primary" type="submit" value="submit" name="add_campaign">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add user modal ends here -->
<!--Add Campaign Modal -->