<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - AnalyFix</title>
    <!-- Link your CSS file if you have one for this page -->
    <!-- <link rel="stylesheet" href="path/to/your/css/file.css"> -->
    <link rel="stylesheet" href="home_css.css">
</head>

<body>
    <header>
    <?php include 'header.php'; ?>
    </header>

    <section class="services">
        <h1>What we offer</h1>
        <div class="service-item">
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
    </section>

    <footer>
        <!-- Your footer content here -->
        <div class="container">
            <h3>Stay Updated</h3>
            <p>Subscribe to our newsletter for the latest data science insights.</p>
            <form id="subscribe-form" action="subscribe.php" method="post">
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="company">Company Name:</label>
                    <input type="text" id="company" name="company" required>
                </div>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </footer>
</body>

</html>
