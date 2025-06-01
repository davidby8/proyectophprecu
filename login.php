<?php session_start(); include "config.php";
if ($_POST) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $result = $conn->query("SELECT * FROM usuaris WHERE email='$email'");
  $user = $result->fetch_assoc();
  if ($user && password_verify($pass, $user['password'])) {
    $_SESSION['usuari'] = $user;
    header("Location: admin.php");
  } else echo "Credencials incorrectes";
}
?>
<form method="POST">
  Email: <input name="email"><br>
  Contrasenya: <input type="password" name="pass"><br>
  <button>Iniciar sessió</button>
</form>