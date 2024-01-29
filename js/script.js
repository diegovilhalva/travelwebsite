let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
        reverseDirection: false,
     } 
});

var swiper = new Swiper(".reviews-slider", {
    grabCursor:true,
    loop:true,
    autoHeight:true,
    spaceBetWeen:20,
    breakpoints: {
        640: {
            slidesPerView: 1,         
        },
        760: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});


let loadMore = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMore.onclick = () => {
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (i = currentItem; i < currentItem + 3; i++ ) {
        boxes[i].style.display = 'inline-block';
        
    }
    currentItem += 3;
    if (currentItem >=  boxes.length) {
        loadMore.style.display = 'none';
    }
}