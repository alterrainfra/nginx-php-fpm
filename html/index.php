<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Docker | wyveo/nginx-php-fpm</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/skeleton.min.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 25%">
        <img height="45px" src="data:image/png;base64,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">
        <h4>Congratulations!</h4>
        <p>You have successfully deployed a <strong>docker</strong> container running our <strong>NGINX</strong> with <strong>PHP-FPM 8.x</strong> image</p>
        <p><strong>NGINX: </strong>v<?php echo $_ENV['NGINX_VERSION'] ?><br><strong>PHP-FPM: </strong>v<?php echo phpversion(); ?><br><strong>LOADED CONFIG: </strong><?php echo php_ini_loaded_file(); ?><br><strong>WEB ROOT: </strong><?php echo $_ENV['DOCUMENT_ROOT'] ?><br><strong>HOSTNAME: </strong><?php echo gethostname(); ?><br></p>
          <em>Thank you for using <a style="text-decoration:none" href="https://wyveo.com" target="_blank">wyveo.com</a></em>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
