<?php include 'includes/header.php'; ?>
<?php
error_reporting(E_ALL & ~E_WARNING); // Show all errors except warnings
ini_set('display_errors', 1);        // Ensure errors are displayed
?>
<body>
    <div class="header">
        <h1>Contact Us</h1>
    </div>
    <section class="contact-section">
        <div class="contact-container">
            <form id="contactForm" class="contact-form" method="POST" action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                    <span class="error-message" id="name-error">Name is required</span>
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" id="company" name="company">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <span class="error-message" id="email-error">Email is required</span>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" required>
                    <span class="error-message" id="phone-error">Phone is required</span>
                </div>
                <div class="form-group">
                    <label for="services">Needed Services</label>
                    <select id="services" name="services" required>
                        <option value="">Select Option</option>
                        <option value="ecommerce">Ecommerce Website</option>
                        <option value="web-dev">Web Development</option>
                        <option value="mobile-app">Mobile App Development</option>
                        <option value="digital-marketing">Digital Marketing</option>
                        <option value="graphic-design">Graphic Designing</option>
                    </select>
                    <span class="error-message" id="services-error">Please select a service</span>
                </div>
                <div class="form-group">
                    <label for="budget">Budget</label>
                    <select id="budget" name="budget">
                        <option value="">Select Option</option>
                        <option value="under-5k">Under $5,000</option>
                        <option value="5k-10k">$5,000 - $10,000</option>
                        <option value="10k-20k">$10,000 - $20,000</option>
                        <option value="above-20k">Above $20,000</option>
                    </select>
                </div>
                <div class="form-group full-width">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                    <span class="error-message" id="message-error">Message is required</span>
                </div>
                <div class="recaptcha">
                    <label>
                        <input type="checkbox" id="recaptcha" name="recaptcha">
                        I'm not a robot
                        <span style="margin-left: 10px; font-size: 12px; color: #666;">reCAPTCHA <br> Privacy - Terms</span>
                    </label>
                </div>
                <button type="submit" class="submit-btn">Get a Quote Now!</button>
                <div class="success-message" id="successMessage">Order successfully done</div>
                <div class="server-error-message" id="serverErrorMessage"></div>
            </form>
        </div>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const requiredFields = document.querySelectorAll('#contactForm [required]');
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
        $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
        $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
        $services = isset($_POST['services']) ? htmlspecialchars(trim($_POST['services'])) : '';
        $company = isset($_POST['company']) ? htmlspecialchars(trim($_POST['company'])) : '';
        $budget = isset($_POST['budget']) ? htmlspecialchars(trim($_POST['budget'])) : '';
        $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

        // Server-side validation
        if (empty($name) || empty($email) || empty($phone) || empty($services) || empty($message)) {
            $serverError = 'Please fill in all required fields.';
        } else {
                // Prepare and execute the SQL query
                  $sql1 = "INSERT INTO placeorder (name, email, phone, services, company, budget, message)
                            VALUES ('{$name}','{$email}','{$phone}','{$services}','{$company}','{$budget}','{$message}')";
                  if(mysqli_query($conn,$sql1)){
                    header("Location: contact.php");
                    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Place Order.</p>";
                  }else{
                    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
                  }
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
            document.getElementById('contactForm').reset();
        <?php endif; ?>
    </script>
</body>
<?php include 'includes/footer.php'; ?>