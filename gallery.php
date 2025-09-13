<?php include 'header.php';?>

        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Gallery</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Team Area -->
        <div class="team-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Our Gallery</span>
                    <h2>Our Latest Image</h2>
                </div>
                <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <a href="assets/images/team/team-img1.jpg" class="lightbox" data-lightbox="gallery">
                                <img src="assets/images/team/team-img1.jpg" alt="Team Images">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                        <a href="assets/images/team/team-img2.jpg" class="lightbox" data-lightbox="gallery">
                            <img src="assets/images/team/team-img2.jpg" alt="Team Images"></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                        <a href="assets/images/team/team-img3.jpg" class="lightbox" data-lightbox="gallery">
                            <img src="assets/images/team/team-img3.jpg" alt="Team Images"></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                        <a href="assets/images/team/team-img4.jpg" class="lightbox" data-lightbox="gallery">
                            <img src="assets/images/team/team-img4.jpg" alt="Team Images"></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                        <a href="assets/images/team/team-img5.jpg" class="lightbox" data-lightbox="gallery">
                            <img src="assets/images/team/team-img5.jpg" alt="Team Images"></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                        <a href="assets/images/team/team-img6.jpg" class="lightbox" data-lightbox="gallery">
                            <img src="assets/images/team/team-img6.jpg" alt="Team Images"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

<div id="lightboxModal" class="lightbox-modal">
    <span class="close">&times;</span>
    <img class="lightbox-content" id="lightboxImage">
</div>
        <!-- Team Area End -->
         
<?php include 'footer.php';?>

        <script>
    document.addEventListener('DOMContentLoaded', function () {
        const lightboxLinks = document.querySelectorAll('.lightbox');
        const modal = document.getElementById('lightboxModal');
        const lightboxImage = document.getElementById('lightboxImage');
        const closeButton = document.querySelector('.close');

        lightboxLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                lightboxImage.src = this.href;
                modal.style.display = "block";
            });
        });

        closeButton.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
    });
</script>