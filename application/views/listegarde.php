			<div class="container">
				<h2>Liste des garde:</h2>
<?php echo anchor("gardes",'Ajout Garde',['class'=>'btn btn-primary btnnouveau'])?>

				<table class="table table-hover table-bordered display compact cell-border" id="tab">
				  <thead>
				  	<tr > 
				      <th >Nom Pharmacie</th>
				      <th>Date de garde debut</th>
				      <th>Date de garde fin</th>
				      <th>Actions</th>
				    </tr>
				  </thead>
			  	<tbody>
				  		<?php foreach ($query as $result) {?>  

						    <tr>
						       <td ><?php echo $result->NOM_PHARMACIE;?></td>
						       <td ><?php echo date("d/m/y", strtotime($result->Date_debut));?></td>
						      <td ><?php echo date("d/m/y", strtotime($result->Date_fin));?></td>
						      
		<td ><?php echo anchor("gardes/edit/{$result->ID_GARDE}",'<i class="fa fa-edit fa-lg"></i>',['class'=>'btn  btn-outline-success'])?>
		<?php echo anchor("gardes/delete/{$result->ID_GARDE}",'<i class="fa fa-trash fa-lg"></i>',['class'=>'btn btninfo btn-sm btn-outline-danger'])?></td>
						    </tr>
						  	 <?php  }?>


				    
				  </tbody>
				</table>
				</div>

<script type="text/javascript">
$(document).ready(function(){
	$('.pharm').addClass('active');
});		</script>
<script type="text/javascript">
    $('.btninfo').click(function(e){
        var result = confirm("Voulez vous vraiment Supprimer?");
        if(!result) {
            e.preventDefault();
        }
    });
</script>