<?php
    session_start();
    include "dbconn.php";

    // POST 데이터 받기
    $userid = $_SESSION['userid'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $page = isset($_POST['page']) ? (int)$_POST['page'] : 1;
    $regist_day = date("Y-m-d H:i:s");

    if (isset($_GET['mode']))
        $mode = $_GET['mode'];
    else
    $mode = "";
    
    if ($mode == 'modify') {
        $num = $_POST['num'];
        $sql = "update mobile_boardlist set subject='$subject', content='$content' where num=$num";
    } else {
        $sql = "insert into mobile_boardlist (id, subject, content, regist_day, hit) ";
        $sql .= "values('$userid', '$subject', '$content', '$regist_day', 0)";
    }

    mysqli_query($connect, $sql);
    mysqli_close($connect);

    echo "
        <script>
            location.href='list.php?page=$page';
        </script>
    ";
?>