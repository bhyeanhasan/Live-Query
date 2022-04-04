<?php
include './back_end/Select.php';
$select = new Select();
$table1 = $select->Select_table_1();

if(isset($_GET['sort']))
{
    if($_GET['sort']=="asc")
    {
        $table1 = $select->orderbyASC();
    }
    if($_GET['sort']=="desc")
    {
        $table1 = $select->orderbyDESC();
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

            <div class="my-2 profile-box">
                <a href="index.php" class="form-control btn btn-success" type="button""> Basic Queries </a>
            </div>

            <div class="my-2 profile-box">
                <a href="join.php" class="form-control btn btn-success" type="button""> Join Table </a>
            </div>

        </div>



        <div class="col-md-8 mt-2">
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

        <div class="col-md-2">

            <div class="insert my-2 profile-box">
                <button class=" form-control btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                    Insert Data
                </button>
                <div class="collapse" id="collapseExample1">
                    <div class="card card-body">
                        <form action="back_end/insert_table_1.php" method="post">
                            <input class="form-control my-1" type="text" name="id" placeholder="ID">
                            <input class="form-control my-1" type="text" name="reg" placeholder="Registration">
                            <input class="form-control my-1" type="text" name="name" placeholder="Name">
                            <input class="form-control my-1" type="text" name="email" placeholder="Email">
                            <input class="form-control my-1" type="submit">
                        </form>
                    </div>
                </div>
            </div>

            <div class="update my-2 profile-box">
                <button class=" form-control btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    Update Data
                </button>
                <div class="collapse" id="collapseExample2">
                    <div class="card card-body">
                        <form action="back_end/update_table_1.php" method="post">
                            <input class="form-control my-1" type="text" name="id" placeholder="ID">
                            <input class="form-control my-1" type="text" name="reg" placeholder="Registration">
                            <input class="form-control my-1" type="text" name="name" placeholder="Name">
                            <input class="form-control my-1" type="text" name="email" placeholder="Email">
                            <input class="form-control my-1" type="submit">
                        </form>
                    </div>
                </div>
            </div>

            <div class="delete my-2 profile-box">
                <button class=" form-control btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                    Delete Data
                </button>
                <div class="collapse" id="collapseExample3">
                    <div class="card card-body">
                        <form action="back_end/delete_table_1.php" method="post">
                            <input class="form-control my-1" type="text" name="id" placeholder="ID">
                            <input class="form-control my-1" type="submit">
                        </form>
                    </div>
                </div>
            </div>

            <div class="sort my-2 profile-box">
                <button class=" form-control btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                    Order By
                </button>
                <div class="collapse" id="collapseExample4">
                    <div class="card card-body">
                        <a href="index.php?sort=asc">Ascending</a>
                        <a href="index.php?sort=desc">Descending</a>
                    </div>
                </div>
            </div>

            <div class="sort my-2 profile-box">
                <button class=" form-control btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                    Search
                </button>
                <div class="collapse" id="collapseExample5">
                    <div class="card card-body">
                        <form action="back_end/search.php" method="post">
                            <input class="form-control my-1" type="text" name="name" placeholder="Keyword">
                            <input class="form-control my-1" type="submit" value="Search">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
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


