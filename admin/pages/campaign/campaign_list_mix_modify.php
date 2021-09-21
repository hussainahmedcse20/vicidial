<?php
$camp=new campaign();
if(isset($_GET['id'])){
    $id=$_GET['id'];
}

if(isset($_POST['submitstatus'])){
    $abc=$_POST;

// foreach ($abc as $k->$v){
//     echo $k;
//     echo "<br>";
// }

// foreach($abc as $k=>$v){
//         echo '$camp';
//         echo "->";
//         echo $k;
//         echo "= ";
//         echo '$_POST['.$k.']';
//         echo "<br>";
//     }

 
$camp->vcl_id= $_POST['vcl_id'];
$camp->vcl_name= $_POST['vcl_name'];
$camp->mix_method= $_POST['mix_method'];
$camp->list_id= $_POST['list_id'];
$camp->status= $_POST['status'];

 


$sql="UPDATE vicidial_campaigns SELECT vcl_id='".$camp->vcl_id."',vcl_name='".$camp->vcl_name."',mix_method='".$camp->mix_method."',mix_method='".$camp->mix_method."',list_id='".$camp->list_id."',status='".$camp->status."' Where campaign_id='".$id."'";
$result=mysqli_query($conn, $sql);


}
?>


<div class="user-stats">
    <!-- back button with title -->
    <div class="back-with-title">
        <a href="./show_users.html"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <h5>Modify Auto-Alt Dial</h5>
    </div>

    <!-- form starts here -->
    <form action="" method="POST">
        <div class="my-card-with-title">
            <div class="title-bar">
                <h4>ADD NEW AUTO ALT NUMBER DIALING STATUS</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="my-input-with-help col-12 col-md-6 col-lg-3 ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="vcl_id" name="vcl_id" aria-describedby="vcl_id"
                                required>
                            <label for="vcl_id">Mix ID</label>
                        </div>
                    </div>

                    <div class="my-input-with-help col-12 col-md-6 col-lg-3 ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="vcl_name" name="vcl_name"
                                aria-describedby="vcl_name" required>
                            <label for="vcl_name">Mix Name</label>
                        </div>
                    </div>

                    <div class="my-dropdown-with-help col-12 col-md-6 col-lg-3">
                        <div class="my-dropdown">
                            <select name="mix_method" id="mix_method" required>
                                <option></option>
                                <option value="EVEN_MIX">EVEN_MIX</option>
                                <option value="IN_ORDER">IN_ORDER</option>
                                <option value="RANDOM">RANDOM</option>
                            </select>
                            <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                            <label for="mix_method">Mix Method</label>
                        </div>
                    </div>

                    <div class="my-dropdown-with-help col-12 col-md-6 col-lg-3">
                        <div class="my-dropdown">
                            <select name="list_id" id="list_id">
                                <option></option>
                                <option value="a">ADD ANOTHER ENTRY</option>
                                <option value="a">ADD ANOTHER ENTRY</option>
                            </select>
                            <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                            <label for="list_id">List</label>
                            <label for="list_id">List</label>

                        </div>
                    </div>

                    <div class="my-dropdown-with-help col-12 col-md-6 col-lg-3">
                        <div class="my-dropdown">
                            <select name="status" id="status" required>
                                <option></option>
                                <option value="A">A - Answering Machine</option>
                                <option value="AA">AA - Answering Machine Auto</option>
                                <option value="AB">AB - Busy Auto</option>
                                <option value="ADC">ADC - Disconnected Number Auto</option>
                                <option value="ADCT">ADCT - Disconnected Number Temporary</option>
                                <option value="AFAX">AFAX - Fax Machine Auto</option>
                                <option value="AFTHRS">AFTHRS - Inbound After Hours Drop</option>
                                <option value="AL">AL - Answering Machine Msg Played</option>
                                <option value="AM">AM - Answering Machine SentToMesg</option>
                                <option value="B">B - Busy</option>
                                <option value="CALLBK">CALLBK - Call Back</option>
                                <option value="DC">DC - Disconnected Number</option>
                                <option value="DEC">DEC - Declined Sale</option>
                                <option value="DNC">DNC - DO NOT CALL</option>
                                <option value="DNCC">DNCC - DO NOT CALL Hopper Camp Match</option>
                                <option value="DNCL">DNCL - DO NOT CALL Hopper Sys Match</option>
                                <option value="DROP">DROP - Agent Not Available</option>
                                <option value="ERI">ERI - Agent Error</option>
                                <option value="INCALL">INCALL - Lead Being Called</option>
                                <option value="IVRXFR">IVRXFR - Outbound drop to Call Menu</option>
                                <option value="LRERR">LRERR - Outbound Local Channel Res Err</option>
                                <option value="LSMERG">LSMERG - Agent lead search old lead mrg</option>
                                <option value="MAXCAL">MAXCAL - Inbound Max Calls Drop</option>
                                <option value="MLINAT">MLINAT - Multi-Lead auto-alt set inactv</option>
                                <option value="N">N - No Answer</option>
                                <option value="NA">NA - No Answer AutoDial</option>
                                <option value="NANQUE">NANQUE - Inbound No Agent No Queue Drop</option>
                                <option value="NEW">NEW - New Lead</option>
                                <option value="NI">NI - Not Interested</option>
                                <option value="NP">NP - No Pitch No Price</option>
                                <option value="PDROP">PDROP - Outbound Pre-Routing Drop</option>
                                <option value="PM">PM - Played Message</option>
                                <option value="PU">PU - Call Picked Up</option>
                                <option value="QCFAIL">QCFAIL - QC_FAIL_CALLBK</option>
                                <option value="QUEUE">QUEUE - Lead To Be Called</option>
                                <option value="QVMAIL">QVMAIL - Queue Abandon Voicemail Left</option>
                                <option value="RQXFER">RQXFER - Re-Queue</option>
                                <option value="SALE">SALE - Sale Made</option>
                                <option value="SVYCLM">SVYCLM - Survey sent to Call Menu</option>
                                <option value="SVYEXT">SVYEXT - Survey sent to Extension</option>
                                <option value="SVYHU">SVYHU - Survey Hungup</option>
                                <option value="SVYREC">SVYREC - Survey sent to Record</option>
                                <option value="SVYVM">SVYVM - Survey sent to Voicemail</option>
                                <option value="TIMEOT">TIMEOT - Inbound Queue Timeout Drop</option>
                                <option value="XDROP">XDROP - Agent Not Available IN</option>
                                <option value="XFER">XFER - Call Transferred</option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                                <option value=""> - </option>
                            </select>
                            <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                            <label for="status">Dial Status</label>
                        </div>
                    </div>

                    <input type="submit" value="Add" class="ml-3 my-btn-primary" name="submitstatus">
                </div>

            </div>
        </div>
    </form>


    <div class="my-card-with-title">
        <div class="title-bar">
            <h4>LIST MIXES FOR THIS CAMPAIGN</h4>
        </div>
        <div class="card-body row align-items-center">
            <h5 class="ml-3">12</h5>
            <div class="my-input-with-help col-12 col-md-6 col-lg-4 d-flex flex-row align-items-center">
                <div class="form-group my-input">

                    <input type="text" class="form-control" id="vcl_id" name="vcl_id" aria-describedby="vcl_id"
                        required>
                    <label for="vcl_id">Mix ID</label>
                </div>
                <a href="#">
                    <i style="font-size: 24px; color: #5BABEF;" class="fa fa-trash ml-3 mb-3" aria-hidden="true"></i>
                </a>
            </div>
            <h5>Method</h5>
            <div class="my-dropdown-with-help col-12 col-md-6 col-lg-3">
                <div class="my-dropdown">
                    <select name="mix_method" id="mix_method">
                        <option></option>
                        <option value="EVEN_MIX">EVEN_MIX</option>
                        <option value="IN_ORDER">IN_ORDER</option>
                        <option value="RANDOM">RANDOM</option>
                    </select>
                    <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                    <label for="mix_method">Mix Method</label>
                </div>
            </div>

            <div class="my-switch-field col-12 col-md-6 col-lg-3">
                <h6>Active</h6>
                <div class="switch-field ">
                    <input type="radio" id="active-one" name="active" value="1" check="yes" checked />
                    <label for="active-one">Yes</label>
                    <input type="radio" id="active-two" name="active" value="0" check="no" />
                    <label for="active-two">No</label>
                </div>
            </div>
        </div>
        <div class="my-card-with-title">
            <div class="title-bar">
                <h4>LEAD RECYCLING WITHIN THIS CAMPAIGN</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive my-secondary-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">LIST ID</th>
                                <th scope="col">PRIORITY</th>
                                <th scope="col">%MIX</th>
                                <th scope="col">DIFFERENCE%</th>
                                <th scope="col">LIST</th>
                                <th scope="col">STATUSES</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1001</td>
                                <td>
                                    <div class="my-dropdown-with-help" style="max-width: 140px;">
                                        <div class="my-dropdown" style="max-width: 140px;">
                                            <select style="max-width: 140px;" name="priority_0_12345"
                                                id="priority_0_12345" required>
                                                <option></option>
                                                <option value="40">40</option>
                                                <option value="39">39</option>
                                                <option value="38">38</option>
                                                <option value="37">37</option>
                                                <option value="36">36</option>
                                                <option value="35">35</option>
                                                <option value="34">34</option>
                                                <option value="33">33</option>
                                                <option value="32">32</option>
                                                <option value="31">31</option>
                                                <option value="30">30</option>
                                                <option value="29">29</option>
                                                <option value="28">28</option>
                                                <option value="27">27</option>
                                                <option value="26">26</option>
                                                <option value="25">25</option>
                                                <option value="24">24</option>
                                                <option value="23">23</option>
                                                <option value="22">22</option>
                                                <option value="21">21</option>
                                                <option value="20">20</option>
                                                <option value="19">19</option>
                                                <option value="18">18</option>
                                                <option value="17">17</option>
                                                <option value="16">16</option>
                                                <option value="15">15</option>
                                                <option value="14">14</option>
                                                <option value="13">13</option>
                                                <option value="12">12</option>
                                                <option value="11">11</option>
                                                <option value="10">10</option>
                                                <option value="9">9</option>
                                                <option value="8">8</option>
                                                <option value="7">7</option>
                                                <option value="6">6</option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                                <option SELECTED value="1">1</option>


                                            </select>
                                            <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                            <label for="priority_0_12345">PRIORITY</label>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="my-dropdown-with-help" style="max-width: 140px;">
                                        <div class="my-dropdown" style="max-width: 140px;">
                                            <select style="max-width: 140px;" name="percentage_0_12345"
                                                id="percentage_0_12345" required>
                                                <option></option>
                                                <option value="100" selected>100</option>
                                                <option value="99">99</option>
                                                <option value="98">98</option>
                                                <option value="97">97</option>
                                                <option value="96">96</option>
                                                <option value="95">95</option>
                                                <option value="94">94</option>
                                                <option value="93">93</option>
                                                <option value="92">92</option>
                                                <option value="91">91</option>
                                                <option value="90">90</option>
                                                <option value="89">89</option>
                                                <option value="88">88</option>
                                                <option value="87">87</option>
                                                <option value="86">86</option>
                                                <option value="85">85</option>
                                                <option value="84">84</option>
                                                <option value="83">83</option>
                                                <option value="82">82</option>
                                                <option value="81">81</option>
                                                <option value="80">80</option>
                                                <option value="79">79</option>
                                                <option value="78">78</option>
                                                <option value="77">77</option>
                                                <option value="76">76</option>
                                                <option value="75">75</option>
                                                <option value="74">74</option>
                                                <option value="73">73</option>
                                                <option value="72">72</option>
                                                <option value="71">71</option>
                                                <option value="70">70</option>
                                                <option value="69">69</option>
                                                <option value="68">68</option>
                                                <option value="67">67</option>
                                                <option value="66">66</option>
                                                <option value="65">65</option>
                                                <option value="64">64</option>
                                                <option value="63">63</option>
                                                <option value="62">62</option>
                                                <option value="61">61</option>
                                                <option value="60">60</option>
                                                <option value="59">59</option>
                                                <option value="58">58</option>
                                                <option value="57">57</option>
                                                <option value="56">56</option>
                                                <option value="55">55</option>
                                                <option value="54">54</option>
                                                <option value="53">53</option>
                                                <option value="52">52</option>
                                                <option value="51">51</option>
                                                <option value="50">50</option>
                                                <option value="49">49</option>
                                                <option value="48">48</option>
                                                <option value="47">47</option>
                                                <option value="46">46</option>
                                                <option value="45">45</option>
                                                <option value="44">44</option>
                                                <option value="43">43</option>
                                                <option value="42">42</option>
                                                <option value="41">41</option>
                                                <option value="40">40</option>
                                                <option value="39">39</option>
                                                <option value="38">38</option>
                                                <option value="37">37</option>
                                                <option value="36">36</option>
                                                <option value="35">35</option>
                                                <option value="34">34</option>
                                                <option value="33">33</option>
                                                <option value="32">32</option>
                                                <option value="31">31</option>
                                                <option value="30">30</option>
                                                <option value="29">29</option>
                                                <option value="28">28</option>
                                                <option value="27">27</option>
                                                <option value="26">26</option>
                                                <option value="25">25</option>
                                                <option value="24">24</option>
                                                <option value="23">23</option>
                                                <option value="22">22</option>
                                                <option value="21">21</option>
                                                <option value="20">20</option>
                                                <option value="19">19</option>
                                                <option value="18">18</option>
                                                <option value="17">17</option>
                                                <option value="16">16</option>
                                                <option value="15">15</option>
                                                <option value="14">14</option>
                                                <option value="13">13</option>
                                                <option value="12">12</option>
                                                <option value="11">11</option>
                                                <option value="10">10</option>
                                                <option value="9">9</option>
                                                <option value="8">8</option>
                                                <option value="7">7</option>
                                                <option value="6">6</option>
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                                <option value="0">0</option>
                                                <option value="100">100</option>
                                            </select>
                                            <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                            <label for="percentage_0_12345">Mix</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="my-input-with-help " style="max-width: 140px;">
                                        <div class="form-group my-input" style="max-width: 140px;">

                                            <input style="max-width: 140px;" value="0" type="text" class="form-control"
                                                id="PCT_DIFF_12345" name="PCT_DIFF_12345"
                                                aria-describedby="PCT_DIFF_12345" readonly>
                                            <label for="PCT_DIFF_12345">Difference</label>
                                        </div>
                                        <input type="submit" value="Submit" class="my-btn-primary">
                                    </div>
                                </td>
                                </td>
                                <td>
                                    <div class="my-dropdown-with-help" style="max-width: 140px;">
                                        <div class="my-dropdown" style="max-width: 140px;">
                                            <select style="max-width: 140px;" name="three_way_volume_buttons"
                                                id="three_way_volume_buttons" required>
                                                <option></option>
                                                <option value='ENABLED'>ENABLED</option>
                                                <option value='DISABLED'>DISABLED</option>
                                            </select>
                                            <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                            <label for="three_way_volume_buttons">Mix</label>
                                        </div>
                                        <input type="submit" value="Add" class="my-btn-primary">
                                    </div>
                                </td>
                                <td>
                                    <div class="my-dropdown-with-help" style="max-width: 140px;">
                                        <div class="my-dropdown" style="max-width: 140px;">
                                            <select style="max-width: 140px;" name="list_id" id="list_id">
                                                <option></option>
                                                <option value="a">ADD ANOTHER ENTRY</option>
                                                <option value="a">ADD ANOTHER ENTRY</option>

                                            </select>
                                            <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                            <label for="list_id">Mix</label>
                                        </div>
                                        <input type="submit" value="Add" class="my-btn-primary">
                                        <a href="#">
                                            <i style="font-size: 24px; color: #5BABEF;" class="fa fa-trash ml-3 mb-3"
                                                aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>