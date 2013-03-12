 <!-- Division pour le menu -->
    <div id="menuGauche">
    
        <ul id="menuList">
            <li >
		 Bienvenu(e) : <?php echo $_SESSION['nom']?>	
		</li>
           <li >
              Les Projets
           </li>
              <ul>
                  <a href="index.php?do=lesProjetsDetailles&action=Detail" title="Les projets detaillés">en détail</a>
                  </ul>
              <ul>    
                  <a href="index.php?do=lesProjets&action=liste" title="Les projets">En liste</a>
           </ul>
          <li >
              <a href="index.php?do=lesEmployes" title="Les employés">Les employés</a>
           </li>
             <li >
              <a href="index.php?do=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
           
         </ul>
        
    </div>
    