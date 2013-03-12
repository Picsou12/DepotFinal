<?php
include("vues/v_menu.php");
$lesEmployes=$pdo-> getLesEmployes();
include("vues/v_employes.php");
?>
