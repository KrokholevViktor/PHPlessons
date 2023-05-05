<?php

//$_GET / $_POST / $_SERVER / $_FILES
// echo phpinfo();

// file_exists
// rename
// mkdir
// rmdir
// copy
// unlink
// is_dir / is_file
// file_get_contents
// file
// file_put_contentst
// filesize

$file = 'test.txt';

if(!empty($_FILES)) {
    move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
}

// if(file_exists('test.txt')) {
//     echo "ok";
// }

// rename('uploads/jpg.jpg', 'jpg1.jpg');
// mkdir('folder');
// if(copy('uploads/1.jpg', '2.jpg')) {
//     echo "file coppied";
// }

// if(unlink( '2.jpg')) {
//     echo "file deleted";
// }

// $text = file_get_contents('https://www.php.net/manual/ru/ref.filesystem.php');
// echo htmlspecialchars($text);

// $text = file('test.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
// var_dump($text);



// $var = "hello\n";

// $bytes = file_put_contents($file, $var, FILE_APPEND | LOCK_EX);

// echo $bytes;

// echo filesize('test.txt');

$handle = fopen($file, 'r');

$text = fread($handle, filesize($file));

fclose($handle);

echo $text;

?>

<form method="POST" action="" enctype="multipart/form-data">
    <p><input type="text" name="title"></p>
    <p><input type="file" name="file"></p>
    <p><button>SUBMIT</button></p>
</form>