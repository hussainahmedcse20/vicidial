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


$camp->hotkey= $_POST['hotkey'];
$camp->HKstatus= $_POST['HKstatus'];


$sql="UPDATE vicidial_campaigns SELECT hotkey='".$camp->hotkey."',HKstatus='".$camp->HKstatus."', Where campaign_id='".$id."'";

echo $sql;



}
?>

<div class="user-stats">
    <!-- back button with title -->
    <div class="back-with-title">
        <a href="./show_users.html"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <h5>Modify Hotkeys</h5>
    </div>

    <!-- form starts here -->
    <form action="" method="POST">
        <div class="my-card-with-title">
            <div class="title-bar">
                <h4>ADD NEW CUSTOM CAMPAIGN HOT KEY</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="my-dropdown-with-help col-12 col-md-12 col-lg-4">
                        <div class="my-dropdown">
                            <select name="hotkey" id="hotkey" required>
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                            </select>
                            <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                            <label for="hotkey">Hotkey</label>
                        </div>
                    </div>
                    <div class="my-dropdown-with-help col-12 col-md-12 col-lg-4">
                        <div class="my-dropdown">
                            <select name="HKstatus" id="HKstatus" required>
                                <option></option>
                                <option value="A-----Answering Machine">A - Answering Machine</option>
                                <option value="B-----Busy">B - Busy</option>
                                <option value="CALLBK-----Call Back">CALLBK - Call Back</option>
                                <option value="DAIR-----Dead Air">DAIR - Dead Air</option>
                                <option value="DC-----Disconnected Number">DC - Disconnected Number
                                </option>
                                <option value="DEC-----Declined Sale">DEC - Declined Sale</option>
                                <option value="DNC-----DO NOT CALL">DNC - DO NOT CALL</option>
                                <option value="N-----No Answer">N - No Answer</option>
                                <option value="NI-----Not Interested">NI - Not Interested</option>
                                <option value="NP-----No Pitch No Price">NP - No Pitch No Price</option>
                                <option value="SALE-----Sale Made">SALE - Sale Made</option>
                                <option value="XFER-----Call Transferred">XFER - Call Transferred
                                </option>
                                <option value="0-----02">0 - 02</option>

                                <option value="ALTPH2-----Alternate Phone Hot Dial">ALTPH2 - Alternate
                                    Phone Hot Dial</option>
                                <option value="ADDR3-----Address3 Hot Dial">ADDR3 - Address3 Hot Dial
                                </option>
                                <option value="LTMG-----Send to Answering Machine Msg">LTMG - Send to
                                    Answering Machine Msg</option>
                                <option value="XFTAMM-----Send to Answering Machine Msg">XFTAMM - Send
                                    to Answering Machine Msg</option>
                                <option value="LTMGAD-----Send to AM Message and Dispo">LTMGAD - Send to
                                    AM Message and Dispo</option>
                                <option value="XAMMAD-----Send to AM Message and Dispo">XAMMAD - Send to
                                    AM Message and Dispo</option>
                            </select>
                            <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                            <label for="HKstatus">Status</label>
                        </div>
                    </div>
                    <input type="submit" value="Add" class="my-btn-primary" name="submitstatus">
                </div>

            </div>
        </div>
    </form>


    <div class="my-card-with-title">
        <div class="title-bar">
            <h4>custom statuses within this campaign</h4>
        </div>
        <div class="card-body">
            <div class="my-secondary-table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">HOTKEY</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">CATEGORY</th>
                            <th scope="col">DELETE</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1001</td>
                            <td>A</td>
                            <td>Answering Machine</td>
                            <td><a href=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>