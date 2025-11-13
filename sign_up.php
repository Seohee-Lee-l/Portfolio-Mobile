<?
    session_start();
?>

<meta charset='utf-8'>

<?
    $id=$_POST['id'];
    $pass=$_POST['pass'];
    $name=$_POST['name'];
    $hp=$_POST['hp'];
    $email=$_POST['email'];

    // 입력 데이터 검증
    if (!$id) {
        echo("
            <script>
                window.alert('아이디를 입력하세요');
                history.go(-1);
            </script>        
        ");
        exit;
    }

    if (!$pass) {
        echo ("
            <script>
                window.alert('비밀번호를 입력하세요');
                history.go(-1);
            </script>
        ");
        exit;
    }

    if (!$name) {
        echo ("
            <script>
                window.alert('이름을 입력하세요');
                history.go(-1);
            </script>
        ");
        exit;
    }

    if (!$email) {
        echo ("
            <script>
                window.alert('이메일을 입력하세요');
                history.go(-1);
            </script>
        ");
        exit;
    }

    include "dbconn.php";
    mysqli_query($connect, 'set names utf8');

    // 아이디 중복 검사
    $sql="select * from mob_member where id='$id' ";
    $result=mysqli_query($connect, $sql);
    $exist_id=mysqli_num_rows($result);

    if ($exist_id) {
        echo ("
            <script>
                window.alert('해당 아이디가 이미 존재합니다');
                history.go(-1);
            </script>    
        ");
        exit;
    } else {
        // 회원 정보 삽입
        $sql="insert into mob_member(id, pass, name, hp, email) ";
        $sql.="values('$id', '$pass', '$name', '$hp', '$email')";

        if(mysqli_query($connect, $sql)) {
            echo ("
                <script>
                    window.alert('회원가입이 완료되었습니다!');
                    location.href='index.php';
                </script>
            ");
        } else {
            echo ("
                <script>
                    window.alert('회원가입 중 오류가 발생했습니다');
                    history.go(-1);
                </script>
            ");
        }
    }

    mysqli_close($connect);
?>