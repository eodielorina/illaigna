		<br>
		<br>
		<br>
		
		<div class="container" ><h3 style="color: #21BA98;margin-left: 40px">Résultats  pour votre recherche:</h3>
</div>
<?php 

//pour evenement

	if (isset($eve)) {

		# ?>
		<div class="container">
			 <?php foreach ($eve as $record ){?> 
      
			   	<div class="col-xs-8 col-sm-6 col-md-5 p-2">
           
                <a href="<?php echo base_url().'evenement/event/'.$record->ID_EVENEMENT?>" style="text-decoration: none;">
		         <h3 style="color: #21BA98;margin-left: 40px"></h3>  <?php echo $record->NOM_EVENEMENT;?><h3>
		    <p class="thumbnail" style="color: "> <span style="padding: 10px; text-align: justify;color: #3FC1EA"><?php echo $record->TYPE_EVENEMENT;?></span></span></h3>
					<span style="padding: 10px;"><?php echo $record->DESCRIPTION;?></span> <br>
                     <i class="fa fa-calendar-alt" style="color: #21BA98"></i>

					Du:<?php echo date("d/m/y", strtotime($record->DATE_EVENEMENT));?> au
                  <?php echo date("d/m/y", strtotime($record->DATE_EVENEMENT_FIN));?><br>
					<span style="padding: 10px;"><?php echo $record->Lieu;?></span>
					<span style="padding: 10px;"><?php echo $record->Tarif;?></span></p> </a>

	 
          </div>
            <?php }}?>
			</div>


<?php 
//pourinfopratiques rien por le momoent

//pour pharmacie

           if (isset($gard)) {
		# ?>
		<div class="container"><h3></h3></div>
			
			 <?php foreach ($gard as $record ){?> 
      
			   	<div class="col-xs-8 col-sm-6 col-md-5 p-2">
              
		          <h3><span style="padding: 10px; text-align: justify;color: #3FC1EA"><?php echo $record->NOM_PHARMACIE;?></span> <br></h3>

		         <p class="thumbnail" style="color: #3FC1EA">  <span style="padding: 10px; text-align: justify;"><?php echo $record->ADRESSE_PHARMACIE;?></span><br> </span><br>
						  <span style="padding: 10px; text-align: justify;"><?php echo $record->NUMERO_PHARMACIE?>

		      
                     <i class="fa fa-calendar-alt" style="color: #21BA98"></i>
		        
		        Du:<span style="padding: 10px; text-align: justify;"><?php echo $record->Date_debut;?></span>au
						  
		        <span style="padding: 10px; text-align: justify;"><?php echo $record->Date_fin;?></span><br></p>
		       


						  
		        
          </div>
            <?php }}?>


<?php 
//pour infopratiques

           if (isset($urg)) {
		# ?>
		<div class="container"><h3></h3>
			
			 <?php foreach ($urg as $record ){?> 
      
			   	<div class="col-xs-8 col-sm-6 col-md-5 p-2">
          
                
		           <h3><span style="padding: 10px; text-align: justify;color: #3FC1EA"><?php echo $record->NOM_SERVICE;?></span> </h3><br>
		           <p class="thumbnail" style="color:#3FC1EA "><span style="padding: 10px; text-align: justify;"><?php echo $record->TYPE_SERVICE;?></span><br>
						  
		        <span style="padding: 10px; text-align: justify;"><?php echo $record->NUM_PHONE;?></span><br></p>


						  
		    </div>    
          </div>
            <?php }}?>
            <?php 
//pour public

           if (isset($pub)) {
           
		# ?>
		<div class="container"><h3></h3>
			
			 <?php foreach ($pub as $record ){?> 
      
			   	<div class=" col-xs-8 col-sm-6 col-md-5 p-2">
              
                <a href="<?php echo base_url().'demarche/publique/'.$record->ID_PUBLIC?>" style="text-decoration: none;">
		          <h3><span style="padding: 10px; text-align: justify;color: #3FC1EA"><?php echo $record->NOM_SERVICE;?></span> <br></h3>
		          <p class="thumbnail" style="color: "><span style="padding: 10px; text-align: justify;"><?php echo $record->DEMARCHE;?></span><br>
		        <span style="padding: 10px; text-align: justify;"><?php echo $record->Etape;?></span><br>
		        <span style="padding: 10px; text-align: justify;"><?php echo $record->Class?></span><br>
		        <span style="padding: 10px; text-align: justify;"><?php echo $record->papier1;?></span><br>
		        <span style="padding: 10px; text-align: justify;"><?php echo $record->papier2;?></span><br>
		        <span style="padding: 10px; text-align: justify;"><?php echo $record->papier3;?></span><br>


</p>

			</div>			  
		        
          </div>
            <?php }}?>
      <style type="text/css">

      .text2{display: none;}
      .text4{display: none;}

      </style>