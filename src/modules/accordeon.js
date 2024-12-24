const accordeon = () => {
    const accTitle = document.querySelector('.with-submenu')
    
    accTitle.addEventListener('click', () => {
        accTitle.classList.toggle('active');
    })
}
accordeon()