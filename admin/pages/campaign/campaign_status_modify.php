<?php
$camp= new campaign();
if(isset($_GET['id'])){
    $id=$_GET['id'];
}

if(isset($_POST['submitstatus'])){
$abc=$_POST;

// foreach($abc as $k=>$v){
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

$camp->status_id= $_POST['status_id'];
$camp->status_name= $_POST['status_name'];
$camp->category= $_POST['category'];
$camp->selectable= $_POST['selectable'];
$camp->sale= $_POST['sale'];
$camp->human_answered= $_POST['human_answered'];
$camp->dnc= $_POST['dnc'];
$camp->customer_contact= $_POST['customer_contact'];
$camp->answering_machine= $_POST['answering_machine'];
$camp->scheduled_callbacks= $_POST['scheduled_callbacks'];
$camp->not_interested= $_POST['not_interested'];
$camp->unworkable= $_POST['unworkable'];
$camp->completed= $_POST['completed'];


$sql="UPDATE vicidial_campaigns SET status_id='".$camp->status_id."',status_name='".$camp->status_name."',category='".$camp->category."',selectable='".$camp->selectable."',sale='".$camp->sale."',human_answered='".$camp->human_answered."',dnc='".$camp->dnc."',customer_contact='".$camp->customer_contact."',answering_machine='".$camp->answering_machine."',scheduled_callbacks='".$camp->scheduled_callbacks."',not_interested='".$camp->not_interested."',unworkable='".$camp->unworkable."',completed='".$camp->completed."' WHERE campaign_id='".$id."'";

$result=mysqli_query($conn, $sql);


}
?>

