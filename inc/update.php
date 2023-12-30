<?php

if (isset($_POST['info_uypdate'])) {

    $std_name       = $_POST['std_name'];
    $std_email      = $_POST['std_email'];
    $std_phone_no   = $_POST['std_phone_no'];
    $std_class      = $_POST['std_class'];
    $updted = "UPDATE student_information SET std_name='$std_name', std_email='$std_email', std_phone_no='$std_phone_no',  std_class='$std_class' WHERE std_id = '$sid' ";
    mysqli_query($conn, $updted);

}



if (isset($_GET['delteate_id'])) {

    $did = $_GET['delteate_id'];
    $delte="DELETE FROM student_information WHERE std_id='$did' ";
    mysqli_query($conn, $delte);
    echo "<script>window.location.href='list.php';</script>";

}



?>
