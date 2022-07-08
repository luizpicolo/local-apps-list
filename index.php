<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="styles/style.css">
  <title>Local Apps List</title>
</head>
<body>
  <h1>Local Apps List</h1>
  <?php
    function url($ssl = false, $port = 80, $path = ""){
      if ($ssl){
        return "https://$_SERVER[HTTP_HOST]:$port/$path";
      } else {
        return "http://$_SERVER[HTTP_HOST]:$port/$path";
      }
    }
  
    $url = "http://$_SERVER[HTTP_HOST]";
    $array = [
      [url(true, 9443),           'Docker Dashboard'],
      [url(false, 3000, 'admin'), 'Admin Liz Bot'],
      [url(false, 4567),          'Data Transfer Test'],
      [url(false, 4568, 'feed'),  'Feed IFMS Mastodon'],
      [url(false, 4569),          'MastoBot']
    ]
  ?>

  <?php for ($i = 0; $i < count($array); $i++) { ?>
    <a href="<?php echo $array[$i][0] ?>">
      <div><?php echo $array[$i][1] ?></div>
    </a>
  <?php } ?>
</body>
</html>