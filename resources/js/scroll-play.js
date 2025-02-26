// filepath: /c:/Users/24stu/OneDrive/Desktop/Proyectos/solaris_nueva_web/resources/js/scroll-play.js
import throttle from 'lodash/throttle';
import { playAnimation, pauseAnimation, playReverseAnimation } from './lottie';

let lastScrollTop = 0;

const handleScroll = throttle(() => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        // Scroll hacia abajo
        playAnimation();
    } else {
        // Scroll hacia arriba
        playReverseAnimation();
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;

    // Limpiar el timeout anterior
    window.clearTimeout(handleScroll.isScrolling);

    // Establecer un nuevo timeout para pausar la animación después de 100ms de inactividad
    handleScroll.isScrolling = setTimeout(() => {
        pauseAnimation();
    }, 100);
}, 200); 

export const initScrollHandler = () => {
    window.addEventListener('scroll', handleScroll);
};