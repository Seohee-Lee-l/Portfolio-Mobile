<?php
    session_start();
?>

<!doctype html>
<html lang='ko'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html</title>    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/xeicon/2/xeicon.min.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/mobile-menu.js"></script>

    <script>
        function check_id() {
            window.open("check_id.php?id=" + document.member_form.id.value,
                "IDcheck",
                "left=200, top=200, width=200, height=100, scrollbars=no, resizable=yes");
        }

        function check_email() {
            window.open("check_email.php?email=" + document.member_form.email.value, 
                "EMAILcheck",
                "left=200, top=200, width=300, height=100, scrollbars=no, resizable=yes");
        }

        function check_input() {
            const re1=/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{6,10}$/;
            const id=document.member_form.id.value;
            if (!document.member_form.id.value) {
                alert("Enter your ID");
                document.member_form.id.focus();
                return;
            } else if (!re1.test(id)) {
                alert("Password must be 6-10 characters long and include letters, numbers, and special characters");
                return false;
            }

            if (!document.member_form.pass.value) {
                alert("Enter your password");
                document.member_form.pass.focus();
                return;
            }

            if (!document.member_form.pass_confirm.value) {
                alert("Confirm your password");
                document.member_form.pass_confirm.focus();
                return;
            }

            if (!document.member_form.name.value) {
                alert("Enter your name");
                document.member_form.name.focus();
                return;
            }

            if (!document.member_form.hp.value) {
                alert("Enter your phone number");
                document.member_form.hp.focus();
                return;
            }

            if (!document.member_form.email.value) {
                alert("Enter your email");
                document.member_form.email.focus();
                return;
            }

            if (document.member_form.pass.value != document.member_form.pass_confirm.value) {
                alert("Passwords do not match \n Please re-enter your password");
                document.member_form.pass.focus();
                document.member_form.pass.select();
                return;
            }

            const hp1=document.member_form.hp.value;
            const re2=/^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/;

            if (!re2.test(hp1)) {
                alert("Invalid phone number format");
                return false;
            }

            const email=document.member_form.email.value;
            const re3=/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;
            
            if (!re3.test(email)) {
                alert("Invalid email format");
                return false;
            }

            // 개인정보 수집 동의 체크박스 검증
            if (!document.member_form.privacy.checked) {
                alert("You must agree to the collection and use of personal information");
                return false;
            }

            document.member_form.submit();
        }   
        
        function reset_form() {
            document.member_form.id.value="";
            document.member_form.pass.value="";
            document.member_form.pass_confirm.value="";
            document.member_form.name.value="";
            document.member_form.hp.value="";
            document.member_form.email.value="";
            document.member_form.id.focus();

            return;
        }

        function select_all() {
            if (document.member_form.all.checked==true) {
                document.member_form.promo.checked=true;
                document.member_form.privacy.checked=true;
            } else {
                document.member_form.promo.checked=false;
                document.member_form.privacy.checked=false;
            }
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

    <?
        include "menu.php";
    ?>

    <div id="signup">
        <h2>Sign up</h2>

        <div id='join_mem'>
            <div class="signup-container">
                <form action="insert.php" method="post" name="member_form">                    
                    <fieldset>
                        <legend>Sign up</legend>                        
                        <div class="form-list">
                            <label for="id">ID (Username)</label>
                            <input type="text" id="id" name="id" placeholder="Including special characters" required minlength="5" maxlength="10">
                        </div>
                        
                        <div class="form-list id-check">
                            <button type="button" class="join" onclick="check_id()">Check ID</button>
                        </div>

                        <div class="form-list">
                            <label for="pass">Password</label>
                            <input type="password" id="pass" name="pass" placeholder="8 characters or more" required minlength="8">
                        </div>

                        <div class="form-list">
                            <label for="pass_confirm">Confirm Password</label>
                            <input type="password" id="pass_confirm" name="pass_confirm" placeholder="8 characters or more" required minlength="8">
                        </div>

                        <div class="form-list">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your name" required>
                        </div>

                        <div class="form-list">
                            <label for="hp">Tel</label>
                            <input type="tel" name="hp" id="hp" placeholder="010-0000-0000" maxlength="13" required>
                        </div>

                        <div class="form-list">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" placeholder="moogo@gmail.com" required>
                        </div>

                        <div class="form-list id-check">
                            <button type="button" class="join" onclick="check_email()">Check Email</button>
                        </div>

                        <div class="form-wrap">
                            <div class='agree-check all-checked'>
                                <label>
                                    <input type="checkbox" name='all' id='all' onclick='select_all()' value='All agree'>
                                    <span class='agree-txt'>
                                        Agree to all terms
                                    </span>
                                </label>
                            </div>

                            <div class="agree-check">
                                <label>
                                    <input type="checkbox" name="promo">
                                    <span class="agree-txt">
                                        Receive weekly personalized film recommendation e-mails
                                    </span>
                                </label>
                                <small class="small">주간 맞춤 영화 추천 이메일 받기 (선택)</small>
                            </div>

                            <div class="agree-check">
                                <label>
                                    <input type="checkbox" name="privacy" id="privacy" required>
                                    <span class="agree-txt">
                                        Consent to the collection and use of personal information
                                    </span>
                                </label>
                                <small class="small">개인정보 수집 동의 (필수)</small>
                            </div>
                        </div>                        
                        
                        <div class="form-list button-group">
                            <button type="button" class="join" onclick="check_input()">Join</button>
                            <button type="button" class="join reset" onclick="reset_form()">Reset</button>
                        </div>
                    </fieldset>
                </form>
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
                        <li><a href="tel:010-4555-9620">Tel (+82)10 4555 9620</a></li>
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