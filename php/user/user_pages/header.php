<?php
include('../../general/general_backend/head.php');
?>

<body>
  <header>
    <div class="header-container">
      <div class="logo-icon div_display-flex_justify-content-flex-start_align-items-center">
        <img src="../../../img1/icon.png" alt="Logo" />
      </div>
      <div class="header-buttons">
        <nav class="nav-header-buttons">
          <ul class="navbar-nav-items ">
            <li class="nav-item">
              <a href="index.php" class="nav-link">MĀJAS LAPA</a>
            </li>
            <li class="nav-item">
              <a href="izvelne.php" class="nav-link">IZVELNE</a>
            </li>
            <li class="nav-item">
              <a href="recipes-main.php" class="nav-link">RECEPTI</a>
            </li>
            <li class="nav-item">
              <a href="discounts_news.php" class="nav-link">AKCIJAS/ZIŅAS</a>
            </li>
            <li class="nav-item">
              <a href="kontakti.php" class="nav-link">KONTAKTI</a>
            </li>

          </ul>
        </nav>
      </div>
      <div class="icons">
        <div class="icons-header">
          <a href="calculator.php">
            <img id="calculator" class="header-icons-img" src="../../../img1/icon-calculator.png" alt="" />
          </a>
        </div>
        <div class="icons-header">
          <a href="basket.php" class="header-icons">
            <img src="../../../img1/cart.png" alt="" /></a>
        </div>
        <div class="icons-header">
          <a href="login-sign_up.php" id="login-sign_up-page">
            <img id="account_icon" src="../../../img1/akaunts.png" alt="" />
          </a>
        </div>
      </div>
    </div>
  </header>

  <script src="../../../js1/cookies/login-sign_up/cookies-check.js"></script>
</body>