		<div class="container">
		<h2>Liste des Utilisateurs:</h2>
<?php echo anchor("utilisateur/enregistrer",'	Nouveau',['class'=>'btn btn-primary btnnouveau'])?>

				<table class="table table-hover table-bordered display compact cell-border" id="tab">
				  <thead>
				  	<tr >
				      <th scope="row">NOM </th>
				      <th>Pseudo</th>
				      <th>Droit d'utilisateurs</th>
				      <th>Action</th>


				    </tr>
				  </thead>
				  <tbody>
				  		<?php foreach ($query as $result) {?>  
						    <tr>
						      <td ><?php echo $result->NOM;?></td>
						      <td ><?php echo $result->PSEUDO;?></td>
						      <td ><?php echo $result->DROIT;?></td>

						      
		<td ><?php echo anchor("utilisateur/edit/{$result->ID_UTILISATEUR}",'<i class="fa fa-edit fa-lg"></i>',['class'=>'btn  btn-outline-success'])?>
		<?php echo anchor("utilisateur/delete/{$result->ID_UTILISATEUR}",'<i class="fa fa-trash fa-lg"></i>',['class'=>'btn btninfo btn-sm btn-outline-danger'])?></td>


						    </tr>
						  	 <?php  }?>


				    
				  </tbody>
				</table>
				</div>
				<script type="text/javascript">
    $('.btninfo').click(function(e){
        var result = confirm("Voulez vous vraiment Supprimer?");
        if(!result) {
            e.preventDefault();
        }
    });
</script>