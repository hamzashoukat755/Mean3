<?php include 'includes/header.php'; ?>
<?php
error_reporting(E_ALL & ~E_WARNING); // Show all errors except warnings
ini_set('display_errors', 1);        // Ensure errors are displayed
?>
<body>
    <div class="header">
        <h1><span style="color: black;">Influencer </span>Sign Up</h1>
    </div>
    <section class="contact-section">
        <div class="contact-container">
            <form id="influencerForm" class="contact-form" method="POST" action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                    <span class="error-message" id="name-error">Name is required</span>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" id="contact" name="contact">
                </div>
                <div class="form-group">
                    <label for="inst_hand">Instagram Handler</label>
                    <input type="text" id="inst_hand" name="inst_hand" required>
                    <span class="error-message" id="handler-error">Required</span>
                </div>
                <div class="form-group">
                    <label for="fb_page">Do you have facebook page? Mention</label>
                    <input type="text" id="fb_page" name="fb_page" required>
                    <span class="error-message" id="fbPage-error">Required</span>
                </div>
                <div class="form-group">
                    <label for="follow_insta">Number of followers on instagram</label>
                    <input type="number" id="follow_insta" name="follow_insta" required>
                    <span class="error-message" id="instaFollower-error">Required</span>
                </div>
                <div class="form-group">
                    <label for="likeFb">Number of page likes on facebook</label>
                    <input type="number" id="likeFb" name="likeFb" required>
                    <span class="error-message" id="likeFb-error">Required</span>
                </div>
                <div class="form-group">
                    <label for="positionFollower">Top position of you followers</label>
                    <input type="text" id="positionFollower" name="positionFollower" required>
                    <span class="error-message" id="posFollower-error">Required</span>
                </div>
                <div class="form-group">
                    <label for="ageFollower">Age range of your follower</label>
                    <input type="text" id="ageFollower" name="ageFollower" required>
                    <span class="error-message" id="age-error">Required</span>
                </div>
                <div class="form-group">
                    <label for="chargePost">Charges of static post?</label>
                    <input type="number" id="chargePost" name="chargePost" required>
                    <span class="error-message" id="chargePost-error">Required</span>
                </div>
                <div class="form-group">
                    <label for="chargeVideo">Charges of video?</label>
                    <input type="number" id="chargeVideo" name="chargeVideo" required>
                    <span class="error-message" id="chargeVideo-error">Required</span>
                </div>
                <div class="form-group">
                    <label for="typeBlog">What type of bloging you develop?</label>
                    <input type="text" id="typeBlog" name="typeBlog" required>
                    <span class="error-message" id="Blog-error">Required</span>
                </div>
                <div class="form-group">
                    <label for="storyView">Avergae story views?</label>
                    <input type="number" id="storyView" name="storyView" required>
                    <span class="error-message" id="views-error">Required</span>
                </div>
                <div class="recaptcha">
                    <label>
                        <input type="checkbox" id="recaptcha" name="recaptcha">
                        I'm not a robot
                        <span style="margin-left: 10px; font-size: 12px; color: #666;">reCAPTCHA <br> Privacy - Terms</span>
                    </label>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
                <div class="success-message" id="successMessage">Order successfully done</div>
                <div class="server-error-message" id="serverErrorMessage"></div>
            </form>
        </div>
    </section>

    <script>
        document.getElementById('influencerForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const requiredFields = document.querySelectorAll('#influencerForm [required]');
            let hasError = false;

            // Reset previous error states
            requiredFields.forEach(field => {
                field.classList.remove('error');
                const errorMessage = document.getElementById(`${field.id}-error`);
                if (errorMessage) {
                    errorMessage.style.display = 'none';
                }
            });

            document.getElementById('serverErrorMessage').style.display = 'none';

            // Check for empty required fields (client-side)
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('error');
                    const errorMessage = document.getElementById(`${field.id}-error`);
                    if (errorMessage) {
                        errorMessage.style.display = 'block';
                    }
                    hasError = true;
                }
            });

            // If no client-side errors, submit the form
            if (!hasError) {
                this.submit(); // Submit the form to the server
            }
        });
    </script>

    <?php
    include 'db.php'; 
    // Initialize variables
    $serverError = '';
    $success = false;

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
        $contact = isset($_POST['contact']) ? htmlspecialchars(trim($_POST['contact'])) : '';
        $inst_hand = isset($_POST['inst_hand']) ? htmlspecialchars(trim($_POST['inst_hand'])) : '';
        $fb_page = isset($_POST['fb_page']) ? htmlspecialchars(trim($_POST['fb_page'])) : '';
        $follow_insta = isset($_POST['follow_insta']) ? htmlspecialchars(trim($_POST['follow_insta'])) : '';
        $likeFb = isset($_POST['likeFb']) ? htmlspecialchars(trim($_POST['likeFb'])) : '';
        $positionFollower = isset($_POST['positionFollower']) ? htmlspecialchars(trim($_POST['positionFollower'])) : '';
        $ageFollower = isset($_POST['ageFollower']) ? htmlspecialchars(trim($_POST['ageFollower'])) : '';
        $chargePost = isset($_POST['chargePost']) ? htmlspecialchars(trim($_POST['chargePost'])) : '';
        $chargeVideo = isset($_POST['chargeVideo']) ? htmlspecialchars(trim($_POST['chargeVideo'])) : '';
        $typeBlog = isset($_POST['typeBlog']) ? htmlspecialchars(trim($_POST['typeBlog'])) : '';
        $storyView = isset($_POST['storyView']) ? htmlspecialchars(trim($_POST['storyView'])) : '';

        
        // Prepare and execute the SQL query
        $sql1 = "INSERT INTO influencer (name, contact, inst_hand, fb_page, follow_insta, likeFb, positionFollower, ageFollower, chargePost, chargeVideo, typeBlog, storyView)
                VALUES ('{$name}','{$contact}','{$inst_hand}','{$fb_page}','{$follow_insta}','{$likeFb}','{$positionFollower}','{$ageFollower}','{$chargePost}','{$chargeVideo}','{$typeBlog}','{$storyView}')";
        if(mysqli_query($conn,$sql1)){
        header("Location: influencer.php");
        echo "<p style='color:red;text-align:center;margin: 10px 0;'>Influencer Register.</p>";
        }else{
        echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
        }
    }      
    else {
        $serverError = 'Invalid request method. Please submit the form.';
    }
    ?>

    <script>
        // Display server-side messages
        <?php if ($serverError): ?>
            document.getElementById('serverErrorMessage').innerText = '<?php echo $serverError; ?>';
            document.getElementById('serverErrorMessage').style.display = 'block';
        <?php elseif ($success): ?>
            document.getElementById('successMessage').style.display = 'block';
            document.getElementById('influencerForm').reset();
        <?php endif; ?>
    </script>
</body>
<?php include 'includes/footer.php'; ?>