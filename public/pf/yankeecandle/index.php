<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>양키캔들 리디자인</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.20/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- 아울 캐러셀 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="./index.css">
    <script src="./index.js"></script>
</head>

<body>
    <!-- 맨위 탑바 -->
    <div class="top-bar-1 con flex flex-sp-b">
        <div class="lang-kor">
            한국/한국어
        </div>
        <ul class="right-menu flex">
            <li class="shop-find">
                <a href="#">매장찾기</a>
            </li>
            <li class="buy-bt">
                <a href="#">구매하기</a>
            </li>
            <li class="search-bt">
                <a class="flex" href="#"><img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/searchBt.png"
                        alt=""></a>
            </li>
        </ul>
    </div>

    <!-- 로고 -->
    <div class="logo flex-jc-c">
        <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/yklogo.png" alt="">
    </div>

    <!-- 메뉴바 -->
    <div class="menu-bar con">
        <div class="bg-border"></div>
        <ul class="flex-jc-c">
            <li>
                <a href="#">제품</a>
                <div class="second-menu">
                    <ul class="flex-ai-c">
                        <li><a href="#">캔들</a></li>
                        <li><a href="#">디퓨저·아로마오일
                            </a></li>
                        <li><a href="#">차량용·방향제</a></li>
                        <li><a href="#">워머·액세서리</a></li>
                        <li><a href="#">선물세트</a></li>
                        <li><a href="#">메종베르제</a></li>
                        <li><a href="#">코스메틱</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">아울렛</a></li>
            <li><a href="#">매장안내</a></li>
            <li><a href="#">창업안내</a></li>
            <li><a href="#">고객센터</a></li>
        </ul>
    </div>

    <!-- 메인 슬라이더 -->
    <div class="main-slide-box">
        <div class="box slide">
            <div class="item item1">
                <div class="bg"></div>
                <div class="txt-wrap font-3">
                    <div class="text-wrap-box">
                        <div class="h1-text">
                            롤리타 렘피카
                        </div>
                        <div class="h2-text">
                            Lolita Lempicka Collection
                        </div>
                        <div class="h3-text">
                            달콤하면서 관능적이고 사람을 끌어당기는<br>
                            마력을 가진 매혹적인 향
                        </div>
                        <a class="view-bt font-2" href="#">
                            자세히 보기
                        </a>
                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="bg"></div>
                <div class="txt-wrap">
                    <h2>안녕</h2>
                </div>
            </div>
            <div class="item item3">
                <div class="bg"></div>
                <div class="txt-wrap">
                    <h2>안녕</h2>
                </div>
            </div>
        </div>
        <div class="dots"></div>
        <div class="arrows">
        </div>
    </div>

    <!-- MD's pick -->
    <div class="md-text font-3">
        MD's PICK
    </div>
    <div class="md-text2">
        이달의 추천상품
    </div>

    <!-- MD's pick 슬라이더 -->
    <div class="my-slider-1 con">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="item-img">
                    <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/prod-1.png" alt="">
                </div>
                <div class="prod-box">
                    <div class="prod-name">
                        레몬 라벤더
                    </div>
                    <div class="prod-en">
                        Lemon Lavender
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/prod-2.png" alt="">
                </div>
                <div class="prod-box">
                    <div class="prod-name">
                        롤리타 렘피카 컬렉션
                    </div>
                    <div class="prod-en">
                        Lolita Lempicka Collection
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/prod-3.png" alt="">
                </div>
                <div class="prod-box">
                    <div class="prod-name">
                        미드 썸머나잇
                    </div>
                    <div class="prod-en">
                        Midsummer's Night
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/prod-4.png" alt="">
                </div>
                <div class="prod-box">
                    <div class="prod-name">
                        미드 썸머나잇
                    </div>
                    <div class="prod-en">
                        Midsummer's Night
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/prod-5.png" alt="">
                </div>
                <div class="prod-box">
                    <div class="prod-name">
                        소프트블랭킷
                    </div>
                    <div class="prod-en">
                        Soft Blanket
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/prod-6.png" alt="">
                </div>
                <div class="prod-box">
                    <div class="prod-name">
                        자캔들(소) 3종 세트
                    </div>
                    <div class="prod-en">
                        Gift Set
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/prod-7.png" alt="">
                </div>
                <div class="prod-box">
                    <div class="prod-name">
                        미니캔들워머
                    </div>
                    <div class="prod-en">
                        Beacon Mini Warmer
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 소배너 -->
    <div class="small-bn img-box">
        <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/sm-bn.jpg" alt="">
    </div>

    <!-- fragrance -->
    <div class="md-text font-3">
        FRAGRANCE
    </div>
    <div class="md-text2">
        향기별 제품 모아보기
    </div>

    <!-- 향기별 슬라이더 -->
    <div class="fr-slider con">
        <div class="fr-slick">
            <div class="item">
                <div class="item-img">
                    <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/fr-1.jpg" alt="">
                </div>
                <div class="item-txt-box font-3">
                    <div class="inner">
                        <div class="text-1-box flex">
                            <div class="text-1">새콤달콤</div>
                            <div class="item-txt-img flex-ai-c">
                                <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/fr-ic-3.png" alt="">
                            </div>
                        </div>
                        <div class="text-2-box">
                            <div class="text-2">과일향이 좋다면?</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/fr-2.jpg" alt="">
                </div>
                <div class="item-txt-box font-3">
                    <div class="inner">
                        <div class="text-1-box flex">
                            <div class="text-1">향긋한</div>
                            <div class="item-txt-img flex-ai-c">
                                <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/fr-ic-2.png" alt="">
                            </div>
                        </div>
                        <div class="text-2-box">
                            <div class="text-2">꽃향기가 좋다면?</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/fr-3.jpg" alt="">
                </div>
                <div class="item-txt-box font-3">
                    <div class="inner">
                        <div class="text-1-box flex">
                            <div class="text-1">차분한</div>
                            <div class="item-txt-img flex-ai-c">
                                <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/fr-ic-1.png" alt="">
                            </div>
                        </div>
                        <div class="text-2-box">
                            <div class="text-2">허브향이 좋다면?</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <h4>4</h4>
            </div>
            <div class="item">
                <h4>5</h4>
            </div>
        </div>
        <div class="fr-slider-arrows"></div>
    </div>

    <!-- Best Product -->
    <div class="md-text font-3">
        Best Product
    </div>
    <div class="md-text2">
        양키캔들의 베스트상품을 소개합니다.
    </div>

    <!-- Best Product 탭메뉴 -->
    <div class="box-list-1 con">
        <div class="flex flex-row-wrap">
            <div class="box">
                <div class="content tab-type-1">
                    <div class="head">
                        <ul class="flex">
                            <li class="flex-1-0-0 active" data-tab-name="box-1" data-tab-head-item-name="1"><a>Gift
                                    Set</a>
                            </li>
                            <li class="flex-1-0-0" data-tab-name="box-1" data-tab-head-item-name="2"><a>Candles</a></li>
                            <li class="flex-1-0-0" data-tab-name="box-1" data-tab-head-item-name="3"><a>Reed
                                    Diffusers</a></li>
                            <li class="flex-1-0-0" data-tab-name="box-1" data-tab-head-item-name="4"><a>Car & Small
                                    Spaces</a></li>
                            <li class="flex-1-0-0" data-tab-name="box-1" data-tab-head-item-name="5"><a>Maison
                                    Berger</a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul>
                            <li class="active" data-tab-name="box-1" data-tab-body-item-name="1">
                                <div class="prod-list-box flex flex-wrap">
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/gift-set-1.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            자캔들(대/중) 신향 2종 세트 (Y18A)
                                        </div>
                                        <div class="prod-price font-1">
                                            74,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/gift-set-2.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            자캔들(중) 신향 2종 세트 (Y10)
                                        </div>
                                        <div class="prod-price font-1">
                                            68,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/gift-set-3.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            자캔들(중) 신향 2종 세트 (Y10)
                                        </div>
                                        <div class="prod-price font-1">
                                            68,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/gift-set-4.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            보티브 6종세트 (Y17)
                                        </div>
                                        <div class="prod-price font-1">
                                            27,900
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/gift-set-5.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            자캔들(소) 3종 세트 (Y15)
                                        </div>
                                        <div class="prod-price font-1">
                                            46,500
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/gift-set-6.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            자캔들(대) 신향 2종 세트 (Y18B)
                                        </div>
                                        <div class="prod-price font-1">
                                            80,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/gift-set-7.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            자캔들&일루마리드 세트 (Y11A)
                                        </div>
                                        <div class="prod-price font-1">
                                            123,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/gift-set-8.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            허리케인 브론즈 + 캔들(대) 세트
                                        </div>
                                        <div class="prod-price font-1">
                                            84,000
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-tab-name="box-1" data-tab-body-item-name="2">
                                <div class="prod-list-box flex flex-wrap">
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/can-1.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            화이트 스트로베리 벨리니<br> (White Strawberry Bellini)
                                        </div>
                                        <div class="prod-price font-1">
                                            15,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/can-2.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            솔트 미스트 로즈 <br>(Salt Mist Rose,1990)
                                        </div>
                                        <div class="prod-price font-1">
                                            39,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/can-3.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            블랙체리 <br>(Black Cherry)
                                        </div>
                                        <div class="prod-price font-1">
                                            15,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/can-4.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            플러피 타월 <br>(Fluffy Towels)
                                        </div>
                                        <div class="prod-price font-1">
                                            15,000
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/can-5.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            카멜리아 블라썸 <br>(Camellia Blossom)
                                        </div>
                                        <div class="prod-price font-1">
                                            15,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/can-6.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            미드썸머나잇<br> (Midsummer's Night)
                                        </div>
                                        <div class="prod-price font-1">
                                            15,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/can-7.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            쿠반 모히토 <br>(Cuban Mojito)
                                        </div>
                                        <div class="prod-price font-1">
                                            15,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/can-8.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            딜리셔스 구아바<br> (Delicious Guava)
                                        </div>
                                        <div class="prod-price font-1">
                                            15,000
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-tab-name="box-1" data-tab-body-item-name="3">
                                <div class="prod-list-box flex flex-wrap">
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/reed-1.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            검리프 오가닉 에센셜 오일 <br>(Gumleaf Organic Essential Oils)
                                        </div>
                                        <div class="prod-price font-1">
                                            18,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/reed-2.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            검리프 퓨어 에센셜 오일 <br>(Gumleaf Pure Essential Oils)
                                        </div>
                                        <div class="prod-price font-1">
                                            13,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/reed-3.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            썬 & 샌드<br> (Sun & Sand)
                                        </div>
                                        <div class="prod-price font-1">
                                            33,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/reed-4.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            세이지 & 시트러스<br> (Sage & Citrus) 
                                        </div>
                                        <div class="prod-price font-1">
                                            33,000
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/reed-5.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            블랙 체리<br> (Black Cherry)
                                        </div>
                                        <div class="prod-price font-1">
                                            45,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/reed-6.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            가든 스윗 피<br> (Garden Sweet Pea)
                                        </div>
                                        <div class="prod-price font-1">
                                            45,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/reed-7.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            리필 250ml / 빈티지 바이올렛<br> (Vintage Violet)
                                        </div>
                                        <div class="prod-price font-1">
                                            29,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/reed-8.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            빈티지 바이올렛<br> (Vintage Violet)
                                        </div>
                                        <div class="prod-price font-1">
                                            39,000
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-tab-name="box-1" data-tab-body-item-name="4">
                                <div class="prod-list-box flex flex-wrap">
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/car-1.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            핑크 샌즈 <br>(Pink Sands)
                                        </div>
                                        <div class="prod-price font-1">
                                            7,500
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/car-2.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            레몬 라벤더<br> (Lemon Lavender)
                                        </div>
                                        <div class="prod-price font-1">
                                            7,500
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/car-3.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            블랙 체리<br> (Black Cherry)
                                        </div>
                                        <div class="prod-price font-1">
                                            7,500
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/car-4.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            바하마 브리즈<br> (Bahama Breeze)
                                        </div>
                                        <div class="prod-price font-1">
                                            7,500
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/car-5.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            바하마 브리즈<br> (Bahama Breeze)
                                        </div>
                                        <div class="prod-price font-1">
                                            7,500
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/car-6.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            클린 코튼<br> (Clean Cotton)
                                        </div>
                                        <div class="prod-price font-1">
                                            8,500
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/car-7.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            핑크샌즈<br> (Pink Sands)
                                        </div>
                                        <div class="prod-price font-1">
                                            10,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/car-8.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            썬 & 샌드<br> (Sun & Sand)
                                        </div>
                                        <div class="prod-price font-1">
                                            7,500
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-tab-name="box-1" data-tab-body-item-name="5">
                                <div class="prod-list-box flex flex-wrap">
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/ma-1.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            미드썸머 나잇<br> (Midsummer's Night)
                                        </div>
                                        <div class="prod-price font-1">
                                            15,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/ma-2.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            핑크 샌즈<br> (Pink Sands)
                                        </div>
                                        <div class="prod-price font-1">
                                            15,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/ma-3.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            블랙 체리<br> (Black Cherry)
                                        </div>
                                        <div class="prod-price font-1">
                                            45,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/ma-4.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            레몬 라벤더<br> (Lemon Lavender)
                                        </div>
                                        <div class="prod-price font-1">
                                            15,000
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/ma-5.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            블랙 체리<br> (Black Cherry)
                                        </div>
                                        <div class="prod-price font-1">
                                            15,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/ma-6.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            MB 롤리타 렘피카 램프 기프트세트 - 연보라<br> (LampeSet)
                                        </div>
                                        <div class="prod-price font-1">
                                            112,500
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/ma-7.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            MB 에센셜 램프세트 - 오발<br> (Essential Pack - Oval / 370ml)
                                        </div>
                                        <div class="prod-price font-1">
                                            80,000
                                        </div>
                                    </div>
                                    <div class="prod-box">
                                        <a href="#">
                                            <img src="https://bae-sooyeon.github.io/img1/pf/yankeecandle/ma-8.jpg"
                                                alt="">
                                        </a>
                                        <div class="prod-name">
                                            MB 메탈 차량용 디퓨저 - 크롬 <br>(Chrome)
                                        </div>
                                        <div class="prod-price font-1">
                                            35,000
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
</body>

</html>