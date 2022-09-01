<!DOCTYPE html>
<html>
<head>
    <title>
    Illaigna
    </title>
            <meta charset="utf-8">
          
  <link rel="icon" href="<?=base_url('images/illogo.png')?>">
            <script src="<?php echo base_url('front/js/jquery.js'); ?>"></script>
            <script src="<?php echo base_url('front/js/jquery.min.js'); ?>"></script>
            <script src="<?php echo base_url('front/js/bootstrap.min.js'); ?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('front/css/styles.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('front/css/bootstrap.min.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('front/css/font-awesome.min.css'); ?>">
            <script src="<?php echo base_url('front/js/jquery.js'); ?>"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
<!--<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>-->
<div class="container-fluide">
      <!--responsivite-->
              <div class="carousel slide responsivite res1" id="pictures"  data-ride="carousel" data-interval="5000">

                                    <ol class="carousel-indicators boule1">
                                     <li data-target="#pictures" data-slide-to="0" class="active  "></li>
                                     <li data-target="#pictures" data-slide-to="1" ></li>
                                    </ol>

                                     <!-- Content -->
                        <div class="carousel-inner" role="listbox">
                                     <!-- Slide 1 -->
                                       <a href="<?php echo base_url().'Pharmacie'?>">
                                     <div class="item active">
                            <img src="<?=base_url('images/plus.png')?>" class="image-2 img-responsive img-fluid plus">

                                          <div class="carousel-caption">
                                                 <h2 id="info" class="h2-responsive">Infos pratique</h2>
                                                <p id="infos"  style="color: white;font-style: italic;">Pharmacies de garde
                                                </p> 
                                           </div>
                                          </a>
                                     </div>
                              
                                 <!-- Slide 2 -->
                                   <!-- Slide 3 -->
                                     <a href="<?php echo base_url().'Pharmacie'?>">
                                    <div class="item">
                                    <img src="<?=base_url('images/e.png')?>" class="image-2 img-responsive img-fluid plus" >

                                         <div class="carousel-caption">
                                         <h2 id="info" class="h2-responsive">Infos pratique</h2>
                                          <p class="infos">Numéros d'urgence</p>         
                                       </div>

                                      </a>
                                   </div>

                     </div>
              </div>

<!--responvise2-->

<!--responsivite-->
               <div class="carousel slide responsivite  res2" id="sary"  data-ride="carousel" data-interval="3000">

                              <ol class="carousel-indicators boule2">
                               <li data-target="#sary" data-slide-to="0" class="active  "></li>
                               <li data-target="#sary" data-slide-to="1" class=" "></li>
                               </ol>

                         <!-- Content -->
                         <div class="carousel-inner" role="listbox">
                         <!-- Slide 1 -->
                         <a href="<?php echo base_url().'Evenement'?>">
                                  <div class="item active ">
                  
                                       <img src="<?=base_url('images/e.png')?>" class="image-2 img-responsive img-fluid plus" >

                                        <div class="carousel-caption">
                                           <h2 id="eve" class="h2-responsive">Évènements</h2>
                                          <p id="even"  style="color: white;font-style: italic;">Sorties,Soirées,Spéciales.
                                          </p> 
                                       </div>
                                  </a>
                                 </div>
                  
                     <!-- Slide 2 -->
                       <!-- Slide 3 -->
                        <a href="<?php echo base_url().'Evenement'?>">
                                  <div class="item ">
                                     <img src="<?=base_url('images/d.png')?>" class="image-2 img-responsive img-fluid plus" >

                                     <div class="carousel-caption">
                                       <h2 id="eve" class="h2-responsive">Évènements</h2>
                                          <p class="even">Dans la région Atsinanana</p>         
                                       </div>

                                      </a>
                                   </div>

                        </div>
               </div>

