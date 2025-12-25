function toggleDropdown(btn){
const card = btn.closest('.drop-down-card')
const svg = btn.querySelector('svg');
const span = card.querySelector('.question span')
const answer = card.querySelector('.answer')

svg.classList.toggle('active');
span.classList.toggle('active');
answer.classList.toggle('active');
}


const counters = document.querySelectorAll(".counter");

function animateCount(counter) {
  const target = +counter.getAttribute("data-target");
  const duration = 1000;
  let start = 0;

  const step = () => {
    const increment = target / (duration / 16);
    start += increment;

    let value = Math.floor(start);

    if (start < target) {
      counter.textContent = value + (counter.classList.contains("plus") ? "+" : "");
      requestAnimationFrame(step);
    } else {
      counter.textContent = target + (counter.classList.contains("plus") ? "+" : "");
    }
  };

  step();
}

const observer = new IntersectionObserver(
  (entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCount(entry.target);
        obs.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.3 }
);

counters.forEach(counter => observer.observe(counter));