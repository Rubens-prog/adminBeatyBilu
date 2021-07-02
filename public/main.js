//const pessoa = {
//  nome: 'bilu',
//  age: ' 21',
//  falar: function () {
//    alert(pessoa.age);
//  },
//};
//
//pessoa.falar();

// DOM Document Object Model
//document.body.style.background = 'red'; Só um teste

const nav = document.querySelector("#header nav"); //função querySelector pega o seletor do CSS para alterar.//
const toggle = document.querySelectorAll("nav .toggle");

for (const element of toggle) {
    // quando 'click', recebe function(){pega classList de nav que é o toggle e aplica o toggle}
    //para elemento of toggle faça{...} é tipo um foreach
    element.addEventListener("click", function () {
        nav.classList.toggle("show");
    });
}
/*============================ REMOVE MENU ================================*/

const links = document.querySelectorAll("nav ul li a");

for (const link of links) {
    link.addEventListener("click", function () {
        nav.classList.remove("show");
    });
}
/*================== Scroll ====================*/
const header = document.querySelector("#header");
const navHeight = header.offsetHeight;

function changeHeaderWhenScroll() {
    if (window.scrollY >= navHeight) {
        header.classList.add("scroll");
    } else {
        header.classList.remove("scroll");
    }
}

/*================== SWIPER ====================*/
//para objetos use {propriedade:'valor'}//

const swiper = new Swiper(".swiper-container", {
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
    breakpoints: {
        767: {
            slidesPerView: 2,
            setWrapperSize: true,
        },
    },
});

/*================== SCROLLREVEAL ====================*/

const scrollReveal = ScrollReveal({
    origin: "top",
    distance: "30px",
    duration: 700, //miliseconds//
    reset: true,
});

scrollReveal.reveal(
    `#home .image, #home .text,
  #about .image, #about .text,
  #services header, #services .card,
  #testimonials header, #testimonials .testimonials
  #contact .text, #contact .links,
  footer .brand, footer .social
  `,
    { interval: 100 }
);

/*================== BACK TO TOP ====================*/
const backToTopButton = document.querySelector(".back-to-top");

function backToTop() {
    if (window.scrollY >= 560) {
        backToTopButton.classList.add("show");
    } else {
        backToTopButton.classList.remove("show");
    }
}

/*================== Menu Ativo Conforme a Section  ====================*/
const sections = document.querySelectorAll("main section[id]");
function activateMenuAtCurrentSection() {
    const checkpoint = window.pageYoffset + (window.innerHeight / 8) * 4;

    for (const section of sections) {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute("id");

        const checkpointStart = checkpoint >= sectionTop;
        const checkpointEnd = checkpoint <= sectionTop + sectionHeight;

        if (checkpointStart && checkpointEnd) {
            document
                .querySelector("nav ul li a.title[href*=" + sectionId + "]")
                .classList.add("active");
        } else {
            document
                .querySelector("nav ul li a.title[href*=" + sectionId + "]")
                .classList.remove("active");
        }
    }
}

/*================== WHEN SROLL  ====================*/

window.addEventListener("scroll", function () {
    changeHeaderWhenScroll();
    backToTop();
    activateMenuAtCurrentSection();
});
