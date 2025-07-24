<?php
session_start();
$page = $_GET['page'] ?? 'home';
$allowedPages = ['home', 'viewCart'];

if (!in_array($page, $allowedPages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Day5</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include_once(__DIR__ . '/layouts/styles.php'); ?>
    </head>
    <body class="d-flex flex-column min-vh-100">

        <?php include_once(__DIR__ . '/layouts/partials/header.php'); ?>

        <?php
        $paths = [
            'home' => __DIR__ . '/layouts/partials/home.php',
            'viewCart' => __DIR__ . '/pages/viewCart.php'
        ];

        if (array_key_exists($page, $paths)) {
            include_once($paths[$page]);
        } else {
            include_once($paths['home']);
        }
        ?>


        <?php include_once(__DIR__ . '/layouts/partials/footer.php'); ?>
        <?php include_once(__DIR__ . '/layouts/scripts.php'); ?>


        </div>
      <div class="container my-5">
  <h2 class="text-center mb-4"> HUTECH</h2>
  <p class="text-center">
    <strong>475A Điện Biên Phủ, Quận Bình Thạnh, TP.HCM</strong>
  </p>
  <div class="ratio ratio-16x9">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.065990517477!2d106.71304817490543!3d10.804896858723876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528c244af4c8d%3A0xd3b7cf7b2bd6e5f5!2zSFRVVEVDSCAtIEPGsOG7n25nIHPhu5EgQSAtIDQ3NUEgxJDDtG5nIELDrG5oIFBo4bqldQ!5e0!3m2!1svi!2s!4v1721721159123!5m2!1svi!2s" 
      width="600" height="450" style="border:0;" 
      allowfullscreen="" loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>
    </body>
</html>
