<!-- Jquery JS-->
<script src="js/jquery.min.js"></script>
<!-- Jquery JS-->

<!-- boostrap js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<!-- boostrap js -->

<!-- index bootstrap js -->
<script src="js/index.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
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
        menuItem[i].id = "active";
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
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 767,
            settings: {
                slidesToScroll: 1,
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
// gsap responsive header
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
// parallax img
document.addEventListener("mousemove", parallax);

function parallax(e) {
    this.querySelectorAll('.layer').forEach(layer => {
        const speed = layer.getAttribute('data-speed')

        const x = (window.innerWidth - e.pageX * speed) / 100
        const y = (window.innerHeight - e.pageY * speed) / 100

        layer.style.transform = `translateX(${x}px) translateY(${y}px)`
    })
}
// banner main heading
window.onload = function() {
    animateRandom();
};

function animateRandom() {
    var a = document.getElementsByClassName('random');
    for (var i = 0; i < a.length; i++) {
        var $this = a[i];
        var letter = $this.innerHTML;
        letter = letter.trim();
        var delay = 70;
        var delayArray = new Array;
        var randLetter = new Array;
        for (j = 0; j < letter.length; j++) {
            while (1) {
                var random = getRandomInt(0, (letter.length - 1));
                if (delayArray.indexOf(random) == -1)
                    break;
            }
            delayArray[j] = random;
        }
        for (l = 0; l < delayArray.length; l++) {
            var str = '';
            var index = delayArray[l];
            if (letter[index] != ' ') {
                str = '<span style="animation-delay:' + delay + 'ms; -moz-animation-delay:' + delay +
                    'ms; -webkit-animation-delay:' + delay + 'ms; ">' + letter[index] + '</span>';
                randLetter[index] = str;
            } else
                randLetter[index] = letter[index];
            delay += 30;
        }
        randLetter = randLetter.join("");
        $this.innerHTML = randLetter;
    }
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
// slider 
$('.slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
$('.slidermacho').slick({
    dots: false,
    infinite: false,
    speed: 600,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
})
// BY KAREN GRIGORYAN

$(document).ready(function() {
    /******************************
        BOTTOM SCROLL TOP BUTTON
     ******************************/

    // declare variable
    var scrollTop = $(".scrollTop");

    $(window).scroll(function() {
        // declare variable
        var topPos = $(this).scrollTop();

        // if user scrolls down - show scroll to top button
        if (topPos > 100) {
            $(scrollTop).css("opacity", "1");

        } else {
            $(scrollTop).css("opacity", "0");
        }

    }); // scroll END

    //Click event to scroll to top
    $(scrollTop).click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;

    }); // click() scroll top EMD

    /*************************************
      LEFT MENU SMOOTH SCROLL ANIMATION
     *************************************/
    // declare variable
    var h1 = $("#h1").position();
    var h2 = $("#h2").position();
    var h3 = $("#h3").position();

    $('.link1').click(function() {
        $('html, body').animate({
            scrollTop: h1.top
        }, 500);
        return false;

    }); // left menu link2 click() scroll END

    $('.link2').click(function() {
        $('html, body').animate({
            scrollTop: h2.top
        }, 500);
        return false;

    }); // left menu link2 click() scroll END

    $('.link3').click(function() {
        $('html, body').animate({
            scrollTop: h3.top
        }, 500);
        return false;

    }); // left menu link3 click() scroll END

}); // ready() END
// Show the first tab and hide the rest
$(document).ready(function() {
    //Enable Tooltips
    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    //Advance Tabs
    $(".next").click(function() {
        const nextTabLinkEl = $(".nav-tabs .active")
            .closest("li")
            .next("li")
            .find("a")[0];
        const nextTab = new bootstrap.Tab(nextTabLinkEl);
        nextTab.show();
    });

    $(".previous").click(function() {
        const prevTabLinkEl = $(".tab-pane .active")
            .closest("li")
            .prev("li")
            .find("a")[0];
        const prevTab = new bootstrap.Tab(prevTabLinkEl);
        prevTab.show();
    });
});
// upload image
$(document).ready(function() {
    $('#image').change(function() {
        var a = $('#image').val().toString().split('\\');
        $('#fakeInput').val(a[a.length - 1]);
        $("#frames").html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            $("#frames").append('<img src="' + window.URL.createObjectURL(this.files[i]) +
                '" width="100px" height="100px"/>');
        }
    });
});

