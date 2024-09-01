<?php global $conn;
include "../connector.php";

if (isset($_GET["user_id"])) {
    $user_id = $_GET["user_id"];

    $sql = "DELETE FROM user WHERE user_id = '$user_id'";
    $conn->query($sql);

    header("location: ./manage-users.php");
    exit();
}
