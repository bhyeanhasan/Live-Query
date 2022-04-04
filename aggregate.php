<?php
include './back_end/Select.php';
$select = new Select();
$table2 = $select->Select_table_2();

if(isset($_GET['agr']))
{
    if($_GET['agr']=="max")
    {
        $table2 = $select->maxcgpa();
    }
    if($_GET['agr']=="min")
    {
        $table2 = $select->mincpa();
    }
    if($_GET['agr']=="sum")
    {
        $table2 = $select->sumcgpa();
    }
    if($_GET['agr']=="avg")
    {
        $table2 = $select->avgcgpa();
    }
    if($_GET['agr']=="count")
    {
        $table2 = $select->countid();
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
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

            <div class="my-3 profile-box">
                <a href="index.php" class="form-control btn btn-success p-3" type="button""> CRUD Queries </a>
            </div>

            <div class="my-3 profile-box">
                <a href="aggregate.php" class="form-control btn btn-success p-3" type="button""> Aggregate
                Functions </a>
            </div>

            <div class="my-3 profile-box">
                <a href="sortandsearch.php" class="form-control btn btn-success p-3" type="button""> Sort & Search </a>
            </div>

            <div class="my-3 profile-box">
                <a href="join.php" class="form-control btn btn-success p-3" type="button""> Join Table </a>
            </div>


        </div>

        <div class="col-md-8 mt-2">
            <table class="table table-danger table-striped profile-box">
                <thead>
                <tr>
                    <th class="text-center" scope="col">ID No</th>
                    <th class="text-center" scope="col">CGPA</th>
                    <th class="text-center" scope="col">Credit Hour</th>
                </tr>
                </thead>
                <tbody>

                <?php
                if ($table2->num_rows > 0) {
                    // output data of each row
                    while ($row4 = $table2->fetch_assoc()) {
                        ?>
                        <tr>
                            <th class="text-center" scope="row"><?php echo $row4["id"] ?></th>
                            <td class="text-center"><?php echo $row4["cgpa"] ?></td>
                            <td class="text-center"><?php echo $row4["total_credit"] ?></td>
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

            <div class="insert my-2 profile-box">
                <a class="form-control btn btn-danger" href="aggregate.php?agr=max" >MAX CGPA</a>
            </div>

            <div class="insert my-2 profile-box">
                <a class="form-control btn btn-danger" href="aggregate.php?agr=min" >MIN CGPA</a>
            </div>

            <div class="insert my-2 profile-box">
                <a class="form-control btn btn-danger" href="aggregate.php?agr=sum" >SUM CGPA</a>
            </div>

            <div class="insert my-2 profile-box">
                <a class="form-control btn btn-danger" href="aggregate.php?agr=avg" >AVG CGPA</a>
            </div>

            <div class="insert my-2 profile-box">
                <a class="form-control btn btn-danger" href="aggregate.php?agr=count" >COUNT ID</a>
            </div>



        </div>
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


