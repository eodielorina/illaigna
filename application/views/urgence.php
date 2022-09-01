
<div class="container">
	<h2>Liste des numéros d'urgence:</h2>
<?php echo anchor("numurgence/form",'Nouveau',['class'=>'btn btn-primary btnnouveau'])?>

		<table class="table table-hover table-bordered display compact cell-border" id="tab"> 
		  <thead>
		  	<tr >
		      <th>Nom service</th>
		      <th>Type-service</th>
		      <th>Téléphone</th>
		      <th>Actions</th>

		    </tr>
		  </thead>

		  <tbody>
		  		<?php foreach ($query as $result) {?>  

				    <tr>
				      <td ><?php echo $result->NOM_SERVICE;?></td>
				      <td ><?php echo $result->TYPE_SERVICE;?></td>
				      <td ><?php echo $result->NUM_PHONE;?></td>

<td > <?php echo anchor("numurgence/edit/{$result->ID_URGENCE}",'<i class="fa fa-edit fa-lg"></i>',['class'=>'btn btn-outline-success'])?>
			<?php echo anchor("numurgence/delete/{$result->ID_URGENCE}",'<i class="fa fa-trash fa-lg"></i>',['class'=>'btn btninfo btn-sm btn-outline-danger'])?></td>




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

<script type="text/javascript">
$(document).ready(function(){
	$('.num').addClass('active');
});		</script>