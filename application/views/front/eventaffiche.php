<body>
    <div class="container">
 
        <h2  style="color: #21BA98 ">
                <?php echo $data->TYPE_EVENEMENT;?>
                <?php echo $data->NOM_EVENEMENT;?>
                 <br>
       </h2>
             <div class="row">
			    <div class="col-md-3 col-sm-3 col-xs-6">
            <tr>
       <img  src="<?php echo base_url($data->PHOTOS)?>" style="height:300px" data-toggle="modal" data-target="#flipFlop">  
				      <div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                  <div class="modal-content" style="width:300px">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <img  src="<?php echo base_url($data->PHOTOS)?>" style=";height:350px">
                  </div>
                  <div class="modal-footer">
                  </div>
                  </div>
                  </div>
                  </div>   
      </div>
                <div class="col-md-9 col-sm-8 col-xs-12" style="float: right; padding-top: 30px">
                     <i class="fa fa-calendar-alt" style="color: #21BA98"></i>
Du:<?php echo date("d/m/y", strtotime($data->DATE_EVENEMENT));?> au
                  <?php echo date("d/m/y", strtotime($data->DATE_EVENEMENT_FIN));?><br>
                 <i class="fa fa-map-marker" style="color: #21BA98"></i>
Lieu:<?php echo $data->Lieu;?><br>
                <i class="fa fa-money-bill" style="color: #21BA98"></i>
 Tarif:<?php echo $data->Tarif;?>
                  <br>
        <HR size=2 align=left width="50%">
               Classé dans: <br><p class="thumbnail" style="width: 30rem;color: #21BA98" ><?php echo $data->DESCRIPTION;?></span></p>
                 
                  <br>   
                          
             </div>

    </div>

        <a href="<?=base_url('evenement') ?>" class="btn  btn-lg" style="color: #21BA98 "><i class="fa fa-arrow-left fa-lg" aria-hidden="true" ></i>Page précédante</a>
  </div>