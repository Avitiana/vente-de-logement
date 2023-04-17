<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="<?=base_url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900')?>" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>">
    <!-- Bootstrap CSS
    
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/font-awesome.min.css')?>">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet"  href="<?=base_url('css/nalika-icon.css')?>">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/owl.theme.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/owl.transitions.css')?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/animate.css')?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/normalize.css')?>">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/meanmenu.min.css')?>">
    <!-- main CSS
    
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/main.css')?>">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/morrisjs/morris.css')?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/scrollbar/jquery.mCustomScrollbar.min.css')?>">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/metisMenu/metisMenu.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/metisMenu/metisMenu-vertical.css')?>">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/calendar/fullcalendar.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/calendar/fullcalendar.print.min.css')?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet"href="<?=base_url('style.css')?>">
    <!-- responsive CSS
    
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('css/responsive.css')?>">
    <!-- modernizr JS
		============================================ -->
    <script src="<?=base_url('js/vendor/modernizr-2.8.3.min.js')?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
           
			<div class="nalika-profile">
				
			
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
            
                           
                        </li>
                        <li class="active">
                       <a href="<?=base_url('/dashbord')?>"><i class="fe fe-home"></i> 
                      <span>TABLEAU DE BORD</span></a>
                      </li>
                       
              
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">Client</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?=base_url('/ajouter_client')?>"> Nouveau Client</a></li>
                            <li><a href="<?=base_url('/liste_client')?>"> Liste Client </a></li>
                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Agence</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?=base_url('/ajouter_agence')?>"> Nouveau Agence</a></li>
                            <li><a href="<?=base_url('/liste_agence')?>"> Liste Agence </a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non">Logement</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?=base_url('/ajouter_appartement')?>"> Nouveau Appartement</a></li>
                            <li><a href="<?=base_url('/liste_appartement')?>"> Liste Appartement </a></li>
                              
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-smartphone-call icon-wrap"></i> <span class="mini-click-non">Vente</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?=base_url('/ajouter_vente')?>"> Nouveau Vente</a></li>
                            <li><a href="<?=base_url('/liste_vente')?>"> Liste Vente </a></li>
                                
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Utilisateur</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?=base_url('/profil')?>">Profil</a></li>
                            <li><a href="<?=base_url('/parametre')?>"> Paramètre </a></li>
                            <li><a href="<?=base_url('/')?>"> Deconnecter </a></li>
                               
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
           <div class="container">
      <center>   <h1>Modifier Client</h1> </center>
        <form method="POST" action="<?= site_url('/logement/modifier/'.$client['numcli']) ?>">
        <input type="hidden" name="_method" value="PUT">
            <fieldset>
            <?=csrf_field(); ?>

        <?php if (session()->get('fail')): ?>
          <div class="alert alert-danger" role="alert">
            <?= session()->get('fail') ?>
          </div>
        <?php endif; ?>
        <hr>
          <div class="row">
            <div class="col-sm-6">
                
                <div class="mb-3">
                <label class="form-label">Nom</label>
                    <input  name="nomcli" 
                    id="nomcli" 
                    required="nomcli" 
                    type="text" class="form-control"
                     placeholder="Nom du client"
                      value="<?=$client['nomcli'] ?>">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Prenom</label>
                    <input name="prenomcli"
                     id="prenomcli" 
                     required="prenomcli"
                      type="text" class="form-control" 
                      placeholder="Numéro du prenom"
                       value="<?=$client['prenomcli'] ?>">        
                        </div>

                <div class="mb-3">
                <label class="form-label">Sexe</label>
                    <input name="sexe" id="sexe" 
                    required="sexe" type="text" 
                    class="form-control" placeholder="Homme ou Femme"
                     value="<?=$client['sexe'] ?>">   
                  </div>

                  <div class="mb-3">
                  <label class="form-label">Cin</label>
                    <input name="cincli" id="cincli" 
                    required="cincli" type="number"
                     class="form-control" placeholder="CIN"  value="<?=$client['cincli'] ?>"> 
                </div>

                <div class="mb-3">
                <label class="form-label">Telephone</label>
                    <input name="telcli" id="telcli"
                     required="telcli"  type="number" 
                     class="form-control" placeholder="Telephone"  value="<?=$client['telcli'] ?>"> 
                </div>

                <div class="mb-3">
                <label class="form-label">Adresse</label>
                    <input name="adressecli" id="adressecli" 
                    required="adressecli" type="text" 
                    class="form-control" placeholder="Fianarantsoa"
                     value="<?=$client['adressecli'] ?>">   
                  </div>
                <div class="row">
                  <br>
            <div class="col-12 col-sm-6">
              <button type="submit" class="btn rounded-pill btn-primary">Modifier</button>
              <a href="<?=base_url('/liste_client')?>" class="btn btn-primary"> Liste Client </a>
            </div>

            </fieldset>
        </form>
    </div>
        

     <!-- jquery
		============================================ -->
    <script src="<?=base_url('js/vendor/jquery-1.12.4.min.js')?>"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?=base_url('js/wow.min.js')?>"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?=base_url('js/jquery-price-slider.js')?>"></script>
    <!-- meanmenu JS
		============================================ -->
   
    <script src="<?=base_url('js/jquery.meanmenu.js')?>"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?=base_url('js/owl.carousel.min.js')?>"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?=base_url('js/jquery.sticky.js')?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?=base_url('js/jquery.scrollUp.min.js')?>"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?=base_url('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')?>"></script>
    <script src="<?=base_url('js/scrollbar/mCustomScrollbar-active.js')?>"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?=base_url('js/metisMenu/metisMenu.min.js')?>"></script>
    <script src="<?=base_url('js/metisMenu/metisMenu-active.js')?>"></script>
    <!-- sparkline JS
		============================================ -->
    
    <script src="<?=base_url('js/sparkline/jquery.sparkline.min.js')?>"></script>
    <script src="<?=base_url('js/sparkline/jquery.charts-sparkline.js')?>"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?=base_url('js/calendar/moment.min.js')?>"></script>
    <script src="<?=base_url('js/calendar/fullcalendar.min.js')?>"></script>
    <script src="<?=base_url('js/calendar/fullcalendar-active.js')?>"></script>
	<!-- float JS
		============================================ -->
    <script src="<?=base_url('js/flot/jquery.flot.js')?>"></script>
    <script src="<?=base_url('js/flot/jquery.flot.resize.js')?>"></script>
    <script src="<?=base_url('js/flot/curvedLines.js')?>"></script>
    <script src="<?=base_url('js/flot/flot-active.js')?>"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?=base_url('js/plugins.js')?>"></script>
    <!-- main JS
		============================================ -->
    <script src="<?=base_url('js/main.js')?>">
</body>
</html>