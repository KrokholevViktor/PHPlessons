<?php 

// trim
// strip_tags
// htmlspecialchars
// htmlspecialchars_decode
// htmlentities
// str_replace

// $message = "<b>Hello, World!.</b>";
// echo $message;

// $result = htmlspecialchars($message);
// echo "<br>" . $result;

// $new = "&lt;strong&gt;Text&lt;/strong&gt;";
// echo "<br>" . htmlentities($message);

// $result2 = str_replace('[b]', '<b>', $message);
// $result2 = str_replace('[/b]', '</b>', $result2);

// echo $result2;

// $message = "[i]hello[/i], [b]World![/b]";

// $bb_code = ['[b]', '[/b]', '[i]', '[/i]'];
// $html_code = ['<b>', '</b>', '<i>', '</i>'];

// $result = str_replace($bb_code, $html_code, $message);
// echo $result;

phpinfo();

$message = 'Hello, World!';

$result = str_ireplace('hello', 'by', $message);
echo $result;

echo date("<br> Y-m-d H:i:s");

?>