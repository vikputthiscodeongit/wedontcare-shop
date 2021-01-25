<?php
  // Define page names
  $page = str_replace(".php", "", basename($_SERVER["PHP_SELF"]));

  if ($page === "index") {
    $page = "landing";
  }
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <!--

    - - - - - - - - - - - - - - - - - - - -
    - This website is made by Viktor Chin -
    - - - - - - - viktorchin.nl - - - - - -

    -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Required site assets -->
    <?php wp_head(); ?>

    <!-- Favicon stuff -->
    <link rel="apple-touch-icon" sizes="180x180" href="dist/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dist/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/favicon/favicon-16x16.png">
    <link rel="manifest" href="dist/favicon/site.webmanifest">
    <link rel="mask-icon" href="dist/favicon/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">
  </head>

  <body class="<?php echo $page; ?> bg-dark">
    <main>
