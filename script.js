let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true,
    spaceBetween:20,
    grabCursor:true,
    pagination: {
        el:".swiper-pagination",
        clickable:true,
    },
});

var swiper = new Swiper(".service-slider", {
    loop:true,
    spaceBetween:20,
    grabCursor:true,
    pagination: {
        el:".swiper-pagination",
        clickable:true,
    },
    breakpoints: {
        450: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1000: {
          slidesPerView: 3,
        },
      },
});

let loadMoreBtn = document.querySelector('.destination .load-more');
let currentItem = 4;

loadMoreBtn.onclick = () =>{
  let boxes = [...document.querySelectorAll('.destination .box-container .box')];
  for (var i = currentItem; i < currentItem + 4; i++){
    boxes[i].style.display = 'inline-block';
  };
  currentItem += 4;
  if(currentItem >= boxes.length){
    loadMoreBtn.style.display = 'none';
  }
}



const ultimateLink = document.getElementById("ultimateLink");
const prestigeLink = document.getElementById("prestigeLink");
const premiumLink = document.getElementById("premiumLink");
const classicLink = document.getElementById("classicLink");
const simpleLink = document.getElementById("simpleLink");
const weddingTypeSelect = document.getElementById("weddingType");

function setWeddingType(type) {
  weddingTypeSelect.value = type;
}

ultimateLink.addEventListener("click", function() {
  setWeddingType("ultimate");
});

prestigeLink.addEventListener("click", function() {
  setWeddingType("prestige");
});

premiumLink.addEventListener("click", function() {
  setWeddingType("premium");
});

classicLink.addEventListener("click", function() {
  setWeddingType("classic");
});

simpleLink.addEventListener("click", function() {
  setWeddingType("simple");
});



