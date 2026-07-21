<?php include "function.php" ?>
<?=template_header("Gallery - Bhaarath Vidhya Bhavan")?>

<section class="page-banner" id="gallery">
    <h1 class="page-title">Gallery</h1>
</section>
<section class="gallery-1 py-5">
    <div class="container">
        <div class="gallery-filter-btn" data-aos="fade-up">
            <button class="btn active" data-filter="all">All</button>
            <button class="btn" data-filter="campus">Campus</button>
            <button class="btn" data-filter="events">Events</button>
            <button class="btn" data-filter="sports">Sports</button>
            <button class="btn" data-filter="cultural">Cultural</button>
        </div>
        <div class="gallery-container mt-5">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 gallery-item" data-category="campus" data-aos="fade-right">
                    <img src="assets/images/g1.webp" alt="Our Campus" class="img-fluid">
                    <div class="overlay">
                        <h4>Our Campus</h4>
                        <a href="javascript:void(0);" class="btn"><i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 gallery-item" data-category="campus" data-aos="fade-up">
                    <img src="assets/images/g2.webp" alt="Campus Gateway" class="img-fluid">
                    <div class="overlay">
                        <h4>Campus Gateway</h4>
                        <a href="javascript:void(0);" class="btn"><i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 gallery-item" data-category="campus" data-aos="fade-down">
                    <img src="assets/images/g3.webp" alt="Academic Block" class="img-fluid">
                    <div class="overlay">
                        <h4>Academic Block</h4>
                        <a href="javascript:void(0);" class="btn"><i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 gallery-item" data-category="campus" data-aos="fade-left">
                    <img src="assets/images/g4.webp" alt="School Transport" class="img-fluid">
                    <div class="overlay">
                        <h4>School Transport</h4>
                        <a href="javascript:void(0);" class="btn"><i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
            <p class="gallery-empty-msg" style="display:none;">No images found in this category.</p>
        </div>
    </div>
</section>

<!-- Lightbox Markup -->
<div class="gallery-lightbox" id="galleryLightbox">
    <span class="gallery-lightbox__close" id="lightboxClose"><i class="bi bi-x-lg"></i></span>
    <span class="gallery-lightbox__nav gallery-lightbox__prev" id="lightboxPrev"><i class="bi bi-chevron-left"></i></span>
    <span class="gallery-lightbox__nav gallery-lightbox__next" id="lightboxNext"><i class="bi bi-chevron-right"></i></span>
    <div class="gallery-lightbox__content">
        <img src="" alt="" id="lightboxImg">
        <h4 id="lightboxTitle"></h4>
    </div>
</div>

<script>
(function () {
    var items = Array.prototype.slice.call(document.querySelectorAll('.gallery-1 .gallery-item'));
    var filterBtns = Array.prototype.slice.call(document.querySelectorAll('.gallery-filter-btn .btn'));
    var emptyMsg = document.querySelector('.gallery-empty-msg');

    var overlay = document.getElementById('galleryLightbox');
    var lbImg = document.getElementById('lightboxImg');
    var lbTitle = document.getElementById('lightboxTitle');
    var visible = items.slice();
    var current = 0;

    function refreshVisible() {
        visible = items.filter(function (item) {
            return item.style.display !== 'none';
        });
    }

    function show(index) {
        if (!visible.length) return;
        current = (index + visible.length) % visible.length;
        var img = visible[current].querySelector('img');
        var title = visible[current].querySelector('.overlay h4');
        lbImg.setAttribute('src', img.getAttribute('src'));
        lbImg.setAttribute('alt', img.getAttribute('alt') || '');
        lbTitle.textContent = title ? title.textContent : '';
    }

    function openLightbox(item) {
        refreshVisible();
        var idx = visible.indexOf(item);
        show(idx === -1 ? 0 : idx);
        overlay.classList.add('active');
        document.body.classList.add('lightbox-open');
    }

    function closeLightbox() {
        overlay.classList.remove('active');
        document.body.classList.remove('lightbox-open');
    }

    items.forEach(function (item) {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            openLightbox(item);
        });
    });

    document.getElementById('lightboxClose').addEventListener('click', closeLightbox);
    document.getElementById('lightboxNext').addEventListener('click', function () { show(current + 1); });
    document.getElementById('lightboxPrev').addEventListener('click', function () { show(current - 1); });

    overlay.addEventListener('click', function (e) {
        if (e.target === overlay) closeLightbox();
    });

    document.addEventListener('keydown', function (e) {
        if (!overlay.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') show(current + 1);
        if (e.key === 'ArrowLeft') show(current - 1);
    });

    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filterBtns.forEach(function (b) { b.classList.remove('active'); });
            this.classList.add('active');
            var filter = this.getAttribute('data-filter');
            var anyVisible = false;

            items.forEach(function (item) {
                var isMatch = (filter === 'all' || item.getAttribute('data-category') === filter);
                item.style.display = isMatch ? '' : 'none';
                if (isMatch) anyVisible = true;
            });

            if (emptyMsg) emptyMsg.style.display = anyVisible ? 'none' : 'block';
            if (window.AOS) AOS.refreshHard();
            refreshVisible();
        });
    });

    refreshVisible();
})();
</script>

<?=template_footer()?>