<?php
session_start();
include('database.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $artist_id = $_POST['artist_id'];
    $nam = $_POST['nam'];
    $genre = $_POST['genre'];
    $country = $_POST['country'];
    $debut_year = $_POST['debut_year'];
    $record_label = $_POST['record_label'];

    
    $sql = "UPDATE music_artist SET 
            nam='$nam', 
            genre='$genre', 
            country='$country', 
            debut_year='$debut_year'
            record_label='$record_label' 
            WHERE artist_id='$artist_id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "updated";
    } else {
        $_SESSION['status'] = "error: "; 
    }

    mysqli_close($conn);
    header("Location: ../index.php"); 
    exit();
}
?>