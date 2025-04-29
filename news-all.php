<head>
    <link rel="stylesheet" href="assets/css/allNews.css">
</head>
<?php include 'includes/header.php' ?>
<?php
// Database connection
include 'db.php';

if ($conn->connect_error) {
    echo "<p style='text-align: center; color: #ff0000;'>Database connection failed: " . $conn->connect_error . "</p>";
    exit();
}
// Fetch the first video for the featured section
$sql_first = "SELECT id, title, description, image_url, year, created_at FROM news ORDER BY created_at DESC";
$result = $conn->query($sql_first);
?>
<body>
    <div class="header">
        <h1>Mean3 News</h1>
    </div>

    <div class="news-container">
        <?php foreach ($result as $news): ?>
            <div class="news-item">
                <img src="<?php echo htmlspecialchars($news['image_url']); ?>" alt="<?php echo htmlspecialchars($news['title']); ?>">
                <div class="news-content">
                    <h2><?php echo htmlspecialchars($news['title']); ?></h2>
                    <p><?php echo htmlspecialchars($news['description']); ?></p>
                    <a href="#">Read More</a>
                    <div class="news-meta">
                        <span class="year"><?php echo htmlspecialchars($news['year']); ?></span>
                        <span class="source"><?php echo htmlspecialchars($news['created_at']); ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
<?php include 'includes/footer.php' ?>