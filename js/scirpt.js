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
                    document.body.classList.remove('lock-scroll');
                });
            });
            document.body.classList.toggle('lock-scroll');
            scrollFixMenu.classList.toggle('scrol-fix');
        });



// thumbnail image 
// const imageThumb = document.querySelector('.image-thumb');
// const iconPlay = document.querySelector('.icon-play');
// const iconPlayIcon = document.querySelector('.icon-play i');

// window.addEventListener('resize', iconPadding);


// for (let i = 0; i < spanImage.length; i++) {
//     spanImage[i].style.transform = 'translateX'+'('+'-'+lebarImage+'px'+')';
// };

// for (let i = 0; i < spanImage.length; i++) {
//     spanImage[i].style.padding = paddingY + 'px ' + paddingX + 'px';
// };
    // let lebarImage = imageThumb.getBoundingClientRect().width;
    // let tinggiImage = imageThumb.getBoundingClientRect().height;
    // let tinggiImage = imageThumb.offsetHeight;

    // let lebarIcon = iconPlay.getBoundingClientRect().width;
    // let tinggiIcon = iconPlay.getBoundingClientRect().height;
    // let tinggiSpan = firstSpan.offsetHeight;
    // let paddingX = (lebarImage/2) - (lebarIcon/2);
    // let paddingX = parseFloat(paddingLR);
    // let paddingY = (tinggiImage/2) - (tinggiIcon/2);
    // let paddingY = parseFloat(paddingTB);
    // iconPlayIcon.style.padding = paddingY + 'px ' + paddingX + 'px';



// window.addEventListener('resize', function () {
//     iconPlayIcon.style.padding = paddingY + 'px ' + paddingX + 'px';
    // var i = 0;
    // while (i < 1) {
    //     setTimeout("location.reload(true);",500);
    //     i++;
    // };
    
// });

