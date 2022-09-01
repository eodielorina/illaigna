<div class="container">
  <div class="row">
           <?php foreach ($serch as $rec ){?>
        <div class="col-xs-8 col-sm-6 col-md-5 p-2" >
              <div class="thumbnail" style="height:55rem;width: 30rem"> 
                <a href="<?php echo base_url().'evenement/event/'.$rec->ID_EVENEMENT?>">
                 <img  src="<?php echo base_url($rec->PHOTOS)?>"  >  </a>     
              <span style="padding: 10px; text-align: justify;color: #21BA98"><?php echo $rec->TYPE_EVENEMENT;?></span><br>
              <span style="padding: 10px;">Le:<?php echo date("d/m/y", strtotime($rec->DATE_EVENEMENT));?></span>au
              <span style="padding: 10px;"><?php echo date("d/m/y", strtotime($rec->DATE_EVENEMENT_FIN));?></span></p> 
            </div>
          </div>
            <?php }?>
          </div>
  </div>
  <style type="text/css">
  @media (max-width: 1100px) {
         .thumbnail{margin-top:65px;}

   
    }      

 @media (max-width: 1052px) {
       .lettre, .text4{font-size: 10px;margin-left: 40px}

   
    }      
  @media (max-width: 992px)
 {
        .lettre, .text4{display: none;}
   
    }   

  </style>