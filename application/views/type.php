<link rel="stylesheet"  href="<?php  echo base_url('assets/css/form.css') ;?>  ">

<link rel="stylesheet"  href="<?php  echo base_url('assets/css/bootstrap.min.css') ;?> ">
<link rel="stylesheet"  href="<?php  echo base_url('assets/css/styles.css') ;?>"> 

<div class="container">
	<div class="row justify-content-center">
	<div class="col-md-offset-3 col-md-6 " style="padding: 50px;">
			<h2 style="text-align: center;">Ajouter les type des document:</h2>

			<?php echo  form_open('type/ajouter');?>
			<h5></h5>
			<input type="text" name="typep" value="<?php echo set_value('type'); ?>" size="50" placeholder="Type papier" class="form-control " /><br>


			<input type="text" name="types" value="<?php echo set_value('types'); ?>" size="50" placeholder="Type service" class="form-control "/><br>
			<input type="text" name="types" value="<?php echo set_value('types'); ?>" size="50" placeholder="Type " class="form-control "/><br>
			<?php
			echo form_submit('submit',"AJOUTER ","class='btn-primary  btn-lg btn-block'");?>
		</form>
</div>
</div>
</div>

<?php echo validation_errors(); ?>