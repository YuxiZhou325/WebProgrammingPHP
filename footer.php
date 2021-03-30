<html>
<body>
<!-- footer Start -->
<footer>
    <div class="container flex">
        <div class="left">
            © 2021 All Right Reserved.
        </div>
        <div class="right">
            <div class="flex">
                <a href="" target="_blank">
                    <span class="iconfont icon-facebook"></span>
                </a>
                <a href="" target="_blank">
                    <span class="iconfont icon-tuite"></span>
                </a>
                <a href="" target="_blank">
                    <span class="iconfont icon-ins"></span>
                </a>
            </div>
        </div>
    </div>
</footer>
<!-- footer End -->

<!-- Swiper JS -->
<script src="inc/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    // slider-area
    var slider = new Swiper('.slider-area .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: true,
        pagination: {
            el: '.slider-area .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.slider-area .swiper-button-next',
            prevEl: '.slider-area .swiper-button-prev',
        },
    });

    // reviews-area
    var reviews = new Swiper('.reviews-area .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: true,
        pagination: {
            el: '.reviews-area .swiper-pagination',
            clickable: true,
        }
    });
</script>
</body>
</html>