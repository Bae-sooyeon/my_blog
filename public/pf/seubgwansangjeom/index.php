<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>습관상점 홈페이지</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <script src="./index.js"></script>
</head>

<body>

    <div class="top-line flex flex-ai-c flex-jc-c">
        [NEW] 습관상점 프리미엄 훈제연어 슬라이스 출시!!
    </div>

    <div class="top-bar flex">

        <div class="logo flex">
            <img src="https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/bf86a0bfdc3224b6a49b5e003fd73bb1_3_top.jpg"
                alt="">
        </div>

        <div class="menu-bar flex-ai-c flex-jc-c flex flex-grow-1">
            <ul class="flex">
                <li class="flex-ai-c"><a href="#">습관상점 이야기</a></li>
                <li class="flex-ai-c">
                    <a href="#">습관 장보기
                        <ul>
                            <li><a href="#">모든 순간</a></li>
                            <li><a href="#">더 깨끗한 순간</a></li>
                            <li><a href="#">더 예뻐지는 순간</a></li>
                            <li><a href="#">더 건강한 습관</a></li>
                        </ul>
                    </a>
                </li>
                <li class="flex-ai-c"><a href="#">습관 백과사전</a></li>
                <li class="flex-ai-c"><a href="#">상점 후기</a></li>
                <li class="flex-ai-c"><a href="#">상점 소식</a></li>
                <li class="flex-ai-c"><a href="#">묻고답하기</a></li>
            </ul>
        </div>

        <div class="right-box flex flex-jc-c flex-ai-c">
            <li class="login font-1"><a href="#">LOGIN</a></li>
            <li class="join font-1"><a href="#">JOIN</a></li>
            <li class="my-page"><a href="#"><img
                        src="https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/icon_mypage.png" alt=""></a></li>
            <li class="cart"><a href="#"><img src="https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/icon_cart.png"
                        alt="" </a> </li> <li class="search"><a href="#"><img
                            src="https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/icon_search.png" alt=""></a>
            </li>
        </div>
    </div>

    <!--슬라이더-->
    <div class="slider">

        <div class="slides">
            <div class="active"
                style="background-image:url(https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/yg_bn_1_01.jpg);">
            </div>

            <div style="background-image:url(https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/yg_bn_1_02.jpg);">
            </div>

            <div style="background-image:url(https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/yg_bn_1_03.jpg);">
            </div>
        </div>

        <div class="dots">
            <ul class="flex">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
        </div>

    </div>

    <!-- 상점 소식 -->

    <div class="event-box con flex">
        <div class="wrap-box">
            <div class="shop-news-box flex flex-sp-b ">
                <div class="shop-news-title flex-ai-c">
                    상점소식
                </div>
                <div class="more-bt">
                    <a href="#" class="flex-ai-c">more</a>
                </div>
            </div>

            <div class="news flex flex-sp-b">
                <div class="news-title">
                    - [배송관련] 5월 연휴 및 공휴일 배송일정</div>
                <div class="news-date">2020-04-30</div>
            </div>
            <div class="news flex flex-sp-b">
                <div class="news-title">
                    - [신상런칭] 습관상점 프리미엄 훈제연어 슬라이스 300g...</div>
                <div class="news-date">2020-04-16</div>
            </div>
            <div class="news flex flex-sp-b">
                <div class="news-title">
                    - [이벤트] 습관상점 카카오톡 채널 추가하고 쿠폰받아요!</div>
                <div class="news-date">2019-12-10</div>
            </div>
            <div class="news flex flex-sp-b">
                <div class="news-title">
                    - [이벤트] 후기쓰고 적립금 받자!</div>
                <div class="news-date">2019-12-09</div>
            </div>
            <div class="news flex flex-sp-b">
                <div class="news-title">
                    - [이벤트] 2019년 3월 상점후기 호캉스 당첨자 발표</div>
                <div class="news-date">2019-03-18</div>
            </div>
            <div class="news flex flex-sp-b">
                <div class="news-title">
                    - [보도기사] 습관상점 빠룬즙_2019.02.28 에이빙뉴...</div>
                <div class="news-date">2019-03-07</div>
            </div>
        </div>

        <div class="wrap-box event-pic-1">
            <img src="https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/yg_bn_2_01.jpg" alt="">
        </div>

        <div class="wrap-box event-pic-2">
            <img src="https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/yg_bn_3_01.jpg" alt="">
        </div>
    </div>

    <!-- 만나서 반가워요! -->
    <div class="hello-1 text-align-center">
        만나서 반가워요!
    </div>
    <div class="hello-2 text-align-center">
        새로운 습관
    </div>

    <!-- 아이템 리스트 박스 -->
    <div class="prod-list-box con">
        <ul class="flex">
            <li>
                <a href="#">
                    <div class="img-box"><img
                            src="https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/451266b96c9495284d98b424213fa956.jpg"
                            alt=""></div>
                </a>
                <div class="prod-name">이름</div>
                <div class="prod-price">가격</div>
                <div class="prod-ex">설명</div>
            </li>
            <li>
                <a href="#">
                    <div class="img-box"><img
                            src="https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/caf726a60a593f45bca21d662061da8d.jpg"
                            alt=""></div>
                </a>
                <div class="prod-name">이름</div>
                <div class="prod-price">가격</div>
                <div class="prod-ex">설명</div>
            </li>
            <li>
                <a href="#">
                    <div class="img-box"><img
                            src="https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/fc43b7d109fd85cbd31b6d55e2212ab5.jpg"
                            alt=""></div>
                </a>
                <div class="prod-name">이름</div>
                <div class="prod-price">가격</div>
                <div class="prod-ex">설명</div>
            </li>

            <li>
                <a href="#">
                    <div class="img-box"><img
                            src="https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/76d96c1dbe6c81426bea6104cf4a78d0.jpg"
                            alt=""></div>
                </a>
                <div class="prod-name">이름</div>
                <div class="prod-price">가격</div>
                <div class="prod-ex">설명</div>
            </li>
            <li>
                <a href="#">
                    <div class="img-box"><img
                            src="https://bae-sooyeon.github.io/img1/pf/seubqwansangjeom/98816a7e63f7bb3e0ffb6c1a07d77c64.jpg"
                            alt=""></div>
                </a>
                <div class="prod-name">이름</div>
                <div class="prod-price">가격</div>
                <div class="prod-ex">설명</div>
            </li>
        </ul>
    </div>

    <!-- 습관상점이 더 궁금하다면 ? -->
    <div class="youtube con">
        <iframe width="957" height="538" src="https://www.youtube.com/embed/6BSEeOa1G_4" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="learn-more-box">
            <div class="text-1">LEARN MORE</div>    
            <div class="text-2">습관상점이 더 궁금하시다면?</div>
            <div class="text-3">
                #좋은 건 습관하자 <br>
                #습관상점
            </div>
            <div class="text-4"><a href="#">습관상점 인스타그램 바로가기<br></a></div>            
        </div>
    </div>

</body>

</html>