// ************************************* Preloader Scripting **************************************

setTimeout(function () {
    $('.preload').fadeToggle();
}, 3000);

// ************************************* Navbar Scripting **************************************

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    //toggle nav
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');

        //animation links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = "";
            } else {
                link.style.animation = `navListFade 0.5s ease forwards ${index / 7 + 0.6}s`;
            }
        });

        //burger animation
        burger.classList.toggle('toggle');
    });
}

navSlide();

// ***************************** Responsive Gallery Swiper JS *******************************************

var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 80,
        stretch: 0,
        depth: 500,
        modifier: 1,
        slideShadows: true,
    },
    keyboard: {
        enabled: true,
    },
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },
});

// ***************************** Scroll To Top Button *******************************************

const myButton = document.getElementById('myBtn');

//when we scroll down 20px from top of the document, show the button
window.onscroll = function () {
    scrollFunction();
}

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        myButton.style.display = "block";
    } else {
        myButton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
