<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Footer Header Start -->
                <div class="footer-header">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Ready to work with us?</h2>
                        <p>Join us to experience cutting-edge aluminum and glass solutions that drive innovation and lasting success.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Footer Contact Circle Start -->
                    <div class="footer-contact-circle">
                        <img src="images/contact-now-circle.svg" alt="">
                    </div>
                    <!-- Footer Contact Circle End -->
                </div>
                <!-- Footer Header End -->
            </div>

            <div class="col-lg-6 col-md-12">
                <!-- About Footer Start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <img src="images/footer-logo.svg" alt="">
                    </div>
                    <!-- Footer Logo End -->

                    <!-- About Footer Content Start -->
                    <div class="about-footer-content">
                        <p>We are committed to providing top-quality aluminum and glass solutions.</p>
                    </div>
                    <!-- About Footer Content End -->

                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div>
                <!-- About Footer End -->
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>quick links</h3>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="about.html">about us</a></li>
                        <li><a href="services.html">services</a></li>
                        <li><a href="blog.html">blog</a></li>
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>Security</h3>
                    <ul>
                        <li><a href="#">terms & conditions</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">help</a></li>
                        <li><a href="contact.html">contact us</a></li>
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-2 col-md-4 col-12">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>Contact</h3>
                    <ul>
                        <li>+91 123654789</li>
                        <li>info@aluglass.com</li>
                        <li>520, West Valley, Amin and Minim</li>
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>
        </div>

        <!-- Footer Copyright Section Start -->
        <div class="footer-copyright">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright © 2024 Aluminum & Glass Solutions. All Rights Reserved.</p>
                    </div>
                    <!-- Footer Copyright End -->
                </div>
            </div>
        </div>
        <!-- Footer Copyright Section End -->
    </div>
</footer>

<!-- Footer End -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener("scroll", function() {
            var navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    });

    window.addEventListener("scroll", function() {
        var navbar = document.querySelector(".navbar");

        if (window.scrollY > 50) {
            navbar.classList.add("scrolled"); // Hide navbar on scroll
        } else {
            navbar.classList.remove("scrolled"); // Show navbar when at top
        }
    });


    document.addEventListener("DOMContentLoaded", function() {
        var toggleButton = document.querySelector(".navbar-toggler");
        var navbarCollapse = document.querySelector(".navbar-collapse");
        var body = document.body;

        toggleButton.addEventListener("click", function() {
            if (navbarCollapse.classList.contains("show")) {
                body.classList.remove("menu-open");
            } else {
                body.classList.add("menu-open");
            }
        });
    });


    // Scroll animation for multiple headings
    document.addEventListener("DOMContentLoaded", function() {
        const headings = document.querySelectorAll(".heading-container");

        function revealHeadings() {
            const windowHeight = window.innerHeight;

            headings.forEach((heading) => {
                const headingPos = heading.getBoundingClientRect().top;

                if (headingPos < windowHeight - 50 && headingPos > 0) {
                    heading.classList.add("show");
                } else {
                    heading.classList.remove("show"); // Remove animation on scroll up
                }
            });
        }

        window.addEventListener("scroll", revealHeadings);
        revealHeadings(); // Call on page load
    });


    document.addEventListener("DOMContentLoaded", function() {
        const listBox = document.querySelector(".services-list-box");
        const items = document.querySelectorAll(".service-item");

        // Duplicate items for smooth loop effect
        items.forEach(item => {
            let clone = item.cloneNode(true);
            listBox.appendChild(clone);
        });

        let index = 0;
        let itemWidth = items[0].offsetWidth + 30; // Service item width + gap

        function slide() {
            index++;
            listBox.style.transform = `translateX(-${index * itemWidth}px)`;

            // Reset when last item reaches end
            if (index >= items.length) {
                setTimeout(() => {
                    listBox.style.transition = "none";
                    index = 0;
                    listBox.style.transform = "translateX(0)";
                    setTimeout(() => {
                        listBox.style.transition = "transform 1s ease-in-out";
                    });
                }, 1000);
            }
        }

        setInterval(slide, 3000); // Adjust speed here (slower animation)
    });
</script> <!-- Jquery Library File -->
<script src="<?= $env['APP_URL'] ?>assets/js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap js file -->
<script src="<?= $env['APP_URL'] ?>assets/js/bootstrap.min.js"></script>
<!-- Validator js file -->
<script src="<?= $env['APP_URL'] ?>assets/js/validator.min.js"></script>
<!-- SlickNav js file -->
<script src="<?= $env['APP_URL'] ?>assets/js/jquery.slicknav.js"></script>
<!-- Swiper js file -->
<script src="<?= $env['APP_URL'] ?>assets/js/swiper-bundle.min.js"></script>
<!-- Counter js file -->
<script src="<?= $env['APP_URL'] ?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?= $env['APP_URL'] ?>assets/js/jquery.counterup.min.js"></script>
<!-- Isotop js file -->
<script src="<?= $env['APP_URL'] ?>assets/js/isotope.min.js"></script>
<!-- Magnific js file -->
<script src="<?= $env['APP_URL'] ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- SmoothScroll -->
<script src="<?= $env['APP_URL'] ?>assets/js/SmoothScroll.js"></script>
<!-- Parallax js -->
<script src="<?= $env['APP_URL'] ?>assets/js/parallaxie.js"></script>
<!-- MagicCursor js file -->
<script src="<?= $env['APP_URL'] ?>assets/js/gsap.min.js"></script>
<script src="<?= $env['APP_URL'] ?>assets/js/magiccursor.js"></script>
<!-- Text Effect js file -->
<script src="<?= $env['APP_URL'] ?>assets/js/SplitText.js"></script>
<script src="<?= $env['APP_URL'] ?>assets/js/ScrollTrigger.min.js"></script>
<!-- YTPlayer js File -->
<script src="<?= $env['APP_URL'] ?>assets/js/jquery.mb.YTPlayer.min.js"></script>
<!-- Wow js file -->
<script src="<?= $env['APP_URL'] ?>assets/js/wow.js"></script>
<!-- Main Custom js file -->
<script src="<?= $env['APP_URL'] ?>assets/js/function.js"></script>
</body>

<!-- Mirrored from demo.awaikenthemes.com/html-preview/toplax/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2025 08:21:47 GMT -->

</html>