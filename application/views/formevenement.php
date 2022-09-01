<div class="container">
	<div class="row">
             <div class="col-md-6 col-md-offset-3">
 <h3>Formulaire des Evenements:</h3>
		<form method="post" action="<?php echo base_url();?>evenementt/add" enctype="multipart/form-data" />
			<input type="hidden" name="iduser" value="<?php echo $user['ID_UTILISATEUR'] ;?>">
				 <div class="form-group">
				    <label for="exampleFormControlSelect1">Type d'evenement</label>
			    <div style="width: 300px">

			 <select class="form-control" id="exampleFormControlSelect1" name="papier">
				     <?php
					       foreach($type as $row){

					      	echo '<option value="'.$row->NOM_SERVICE.'">'.$row->NOM_SERVICE.'</option>';
					      }
					 ?>
			</select>
			  		</div>
			  		</div>

				 	 <div class="form-group">
    <label for="Nom evenement">Nom evenement</label>
			    <div style="width: 300px">

				    <input type="text" class="form-control" name="nom">
				  </div>
				  </div>
	 <div class="form-group">
    	<label for="lieu">Lieu</label>
			    <div style="width: 300px">

				    <input type="text" class="form-control" name="lieu">
				  </div>
				  </div>
				   <div class="form-group">
    <label for="Nom evenement">Tarif</label>
			    <div style="width: 300px">

				    <input type="text" class="form-control" name="tarif">
				  </div>
				  </div>
				  
				  <div class="form-group">
				    <label for="Téléphone">Date début:</label>
			    <div style="width: 300px">

				   	
				    <input type="date" name="date" >
				  </div>
				  </div>

				  <div class="form-group">
				    <label for="Téléphone">Date fin:</label>
			    <div style="width: 300px">
					   	
					    <input type="date" name="date2" >
					  </div>
					  </div>

					
					  <div class="form-group">
					    <label for="Description">Description</label>
			    <div style="width: 300px">

					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des" ></textarea>
					  </div>
					  </div>


					 <div class="form-group">
			    <div style="width: 300px">

					    <input type="file" name="file" class="form-control">
					 </div>
					 </div>
					 
			  		<?php echo anchor("evenementt",'ANNULER',['class'=>'btn btn-danger'])?></td>

			<button type="submit" class="btn btn-primary">ENREGISTRER</button>
					</form>
					  </div></div>	
					</div>				

					<style type="text/css">
	label{color: #337AB7
}
</style>