

<link rel="stylesheet"  href="<?php  echo base_url('assets/css/bootstrap.min.css') ;?> ">
<link rel="stylesheet"  href="<?php  echo base_url('assets/css/styles.css') ;?> 
 "><div class="container">
<h2>Illaigna</h2>
 
<?php echo  form_open('app/inscrire');?>
<h5></h5>
<input type="text" name="nom" value="<?php echo set_value('nom'); ?>" size="50" placeholder="Nom" class="form-control col-lg-4" /><br>


<input type="text" name="pseudo" value="<?php echo set_value('pseudo'); ?>" size="50" placeholder="Pseudo" class="form-control col-lg-4"/><br>

<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" placeholder="Mot de passe" class="form-control col-lg-4" /><br>

<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" placeholder="Confirmer" class="form-control col-lg-4" /><br>

<?php
echo form_submit('submit',"s'inscrire ","class='btn-primary'");?>
<?php echo anchor('app/login','se connecter');?>
</form>
</div>

<?php echo validation_errors(); ?>
