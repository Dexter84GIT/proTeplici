const mainSlider = () => {
    const slides = document.querySelectorAll('.hero-slide')
    const slideNumber = document.querySelector('.number')
    const timeInterval = 3000
    
    let interval = 0
    let currentSlide = 0

    const nextSlide = (elems, index, strClass) => {
        elems[index].classList.add(strClass)
    }
    const prevSlide = (elems, index, strClass) => {
        elems[index].classList.remove(strClass)
    }
    const autoSlide = () => {
        prevSlide(slides, currentSlide, 'hero-slide-active')
        currentSlide++
        slideNumber.textContent = currentSlide
        if (currentSlide >= slides.length) {
            currentSlide = 0
        }
        nextSlide(slides, currentSlide, 'hero-slide-active')
    }
    const startSlide = (timer = 3000) => {
        interval = setInterval(autoSlide, timer)
    }
    startSlide(timeInterval)
}

export default mainSlider