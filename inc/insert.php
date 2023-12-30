<?php 

if (isset($_POST['info_submit'])) {

    $std_name       = $_POST['std_name'];
    $std_email      = $_POST['std_email'];
    $std_phone_no   = $_POST['std_phone_no'];
    $std_class      = $_POST['std_class'];

    $insert = "INSERT INTO Student_Information (std_name, std_email,std_phone_no,std_class) VALUES ('$std_name','$std_email','$std_phone_no','$std_class')";

    mysqli_query($conn, $insert);
   
}

?>