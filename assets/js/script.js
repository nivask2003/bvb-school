(function () {
    const track = document.getElementById('facilitiesTrack');
    const prevBtn = document.querySelector('.facilities__btn--prev');
    const nextBtn = document.querySelector('.facilities__btn--next');

    // Only run the facilities carousel logic if all required elements exist
    // on the current page (e.g. facilities.php). This prevents a
    // TypeError on pages like about.php that don't have this carousel,
    // which would otherwise stop the rest of this script (including
    // the IntersectionObserver code and AOS.init() below) from running.
    if (!track || !prevBtn || !nextBtn) {
      return;
    }

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



  AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
    offset: 100
  });


  