<!-- Code goes here -->
<div class="user-stats">
    <!-- back button with title -->
    <div class="back-with-title">
        <a href="./show_users.html"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <h5> User Stats for 5555</h5>
    </div>

    <!-- form starts here -->
    <form action="" method="POST">
        <div class="my-card-with-title">
            <div class="title-bar">
                <h4>ADD NEW CUSTOM CAMPAIGN STATUS</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                        <div class="form-group my-input">
                            <input type="text" class="form-control" id="status_id" name="status_id"
                                aria-describedby="status_id" required>
                            <label for="status_id">Status</label>
                        </div>
                    </div>

                    <div class="my-input-with-help col-12 col-md-6 col-lg-4 ">
                        <div class="form-group my-input">

                            <input type="text" class="form-control" id="status_name" name="status_name"
                                aria-describedby="status_name" required>
                            <label for="status_name">Description</label>
                        </div>
                    </div>

                    <div class="my-dropdown-with-help col-12 col-md-12 col-lg-4">
                        <div class="my-dropdown">
                            <select name="category" id="category" required>
                                <option></option>
                                <option value="UNDEFINED">UNDEFINED - Default Category</option>
                            </select>
                            <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                            <label for="category">Category</label>
                        </div>
                    </div>

                    <div class="my-switch-field col-12 col-md-6 col-lg-3">
                        <h6>Selectable</h6>
                        <div class="switch-field ">
                            <input type="radio" id="selectable-one" name="selectable" value="1" check="yes" checked />
                            <label for="selectable-one">Yes</label>
                            <input type="radio" id="selectable-two" name="selectable" value="0" check="no" />
                            <label for="selectable-two">No</label>
                        </div>
                    </div>

                    <div class="my-switch-field col-12 col-md-6 col-lg-3">
                        <h6>Sale</h6>
                        <div class="switch-field ">
                            <input type="radio" id="sale-one" name="sale" value="1" check="yes" checked />
                            <label for="sale-one">Yes</label>
                            <input type="radio" id="sale-two" name="sale" value="0" check="no" />
                            <label for="sale-two">No</label>
                        </div>
                    </div>

                    <div class="my-switch-field col-12 col-md-6 col-lg-3">
                        <h6>Human Answer</h6>
                        <div class="switch-field ">
                            <input type="radio" id="human_answered-one" name="human_answered" value="1" check="yes"
                                checked />
                            <label for="human_answered-one">Yes</label>
                            <input type="radio" id="human_answered-two" name="human_answered" value="0" check="no" />
                            <label for="human_answered-two">No</label>
                        </div>
                    </div>

                    <div class="my-switch-field col-12 col-md-6 col-lg-3">
                        <h6>DNC</h6>
                        <div class="switch-field ">
                            <input type="radio" id="dnc-one" name="dnc" value="1" check="yes" checked />
                            <label for="dnc-one">Yes</label>
                            <input type="radio" id="dnc-two" name="dnc" value="0" check="no" />
                            <label for="dnc-two">No</label>
                        </div>
                    </div>

                    <div class="my-switch-field col-12 col-md-6 col-lg-3">
                        <h6>Customer Contact</h6>
                        <div class="switch-field ">
                            <input type="radio" id="customer_contact-one" name="customer_contact" value="1" check="yes"
                                checked />
                            <label for="customer_contact-one">Yes</label>
                            <input type="radio" id="customer_contact-two" name="customer_contact" value="0"
                                check="no" />
                            <label for="customer_contact-two">No</label>
                        </div>
                    </div>

                    <div class="my-switch-field col-12 col-md-6 col-lg-3">
                        <h6>Answering Machine</h6>
                        <div class="switch-field ">
                            <input type="radio" id="answering_machine-one" name="answering_machine" value="1"
                                check="yes" checked />
                            <label for="answering_machine-one">Yes</label>
                            <input type="radio" id="answering_machine-two" name="answering_machine" value="0"
                                check="no" />
                            <label for="answering_machine-two">No</label>
                        </div>
                    </div>

                    <div class="my-switch-field col-12 col-md-6 col-lg-3">
                        <h6>Callback</h6>
                        <div class="switch-field ">
                            <input type="radio" id="scheduled_callbacks-one" name="scheduled_callbacks" value="1"
                                check="yes" checked />
                            <label for="scheduled_callbacks-one">Yes</label>
                            <input type="radio" id="scheduled_callbacks-two" name="scheduled_callbacks" value="0"
                                check="no" />
                            <label for="scheduled_callbacks-two">No</label>
                        </div>
                    </div>

                    <div class="my-switch-field col-12 col-md-6 col-lg-3">
                        <h6>Not Interested</h6>
                        <div class="switch-field ">
                            <input type="radio" id="not_interested-one" name="not_interested" value="1" check="yes"
                                checked />
                            <label for="not_interested-one">Yes</label>
                            <input type="radio" id="not_interested-two" name="not_interested" value="0" check="no" />
                            <label for="not_interested-two">No</label>
                        </div>
                    </div>

                    <div class="my-switch-field col-12 col-md-6 col-lg-3">
                        <h6>Unworkable</h6>
                        <div class="switch-field ">
                            <input type="radio" id="unworkable-one" name="unworkable" value="1" check="yes" checked />
                            <label for="unworkable-one">Yes</label>
                            <input type="radio" id="unworkable-two" name="unworkable" value="0" check="no" />
                            <label for="unworkable-two">No</label>
                        </div>
                    </div>

                    <div class="my-switch-field col-12 col-md-6 col-lg-3">
                        <h6>Completed</h6>
                        <div class="switch-field ">
                            <input type="radio" id="completed-one" name="completed" value="1" check="yes" checked />
                            <label for="completed-one">Yes</label>
                            <input type="radio" id="completed-two" name="completed" value="0" check="no" />
                            <label for="completed-two">No</label>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Add" class="my-btn-primary" name="submitstatus">
            </div>
        </div>
    </form>


    <div class="my-card-with-title">
        <div class="title-bar">
            <h4>custom statuses within this campaign</h4>
            <a href="#"><i class="fa fa-download" aria-hidden="true"></i></a>
        </div>
        <div class="card-body">
            <div class="my-secondary-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">STATUS</th>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">CATEGORY</th>
                            <th scope="col">AGENT SELECTABLE</th>
                            <th scope="col">HUMAN ANSWER</th>
                            <th scope="col">SALE</th>
                            <th scope="col">DNC</th>
                            <th scope="col">CUSTOMER CONTACT</th>
                            <th scope="col">NOT INTERESTED</th>
                            <th scope="col">UNWORKABLE</th>
                            <th scope="col">SCHEDULED CALLBACK</th>
                            <th scope="col">COMPLETED</th>
                            <th scope="col">ANSWERING MACHINE</th>
                            <th scope="col">MIN SEC</th>
                            <th scope="col">MAX SEC</th>
                            <th scope="col">MODIFY/DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="16">No data available</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>