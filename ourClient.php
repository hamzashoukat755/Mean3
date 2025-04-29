<head>
    <link rel="stylesheet" href="assets/css/ourClient.css">    
</head
<?php include 'includes/header.php';?>

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
$sql_first = "SELECT name, logo_url, website_url FROM clients";
$result = $conn->query($sql_first);
?>

<body>

    <div class="header">
        <h1>Our Clients</h1>
    </div>

    <div class="news-container">
        <div class="news-grid">
        <?php
            $count = 0;
            foreach ($result as $result) {
                if ($count > 0) {
                    // Close previous news-cards div and start a new one every 3 blogs
                    echo '</div><div class="news-cards" id="newsCards">';
                }
            ?>
            <div class="news-item">
                <a href="<?php echo $result['website_url']; ?>" target="_blank">
                    <img src="<?php echo ($result['logo_url']); ?>" alt="<?php echo ($result['name']); ?>">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

<?php include 'includes/footer.php';?>