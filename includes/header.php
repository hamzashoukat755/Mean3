<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mean3 Clone</title>
  <link rel="stylesheet" href="assets/css/navStyle.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/services.css"> 
  <link rel="stylesheet" href="assets/css/news.css"> 
  <link rel="stylesheet" href="assets/css/review.css"> 
  <link rel="stylesheet" href="assets/css/footer.css"> 
  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="stylesheet" href="assets/css/divider.css">
  <link rel="stylesheet" href="assets/css/clientTestimonial.css">
  <link rel="stylesheet" href="assets/css/about.css">
  <link rel="stylesheet" href="assets/css/aboutTeam.css">
  <link rel="stylesheet" href="assets/css/aboutVision.css">
  <link rel="stylesheet" href="assets/css/aboutOur.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="logo">MEAN<span>3</span></div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="#">Services</a>
                <div class="dropdown">
                    <div class="dropdown-content">
                        <div class="dropdown-column">
                            <h4>Ecommerce Development</h4>
                            <ul>
                                <li><a href="#">Shopify</a></li>
                                <li><a href="#">Shopify Plus</a></li>
                                <li><a href="#">Magento</a></li>
                                <li><a href="#">BigCommerce</a></li>
                                <li><a href="#">WooCommerce</a></li>
                            </ul>
                        </div>
                        <div class="dropdown-column">
                            <h4>Web/App Development</h4>
                            <ul>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">Mobile App Development</a></li>
                                <li><a href="#">Game Design & Development</a></li>
                                <li><a href="#">ERP</a></li>
                                <li><a href="#">Hosting & Cloud Services</a></li>
                                <li><a href="#">Plugin & App Development</a></li>
                            </ul>
                        </div>
                        <div class="dropdown-column">
                            <h4>Digital Marketing</h4>
                            <ul>
                                <li><a href="#">Performance Marketing</a></li>
                                <li><a href="#">TikTok Marketing</a></li>
                                <li><a href="#">SEO</a></li>
                                <li><a href="#">Influencer Marketing</a></li>
                                <li><a href="#">Social Media Marketing</a></li>
                                <li><a href="#">Email Marketing</a></li>
                                <li><a href="#">Conversion Rate Optimization</a></li>
                            </ul>
                        </div>
                        <div class="dropdown-column">
                            <h4>Graphic Designing</h4>
                            <ul>
                                <li><a href="#">Logo & Branding</a></li>
                                <li><a href="#">Print Design & Service</a></li>
                                <li><a href="#">Product & Merchandise</a></li>
                                <li><a href="#">Banners & Advertisement</a></li>
                                <li><a href="#">UI/UX Design</a></li>
                            </ul>
                        </div>
                        <div class="dropdown-column">
                            <h4>Other</h4>
                            <ul>
                                <li><a href="#">CCTV Surveillance</a></li>
                                <li><a href="#">AI in Ecommerce</a></li>
                                <li><a href="#">Virtual Assistant</a></li>
                            </ul>
                            <h4>Staff Augmentation Services</h4>
                            <ul>
                                <li><a href="#">Project Outsourcing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="#">Portfolio</a>
                <div class="dropdown">
                    <div class="dropdown-content">
                        <div class="dropdown-column">
                            <ul>
                                <li><a href="ourClient.php">Our Clients</a></li>
                                <li><a href="clientTestimonialDetail.php">Client Testimonial</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="blog-section.php">Blogs</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <button class="quote-btn" onclick="document.location='contact.php'">Free Quote</button>
        <div class="menu-icon" onclick="toggleMenu()">☰</div>
    </nav>

    <section class="header-section">
        <div class="header-content">
            <h1>We Deliver Results</h1><br></br>
            <p>For Hundreds of Successful Businesses Worldwide</p>
            <div>
                <a href="ourClient.php"><button class="portfolio-btn">See Portfolio</button></a>
            </div>
        </div>
    </section>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/+923368272919" target="_blank" class="whatsapp-btn">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width: 30px; height: 30px;">
    </a>

    <!-- Back-to-Top Button -->
    <button class="back-to-top-btn" onclick="scrollToTop()">↑</button>

    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');

            const dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(dropdown => {
                const parentLi = dropdown.parentElement;
                parentLi.addEventListener('click', () => {
                    parentLi.classList.toggle('active');
                });
            });
        }

        // Navbar scroll behavior
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const headerHeight = document.querySelector('.header-section').offsetHeight;
            
            if (window.scrollY > headerHeight) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Show/hide back-to-top button
            const backToTopBtn = document.querySelector('.back-to-top-btn');
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });

        // Scroll to top function
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>