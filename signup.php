<?php
    include('./db_conn.php');

    //3항 연산자 isset (한번 더 확인하기 위한 작업)
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $pw = isset($_POST["password"]) ? $_POST["password"] : "";    

    $sql = "INSERT INTO user (name, id, pw) VALUES ('$name', '$id', '$pw')";

    mysqli_query($conn, $sql);
    echo "insert 완료!";

    mysqli_close($conn);
?>