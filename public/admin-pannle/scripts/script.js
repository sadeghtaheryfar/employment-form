// btn show menu

var btn = document.querySelectorAll('.btn-menu');
var ShowMenu = document.querySelector('.show-menu');
var CloseMenu = document.querySelector('.close-menu');

btn.forEach((btn,index) => {
    btn.addEventListener('click', function handleClick(event) {
        ShowMenu.classList.toggle("show");
        CloseMenu.classList.toggle("hidden");
    });
});