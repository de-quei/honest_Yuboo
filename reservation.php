<?php
    include('./db_conn.php');

    $branch = $_POST["branch"];
    $tableNum = $_POST["tableNum"];
    $reserveDateTime = $_POST["reserveDateTime"];

    $sql = "INSERT INTO reservation (tableNum, reserveInfo, branch) VALUES ('$tableNum', '$reserveDateTime', '$branch')";

    if (mysqli_query($conn, $sql)) {
        echo "예약 완료!";
    } else {
        echo "예약 실패. 오류: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
