const slicer = (str, num) => {
    return str.trim().length > num ? 
    str.trim().substring(0, num) + '...' : 
    str.trim()
}
const animate = ({timing, draw, duration}) => {
    const start = performance.now();
  
    requestAnimationFrame(function animate(time) {
      // timeFraction изменяется от 0 до 1
      let timeFraction = (time - start) / duration;
      if (timeFraction > 1) timeFraction = 1;
  
      // вычисление текущего состояния анимации
      const progress = timing(timeFraction);
  
      draw(progress); // отрисовать её
  
      if (timeFraction < 1) {
        requestAnimationFrame(animate);
      }
  
    });
  }

  const emailValidation = (email) => {
      // Regular expression pattern for validating an email address
      const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      // Test the email against the regex pattern
      return regex.test(email);
  }


    

export {slicer, animate, emailValidation }