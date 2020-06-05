<?
    include_once $_SERVER['DOCUMENT_ROOT']."/head.php";
    
?>

    <link rel="stylesheet" href="asset/css/about_style.css">
    <script src='asset/js/about.js'></script>
    </head>
    <body>
        <div id="wrap">
<?
    include_once $_SERVER['DOCUMENT_ROOT']."/navi.php";
?>     
        <section>
            <article class="top">
                <div class="text">
                    <p class="typing"></p>
                    <p class="typing-txt">ABOUT ME</p> 
                </div>
                
                <div class="me">
                    <p><img src="asset/img/face/face1.png" alt=""></p>
                    <p>HAN SODAM / 1992.10.20 / hansodam77@gmail.com</p>
                    <span>2019.12 ~ 2020.06 강남 그린컴퓨터 아카데미 웹퍼블리셔 / 프론트엔드 교육과정 <b>수료</b></span>
                    <span>#정보기기운용기능사 <b>취득</b></span>
                </div>
                

            </article>

            <article class="bottom">
                <p>SKILLS</p>
                <div>
                    <p class="html"><img src="asset/img/html_icon.png" alt=""></p>
                    <p class="js"><img src="asset/img/js_icon.png" alt=""></p>
                    <p class="css"><img src="asset/img/css_icon.png" alt=""></p>
                    <p class="jq"><img src="asset/img/jq_icon.png" alt=""></p>
                    <p class="php"><img src="asset/img/php_icon.png" alt=""></p>
                </div>
                <ul>
                    <li><strong>/ HTML5 /</strong>HTML5, CSS3 웹 표준 마크업
                        웹 접근성 준수
                        Cross Browsing
                        시맨틱태그를 활용한 시맨틱한 아웃라인 구조</li>
                    <li><strong>/ CSS /</strong>미디어쿼리를 이용한 반응형 사이트 제작
                        CSS 사용경험
                        부트스트랩 사용경험</li>
                    <li><strong>/ JAVA SCRIPT, JQUERY /</strong>Form값 유효성 체크
                        화면전환, 탭, 슬라이드 등의 기능 구현 및 플러그인 사용</li>
                    <li><strong>/ PHP, MYSQL /</strong>(DML) 게시판 생성 및 게시물 작성, 수정, 삭제 기능 구현
                        관리자 로그인기능 구현
                        </li>
                </ul>
            </article>
        </section>
    </div>
</body>
</html>