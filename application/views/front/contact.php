<div class="container">
<h1>Contact</h1>
<div class="row">

  <div class="col-md-5 content">
<p class="contact" style="">Pour nous contacter veuillez remplir le formulaire ci-dessous!
<br></p>
    

        <div class="col-md-8 col-xs-offset-2" style="margin-left: 0">

<?php if($error = $this->session->flashdata('msg')){ ?>

       <p style="color: white;"> <?php echo  $error; ?><p>

  <?php } ?> </p>
        </div>
        <form action="<?php echo base_url('contact/message'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input name="nom" placeholder="Nom" type="text" value="<?php echo set_value('nom'); ?>" class="form-control contform" />
            <?php echo form_error('nom', '<span class="text-danger">','</span>'); ?>
        </div>
        
        <div class="form-group">
            <input name="email" placeholder="E-mail" type="text" value="<?php echo set_value('email'); ?>" class="form-control contform" />
            <?php echo form_error('email', '<span class="text-danger">','</span>'); ?>
        </div>
        
        <div class="form-group">
            <textarea name="message" rows="4" class="form-control contform" placeholder="Message"><?php echo set_value('message'); ?></textarea>
            <?php echo form_error('message', '<span class="text-danger">','</span>'); ?>
        </div>
        
         <!-- <i class="fa fa-paperclip" aria-hidden="true"></i> --><input name="file"  type="file" value="<?php echo set_value('file'); ?>" class="" accept=".doc,.docx, .pdf, .png, .jpeg, .jpg,.gif" />
    
        <button name="submit" type="submit" class="btn contform"  style="background-color: #21BA98;font-size: 18px" />Envoyer</button>
        </form>
    <br> 
<a href="https://www.facebook.com/inovaticmada/"><i class="fa fa-facebook fa-2x" style="color: #3b5998;margin-left:30%"></i></a>
<a href="https://twitter.com/inovaticMada" ><i class="fa fa-twitter fa-2x" style="color: #00acee;margin-left: 5px"></i></a>
  

<p style="margin-left:10%;color: white;font-size: 15px"><i class="fa fa-phone fa-lg" aria-hidden="true" ></i>:+261 34 74 299 98 / 032 69 351 33 <br>
﻿<i class="fa fa-envelope fa-lg" aria-hidden="true" style="color: white;"></i>:illaignainfo@gmail.com</p>
</div>
</div>
</div>

<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>

  <script type="text/javascript">
$(document).ready(function(){
  $('.contact').addClass('active');
  
});
  </script>
  <style type="text/css">
    input,textarea{text-align: center;}
    .contform{width: 500px}
    .alert{width: 500px}
  </style>
<script type="text/javascript">
$(document).ready(function(){
    $('.contact').addClass('active');
});     
</script>
<style type="text/css">
@media(max-width: 1325px){
   .alert, .contform{width:400px}
}
@media(max-width: 1080px){
   .alert, .contform{width:300px}
}
@media(max-width: 768px){
   .content{margin-left: 80px}
   h1{margin-left: 200px}
}
@media(max-width: 610px){
   h1,.content{margin-left: 0};
}
@media(max-width: 374px){
   .content{margin-top: 30px};
}
.content{
  position: absolute;
  top:15vh;
  background: #A9CA38;
  padding:40px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px  #000;
}
</style>
