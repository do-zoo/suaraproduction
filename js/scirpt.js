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
const portThumb = document.querySelectorAll(".image-hover");
const iFrameYt = document.querySelector('.slider-responsive iframe');
const previewsButton = document.querySelector('.previews-button');
const nextButton = document.querySelector('.next-button');

let linkYt = [
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
    "https://www.youtube.com/embed/S1mSUW_h9aA"
];


for (let i=0; i < portThumb.length; i++) {
    portThumb[i].addEventListener('click', function(){
        containerLightbox.classList.toggle('close-youtube');
        iFrameYt.setAttribute("src", linkYt[i]);
        if (i == 0) {
            previewsButton.classList.add('hide-navigation');
        } else {
            previewsButton.classList.remove('hide-navigation');
        }
        if (i+1 >= portThumb.length) {
            nextButton.classList.add('hide-navigation');
        }
        else {
            nextButton.classList.remove('hide-navigation');
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
};



closeButton.addEventListener('click', function(){
    containerLightbox.classList.toggle('close-youtube');
    iFrameYt.removeAttribute("src");
    nextButton.classList.remove('hide-navigation');
    previewsButton.classList.remove('hide-navigation');
    i = 0;
}
);









