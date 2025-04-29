<body>
    <footer class="footer-section">
        <!-- First Row: Office Locations -->
        <div class="footer-row offices-row">
            <div class="office">
                <h5>USA Office</h5>
                <div class="clock" id="usaTime"></div>
                <p>info@mean3.com</p>
                <p>447 Broadway, 2nd Floor Suite #570, New York 10013, United States</p>
            </div>
            <div class="office">
                <h5>UAE Office</h5>
                <div class="clock" id="uaeTime"></div>
                <p>info@mean3.com</p>
                <p>20K 58 015 3957, IFZA Business Park - Dubai Silicon Oasis, Dubai, United Arab Emirates</p>
            </div>
            <div class="office">
                <h5>PAK Office</h5>
                <div class="clock" id="pakTime"></div>
                <p>info@mean3.com</p>
                <p>2nd Floor, 48-B Imran Shah Rd, Mohammad Ali Society (M.A.C.H.S), Karachi</p>
            </div>
        </div>

        <!-- Second Row: Logo, Information, Services, Partners -->
        <div class="footer-row info-row">
            <div class="footer-column logo-column">
                <img src="assets/images/meanLogo.JPG" alt="Mean3 Logo">
                <p>We provide all kinds of IT Solutions by consistently pushing ourselves and our expertise to the edge.</p>
            </div>
            <div class="footer-column">
                <h4>Information</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="ourClient.php">Our Clients</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="influencer.php">Influencer Registration Form</a></li>
                    <li><a href="blog-section.php">Blogs</a></li>
                    <li><a href="video-all.php">Client Testimonials</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Mobile App Development</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Search Engine Optimization</a></li>
                    <li><a href="#">Graphic Designing</a></li>
                    <li><a href="#">Game Design & Development</a></li>
                    <li><a href="#">Virtual Assistant</a></li>
                    <li><a href="#">Hosting & Cloud Services</a></li>
                </ul>
            </div>
            <div class="footer-column partners-column">
                <img src="assets/images/footer3.JPG" alt="Shopify Experts">
                <img src="assets/images/footer2.JPG" alt="Clutch">
                <img src="assets/images/footer1.JPG" alt="Good Firms">
                <img src="assets/images/footer5.JPG" alt="Pasha">
            </div>
        </div>

        <!-- Copyright and Social Media Row -->
        <div class="copyright-row">
            <p>© 2025 Mean3. All rights reserved.</p>
            <div class="social-icons">
                <a href="https://web.facebook.com/Mean3.web/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/@Mean3" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/mean3.pvt.ltd/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/mean3" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <script>
        function updateClocks() {
            const usaTime = new Date().toLocaleTimeString('en-US', { timeZone: 'America/New_York', hour12: true });
            document.getElementById('usaTime').textContent = usaTime;

            const uaeTime = new Date().toLocaleTimeString('en-US', { timeZone: 'Asia/Dubai', hour12: true });
            document.getElementById('uaeTime').textContent = uaeTime;

            const pakTime = new Date().toLocaleTimeString('en-US', { timeZone: 'Asia/Karachi', hour12: true });
            document.getElementById('pakTime').textContent = pakTime;
        }

        setInterval(updateClocks, 1000);
        updateClocks();
    </script>
</body>
</html>