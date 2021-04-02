<?php
require_once 'model.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    createFriend();
  header('Location : /');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="firstname">firstname</label>
        <input type="text" name="firstname" id="firstname">
    </div>
    <div>
        <label for="lastname">lastname</label>
        <input type="text" name="lastname" id="lastname">
    </div>
    <div>
        <button type="submit">Send</button>
    </div>
</form>
<ul>
    <?php foreach (findAllFriends() as $friend) : ?>
        <li>
            Firstname : <?= $friend['firstname']?><br>
            Lastname : <?= $friend['lastname']?> <br>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
