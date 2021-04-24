// toogle menu
const selectMenu = document.getElementById ('toggle-menu');
const showMenu = document.querySelector ('.navbar ul') ;
const scrollFixMenu = document.querySelector ('div.menu');
selectMenu.addEventListener('click', function(){
    showMenu.classList.toggle('show');
    document.body.classList.toggle('lock-scroll');
    scrollFixMenu.classList.toggle('scrol-fix');
});






