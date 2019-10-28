<?php
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
    <title>Login form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<body>

<form method="post">
    <label for="first_name">First name:</label>
    <input type="text" name="first_name">
    <br>
    <br>
    <label for="last_name">Last name:</label>
    <input type="text" name="last_name">
    <br>
    <br>
    <label for="username">Username:</label>
    <input type="text" name="username">
    <br>
    <br>
    <label for="gender">Gender:</label>
    <select name="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
    </select>
    <br>
    <br>
    <label for="linkedin">LinkedIn:</label>
    <input type="text" name="linkedin">
    <br>
    <br>
    <label for="github">Github:</label>
    <input type="text" name="github">
    <br>
    <br>
    <label for="email">Email:</label>
    <input type="text" name="email">
    <br>
    <br>
    <label for="preferred_language">Preferred language:</label>
    <input type="text" name="preferred_language">
    <br>
    <br>
    <label for="avatar">Avatar:</label>
    <input type="text" name="avatar">
    <br>
    <br>
    <label for="video">Video:</label>
    <input type="text" name="video">
    <br>
    <br>
    <label for="quote">Quote:</label>
    <input type="text" name="quote">
    <br>
    <br>
    <label for="quote_author">Quote author:</label>
    <input type="text" name="quote_author">
    <br>
    <br>
    <button>Submit</button>
</form>
<br>

</body>
</html>