<?php include "config.php"; session_start();
if ($_POST) {
  $classe = $_POST['classe'];
  $data = $_POST['data'];
  $hora = $_POST['hora'];
  $usuari = $_SESSION['usuari']['id'];
  $conn->query("INSERT INTO reserves (classe,data,hora,id_usuari) VALUES ('$classe','$data','$hora','$usuari')");
  header("Location: productes.php");
}
?>
<form method="POST">
  Classe: <input name="classe"><br>
  Data: <input type="date" name="data"><br>
  Hora: <input type="time" name="hora"><br>
  <button>Afegir</button>
</form>
