<?php
    session_start();
?>

<meta charset='utf-8'>

<?php
    $id=$_POST['id'];
    if (!$id) {
        echo("
            <script>
                window.alert('Enter your ID');
                history.go(-1);
            </script>        
        ");
        exit;
    }

    $pass=$_POST['pass'];
    if (!$pass) {
        echo ("
            <script>
                window.alert('Enter your password');
                history.go(-1);
            </script>
        ");
        exit;
    }    
    
    include "dbconn.php";
    mysqli_query($connect, 'set names utf8');

    $sql="select * from mob_member where id='$id' ";
    $result=mysqli_query($connect, $sql);
    $num_match=mysqli_num_rows($result);

    if (!$num_match) {
        echo ("
            <script>
                window.alert('The ID you entered does not exist');
                history.go(-1);
            </script>
        ");    
    } else {
        $row=mysqli_fetch_array($result);
        
        $db_pass=$row['pass'];

        if ($pass != $db_pass) {
            echo ("
                <script>
                    window.alert('Incorrect password');
                    history.go(-1);
                </script>
            ");
            exit;
        } else {
            $userid=$row['id'];
            $username=$row['name'];
            
            $_SESSION['userid']=$userid;
            $_SESSION['username']=$username;
            
            echo ("
                <script>
                    location.href='index.php';
                </script>
            ");
        }
    }
?>