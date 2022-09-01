
 <div class="container">	
		<div class="row">
             <div class="col-md-6 col-md-offset-3">
<h3>Formulaire  Public:</h3>
	<form class="form form-group" method="post" action="<?php echo base_url(); ?>publiqueinfo/addpub" enctype="multipart/form-data"/>
			<input type="hidden" name="iduser" value="<?php echo $users ['ID_UTILISATEUR'] ;?>">
			 <div class="form-group">
				    		<label for="exampleFormControlSelect1">Nom service</label>
					    <select class="form-control content" id="exampleFormControlSelect1" name="idservice"  style="width: 300px">
					    	
					      <?php
					       foreach($servpub as $row){

					      	echo '<option value="'.$row->ID_SERVICE.'">'.$row->NOM_SERVICE.'</option>';
					      }
					      ?>
					 </select>
			</div>
				
			<div class="form-group">
				  <label for="exampleFormControlSelect1">Type </label>
			<input class="form-control" id="exampleFormControlTextarea1"  name="papier1" style="width: 300px">

			</div>	
			<div class="form-group">
				    <label for="exampleFormControlSelect1">Demarche à suivre</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="etape" style="width: 300px"></textarea>


			</div>	
 			<div class="form-group">
				    <label for="exampleFormControlSelect1">Type </label>
					<input class="form-control" id="exampleFormControlTextarea1"  name="papier2" style="width: 300px">


			</div>	
			<div class="form-group">
				    <label for="exampleFormControlSelect1">Demarche à suivre</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="class" style="width: 300px"></textarea>


			</div>			
			<div class="form-group">
				    <label for="exampleFormControlSelect1">Type </label>
					<input class="form-control" id="exampleFormControlTextarea1"  name="papier3" style="width: 300px">


			</div>	
	
		<div class="form-group">
				    <label for="exampleFormControlSelect1">Demarche à suivre</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="recup" style="width: 300px"></textarea>


			</div>		
			
	
			</div>
			</div>
			<div class="container">
			<div class="col-md-offset-3 col-md-6" >
				<?php echo anchor("publiqueinfo",'ANNULER',['class'=>'btn btn-danger'])?></td>

			<button type="submit" class="btn btn-primary">ENREGISTRER</button>
			</div>
			</div>
			</div>
	</form>		


<style type="text/css">
	label{color: #337AB7
;}
</style>