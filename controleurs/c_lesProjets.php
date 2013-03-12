<?php
include("vues/v_menu.php");

switch($_REQUEST['action']){
    case 'Detail' :
        {
            $lesProjetsDetails=$pdo-> getLesProjetsDetailles();
            include("vues/v_listeProjetsDetailles.php");
            break;
        }
    case 'liste' :
        {
            $lesProjets=$pdo-> getLesProjets(); 
            include("vues/v_listeProjets.php");
            break;
        }
}
?>
