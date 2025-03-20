<?php
session_start();
include 'database/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (empty($username) || empty($password)) {
        $_SESSION["error"] = "Username and password are required.";
        header("Location: login.php");
        exit();
    }

    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $db_username, $db_password);
        $stmt->fetch();

        if (password_verify($password, $db_password)) {
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $db_username;
            $_SESSION["success"] = "Login successful!";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION["error"] = "Invalid username or password.";
        }
    } else {
        $_SESSION["error"] = "User not found.";
    }

    $stmt->close();
    $conn->close();
    header("Location: login.php");
    exit();
}
?>