			<div class="container">
				<h2>Liste des pharmacies:</h2>
<?php echo anchor("pharmacieg/form",'	Nouveau',['class'=>'btn btn-primary btnnouveau'])?>

				<table class="table table-hover table-bordered display compact cell-border" id="tab">
				  <thead>
				  	<tr >
				      <th >NOM Pharmacie</th>
				      <th>Téléphone</th>
				      <th>Adresse</th>
				      <th>Actions</th>
				    </tr>
				  </thead>

				  <tbody>
				  		<?php foreach ($query as $result) {?>  

						    <tr>
						      <td ><?php echo $result->NOM_PHARMACIE;?></td>
						      <td ><?php echo $result->NUMERO_PHARMACIE;?></td>
						      <td ><?php echo $result->ADRESSE_PHARMACIE;?></td>
						    
						      
		<td ><?php echo anchor("pharmacieg/edit/{$result->ID_PHARMACIE}",'<i class="fa fa-edit fa-lg"></i>',['class'=>'btn  btn-outline-success'])?>
		<?php echo anchor("pharmacieg/delete/{$result->ID_PHARMACIE}",'<i class="fa fa-trash fa-lg"></i>',['class'=>'btn btninfo btn-sm btn-outline-danger'])?></td>


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