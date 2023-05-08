<?php
// $_SESSION



session_start();
define("ADMINPASS", "12345");

if(!empty($_POST['password_access'])) {
    if($_POST['password_access'] === ADMINPASS) {
        $_SESSION['access'] = true;
        setcookie('access', 'admin', time()+3600*3, '/');
       $_SESSION['errors'] = "Вы авторизованы";
    } else {
        $_SESSION['errors'] = "пароль не правильный";
    }
}

if(isset($_GET['logout']) && $_GET['logout'] == 1) {
    session_unset();
    header("Location: index.php");
}

if(!empty($_COOKIE['access'])){
    $_SESSION['access'] = true;
   $_SESSION['errors'] = "Вы авторизованы";
}

if(isset($_SESSION['access'])) {
    echo  $_SESSION['errors'];
    echo '<a href="index.php?logout=1">loguot</a>';
} else if(isset( $_SESSION['errors'])) {
    echo  $_SESSION['errors'];
}    else {
?>
    <form action="" method="POST">
    <input type="password" name="password_access" placeholder="Inter Password">
    <button>login</button>
    </form>  
<?php 
} 
?>




