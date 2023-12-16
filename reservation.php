<?php
    include('./db_conn.php');

    $branch = $_POST["branch"];
    $tableNum = $_POST["tableNum"];
    $reserveDateTime = $_POST["reserveDateTime"];

    // 체크할 쿼리
    $checkQuery = "SELECT * FROM reservation WHERE tableNum = '$tableNum' 
                   AND reserveInfo = '$reserveDateTime'";
    $checkResult = mysqli_query($conn, $checkQuery);

    // 이미 예약이 있는 경우
    if (mysqli_num_rows($checkResult) > 0) {
        echo "<script>alert('Choose another one.')</script>";
        echo "<script>location.replace('reservation.html');</script>";
    } else {
        // 예약이 없는 경우
        $sql = "INSERT INTO reservation (tableNum, reserveInfo, branch) VALUES ('$tableNum', '$reserveDateTime', '$branch')";

        if (mysqli_query($conn, $sql)) {
            // 예약 성공 시
            echo "예약 완료!";
        } else {
            // 예약 실패 시
            echo "예약 실패. 오류: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>
