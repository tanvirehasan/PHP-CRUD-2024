<?php include "view/header.php"; ?>

<div class="container pt-5 mt-5">

    <h2 class="h1 py-5">Student Information</h2>
    <table class="table" border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
            <th>Action</th>
        </tr>


        <?php
        $secelt = "SELECT * FROM student_information";
        $result = $conn->query($secelt);
        $i = 1;
        while ($row = $result->fetch_object()) { ?>

            <tr>
                <td><?= $i++; ?></td>
                <td><?= $row->std_name ?></td>
                <td><?= $row->std_email ?></td>
                <td><?= $row->std_phone_no ?></td>
                <td><?= $row->std_class ?></td>
                <td> <a href="update.php?id=<?= $row->std_id ?>">edit</a> | <a href="update.php?delteate_id=<?= $row->std_id ?>">Delete</a> </td>
            </tr>

        <?php } ?>

        <!-- Add more rows as needed -->
    </table>

</div>




<?php 



include "view/footer.php"; 





?>