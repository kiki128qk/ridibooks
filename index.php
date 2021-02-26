<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIDIBOOKS</title>

    <!-- awesome link -->
    <script defer src="https://kit.fontawesome.com/9e31582c84.js" crossorigin="anonymous"></script>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- favicon icon link -->
    <link rel="shortcut icon" type="image/x-icon" href="/ridibooks/data/rogo_icon/favicon.ico" />

    <!-- ligthslider css link -->
        <link rel="stylesheet" href="/ridibooks/plugin/lightslider.css" />

    <!-- css link -->
    <link rel="stylesheet" href="/ridibooks/css/reset.css" />
    <link rel="stylesheet" href="/ridibooks/css/style.css" />


</head>
<body>
<div class="wrap">
    <header>
        <div class="mainMenu">
            <div class="center">
                <div class="mainNav">
                    <div class="rogo">
                        <a href="#" class="rogo_books"><img src="/ridibooks/data/rogo_icon/ridi_rogo_00.png" alt="리디북스"></a>
                        <p>|</p>
                        <a href="#" class="rogo_select"><img src="/ridibooks/data/rogo_icon/ridi_rogo_01.png" alt="리디셀렉트"></a>
                    </div>
                    <div class="searchForm">
                        <div class="searchIcon">
                            <img src="/ridibooks/data/rogo_icon/search_icon.png">
                        </div>
                        <input placeholder="제목, 저자, 출판사 검색">
                    </div>
                    <div class="topBtns">
                        <div class="btn">
                            <a href="#"><button>회원가입</button></a>
                            <a href="#"><button>로그인</button></a>
                        </div>
                    </div>
                </div>
                <div class="subNav">
                    <ul class="subNavMenu">
                        <li>
                            <button>
                                <a href="#">
                                    <img src="/ridibooks/data/rogo_icon/sub_meun_01.png" alt="">
                                    <i>홈</i>
                                </a>
                            </button>
                            <span class="line"></span>
                        </li>
                        <li>
                            <button>
                                <a href="#">
                                    <img src="/ridibooks/data/rogo_icon/sub_meun_02.png" alt="">
                                    <i>알림</i>
                                </a>
                            </button>
                            <span class="line"></span>
                        </li>
                        <li>
                            <button>
                                <a href="#">
                                    <img src="/ridibooks/data/rogo_icon/sub_meun_03.png" alt="">
                                    <i>카트</i>
                                </a>
                            </button>
                            <span class="line"></span>
                        </li>
                        <li>
                            <button>
                                <a href="#">
                                    <img src="/ridibooks/data/rogo_icon/sub_meun_04.png" alt="">
                                    <i>마이리디</i>
                                </a>
                            </button>
                            <span class="line"></span>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
        <div class="subMenu">
            <div class="center">
                <ul class="subMeneNav">
                    <li><a href="#">
                        <svg class="secSubNav">
                            <path d="M2 7.001h20V5H2v2.001zm3 6h14v-2H5v2zm3.999 6h6v-2h-6v2z">
                            </path>
                        </svg>
                    </a></li>
                    <li><a href="#">일반</a></li>
                    <li><a href="#">로맨스</a></li>
                    <li><a href="#">판타지</a></li>
                    <li><a href="#">만화</a></li>
                    <li><a href="#">BL</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section class="content">
        <?php
        include $_SERVER['DOCUMENT_ROOT'].'/ridibooks/include/content.php';
        ?>
    </section>
    <section class="slider">
        <h1>집 앞 서점에 방금 나온 신간!</h1>
        <div class="sliderCons">
            <ul class="rtl" id="rtl">
            <li><img src="/ridibooks/data/book_img/book_img_0.jpg" alt="">
                <div class="booktit">
                    <a href="#">완벽한 스파이 세트</a>
                </div>
                <div class="bookwri">
                    <a href="#">존 르 카레</a>
                </div>
            </li>
            <li><img src="/ridibooks/data/book_img/book_img_20.jpg" alt="">
                <div class="booktit">
                    <a href="#">나의 한국 현대사</a>
                </div>
                <div class="bookwri">
                    <a href="#">유시민</a>
                </div>
            </li>
            <li><img src="/ridibooks/data/book_img/book_img_21.jpg" alt="">
                <div class="booktit">
                    <a href="#">러브크래프트 컨트리</a>
                </div>
                <div class="bookwri">
                    <a href="#">맷 러프</a>
                </div>
            </li>
            <li><img src="/ridibooks/data/book_img/book_img_23.jpg" alt="">
                <div class="booktit">
                    <a href="#">소년과 개</a>
                </div>
                <div class="bookwri">
                    <a href="#">하세 세이슈</a>
                </div>
            </li>
            <li><img src="/ridibooks/data/book_img/book_img_24.jpg" alt="">
                <div class="booktit">
                    <a href="#">투자의 재발견</a>
                </div>
                <div class="bookwri">
                    <a href="#">이고은</a>
                </div>
            </li>
            <li><img src="/ridibooks/data/book_img/book_img_25.jpg" alt="">
                <div class="booktit">
                    <a href="#">지금, 너에게 간다.</a>
                </div>
                <div class="bookwri">
                    <a href="#">박성진</a>
                </div>
            </li>
            <li><img src="/ridibooks/data/book_img/book_img_26.jpg" alt="">
                <div class="booktit">
                    <a href="#">백만장자의 아주 작은 성공 습관</a>
                </div>
                <div class="bookwri">
                    <a href="#">딘 그라치오시</a>
                </div>
            </li>
            <li><img src="/ridibooks/data/book_img/book_img_7.jpg" alt="">
                <div class="booktit">
                    <a href="#">돈의 심리학</a>
                </div>
                <div class="bookwri">
                    <a href="#">모건 하우절</a>
                </div>
            </li>
            <li><img src="/ridibooks/data/book_img/book_img_8.jpg" alt="">
                <div class="booktit">
                    <a href="#">유리코코로</a>
                </div>
                <div class="bookwri">
                    <a href="#">누마타 마호카루</a>
                </div>
            </li>
            <li><img src="/ridibooks/data/book_img/book_img_9.jpg" alt="">
                <div class="booktit">
                    <a href="#">토지</a>
                </div>
                <div class="bookwri">
                    <a href="#">박경리</a>
                </div>
            </li>
            </ul>
        </div>
    </section>
    <section class="nowBooks">
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/ridibooks/include/nowBooks.php'
    ?>
    </section>
    <section class='today'>
        <div class="center">
            <div class="clickSlider">
                <h2>
                오늘, 리디의 발견
                </h2>
                <div class="clSlcontent">
                    <div class="todayslider">
                        <ul class="rtl" id="rtl2">
                        <li><img src="/ridibooks/data/book_img/book_img_10.jpg" alt="">
                            <div class="booktit">
                                <a href="#">공정하다는 착각</a>
                            </div>
                        </li>
                        <li><img src="/ridibooks/data/book_img/book_img_11.jpg" alt="">
                            <div class="booktit">
                                <a href="#">기억</a>
                            </div>
                        </li>
                        <li><img src="/ridibooks/data/book_img/book_img_12.jpg" alt="">
                            <div class="booktit">
                                <a href="#">모든 것을 기억하는 남자</a>
                            </div>
                        </li>
                        <li><img src="/ridibooks/data/book_img/book_img_13.jpg" alt="">
                            <div class="booktit">
                                <a href="#">달러그투 꿈 백화점</a>
                            </div>
                        </li>
                        <li><img src="/ridibooks/data/book_img/book_img_14.jpg" alt="">
                            <div class="booktit">
                                <a href="#">녹정기</a>
                            </div>
                        </li>
                        <li><img src="/ridibooks/data/book_img/book_img_15.jpg" alt="">
                            <div class="booktit">
                                <a href="#">달란트투자의 주식교과서</a>
                            </div>
                        </li>
                        <li><img src="/ridibooks/data/book_img/book_img_16.jpg" alt="">
                            <div class="booktit">
                                <a href="#">나는 나무처럼 살고 싶다</a>
                            </div>
                        </li>
                        <li><img src="/ridibooks/data/book_img/book_img_17.jpg" alt="">
                            <div class="booktit">
                                <a href="#">천둥의 계절</a>
                            </div>
                        </li>
                        <li><img src="/ridibooks/data/book_img/book_img_18.jpg" alt="">
                            <div class="booktit">
                                <a href="#">아메리칸 더트</a>
                            </div>
                        </li>
                        <li><img src="/ridibooks/data/book_img/book_img_19.jpg" alt="">
                            <div class="booktit">
                                <a href="#">컴버전스 2030</a>
                            </div>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/ridibooks/plugin/lightslider.js"></script>

<script src="/ridibooks/js/bannerSli.js"></script>
</body>
</html>