const menu = document.querySelector('.menu');
const NavList = document.querySelector('.nav-list');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavList.classList.toggle('ativo');
})