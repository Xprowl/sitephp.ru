<!DOCTYPE html>
<html>

<head>
    <title>COFFEE TIME</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap" rel="stylesheet">
    <link type="image/x-icon" href="img/img.ico" rel="shortcut icon">
    <script src="script/jquery-3.6.3.js" type="text/javascript"></script>
</head>

<body>
    
    <header class="header">
        <nav class="menu">
            <div class="nav_left">
                <a class="logo" href="#">COFFEE TIME</a>
            </div>

            <div class="nav_right">
                <a class="menu_nav" href="store.php">STORE</a>
                <a class="menu_nav" href="#story">STORY</a>
                <a class="menu_nav" href="#blog">BLOG</a>
                <a class="menu_nav" href="#geolocation">GEOLOCATION</a>
                <a class="menu_nav" href="#comment">СOMMENT</a>
                <a class="menu_nav" href="#subscribe">SUBSCRIBE</a>

            </div>

        </nav>
    </header>

    <main>
        <div class="take_your_time">
            <div class="take_your_time_text">
                <span>TAKE YOUR TIME</span>
            </div>

            <div class="line">

            </div>

        </div>


<!-- Модальное Окно  -->
<div id="overlay">
    <div class="popup">
        <h2>Скидки!</h2>
        <p id="first_p_id">
            Скидка 25% при показе промокода.
        </p>
            <div class="pl-left">
               <img src="img/1.png">
            </div>
        <p id="second_p_id">
            Промо:rECfUi0N
         </p>
        <button class="close" title="Закрыть" onclick="document.getElementById('overlay').style.display='none';"></button>
    </div>
</div>

<script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>

<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("vk_community_messages", 218845831, {tooltipButtonText: "Есть вопрос?"});
</script>

  

        <div class="story" id="story"  >
            <div class="story_title" >
                <p class="story_title_text">Story</p>
            </div>
            <!-- Поменять слайды, на подходящие, можно поставить слайды кофейни, или кофе.-->

            <div class="slider">
                <ul style="background-size: cover;">
                    <li><img src="img/6.jpg" alt=""></li>
                    <li><img src="img/7.jpg" alt=""></li>
                </ul>
            </div>
            </body>
        </div>

        <div class="blog" id="blog">
            <div class="blog_title">
                <p class="blog_title_text" >Blog</p>
            </div>

            <div class="cards_content">
                <div class="card">
                    <div class="card_title">
                        <p>Daily Coffee News</p>
                    </div>
                    <div>
                        <img src="https://source.unsplash.com/CSQQ6_T0sks/1920x1080" alt="тут тоже картинка с кофе"
                            class="card_img">
                    </div>
                    <div class="card_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius eget arcu quis cursus.
                            Nunc id tortor imperdiet, vestibulum orci sed, gravida orci. Cras a enim ac elit eleifend
                            euismod.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card_title">
                        <p>Dutch Coffee Chains</p>
                    </div>
                    <div>
                        <img src="https://source.unsplash.com/TYIzeCiZ_60/1920x1080" alt="тут тоже картинка с кофе"
                            class="card_img">
                    </div>
                    <div class="card_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius eget arcu quis cursus.
                            Nunc id tortor imperdiet, vestibulum orci sed, gravida orci. Cras a enim ac elit eleifend
                            euismod.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card_title">
                        <p>Start Up In Minneapolis</p>
                    </div>
                    <div>
                        <img src="https://source.unsplash.com/9rTEwV_G0Do/1920x1080" alt="тут тоже картинка с кофе"
                            class="card_img">
                    </div>
                    <div class="card_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius eget arcu quis cursus.
                            Nunc id tortor imperdiet, vestibulum orci sed, gravida orci. Cras a enim ac elit eleifend
                            euismod.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="geolocation" id="geolocation"  >
            <div class="geolocation_title" >
                <p class="geolocation_title_text">Geolocation</p>
            </div> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11332.876962704995!2d39.86839704032456!3d44.7559432980268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f0c5eced2b5edb%3A0xb0a0136803f78c47!2sCoffee%20Time!5e0!3m2!1sru!2sru!4v1675939983761!5m2!1sru!2sru" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
        </div>

        <div class="comment" id="comment"  >
            <div class="comment_title" >
                <p class="comment_title_text">Сomment</p>
            </div> 
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-d8650b9a-d553-485d-82e9-c9e88427d9f5"></div>
        </div>

        <div class="subscribe_content" id = "subscribe">
            <div class="subscribe">
                <p>Subscribe</p>
            </div>

            <div class="email_text_container">
                <input type="text" maxlength="35" placeholder="enter your e-mail" class="email_text">
            </div>

            <div class="submit_container">
                <button class="submit_button">SUBMIT</button>
            </div>
        </div>
    </main>
    <footer>
        <div class="copyright">
            <p class="copyright_text">© COPYRIGHT 2022</p>
        </div>
    </footer>
    <script src="script/js.js" type="text/javascript" defer></script>
</body>
</html>