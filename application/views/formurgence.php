<div class="container">
 <div class="row">
             <div class="col-md-6 col-md-offset-3">
		<h3>Formulaire des Numéros d'urgence:</h3>
			<form action="<?php echo base_url(); ?>numurgence/addurg" method="post" >
		
			 <div class="form-group">
			<input type="hidden" name="iduser" value="<?php echo $user['ID_UTILISATEUR'] ;?>">
			
		</div>
			 <div class="form-group">

		    <label for="nom service">Nom service</label>
			    <div style="width: 300px">

		    <select class="form-control" id="exampleFormControlSelect1" name="idservice">
		      <?php
					       foreach($servurg as $row){

					      	echo '<option value="'.$row->ID_SERVICE.'">'.$row->NOM_SERVICE.'</option>';

					      }
					      ?>
		    </select>
 		 </div>
 		 </div>


		 <div class="form-group">
	    <label for="type service">Type service</label>
			    <div style="width: 300px">

	    <select class="form-control" id="exampleFormControlSelect1" name="type">
	       <?php
					       foreach($type as $row){

					      	echo '<option value="'.$row->NOM_SERVICE.'">'.$row->NOM_SERVICE.'</option>';
					      }
					      ?>
	    </select>
  		</div>
  		</div>

				  <div class="form-group">
		    <label for="Téléphone">Téléphone</label>
			    <div style="width: 300px">

		    <input type="text" class="form-control" name="phone">
		     </div>
		     </div>
		     
  <?php echo anchor("Numurgence",'ANNULER',['class'=>'btn btn-danger'])?></td>

		    <button type="submit" class="btn btn-primary">ENREGISTRER</button>
		  </div>
  </form>	
		 
	</div>
	</div>
	
	</div>
	<style type="text/css">
	label{color: #337AB7
}
</style>