<?php
include "view/header.php";
include "inc/update.php";

if (isset($_GET['id'])) {
    $sid= $_GET['id'];

$secelt = "SELECT * FROM student_information  WHERE std_id = '$sid' ";
$result = $conn->query($secelt);
$row = $result->fetch_object();
?>

<div class="container">

    <div class="container mt-5">
        <h1>Student Information Update</h1>
        <span class="h3 bg-success text-white">
            <?php if (isset($mess)) {
                echo $mess;
            } ?>
        </span>
        <form action="" method="POST">
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" name="std_name" class="form-control" id="fullName" value="<?= $row->std_name ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="std_email" class="form-control" id="email" placeholder="Enter your email" value="<?= $row->std_email ?>">
            </div>

            <div class="form-group">
                <label for="text">phone No:</label>
                <input type="text" name="std_phone_no" class="form-control" id="text" placeholder="Enter your phone" value="<?= $row->std_phone_no ?>">
            </div>

            <div class="form-group">
                <label for="email">class</label>
                <input type="text" name="std_class" class="form-control" id="email" placeholder="Enter your email" value="<?= $row->std_class ?>">
            </div>

            <button type="submit" name="info_uypdate" class="btn btn-primary">Update</button>
        </form>
    </div>

</div>

<?php } ?>



<?php include "view/footer.php"; ?>