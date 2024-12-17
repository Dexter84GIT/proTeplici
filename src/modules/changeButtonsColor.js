const changeButtonsColor = () => {
    const btns = document.querySelectorAll(".variations .value > div");

    for (let i = 0; i < btns.length; i++) {
  
        btns[i].addEventListener("click", function() { 
            for (let i = 0; i < btns.length; i++) {
              btns[i].classList.remove('active');
            }
            this.classList.add('active');       
        });
    }  
}
export default changeButtonsColor