function bootstrapTabControl() {
    var i, items = $('.nav-link'),
        pane = $('.tab-pane');
    // next
    $('.nexttab').on('click', function() {
        for (i = 0; i < items.length; i++) {
            if ($(items[i]).hasClass('active') == true) {
                break;
            }
        }
        if (i < items.length - 1) {
            // for tab
            $(items[i]).removeClass('active');
            $(items[i + 1]).addClass('active');
            // for pane
            $(pane[i]).removeClass('show active');
            $(pane[i + 1]).addClass('show active');
        }

    });
    // Prev
    $('.prevtab').on('click', function() {
        for (i = 0; i < items.length; i++) {
            if ($(items[i]).hasClass('active') == true) {
                break;
            }
        }
        if (i != 0) {
            // for tab
            $(items[i]).removeClass('active');
            $(items[i - 1]).addClass('active');
            // for pane
            $(pane[i]).removeClass('show active');
            $(pane[i - 1]).addClass('show active');
        }
    });
}
bootstrapTabControl();
// upload input
$('#fakeInput').change(function() {
    var a = $('#fakeInput').val().toString().split('\\');
    $('#fakeInput').val(a[a.length - 1]);
});
// add active
$(document).ready(function() {
    $(".tab").click(function() {
        $(".tab").removeClass("active");
        $(".tab").addClass("active");
    });
});
</script>
<!-- qtybox start here -->
<script>
function increaseValue(button, limit) {
    const numberInput = button.parentElement.querySelector('.number');
    var value = parseInt(numberInput.innerHTML, 10);
    if (isNaN(value)) value = 0;
    if (limit && value >= limit) return;
    numberInput.innerHTML = value + 1;
}


function decreaseValue(button) {
    const numberInput = button.parentElement.querySelector('.number');
    var value = parseInt(numberInput.innerHTML, 10);
    if (isNaN(value)) value = 0;
    if (value < 1) return;
    numberInput.innerHTML = value - 1;
}
</script>
<!-- qtybox start here -->
<script>
function increaseValue(button, limit) {
    const numberInput = button.parentElement.querySelector('.number');
    var value = parseInt(numberInput.innerHTML, 10);
    if (isNaN(value)) value = 0;
    if (limit && value >= limit) return;
    numberInput.innerHTML = value + 1;
}



// Prev
$('.prevtab').on('click', function() {
    for (i = 0; i < items.length; i++) {
        if ($(items[i]).hasClass('active') == true) {
            break;
        }
    }
    if (i != 0) {
        // for tab
        $(items[i]).removeClass('active');
        $(items[i - 1]).addClass('active');
        // for pane
        $(pane[i]).removeClass('show active');
        $(pane[i - 1]).addClass('show active');
    }
});
}
bootstrapTabControl();
// upload input
$('#fakeInput').change(function() {
    var a = $('#fakeInput').val().toString().split('\\');
    $('#fakeInput').val(a[a.length - 1]);
});
// add active
$(document).ready(function() {
    $(".tab").click(function() {
        $(".tab").removeClass("active");
        $(".tab").addClass("active");
    });
});
// range
function rangeSlide(value) {
    document.getElementById('rangeValue').innerHTML = value;
}

function rangeSlide1(value) {
    document.getElementById('rangeValue1').innerHTML = value;
}

function rangeSlide2(value) {
    document.getElementById('rangeValue2').innerHTML = value;
}

function rangeSlide3(value) {
    document.getElementById('rangeValue3').innerHTML = value;
}

function rangeSlide4(value) {
    document.getElementById('rangeValue4').innerHTML = value;
}

function rangeSlide5(value) {
    document.getElementById('rangeValue5').innerHTML = value;
}
// color background
</script>
function decreaseValue(button) {
const numberInput = button.parentElement.querySelector('.number');
var value = parseInt(numberInput.innerHTML, 10);
if (isNaN(value)) value = 0;
if (value < 1) return; numberInput.innerHTML=value - 1; } </script>
    <!-- qtybox end here -->