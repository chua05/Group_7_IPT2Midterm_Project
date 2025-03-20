<?php
session_start();
include('database.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['artist_id'];

    $sql = "DELETE FROM music_artists WHERE artist_id='$id'";
    
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