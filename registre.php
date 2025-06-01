<?php include "config.php";
if ($_POST) {
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  $conn->query("INSERT INTO usuaris (nom, email, password) VALUES ('$nom','$email','$pass')");
  header("Location: login.php");
}
?>
<form method="POST">
  Nom: <input name="nom"><br>
  Email: <input name="email"><br>
  Contrasenya: <input type="password" name="pass"><br>
  <button>Registrarr</button>
</form>