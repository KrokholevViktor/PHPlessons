<?php

$db = @mysqli_connect('localhost', 'root', '', 'copmany') or die('DB connection error');

// $insert = mysqli_query($db, "INSERT INTO `team` (`name`, `email`, `date`) VALUES ('Билл', 'bill@gmail.com', '2012-10-10')");
$update = "UPDATE `team` SET `text` = 'hello' where `id` = 5";
$delete = "DELETE FROM team WHERE id = 6";
$select = "SELECT * FROM team";

$query = mysqli_query($db, $select);
var_dump(mysqli_fetch_all($query, MYSQLI_ASSOC));
// if($query) var_dump($query);
// else echo "Ошибка добавления в базу";

mysqli_error($db);