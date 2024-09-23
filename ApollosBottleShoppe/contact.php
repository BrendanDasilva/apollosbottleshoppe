<?php include 'header.php'; ?>

<div class="visual-purpose-message">
  <p>This page is for visual purposes only, no functionality has been implemented.</p>
</div>

<div class="contact-container">
    <img src="assets/images/apollologo.png" alt="Apollo's Logo" class="logo" />

    <div class="contact-form">
        <form action="process-feedback.php" method="post">
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="text" name="subject" placeholder="Subject" required><br>
            <textarea name="feedback" placeholder="Your feedback" required></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>