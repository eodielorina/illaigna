
	<div class="container">	
		<div class="row">
             <div class="col-md-6 col-md-offset-3">

	<?php echo form_open("pharmacieg/update/{$record->ID_PHARMACIE}",['class'=>'form-horizontale'] );?>
		<input type="hidden" name="iduser" value="<?php echo $user['ID_UTILISATEUR'] ;?>">
			<input type="hidden" name="idparm" value="<?php echo $record->ID_PHARMACIE; ?>">

				<div class="form-group">
			    <label for="Nom Pharmacie">Nom Pharmacie</label>
			    <div style="width: 300px">  
			    <input type="text" class="form-control" name="nom" value="<?php echo $record->NOM_PHARMACIE; ?>"> 
			  </div>
			  </div>

			 	<div class="form-group">
			    <label for="Téléphone">Téléphone</label>
			    <div style="width: 300px">

			     <input type="text" class="form-control" name="phone" value="<?php echo $record->NUMERO_PHARMACIE;?>">
			   
			  </div>
			  </div>
			   <div class="form-group">
					    <label for="adresse">Adresse</label>
			    <div style="width: 300px">

<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="adresse" ><?php echo $record->ADRESSE_PHARMACIE;?></textarea>
					  </div>
					  </div>


					  
			
			  
 	<button type="submit" class="btn btn-primary btn-lg" style="width: 300px">ENREGISTRER</button>

		</div>
		</div>	
		</div>	
		
	</form>
			

<style type="text/css">
	label{color: #337AB7
;}
</style>