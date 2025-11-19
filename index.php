<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Main</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/animation.css">
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

    <nav class="menu">
        <div class="menu-close">
            <a href="#" class="close">Close Menu</a>
        </div>

        <div class="menu-container">
            <ul class="menu1">
                <li>
                    <a href="#" class="menu-t">
                        <p>Films</p>
                        <i class="xi-angle-down-thin"></i>
                    </a>

                    <ul class="sub">
                        <li><a href="menu_nowshowing.html">Now Showing</a></li>
                        <li><a href="#">Coming Soon</a></li>
                        <li><a href="#">Director</a></li>
                        <li><a href="#">Country / Language</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-t">
                        <p>Genres</p>
                        <i class="xi-angle-down-thin"></i>
                    </a>

                    <ul class="sub">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Horror</a></li>
                        <li><a href="#">Thriller</a></li>
                        <li><a href="#">Romance / Comedy</a></li>
                        <li><a href="#">Fantasy / SF</a></li>
                        <li><a href="#">Etc</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-t">
                        <p>Articles / News</p>
                        <i class="xi-angle-down-thin"></i>
                    </a>

                    <ul class="sub">
                        <li><a href="#">Film Articles</a></li>
                        <li><a href="#">Film Magazines</a></li>
                    </ul>
                </li>

                <li class="mypage">
                    <a href="#" class="menu-t">
                        <p>My Page</p>
                        <i class="xi-angle-down-thin"></i>
                    </a>

                    <ul class="sub">
                        <li><a href="#">Watchlist</a></li>
                        <li><a href="#">Recommendation</a></li>
                        <li class="last"><a href="#">My Request</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main">
        <a href="websitepr.html"><img src="img/main.png" alt="mainbanner"></a>
    </div>

    <div class="now-movie">
        <h4><a href="menu_nowshowing.html">Now</a></h4>
        
        <a href="now1.html" class="now1">
            <img src="img/nowmv1.jpg" alt="now-mv1">
            <div class="text">
                <p class="movie-t">The Red House 1947</p>
                <p class="movie-d">Delmer Daves</p>
                <p class="movie-s">
                    Handicapped farmer Pete Morgan and his sister Ellen live on an isolated farm with their adopted child, Meg. They keep to themselves and are viewed as mysterious by the nearby town. Now a teenager, Meg convinces Pete to hire one of her 12th-grade high school classmates, Nath Storm, to come help with chores on the farm.
                </p>
                <p class="movie-i">United States / English</p>
            </div>    
        </a>

        <a href="now2.html" class="now2">
            <img src="img/nowmv2.jpg" alt="now-mv2">
            <div class="text">
                <p class="movie-t">The Black Cat 1934</p>
                <p class="movie-d">Edgar G. Ulmer</p>
                <p class="movie-s">
                    On their honeymoon in Hungary, American mystery novelist Peter Alison and his new wife Joan are told that, due to a mix-up, they must share a train compartment with Dr. Vitus Werdegast, a Hungarian Psychiatrist, who says he is travelling to see an old freind. As the night wears on, the couple learn that Werdegast left home 18 years earlier to fight in World War I and has not seen his wife since, as he spend the last 15 years in an infamous prison camp in Siberia.
                </p>
                <p class="movie-i">United States / English</p>
            </div>    
        </a>

        <a href="now3.html" class="now3">
            <img src="img/nowmv3.jpg" alt="now-mv3">
            <div class="text">
                <p class="movie-t">Gangster Story 1959</p>
                <p class="movie-d">Walter Matthau</p>
                <p class="movie-s">
                    A mobster is hiding from the law in a small town, and he is running out of money. So he robs a bank and gets away with some loot. However, not only are the cops now after him, but so is the local mob boss, who is jealous that an outsider pulled a job in his territory, especially without giving him a piece of the pie.
                </p>
                <p class="movie-i">United States / English</p>
            </div>    
        </a>

        <a href="now4.html" class="now4">
            <img src="img/nowmv4.jpg" alt="now-mv4">
            <div class="text">
                <p class="movie-t">He Walked By Night 1948</p>
                <p class="movie-d">Alfred L.Werker / Anthony Mann</p>
                <p class="movie-s">
                    On a Los Angeles street, Officer Rob Rawlins, a patrolman on his way home from work, stops a man whom he suspects of being a burglar and is shot and mortally wounded. The minor clues lead nowhere. Two police detectives, Marty Brennan and Chuck Jones, are assigned to catch the killer, Roy Morgan, a brilliant mystery man with no known criminal past.
                </p>
                <p class="movie-i">United States / English</p>
            </div>    
        </a>
    </div>

    <div class="best-now">
        <h4><a href="menu_bestnow.html">Best Now</a></h4>

        <ul class="bestmovie">
            <li>
                <a href="bestnow.html">
                    <img src="img/best1.jpg" alt="best-mv1">
                    <p class="best-t">Devil's Partner 1958</p>
                    <p class="best-d">Charles R.Rondeau</p>
                    <p class="best-s">
                        Set in rural Furnace Flats, New Mexico, the film opens with a hunched old man, Pete Jensen, slaughtering a goat and daubing its blood within a hexagon drawn on the floor of his shack. Days later, a young man, Nick Richards, arrives in town, asking about Pete, claiming he was his uncle.
                    </p>
                </a>
            </li>

            <li>
                <a href="bestnow2.html">
                    <img src="img/best2.jpg" alt="best-mv2">
                    <p class="best-t">Doctor Blood's Coffin 1961</p>
                    <p class="best-d">Sidney J.Furie</p>
                    <p class="best-s">
                        Strange crimes are occurring in Cornwall. Doctors' surgeries are becoming burgled, and people are disappearing. No one knows it yet, but the stolen medical supplies have been used to set up a laboratory in the disused Porthcarron Tin Mine, and the missing people have been taken there after being immobilised with a drug.
                    </p>
                </a>
            </li>

            <li>
                <a href="bestnow3.html">
                    <img src="img/best3.jpg" alt="best-mv3">
                    <p class="best-t">Space Men 1960</p>
                    <p class="best-d">Antonio Margheriti</p>
                    <p class="best-s">
                        In 2116, Interplanetary Chronicle of New York reporter Ray Peterson launches aboard the spaceship Bravo Zulu 88, joining the crew of an orbiting space station. Peterson is assigned to write a story about the "infra-radiation flux in Galaxy M12", but soon tension develops between Peterson and the station commander
                    </p>
                </a>
            </li>
        </ul>
    </div>

    <h4 class="rec_t">Recommendation for YOU</h4>
    <div class="recommend">
        <ul class="recommend-list">
            <li class="item large">
                <a href="recommend1.html" class="recommend-1">
                    <img src="img/recommend-1.jpg" alt="recommend-1">

                    <div class="overlay-text">
                        <h3 class="title">Scared to Death 1947</h3>
                        <p>Directed by Chrisy Cabanne</p>
                        <p class="star"><small>Predicted Rating 4.1/5</small></p>
                    </div>
                </a>
            </li>

            <li class="item small">
                <a href="recommend2.html" class="recommend-2">
                    <img src="img/recommend-2.jpg" alt="recommend-2">

                    <div class="overlay-text">
                        <h4 class="title">Marked for Murder 1945</h4>
                        <p>Directed by Elmer Clifton</p>
                        <p class="star">Predicted Rating 3.8/5></i></p>
                    </div>
                </a>
            </li>

            <li class="item small">
                <a href="recommend3.html" class="recommend-3">
                    <img src="img/recommend-3.jpg" alt="recommend-3">

                    <div class="overlay-text">
                        <h4 class="title">Dangerous Passage 1944</h4>
                        <p>Directed by William Berke</p>
                        <p class="star">Predicted Rating 4.4/5</i></p>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="review">
        <h4>User Reviews</h4>

        <ul>
            <li>
                <ul class="review-list">
                    <li><a href="review1.html"><img src="img/review-1.jpg" alt="movie-img1">
                    <p class="review-title">The Living Ghost 1942</p></a></li>
                    <li class="user-review">
                        <a href="review1.html">
                            <h5>User Name1</h5>
                            <p>3.5/5 <i class="xi-star" style="color: #90aa8b;"></i></p>
                            <p class="review-txt">
                                "The Daily News of New York summed up the film as "a run-of-the-mill who-done-it with a portion of horror added to heighten suspense."
                            </p>
                        </a>    
                    </li>
                </ul>

                <ul class="review-list">
                    <li><a href="review2.html"><img src="img/review-2.jpg" alt="movie-img2">
                    <p class="review-title">A Bucket of Blood 1959</p></a></li>
                    <li class="user-review">
                        <a href="review2.html">
                            <h5>User Name2</h5>
                            <p>4/5 <i class="xi-star" style="color: #90aa8b;"></i></p>
                            <p class="review-txt">
                                "A Bucket of Blood was the first of a trio of collaborations between Corman and Griffith in the comedy genre, which include The Little Shop of Horrors (which was shot on the same sets as A Bucket of Blood) and Creature from the Haunted Sea."
                            </p>
                        </a>    
                    </li>
                </ul>

                <ul class="review-list">
                    <li><a href="review3.html"><img src="img/review-3.jpg" alt="movie-img3">
                    <p class="review-title">Teenage Zombies 1959</p></a></li>
                    <li class="user-review">
                        <a href="review3.html">
                            <h5>User Name3</h5>
                            <p>2.5/5 <i class="xi-star" style="color: #90aa8b;"></i></p>
                            <p class="review-txt">
                                "It is often considered one of the worst horror films ever made, that the claustrophobic sets all look like they were shot in someone's house and the acting is appealling, but noted that bad movie lovers will find something fascinating enough to induce repeated viewings, all others will just deem it junk."
                            </p>
                        </a>    
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="genre">
        <h4>Genre</h4>

        <ul class="genre-list">
            <li><a href="genre_action.html">Action</a></li>
            <li><a href="genre_horror.html">Horror</a></li>
            <li><a href="genre_thriller.html">Thriller</a></li>
            <li><a href="genre_romance.html">Romance</a></li>
            <li><a href="genre_drama.html">Drama</a></li>
            <li><a href="genre_sf.html">SF</a></li>
            <li><a href="genre_etc.html">Etc</a></li>
        </ul>
    </div>

    <div class="article">
        <h4>Film Article</h4>

        <div class="slider-wrapper">
            <ul class="article-list">
                <li>
                    <a href="#">
                        <img src="img/article1.jpg" alt="article-img1">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="img/article2.jpg" alt="article-img2">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="img/article3.jpg" alt="article-img3">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="img/article4.jpg" alt="article-img4">
                    </a>
                </li>
            </ul>

            <div id="arrow">
                <a href="#" class="left-arrow"><i class="xi-angle-left" style="color: #fff;"></i></a>
                <a href="#" class="right-arrow"><i class="xi-angle-right" style="color: #fff;"></i></a>
            </div>
        </div>        
        
        <ul id="book-roll">
            <li class="active"><a href="#"><div class="roll roll1"></div></a></li>
            <li><a href="#"><div class="roll roll2"></div></a></li>
            <li><a href="#"><div class="roll roll3"></div></a></li>
            <li><a href="#"><div class="roll roll4"></div></a></li>
        </ul>
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
