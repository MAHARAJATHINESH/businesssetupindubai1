<!-- Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- Bootstrap CDN -->
<!-- jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<!-- jquery CDN -->
<!-- Gallery CDN -->
<script src="assets/js/gallery.js"></script>
<!-- Gallery CDN -->

<!-- gsap script js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
<!-- gsap script js -->

<!-- Slick Slider CDN -->
<script src="assets/slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- Wow Js CDN -->
<script src="assets/js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<!-- Wow Js CDN -->
<script>
function addPassiveEventListener(target, type, listener) {
    var supportsPassive = false;
    try {
        var opts = Object.defineProperty({}, 'passive', {
            get: function() {
                supportsPassive = true;
            }
        });
        window.addEventListener('test', null, opts);
    } catch (e) {}

    var options = supportsPassive ? {
        passive: true
    } : false;
    target.addEventListener(type, listener, options);
}

// Usage
addPassiveEventListener(document, 'touchstart', function(event) {
    // Your code here
});
</script>
<!-- testemonial wrapper -->
<script>
$(document).ready(function() {
    $('.slider-social').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 2000,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: true,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
</script>
<script>
const tl = gsap.timeline();

tl.to("body", {
        overflow: "hidden"
    })
    .to(".preloader .text-container", {
        duration: 0,
        opacity: 1,
        ease: "Power3.easeOut"
    })
    .from(".preloader .text-container h1", {
        duration: 1.5,
        delay: 1,
        y: 70,
        skewY: 10,
        stagger: 0.4,
        ease: "Power3.easeOut"
    })
    .to(".preloader .text-container h1", {
        duration: 1.2,
        y: 70,
        skewY: -20,
        stagger: 0.2,
        ease: "Power3.easeOut"
    })
    .to(".preloader", {
        duration: 1.5,
        height: "0vh",
        ease: "Power3.easeOut"
    })
    .to(
        "body", {
            overflow: "auto"
        },
        "-=2"
    )
    .to(".preloader", {
        display: "none"
    });
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const countrySelect = document.getElementById("countrySelect");
    const flagImage = document.getElementById("flagImage");

    // Define a function to update the flag image
    function updateFlag() {
        const selectedOption = countrySelect.options[countrySelect.selectedIndex];
        const countryCode = selectedOption.value;

        // Set the image source based on the selected country code
        flagImage.src = "assets/img/home/" + countryCode + ".webp";
    }

    // Call the updateFlag function initially and whenever the selection changes
    updateFlag();
    countrySelect.addEventListener("change", updateFlag);
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var cards = document.querySelectorAll(".what-we-card");

    cards.forEach(function(card) {
        var image = card.querySelector(".card-image");

        card.addEventListener("mouseover", function() {
            var originalSrc = image.getAttribute("data-original-src");
            var hoverSrc = image.getAttribute("data-hover-src");
            image.src = hoverSrc;
        });

        card.addEventListener("mouseout", function() {
            var originalSrc = image.getAttribute("data-original-src");
            image.src = originalSrc;
        });
    });
});
</script>
<script>
document.getElementById("currentYear").textContent = new Date().getFullYear();
</script>
<script>
$(document).ready(function() {
    $('.slider-expert').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-arrow-right"></i></button>',
        responsive: [{
                breakpoint: 1024, // screen width at which settings below will apply
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768, // screen width at which settings below will apply
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 480, // screen width at which settings below will apply
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }
        ]
    });
});
</script>