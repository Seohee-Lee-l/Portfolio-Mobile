<?php
    session_start();

    include "dbconn.php";

    $num = $_GET['num'];
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    
    $sql = "select * from mobile_boardlist where num=$num";
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_array($result);
    $item_subject = $row['subject'];
    $item_content = $row['content'];
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
</head>

<body>
    <header id="header">
        <h2><a href="index.php" class="logo">Moogo</a></h2>

        <form action="#" class="search">
            <input type="text" placeholder="Movie name / Director / Country / Genre ...">
            <button type="submit"><i class="xi-search"></i></button>
        </form>

        <div class="category">
            <ul>
                <li><a href="#" id="menu-btn">Menu</a></li>
                <li><a href="list.php">Request</a></li>
                <!-- <li> <?php include "top_login1.php"; ?> </li> -->

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

    <section id='write-section'>
        <div id='content-box'>
            <h3>Film Update Request</h3>
              <form action="insert_board.php?mode=modify" name='board_form' method='post'>
                <input type="hidden" name="page" value="<?=$page?>">
                <input type="hidden" name="num" value="<?=$num?>">
                <div id='write_form'>
                    <div class='write_line'></div>

                    <div id='write_row1'>
                        <div class='col1'>Name</div>
                        <div class='col2'><?=$_SESSION['userid']?></div>
                    </div>

                    <div id='write_row2'>
                        <div class='col1'>Title</div>
                        <div class='col2'>
                            <input type="text" name='subject' value="<?=$item_subject?>">
                        </div>
                    </div>
                      <div id='write_row3'>
                        <div class='col1'>Content</div>
                        <div class='col2'>
                            <textarea name="content" rows='15' cols='65' placeholder="Please enter the film title, director, country, release date, etc."><?=$item_content?></textarea>
                        </div>
                    </div>
                </div>
                
                <div id='write_button'>
                    <button type="submit">POST</button>
                    <a href="list.php?page=<?=$page?>">Cancel</a>
                </div>
            </form>
        </div>
    </section>

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