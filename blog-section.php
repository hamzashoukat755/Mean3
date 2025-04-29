<?php include 'includes/header.php' ?>
<?php
error_reporting(E_ALL & ~E_WARNING); // Show all errors except warnings
ini_set('display_errors', 1);        // Ensure errors are displayed
?>
<?php
// Database connection settings
include 'db.php';

if ($conn->connect_error) {
    echo "<p style='text-align: center; color: #ff0000;'>Database connection failed: " . $conn->connect_error . "</p>";
    exit();
}
// Fetch the first video for the featured section
$sql_first = "SELECT id, title, image_url, content FROM blogs ORDER BY created_at DESC";
$result = $conn->query($sql_first);
?>

<body>
    <section class="news-section">
        <h2>Mean3 Blog</h2>
        <p>We’re proud to be consistently recognized as the fastest-growing technology company, earning a variety of awards and recognition in several key areas.</p>
        
        <div class="news-cards" id="newsCards">
            <?php
            $count = 0;
            foreach ($result as $result) {
                if ($count % 3 == 0 && $count > 0) {
                    // Close previous news-cards div and start a new one every 3 blogs
                    echo '</div><div class="news-cards" id="newsCards">';
                }
            ?>
                <div class="news-card">
                    <img src="<?php echo ($result['image_url']); ?>" alt="<?php echo ($result['title']); ?>">
                    <a href="blog-detail.php?id=<?php echo $result['id']; ?>"><?php echo ($result['title']); ?></a>
                </div>
            <?php
                $count++;
            }
            ?>
        </div>
    </section>
</body>

<?php
// Close the database connection
$conn = null;
?>
<?php include 'includes/footer.php' ?>