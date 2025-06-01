<?php session_start();
if (!isset($_SESSION['usuari']) || $_SESSION['usuari']['rol'] != 'admin') {
  header("Location: login.php"); exit;
}
echo "Benvingut/da, " . $_SESSION['usuari']['nom'];
?>
<a href="productes.php">Gestionar classes</a>
<a href="logout.php">Tancar sessió</a>