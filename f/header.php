<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: white;
    }
    header { 
      background-image: url('map.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      text-align: center;
      padding: 90px;
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
  background-color: transparent; /* Change the background color */
  padding: 0;
  margin: 0;
  border: none;
  /* box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1); /* Remove box shadow */
}

.header-nav li:hover ul.dropdown-content {
  display: inline-block;
}

.header-nav li.dropdown li {
  display: block;
  color: black; /* Change the text color */
  text-decoration: brown;
}

.header-nav li.dropdown li a {
  padding: 10px;
  color: #fff; /* Change the text color */
  text-decoration: burlywood;
  display: block;
  font-family: Arial, sans-serif; /* Change the font family */
}

.header-nav li.dropdown li a:hover {
  background-color: #555; /* Change the background color on hover */
}

/* Additional styles for better appearance */
.header-nav li.dropdown:hover > a {
  background-color: #555; /* Change the background color of the main link on hover */
  color: #fff;
}

.header-nav li.dropdown li:last-child a {
  border-bottom-left-radius: px;
  border-bottom-right-radius: 10px;
}

    .dashboard-info {
      flex: 1;
      text-align: center;
    }

    *.dashboard-image {
      flex: 1;
      text-align: center;
    }
     /* New styles for the title overlay */
     .dashboard-container {
      position: relative;
      display: flex; /* Use flexbox for alignment */
      width: 100%; /* Make the container span the full width */
      overflow: hidden; /* Hide any overflow */
    }

    .dashboard-title {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 2em;
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      z-index: 1;
      left: 20px; /* Adjust as needed for horizontal alignment */
    }

    .dashboard-image {
      flex: 1; /* Allow the image to take up remaining space */
    }

    .dashboard-image img {
      width: 100%; /* Make the image span the full width */
      height: auto; /* Maintain aspect ratio */
    }
  </style>
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
          <a href="about_us.php">About Us</a>
          <ul class="dropdown-content">
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">Mission and Vision</a></li>
          </ul>
        </li>
      </ul>
      
    </nav>
    <div class="dashboard-container">

      <div>
        
      </div>
      <div class="dashboard-info">
        <h1 text-align: center>AnalyFix</h1>
        <p>Empowering businesses with data-driven solutions</p>
      </div>
    </div>
    <div class="social-buttons">
            <a href="#" target="_blank">
                <img src="fb.png" alt="Facebook">
            </a>
            <a href="https://twitter.com/i/communities/1669501013441806336" target="_blank">
                <img src="twtr.png" alt="Twitter">
            </a>
        </div>
        <style>
        /* Add this CSS for positioning the buttons */
        .social-buttons {
            position: absolute;
            top: 15px; /* Adjust the top position as needed */
            right: 15px; /* Adjust the right position as needed */
        }

        .social-buttons a {
            display: inline-block;
            margin-right: 6px; /* Add some space between the buttons */
        }

        .social-buttons img {
            width: 40px; /* Adjust the icon size as needed */
            height: 40px;
        }
    </style>
  </header>
</body>
</html>
