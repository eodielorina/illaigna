<link rel="stylesheet"  href="<?php  echo base_url('assets/css/form.css') ;?>  ">

<link rel="stylesheet"  href="<?php  echo base_url('assets/css/bootstrap.min.css') ;?> ">
 <div class="container">	
		<div class="row">
             <div class="col-md-6 col-md-offset-3">
			<h3>Formulaire des Utilisateurs</h3>
			

			<?php echo  form_open('utilisateur/enregistrer');?>
			<h5></h5>
			<input type="text" name="nom" value="<?php echo set_value('nom'); ?>" size="50" placeholder="Nom" class="form-control "  style="width: 300px"/><br>


			<input type="text" name="pseudo" value="<?php echo set_value('pseudo'); ?>" size="50" placeholder="Pseudo" class="form-control "  style="width: 300px"/><br>

			<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" placeholder="Mot de passe" class="form-control "  style="width: 300px" /><br>

			<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" placeholder="Confirmer" class="form-control "  style="width: 300px" /><br>

			Administrateur:<input type="checkbox" name="user" value="Administrateur" >
			Utilisateur:<input type="checkbox" name="user" value="Utilisateur"><br>
				<?php echo anchor("utilisateur",'ANNULER',['class'=>'btn btn-danger'])?></td>

			<button type="submit" class="btn btn-primary" >ENREGISTRER</button>
			
		</form>
		<?php echo validation_errors(); ?>

</div>
</div>
</div>

