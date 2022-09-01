<div class="container">
		<h2>Liste des evenements:</h2>
			<?php echo anchor("evenementt/form",'Nouveau',['class'=>'btn btn-primary btnnouveau'])?>
	
	
				<table class="table table-hover table-bordered display compact cell-border" id="tab">
		 	<thead>
		  	<tr >
		      <th scope="row">Type evenement</th>
		      <th scope="row">NOM EVENEMENT</th>
		      <th scope="row">Lieu</th>
		      <th scope="row">Tarif</th>
		      <th>Déscription</th>
		      <th>Photos</th>
		      <th>Date début évènement</th>
		      <th>Date fin évènement</th>
		      <th>Actions</th>

		    </tr>
		  </thead>

		  <tbody>
		  		<?php foreach ($query as $record) {?>  

				    <tr>
				    	<td ><?php echo $record->TYPE_EVENEMENT;?></td>
				      <td ><?php echo $record->NOM_EVENEMENT;?></td>
				      <td ><?php echo $record->Lieu;?></td>
				      <td ><?php echo $record->Tarif;?></td>				      
				      <td ><?php echo $record->DESCRIPTION;?></td>
				      <td>
			<img style="width: 100px;height: 100px" src="<?php echo base_url($record->PHOTOS)?>">      	 
				      </td>      	 
				      </td>
				      <td><?php echo date("d/m/y", strtotime($record->DATE_EVENEMENT));?></td>
				      <td><?php echo date("d/m/y", strtotime($record->DATE_EVENEMENT_FIN));?></td>

		  <td > <?php echo anchor("evenementt/edit/{$record->ID_EVENEMENT}",'<i class="fa fa-edit fa-lg"></i>',['class'=>'btn btn-outline-success'])?>
			<?php echo anchor("evenementt/delete/{$record->ID_EVENEMENT}",'<i class="fa fa-trash  fa-lg"></i>',['class'=>'btn btninfo btn-sm btn-outline-danger'])?></td>





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
	$('.eve').addClass('active');
});		</script>