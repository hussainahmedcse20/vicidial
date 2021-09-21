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

$camp->areacode= $_POST['areacode'];
$camp->outbound_cid= $_POST['outbound_cid'];
$camp->cid_description= $_POST['cid_description'];





 $sql="UPDATE vicidial_campaigns SELECT areacode='".$camp->areacode."',outbound_cid='".$camp->outbound_cid."',cid_description='".$camp->cid_description."' Where campaign_id='".$id."'";


 $result=mysqli_query($conn, $sql);


}
?>




<div class="user-stats">
    <!-- back button with title -->
    <div class="back-with-title">
        <a href="./show_users.html"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <h5>ADD NEW AREACODE CID</h5>

    </div>

    <!-- form starts here -->
    <form action="" method="post">
        <div class="my-card-with-title">
            <div class="title-bar">
                <h4>ADD PRESETS FOR THIS CAMPAIGN</h4>
                <a href="#">Click here to see Admin changes to this campaign AC-CID</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="my-input-with-help col-12 col-md-6 col-lg-3 ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="areacode" name="areacode"
                                aria-describedby="areacode" required>
                            <label for="areacode">Areacode</label>
                        </div>
                    </div>

                    <div class="my-input-with-help col-12 col-md-6 col-lg-3 ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="outbound_cid" name="outbound_cid"
                                aria-describedby="outbound_cid" required>
                            <label for="outbound_cid">Outbound CID</label>
                        </div>
                    </div>

                    <div class="my-input-with-help col-12 col-md-6 col-lg-3 ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="cid_description" name="cid_description"
                                aria-describedby="cid_description" required>
                            <label for="cid_description">Description</label>
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
                            <th scope="col">AREACODE</th>
                            <th scope="col">CID NUMBER</th>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">ACTIVE <a class="ml-2" href="#">select all</a></th>
                            <th>CALLS</th>
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
                            <td>123455</td>
                            <td><a href=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>