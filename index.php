<?php

include "view/header.php";
include "inc/insert.php";

?>

<div class="container">

    <div class="container mt-5">
        <h1>Student Information Form</h1>
        <span class="h3 bg-success text-white" >
            <?php if (isset($mess)) { echo $mess; }?>
        </span>
        <form action="" method="POST">
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" name="std_name" class="form-control" id="fullName" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="std_email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="text">phone No:</label>
                <input type="text" name="std_phone_no" class="form-control" id="text" placeholder="Enter your phone" required>
            </div>

            <div class="form-group">
                <label for="email">class</label>
                <input type="text" name="std_class" class="form-control" id="email" placeholder="Enter your email" required>
            </div>

            <button type="submit" name="info_submit" class="btn btn-primary">Submit</button>
        </form>
    </div>









</div>
<?php include "view/footer.php"; ?>