<?php
include './back_end/Select.php';
$select = new Select();
$table1 = $select->Select_table_1();
$table2 = $select->Select_table_2();
$table3 = null;
$operation=null;

if (isset($_GET['join'])) {
    if ($_GET['join'] == "inner") {
        $table3 = $select->inner_join();
        $operation = "After INNER JOIN";
    }
    if ($_GET['join'] == "left") {
        $table3 = $select->left_join();
        $operation = "After LEFT JOIN";
    }
    if ($_GET['join'] == "right") {
        $table3 = $select->right_join();
        $operation = "After RIGHT JOIN";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Query</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light menu">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">Live Query</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!--end navbar-->

<div class="container-fluid mt-4">
    <div class="row">

        <div class="col-md-2">

            <div class="my-2 profile-box">
                <a href="index.php" class="form-control btn btn-success" type="button""> Basic Queries </a>
            </div>

            <div class="my-2 profile-box">
                <a href="join.php" class="form-control btn btn-success" type="button""> Join Table </a>
            </div>
        </div>

        <div class="col-md-5 mt-2">
            <table class="table table-danger table-striped profile-box">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Registration</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>

                <?php
                if ($table1->num_rows > 0) {
                    // output data of each row
                    while ($row = $table1->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row["id"] ?></th>
                            <td><?php echo $row["reg"] ?></td>
                            <td><?php echo $row["name"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                        </tr>

                        <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>


                </tbody>
            </table>
        </div>

        <div class="col-md-3 mt-2">
            <table class="table table-danger table-striped profile-box">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CGPA</th>
                    <th scope="col">Total Credits</th>
                </tr>
                </thead>
                <tbody>

                <?php
                if ($table2->num_rows > 0) {
                    // output data of each row
                    while ($row2 = $table2->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row2["id"] ?></th>
                            <td><?php echo $row2["cgpa"] ?></td>
                            <td><?php echo $row2["total_credit"] ?></td>
                        </tr>

                        <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>


                </tbody>
            </table>
        </div>

        <div class="col-md-2">

            <div class="my-2 profile-box">
                <a href="join.php?join=inner" class="form-control btn btn-primary" type="button""> INNER JOIN </a>
            </div>

            <div class="my-2 profile-box">
                <a href="join.php?join=left" class="form-control btn btn-primary" type="button""> LEFT JOIN </a>
            </div>

            <div class="my-2 profile-box">
                <a href="join.php?join=right" class="form-control btn btn-primary" type="button""> RIGHT JOIN </a>
            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-3"></div>

        <?php if ($table3){ ?>

        <div class="col-md-6 mt-2">
            <h2 class="text-center"><?php echo $operation?></h2>
            <hr>
            <table class="table table-danger table-striped profile-box">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Reg. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">CGPA</th>
                    <th scope="col">Credits</th>
                </tr>
                </thead>
                <tbody>

                <?php

                if ($table3->num_rows > 0) {
                    // output data of each row
                    while ($row3 = $table3->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row"><?php if ($row3["id"]) echo $row3["id"]; else echo "NULL" ?></th>
                            <td><?php if ($row3["reg"]) echo $row3["reg"]; else echo "NULL" ?></td>
                            <td><?php if ($row3["name"]) echo $row3["name"]; else echo "NULL" ?></td>
                            <td><?php if ($row3["email"]) echo $row3["email"]; else echo "NULL" ?></td>
                            <td><?php if ($row3["cgpa"]) echo $row3["cgpa"]; else echo "NULL" ?></td>
                            <td><?php if ($row3["total_credit"]) echo $row3["total_credit"]; else echo "NULL" ?></td>
                        </tr>

                        <?php
                    }
                } else {
                    echo "0 results";
                }
                }
                ?>


                </tbody>
            </table>
        </div>

        <div class="col-md-3"></div>
    </div>
</div>

<div style="margin-top: 100px">

</div>

<?php include 'front_end/footer.php'?>

<!--JS File-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>


