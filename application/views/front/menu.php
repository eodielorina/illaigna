<body>
  
 <div class="contener-fluid">
 <div class="text1">
                            <form method="post" action="<?php echo site_url('recherche/search');?>" >
                                        <div class="wrap" id="recheche">
                                          <div class="search">
                                              <input type="text" class="searchTerm" placeholder="Recheche" name="lettre">
                                                <button type="submit" class="btn searchButton">
                                                    <i class="fa fa-search fa-2x fa-rotate-45" id="icone"  ></i>
                                               </button> 
                                             </div>
                                         </div>    
                                </form>
                                    <br>
                                    <br>
                                       <div class="menu-toggle"></div>
                                           
                                          <nav class="navigation">
                                            <ul class="ul menu parallelogram">
                                             <li class="accueil"><a href="<?php echo site_url('accueil') ?>" class="btn lien">Accueil</a></li>
                                              <li class="contact"><a href="<?php echo site_url('contact') ?>" class="btn " >Contacts</a></li>

                                              <li class="apropos"><a href="<?php echo site_url('Apropos') ?>" class="btn ">A propos</a></li>
                                                 <p class="store" style="text-align: center;" id="playstore">Bientôt sur <br>
                                                 <img src="<?=base_url('images/goole.png');?>" class="playstore" ></p>
                                            
                                            </ul>
                                        </nav>   
          
  </div>                         
          <div class="text3">
                <a href="<?php echo site_url('accueil') ?>"><img src="<?=base_url('images/logo.png')?>" id="logo"  class="img-responsive img-fluid logo" alt="image nature responsive"></a>
                  <a href="<?php echo site_url('accueil') ?>"> <img src="<?=base_url('images/illogo.png')?>" id="logores"  class="img-responsive img-fluid logores" alt="image nature responsive"></a>
          </div> 

        
             <div class="text2">

             <p class="lettre" >
                  Illaigna est issue des deux idées le social<br>  et la technologie informatique. <br>   
                  On s'est dit s'est dit qu'il faut mettre la technique <br> aux services sociaux.</p>
        </div>
          
                          
                                        <div class="text4">
                                                  
 <p class="lettre1" style="text-align: center;font-size: 25px;">Bientôt sur <br>
                                                   <img src="<?=base_url('images/goole.png');?>" id="play" ></p>
                                          </div>                         
                                   
         </div>
</div>
</body>
</html>
<script type="text/javascript">
      $(document).ready(function(){
         $('.menu-toggle').click(function(){
          $('.menu-toggle').toggleClass('active');
           $('nav').toggleClass('active');
            $('.boule2').css('z-index','1');
           $('.boule1').css('z-index','1');
           $('.boule3').css('z-index','1');
         $('.boule4').css('z-index','1');
         
      })
         
      });
</script>
<script type="text/javascript">
    
    </script> 