<!--sponvise3-->
 <!--responsivite-->
               <div class="carousel slide responsivite  res3" id="sar"  data-ride="carousel" data-interval="5000">

                                      <ol class="carousel-indicators  boule3">
                                           <li data-target="#sar" data-slide-to="0" class="active  boule"></li>
                                           <li data-target="#sar" data-slide-to="1" class=" boule"></li>
                                       </ol>

                         <!-- Content -->
                                    <div class="carousel-inner" role="listbox">
                         <!-- Slide 1 -->
                         <a href="<?php echo base_url().'demarche'?>">
                                       <div class="item active">
                  
                                           <img src="<?=base_url('images/d.png')?>" class="image-2 img-responsive img-fluid plus">

                                             <div class="carousel-caption">
                                              <h2 id="dem" class="h2-responsive">Démarches</h2>
                                             <p id="dema"  style="color: white;font-style: italic;">Démarches Administratives,
                                             </p> 
                                          </div>
                                        </a>
                                     </div>
                  
                     <!-- Slide 2 -->
                       <!-- Slide 3 -->
                       <a href="<?php echo base_url().'demarche'?>">
                                      <div class="item ">
                                       <img src="<?=base_url('images/plus.png')?>" class="image-2 img-responsive img-fluid plus" >
                                              <div class="carousel-caption">
                                                 <h2 id="dem" class="h2-responsive">Démarches</h2>
                                                 <p class="dema">Publiques,Infos nécessaires.</p>         
                                             </div>
                                        </a>
                                     </div>

                              </div>
               </div>

<!--sponvise4-->

 <!--responsivite-->
               <div class="carousel slide responsivite  res4" id="photos"  data-ride="carousel" data-interval="10000">

                                   <ol class="carousel-indicators boule4">
                                        <li data-target="#photos" data-slide-to="0" class="active  boule"></li>
                                        <li data-target="#photos" data-slide-to="1" class=" boule"></li>

                                        </ol>

                         <!-- Content -->
                                     <div class="carousel-inner" role="listbox">
                         <!-- Slide 1 --> <a href="<?php echo site_url('accueil') ?>">
                                           <div class="item active">
                                            
                                       
                                           <img src="<?=base_url('images/plus.png')?>" class="image-2 img-responsive img-fluid " >
                                           <div class="carousel-caption">
                                               <p class="droits">Tous droits réservés Illaigna 2020</p>
                                              </div>
                                            </a>  
                                          
                                           </div>
                  
                     <!-- Slide 2 -->
                       <!-- Slide 3 --> <a href="<?=base_url('webradio')?>">
                                       <div class="item ">
                                            <img src="<?=base_url('images/responsive4.png')?>" class="image-2 img-responsive img-fluid " ></a>
                                        </div>

                                     </div>
                                    
               </div>

<!--endresponvise-->
 </div>
