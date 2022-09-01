<body>
  <!--affiche les evenement de la semaine-->
    <div class="container">
      <div class="row">
      
    
       <br>
       <br>
       <br>
       <br>
       <br>


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
   <div class="alert alert-danger" role="alert">Aucun résultat trouvé pour cette recherche.</div>
          
        </div>

   </div>

   <br>
   <br>


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


</style>