<?php
session_start();
include('database.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $artist_id = $_POST['artist_id'];

    $sql = "DELETE FROM Music_Artist WHERE artist_id='$artist_id'";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "DELETED";
    } else {
        $_SESSION['status'] = "error";
    }

    mysqli_close($conn);
    header("Location: ../index.php");
    exit();
}
?>