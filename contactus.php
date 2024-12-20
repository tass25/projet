<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Campy</title>
    </head>
<body>
    <!-- Navbar -->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <img src="img/logo.png" alt="Logo" class="logo">
        <nav class="navbar">
        <a href="index.php"> home</a>
        <a href="index.php"> about us</a>
        <a href="contactus.php"> contact us</a>
        <a href="index.php">destinations </a>
        <a href="index.php"> services</a>
        <a href="index.php"> gallery </a>
        <a href="index.php"> reviews </a>
        </nav>
        <a id="login-btn1" href="login.html" class="btn">Login</a>
      </header>
      <!-- Background Image -->
      <div class="background-image"></div>
      <!-- Form -->    
      <div class="contact-container">
      <h2>Contact Us</h2>
      <form id="contactForm" class="form-horizontal" action="complaint.php" method="POST">
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="obj">Object:</label>
                <input type="text" name="object" placeholder="Object" required>
            </div>
            <div class="form-group">
                <label for="msg">Message:</label>
                <textarea type="text" name="message" placeholder="Write here..." required style="height:200px"></textarea>
            </div>
            <br>
            <div class="button-container">
                <button id="login-btn" type="submit">Send</button>
            </div>
        </form>
        <span class="close-btn" id="close-contact-popup">&times;</span> 
    </div>
</div>
<!-- Footer -->
<section class="footer">
    <div class="box-container">
      <div class="box">
        <div class="share">
          <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
          <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
          <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
        </div>
      </div>
      <div class="box">
        <a href="index.php" class="links">Home</a>
        <a href="index.php" class="links">About Us</a>
        <a href="contactus.php" class="links">Contact Us</a>
        <a href="index.php" class="links">Destinations</a>
        <a href="index.php" class="links">Services</a>
        <a href="index.php" class="links">Gallery</a>
        <a href="index.php" class="links">Reviews</a>
      </div>
      <div class="box">
        <h3>Contact Info</h3>
        <p><i class="fas fa-map"></i> Ariana, Tunisia</p>
        <p><i class="fas fa-phone"></i> +216 22 222 222</p>
        <p><i class="fas fa-envelope"></i> travels@gmail.com</p>
        <p><i class="fas fa-clock"></i> 7:00am - 10:00pm</p>
      </div>
    </div>
    <div class="credit">
      Created by <span>Tesnime, Bochra and Saila</span> | All rights reserved!
    </div>
</section>
<script src="script.js" defer></script>
</body>
</html>
