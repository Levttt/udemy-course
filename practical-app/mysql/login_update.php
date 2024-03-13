<?php
include "db.php";
include "functions.php";

if (isset($_POST['update'])){

    updateAllData();
}

include "includes/header.php";
?>

<body>

<div class="container">

    <div class="col-xs-6">
        <h1 class="text-left">Update</h1>
        <form action="login_update.php" method="post">

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

            <div class="form-group">

                <select name="id" id="">

                    <?php

                        showAllData();

                    ?>

                </select>
                
            </div>

            <input class="btn btn-primary" type="submit" name="update" value="Update">
        </form>
    </div>

    <?php include "includes/footer.php"; ?>
