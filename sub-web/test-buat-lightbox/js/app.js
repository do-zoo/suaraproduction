const youtubeLightbox = document.querySelector('.youtube-lightbox');
const closeButton = document.querySelector('.close-button');
const containerLightbox = document.querySelector("body")


closeButton.addEventListener('click', function(){
    // console.log ('berhasil');
    containerLightbox.classList.toggle('close-youtube');
}
);
