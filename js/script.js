// HEADER ANIMATION
// HEADER ANIMATION
var lastScrollTop = 0;
var header = document.querySelector('header'); // Replace 'header' with your header selector
var headerHeight = header.offsetHeight; // Get the height of the header

window.addEventListener('scroll', function() {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop && scrollTop > headerHeight) {
        // Downscroll and scrolled past header, hide header
        header.classList.add('header-hidden');
        console.log(`scrollTop: ${scrollTop}, lastScrollTop: ${lastScrollTop}`)
    } else {
        // Upscroll, show header
        header.classList.remove('header-hidden');
    }
    lastScrollTop = scrollTop;
}, false);



// Toggle the menu when hamburger menu is clicked
document.querySelector('.hamburger-menu').addEventListener('click', function(event) {
    event.stopPropagation(); // Prevent propagation to document click event
    document.querySelector('.menu').classList.toggle('menu-expanded');
});

// Hide menu when clicked outside of header
document.addEventListener('click', function(event) {
    const header = document.querySelector('header');
    if (!header.contains(event.target)) {
        document.querySelector('.menu').classList.remove('menu-expanded');
    }
});

// Caurosel
document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector(".carousel");
    const carouselItems = document.querySelectorAll(".carousel-item");
    const dotsContainer = document.querySelector(".carousel-dots");
    const dots = [];
    let currentIndex = 0;

    // Initialize dots
    for (let i = 0; i < carouselItems.length; i++) {
        const dot = document.createElement("span");
        dot.classList.add("carousel-dot");
        dotsContainer.appendChild(dot);
        dots.push(dot);
        dot.addEventListener("click", () => goToIndex(i));
    }
    dots[currentIndex].classList.add("active");

    // Go to specific index
    function goToIndex(index) {
        currentIndex = index;
        updateCarousel();
    }

    // Update carousel position
    function updateCarousel() {
        carousel.style.transform = `translateX(-${currentIndex * 25}%)`;
        updateDots();
    }

    // Update dot states
    function updateDots() {
        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add("active");
            } else {
                dot.classList.remove("active");
            }
        });
    }

    // Handle next button click
    document.querySelector(".next").addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % carouselItems.length;
        updateCarousel();
    });

    // Handle previous button click
    document.querySelector(".prev").addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
        updateCarousel();
    });

    // Automatic sliding
    setInterval(() => {
        currentIndex = (currentIndex + 1) % carouselItems.length;
        updateCarousel();
    }, 10000);

    // Update carousel when transition ends
    carousel.addEventListener("transitionend", function() {
        // If the last item is reached, immediately jump to the first item
        if (currentIndex === carouselItems.length - 1) {
            setTimeout(() => {
                carousel.style.transition = "none";
                currentIndex = 0;
                updateCarousel();
                setTimeout(() => {
                    carousel.style.transition = "transform 0.5s ease";
                }, 50);
            }, 500);
        } else if (currentIndex === 0) { // If the first item is reached
            setTimeout(() => {
                carousel.style.transition = "none";
                currentIndex = carouselItems.length - 3;
                updateCarousel();
                setTimeout(() => {
                    carousel.style.transition = "transform 0.5s ease";
                }, 50);
            }, 500);
        }
    });

    // Update dots when carousel slides
    carousel.addEventListener("transitionend", function() {
        updateDots();
    });
});


// FORM PROCESSING
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'process_form.php', true);
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                // Success response
                const response = xhr.responseText;
                document.getElementById('form-response').innerHTML = response;
                form.reset();
            } else {
                // Error response
                document.getElementById('form-response').innerHTML = '<div class="error-message">Error: ' + xhr.statusText + '</div>';
            }
        };
        xhr.onerror = function() {
            // Error handling
            document.getElementById('form-response').innerHTML = '<div class="error-message">Network Error</div>';
        };
        xhr.send(formData);
    });
});


