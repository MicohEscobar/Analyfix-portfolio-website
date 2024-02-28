<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AnalyFix</title>
  <link rel="stylesheet" href="home_css.css">
  <style>
        /* Add this CSS to change the color of linked titles */
        .header-nav a {
            color:  /* Replace #FF4500 with the desired color code */
        }
    </style>
    <header>
  <?php include 'header.php'; ?>
      </header>
</head>
<body>
  



  <section id="contact">
    <h2>Contact Us</h2>
    <!-- Add your contact form or contact information here -->
  </section>

 
  
  <script>
     // Smooth scroll to the Contact section when clicking on the "Contact Us" button
     document.querySelector('.cta-btn').addEventListener('click', function (event) {
      event.preventDefault();
      const contactSection = document.getElementById('contact');
      contactSection.scrollIntoView({ behavior: 'smooth' });
    });
  </script>
  
</body>
<?php include 'footer.php'; ?>
</html>
