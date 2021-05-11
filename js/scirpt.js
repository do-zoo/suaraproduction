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



// SHOWREAL JS
const youtubeLightbox = document.querySelector('.youtube-lightbox');
const closeButton = document.querySelector('.close-button');
const containerLightbox = document.querySelector("div.overlay-youtube");
const portThumb = document.querySelectorAll(".image-hover");
const iFrameYt = document.querySelector('.slider-responsive iframe');
const previewsButton = document.querySelector('.previews-button');
const nextButton = document.querySelector('.next-button');

let linkYt = ["https://www.youtube.com/embed/oaeZF63W2UE", "https://www.youtube.com/embed/KPVzb68hLTg", "https://www.youtube.com/embed/abKSS_JerPM", "https://www.youtube.com/embed/2BcVOKlSPXw", "https://www.youtube.com/embed/xgByZdZDMws", "https://www.youtube.com/embed/VG70Nr-hYW0", "https://www.youtube.com/embed/cXLdBBSF-wo", "https://www.youtube.com/embed/O5LWTjrV2X0", "https://www.youtube.com/embed/NR40jM4qn8s"];


for (let i = 0; i < portThumb.length; i++) {
    portThumb[i].addEventListener('click', function(){
        containerLightbox.classList.toggle('close-youtube');
        iFrameYt.setAttribute("src", linkYt[i]);
        if (i == 0) {
            previewsButton.classList.add('hide-navigation');
        }
        if (i+1 >= portThumb.length) {
            nextButton.classList.add('hide-navigation');
        }
        // Previews button
        previewsButton.addEventListener('click', function(){
            i--;
            iFrameYt.setAttribute("src", linkYt[i]);
            if (i == 0) {
                previewsButton.classList.add('hide-navigation');
            } else {
                nextButton.classList.remove('hide-navigation');
            }
        });
        

        //next button
        nextButton.addEventListener('click', function(){
            i++;
            iFrameYt.setAttribute("src", linkYt[i]);
            if (i+1 >= portThumb.length) {
                nextButton.classList.add('hide-navigation');
            } else {
                previewsButton.classList.remove('hide-navigation');
            }            
        });
    });
}



closeButton.addEventListener('click', function(){
    containerLightbox.classList.toggle('close-youtube');
    iFrameYt.removeAttribute("src");
}
);









