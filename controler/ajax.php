<?php
if (isset($_POST['login']) && !empty($_POST['login'])) {
    $login = htmlspecialchars($_POST['login']);
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = htmlspecialchars($_POST['password']);
        $passHash = password_hash($password, PASSWORD_BCRYPT);
    }
    if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
        session_start();
        $response['type'] = 'Success';
        $response['data'] = 'Vous allez être redirigé';
        $response['url'] = 'homepage.php';
        $_SESSION['email'] = $login;
        $_SESSION['password'] = $passHash;
        $db = new PDO('mysql:host=localhost;dbname=ajax', 'ymsmbrk', 'root');

        $db->exec("INSERT INTO ajax_user(`email` ,`pass`,`role`) VALUES('$login', '$passHash', 'admin')");
        echo json_encode($response);
    } else {
        $response['type'] = "ERROR";
        $response['data'] = 'Une erreur c\'est produite';
        echo json_encode($response);
    }
}
