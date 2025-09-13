<!-- Footer Area End -->
<footer class="footer-area footer-bg">
    <div class="container">
        <div class="footer-top pt-100 pb-70">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.php">
                                <img src="assets/images/logos/subhasavilla-footer-logo.png" style="height: 70px;"
                                    alt="Images">
                            </a>
                        </div>
                        <p>
                            At Subhasavilla, we take pride in offering a wide range of services that cater to
                            both corporate and municipal needs.
                        </p>
                        <div class="footer-call-content">
                            <h3>Talk to Our Support</h3>
                            <span><a href="tel:7294050442">+91- 7294050442</a></span>
                            <i class='bx bx-headphone'></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget pl-2">
                        <h3>Services</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="ticket-management-system.php">
                                    <i class='bx bx-chevron-right'></i>
                                    Ticket Management System
                                </a>
                            </li>
                            <li>
                                <a href="desk-management-system.php">
                                    <i class='bx bx-chevron-right'></i>
                                    Desk Management System
                                </a>
                            </li>
                            <li>
                                <a href="ivr-setup.php">
                                    <i class='bx bx-chevron-right'></i>
                                    IVR Setup Service
                                </a>
                            </li>
                            <li>
                                <a href="tollfree-services.php">
                                    <i class='bx bx-chevron-right'></i>
                                    Tollfree Numbers Service
                                </a>
                            </li>
                            <li>
                                <a href="digital-marketing.php">
                                    <i class='bx bx-chevron-right'></i>
                                    Digital Marketing
                                </a>
                            </li>
                            <li>
                                <a href="portfolio.php">
                                    <i class='bx bx-chevron-right'></i>
                                    Municipal Projects
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bx-chevron-right'></i>
                                    Man Power Solutions
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget pl-2">
                        <h3>Quick Links</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="gallery.php">
                                    <i class='bx bx-chevron-right'></i>
                                    Gallery
                                </a>
                            </li>
                            <li>
                                <a href="career.php">
                                    <i class='bx bx-chevron-right'></i>
                                    Career
                                </a>
                            </li>
                            <li>
                                <a href="achievements.php">
                                    <i class='bx bx-chevron-right'></i>
                                    Achievements
                                </a>
                            </li>
                            <li>
                                <a href="faq.php">
                                    <i class='bx bx-chevron-right'></i>
                                    FAQ
                                </a>
                            </li>
                            <li>
                                <a href="terms-condition.php">
                                    <i class='bx bx-chevron-right'></i>
                                    Terms & Conditions
                                </a>
                            </li>
                            <li>
                                <a href="privacy-policy.php">
                                    <i class='bx bx-chevron-right'></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="testimonials.php">
                                    <i class='bx bx-chevron-right'></i>
                                    Testimonial
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Newsletter</h3>
                        <p>Sign up for our newsletter and follow us on social media.</p>
                        <div class="newsletter-area">
                            <form class="newsletter-form apnaSubmitForm" action="newsletter-submit.php" method="POST">
                                <input type="hidden" name="form_type" value="newsletter">
                                <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL"
                                    required autocomplete="off">
                                <button class="subscribe-btn" name="submit" type="submit">
                                    <i class='bx bxs-paper-plane'></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copy-right-area">
            <div class="copy-right-text">
                <p>
                    Copyright © <script>
                    document.write(new Date().getFullYear())
                    </script> Powered by Subhasavilla. Design & Developed by
                    <a href="https://www.shishtechnology.com/" target="_blank">Shish Technology</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->

<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="apnaSubmitForm" action="submit-fom.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="quoteModalLabel">Get A Quote</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Modal form or content goes here -->
                    <div class="form-group mb-4">
                        <input type="hidden" name="form_type" value="quote">
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-group mb-4">
                        <input type="tel" class="form-control" name="phone_number"
                            placeholder="Enter your mobile number" required>
                    </div>

                    <div class="form-group mb-4">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group mb-4">
                        <select class="form-control" name="service">
                            <option value="">Select a Service</option>
                            <option value="Ticket Management System">Ticket Management System</option>
                            <option value="Desk Management System">Desk Management System</option>
                            <option value="IVR Service">IVR Service</option>
                            <option value="Toll Free Number Services">Toll Free Number Services</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <textarea class="form-control" name="message" rows="4" placeholder="Enter your message"
                            required></textarea>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.nice-select {
    height: 46px !important;
    line-height: 150% !important;
    margin-bottom: 1rem !important;
}
</style>

<!-- Footer Area End -->

<!-- Color Switch Button -->
<!-- <div class="switch-box">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div> -->
<!-- Color Switch Button End -->

<!-- Jquery Min JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup Min JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Select Min JS -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- Wow Min JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Meanmenu JS -->
<script src="assets/js/meanmenu.js"></script>
<!-- ajaxChimp Min JS -->
<!-- <script src="assets/js/jquery.ajaxchimp.min.js"></script> -->
<!-- Form Validator Min JS -->
<!-- <script src="assets/js/form-validator.min.js"></script> -->
<!-- Contact Form JS -->
<!-- <script src="assets/js/contact-form-script.js"></script> -->
<!--=== Custom JS ===-->
<script src="assets/js/custom.js"></script>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
$(document).ready(function() {
    // Handle form submission via AJAX
    $('.apnaSubmitForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        var form = $(this);
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: form.attr('action'), // Use the form's action attribute (submit-form.php)
            data: formData,
            processData: false, // Don't process the data
            contentType: false,
            dataType: 'json', // Don't set the content type
            success: function(res) {
                // If response is success (1)
                if (res.type == 'success') {
                    Swal.fire({
                        title: 'Thank you!',
                        text: res.message,
                        icon: 'success',
                        timer: 3000
                    });

                    // Clear the form fields
                    form[0].reset();

                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: res.error,
                        icon: 'error',
                        timer: 3000
                    });
                }
            },
            error: function(xhr, status, error) {
                // If AJAX request fails
                console.error('AJAX Error:', status, error);
                Swal.fire({
                    title: 'Error!',
                    text: 'There was an issue with the server. Please try again later.',
                    icon: 'error',
                    timer: 3000
                });
            }
        });
    });
});
</script>

<script>
document.getElementById('openModalButton').addEventListener('click', function() {

    var modalElement = document.getElementById('exampleModal');

    var modal = new bootstrap.Modal(modalElement);
    modal.show();
});
</script>


</body>

</html>