function toggleDropdown(btn){
const card = btn.closest('.drop-down-card')
const svg = btn.querySelector('svg');
const span = card.querySelector('.question span')
const answer = card.querySelector('.answer')

svg.classList.toggle('active');
span.classList.toggle('active');
answer.classList.toggle('active');
}


document.addEventListener('touchstart', () => {
  logoVideo.play();
}, { once: true });

logoVideo.oncanplay = () => {
  logoVideo.style.opacity = 1;
};

