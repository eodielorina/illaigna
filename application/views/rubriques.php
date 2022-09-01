<link rel="stylesheet"  href="<?php  echo base_url('assets/css/form.css') ;?>  ">

<link rel="stylesheet"  href="<?php  echo base_url('assets/css/bootstrap.min.css') ;?> ">
<link rel="stylesheet"  href="<?php  echo base_url('assets/css/styles.css') ;?>"> 

<div class="container">
	<div class="row justify-content-center">
	<div class="col-md-offset-3 col-md-6 " style="padding: 50px;">
			<h2 style="text-align: center;">Ajouter des nouveaux rubriques:</h2>

			<?php echo  form_open('nouveau/rubrique');?>
			<h5></h5>
			<input type="text" name="nom" value="<?php echo set_value('nom'); ?>" size="50" placeholder="Nom service" class="form-control " /><br>

			
			<?php
			echo form_submit('submit',"AJOUTER ","class='btn-primary  btn-lg btn-block btninfo'");?>
		</form>
</div>
</div>
</div>

<?php echo validation_errors(); ?><script type="text/javascript">
    $('.btninfo').click(function(e){
       alert("Insertion efffectuer evec succes");
        
    });
</script>