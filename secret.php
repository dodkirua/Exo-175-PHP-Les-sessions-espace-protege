<?php
session_start();
$password = password_hash("t0t0@l4M3R",PASSWORD_BCRYPT);
if (!isset($_POST["pass"]) || !isset($_POST['user'])){
    header('Location: index.php?e=1');
}
elseif (password_verify($_POST['pass'],$password) || $_POST['user'] !== "admin") {
    include "./partial/head.php";
    echo "<h1>Bienvenue dans la partie secrète</h1>";
    include "./partial/foot.php";
}
else {
    header('Location: index.php?e=2');
}
