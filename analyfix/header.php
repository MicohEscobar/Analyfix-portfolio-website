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

<header>
  <nav class="header-nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="#about">About Us</a></li>
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
