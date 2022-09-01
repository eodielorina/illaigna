	<div class="container">
<h2>Liste Public:</h2>
			<?php echo anchor("publiqueinfo/form",'Nouveau',['class'=>'btn btn-primary btnnouveau'])?></td>
					<table class="table table-hover table-bordered display compact cell-border" id="tab">
					  <thead>
				<tr class="">
					      <th>Nom service</th>
					      <th>Type </th>
					      <th>Demarche à suivre</th>
					      <th>Type </th>
					      <th>Demarche à suivre</th>
					      <th>Type </th>
					      <th>Demarche à suivre</th>
					      <th>Actions</th>
				 </tr>
					  </thead>
					  <tbody>
					  		<?php foreach ($query as $result) {?>  

							    <tr>

							   	 <td><?php echo $result->NOM_SERVICE;?></td>
							      <td ><?php echo $result->papier1;?></td>
							      <td ><?php echo $result->Etape;?></td>
							      <td ><?php echo $result->papier2;?></td>
							      <td ><?php echo $result->Class;?></td>
							      <td ><?php echo $result->papier3;?></td>
							      <td ><?php echo $result->DEMARCHE;?></td>
							      

			<!-- <td ><img style="width: 100px;height: 100px" src="<?php echo base_url($result->icone)?>">  </td>-->  	 


			<td > <?php echo anchor("publiqueinfo/edit/{$result->ID_PUBLIC}",'<i class="fa fa-edit fa-lg"></i>',['class'=>'btn btn-outline-success'])?>
			<?php echo anchor("publiqueinfo/deletepub/{$result->ID_PUBLIC}",'<i class="fa fa-trash fa-lg"></i>',['class'=>'btn btninfo btn-sm btn-outline-danger'])?></td>


							    </tr>
							  	 <?php  }?>
					  </tbody>
					</table>
			
	<script type="text/javascript">
$(document).ready(function(){
	$('.public').addClass('active');
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
