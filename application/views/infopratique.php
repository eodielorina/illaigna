
 <div class="container">
  
<h2>Liste des infos pratiques:</h2>
<div class="container-fluid">
  <?php echo anchor("infos/form",'Nouveau',['class'=>'btn btn-primary btnnouveau'])?>
  
					<table class="table table-hover table-bordered display compact cell-border" id="tab" >
		
		  <thead>
		  	<tr>
		      <th>Nom service</th>
		      <th>Téléphone</th>
		      <th>Adresse</th>
		      <th>photos</th>
		      <th>Actions</th>


		    </tr>
		  </thead>

		  <tbody>
		  		<?php foreach ($query as $result) {?>  

				    <tr>
				      <td ><?php echo $result->NOM_SERVICE;?></td>
				      <td ><?php echo $result->NUM_TELEPHONE;?></td>
				      <td ><?php echo $result->ADRESSE;?></td>
				     <td ><img style="width: 100px;height: 100px" src="<?php echo base_url($result->PHOTOS)?>">      	 
				      </td>
		<td > <?php echo anchor("infos/edit/{$result->ID_INFOP}",'<i class="fa fa-edit fa-lg"></i>',['class'=>'btn btn-outline-success'])?>
			<?php echo anchor("infos/delete/{$result->ID_INFOP}",'<i class="fa fa-trash fa-lg"></i>',['class'=>'btn btninfo btn-sm btn-outline-danger'])?></td>



				    </tr>
				  	 <?php  }?>


		    
		  </tbody>
		</table>
		</div>
<script type="text/javascript">
$(document).ready(function(){
	$('.info').addClass('active');
});
		
	</script>
<script type="text/javascript">
    $('.btninfo').click(function(e){
        var result = confirm("Voulez vous vraiment Supprimer?");
        if(!result) {
            e.preventDefault();
        }
    });
</script>