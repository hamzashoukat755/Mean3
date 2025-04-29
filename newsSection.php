<body>
    <section class="news-section">
        <h2>News</h2>
        <p>We’re proud to be consistently recognized as the fastest-growing technology company, earning a variety of awards and recognition in several key areas.</p>
        <div class="news-slider">
            <div class="news-cards" id="newsCards">
                <div class="news-card">
                    <img src="assets/images/news1.jpg" alt="News 1">
                    <a href="news-all.php">Mean3 Was Featured In Dawn.com As The Pakistan's First IT Company To Takeover Times Square</a>
                </div>
                <div class="news-card">
                    <img src="assets/images/news2.jpg" alt="News 2">
                    <a href="news-all.php">Shopify invites Mean3 to NYC as one of the top 15 high-value agencies around the world</a>
                </div>
                <div class="news-card">
                    <img src="assets/images/news3.jpg" alt="News 3">
                    <a href="news-all.php">Mean3 Was Featured In Startup Pakistan As One Of The Best Shopify Agency in Pakistan</a>
                </div>
                <div class="news-card">
                    <img src="assets/images/news4.jpg" alt="News 4">
                    <a href="news-all.php">Mean3 Is The Proud Team Owner In Dhoraji Super League'21</a>
                </div>
                <div class="news-card">
                    <img src="assets/images/news5.jpg" alt="News 5">
                    <a href="news-all.php">Mean3 Wins Fastest Growing Brand Of the Year - BOYA'21</a>
                </div>
                <div class="news-card">
                    <img src="assets/images/news6.jpg" alt="News 6">
                    <a href="news-all.php">Startup Pakistan Features Bluebird Paints' Partnership with Mean3 for Comprehensive Digital Transformation</a>
                </div>
            </div>
            <div class="slider-controls">
                <button onclick="prevSlide()">❮</button>
                <button onclick="nextSlide()">❯</button>
            </div>
        </div>
    </section>

    <script>
        let currentIndex = 0;
        const cards = document.querySelectorAll('.news-card');
        const totalCards = cards.length;
        const cardsContainer = document.getElementById('newsCards');

        function updateSlider() {
            const cardWidth = cards[0].offsetWidth + 30; // Including padding
            cardsContainer.style.transform = `translateX(${-currentIndex * cardWidth}px)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalCards;
            updateSlider();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalCards) % totalCards;
            updateSlider();
        }

        // Adjust slider on window resize
        window.addEventListener('resize', updateSlider);
    </script>
</body>