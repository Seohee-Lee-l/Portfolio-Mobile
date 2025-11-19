<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title>mobile_login</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
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

    <section class="login">
        <h2>Login</h2>        
          <form action="login.php" class="login-form" method="post" name='member_form'>
            <label for="id">ID (Username)</label>
            <input type="text" name="id" id="id" required placeholder="Including special characters">

            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" required placeholder="Enter your password">

            <button type="submit">Log in</button>
        </form>

        <ul>
            <li><a href="id_screen.php">Find your username</a></li>
            <li><a href="pw_screen.php">Find your password</a></li>
            <li><a href="member_form.php">Sign up</a></li>
        </ul>
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
</body>


</html>