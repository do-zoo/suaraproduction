// toogle menu
const selectMenu = document.getElementById('toggle-menu');
const showMenu = document.querySelector('.navbar ul');
const scrollFixMenu = document.querySelector('div.menu');
        selectMenu.addEventListener('click', function () {
            showMenu.classList.toggle('show');
            document.body.classList.toggle('lock-scroll');
            scrollFixMenu.classList.toggle('scrol-fix');
        });

//thumbnail image 
const portfolioThumb = document.querySelector('.portfolio-thumb');
const imageThumb = document.querySelector('.image-hover');
const textImageThumb = document.querySelector('.image-hover a span p ');
const portfolioImage = document.querySelector('.image-hover a img');

//fuunction
// let posisiPortfolioThumbY = portfolioThumb.getBoundingClientRect();
let posisiTextImageL = (imageThumb.clientWidth / 2) - (textImageThumb.clientWidth / 2);
let posisiTextImageY = (imageThumb.clientHeight / 2) - (textImageThumb.clientHeight / 2);
let textTop = portfolioThumb.offsetTop;
textImageThumb.style.top = textTop + 'px';
textImageThumb.style.padding = posisiTextImageY + 'px ' + posisiTextImageL + 'px';