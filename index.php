<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'connection.php';
require 'insert.php';

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
function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
}
whatIsHappening();