<?php
    session_start();

    $num=$_GET['num'];

    include "dbconn.php";

    if (!isset($_SESSION['userid'])) {
        echo ("
            <script>
                window.alert('Loin is required');
                history.go(-1);
            </script>
        ");
    } else {
        $sql="delete from mobile_boardlist where num=$num";
    }

    mysqli_query($connect, $sql);
    mysqli_close($connect);

    echo "
        <script>
            location.href='list.php';
        </script>
    ";
?>