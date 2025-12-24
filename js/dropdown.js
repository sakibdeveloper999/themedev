let dropdown = document.querySelector('.menu'),
    submenu = dropdown.querySelector('.sub-menu'),
    buttonClick = document.querySelector('.check-button'),
    hamburger = document.querySelector('.menu-icon');



buttonClick.addEventListener('click', () => {
    dropdown.classList.toggle('show-dropdown');
    submenu.classList.toggle('show-dropdown');
});
