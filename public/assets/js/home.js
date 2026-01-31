function toggleDropdown(btn){
const card = btn.closest('.drop-down-card')
const svg = btn.querySelector('svg');
const span = card.querySelector('.question span')
const answer = card.querySelector('.answer')

svg.classList.toggle('active');
span.classList.toggle('active');
answer.classList.toggle('active');
}


/*const logoVideo = document.getElementById('logoVideo');

function tryPlay() {
    if (logoVideo.paused) {
        logoVideo.play().catch(() => {});
    }
}

document.addEventListener('click', tryPlay, { once: true });
document.addEventListener('touchstart', tryPlay, { once: true });

logoVideo.onerror = () => {
    document.getElementById('logoImg').classList.remove('hidden');
    logoVideo.classList.add('hidden');
};


*/