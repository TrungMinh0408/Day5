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

    </body>
</html>
