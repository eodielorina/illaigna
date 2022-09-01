<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/media/css/jquery.dataTables.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/media/css/dataTables.bootstrap.min.css');?>">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/media/css/datatables.css'); ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/liste.css'); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('front/css/font-awesome.min.css'); ?>">

 <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</head>

<body>
 <header>
<nav class="navbar navbar-default ml-auto">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Illaigna</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="navbar nav ml-auto nav-pills navbar-right">
        <li class="public"><a class="nav-link"  href="<?php echo site_url('publiqueinfo') ?>" >Public<span class="sr-only">(current)</span></a></li>
        <li class="info"><a class="nav-link " href="<?php echo site_url('infos') ?>" >Infos Pratique</a></li>
        <li class="dropdown pharm">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pharmacie de garde <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> <a class="nav-link " href="<?php echo site_url('pharmacieg') ?>" >Liste des Pharmacies</a></li>
            <li>  <a class="nav-link " href="<?php echo site_url('gardes/liste') ?>" >Liste des gardes</a></li>
            
          </ul>
        </li>
         <li class=" num"><a class="nav-link " href="<?php echo site_url('Numurgence') ?>" >Numéro d'urgence</a></li>
         <li class=" eve"> <a class="nav-link " href="<?php echo site_url('evenementt') ?>" >Les evenements de Tamatave </a></li>

       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paramètres <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li> <a class="dropdown-item" href="<?php echo site_url('nouveau') ?>"  style="color: blue">Services</a></li>
            
            <li><a class="dropdown-item" href="<?php echo site_url('Utilisateur') ?>" style="color: blue">Utilisateurs</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" > <?php  echo $this->session->userdata('username');?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item btn btn-sm " href="<?php echo site_url('publiqueinfo/deconnect') ?>"  >Déconnexion</a></li>
           
          </ul>
        </li>
      </ul>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</header>
 <script type="text/javascript">
    $('.btn').click(function(e){
        var result = confirm("Voulez vous vraiment se Deconnecter?");
        if(!result) {
            e.preventDefault();
        }
    });
</script>