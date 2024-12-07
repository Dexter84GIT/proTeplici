import { animate } from "./helpers"

const animation = () => {
    const mainLogo = document.querySelector('.header-logo')
    const fadeIn = () => {
        animate({
            duration: 500,
            timing(timeFraction) {
              return timeFraction;
            },
            draw(progress) {
                mainLogo.style.opacity = progress
            }
          });
    }
    fadeIn()
}

export default animation