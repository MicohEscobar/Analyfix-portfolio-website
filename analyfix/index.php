<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AnalyFix</title>
  <link rel="stylesheet" href="home_css.css">

</head>
<body>
  <?php include 'header.php'; ?>

  <section class="services">
    <h4>Our Services</h4>
    <div class="service-item">Data Science Consultancy
      <h3>Data Analysis and Visualization</h3>
      <p>Extracting valuable insights from data and presenting them visually.</p>
    </div>
    <div class="service-item">
      <h3>Predictive Modeling</h3>
      <p>Using machine learning to forecast future trends and make predictions.</p>
    </div>
    <div class="service-item">
      <h3>Data Cleaning and Preprocessing</h3>
      <p>Ensuring data quality and integrity for accurate analysis.</p>
    </div>
    <div class="service-item">
      <h3>Big Data Analytics</h3>
      <p>Analyzing large-scale datasets for actionable insights.</p>
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
