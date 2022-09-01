<link rel="stylesheet"  href="<?php  echo base_url('assets/css/styles.css') ;?>  ">
<link rel="stylesheet"  href="<?php  echo base_url('assets/css/form.css') ;?>  ">


 <link rel="stylesheet"  href="<?php  echo base_url('assets/css/bootstrap.min.css') ;?> 
 ">



<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-offset-3 col-md-6 content">
				<h2 style="text-align: center;font-style : italic;">Admin/Illaigna</h2><br>
			
       	<?php  echo form_open('publiqueinfo/entrer');?>
			<div class="form-group ">
			<input type="text" name="pseudo"  size="50" placeholder="Pseudo" class="form-control " required="" /><br>
			</div>
			<div class="form-group ">

			<input type="password" name="password" size="50" placeholder="Mot de passe" class="form-control  " required="" /><br>
		<?php  echo form_submit('submit','Se connecter',"class='btn-primary btn-lg btn-block'");
		echo form_close();
	echo validation_errors();
?>
</div>
</div>
</div>

