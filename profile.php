<?php
require 'connection.php';
$userId = $_GET['user'];
$stmt = $connection->prepare('SELECT * FROM student WHERE ID=:id');
$stmt->execute(['id'=>$userId]);
$user= $stmt->fetch();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Robin Mariën">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?php echo $user['username']?>'s Profile </title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="rounded-circle my-5" src="<?php echo $user['avatar'] ?>">
        </div>
        <div class="col-md-8 text-center">
            <h2 class="my-4 shadow-lg p-3 mb-5 bg-white rounded-pill">Username: <strong><?php echo $user['username'] ?></strong>, ID: <strong><?php echo $user['id'] ?></strong></h2>
            <h3>Real Name: <strong><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></strong></h3>
            <br>
            <p>E-mail: <?php echo $user['email']?></p>
            <span>Links:</span>
            <strong><a href="<?php echo $user['linkedin']?>">LinkedIn</a></strong>
            <strong><a href="<?php echo $user['github']?>">GitHub</a></strong>
            <br>
            <br>
            <i>"<?php echo $user['quote'] ?>"</i>
            <br>
            <strong>-<?php echo $user['quote_author']?></strong>
            <br>
            <br>
            <span>Gender: <strong><?php echo $user['gender']?></strong> | Preferred Language: <strong><?php echo $user['preferred_language']?></strong> | </span>
            <span>Profile created at: <?php echo $user['created_at'] ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="https://belikebill.ga/billgen-API.php?default=1&name=<?php echo $user['first_name']?>&sex=<?php echo $user['gender']?>" />
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <iframe width="560" height="315" src="<?php echo str_replace('watch?v=','embed/',$user['video'])?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

</body>
</html>