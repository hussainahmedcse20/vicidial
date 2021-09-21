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

    
$camp->pause_code= $_POST['pause_code'];
$camp->pause_code_name= $_POST['pause_code_name'];
$camp->billable= $_POST['billable'];



$sql="UPDATE vicidial_campaigns SELECT pause_code='".$camp->pause_code."',pause_code_name='".$camp->pause_code_name."',billable='".$camp->billable."' Where campaign_id='".$id."'";

$result=mysqli_query($conn, $sql);


}
?>














<div class="user-stats">
    <!-- back button with title -->
    <div class="back-with-title">
        <a href="./show_users.html"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <h5>Modify Pause Codes</h5>
    </div>

    <!-- form starts here -->
    <form action="" method="POST">
        <div class="my-card-with-title">
            <div class="title-bar">
                <h4>ADD NEW CAMPAIGN LEAD RECYCLE</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="my-input-with-help col-12 col-md-6 col-lg-3 ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="pause_code" name="pause_code"
                                aria-describedby="pause_code" required>
                            <label for="pause_code">Pause Code</label>
                        </div>
                    </div>

                    <div class="my-input-with-help col-12 col-md-6 col-lg-3 ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="pause_code_name" name="pause_code_name"
                                aria-describedby="pause_code_name" required>
                            <label for="pause_code_name">Pause Code Name</label>
                        </div>
                    </div>

                    <div class="my-dropdown-with-help col-12 col-md-6 col-lg-4">
                        <div class="my-dropdown">
                            <select name="billable" id="billable" required>
                                <option></option>
                                <option value='YES' selected>YES</option>
                                <option value='NO'>NO</option>
                                <option value='HALF'>HALF</option>
                            </select>
                            <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                            <label for="billable">Billable</label>
                        </div>
                    </div>

                    <input type="submit" value="Add" class=" my-btn-primary" name="submitstatus">
                </div>

            </div>
        </div>
    </form>


    <div class="my-card-with-title">
        <div class="title-bar">
            <h4>AGENT PAUSE CODES FOR THIS CAMPAIGN</h4>
        </div>
        <div class="card-body">
            <div class="my-secondary-table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">PAUSE CODES</th>
                            <th scope="col">BILLABLE</th>
                            <th scope="col">TIME LIMIT</th>
                            <th scope="col">MGR APPROVAL</th>
                            <th scope="col">MODIFY</th>
                            <th scope="col">DELETE</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1001</td>
                            <td><span class="active-yes">Yes</span></td>
                            <td>00.00.00</td>
                            <td><span class="active-yes">Yes</span></td>
                            <td><a href="">Modify</a></td>
                            <td><a href=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>