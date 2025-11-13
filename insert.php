<?php
    session_start();
?>

<meta charset='utf-8'>

<?php
    $id=$_POST['id'];
    $pass=$_POST['pass'];
    $name=$_POST['name'];
    $hp=$_POST['hp'];
    $email=$_POST['email'];

    $ip=$REMOTE_ADDR;    
    
    include "dbconn.php";
    mysqli_query($connect, 'set names utf8');

    $sql="select * from mob_member where id='$id' ";
    $result=mysqli_query($connect, $sql);
    $exist_id=mysqli_num_rows($result);

    if ($exist_id) {
        echo ("
            <script>
                window.alert('해당 아이디가 존재합니다');
                history.go(-1);
            </script>    
        ");
        exit;
    } else {
        $sql="insert into mob_member(id, pass, name, hp, email) ";
        $sql.="values('$id', '$pass', '$name', '$hp', '$email')";

        mysqli_query($connect, $sql);
    }    mysqli_close($connect);
    
    echo "
        <script>
            location.href='index.php';
        </script>   
    ";
?>