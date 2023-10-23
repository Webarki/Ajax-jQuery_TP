<h1>Bienvenue</h1>
<?php
session_start();
if (isset($_GET["logout"])) {
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Cache-Control:no-cache");
    header('location:index.php');
}
if (isset($_SESSION["email"])) :
?>
    <?= $_SESSION['email'] ? $_SESSION['email'] : '' ?>
    <a href="?logout"><button>Déconnexion</button></a>
<?php
else :
?>
    <a href="/Exo/ajax/TP/index.php"><button>S'inscire</button></a>
<?php
endif;
