<!DOCTYPE html>
<html>
<head>
  <style>
    header {
      text-align: center;
      padding: 20px;
    }

    .header-nav {
      display: inline-block;
      margin-bottom: 20px;
    }

    .header-nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .header-nav li {
      display: inline-block;
      margin-right: 20px;
      position: relative; /* Add this to make the dropdown work */
    }

    .header-nav li:last-child {
      margin-right: 0;
    }

    .header-nav a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
      padding: 5px 10px;
      border: 2px solid #333;
      border-radius: 5px;
    }

    .header-nav a:hover {
      background-color: #333;
      color: #fff;
    }

    /* Dropdown styles */
    .header-nav ul.dropdown-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #f9f9f9;
      border: 1px solid #ccc;
      padding: 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add box shadow for a subtle effect */
    }

    .header-nav li:hover ul.dropdown-content {
      display: block;
    }

    .header-nav li.dropdown li {
      display: block;
    }

    .header-nav li.dropdown li a {
      padding: 10px;
      color: #333;
      text-decoration: none;
      display: block;
    }

    .header-nav li.dropdown li a:hover {
      background-color: #f2f2f2;
    }

    /* Additional styles for better appearance */
    .header-nav li.dropdown:hover > a {
      background-color: #333; /* Change the background color of the main link on hover */
      color: #fff;
    }

    .header-nav li.dropdown li:last-child a {
      border-bottom-left-radius: 5px; /* Round the bottom left corner of the last item in the dropdown */
      border-bottom-right-radius: 5px; /* Round the bottom right corner of the last item in the dropdown */
    }

    .dashboard-container {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
    }

    .dashboard-info {
      flex: 1;
      text-align: center;
    }

    .dashboard-image {
      flex: 1;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <nav class="header-nav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="services.php">Services</a>
          <ul class="dropdown-content">
            <li><a href="predictive_modelling.php">Predictive Modelling</a></li>
            <li><a href="data_cleaning.php">Data Cleaning</a></li>
            <li><a href="big_data.php">Big Data</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#about">About Us</a>
          <ul class="dropdown-content">
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">Mission and Vision</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="dashboard-container">
      <div class="dashboard-info">
        <h1>AnalyFix</h1>
        <p>Empowering businesses with data-driven solutions</p>
      </div>
      <div class="dashboard-image">
        <img src="plc.jpg" alt="Dashboard Image">
      </div>
    </div>
  </header>
</body>
</html>
