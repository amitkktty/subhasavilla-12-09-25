<?php include 'header.php'; ?>

<!-- Inner Banner -->
<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Contact Us</h3>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevrons-right'></i>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>
<!-- Inner Banner End -->

<!-- Contact Form Area -->
<div class="contact-form-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Let's Send Us a Message Below</h2>
        </div>

        <div class="row pt-45">
            <div class="col-lg-4">
                <div class="contact-info mr-20">
                    <span>Contact Info</span>
                    <h2>Let's Connect With Us</h2>
                    <p>Stay in touch with us for updates, support, or inquiries. We are just a call, message, or email
                        away and look forward to building a strong relationship with you.</p>
                    <ul>
                        <li>
                            <div class="content">
                                <i class='bx bx-phone-call'></i>
                                <h3>Phone Number</h3>
                                <a href="tel:7294050442">+91- 7294050442</a>
                            </div>
                        </li>

                        <li>
                            <div class="content">
                                <i class='bx bxs-map'></i>
                                <h3>Address</h3>
                                <span>House No-A, Workstudio Building, Near Chandan Hero Showroom, Kankarbagh
                                    Patna-20</span>
                            </div>
                        </li>

                        <li>
                            <div class="content">
                                <i class='bx bx-message'></i>
                                <h3>Contact Info</h3>
                                <a href=""><span class="__cf_email__"
                                        data-cfemail="f29a979e9e9db28697919a978adc919d9f">info@subhasavilla.com</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="contact-form">
                    <form class="apnaSubmitForm" action="submit-fom.php" method="POST">
                        <input type="hidden" name="form_type" value="contact">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Name <span>*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please Enter Your Name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Email <span>*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please Enter Your Email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number <span>*</span></label>
                                    <input type="text" name="phone_number" id="phone_number" required
                                        data-error="Please Enter Your Number" class="form-control"
                                        placeholder="Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Subject <span>*</span></label>
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                        data-error="Please Enter Your Subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Message <span>*</span></label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                                        required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb1" required>
                                    <label for="chb1">
                                        Accept <a href="terms-condition.php">Terms & Conditions</a> And <a
                                            href="privacy-policy.php">Privacy Policy.</a>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <button name="submit" type="submit" class="default-btn btn-bg-two border-radius-50">
                                    Send Message <i class='bx bx-chevron-right'></i>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form Area End -->

<!-- Map Area -->
<div class="map-area">
    <div class="container-fluid m-0 p-0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.113117641435!2d85.15062552423979!3d25.60115716522257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed59ceebe31cb7%3A0x377948aa6d206f04!2sAdmission%20helpline!5e0!3m2!1sen!2sin!4v1731404233425!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- Map Area End -->

<?php include 'footer.php'; ?>