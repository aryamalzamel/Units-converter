let menu = document.querySelector('.menu-icon');
let pages = document.querySelector('#navList');

menu.onclick = ()  => {
    menu.classList.toggle('menu-after');
    pages.classList.toggle('openMenuList');
}