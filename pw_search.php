<?
    session_start();
?>

<meta charset='utf-8'>

<?
    include "dbconn.php";
    mysqli_query($connect, 'set names utf8');    
    
    $id=$_POST['id'];
    $email=$_POST['email'];

    $sql="select * from mob_member where id='$id' AND email='$email'";
    $result=mysqli_query($connect, $sql);
    $num_match=mysqli_fetch_array($result);    
    
    if (!empty($num_match)) {
        echo "
            <script>
                alert('Your password is ".$num_match['pass'].". Please log in');
                location.href='login_form.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('No matching user information found');
                history.go(-1);
            </script>
        ";
    }

    mysqli_close($connect);
?>