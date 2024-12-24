const mobileMenu = () => {
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileButton = document.querySelector('.mobile-menu__button');
    const mobileMenuClose = document.querySelector('.mobile-menu__close');

    mobileButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        mobileButton.classList.toggle('active');
    });
}
mobileMenu()