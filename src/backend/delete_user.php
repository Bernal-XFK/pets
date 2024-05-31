<?php
require('../../config/database.php');
session_start();

if (!isset($_SESSION["id_user"])) {
    header("Location: ../signin.php");
    exit;
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $query = "DELETE FROM users WHERE id = $1";
    $result = pg_query_params($conn, $query, array($user_id));

    if ($result) {
        echo "<script>alert('User deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting user');</script>";
    }
}
header("Location: ../list_users.php");
exit;
?>