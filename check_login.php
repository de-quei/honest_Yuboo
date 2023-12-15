<?php
    include('./db_conn.php');

    session_start();

    $userid = $_POST['id'];
    $userpw = $_POST['password'];

    $query = "SELECT * FROM user WHERE id = '$userid' AND pw = '$userpw'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('쿼리 실패: ' . mysqli_error($conn));
    }
    
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if($row != null){
        $_SESSION['userid'] = $row['id'];
        echo "<script>alert('안녕하세요, $userid($name) 님')</script>";
        echo "<script>location.replace('menu.html');</script>";
        exit;
    }

    if($row == null){
        echo "<script>alert('회원이 아닙니다.')</script>";
        echo "<script>location.replace('signin.html')</script>";
        exit;
    }
?>