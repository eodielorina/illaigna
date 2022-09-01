<body>
  <!--affiche les evenement de la semaine-->
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-sm-8 col-md-8 p-2">
    <h2 style="color: #21BA98">Les evenements pour cette semaine:</h2>
    
        </div>

          <div class="col-md-6 col-sm-6 col-xs-6">
               <form action="<?php echo site_url('evenement/date');?>" method="post">
                  <input type="date" name="date" value="<?= date("Y-m-d"); ?>" >
                <input type="submit" name="submit" value="Recherche" class="btn bouton ">
              </form>

         </div>

         <div class="col-md-6 col-sm-4 col-xs-2">
               <form action="<?php echo site_url('evenement/recherche');?>" method="post">


                          <div class="recherche">
                                  <input type="text" class="Termsearch" placeholder="Recheche" name="lettre">
                                        <button type="submit" class="btn Buttonsearch">
                                          <i class="fa fa-search fa-2x fa-rotate-45" id="icone"  ></i>
                                       </button> 
                                     </div>
    
            </form> 

        </div>

    </div>
   <div class="col-xs-10 col-sm-8 col-md-8 p-2">
<?=$this->pagination->create_links();?>    
          
        </div>

   </div>

   <br>
   <br>

<div class="container">

    <div class="row">

           <?php foreach ($query as $rec ){?>

          <?php foreach ($rec as $record ){?> 
      
			   	<div class="col-xs-8 col-sm-6 col-md-5 p-2">
              <div class="thumbnail" style="height:55rem;width: 30rem"> 
                <a href="<?php echo base_url().'evenement/event/'.$record->ID_EVENEMENT?>">
					       <img  src="<?php echo base_url($record->PHOTOS)?>" >  </a>    	
		          <span style="padding: 10px; text-align: justify;"><?php echo $record->TYPE_EVENEMENT;?>
						  </span></p>
						  <span style="padding: 10px;">Du:<?php echo date("d/m/y", strtotime($record->DATE_EVENEMENT));?></span>au
						  <span style="padding: 10px;"><?php echo date("d/m/y", strtotime($record->DATE_EVENEMENT_FIN));?></span></p> 
		        </div>
          </div>
            <?php }}?>
          </div>
  </div>
</div>
<style type="text/css">
  p{text-align: justify;} 
  .Buttonsearch{ position: absolute;left:130px;top: -2px;color:white;cursor:pointer;width: 40px;height: 30px;background:#21BA98;border-radius: 45%;font-style: italic;}
  .Termsearch{width: 150px; border: 1px solid #21BA98; border-right: none;height: 28px; border-radius: 25px; outline: none;white-space:nowrap;}         .recherche{width: 150px} 
.fa-rotate-45{ -ms-transform:rotate(-20deg); -webkit-transform:rotate(-20deg);transform:rotate(-20deg);position: absolute;top: 0;margin-left: -15px}
input::placeholder {text-align: center; color:#21BA98;}
input::-ms-input-placeholder
  {
  text-align: center; 
  } 
  body,html{padding: 0;margin:0;}
 
.bouton{background: #21BA98}

@media(max-width:   1065px){
  .lettre, .text4{font-size: 10px;margin-left: 40px}

}
@media(max-width:   992px){
  .lettre, .text4{display: none;}

}
</style>