<div class="container-fluide">

    <div class="row">
             <div class="col-md-3 col-sm-3  carousel slide infopratiques" id="picture"  data-ride="carousel" data-interval="3000">

                              <ol class="carousel-indicators  ">
                               <li data-target="#picture" data-slide-to="0" class="active  boule"></li>
                               <li data-target="#picture" data-slide-to="1" class=" boule"></li>
                              </ol>

                         <!-- Content -->
                         <div class="carousel-inner" role="listbox">
                         <!-- Slide 1 -->  <a href="<?php echo base_url().'Pharmacie'?>">
                                  <div class="item active ">
                           
      
                                      <img src="<?=base_url('images/Fichier1.png')?>" class="image-1 d-block w-100 fichier1" alt="" >

                                       <div class="carousel-caption">
                                           <h2 id="info" class="h2-responsive">Infos pratique</h2>
                                          <p id="infos"  style="color: white;font-style: italic;">Pharmacies de garde
                                          </p> 
                                        </div>
                                      </a>
                                  </div>
                 
                     <!-- Slide 2 -->
                       <!-- Slide 3 -->
                       <a href="<?php echo base_url().'Pharmacie'?>">
                                  <div class="item">
                                    <img src="<?=base_url('images/Fichier2.png');?>" alt="" class="d-block w-100 img-responsive img-fluid image-1 fichier1">

                                         <div class="carousel-caption">
                                         <h2 id="info" class="h2-responsive">Infos pratique</h2>
                                          <p class="infos">Numéros d'urgence</p>         
                                        </div>
                                        </a>
                                   </div>


                  </div>
         </div>
      

                  <div class="col-md-3 col-sm-3  carousel slide evenements"id="pic"  data-ride="carousel" data-interval="5000">

                                          <ol class="carousel-indicators  ">
                                          <li data-target="#pic" data-slide-to="0" class="active  boule"></li>
                                           <li data-target="#pic" data-slide-to="1" class=" boule"></li>
                                           </ol>

                                     <!-- Content -->
                                     <div class="carousel-inner" role="listbox">
                                     <!-- Slide 1 -->
                                        <a href="<?php echo base_url().'Evenement'?>"> 
                                              <div class="item active ">
                                               <img src ="<?=base_url('images/Fichier2.png');?>" class="d-block w-100 img-responsive img-fluid image-1 fichier2"  >

                                                   <div class="carousel-caption">

                                                    <h2 id="eve" class="h2-responsive">Évènements</h2>
                                                      <p id="even"  style="color: white;font-style: italic;">Sorties,Soirées,Spéciales.
                                                      </p> 
                                                    </div>
                                              </a>

                                                </div>

                                 <!-- Slide 2 -->
                                   <!-- Slide 3 -->
                                      <a href="<?php echo base_url().'Evenement'?>">
                                            <div class="item ">
                                        <img src="<?=base_url('images/Fichier1.png');?>" alt="" class="d-block w-100 img-responsive img-fluid image-1 fichier2">

                                              <div class="carousel-caption">
                                                 <h2 id="eve" class="h2-responsive">Évènements</h2>
                                                <p class="even"  style="color: white;font-style: italic;">Dans la région Atsinanana
                                                </p> 
                                             </div>
                                          </a>  
                                           </div>
                                   </div>
                     </div>

     
                    <div class="col-md-3 col-sm-3 col-xs-6 carousel slide demarches"id="pict" class="infopratiques" data-ride="carousel"  data-interval="10000">

                                    <ol class="carousel-indicators  ">
                                        <li data-target="#pict" data-slide-to="0" class="active  boule"></li>
                                        <li data-target="#pict" data-slide-to="1" class=" boule"></li>
                                    </ol>

                         <!-- Content -->
                         <div class="carousel-inner" role="listbox">
                         <!-- Slide 1 -->
                          <a href="<?php echo base_url().'demarche'?>"> 
                                        <div class="item active ">
                                            <img src ="<?=base_url('images/Fichier3.png');?>" class="d-block w-100 img-responsive img-fluid image-1 fichier3" >

                                             <div class="carousel-caption">
                                                 <h2 id="dem" class="h2-responsive">Démarches</h2>
                                                <p id="dema"  style="color: white;font-style: italic;">Démarches Administratives,
                                                </p> 
                                              </div>
                            </a>   
                        </div>

                     <!-- Slide 2 -->
                       <!-- Slide 3 -->
                      <a href="<?php echo base_url().'demarche'?>">
                       <div class="item ">
                            <img src="<?=base_url('images/Fichier2.png');?>" alt="" class="d-block w-100 img-responsive img-fluid image-1 fichier3">
                            <div class="carousel-caption">
                            <h2 id="dem" class="h2-responsive">Démarches</h2>
                           <p class="dema"  style="color: white;font-style: italic;">Publiques,Infos nécessaires.
                           </p> 
                               </div>
                      </a>
                       </div>
                   </div>
               
            </div>

        </div>
    
                  <div class="text5">
                            <p class="lettre2 "></p>
                                                                     <!-- Carousel container -->
                                       
                            <div id="pics" class="carousel slide carousel1 weboule" data-ride="carousel" style=";margin:auto;">

                <!-- Indicators -->
                                              <ol class="carousel-indicators finboule" >
                                              <li data-target="#pics" data-slide-to="0" class="active"></li>
                                              <li data-target="#pics" data-slide-to="1"></li>
                                              </ol>

                                  <!-- Content -->
                                  <div class="carousel-inner" role="listbox">
                                  <!-- Slide 1 -->
                                    <a href="<?php echo site_url('accueil') ?>">
                                           <div class="item active">
                                            
                                       
                                           <img src="<?=base_url('images/plus.png')?>" class="image-2 img-responsive img-fluid " >
                                           <div class="carousel-caption">
                                               <p class="droits">Tous droits réservés Illaigna 2020</p>
                                              </div>
                                            </a>  
                                          
                                           </div>

                               <!-- Slide 2 -->
                               <a href="<?=base_url('webradio')?>">
                                         <div class="item">
                                              
                                               
                                                   <img src="<?=base_url('images/responsive4.png')?>" class="image-2 img-responsive img-fluid " >
            
                                                  <div class="carousel-caption">
                                                     <p class="droits"></p>
                                                    </div>
                                            </a>
                                         </div>

                                </div>
                           </div>
              
            </div>
