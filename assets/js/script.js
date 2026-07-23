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


  /* ==========================================================================
   Facilities Page - Vanilla JS
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function () {

    /* Init scroll animations */
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 700,
            easing: 'ease-out-cubic',
            once: true,
            offset: 80
        });
    }

    /* Keep card heights perfectly equal per row, even if an image
       fails to load or content wraps to an extra line. */
    var equalizeCardHeights = function () {
        var cards = document.querySelectorAll('.facility-card__body');
        cards.forEach(function (card) {
            card.style.minHeight = 'auto';
        });

        if (window.innerWidth < 768) {
            return; // single column on mobile, no need to equalize
        }

        var maxHeight = 0;
        cards.forEach(function (card) {
            maxHeight = Math.max(maxHeight, card.offsetHeight);
        });

        cards.forEach(function (card) {
            card.style.minHeight = maxHeight + 'px';
        });
    };

    equalizeCardHeights();

    var resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(equalizeCardHeights, 150);
    });

    /* Refresh AOS once images finish loading, so layout shifts
       don't leave animations triggering at the wrong offset. */
    var images = document.querySelectorAll('.facility-card__image');
    var loadedCount = 0;

    images.forEach(function (img) {
        if (img.complete) {
            loadedCount++;
        } else {
            img.addEventListener('load', function () {
                loadedCount++;
                if (loadedCount === images.length) {
                    equalizeCardHeights();
                    if (typeof AOS !== 'undefined') {
                        AOS.refresh();
                    }
                }
            });
        }
    });

});

  