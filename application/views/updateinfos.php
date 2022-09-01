
<div class="container">
		<div class="row">
             <div class="col-md-6 col-md-offset-3">
		
	<?php echo form_open_multipart("infos/update/{$record->ID_INFOP}",['class'=>'form-horizontale'] );?>
	<input type="hidden" name="idinfo" value=" <?php echo $record->ID_INFOP; ?>">
	<div class="form-group">
		    <label for="exampleFormControlSelect1">Nom service</label>
			    <div style="width: 300px">

		    <select class="form-control" id="exampleFormControlSelect1" name="idservice">
		     <?php
					       foreach($servinfos as $row){
					      	echo '<option value="'.$row->ID_SERVICE.'">'.$row->NOM_SERVICE.'</option>';
				      }
					      ?>			   
		    </select>
		</div>
		<input type="hidden" name="iduser" value="<?php echo $user['ID_UTILISATEUR'] ;?>">
				<div class="form-group">
			    <label for="phone">Téléphone</label>
			    <div style="width: 300px">
			    
			    <input type="text" class="form-control" name="phone" value="<?php echo $record->NUM_TELEPHONE; ?>">
			   
			  </div>
		</div>

			 	<div class="form-group">
			    <label for="adresse">Adresse</label>

			    <div style="width: 300px">

			    <input type="text" class="form-control" name="adresse" value="<?php echo $record->ADRESSE;?>">
			   
			  	</div>
			  </div>

 		<div class="form-group">
					   
					 <div class="form-group">
					    <label for="Photos">Photos</label>
			    <div style="width: 300px">
			    	<input type="hidden" name="sary" value="<?php echo $record->PHOTOS;?>">

					 <input type="file" name="file" value=""/>
	<img src="<?php echo base_url($record->PHOTOS);?>"style="width: 100px;height: 100px" style="width: 100px;height: 100px">

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
	
			

