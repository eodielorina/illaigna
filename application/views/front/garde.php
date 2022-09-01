<div class="container-fluid">
			<div class="row">
			   	<div class="col-4 col-sm-8 col-md-8 p-2">
						<h2 style="color:#A9CA38">Les pharmacies de garde pour ce mois:</h2>
						<br>
						<br>
				</div>		
		<div class="col-xs-12 col-sm-10 col-md-10 p-2">

			<!--<div style="overflow-x:auto;">-->
					<div class="table-responsive" >

				<table class="table table-hover table-bordered display compact cell-border table-responsive" >
				  <thead>
				  	<tr> 
				      <th >Nom Pharmacie</th>
				      <th>Numéro téléphone</th>
				      <th>Adresse</th>
				      <th>Date de garde debut</th>
				      <th>Date de garde fin</th>
				      

				    </tr>
				  </thead>
			  	<tbody>
			  		<?php 
				  		foreach ($query as $result) {?>  

						    <tr>
						       <td ><?php echo $result->NOM_PHARMACIE;?></td>
						       <td ><?php echo $result->NUMERO_PHARMACIE;?></td>
						      <td ><?php echo $result->ADRESSE_PHARMACIE;?></td> 
						       <td ><?php echo date("d/m/y", strtotime($result->Date_debut));?></td>
						      <td ><?php echo date("d/m/y", strtotime($result->Date_fin));?></td>
						          
						  	  <?php  }?>

				    </tr>
				  </tbody>
				</table>
				
						</div>
				</div>

		<div class="col-4 col-sm-8 col-md-10 p-2">
						<h2 style="color:#A9CA38;" class="num">Les numéros d'urgence:</h2>
						<br>
						<br>
						<div class="table-responsive" >

				<table class="table table-hover table-bordered display compact cell-border table-responsive" >
				  <thead>
				  	<tr> 
				      <th >Nom Service</th>
				      <th>Type service</th>

				      <th>Numéro téléphone</th>
				     

				    </tr>
				  </thead>
			  	<tbody>
			  		<?php 
				  		foreach ($urg as $result) {?>  

						    <tr>
						       <td ><?php echo $result->NOM_SERVICE;?></td>
						       <td ><?php echo $result->TYPE_SERVICE;?></td>
						      <td ><?php echo $result->NUM_PHONE;?></td> 
						       
						          
						  	  <?php  }?>

				    </tr>
				  </tbody>
				</table>
				
						</div>


	</div>

	</div>
</div>

<style type="text/css">
	.lettre,.text4{display: none;}
	.num{margin-left: -300px}
	@media(max-width: 1000px){
	.num{margin-left: 0}

	}
	/*.table {
   display: block !important;
}
@media screen and (max-width: 640px) {
  
  thead,
  tbody,tr,
  th {
    display: block;
    width: auto!important;
    /* parceque tu as mis des style inline grrr */
  }
}*/
</style>