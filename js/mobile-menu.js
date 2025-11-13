$(function() {
    // 메뉴 열기
    $('header #menu-btn').on('click', function() {
        $(".menu").stop().animate({top: 0}, 400);
    });

    // 메뉴 닫기 (close 버튼)
    $('.menu .menu-close .close').on('click', function() {
        $(".menu").stop().animate({top: '-100%'}, 400);
    });
    
    // 2depth 서브메뉴 열기/닫기
    $(".menu .menu-t").on('click', function(e) {
        e.preventDefault();

        const $this = $(this);
        const $subMenu = $this.next('.sub');
        const $icon = $this.find('i');

        if ($subMenu.is(":visible")) {
            // 현재 서브메뉴가 열려있으면 닫기
            $subMenu.slideUp(400);
            $icon.removeClass("xi-angle-up-thin").addClass("xi-angle-down-thin");
        } else {
            // 모든 서브메뉴 닫기
            $('.menu .sub').slideUp(400);
            $('.menu .menu-t i').removeClass("xi-angle-up-thin").addClass("xi-angle-down-thin");

            // 클릭한 서브메뉴만 열기
            $subMenu.slideDown(400);
            $icon.removeClass("xi-angle-down-thin").addClass("xi-angle-up-thin");
        }
    });   
    
    // Film Article 슬라이드
    // 자동 슬라이드 X, 화살표/인디케이터 클릭 시 이동
    let currentSlide = 0;
    const totalSlides = $('.article-list li').length;

    // 슬라이드 이동 함수
    function moveSlide(index) {
        currentSlide = index;
        
        // 슬라이드 위치 계산 (각 슬라이드는 100% 크기로 완전히 이동)
        const moveDistance = -100 * currentSlide;
        $('.article-list').css('left', moveDistance + '%');
        
        // 인디케이터 활성화
        $('#book-roll li').removeClass('active');
        $('#book-roll li').eq(currentSlide).addClass('active');
    }
    
    // 좌측 화살표 클릭
    $('.left-arrow').on('click', function(e) {
        e.preventDefault();
        currentSlide = currentSlide > 0 ? currentSlide - 1 : totalSlides - 1;
        moveSlide(currentSlide);
    });
    
    // 우측 화살표 클릭
    $('.right-arrow').on('click', function(e) {
        e.preventDefault();
        currentSlide = currentSlide < totalSlides - 1 ? currentSlide + 1 : 0;
        moveSlide(currentSlide);
    });
    
    // 인디케이터 클릭
    $('#book-roll li').on('click', function(e) {
        e.preventDefault();
        currentSlide = $(this).index();
        moveSlide(currentSlide);
    });
    
    // 초기 슬라이드 설정
    moveSlide(0);
    // BEST NOW 애니메이션
     $(window).on('scroll', function() {
        $('.best-now ul li').each(function() {
            const bestTop=$(this).offset().top;
            const winBottom=$(window).scrollTop()+$(window).height();

            if (winBottom>bestTop+300) {
                $(this).addClass('on');
            }
        });

        $('.review > ul > li > ul').each(function() {
            const reviewTop=$(this).offset().top;
            const winBottom=$(window).scrollTop()+$(window).height();

            if (winBottom>reviewTop+250) {
                $(this).addClass("on");
            }
        });
    });

    // Top/Down 버튼 클릭 시 스크롤 이동
    $(".tdBtn .topBtn").on('click', function() {
        $('html, body').animate({scrollTop: 0}, 600);
    });

    $(".tdBtn .downBtn").on("click", function() {
        $("html, body").animate({scrollTop: $(document).height()}, 600);
    });
});
