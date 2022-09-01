<body>
    <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 p-2">
<h2 style="color: #3FC1EA;"><i class="fa fa-globe fa-lg" aria-hidden="true" style="color: #3FC1EA;margin-left: -50px"></i>Étrangers</h2>
        </div>
      
         
        
        <?php 
              foreach ($query as $data) {?> 
        
        <div class="col-xs-12 col-sm-6 col-md-5 p-2"> 
<!--etape 1-->
            <div class="mainDiv">

        <h3 style="color: #3FC1EA;"><?php echo $data->NOM_SERVICE;?></h3>
                <div class="expandableCollapsibleDiv">
            <img src="<?=base_url('images/up-arrow.jpg')?>"  />
        <a><p style=";"><?php echo $data->papier1;?></a>
              </p>
            <ul>
        
                <li><p style=";color: #3FC1EA "><?php echo $data->Etape;?></p></li>
            </ul>
              </div>
        </div>
<!--etape 2-->
<div class="mainDiv">

                <div class="expandableCollapsibleDiv">
            <img src="<?=base_url('images/up-arrow.jpg')?>"  />
        <a><p style=";"><?php echo $data->papier2;?></a>
              </p>
            <ul>
        
                <li><p style=";color: #3FC1EA "><?php echo $data->Class;?></p></li>
            </ul>
              </div>
        </div>

<div class="mainDiv">

                <div class="expandableCollapsibleDiv">
            <img src="<?=base_url('images/up-arrow.jpg')?>"  />
        <a><p style=";"><?php echo $data->papier3;?></a>
              </p>
            <ul>
        
                <li><p style=";color: #3FC1EA "><?php echo $data->DEMARCHE;?></p></li>
            </ul>
              </div>
        </div>


</div>

      <?php  }?>
        
     <div class="col-xs-12 col-sm-8 col-md-8 p-2">
<?=$this->pagination->create_links();?>    
          
        </div>

            </div>
        
    <style type="text/css"> @media (max-width: 425px){
                h2{margin-left: 80px}
              }
     @media(max-width:   1105px){
  .lettre,.text4{display: none;}}
.mainDiv {
    font-family: Verdana;
    font-size: 14px;
    padding-right: 5px;
    background: #FFF;
    padding: 20px;
}

.expandableCollapsibleDiv img {
    cursor: pointer;
    margin-right: 10px;
    margin-top: 5px;
    padding-left: 10px;
    float: left;
}

.expandableCollapsibleDiv ul {
    border-bottom: 1px solid #3FC1EA ;
    clear: both;
    list-style: outside none none;
    margin: 0;
    padding-bottom: 10px;
    display: none;
}

    </style>
    <script type="text/javascript">
          
            $('.expandableCollapsibleDiv > img').click(function (e) {
                var showElementDescription = $(this).parents('.expandableCollapsibleDiv').find('ul');

                if ($(showElementDescription).is(':visible')) {
                    showElementDescription.hide("fast", "swing");
                    $(this).attr("src", "<?=base_url('images/up-arrow.jpg')?>");

                } else {
                    showElementDescription.show("fast", "swing");
                    $(this).attr("src", "<?=base_url('images/down-arrow.jpg')?>");

                }
            });
     
    </script>
