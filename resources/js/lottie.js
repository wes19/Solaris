const lottiePlayer = document.getElementById('lottiePlayer');

export const playAnimation = () => {
    if (lottiePlayer) {
        lottiePlayer.setSpeed(1.5); 
        lottiePlayer.play();
    }
};

export const pauseAnimation = () => {
    if (lottiePlayer) {
        lottiePlayer.pause();
    }
};

export const playReverseAnimation = () => {
    if (lottiePlayer) {
        lottiePlayer.setSpeed(-1.5); 
        lottiePlayer.play();
    }
};

