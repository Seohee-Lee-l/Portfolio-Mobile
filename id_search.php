<?
    session_start();
?>

<meta charset='utf-8'>

<?
    include "dbconn.php";
    mysqli_query($connect, 'set names utf8');

    $name=$_POST['name'];
    $email=$_POST['email'];

    $sql="select * from mob_member where name='$name' AND email='$email'";
    $result=mysqli_query($connect, $sql);
    $num_match=mysqli_fetch_array($result);    
    
    if (!empty($num_match)) {
        echo "
            <script>
                alert('Your username is ".$num_match['id'].". Please log in');
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