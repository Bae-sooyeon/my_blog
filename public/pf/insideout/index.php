<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.19/lodash.min.js"></script>
    <script src="https://rawgit.com/alvarotrigo/fullPage.js/dev/src/fullpage.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./index.css">
    <script src="./index.js"></script>
</head>

<body>

    <div id="fullpage">
        <div class="home section">
            <!-- 배경 -->
            <div class="bg">
                <img class="bn-img" src=https://bae-sooyeon.github.io/img1/pf/insideout/bn-1.jpg alt="">
            </div>
            <!-- 탑바 -->
            <div class="top-bar flex-jc-c">
                <ul class="flex">
                    <li><a href="#anchor2" class="font-1">STORY</a></li>
                    <li><a href="#anchor3" class="font-1">CHARACTERS</a></li>
                    <li><a href="#anchor4" class="font-1">TRAILER</a></li>
                    <li><a href="#anchor5" class="font-1">GALLERY</a></li>
                </ul>
            </div>
            <!-- 인사이드 아웃 로고 -->
            <div class="bn-logo">
                <img class="inside block fadeInLeft active-on-visible"
                    src=https://bae-sooyeon.github.io/img1/pf/insideout/inside.png alt="">
                <img class="out fadeInLeft active-on-visible" style="animation-delay: .3s;"
                    src=https://bae-sooyeon.github.io/img1/pf/insideout/out.png alt="">
            </div>
            <!-- 왼쪽 네비 -->
            <ul id="menu" class="flex">
                <li data-menuanchor="anchor1" class="flex flex-ai-c">
                    <div class="line"></div>
                    <a href="#anchor1">HOME</a>
                </li>
                <li data-menuanchor="anchor2" class="flex flex-ai-c">
                    <div class="line"></div>
                    <a href="#anchor2">STORY</a>
                </li>
                <li data-menuanchor="anchor3" class="flex flex-ai-c">
                    <div class="line"></div>
                    <a href="#anchor3">CHARACTERS</a>
                </li>
                <li data-menuanchor="anchor4" class="flex flex-ai-c">
                    <div class="line"></div>
                    <a href="#anchor4">TRAILER</a>
                </li>
                <li data-menuanchor="anchor5" class="flex flex-ai-c">
                    <div class="line"></div>
                    <a href="#anchor5">GALLERY</a>
                </li>
            </ul>
        </div>


        <div class="story section">
            <div class="bg">
                <div class="bg-img"></div>
            </div>

            <div class="story-h1 font-1">
                STORY
            </div>

            <div class="story-h2 fadeInUp active-on-visible" style="animation-delay: 0.5s;">
                “괜찮아, 다 잘 될 거야! 우리가 행복하게 만들어 줄게”
            </div>

            <div class="story-ct-1 fadeInUp active-on-visible" style="animation-delay: 1.2s;">
                모든 사람의 머릿속에 존재하는 감정 컨트롤 본부. <br>
                그곳에서 불철주야 열심히 일하는 기쁨, 슬픔, 버럭, 까칠, 소심 다섯 감정들. <br>
                이사 후 새로운 환경에 적응해야 하는 ‘라일리’를 위해 바쁘게 감정의 신호를 보내지만,<br>
                실수로 ‘기쁨’과 ‘슬픔’이 본부를 이탈하게 되고, '라일리’의 마음 속에 큰 변화가 찾아온다. <br>
                '라일리'가 예전의 모습을 되찾기 위해서는 ‘기쁨’과 ‘슬픔’이 본부로 돌아가야만 한다!
            </div>
            <div class="story-dots fadeInUp active-on-visible fadeInUp active-on-visible" style="animation-delay: 1.8s;"">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="story-ct-2 fadeInUp active-on-visible fadeInUp active-on-visible" style="animation-delay: 2.3s;">
                과연, ‘라일리’는 다시 행복해질 수 있을까?
            </div>

            <div class="mousemove-effect-1-el mousemove-effect-1-el-1" data-mousemove-effect1-hor-res="0.01"
                data-mousemove-effect1-ver-res="0.05">
                <img src="https://bae-sooyeon.github.io/img1/pf/insideout/story-effect-2.png" alt="">
            </div>

            <div class="mousemove-effect-1-el mousemove-effect-1-el-2" data-mousemove-effect1-hor-res="0.01"
                data-mousemove-effect1-ver-res="0.05">
                <img src="https://bae-sooyeon.github.io/img1/pf/insideout/story-effect-1.png" alt="">
            </div>

        </div>


        <div class="characters section">
            <div class="bg">
                <div class="bg-img"></div>
            </div>
            <div class="characters-h1 font-1">
                CHARACTERS
            </div>

            <div class="bb-bg">
                <img src="https://bae-sooyeon.github.io/img1/pf/insideout/bingbong-bg.png" alt="">
            </div>
            <div class="box-1 con-1 relative">
                <div class="slider-1">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="#">
                                <div class="img-box">
                                    <img src="https://bae-sooyeon.github.io/img1/pf/insideout/joy.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="item"><a href="#">
                                <div class="img-box">
                                    <img src="https://bae-sooyeon.github.io/img1/pf/insideout/disgus.jpg" alt="">
                                    <div class="text bd-red">
                                        <div class="text-name">
                                            까칠
                                        </div>
                                    성격 : <br>    
                                    상징색 : 초록
                                    </div>
                                </div>
                            </a></div>
                        <div class="item"><a href="#">
                                <div class="img-box">
                                    <img src="https://bae-sooyeon.github.io/img1/pf/insideout/sad.jpg" alt="">
                                </div>
                            </a></div>
                        <div class="item"><a href="#">
                                <div class="img-box">
                                    <img src="https://bae-sooyeon.github.io/img1/pf/insideout/ang.jpg" alt="">
                                </div>
                            </a></div>
                        <div class="item"><a href="#">
                                <div class="img-box">
                                    <img src="https://bae-sooyeon.github.io/img1/pf/insideout/fear.jpg" alt="">
                                </div>
                            </a></div>
                        <div class="item">
                            <a href="#">
                                <div class="img-box">
                                    <img src="https://bae-sooyeon.github.io/img1/pf/insideout/ril.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="img-box">
                                    <img src="https://bae-sooyeon.github.io/img1/pf/insideout/bingbong.jpg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="nav flex">
                    </div>
                </div>
            </div>



        </div>


        <div class="trailer section">
            <div class="bg">
                <div class="bg-img"></div>
            </div>
            <div class="trailer-h1 font-1">
                TRAILER
            </div>
            <!-- 유튜브 영상 -->
            <div class="youtube-vid con">
                <iframe src="https://www.youtube.com/embed/1KGZtWbZtq8" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>



        <div class="gallery section">
            <div class="bg">
                <div class="bg-img"></div>
            </div>

            <div class="gallery-h1 font-1">
                GALLERY
            </div>


            <div class="my-1">
                <div class="owl-carousel owl-theme">
                    <!-- 필수 : .owl-carousel와 .owl-theme -->
                    <div class="item"
                        style="background-image:url(https://bae-sooyeon.github.io/img1/pf/insideout/io_heads9.jpg);"></div>
                    <div class="item"
                        style="background-image:url(https://bae-sooyeon.github.io/img1/pf/insideout/io_dream12.jpg);">
                    </div>
                    <div class="item"
                        style="background-image:url(https://bae-sooyeon.github.io/img1/pf/insideout/io_dream10.jpg);">
                    </div>
                    <div class="item"
                        style="background-image:url(https://bae-sooyeon.github.io/img1/pf/insideout/io_islands5.jpg);"></div>
                    <div class="item"
                        style="background-image:url(https://bae-sooyeon.github.io/img1/pf/insideout/io_islands6.jpg);">
                    </div>
                    <div class="item"
                        style="background-image:url(https://bae-sooyeon.github.io/img1/pf/insideout/io_islands8.jpg);">
                    </div>
                </div>
            </div>

            <div class="top-bt-wrapper">
                <div class="top-bt" style="cursor:pointer;" onclick="window.scrollTo(0,0);">
                    <div class="top-text text-align-center font-1">TOP</div>
                    <img src="https://bae-sooyeon.github.io/img1/pf/insideout/top-bt.png" alt="">
                </div>
            </div>


        </div>


    </div>



</body>

</html>