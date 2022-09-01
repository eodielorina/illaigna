<nav class="navbar  navbar-expand-lg navbar-light bg-light " >
  <a class="navbar-brand" href="#">Illaigna</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar nav ml-auto nav-pills">
                        <li class="nav-item ">
                          
                          <a class="nav-link public"  href="<?php echo site_url('publiqueinfo') ?>"  >Public <span class="sr-only">(current)</span></a>    
                        </li>
                        <li class="">
                            <a class="nav-link info" href="<?php echo site_url('infos') ?>" >Infos Pratique</a>
                        </li>
                       <li class="">
                          <a class="nav-link pharm" href="<?php echo site_url('pharmacieg') ?>" >Pharmacie de garde </a>
                        </li>
                        <li class="">
                          <a class="nav-link num" href="<?php echo site_url('Numurgence') ?>" >Numéro d'urgence</a>
                        </li>
                        <li class="">
                          <a class="nav-link eve" href="<?php echo site_url('evenementt') ?>" >Les evenements de Tamatave </a>
                        </li>    
                <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                 Paramètres
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                  <a class="dropdown-item" href="<?php echo site_url('nouveau') ?>"  style="color: blue">Services</a>
                  <a class="dropdown-item" href="<?php echo site_url('Utilisateur') ?>" style="color: blue">Utilisateurs</a>

                
                </div>
              </li>
      
         <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:green;">
        <?php  echo $this->session->userdata('username');?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item btn btn-sm btn-primary" href="<?php echo site_url('publiqueinfo/deconnect') ?>"  >Deconnexion</a>
        </div>
      </li>
      </ul>  
</nav>