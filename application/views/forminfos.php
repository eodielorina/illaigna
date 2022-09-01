<div class="container">
	<div class="row">
             <div class="col-md-6 col-md-offset-3">
	<h3>Formulaire Infos Pratiques:</h3>
<form method="post" action="<?php echo base_url();?>infos/add" enctype="multipart/form-data" />

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
 		 </div>

 		 <input type="hidden" name="iduser" value="<?php echo $user['ID_UTILISATEUR'] ;?>">
 		 
		 <div class="form-group">
		    <label for="Téléphone">Téléphone</label>
			    <div style="width: 300px">

		    <input type="text" class="form-control" name="phone" >
		  </div>
		  </div>

		 		  <div class="form-group">
		    <label for="Adresse">Adresse</label>
			    <div style="width: 300px">

		    <input type="text" class="form-control" name="adresse" >
		  </div>
		  </div>
		
		  <div class="form-group">
		    <label for="Photos">Photos</label>
			    <div style="width: 300px">

					    <input type="file" name="file" class="form-control">
					 </div>
		  </div>
					 
			 <?php echo anchor("infos",'ANNULER',['class'=>'btn btn-danger'])?></td>

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