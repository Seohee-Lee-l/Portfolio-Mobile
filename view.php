<?php
    session_start();

    include "dbconn.php";

    $num=$_GET['num'];
    $page=$_GET['page'];

    $sql="select * from mobile_boardlist where num=$num";
    $result=mysqli_query($connect, $sql);

    $row=mysqli_fetch_array($result);
    $item_num=$row['num'];
    $item_id=$row['id'];
    $item_name=$row['name'];
    $item_hit=$row['hit'];
    $item_date=$row['regist_day'];
    $item_subject=str_replace(" ", "&nbsp;", $row['subject']);
    $item_content=$row['content'];
    
    $new_hit=$item_hit+1;

    $sql="update mobile_boardlist set hit=$new_hit where num=$num";
    mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/request.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/xeicon/2/xeicon.min.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/mobile-menu.js"></script>    <script>
        function del(href) {
            if (confirm("Are you sure you want to delete this post?")) {
                location.href = href;
                return false;
            }
            return false;
        }
    </script>
</head>

<body>
    <header id="header">
        <h2><a href="index.php" class="logo">Moogo</a></h2>

        <form action="#" class="search">
            <input type="text" placeholder="Movie name / Director / Country / Genre ...">
            <button type="submit"><i class="xi-search"></i></button>
        </form>

        <div class="category">              <ul>
                <li><a href="#" id="menu-btn">Menu</a></li>
                <li><a href="list.php">Request</a></li>
                <!-- <li><?php include "top_login1.php"; ?></li> -->

                <li>
                    <?php
                        session_start();
                        include "top_login1.php";
                    ?>
                </li>
            </ul>
        </div>
    </header>

    <?php
        include "menu.php";
    ?>

    <div id='view-wrap'>
        <div id='content'>
            <div id='view-box'>
                <div id='view-title'>
                    <h3>
                        <?=$item_subject?>
                    </h3>
                </div>

                <div id='view-info'>
                    <div id='view_title2'>
                        <p class='info'>
                            <?=$item_id?>
                            | View : 
                            <?=$item_hit?>
                            | 
                            <?=$item_date?>
                        </p>
                    </div>
                </div>

                <div id='view-content'>
                    <?=$item_content?>
                </div>                
                
                <div id='view_button'>
                    <a href="list.php?page=<?=$page?>">
                        <button>List</button>
                    </a>

                    <?php
                        $userid=$_SESSION['userid'];
                        $post_author=$item_id; // 게시글 작성자

                        if ($userid==$post_author) {
                    ?>
                        <a href="modify_form.php?num=<?=$num?>&page=<?=$page?>">
                            <button type='submit'>
                                Modify
                            </button>
                        </a>&nbsp;                        
                        
                        <a href="delete.php?num=<?=$num?>&page=<?=$page?>" onclick="return del(this.href)">
                            <button type='button'>
                                Delete
                            </button>
                        </a>&nbsp;
                    <?php
                        }
                    ?>

                    <?php
                        if ($userid) {
                    ?>
                        <a href="write_form.php">
                            <button type='submit'>
                                Write
                            </button>
                        </a>
                    <?php
                        }
                    ?>
                </div>

                <div class='clear'></div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="footbox">
            <a href="index.php" class="footlogo">Moogo</a>

            <ul class="footmenu">

                <li class="f-title">Contact
                    <ul>
                        <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=seohee1880@gmail.com" target="_blank">E-mail</a></li>
                        <li><a href="tel:010-4555-9620" class="tel">Tel (+82)10 4555 9620</a></li>
                    </ul>
                </li>

                <li class="f-title">Sns
                    <ul>
                        <li><a href="https://www.instagram.com/vanillaskyexpress" target="_blank">Instagram</a></li>
                        <li><a href="https://kr.pinterest.com/seohee1880/" target="_blank">Pinterest</a></li>
                        <li><a href="https://blog.naver.com/sag1880" target="_blank">Blog</a></li>
                    </ul>
                </li>

                <li class="copyf-title">&copy; Moogo
                    <ul>
                        <li><small class="cr">All Rights Reserved.</small></li>
                    </ul>
                </li>
            </ul>
        </div>
    </footer>

    <div class="tdBtn">
        <div class="topBtn">
            <button><i class="xi-angle-up-thin"></i></button>
        </div>

        <div class="downBtn">
            <button><i class="xi-angle-down-thin"></i></button>
        </div>
    </div>
</body>

</html>