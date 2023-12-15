<?php
    session_start();
    session_destroy(); //세션 파괴
?>
<script>
    alert("로그아웃 되었습니다.");
    location.replace('menu.html');
</script>