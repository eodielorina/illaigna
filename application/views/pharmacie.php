<div class="container">
		<div class="row">
             <div class="col-md-6 col-md-offset-3">
		<h3>Formulaire des Pharmacies:</h3>
	<form action="<?php echo base_url(); ?>pharmacieg/addpharmacie" method="post" >
		
		<input type="hidden" name="iduser" value="<?php echo $user['ID_UTILISATEUR'] ;?>">
				<div class="form-group">
			    <label for="Nom Pharmacie">Nom Pharmacie</label>
			    <div style="width: 300px">

			    <input type="text" class="form-control" name="nom" size="50" >
			  </div>
			  </div>

			 	<div class="form-group">
			    <label for="Téléphone">Téléphone</label>
			    <div style="width: 300px">
			    <input type="text" class="form-control" name="phone" size="50">
			  </div>
			  </div>

			  <div class="form-group">
					    <label for="adresse">Adresse</label>
			    <div style="width: 300px">

					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="adresse" ></textarea>
					  </div>
					  </div>

			  
	 <?php echo anchor("infos",'ANNULER',['class'=>'btn btn-danger'])?></td>
		    <button type="submit" class="btn btn-primary">ENREGISTRER</button>
		</div>
		</div>	
		</div>	
		
	</form>
	<style type="text/css">
	label{color: #337AB7
;}
</style>