</div>
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function()
    {
      var hauteur=$(window).height();
      $('.image-1').css('height',hauteur);
      $(window).resize(function(){
        hauteur=$(window).height();
        $('.image-1').css('height',hauteur);
      });
    });
  </script>
</body>
</html> 
<style type="text/css">
   /*.carousel-inner>.item {
    -webkit-transition: -webkit-transform 1.2s ease-in-out !important;
    -o-transition: -o-transform 1.2s ease-in-out !important;
}*/
body{ font-family: 'Montserrat', sans-serif;}
.droits{margin-left:80px;font-size: 16px}
@media(max-width: 1400px){
.droits{margin-left:60px;margin-top: -30px} 
 }
 @media(max-width: 1225px){
.droits{margin-left:-20px;} 
 }
  @media(max-width:  768px){
.droits{margin-left:85px;font-size: 30px} 
 }
  @media(max-width:  510px){
.droits{margin-left:90px;font-size: 15px;margin-top: 20px} 
 }

 
.searchButton{ position: absolute;left:110px;top: -2px;color:white;cursor:pointer;width: 40px;height: 30px;background: #0A7247;border-radius: 45%;font-style: italic;}
 .text5{ z-index:1;position: absolute; margin: 0 auto;left:75%;text-align: center; margin-top: -180px; } 
 
 @media(max-width: 1450px){
 .text5{ z-index:1;position: absolute; margin: 0 auto;left:75%;text-align: center; margin-top: -160px; } 

 }
 @media(max-width: 1300px){
 .text5{ z-index:1;position: absolute; margin: 0 auto;left:75%;text-align: center; margin-top: -150px; } 

 }
  @media(max-width: 1150px){
 .text5{ z-index:1;position: absolute; margin: 0 auto;left:75%;text-align: center; margin-top: -130px; } 

 }
 @media(max-width: 1015px)
 {
 .text5{ z-index:1;position: absolute; margin: 0 auto;left:75%;text-align: center; margin-top: -120px; } 

 }
 @media(max-width: 910px)
 {
 .text5{ z-index:1;position: absolute; margin: 0 auto;left:75%;text-align: center; margin-top: -105px; } 

 }
.finindicator{}
.finboule{color: black}
/*Debut du mediaquery*/ 
/*media query avec responsiviter images*/
  @media (max-width: 768px) 
        { /*NAVBAR MENU*/  
            .carousel1{display: none;} .lettre1{display: none;}.lettre2{display: none;}.weboule{display: none;} .lettre{display: none;}
   #logores{display:block;margin-top: -10px;margin-left:  -850%}.search{margin-top: -10px;margin-left:  -250%} 
  .searchButton{margin-top: -10px;margin-left:  -250%}  nav{display:none;background:#03C29B;width: 350px;margin-top: -40px;height:100vh;}            .menu-toggle{display: block;height: 40px;cursor: pointer;text-align: center;font-size: 30px;color: green;margin-top:-75px;margin-left:  -50%}  
   .menu-toggle:before{content: "\f0c9";font-family: fontAwesome;line-height: 40px}                      
.menu-toggle.active:before{content: "\f00d";color:white;border: 2px solid white; 
border-radius: 100%;width: 30px;height: 40px;z-index: 111;position: absolute;margin-left: -180px;cursor: pointer;}               
   ul li a{margin-left: 70px;font-size: 20px;}nav.active{display:block;margin-left: -150px;z-index: 2;position: absolute;}                 
 nav.active ul{display:block;} .evenements{display: none;}  .infopratiques{display: none;}.responsivite{display: block;}            
                  /*les images paysage*/   
   .demarches{display: none;}  #playstore{display: block;white-space: nowrap;margin-top: 450px;margin-left: 150px}   .playstore{height: 40px;display: block;}        
  /*lettre*/ #info{font-size: 35px;white-space:nowrap;margin-left: 200px}  #infos{font-size: 20px;white-space:nowrap;margin-left: 170px} .infos{font-size: 20px;white-space:nowrap;margin-left: 150px;font-style: italic;}#eve{font-size: 35px;white-space:nowrap;margin-left: 200px;font-weight: bold;}   #even{font-size: 20px;white-space:nowrap;margin-left: 200px}   .even{font-size: 20px;white-space:nowrap;margin-left: 220px;font-style: italic;}#dem{font-size: 35px;white-space:nowrap;margin-left: 200px;font-weight: bold;}   #dema{font-size: 20px;white-space:nowrap;margin-left: 220px}   .dema{font-size: 20px;white-space:nowrap;margin-left: 200px;font-style: italic;}       
/*espacement entre les bloc responsi*/                      
    .res1{display: block;margin-top: 50px;width: 100%;height: 250px} .res2{display: block;width: 100%;height: 250px;} .res3{display: block;width: 100%;height: 250px;margin-top: 25px} .res4{display: block;width: 100%;height: 250px;margin-top:25px}.boule1{margin-left:  -90px} 
 .boule2{margin-left:  -90px}.boule3{margin-left:  -90px}.boule4{margin-left:  -90px}}                
 /*Fin ddiau mediaquery*/ 
 @media (max-height: 750px){
    .fichier1{width:93%} .fichier3{width: 100%}.fichier2{width: 93%}
 }

 @media (max-height: 600px){
     #info{font-size: 25px;white-space:nowrap;margin-left: -30px}  #infos{font-size: 15px;white-space:nowrap;margin-left: -30px} 
     .infos{font-size: 15px;white-space:nowrap;font-style: italic;margin-left: -30px}#eve{font-size: 25px;white-space:nowrap;margin-left: -30px;font-weight: bold;}   #even{font-size: 15px;white-space:nowrap;margin-left: -30px}   .even{font-size: 15px;white-space:nowrap;margin-left: -40px;font-style: italic;}
    #dem{font-size: 25px;white-space:nowrap;margin-left: -30px;font-weight: bold;} 
    #dema{font-size: 15px;white-space:nowrap;margin-left: -30px}   .dema{font-size: 15px;white-space:nowrap;margin-left: -30px;font-style: italic;} 
 }
 /*@media (max-height:  1188px){
     #info{font-size: 25px;white-space:nowrap;margin-left: -30px}  #infos{font-size: 15px;white-space:nowrap;margin-left: -30px} 
     .infos{font-size: 15px;white-space:nowrap;font-style: italic;margin-left: -30px}#eve{font-size: 25px;white-space:nowrap;margin-left: -60px;font-weight: bold;}   #even{font-size: 15px;white-space:nowrap;margin-left: -50px}   .even{font-size: 15px;white-space:nowrap;margin-left: -50px;font-style: italic;}
    #dem{font-size: 25px;white-space:nowrap;margin-left: -30px;font-weight: bold;} 
    #dema{font-size: 15px;white-space:nowrap;margin-left: -30px}   .dema{font-size: 15px;white-space:nowrap;margin-left: -30px;font-style: italic;} 
 }*/

</style>    
   <script type="text/javascript">
  $(document).ready(function(){
      
  $('.accueil').addClass('active');
});
       
  </script>
    
 
   

 

  
        
       
         
         
     
    

  
          
       


 
  
     
        
      
        
       
         
        
  


    
   
    
         
         
     
         
  

        
        
         
          
  

    
         
     
     
     
   
    
        
        
 
   
     
    
 
 
   
   
    
    
   
   
    
    
  
   
  
   
   
    
   
    
   
 
    
   
       
           
             

          
           
        
         
        
      
         
       

         
        
        
        

           
         
          
         
      

 
        
  


