<div id="contenu">
      <h2>Liste des projets détaillés </h2>
      <div class="corpsForm">
     <table >
  	   <caption>Descriptif des projets et des employés
       </caption>
             <tr>
                <th >code projet</th>  
                <th >libellé</th>  
                <th >nom employé</th>
                <th >prenom employé</th>
             </tr>
          
    <?php    
	   foreach ($lesProjetsDetails as $unProjet) {
			$codeProjet = $unProjet['codeprojet'];
			$nomProjet = $unProjet['nomprojet'];
                        $nomEmploye = $unProjet['nom'];
                        $prenomEmploye = $unProjet['prenom'];
		?>		
            <tr> <td><?php echo $codeProjet ?></td>
                <td><?php echo $nomProjet ?></td>
                <td><?php echo $nomEmploye ?></td>
                <td><?php echo $prenomEmploye ?></td>
    <?php		 
          
          }
?>	  
                                          
    </table>
      </div>
</div>
     
  