gsap.config({ trialWarn: false });
gsap.set('svg', {
    visibility: 'visible'
})

let tl = gsap.timeline({
    repeat: -1, yoyo: true, defaults: {
        ease: 'sine.inOut',
        duration: 1.2
    }
});
tl.fromTo('#gradDot', {
    x: 90
}, {
    x: -90
})
    .fromTo('#fillDot', {
        x: -90
    }, {
        x: 90
    }, 0)
    .fromTo('#mainGrad', {
        attr: {
            cx: 230,
            fx: 230
        }
    }, {
        attr: {
            cx: 570,
            fx: 570
        }
    }, 0)

var loader = document.getElementById("preloader");

window.addEventListener("load", function () {
    loader.style.display = "none";
})




//   ------------- numbers counter -----------------//

$(document).ready(function () {
    $(".counter").counterUp({
        delay: 10,
        time: 1200,
    });
});

// ---------------------- aos (animation on scroll) --------------------//

window.addEventListener('load', () => {
    AOS.init({
        duration: 500,
        easing: 'fade-up',
        once: true,
        mirror: false
    })
});

//---------------------- jquery fancybox plugin -------------------------//

$(document).ready(function () {
    $("a.gallery-item").fancybox({
        // Options for the Fancybox plugin
        loop: true
    });
});

// ----------------------- clients carousel -------------------//

$('.owl-carousel.client').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 1200,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 6
        }
    }
})

// ------------- sticky navbar on scroll ---------------- //

$(window).scroll(function () {
    if ($(window).scrollTop()) {
        $(".navbar").addClass("sticky")
    }
    else {
        $(".navbar").removeClass("sticky")
    }
})

// ------------- switch between dark and light mode ---------------- //

// Function to toggle between light and dark mode
function toggleDarkMode() {
    const body = document.body;
    const icon = document.getElementById('mode-icon');

    // Toggle the dark mode class
    body.classList.toggle('dark-mode');

    // Toggle the icon
    if (body.classList.contains('dark-mode')) {
        icon.classList.remove('bi-moon-fill');
        icon.classList.add('bi-sun-fill');
    } else {
        icon.classList.remove('bi-sun-fill');
        icon.classList.add('bi-moon-fill');
    }

    // Save the user's preference to localStorage
    const isDarkMode = body.classList.contains('dark-mode');
    localStorage.setItem('dark-mode', isDarkMode);
}

// Check if user's preference is stored in localStorage
const isDarkModeSaved = localStorage.getItem('dark-mode');

// Apply the saved preference (if available)
if (isDarkModeSaved === 'true') {
    document.body.classList.add('dark-mode');
} else {
    document.body.classList.remove('dark-mode');
}

// Update the icon based on the saved preference
const icon = document.getElementById('mode-icon');
if (icon) {
    if (isDarkModeSaved === 'true') {
        icon.classList.add('bi-sun-fill');
    } else {
        icon.classList.add('bi-moon-fill');
    }
}

// Add event listener to the mode toggle button
const modeToggle = document.getElementById('mode-toggle');
if (modeToggle) {
    modeToggle.addEventListener('click', toggleDarkMode);
}


// ---------------- testimonial slider ---------------------//

$('.owl-carousel.testimonial').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 8000,
    responsive: {
        0: {
            items: 1
        },
        750: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})


// ================== portfolio filter ====================== //

$(document).ready(function () {

    // initialize Isotope
    var $grid = $('.row.portfolio-row').isotope({
        itemSelector: '.col-lg-4',
        layoutMode: 'fitRows'
    });

    // filter items on button click
    $('.filters').on('click', 'a', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

});

function rotateIcon(iconId) {
    const icon = document.getElementById(iconId);
    icon.classList.toggle('rotated');
}

// ---------------- back to top button -------------------- //

let calcScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let porogressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);
    if (pos > 100) {
        scrollProgress.style.display = "grid";
    }
    else {
        scrollProgress.style.display = "none";
    }
    scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
    });
    scrollProgress.style.background = `conic-gradient(#1FA84F ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
};
window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

// ---------------- particles  -------------------- //

particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 80,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#999"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#999"
            },
            "polygon": {
                "nb_sides": 3
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 3,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 100,
            "color": "#999",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": true,
                "mode": "repulse"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }

        }
    }
})


