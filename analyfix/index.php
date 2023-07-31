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
  <?php include 'header.php'; ?>
</head>
<body>
  

  
    </div>
    <a class="cta-btn" href="#contact">Contact Us</a>
  </section>

  <section id="contact">
    <h2>Contact Us</h2>
    <!-- Add your contact form or contact information here -->
  </section>

  <?php include 'footer.php'; ?>
  
  <script>
     // Smooth scroll to the Contact section when clicking on the "Contact Us" button
     document.querySelector('.cta-btn').addEventListener('click', function (event) {
      event.preventDefault();
      const contactSection = document.getElementById('contact');
      contactSection.scrollIntoView({ behavior: 'smooth' });
    });
  </script>
  </script>
</body>
</html>
