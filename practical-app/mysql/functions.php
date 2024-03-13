<?php
include "db.php";

function showAllData(){
    global $connection;
    $sql = "SELECT * FROM users";

    $result = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_assoc($result)){

        $id = $row['id'];

        echo "<option value='$id'>$id</option>";
    }
}

function createAllData(){
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";
    $salt = "sjd8jjjdiujasidfisjdfisiujisdjui3lsd";
    $hashFormatAndSalt = $hashFormat . $salt;
    $password = crypt($password, $hashFormatAndSalt);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $sql);

    if(!$result){
    die("Create query failed");
}
}

function updateAllData(){
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $sql = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";

    $result = mysqli_query($connection, $sql);

    if (!$result){
        die("Query Failed");
    }
}

function deleteAllData(){
    global $connection;

    $username  = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = $id";

    $result = mysqli_query($connection, $sql);

    if (!$result){
        die("Delete Failed");
    }

}









?>