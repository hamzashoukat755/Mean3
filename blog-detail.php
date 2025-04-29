<body>
    <section class="blog-detail-section">
        <?php
        // Include the database connection file
        require_once 'db.php';

        try {
            // Check if blog ID is provided
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $blog_id = (int)$_GET['id'];
                
                // Fetch the blog post
                $stmt = $pdo->prepare("SELECT title, image_url, content FROM blogs WHERE id = ?");
                $stmt->execute([$blog_id]);
                $blog = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($blog) {
                    $title = htmlspecialchars($blog['title']);
                    $image_url = htmlspecialchars($blog['image_url']);
                    $content = htmlspecialchars($blog['content']);
                    
                    echo "<h2>$title</h2>";
                    echo "<img src='$image_url' alt='$title'>";
                    echo "<p>$content</p>";
                } else {
                    echo "<p>Blog post not found.</p>";
                }
            } else {
                echo "<p>Invalid blog ID.</p>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
        <a href="blog-section.php" class="back-link">← Back to Blogs</a>
    </section>
</body>