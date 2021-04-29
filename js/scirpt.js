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
const imageThumb = document.querySelector('.image-thumb');
const spanImage = document.querySelectorAll('.image-hover a span');

for (let i = 0; i < spanImage.length; i++) {
let lebarImage = imageThumb.getBoundingClientRect().width;
let tinggiImage = imageThumb.offsetHeight;
let lebarSpan = spanImage[i].getBoundingClientRect().width;
let tinggiSpan = spanImage[i].offsetHeight;
let paddingX = (lebarImage/2) - (lebarSpan/2);
let paddingY = (tinggiImage/2) - (tinggiSpan/2);

spanImage[i].style.paddingLeft = paddingX + 'px';
spanImage[i].style.paddingRight = paddingX + 'px';
spanImage[i].style.paddingTop = paddingY + 'px';
spanImage[i].style.paddingBottom = paddingY + 'px';
spanImage[i].style.transform = 'translateX' + '(' + '-' + lebarImage + 'px'+')';
}


window.addEventListener('resize', function(){
    for (let i = 0; i < spanImage.length; i++) {
        let lebarImage = imageThumb.getBoundingClientRect().width;
        let tinggiImage = imageThumb.offsetHeight;
        let lebarSpan = spanImage[i].getBoundingClientRect().width;
        let tinggiSpan = spanImage[i].offsetHeight;
        let paddingX = (lebarImage/2) - (lebarSpan/2);
        let paddingY = (tinggiImage/2) - (tinggiSpan/2);
        
        spanImage[i].style.paddingLeft = paddingX + 'px';
        spanImage[i].style.paddingRight = paddingX + 'px';
        spanImage[i].style.paddingTop = paddingY + 'px';
        spanImage[i].style.paddingBottom = paddingY + 'px';
        spanImage[i].style.transform = 'translateX' + '(' + '-' + lebarImage + 'px'+')';
        };
// spanImage.forEach(element => {
//     element.style.paddingLeft = paddingX +'px';
//     element.style.paddingRight = paddingX +'px';
//     element.style.paddingTop = paddingY +'px';
//     element.style.paddingBottom = paddingY +'px';
//     element.style.transform = 'translateX'+'('+'-'+lebarImage+'px'+')';
// });

});