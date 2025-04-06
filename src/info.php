<?php 

// Logo
$LogoURL = "./images/logo.png";
$LogoText = <<<HTML
            <span class="header-text"></span>
HTML;


$ops_head = <<<HTML
    <link href="assets/styles.css" rel="stylesheet">
    <link href="assets/icon.css" rel="stylesheet">
    <link href="assets/font.css" rel="stylesheet">
    <link href="assets/tailwind.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
HTML;

// Header
$ops_header = <<<HTML
    <header>
        <div class="header-content">
            <img class="header-logo" src="assets/images/logo.png" alt="Logo">
        </div>
    </header>
HTML;

// 自定义页脚
$ops_footsubordinate_default = <<<HTML
    <details class="footer-section">
      <summary class="footer-toggle">
        <i class="fas fa-chevron-right"></i>
        关于
      </summary>
      <div class="footer-details">
        <p>
        MineLarx Account
        </p>
      </div>
    </details>
HTML;

// Copyright
$ops_copyright = <<<HTML
   <div class="copyright">
      &copy; 2018-2025 MineLarx. All rights reserved.
    </div>
HTML;

?>