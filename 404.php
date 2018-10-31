<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Volunteer Connector</title>

    <!-- This is a stylesheet that includes the font you should use -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">

    <!-- This is a 3rd-party stylesheet for Font Awesome: http://fontawesome.io/ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="/style.css" media="screen">
  </head>
  <body>
    <header>
      <!-- The <em> tag below includes the bullhorn icon from Font Awesome -->
      <a href="/"><h1 class="site-title">Volunteer Connector</h1></a>
      <nav class="navbar">
        <ul class="navlist">
          <li class="navitem navlink"><a href="/">Home</a></li>
          <li class="navitem navlink"><a href="#">Trending</a></li>
          <li class="navitem navlink"><a href="#">People</a></li>
          <li class="navitem navbar-search">
            <input type="text" id="navbar-search-input" placeholder="Search...">
            <button type="button" id="navbar-search-button"><em class="fa fa-search"></em></button>
          </li>
        </ul>
      </nav>
    </header>

    <main class="error-container">
      <h2>404</h2>
      <h3>Woops! We couldn't find that page.</h3>
    </main>
  </body>

  <script src="/index.js" charset="utf-8"></script>

</html>
