<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php

    require_once('Classes/View.php');

    $video = new Video('Hello');
    $user = new User('Jean', 25, 'M', 'jcdev', 5);
    

    $view = new View($video, $user);

    $view->rankPercentage(80);

    echo '<pre>';
    /* var_dump($user);
    echo '<br>'; */
    var_dump($view);
    
  ?>

</body>
</html>