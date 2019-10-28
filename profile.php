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
            <img class="rounded-circle" src="<?php echo $user['avatar'] ?>">
        </div>
        <div class="col-md-8 text-center">
            <h2 class="my-4">Username: <?php echo $user['username'] ?>, Id: <?php echo $user['id'] ?></h2>
            <h3>Real Name: <?php echo $user['first_name'] . ' ' . $user['last_name'] ?></h3>
            <br>
            <i>"<?php echo $user['quote'] ?>"</i>
            <br>
            <strong>-<?php echo $user['quote_author']?></strong>
        </div>
    </div>
    <div class="row">
        <img src="https://belikebill.ga/billgen-API.php?default=1&name=<?php echo $user['first_name']?>&sex=<?php echo $user['gender']?>" />
    </div>
</div>

<table>
    <thead>
    <tr>
        <td>Gender</td>
        <td>LinkedIn</td>
        <td>GitHub</td>
        <td>Email</td>
        <td>Preferred Language</td>
        <td>Video</td>
        <td>Created at</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $user['gender'] ?></td>
        <td><?php echo $user['linkedin'] ?></td>
        <td><?php echo $user['github'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td><?php echo $user['preferred_language'] ?></td>
        <td><?php echo $user['video'] ?></td>
        <td><?php echo $user['created_at'] ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>