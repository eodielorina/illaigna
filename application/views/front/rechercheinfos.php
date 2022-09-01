<div class="container">
  <div class="row">
           <?php foreach ($serch as $rec ){?>
        <div class="col-xs-8 col-sm-6 col-md-5 p-2" >
              <div class="thumbnail" style="height:55rem;width: 30rem"> 
              <span style="padding: 10px; text-align: justify;color: #21BA98"><?php echo $rec->TYPE_PAPIER;?></span><br>
              <span style="padding: 10px;">Le:<?php echo date("d/m/y", strtotime($rec->DEMARCHE));?></span>au
               
            </div>
          </div>
            <?php }?>
          </div>
  </div>
  <style type="text/css">
  @media (max-width: 1100px) {
         .thumbnail{margin-top:65px;}

   
    }      
  }



  </style>