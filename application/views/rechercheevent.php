<div class="container">
  <div class="row">
          <div class="col-md-4">
           <?php foreach ($serch as $rec ){?>
              <span style="padding: 10px; text-align: justify;"><?php echo $rec->TYPE_EVENEMENT;?>

              <div class="thumbnail" style="height:30rem;width: 30rem"> 
                <a href="<?php echo base_url().'fevent/event/'.$rec->ID_EVENEMENT?>">
                 <img  src="<?php echo base_url($rec->PHOTOS)?>" style="height: 200px" >  </a>     
              </span></p>
              <span style="padding: 10px;">Du:<?php echo date("d/m/y", strtotime($rec->DATE_EVENEMENT));?></span>au
              <span style="padding: 10px;"><?php echo date("d/m/y", strtotime($rec->DATE_EVENEMENT_FIN));?></span></p> 
            </div>
          </div>
            <?php }?>
            </div>
          </div>
  </div>