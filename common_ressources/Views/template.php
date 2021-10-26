<?php
$page_title = isset($page_title) ? $page_title : basename(PROJECT_ROOT);
$custom_css = isset($custom_css) ? '<link rel="stylesheet" href="' . $custom_css . '">' : '';
$content = $content ?: '';
?><!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= COMMON_CSS ?>style.min.css">
  <link rel="stylesheet" href="<?= COMMON_CSS ?>media_queries.min.css">
  <?= $custom_css ?>

  <title><?= $page_title ?></title>
</head>

<body class="color-theme-1">
  <div id="sidebar" class="color-theme-2 flex f-center f-column">
    <h2 class="highlighted"><?= $page_title ?></h2>
    <nav class="main-nav"></nav>
  </div>

  <div id="page" class="flex f-center">
    <div class="flex f-column f-center">
      <?= $content ?>
    </div>
  </div>
</body>

</html>