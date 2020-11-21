<?php
include "konekcija.php";
$upit = "SELECT *
FROM footer";
$rezultat = $konekcija->query($upit);
echo "<ul class='social-icon'>";
foreach($rezultat as $li) {
echo "<li><a href='$li->link' class='$li->class'></a></li>";
}
echo "</ul>";
?>