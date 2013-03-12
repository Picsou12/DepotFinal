<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
                //on vérifie si le login et mdp existe dans la table utilisateurs
		$Visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if(count($Visiteur) == 0){
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			$_SESSION['login']= $login; // mémorise les variables de session
                        $_SESSION['nom']= $Visiteur[0]['nom'];
			include("vues/v_menu.php");
		}
		break;
	}
        case 'deconnexion':{
            session_destroy();
            include("vues/v_aurevoir.php");
            include("vues/v_connexion.php");
            break;
        }
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>