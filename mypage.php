<?php

    session_start();

    //세션이 비어있다면 로그인화면으로
    if(!isset($_SESSION['userid'])){
        echo "<script>location.replace('signin.html');</script>";
    }else{ //로그인 되어있다면 로그아웃 버튼과 인사를 보여줌.
        $userid = $_SESSION['userid'];
    }
?>

<body>
    <h2><?php echo "안녕하세요, $userid 님?";?></h2>
    <button type="button" onclick="location.href='logout.php'"></button>
</body>