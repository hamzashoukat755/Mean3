<?php include 'includes/header.php'; 
error_reporting(E_ALL & ~E_WARNING); // Show all errors except warnings
ini_set('display_errors', 1);        // Ensure errors are displayed
?>

<head>
    <link rel="stylesheet" href="assets/css/clientTestimonialDetail.css">   
</head>
<body>
    <section class="hero-section">
        <div class="hero-content">
            <h2 style="color:red; text-align:center;">What Clients Have To Say About Mean3</h2>
            <p>We understand it’s difficult to select the most reliable agency for your first project. Also we understand the pain of moving to another agency after past bad experience. This is why we have curated our previous client experiences for you.</p>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="testimonial-left">
            <?php
            // Include the database connection file
            require_once 'db.php';

            try {
                // Fetch the first video for the featured section
                $sql_all = "SELECT title, thumbnail_url, video_file_url, description, video_count FROM videos WHERE section = 'left'";
                $left_videos = $conn->query($sql_all);
                foreach ($left_videos as $left_count) {
                    if (!empty($left_count['title'])) {
                        echo "<h2>" . ($left_count['title']) . "</h2>";
                    }
                    $videos_left = isset($left_count['video_count']) ? (int)$left_count['video_count'] : 0;
                    for ($i = 0; $i < $videos_left; $i++) {
                        if (!empty($left_count['thumbnail_url'])) {
                            echo '<div class="company-logo">';
                            echo '<img src="' . ($left_count['thumbnail_url']) . '" alt="Zashko Entertainment Logo">';
                           echo '</div>';
                        }
                        
                    }
                    if (!empty($left_count['description'])) {
                        echo "<p>" . ($left_count['description']) . "</p>";
                    }
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>
        </div>
        <div class="testimonial-right">
            <?php
            try {
                // Fetch video testimonials for the right section
                $sql_all = "SELECT title, thumbnail_url, video_file_url, description, video_count FROM videos WHERE section = 'right'";
                $right_video = $conn->query($sql_all);

                foreach ($right_video as $right_count) {
                    if (!empty($right_count['title'])) {
                        echo "<h2>" . ($right_count['title']) . "</h2>";
                    }
                    
                    // Display video placeholder (using the video_count from the video row)
                    $videos_right = isset($right_count['video_count']) ? (int)$right_count['video_count'] : 0;
                    for ($i = 0; $i < $videos_right; $i++) {
                        // Display the company logo and info (from Zashko Films)
                        if (!empty($right_count['thumbnail_url'])) {
                            echo '<div class="company-logo">';
                            echo '<img src="' . ($right_count['thumbnail_url']) . '" alt="Zashko Entertainment Logo">';
                            echo '</div>';
                        }
                        
                    }
                    if (!empty($right_count['description'])) {
                        echo '<div class="company-info">';
                        echo '<p>' . ($right_count['description']) . '</p>';
                        echo '</div>';
                    }
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>
        </div>
    </section>
    <section class="client-testimonials">
        <div class="client-grid">
            <?php
            try {
                // Fetch client testimonials
                $sql_first = "SELECT name, logo_url, website_url, description, read_more FROM clients";
                $result3 = $conn->query($sql_first);
                while ($client = $result3->fetch_assoc()) {
                    echo '<div class="client-card">';
                    echo '<div class="logo-circle">';
                    echo '<a href="' . htmlspecialchars($client['website_url']) . '" target="_blank">
                    <img src="' . htmlspecialchars($client['logo_url']) . '" alt="' . htmlspecialchars($client['name']) . ' Logo">
                    </a>';
                    echo '</div>';
                    
                    if ($client['read_more']) {
                        $content = $client['description']; // Full content
                        $shortContent = mb_substr($content, 0, 250); // First 50 characters
                        $uniqueId = uniqid('desc_');

                    }
                    ?>
                    <div id="<?php echo $uniqueId; ?>">
                        <span class="short"><?php echo htmlspecialchars($shortContent); ?>...</span>
                        <span class="full" style="display:none;"><?php echo htmlspecialchars($content); ?></span>

                        <?php if (mb_strlen($content) > 50): ?>
                        <a href="javascript:void(0);" onclick="toggleReadMore('<?php echo $uniqueId; ?>')">Read More</a>
                        <?php endif; ?>
                    </div>
                    <?php 
                    echo '<div class="client-name">' . htmlspecialchars($client['name']) . '</div>';
                    echo '</div>';
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>
        </div>
    </section>
</body>



<script>
function toggleReadMore(id) {
    const container = document.getElementById(id);
    const shortText = container.querySelector('.short');
    const fullText = container.querySelector('.full');
    shortText.style.display = 'none';
    fullText.style.display = 'inline';
    container.querySelector('a').style.display = 'none'; // Hide the "Read More" link
}
</script>

<?php include 'includes/footer.php'; ?>