const mode = document.querySelector
('input#check');
const html = document.querySelector
('html');

// ketika tombol diklik

mode.addEventListener('change', 
function () {
    // cek mode saat ini lalu ubah 
    if (html.dataset.screenMode === 'light') {
        html.dataset.screenMode = 'dark'
    } else {
        html.dataset.screenMode = 'light'
    }
}
);