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


// SHOWREAL JS
const youtubeLightbox = document.querySelector('.youtube-lightbox');
const closeButton = document.querySelector('.close-button');
const containerLightbox = document.querySelector("div.overlay-youtube");
const portThumbV = document.querySelectorAll(".video-content .portfolio-thumb .image-hover");
const portThumbA = document.querySelectorAll(".audio-content .portfolio-thumb .image-hover");
const iFrameYt = document.querySelector('.slider-responsive iframe');
const previewsButton = document.querySelector('.previews-button');
const nextButton = document.querySelector('.next-button');

let linkYtVP = [
    // DOVPO MVV II PANDA
    "https://www.youtube.com/embed/KPVzb68hLTg", 
    //DITJEN PST KEMENTAN
    "https://www.youtube.com/embed/xgByZdZDMws", 
    //MARCEDES-BENZ
    "https://www.youtube.com/embed/VG70Nr-hYW0", 
    //MK RECORD
    "https://www.youtube.com/embed/cXLdBBSF-wo", 
    //2NY
    "https://www.youtube.com/embed/O5LWTjrV2X0", 
    //BAPETEN
    "https://www.youtube.com/embed/NR40jM4qn8s",
    //AVRIST
    "https://www.youtube.com/embed/NijRMQieNnY",
    //BNI JAVA JAZZ 2019
    "https://www.youtube.com/embed/IODja-vNzmc",
    //EYE LEVEL
    "https://www.youtube.com/embed/7-G8hkzbF40",
    //KIMIA FARMA
    "https://www.youtube.com/embed/B5-XvvziYh0",
    // Multistakeholder Forestry Programme Indonesia
    "https://www.youtube.com/embed/5diEztdAmhY",
    //PASPAMPRES Short-Movie
    "https://www.youtube.com/embed/IkejqLyOcFk",
    //TELIN
    "https://www.youtube.com/embed/S1mSUW_h9aA",
    // BINTARO COFFEE FESTIVAL
    "https://www.youtube.com/embed/MGhjb4V9_kk",
    // NOVO NORDISK
    "https://www.youtube.com/embed/ZBcru-oAxgc"
];
let linkYtAP = [
    // PERTAMINA EPS 01
    "https://www.youtube.com/embed/NVW3VcFRqUY", 
    //BANK BRI
    "https://www.youtube.com/embed/QwfqAq2AfRU", 
    //FREE FIRE
    "https://www.youtube.com/embed/cpjWjnV8IcM", 
    //OCTO MOBILE
    "https://www.youtube.com/embed/BXqpGhVICRU", 
    //SMARTFREN
    "https://www.youtube.com/embed/_X1EORJm-H4", 
    //PERTAMINA EPS 02
    "https://www.youtube.com/embed/TUZhZc2250c",
    //SUPER MUSIC
    "https://www.youtube.com/embed/PoTZQ7tT1bQ",
    //PERTAMINA EPS 03
    "https://www.youtube.com/embed/djP3FhFbsM0",
    //YEOS
    "https://www.youtube.com/embed/LIYiwMI_e2U"
];

// VIDEO PROD
for (let i=0; i < portThumbV.length; i++) {
    portThumbV[i].addEventListener('click', function(){
        containerLightbox.classList.toggle('close-youtube');
        iFrameYt.setAttribute("src", linkYtVP[i]);
        if (i == 0) {
            previewsButton.classList.add('hide-navigation');
        } else {
            previewsButton.classList.remove('hide-navigation');
        }
        if (i+1 >= portThumbV.length) {
            nextButton.classList.add('hide-navigation');
        }
        else {
            nextButton.classList.remove('hide-navigation');
        }
        // Previews button
        previewsButton.addEventListener('click', function(){
            i--;
            iFrameYt.setAttribute("src", linkYtVP[i]);
            if (i == 0) {
                previewsButton.classList.add('hide-navigation');
            } else {
                nextButton.classList.remove('hide-navigation');
            }
        });
        

        //next button
        nextButton.addEventListener('click', function(){
            i++;
            iFrameYt.setAttribute("src", linkYtVP[i]);
            if (i+1 >= portThumbV.length) {
                nextButton.classList.add('hide-navigation');
            } else {
                previewsButton.classList.remove('hide-navigation');
            }            
        });
    });
};


// AUDIO PROD
for (let a=0; a < portThumbA.length; a++) {
    portThumbA[a].addEventListener('click', function(){
        containerLightbox.classList.toggle('close-youtube');
        iFrameYt.setAttribute("src", linkYtAP[a]);
        if (a == 0) {
            previewsButton.classList.add('hide-navigation');
        } else {
            previewsButton.classList.remove('hide-navigation');
        }
        if (a+1 >= portThumbA.length) {
            nextButton.classList.add('hide-navigation');
        }
        else {
            nextButton.classList.remove('hide-navigation');
        }
        // Previews button
        previewsButton.addEventListener('click', function(){
            a--;
            iFrameYt.setAttribute("src", linkYtAP[a]);
            if (a == 0) {
                previewsButton.classList.add('hide-navigation');
            } else {
                nextButton.classList.remove('hide-navigation');
            }
        });
        

        //next button
        nextButton.addEventListener('click', function(){
            a++;
            iFrameYt.setAttribute("src", linkYtAP[a]);
            if (a+1 >= portThumbA.length) {
                nextButton.classList.add('hide-navigation');
            } else {
                previewsButton.classList.remove('hide-navigation');
            }            
        });
    });
};

closeButton.addEventListener('click', function(){
    containerLightbox.classList.toggle('close-youtube');
    iFrameYt.removeAttribute("src");
    nextButton.classList.remove('hide-navigation');
    previewsButton.classList.remove('hide-navigation');
    i = 0;
    a = 0;
}
);






