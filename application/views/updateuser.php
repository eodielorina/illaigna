<link rel="stylesheet"  href="<?php  echo base_url('assets/css/form.css') ;?>  ">
<link rel="stylesheet"  href="<?php  echo base_url('assets/css/styles.css') ;?>  ">

<link rel="stylesheet"  href="<?php  echo base_url('assets/css/bootstrap.min.css') ;?> ">

 <div class="container">	
		<div class="row">
             <div class="col-md-6 col-md-offset-3">
	<?php echo form_open("utilisateur/update/{$model->ID_UTILISATEUR}",['class'=>'form form-horizontale'] );?>
			<input type="hidden" name="iduser" value=" <?php echo $model->ID_UTILISATEUR; ?>">
		<input type="text" name="nom" value="<?php echo $model->NOM; ?>" size="50" placeholder="Nom" class="form-control " style="width: 300px" /><br>


			<input type="text" name="pseudo" value="<?php echo $model->PSEUDO; ?>" size="50" placeholder="Pseudo" class="form-control " style="width: 300px"/><br>

			<input type="password" name="password" value="" size="50" placeholder="Mot de passe" class="form-control " style="width: 300px" /><br>

			<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" placeholder="Confirmer" class="form-control " style="width: 300px" /><br>

			Administrateur:<input type="checkbox" name="user" value="Administrateur" >
			Utilisateur:<input type="checkbox" name="user" value="Utilisateur"><br>

			 <button type="submit" class="btn btn-primary btn-lg" style="width: 300px">ENREGISTRER</button>
		</form>
		<?php echo validation_errors(); ?>

</div>
</div>
</div>

