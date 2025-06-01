<?php include "config.php"; session_start();
$result = $conn->query("SELECT * FROM reserves");
echo "<a href='afegir.php'>Afegir nova reserva</a><ul>";
while($row = $result->fetch_assoc()) {
  echo "<li>{$row['classe']} - {$row['data']} <a href='editar.php?id={$row['id']}'>✏️</a> <a href='eliminar.php?id={$row['id']}'>🗑️</a></li>";
}
echo "</ul>";
