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

$camp->preset_name= $_POST['preset_name'];
$camp->preset_number= $_POST['preset_number'];
$camp->preset_dtmf= $_POST['preset_dtmf'];
$camp->preset_hide_number= $_POST['preset_hide_number'];




 $sql="UPDATE vicidial_campaigns SELECT preset_name='".$camp->preset_name."',preset_number='".$camp->preset_number."',preset_dtmf='".$camp->preset_dtmf."',preset_hide_number='".$camp->preset_hide_number."' Where campaign_id='".$id."'";
 

 $result=mysqli_query($conn, $sql);


}
?>




<div class="user-stats">
    <!-- back button with title -->
    <div class="back-with-title">
        <a href="./show_users.html"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <h5>Modify Present</h5>
    </div>

    <!-- form starts here -->
    <form action="" method="POST">
        <div class="my-card-with-title">
            <div class="title-bar">
                <h4>ADD PRESETS FOR THIS CAMPAIGN</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="my-input-with-help col-12 col-md-6 col-lg-3 ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="preset_name" name="preset_name"
                                aria-describedby="preset_name" required>
                            <label for="preset_name">Preset Name</label>
                        </div>
                    </div>

                    <div class="my-input-with-help col-12 col-md-6 col-lg-3 ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="preset_number" name="preset_number"
                                aria-describedby="preset_number" required>
                            <label for="preset_number">Number</label>
                        </div>
                    </div>

                    <div class="my-input-with-help col-12 col-md-6 col-lg-3 ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="preset_dtmf" name="preset_dtmf"
                                aria-describedby="preset_dtmf" required>
                            <label for="preset_dtmf">DTMF</label>
                        </div>
                    </div>

                    <div class="my-switch-field col-12 col-md-6 col-lg-2">
                        <h6>Hide Number</h6>
                        <div class="switch-field ">
                            <input type="radio" id="preset_hide_number-one" name="preset_hide_number" value="1"
                                check="yes" checked />
                            <label for="preset_hide_number-one">Yes</label>
                            <input type="radio" id="preset_hide_number-two" name="preset_hide_number" value="0"
                                check="no" />
                            <label for="preset_hide_number-two">No</label>
                        </div>
                    </div>



                    <input type="submit" value="Add" class=" my-btn-primary" name="submitstatus">
                </div>

            </div>
        </div>
    </form>


    <div class="my-card-with-title">
        <div class="title-bar">
            <h4>PRESETS LISTINGS FOR THIS CAMPAIGN</h4>
        </div>
        <div class="card-body">
            <div class="my-secondary-table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">PRESET NAME</th>
                            <th scope="col">NUMBER</th>
                            <th scope="col">DTMF</th>
                            <th scope="col">HIDE NUMBER</th>
                            <th>MODIFY</th>
                            <th scope="col">DELETE</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1001</td>
                            <td>Warehouse</td>
                            <td>123456</td>
                            <td>123456</td>
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