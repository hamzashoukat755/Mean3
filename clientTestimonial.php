<body>
    <section class="video-slider-section">
        <div class="video-slider-container">
            <h2>Explore <span>MEAN3</span> Videos</h2>
            <div class="slider">
                <button class="prev">❮</button>
                <div class="slides">
                    <?php
                    // Database connection settings
                    include 'db.php';

                    // Check connection
                    if ($conn->connect_error) {
                        echo "<p style='text-align: center; color: #ff0000;'>Database connection failed: " . $conn->connect_error . "</p>";
                    } else {
                        // Fetch videos from the database
                        $sql = "SELECT title, thumbnail_url FROM videos ORDER BY created_at DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<div class='slide'>";
                                echo "<a href='video-all.php'>";
                                echo "<img src='" . htmlspecialchars($row['thumbnail_url']) . "' alt='" . htmlspecialchars($row['title']) . "'>";
                                echo "<p>" . htmlspecialchars($row['title']) . "</p>";
                                echo "</a>";
                                echo "</div>";
                            }
                        } else {
                            echo "<p style='text-align: center; color: #333;'>No videos found.</p>";
                        }

                        // Close the connection
                        $conn->close();
                    }
                    ?>
                </div>
                <button class="next">❯</button>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelector('.slides');
            const slideCount = document.querySelectorAll('.slide').length;
            let currentIndex = 0;

            function updateSlider() {
                slides.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            // Auto-slide on page load
            setInterval(() => {
                currentIndex = (currentIndex === slideCount - 1) ? 0 : currentIndex + 1;
                updateSlider();
            }, 5000);

            // Manual navigation
            document.querySelector('.prev').addEventListener('click', () => {
                currentIndex = (currentIndex === 0) ? slideCount - 1 : currentIndex - 1;
                updateSlider();
            });

            document.querySelector('.next').addEventListener('click', () => {
                currentIndex = (currentIndex === slideCount - 1) ? 0 : currentIndex + 1;
                updateSlider();
            });
        });
    </script>
</body>