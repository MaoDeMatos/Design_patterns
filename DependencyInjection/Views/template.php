<!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="/DependencyInjection/public/css/style.min.css">
  <link rel="stylesheet" href="/DependencyInjection/public/css/custom_rules.css">
  <link rel="stylesheet" href="/DependencyInjection/public/css/media_queries.min.css">

  <title>Dependency Injection</title>
</head>

<body class="color-theme-1">
  <div id="sidebar" class="color-theme-2 flex f-center f-column">
    <h2 class="highlighted">Dependency Injection : Todo List</h2>
    <nav class="main-nav"></nav>
  </div>

  <div id="page" class="flex f-center">
    <div>
      <ul id="todo-list" class="flex f-column f-center">
        <?= $content ?>
      </ul>
    </div>
  </div>
</body>

</html>