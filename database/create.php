<?php
session_start();
include('database.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nam = $_POST['nam'];
    $genre = $_POST['genre'];
    $country = $_POST['country'];
    $debut_year = $_POST['debut_year'];
    $record_label = $_POST['record_label'];

    
    $sql = "INSERT INTO Music_Artist (nam, genre, country, debut_year, record_label) VALUES ('$nam', '$genre', '$country', '$debut_year', '$record_label')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "created";
    } else {
        $_SESSION['status'] = "error: "; 
    }

    mysqli_close($conn);
    header("Location: ../index.php"); 
    exit();
}
?>