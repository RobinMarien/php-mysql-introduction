<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'connection.php';
require 'insert.php';
require 'profile.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $connection = openConnection();
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $preferredLanguage = $_POST['preferred_language'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $quoteAuthor = $_POST['quote_author'];


    $sqlCmd = "INSERT INTO student (first_name, last_name, username, gender, linkedin, github, email, 
                     preferred_language, avatar, video, quote, quote_author) VALUES (:first_name,:last_name,:username,:gender,:linkedin,:github,:email,:preferred_language,:avatar,:video,:quote,:quote_author)";

    $connection->prepare($sqlCmd)->execute([$firstName, $lastName, $username, $gender, $linkedin, $github, $email, $preferredLanguage, $avatar,
        $video, $quote, $quoteAuthor]);
}
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="icon" type="image/png" sizes="16x16" href="">-->
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Preferred Language</td>
            <td>Personal Page</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $sqlTable = 'SELECT first_name, last_name, email, preferred_language, id FROM student ORDER BY ID';
        $connection = openConnection();
        foreach ($connection->query($sqlTable) as $row): ?>
            <tr>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['preferred_language'] ?></td>
                <td><a href ="http://login.local/profile.php?user=<?php echo $row['id'] ?>">Profile</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

<?php
function whatIsHappening()
{
    echo '<br><br><h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
}
whatIsHappening();