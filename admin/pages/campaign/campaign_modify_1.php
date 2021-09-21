<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$sql="SELECT * FROM vicidial_campaigns where campaign_id ='".$id."'";
$result=mysqli_query($conn,$sql);

$camp = new campaign();
$datacamp= mysqli_fetch_assoc($result);
//echo '<pre>';
//print_r($datacamp);
//echo '</pre>';
?>

<div class="add-user-step-1">
    <div class="back-btn-title-delete">
        <a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <h4>User Details</h4>
        <a href="#" data-toggle="modal" data-target="#confirmDelete"><img
                src="../../assets/images/common-icons/delete.png" alt=""></a>
    </div>

    <div class="my-step-link my-step-link-lg">
        <div class="step mx-4 ">
            <a href="#" class="active">Basic</a>
        </div>
        <div class="step mx-4">

            <a href="#">Detail</a>
        </div>
        <div class="step mx-4">

            <a href="#">Statuses</a>
        </div>
        <div class="step mx-4 ">
            <a href="#">Hotkeys</a>
        </div>
        <div class="step mx-4">

            <a href="#">Lead Recycling</a>
        </div>
        <div class="step mx-4">

            <a href="#">Auto-Alt Dial</a>
        </div>
        <div class="step mx-4 ">
            <a href="#">List Mix</a>
        </div>
        <div class="step mx-4">

            <a href="#">Survey</a>
        </div>
        <div class="step mx-4">

            <a href="#">Pause Codes</a>
        </div>
        <div class="step mx-4 ">
            <a href="#">AC-CID</a>
        </div>
        <div class="step mx-4">

            <a href="#">Realtime</a>
        </div>
    </div>

    <div class="my-step-link">
        <div class="step mx-5 ">
            <a href="?c=campaign&v=campaign_modify_1&m=step1&id=<?=$id?>">List 1</a>
        </div>
        <div class="step mx-5">

            <a href="?c=campaign&v=campaign_modify_1&m=step2&id=<?=$id?>">List 2</a>
        </div>
        <div class="step mx-5">

            <a href="?c=campaign&v=campaign_modify_1&m=step3&id=<?=$id?>">List 3</a>
        </div>
    </div>
    <div class="my-form">
        <?php
        if (isset($_GET['m'])) {
            $m = $_GET['m'];
            include 'modify/' . $m . '.php';
        } else {
            include 'modify/step1.php';
        }
        ?>
    </div>
</div>