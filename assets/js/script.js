(function () {
    const track = document.getElementById('facilitiesTrack');
    const prevBtn = document.querySelector('.facilities__btn--prev');
    const nextBtn = document.querySelector('.facilities__btn--next');

    function updateEdges() {
      prevBtn.disabled = track.scrollLeft <= 4;
      nextBtn.disabled = track.scrollLeft + track.clientWidth >= track.scrollWidth - 4;
    }
    function scrollByDir(dir) {
      const tile = track.querySelector('.facility');
      const step = tile ? tile.offsetWidth + 24 : track.clientWidth * 0.8;
      track.scrollBy({ left: dir * step, behavior: 'smooth' });
    }
    prevBtn.addEventListener('click', () => scrollByDir(-1));
    nextBtn.addEventListener('click', () => scrollByDir(1));
    track.addEventListener('scroll', updateEdges, { passive: true });
    window.addEventListener('resize', updateEdges);
    updateEdges();
  })();

  const boxes = document.querySelectorAll(".animate-box");

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const animation = el.getAttribute("data-animate");

      el.classList.add("animate__animated", animation, "show");

      observer.unobserve(el);
    }
  });
}, {
  threshold: 0.2
});

boxes.forEach(box => {
  observer.observe(box);
});
