<head>
    <link rel="stylesheet" href="assets/css/viewDetail.css">
</head>
<?php include 'includes/header.php' ?>
<?php
error_reporting(E_ALL & ~E_WARNING); // Show all errors except warnings
ini_set('display_errors', 1);        // Ensure errors are displayed

// Database connection
include 'db.php';

if ($conn->connect_error) {
    echo "<p style='text-align: center; color: #ff0000;'>Database connection failed: " . $conn->connect_error . "</p>";
    exit();
}
// Fetch the first video for the featured section
$sql_all = "SELECT title, video_file_url, description FROM videos ORDER BY created_at DESC";
$result = $conn->query($sql_all);
?>
<body>
    <div class="header">
        <h1>Mean3 News</h1>
    </div>


    <div class="news-container">    
        <?php foreach ($result as $news): ?>
            <div class="news-item">
                <video controls>
                    <source src="<?php echo ($news['video_file_url']); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="news-content">
                    <h2><?php echo ($news['title']); ?></h2>
                    <p><?php echo ($news['description']); ?></p>
                    <div class="news-meta">
                        <span class="year"><?php echo ($news['year']); ?></span>
                    </div>
                </div>
            </div>    
        <?php endforeach; ?>    
    </div>
</body>
<?php include 'includes/footer.php' ?>