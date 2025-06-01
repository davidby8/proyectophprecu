<?php include "config.php";
$res = $conn->query("SELECT classe, data, hora FROM reserves ORDER BY data");
while ($r = $res->fetch_assoc()) {
  echo "<p>{$r['classe']} - {$r['data']} a les {$r['hora']}</p>";
}
?>
