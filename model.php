<?php
require 'connec.php';
function connect() : PDO
{
   return $pdo = new \PDO(DSN, USER, PASS);
}

function findAllFriends() : array
{
    $pdo = connect();
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    $friends = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $friends;
}

function createFriend() : void
{
    $pdo= connect();
    $query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindValue(':lastname',$_POST ['lastname'], PDO::PARAM_STR);
    $statement->execute();
}

