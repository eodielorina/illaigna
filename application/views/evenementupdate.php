
<div class="container">
	<div class="row">
          <div class="col-md-6 col-md-offset-3">
<?php echo form_open_multipart("evenementt/update/{$data->ID_EVENEMENT}",['class'=>'form-horizontale'] );?>
<input type="hidden" name="idev" value=" <?php echo $data->ID_EVENEMENT; ?>">
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
    <label for="Nomevenement">Nom evenement</label>
			    <div style="width: 300px">

	<input type="text" class="form-control" name="nom"  value="<?php echo $data->NOM_EVENEMENT;?>">
			
				  </div>
			  		</div>
				  <div class="form-group">
    	<label for="lieu">Lieu</label>
			    <div style="width: 300px">

				    <input type="text" class="form-control" name="lieu" value="<?php echo $data->Lieu;?>">
				  </div>
				  </div>
				   <div class="form-group">
    <label for="Nom evenement">Tarif</label>
			    <div style="width: 300px">

				    <input type="text" class="form-control" name="tarif" value="<?php echo $data->Tarif;?>">
				  </div>
				  </div>
				  
				  <div class="form-group">

				    <label for="Téléphone">Date début:</label>
			    <div style="width: 300px">

				   	<input type="date" name="date" value="<?php echo $data->DATE_EVENEMENT; ?>">
			    
				  </div>
				  </div>

				  <div class="form-group">

				    <label for="Date">Date fin:</label>
			    <div style="width: 300px">
					   	
					    <input type="date" name="date2" value="<?php echo $data->DATE_EVENEMENT_FIN; ?>" >
			   
					  </div>
				  </div>
					  <div class="form-group">
					    <label for="Description">Description</label>
			    <div style="width: 300px">

			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des"  value=" "><?php echo $data->DESCRIPTION; ?></textarea>
			   
					  </div>
				  </div>

					 <div class="form-group">
					    <label for="Photos">Photos</label>
			 <div style="width: 300px">
			    	<input type="hidden" name="sary" value="<?php echo $data->PHOTOS;?>">
	<input type="file" name="file" >
	<img src="<?php echo base_url($data->PHOTOS);?>"style="width: 100px;height: 100px" style="width: 100px;height: 100px">
					 </div>
					  </div>

 			  <button type="submit" class="btn btn-primary btn-lg" style="width: 300px">ENREGISTRER</button>
		
					  </div>
					</div>
					</div>
					</form>
<style type="text/css">
	label{color:#337AB7
;}
</style>
