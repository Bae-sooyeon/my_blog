<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.19/lodash.min.js"></script>
    <script src="https://rawgit.com/alvarotrigo/fullPage.js/dev/src/fullpage.js"></script>
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
                    <li><a href="#anchor2">STORY</a></li>
                    <li><a href="#anchor3">CHARACTERS</a></li>
                    <li><a href="#anchor4">TRAILER</a></li>
                    <li><a href="#anchor5">GALLERY</a></li>
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
            <ul id="menu">
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
                    <a href="#anchor5">GALERY</a>
                </li>
            </ul>
        </div>


        <div class="story section">
            <div class="bg">
                <div class="bg-img"></div>
            </div>

            <div class="story-h1">
            STORY
            </div>

            <div class="story-h2">
            “괜찮아, 다 잘 될 거야! 우리가 행복하게 만들어 줄게”
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


        <div class="characters section">Section 3</div>
        <div class="trailer section">Section 4</div>
        <div class="trailer section">Section 5</div>


    </div>



</body>

</html>