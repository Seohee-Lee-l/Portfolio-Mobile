<?
    session_start();
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
    <script src="js/mobile-menu.js"></script>
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
    
    <?php
        session_start();
        include "dbconn.php";

        $mode = isset($_GET['mode']) ? $_GET['mode'] : "";
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $find = isset($_POST['find']) ? $_POST['find'] : "";
        $search = isset($_POST['search']) ? $_POST['search'] : "";

        $scale = 10;

        if ($mode == 'search') {
            if (!$search) {
                echo("
                    <script>
                        window.alert('Enter a word to search');
                        history.go(-1);
                    </script>
                ");
                exit;
            }

            $sql = "select * from mobile_boardlist where $find like '%$search%' order by num desc";
        } else {
            $sql = "select * from mobile_boardlist order by num desc";
        }        
        
        $result = mysqli_query($connect, $sql);
        $total_record = mysqli_num_rows($result);

        if ($total_record % $scale == 0) {
            $total_page = floor($total_record / $scale);
        } else {
            $total_page = floor($total_record / $scale) + 1;
        }

        if ($total_page < 1) {
            $total_page = 1;
        }

        if (!$page)
            $page = 1;

        $start = ($page - 1) * $scale;
        $number = $total_record - $start;
    ?>

    <div id='board-section'>
        <div class='board-title'>
            <h3>Request</h3>
        </div>

        <div class='list-search'>
            <form action="list.php?mode=search" method='post' name='board_form'>
                <select name='find'>
                    <option value='subject'>Title</option>
                    <option value='content'>Content</option>
                </select>

                <input type="text" name='search'>

                <button type='submit'>Search</button>
            </form>
        </div>

        <div class='board-list'>
            <ul>
                <li>No.</li>
                <li>Title</li>
                <li>View</li>
                <li>Date</li>
            </ul>
        </div>        
        
        <div id='list_content'>
            <?php
                for ($i=$start; $i<$start+$scale && $i<$total_record; $i++) {
                    mysqli_data_seek($result, $i);
                    $row=mysqli_fetch_array($result);

                    $item_num=$row['num'];
                    $item_id=$row['id'];
                    $item_name=$row['name'];
                    $item_hit=$row['hit'];
                    $item_date=$row['regist_day'];
                    $item_date=substr($item_date, 0, 10);
                    $item_subject=str_replace(" ", "&nbsp;", $row['subject']);
            ?>            
            
            <div id='list_item'>
                <div id='list_item1'><?=$number?></div>
                <div id="list_item2"><a href="view.php?num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a></div>
                <div id='list_item3'><?=$item_hit?></div>
                <div id='list_item4'><?=$item_date?></div>          
            </div>

            <?php
                $number--;
                }
            ?>
            
            <div id='page_button'>                
                <div id='page_num'>
                    <?php 
                        if ($page > 1):
                    ?>
                        <a href="list.php?page=<?=$page-1?>"><i class='xi-arrow-left'></i></a>
                    <?php else: ?>
                        <i class='xi-arrow-left' style="color: #ccc;"></i>
                    <?php endif; ?>

                    <?php
                        for ($i=1; $i<=$total_page; $i++) {
                            if ($page==$i) {
                                echo "<b> $i </b>";
                            } else {
                                echo "<a href='list.php?page=$i'> $i </a>";
                            }                        
                        }
                    ?>

                    <?php if ($page < $total_page): ?>
                        <a href="list.php?page=<?=$page+1?>"><i class='xi-arrow-right'></i></a>
                    <?php else: ?>
                        <i class='xi-arrow-right' style="color: #ccc;"></i>
                    <?php endif; ?>
                </div>
            </div>
            
            <div id='button'>
                <a href="list.php?page=<?=$page?>">List</a>

                <?php
                    if (isset($_SESSION['userid']) && $_SESSION['userid']) {
                ?>
                    <a href="write_form.php?page=<?=$page?>">Write</a>
                <?php
                    }
                ?>            
            </div>
        </div>
        
        <div class='clear'></div>
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
</body>

</html>