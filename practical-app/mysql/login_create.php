<?php
include "db.php";
include "functions.php";

if (isset($_POST['submit'])){

    createAllData();
}

include "includes/header.php";
?>

<body>

<div class="container">

    <div class="col-xs-6">
        <h1 class="text-left">Create</h1>
        <form action="login_create.php" method="post">

            <div class="form-group">
                <label for="username">Username</label>
                <label>
                    <input type="text" name="username" class="form-control">
                </label>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <label>
                    <input type="password" name="password" class="form-control">
                </label>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Create">
        </form>
    </div>

<?php include "includes/footer.php"; ?>
