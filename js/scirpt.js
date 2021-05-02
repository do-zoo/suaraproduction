// toogle menu
const selectMenu = document.getElementById('toggle-menu');
const showMenu = document.querySelector('.navbar ul');
const hideAfterClick = document.querySelectorAll('.navbar ul li');
const scrollFixMenu = document.querySelector('div.menu');
        selectMenu.addEventListener('click', function () {
            showMenu.classList.toggle('show');
            hideAfterClick.forEach(element => {
                element.addEventListener('click', function(){
                    showMenu.classList.remove('show');
                });
            });
            document.body.classList.toggle('lock-scroll');
            scrollFixMenu.classList.toggle('scrol-fix');
        });

//thumbnail image 
const imageThumb = document.querySelector('.image-thumb');
const firstSpan = document.querySelector('.image-hover a span.first-span');
const spanImage = document.querySelectorAll('.image-hover a span');






let lebarImage = imageThumb.getBoundingClientRect().width;
let tinggiImage = imageThumb.offsetHeight;
let lebarSpan = firstSpan.getBoundingClientRect().width;
let tinggiSpan = firstSpan.offsetHeight;
let paddingLR = (lebarImage/2) - (lebarSpan/2);
let paddingX = parseFloat(paddingLR);
let paddingTB = (tinggiImage/2) - (tinggiSpan/2);
let paddingY = parseFloat(paddingTB);

for (let i = 0; i < spanImage.length; i++) {
    spanImage[i].style.transform = 'translateX'+'('+'-'+lebarImage+'px'+')';
};

for (let i = 0; i < spanImage.length; i++) {
    spanImage[i].style.padding = paddingY + 'px ' + paddingX + 'px';
};



// window.addEventListener('resize', function () {
//     var i = 0;
//     while (i < 1) {
//         setTimeout("location.reload(true);",500);
//         i++;
//     };
    
// });