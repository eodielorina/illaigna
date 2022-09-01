		<div class="container">
		<h2>Liste des Services:</h2>
<?php echo anchor("nouveau/services",'	Nouveau',['class'=>'btn btn-primary btnnouveau'])?>

				<table class="table table-hover table-bordered display compact cell-border" id="tab">
				  <thead>
				  	<tr >
				      <th scope="row">NOM Service</th>
				      <th>Catégorie</th>

				      <th>Code_Service</th>
				      <th>Types</th>
				      <th>Action</th>

				    </tr>
				  </thead>
				  <tbody>
				  		<?php foreach ($query as $result) {?>  
						    <tr>
						      <td ><?php echo $result->NOM_SERVICE;?></td>
						      <td ><?php echo $result->categorie;?></td>

						      <td ><?php echo $result->CODE_SERVICE;?></td>
						      <td ><?php echo $result->TYPE;?></td>
						      
		<td ><?php echo anchor("nouveau/edit/{$result->ID_SERVICE}",'<i class="fa fa-edit fa-lg"></i>',['class'=>'btn  btn-outline-success'])?>
		<?php echo anchor("nouveau/delete/{$result->ID_SERVICE}",'<i class="fa fa-trash fa-lg"></i>',['class'=>'btn btninfo btn-sm btn-outline-danger'])?></td>


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