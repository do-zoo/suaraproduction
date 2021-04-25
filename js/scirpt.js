// toogle menu
const selectMenu = document.getElementById('toggle-menu');
const showMenu = document.querySelector('.navbar ul');
const scrollFixMenu = document.querySelector('div.menu');
selectMenu.addEventListener('click', function () {
    showMenu.classList.toggle('show');
    document.body.classList.toggle('lock-scroll');
    scrollFixMenu.classList.toggle('scrol-fix');
});


//test Parallax Scrolling
const translate = document.querySelectorAll(".translate");
const big_title = document.querySelector(".big-title");
const header = document.querySelector("header");
const shadow = document.querySelector(".shadow");
const content = document.querySelector(".content");
const section = document.querySelector("section");
const image_container = document.querySelector(".imgContainer");
const opacity = document.querySelectorAll(".opacity");
const border = document.querySelector(".border");

let header_height = header.offsetHeight;
let section_height = section.offsetHeight;

window.addEventListener('scroll', () => {
    let scroll = window.pageYOffset;
    let sectionY = section.getBoundingClientRect();
    // let speed = translate.dataset.speed;

    translate.forEach(element => {
        let speed = element.dataset.speed;
        element.style.transform = `translateY(${scroll * speed}px)`;
    });
    // translate.style.transform = `translateY(${scroll * speed}px)`;
    opacity.forEach(element => {
        element.style.opacity = scroll / (sectionY.top + section_height) * 2;
    });
    big_title.style.opacity = - scroll / (header_height / 2) + 1;
    shadow.style.height = `${scroll * 0.5 + 300}px`;

    content.style.transform = `translateY(${scroll / (section_height + sectionY.top) * 50 - 50}px)`;
    // image_container.style.transform = `translateY(${scroll / (section_height + sectionY.top) * -50 + 50}px)`;

    // border.style.width = `${scroll / (sectionY.top + section_height) * 30}%`;
});


