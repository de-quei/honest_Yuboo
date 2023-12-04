<?php
    include('./db_conn.php');

    $name = $_POST["name"];
    $id = $_POST["id"];
    $pw = $_POST["password"];

    $sql = "INSERT INTO user (name, id, pw) VALUES ('$name', '$id', '$pw')";

    mysqli_query($conn, $sql);
    echo "insert 완료!";

    mysqli_close($conn);
?>