<?
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/id_pw_screen.css">
    <link rel="stylesheet" href="xeicon/css/xeicon.min.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/mobile-menu.js"></script>

    <script>        
        function check_input() {
            if (!document.search_form.id.value) {
                window.alert('Please enter your ID');
                document.search_form.id.focus();
                return false;
            }

            if (!document.search_form.email.value) {
                window.alert('Please enter your e-mail');
                document.search_form.email.focus();
                return false;
            }

            return true;
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

        <div class="category">            
            <ul>                
                <li><a href="#" id="menu-btn">Menu</a></li>
                <li><a href="list.php">Request</a></li>
                <li><?php include "top_login1.php"; ?></li>
            </ul>
        </div>
    </header>

    <?php
        include "menu.php";
    ?>    
    
    <div id='search-id'>
        <form name='search_form' method='post' action='pw_search.php'>
            <h2>Find your password</h2>

            <div id='id'>
                <div id='id1'>
                    <label for="id">ID</label>
                    <input type="text" name='id' id='id' required placeholder='Enter your ID (Username)'>
                </div>

                <div id='id2'>
                    <label for="email">E-mail</label>
                    <input type="email" name='email' id='email' required placeholder='Enter your e-mail'>
                </div>
            </div>

            <div id='searchId-button'>
                <button type='submit' onclick='check_input()'>Search</button>
            </div>
        </form>
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