<!-- Jquery JS-->
<script src="js/jquery.min.js"></script>
<!-- Jquery JS-->

<!-- boostrap js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<!-- boostrap js -->

<!-- index bootstrap js -->
<script src="js/index.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- index js -->

<!-- aos js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- aos js -->

<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- wow js -->

<!-- slick slider js -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- slick slider js -->

<!-- gsap -->
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
<!-- gsap -->



<!-- aos js -->
<script>
AOS.init();
</script>

<!-- wow animated  -->
<script>
wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: true, // default
    live: true // default
})
</script>

<script>
// Header
const CurrentLocation = location.href;
const menuItem = document.querySelectorAll(".normal-nav-items .menu");
const menuLength = menuItem.length;
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === CurrentLocation) {
        menuItem[i].className = "active";
    }
}
</script>
<script>
// marquee
$(".marquee-slider").slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    centerMode: true,
    dots: false,
    // slidesToShow: 5,
    variableWidth: true,
    slidesToScroll: 1,
    speed: 5000,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    pauseOnhover: false,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
            },
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                speed: 1000,
                dots: false,
            },
        },
    ],
});
</script>
<script>
// Searchbar
$(document).ready(function() {
    $('#search').click(function() {
        $('.menu-item').addClass('hide-item')
        $('.search-form').addClass('active')
        $('.close').addClass('active')
        $('#search').hide()
    })
    $('.close').click(function() {
        $('.menu-item').removeClass('hide-item')
        $('.search-form').removeClass('active')
        $('.close').removeClass('active')
        $('#search').show()
    })
})

const open = document.querySelector('.container1');
const close = document.querySelector('.close1');
var tl = gsap.timeline({
    defaults: {
        duration: 1,
        ease: 'expo.inOut'
    }
});
open.addEventListener('click', () => {
    if (tl.reversed()) {
        tl.play();
    } else {
        tl.to('nav', {
                right: 0
            })
            .to('nav', {
                height: '100%'
            }, '-=.1')
            .to('nav ul li a', {
                opacity: 1,
                pointerEvents: 'all',
                stagger: .2
            }, '-=.8')
            .to('.close1', {
                opacity: 1,
                pointerEvents: 'all'
            }, "-=.8")
    }
});

close.addEventListener('click', () => {
    tl.reverse();
});
</script>