<style type="text/css">
li{list-style: none;} a:hover{color: black} a{color: black;} 
.ul li a{text-decoration: none;white-space:nowrap;height: 35px;font-size: 18px;border:none}
.ul li.active a{background: #0A7247;color:white;border: none;}

.text4{ z-index:1;  position: absolute; margin: 0 auto;  left:75%; top: 62%; }
@media (max-height: 665px) {
.text4{ z-index:1;  position: absolute; margin: 0 auto;  left:75%; top: 70%; }}

@media(max-height: 500px){
.text4{ z-index:1;  position: absolute; margin: 0 auto;  left:75%; top: 75%; }
}
@media (max-width:  1018px) {
.text4{ z-index:1;  position: absolute; margin: 0 auto;  left:75%; top: 65%; }}
 @media (max-width:  990px) {
.text4{ z-index:1;  position: absolute; margin: 0 auto;  left:77%; top: 55%; }}  
      
@media (max-width: 768px) {
         /*NAVBAR MENU*/  
         h2{margin-top:55px;}
         h1{margin-top:55px;}

         .thumbnail{margin-top:55px;}
            .carousel1{display: none;} .lettre1{display: none;}.lettre2{display: none;}.weboule{display: none;} .lettre{display: none;}
   #logores{display:block;margin-top: -10px;margin-left:  -850%}.search{margin-top: -10px;margin-left:  -250%} 
  .searchButton{margin-top: -10px;margin-left:  -250%}  nav{display:none;background:#03C29B;width: 350px;margin-top: -40px;height:100vh;}            .menu-toggle{display: block;height: 40px;cursor: pointer;text-align: center;font-size: 30px;color: green;margin-top:-75px;margin-left:  -50%}  
   .menu-toggle:before{content: "\f0c9";font-family: fontAwesome;line-height: 40px}                      
.menu-toggle.active:before{content: "\f00d";color:white;border: 1px solid white; 
border-radius: 100%;width: 30px;height: 40px;z-index: 111;position: absolute;margin-left: -180px;cursor: pointer;}               
   ul li a{margin-left: 70px;font-size: 20px;}nav.active{display:block;margin-left: -150px;z-index: 2;position: absolute;}                 
 nav.active ul{display:block;}       
               /*les images paysage*/   
   .demarches{display: none;}  #playstore{display: block;white-space: nowrap;margin-top: 450px;margin-left: 150px}   .playstore{height: 40px;display: block;}  
    #info{font-size: 35px;white-space:nowrap;margin-left: 180px;margin-top: -10px;}   #infos{font-size: 20px;white-space:nowrap;margin-left: 170px;margin-top: -10px;}.infos{font-size: 20px;white-space:nowrap;margin-left: 150px;font-style: italic;margin-top: -10px;}
#dem{white-space:nowrap;margin-left: 200px;margin-top:-10px;}#eve{white-space:nowrap;margin-left: 200px;font-style: italic;margin-top: -10px;}

.boule1{top:150px;margin-left:  -50px}.boule2{top:150px;margin-left:  -50px}    
 .boule3{top:150px;margin-left:  -50px} .boule4{top:200px;margin-left:  -50px} 
 }      


/*responsivité sur les bouon*/


 @media (max-width: 650px){.res1{display: block;margin-top: 50px;width: 100%;height: 250px} .res2{display: block;width: 100%;height: 250px;}
   .res3{display: block;width: 100%;height: 250px;margin-top: 5px} .res4{display: block;width: 100%;height: 250px;margin-top:5px} }

   @media (max-width: 612px){ #logores{display:block;margin-top: -10px;margin-left:  -750%}.search{margin-top: -10px;margin-left:  -190%}
 .searchButton{margin-top: -10px;margin-left:  -190%} #info{font-size: 35px;white-space:nowrap;margin-left: 180px}   #infos{font-size: 20px;white-space:nowrap;margin-left: 170px}.infos{font-size: 20px;white-space:nowrap;margin-left: 150px;font-style: italic;}
#dema{font-size: 20px;white-space:nowrap;margin-left: 200px}  .even{font-size: 20px;white-space:nowrap;margin-left: 200px;font-style: italic;}.res2{display: block;width: 100%;height: 250px;margin-top:-20px;}.res3{display: block;width: 100%;height: 250px;margin-top:-20px;}           
 .res4{display: block;width: 100%;height: 250px;margin-top:-20px;}.res1{display: block;margin-top: 50px;width: 100%;height: 250px} }
  
  @media (max-width:   620px){ .res2{display: block;width: 100%;margin-top:10px;} .res3{display: block;width: 100%;margin-top:5px;}
  .res4{display: block;width: 100%;margin-top:5px;}  .res1{display: block;margin-top: 50px;width: 100%;}}      
          
@media (max-width:   590px){ .res2{display: block;width: 100%;margin-top:-20px;} .res3{display: block;width: 100%;margin-top:-20px;}         
 .res4{display: block;width: 100%;margin-top:-20px;}.res1{display: block;margin-top: 50px;width: 100%;} }     
   

 @media (max-width: 565px){#logores{display:block;margin-top: -10px;margin-left:  -750%} .search{margin-top: -10px;margin-left:  -190%}     
     .searchButton{margin-top: -10px;margin-left:  -190%}.boule1{top:130px;margin-left:  -50px}.boule2{top:130px;margin-left:  -50px}    
 .boule3{top:130px;margin-left:  -50px} .boule4{top:160px;margin-left:  -50px} 

          /*lettre*/
           #info{font-size: 20px;white-space:nowrap;margin-left: 130px;margin-top: -10px}
           #infos{font-size: 20px;white-space:nowrap;margin-left: 130px;} .infos{font-size: 20px;white-space:nowrap;margin-left: 130px;font-style: italic;} #info{font-size: 35px;white-space:nowrap;margin-left: 150px}
   #eve{font-size: 35px;white-space:nowrap;margin-left: 120px;margin-top: -10px} #even{font-size: 20px;white-space:nowrap;margin-left: 120px}
  .even{font-size: 20px;white-space:nowrap;margin-left: 130px} #dem{font-size: 35px;white-space:nowrap;margin-left: 120px;margin-top: -10px} #dema{font-size: 20px;white-space:nowrap;margin-left: 150px} .dema{font-size: 20px;white-space:nowrap;margin-left: 150px}  }
      

   @media (max-width:  510px){.res2{display: block;width: 100%;height: 200px;margin-top:-10px;} .res3{display: block;width: 100%;height: 200px;margin-top:-10px;}.res4{display: block;width: 100%;height: 200px;margin-top:-10px;}.res1{display: block;margin-top: 50px;width: 100%;height: 200px}#info{font-size: 20px;white-space:nowrap;margin-left: 100px} #infos{font-size: 15px;white-space:nowrap;margin-left: 130px}
  .infos{font-size: 15px;white-space:nowrap;margin-left: 100px;font-style: italic;}  #eve{font-size: 20px;white-space:nowrap;margin-left: 50px}      
   #even{font-size: 15px;white-space:nowrap;margin-left: 120px}.even{font-size: 15px;white-space:nowrap;margin-left: 120px}   
   #dem{font-size: 20px;white-space:nowrap;margin-left: 60px}#dema{font-size: 15px;white-space:nowrap;margin-left: 120px}  
   .dema{font-size: 15px;white-space:nowrap;margin-left: 120px}
   #playstore{display: block;white-space: nowrap;margin-top: 450px;margin-left: 120px}

 } 
 @media (max-width:  435px){#playstore{height: 40px;display: block;white-space: nowrap;margin-top: 300px;margin-left: 90px}
  #logores{display:block;margin-top: -10px;margin-left:  -550%} .search{margin-top: -10px;margin-left:  -150%}       
    .searchButton{margin-top: -10px;margin-left:  -150%}.boule1{top:130px;margin-left:  -50px}      
     .boule2{top:130px;margin-left:  -50px}.boule3{top:130px;margin-left:  -50px}.boule4{top:130px;margin-left:  -50px}}    

     @media (max-width:  428px){#eve{font-size: 20px;white-space:nowrap;margin-left:70px}}
@media (max-width:  425px){ .res2{display: block;width: 100%;height: 180px}.res3{display: block;width: 100%;height: 180px} 
  .res4{display: block;width: 100%;height: 180px}.res1{display: block;margin-top: 50px;width: 100%;height: 180px}  }
  @media (max-width:  400px){.menu-toggle{display: block;height: 40px;cursor: pointer;text-align: center;font-size: 30px;color: green;margin-top:-75px;margin-left:  -80%}
.menu-toggle.active:before{content: "\f00d";color:white;border: 2px solid white;border-radius: 100%;width: 30px;height: 40px;z-index: 111;position: absolute;margin-left: -150px;cursor: pointer;}.res2{display: block;width: 100%;height:148px;margin-top:20px;}  
.res3{display: block;width: 100%;height: 148px;margin-top:15px;} .res4{display: block;width: 100%;height: 148px;margin-top:15px;} 
    .res1{display: block;margin-top: 50px;width: 100%;height: 148px}#infos{font-size: 15px;white-space:nowrap;margin-left: 100px}        
   #eve{font-size: 20px;white-space:nowrap;margin-left: 50px}#even{font-size: 15px;white-space:nowrap;margin-left: 100px}     
  .even{font-size: 15px;white-space:nowrap;margin-left: 100px}#dem{font-size: 20px;white-space:nowrap;margin-left: 60px}           
   #dema{font-size: 15px;white-space:nowrap;margin-left: 100px}.dema{font-size: 15px;white-space:nowrap;margin-left: 100px}}
@media (max-width:  390px){   ul li a{margin-left: 50px;font-size: 20px;}}

@media (max-width:  375px){.res2{display: block;width: 100%;height:148px;margin-top:0;}.res3{display: block;width: 100%;height: 148px;margin-top:0;}
   .res4{display: block;width: 100%;height: 148px;margin-top:0;}.res1{display: block;margin-top: 50px;width: 100%;height: 148px}   
    #eve{font-size: 20px;white-space:nowrap;margin-left:80px}   #infos{white-space:nowrap;margin-left:100px}     
    #dema{font-size: 12px;white-space:nowrap;margin-left: 90px}.dema{font-size: 12px;white-space:nowrap;margin-left: 90px;font-style: italic;}
    .boule1{top:100px;margin-left:  -50px}.boule2{top:100px;margin-left:  -50px}    
 .boule3{top:100px;margin-left:  -50px} .boule4{top:130px;margin-left:  -50px}

  }  


@media (max-width:   355px){ #info{font-size: 20px;white-space:nowrap;margin-left:100px;margin-top: -20px}      
  #infos{font-size: 12px;white-space:nowrap;margin-left: 100px}.infos{font-size: 12px;white-space:nowrap;margin-left: 100px;font-style: italic;} 
      #eve{font-size: 20px;white-space:nowrap;margin-left: 100px;font-weight: bold;margin-top: -20px}#even{font-size: 12px;white-space:nowrap;margin-left: 100px}.even{font-size: 12px;white-space:nowrap;margin-left: 100px;font-style: italic;}
   #dem{font-size: 20px;white-space:nowrap;margin-left: 100px;font-weight: bold;margin-top: -20px}
  #dema{font-size: 12px;white-space:nowrap;margin-left: 100px} .dema{font-size: 12px;white-space:nowrap;margin-left: 100px;font-style: italic;}

   .boule1{top:90px;margin-left:  -20px} .boule2{top:90px;margin-left:  -20px}  .boule3{top:90px;margin-left:  -20px}  .boule4{top:90px;margin-left:  -20px}
   .res2{display: block;width: 100%;height:148px;margin-top:-5px;}   .res3{display: block;width: 100%;height: 148px;margin-top:-5px;}
 .res4{display: block;width: 100%;height: 148px;margin-top:-5px;}.res1{display: block;margin-top: 50px;width: 100%;height: 148px}  }
</style>