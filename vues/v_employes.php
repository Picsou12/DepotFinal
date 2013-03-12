<div id="contenu">
      <h2>Liste des employés informaticiens </h2>
      <div class="corpsForm">
     <table >
  	   <caption>Descriptifs des employés
       </caption>
             <tr>
                <th >Nom</th>  
                <th >Prénom</th>              
             </tr>
          
    <?php    
	   foreach ($lesEmployes as $unEmploye) {
			$nomEmploye = $unEmploye['nom'];
			$prenomEmploye = $unEmploye['prenom'];
		?>		
            <tr> <td><?php echo $nomEmploye ?></td>
                <td><?php echo $prenomEmploye ?></td>
            </tr>
    <?php		 
          
          }
?>	  
                                          
    </table>
      </div>
</div>
     
  