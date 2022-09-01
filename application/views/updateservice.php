<link rel="stylesheet"  href="<?php  echo base_url('assets/css/form.css') ;?>  ">
<link rel="stylesheet"  href="<?php  echo base_url('assets/css/bootstrap.min.css') ;?> ">
<link rel="stylesheet"  href="<?php  echo base_url('assets/css/styles.css') ;?> 
 ">
 <div class="container">	
		<div class="row">
             <div class="col-md-6 col-md-offset-3">
	<?php echo form_open("nouveau/update/{$model->ID_SERVICE}",['class'=>'form form-horizontale'] );?>
			<input type="text" name="nom" value="<?php echo $model->NOM_SERVICE; ?>" size="50" placeholder="Nom service" class="form-control "  style="width: 300px" /><br>
			<input type="hidden" name="idserv" value=" <?php echo $model->ID_SERVICE; ?>">

				 <div class="form-group">
				    <label for="exampleFormControlSelect1">Code service</label>
			 <select class="form-control" id="exampleFormControlSelect1" name="code" style="width: 300px" >
			 	<?php
					       foreach($data as $row){

					      	echo '<option value="'.$row->rubriques.'">'.$row->rubriques.'</option>';
					      }
					 ?>
			 	
			</select>
				<br>
							 <div class="form-group">
				    <label for="exampleFormControlSelect1">Catégorie pour le démarche public</label>

			 <select class="form-control" id="exampleFormControlSelect1" name="categorie" style="width: 300px">
			 	<option value="PAPIERS-CITOYENNETÉ">PAPIERS-CITOYENNETÉ </option>
			 	<option value="FAMILLES ">FAMILLES </option>
			 	<option value="SOCIAL-SANTÉ  ">SOCIAL-SANTÉ  </option>
			 	<option value="TRAVAIL ">TRAVAIL </option>
			 	<option value="LOGEMENT  ">LOGEMENT  </option>
			 	<option value="TRANSPORTS ">TRANSPORTS </option>
			 	<option value="ARGENT  ">ARGENT  </option>
			 	<option value="JUSTICE ">JUSTICE </option>
			 	<option value="ÉTRANGERS">ÉTRANGERS</option>
			 	<option value="LOISIRS ">LOISIRS </option>


				     
			</select>
			<br>



							 <div class="form-group">
				    <label for="exampleFormControlSelect1">Classification</label>

			 <select class="form-control" id="exampleFormControlSelect1" name="type" style="width: 300px" >
			 	<option value="Type">Type</option>
			 	<option value="Service">Service</option>

				     
			</select>
			<br>
			 <button type="submit" class="btn btn-primary btn-lg" style="width: 300px" >ENREGISTRER</button>
		</form>
</div>
</div>
</div>

<?php echo validation_errors(); ?>
<script type="text/javascript">
    $('.btninfo').click(function(e){
       alert("Insertion efffectuer evec succes");
        
    });
</script>

<style type="text/css">
	label{
		color: blue;
	}
	
</style>