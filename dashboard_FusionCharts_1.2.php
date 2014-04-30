<?php

//apro la sessione e verifico se il login è già stato effettuato

session_start(); //apriamo la sessione
//se l'user è già loggato lo reindirizziamo all'areaprivata
if(isset($_SESSION['loggedin'])){
//header('location: dashboard_FusionCharts.php');
} else {
header('location: signin_step1.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Web Application | todo</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <!--<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" cache="false" />
  <link rel="stylesheet" href="js/datatables/datatables.css" type="text/css" />
  <link rel="stylesheet" href="css/plugin.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="flag-icon-css-master/css/flag-icon.min.css">
  <link rel="stylesheet" href="css/loader.css" />
  -->
  <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
  <script src="js/jquery.min.js"></script>
  <script src="JS.js" cache="false"></script>
    <!-- 
    <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts XT/Charts/FusionCharts.js"></script>
    <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts XT/Gallery/assets/prettify/prettify.js"></script>
    <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts XT/Gallery/assets/ui/js/json2.js"></script>
    <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts XT/Gallery/assets/ui/js/lib.js" ></script>  
    -->
	
    <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/fix.js" cache="false"></script>
     <![endif]-->
</head>
<body>
<script src="highcharts-3/js/highcharts.js"></script>
<script src="highcharts-3/js/modules/exporting.js"></script>
  
  
  <!-- START PRELOADER -->
  <div class="ole">
  	<section id="jSplash">
  		<div id="circle"></div>
  	</section>
  </div>
  <!-- END PRELOADER -->
  
  
  <section class="hbox stretch">
    <!-- .aside -->
    <aside class="bg-success dker aside-sm nav-vertical" id="nav">
      <section class="vbox">
        <header class="bg-black nav-bar">
          <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
            <i class="fa fa-bars"></i>
          </a>
          <a href="#" class="nav-brand" data-toggle="fullscreen">Tee1</a>
          <a class="btn btn-link visible-xs" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="fa fa-comment-o"></i>
          </a>
        </header>
        <section>
          <!-- nav -->
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
            
              <li>
                <a href="dashboard.html">
                  <i class="flag-icon flag-icon-gb" style="display: inline-block"></i>
                  <span>[UK]</span>
                </a>
              </li>
              <li style="text-align:center;">
                <a href="dashboard.html">
                  <i class="flag-icon flag-icon-it" style="display: inline-block"></i>
                  <span>[ITA]</span>
                </a>
              </li>     
              <li>
                <a href="dashboard.html">
                  <i class="flag-icon flag-icon-fr" style="display: inline-block"></i>
                  <span>[FRA]</span>
                </a>
              </li>     
              <li>
                <a href="dashboard.html">
                  <i class="flag-icon flag-icon-de" style="display: inline-block"></i>
                  <span>[GER]</span>
                </a>
              </li>
                  <li style="border: 4px solid rgba(0, 0, 0, 0.12);"></li>                            
              <!--<li>
                  <a href="gallery.html">
                  <i class="fa fa-picture-o"></i>
                  <span>Gallery</span>
                </a>
              </li>-->
              <li>
                <a href="report.html"> <!--Link in Uscita al PDF del Report Creato-->
                  <i class="fa fa-eye"></i>
                  <span>[REPORT]</span>
                </a>
              </li>
              <!--<li>
                <a href="notes.html">
                  <i class="fa fa-pencil"></i>
                  <span>Note</span>
                </a>
              </li>-->
              <!--<li>
                <a href="timeline.html">
                  <i class="fa fa-clock-o"></i>
                  <span>Timeline</span>
                </a>
              </li>-->
             
                <li>              
            </ul>
          </nav>
          <!-- / nav -->
        </section>
        <footer class="footer bg-gradient hidden-xs">
          <!--
          <a href="modal.lockme.html" data-toggle="ajaxModal" style="position: relative; right: 30%;" class="btn btn-sm btn-link m-r-n-xs pull-right">
            <i class="fa fa-power-off"></i>
          </a>
          -->
          <a href="logout.php" style="position: relative; right: 30%;" class="btn btn-sm btn-link m-r-n-xs pull-right">
            <i class="fa fa-power-off"></i>
          </a>          
        </footer>
      </section>
    </aside>
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
      <section class="vbox">
        <header class="header bg-black navbar navbar-inverse">
          <div class="collapse navbar-collapse pull-in">
            <!--<ul class="nav navbar-nav m-l-n">
              <li class="active"><a href="#">Dashboard</a></li>
              <li><a href="pjax" data-pjax data-target="#pjax-container">Pjax</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>-->
              </li>
            </ul>
            <!--<form class="navbar-form navbar-left m-t-sm" role="search">
              <div class="form-group">
                <div class="input-group input-s">
                  <input type="text" class="form-control input-sm no-border bg-dark" placeholder="Search">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-sm btn-success btn-icon"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              </div>
            </form>-->
            <ul class="nav navbar-nav" style="padding: 9px;margin-left: 39%;">
              <!--<li class="hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o text-white"></i>
                  <span class="badge up bg-info m-l-n-sm">2</span>
                </a>
                <section class="dropdown-menu animated fadeInUp input-s-lg">
                  <section class="panel bg-white">
                    <header class="panel-heading">
                      <strong>You have <span class="count-n">2</span> notifications</strong>
                    </header>
                    <div class="list-group">
                      <a href="#" class="media list-group-item">
                        <span class="pull-left thumb-sm">
                          <img src="images/avatar.jpg" alt="John said" class="img-circle">
                        </span>
                        <span class="media-body block m-b-none">
                          Use awesome animate.css<br>
                          <small class="text-muted">28 Aug 13</small>
                        </span>
                      </a>
                      <a href="#" class="media list-group-item">
                        <span class="media-body block m-b-none">
                          1.0 initial released<br>
                          <small class="text-muted">27 Aug 13</small>
                        </span>
                      </a>
                    </div>
                    <footer class="panel-footer text-sm">
                      <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                      <a href="#">See all the notifications</a>
                    </footer>
                  </section>
                </section>
              </li>-->
              <li class="dropdown">
                  <span class="thumb-sm avatar pull-left m-t-n-xs m-r-xs">
                  <img src="images/avatar.jpg">
                </span>
               <span><?php echo $_SESSION['user_nome'];?> <?php echo $_SESSION['user_cognome'];?> <!--<b class="caret"></b>--></span>

<!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 // Nome utente con dropdown Menu
                </a>-->
                <!--<ul class="dropdown-menu animated fadeInLeft">
                  <li>
                    <a href="#">Settings</a>
                  </li>
                  <li>
                    <a href="profile.html">Profile</a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="badge bg-danger pull-right">3</span>
                      Notifications
                    </a>
                  </li>
                  <li>
                    <a href="docs.html">Help</a>
                  </li>
                  <li>
                    <a href="signin.html">Logout</a>
                  </li>
                </ul>-->
              </li>
            </ul>
          </div>
        </header>
        <section class="scrollable" id="pjax-container">
          <header>
            <div class="row b-b m-l-none m-r-none">
              <div class="col-sm-4">
                <h3 class="m-t m-b-none" style="margin-top: 22px;">[NOME MERCATO]</h3>
                <br />

<!--                <p class="block text-muted">Ben venuot</p>-->
              </div>
              <div class="col-sm-8">
                <div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs">
                 <!-- <div class="pull-left">                  
                    <div class="pull-left m-r-xs">
                      <span class="block">Users <span class="badge up bg-danger">+5</span></span>                    
                      <span class="h4">432k</span>
                      <i class="fa fa-level-up text-success"></i>
                    </div>
                    <div class="clear">
                      <div class="sparkline inline" data-type="bar" data-height="35" data-bar-width="4" data-bar-spacing="2" data-stacked-bar-color="['#afcf6f', '#eee']">5:5,8:4,12:5,10:6,11:7,12:2,8:6</div>
                    </div>
                  </div>-->
                 <!-- <div class="pull-left m-l-lg">
                    <div class="pull-left m-r-xs">
                      <span class="block">Profit</span>                    
                      <span class="h4">$4k</span>
                      <i class="fa fa-level-down text-danger"></i>
                    </div>
                    <div class="clear">
                      <div class="sparkline inline" data-type="bar" data-height="35" data-bar-width="4" data-bar-spacing="2" data-bar-color="#fb6b5b">6,5,8,9,6,3,5</div>
                    </div>
                  </div>-->
                </div>
              </div>
            </div>
            <!--<div class="wrapper bg-light font-bold">
              <a href="#" class="m-r"><i class="fa fa-flag fa-2x icon-muted v-middle"></i> REGNO UNITO</a>
              <a href="#" class="m-r"><i class="fa fa-flag fa-2x icon-muted v-middle"></i> FRANCIA</a>
              <a href="#" class="m-r"><i class="fa fa-flag fa-2x icon-muted v-middle"></i> GERMANIA</a>
              <a href="#" class="m-r"><i class="fa fa-flag fa-2x icon-muted v-middle"></i> USA</a>
              <!--<a href="#" class="m-r"><span class="badge up m-r-n bg-danger">4</span><i class="fa fa-envelope fa-2x icon-muted  v-middle"></i> Message</a>
              <a href="#" class="m-r"><i class="fa fa-calendar fa-2x icon-muted  v-middle"></i> My Calendar</a>
              <a href="#"><i class="fa fa-cog fa-2x icon-muted  v-middle"></i> Settings</a>--*>
            </div>-->
          </header>
          <section  class="hbox">
            <aside class="bg-white-only">
              <header class="bg-light">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab0" data-toggle="tab">OVERVIEW</a></li>
                  <li class=""><a href="#tab1" data-toggle="tab">KEYWORDS</a></li>
                  <li class=""><a href="#tab2" data-toggle="tab">ORGANIC COMPETITORS</a></li>
                  <li class=""><a href="#tab3" data-toggle="tab">PAID COMPETITORS</a></li>
                </ul>
              </header>

              <div class="tab-content">
                  <div class="tab-pane active" id="tab0">
                     <div class="wrapper"> 
                     
                     <div class="row m-t-lg">
                      
                        <section class="panel">
                                        <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500; font-size: 21px;font-variant: small-caps;">Distribuzione dei Competitors</header>
                                        
                                                  <div class="text-center clearfix">                            
                                                          <div id="bublechart" align="center">Chart will load here</div>

                                            <p></p>                                      
                                      </div>
                        </section>
                                                
                        
                        <section class="panel">
                                        <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Propensione all'Acquisto</header>
                                                  
                                                           <div class="text-center clearfix">
                                                           <div style="width: 50%; float: left;">
                                                                   <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Pie3D1.js" ></script>
                                                                                                   
                                                                   <div id="MarketVisibiliyDistribution" align="center">Chart will load here</div>
                                                                    <script type="text/javascript">
                                                                              if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                                                              var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Pie3D.swf", "ChartId", "95%", "350", "0", "0");
                                                                              chart.setXMLData( dataString );         
                                                                              chart.render("MarketVisibiliyDistribution");
                                                                   </script>
                                                           </div>
                                                           <p style="text-align: justify; margin-left: 52%; margin-right: 5%;">Medio-Alta propensione all'acquisto. Dall'analisi il rapporto tra siti di Informazione (Blog, giornali, Wikipedia etc..) ed E-commerce (domini con possibilità di fare acquisti), dimostra un'interesse presente da parte degli utenti online per l'acquisto dei prodotti del settore considerato.</p>   
                                                           <br /> 
                                                           <p style="text-align: justify; margin-left: 52%; margin-right: 5%;">Medio-Alta propensione all'acquisto. Dall'analisi il rapporto tra siti di Informazione (Blog, giornali, Wikipedia etc..) ed E-commerce (domini con possibilità di fare acquisti), dimostra un'interesse presente da parte degli utenti online per l'acquisto dei prodotti del settore considerato.</p>
                                                           <br />
                                                           <p style="text-align: justify; margin-left: 52%; margin-right: 5%;">Medio-Alta propensione all'acquisto. Dall'analisi il rapporto tra siti di Informazione (Blog, giornali, Wikipedia etc..) ed E-commerce (domini con possibilità di fare acquisti), dimostra un'interesse presente da parte degli utenti online per l'acquisto dei prodotti del settore considerato.</p>
                                                            
                                                            </div>
                                                </section>
                        
                   
                   <div class="col-md-6">
                   <section class="panel" style="margin-bottom: 15px;">                           
                            <div class="text-center clearfix">
                              <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Top 10 Competitors - Traffico Reale</header>
                              <p class="text-center" style=" font-size: 14px; background-color: rgba(173, 171, 171, 0.14); margin: 0 auto;">Quali sono i Competitors che assorbono più traffico?</p>
                              
                              <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Bar2D1.js" ></script>        
                                        <div id="top10competitors" align="center">Chart will load here</div>
                                        <script type="text/javascript">
                                            if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                            var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Bar2D.swf", "ChartId", "95%", "908px", "0", "0");
                                           chart.setXMLData( dataString );         
                                           chart.render("top10competitors");
                                        </script>
                                  </div>
                          </section>
                        </div>
                     
                <div class="col-md-6">
            <section class="panel" style="margin-bottom: 15px;">
                 <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Distribuzione della Visibilità</header>
                 <p class="text-center" style=" font-size: 14px; background-color: rgba(173, 171, 171, 0.14); margin: 0 auto;">Come si distribuisce la Visibilità tra i Competitors?</p>
                 
                                                <div class="text-center clearfix">
                                                        <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Pie2D1.js" ></script>
                                                                                        
                                                        <div id="rankXmarket" align="center">Chart will load here</div>
                                                         <script type="text/javascript">
                                                                   if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                                                   var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Pie2D.swf", "ChartId", "95%", "400", "0", "0");
                                                                   chart.setXMLData( dataString );         
                                                                   chart.render("rankXmarket");
                                                        </script>
                                             <p></p>
                                         </div>
                                       </section>                                 
                                    </div> 


                   <div class="col-md-6">
            <section class="panel" style="margin-bottom: 15px;">
                 <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Organic vs Paid</header>
                 <p class="text-center" style=" font-size: 14px; background-color: rgba(173, 171, 171, 0.14); margin: 0 auto;">Quanti dei tuoi Competitors investono in pubblicità Adwords?</p>
                                                <div class="text-center clearfix">
                                                        <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Pie2D0.js" ></script>
                                                                                        
                                                        <div id="organicvspaid" align="center">Chart will load here</div>
                                                         <script type="text/javascript">
                                                                   if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                                                   var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Pie2D.swf", "ChartId", "95%", "400", "0", "0");
                                                                   chart.setXMLData( dataString );         
                                                                   chart.render("organicvspaid");
                                                        </script>
                                             <p></p>
                                         </div>
                                       </section>                                 
                                    </div>        
                                                            
                                </div> 
                            </div>
                            </div>

                  <div class="tab-pane" id="tab1">
                     <div class="wrapper"> 
                     
                     <div class="row m-t-lg">
                       <div class="col-md-6">
                        <section class="panel">
                                        <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Top 20 Keywords</header>
										<p class="text-center" style=" font-size: 14px; background-color: rgba(173, 171, 171, 0.14); margin: 0 auto;">Quali sono le Parole Chiave più ricercate?</p>
                                                  <div class="text-center clearfix">                            
                                                    <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Bar2D2.js" ></script>                                    
                                                    <div id="top20keywords" align="center">Chart will load here</div>
                                                    <script type="text/javascript">
														var dataString2 = '';
															$.ajax({
															  url: 'appdata/json_data_dashboard.php?object=grafico_top20_keywords&mercato=hampers&country=uk&source=organic',
															  async: false,
															  dataType: "text",
															  success: function(output) {
															 dataString2 = output;
															  }
															});
															//alert(dataString);
                                                        if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                                        var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Bar2D.swf", "ChartId", "95%", "635px", "0", "0");
														//chart.setXMLData( dataString );  
                                                        chart.setJSONData( dataString2 );         
                                                        chart.render("top20keywords");
                                                     </script>
                                            <p></p>                                      
                                      </div>
                        </section>
                     </div>
                     
		            <div class="col-md-6">
			      <section class="panel" style="margin-bottom: 15px;">
			           <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Distribuzione della Competizione</header>
			           <p class="text-center" style=" font-size: 14px; background-color: rgba(173, 171, 171, 0.14); margin: 0 auto;">Come si distribuisce la competizione nel tuo Mercato?</p>
                                                <div class="text-center clearfix">
                                                        <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Pie2D1.js" ></script>
                                                                                        
                                                        <div id="CompetitionDistribution" align="center">Chart will load here</div>
                                                         <script type="text/javascript">
                                                                   if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                                                   var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Pie2D.swf", "ChartId", "95%", "400px", "0", "0");
                                                                   chart.setXMLData( dataString );         
                                                                   chart.render("CompetitionDistribution");
                                                        </script>
                                             <p></p>
                                         </div>
                                       </section>                                 
			</div>        
	
	        <div class="col-md-6">
                  <section class="panel hbox">
                         <aside class="bg-info r-l text-center v-middle" style="background: rgb(225, 93, 93);">
                                <div class="wrapper">
                                    <i class="fa fa-exclamation-triangle fa-3x"></i>                      
                                </div>
                         </aside>
                         <aside>
                                <div class="wrapper text-center">
                                    <p class="h1">[Alta]</p>
                                    <span>Competizione</span>
                                </div>
                         </aside>
                    </section>
                </div>	
            
            
            <div class="col-md-6">
              <section class="panel hbox">
                 <aside>
                    <div class="wrapper text-center">
                               <p class="h1">[0,89€]</p>
                               <span>CPC MEDIO</span>
                     </div>
                 </aside>
              </section>                
            </div>	
          </div>
            
              <section class="panel">
                <header class="panel-heading" style="text-align:center; font-size: 21px;font-variant: small-caps; font-weight: 500;">Keywords Database</header> 
                <!--  <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> -->
                </header>
                <div class="table-responsive">
                  <table class="table table-striped m-b-none" data-ride="datatables">
                    <thead>
                      <tr>
                        <th width="20%">Rendering engine</th>
                        <th width="25%">Browser</th>
                        <th width="25%">Platform(s)</th>
                        <th width="15%">Engine version</th>
                        <th width="15%">CSS grade</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </section>
            </div>
          </div>        
                
                <div class="tab-pane" id="tab2">
                  <div class="wrapper">
                       <!-- Hicharts-->
                  		  <section class="panel">
                  		    <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Distribuzione Competitors Organici</header>
                  		    <p class="text-center" style=" font-size: 14px; background-color: rgba(173, 171, 171, 0.14); margin: 0 auto;">Come si distribuiscono i Competitors Organici nel Mercato?</p>								
                  		
                                                 <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Pie2D1.1.js" ></script>
                                                                            
                                                 <div id="DistribuzioneSettori" align="center">Chart will load here</div>
                                                <script type="text/javascript">
												var dataString2 = '';
                                                $.ajax({
                                                  url: 'appdata/json_data_dashboard.php?object=grafico_distribuzione_settori&mercato=hampers&country=uk&source=organic',
                                                  async: false,
                                                  dataType: "text",
												  
                                                  success: function(output) {
                                                 dataString2 = output;
                                                  }
                                                });
                                                //alert(dataString);
												
                                                if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                                var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Pie2D.swf", "ChartId", "98%", "400px", "0", "0");
                                                //chart.setXMLData( dataString );  
												chart.setJSONData( dataString2 );  												
                                                chart.render("DistribuzioneSettori");
                                                </script>
                                                <p></p>           
           			</section>
                        <!-- End Hicharts-->
                    <div class="row m-t-lg">
                      <div class="col-md-6">
                        <section class="panel">
                          <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Distribuzione Traffico Organico</header>
                          <p class="text-center" style=" font-size: 14px; background-color: rgba(173, 171, 171, 0.14); margin: 0 auto;">Tra i Competitors dove si concentra maggiormente il Traffico?</p>	
                          <div class="text-center clearfix">
                            <div class="m-t-lg padder">
                              
                                        <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Col3D1.js" ></script>
                                        <div id="marketshare" align="center">Chart will load here</div>
                                        <script type="text/javascript">
											var dataString2 = '';
                                                $.ajax({
                                                  url: 'appdata/json_data_dashboard.php?object=grafico_keyword_traffic_share&mercato=hampers&country=uk&source=organic',
                                                  async: false,
                                                  dataType: "text",
                                                  success: function(output) {
                                                 dataString2 = output;
                                                  }
                                                });
                                                //alert(dataString);
                                            if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                            var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Column3D.swf", "ChartId", "98%", "400", "0", "0");
                                            //chart.setXMLData( dataString );
											chart.setJSONData( dataString2 );
                                            chart.render("marketshare");
                                        </script>
                                        <p></p>           
                          <!--<footer class="panel-footer text-sm">Check more data</footer>-->
                        </section>
                      </div>
                      <div class="col-md-6">
                        <section class="panel">
                          <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Distribuzione Visibilità - Organic</header>
                          <p class="text-center" style=" font-size: 14px; background-color: rgba(173, 171, 171, 0.14); margin: 0 auto;">Come si distribuisce la Visibilità tra i tuoi Competitors organici?</p>	
                          <div class="text-center clearfix">
                            <div class="m-t-lg padder">
                            <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Bar2D1.js" ></script>        
                                        <div id="DistribuzioneVisibility" align="center">Chart will load here</div>
                                        <script type="text/javascript">
                                                var dataString = '';
                                                $.ajax({
                                                  url: 'appdata/json_data_dashboard.php?object=grafico_visibility_sum_by_type&mercato=hampers&country=uk&source=organic',
                                                  async: false,
                                                  dataType: "text",
                                                  success: function(output) {
                                                 dataString = output;
                                                  }
                                                });
                                                //alert(dataString);

                                            if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                            var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Bar2D.swf", "ChartId", "98%", "400", "0", "0");
                                           chart.setJSONData( dataString );    
                                           chart.render("DistribuzioneVisibility");
                                        </script>
                                        <p></p>           
                            <!--<footer class="panel-footer text-sm">Check more data</footer>  -->
                        </section>
                      </div>
                    </div>
                    <section class="panel">
                      <header class="panel-heading bg-light">
                        <ul class="nav nav-tabs nav-justified">
                          <li class="active"><a href="#tab_top20assoluti" data-toggle="tab">Top 20 - Assoluti</a></li>
                          <li><a href="#tab_top20settore" data-toggle="tab">Top 20 - Di Settore</a></li>
                          <li><a href="#tab_trendsettore" data-toggle="tab">Search Trends - Specialisti del Settore</a></li>
                         
                        </ul>
                      </header>
                      <div class="panel-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab_top20assoluti">
                          
                          <section>                           
                            <div class="text-center clearfix" style="padding-top: 19px;">
                              <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Bar2D1.1.js" ></script>        
                                        <div id="top20assoluti" align="center">Chart will load here</div>
                                        <script type="text/javascript">
                                            if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                            var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Bar2D.swf", "ChartId", "98%", "400", "0", "0");
                                           chart.setXMLData( dataString );         
                                           chart.render("top20assoluti");
                                        </script>
                                        <p></p>           
                            </div>
                          </section>
                          
                          </div>
                          
                          <div class="tab-pane" id="tab_top20settore">
                              <section>
                                
                                <div class="text-center clearfix" style="padding-top: 19px;">
                                  <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Bar2D1.2.js" ></script>        
                                        <div id="top20settore" align="center">Chart will load here</div>
                                        <script type="text/javascript">
                                            if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                            var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Bar2D.swf", "ChartId", "98%", "400", "0", "0");
                                           chart.setXMLData( dataString );         
                                           chart.render("top20settore");
                                        </script>
                                        <p></p>           
                                </div>
                             </section>                                                    
                          </div>

                          <div class="tab-pane" id="tab_trendsettore">
                            <section>                                    
                          <div class="text-center clearfix" style="min-height: 100px;">   
                                        
                                                    <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/MSLine4.js" ></script>
                                                    <div id="domainTrend" align="center">Chart will load here</div>
                                                    <script type="text/javascript">
                                                        if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                                        var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/MSLine.swf", "ChartId", "95%", "500px", "0", "0");
                                                       chart.setXMLData( dataString );         
                                                       chart.render("domainTrend");
                                                    </script>
                                                    <p></p>                                                                                                 
                                    </div>
                                </div>
                            </div>
                      </div>
                    </section>
                    
                  </div>
                </div>                            
                <div class="tab-pane" id="tab3">
                  <div class="wrapper">
                       <!-- Hicharts-->
                        <section class="panel">
                          <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Distribuzione Competitors Paid</header>
                          <p class="text-center" style=" font-size: 14px; background-color: rgba(173, 171, 171, 0.14); margin: 0 auto;">Come si distribuiscono i Competitors con attive campagne Adv attive?</p>	                
                      
                                                 <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Pie2D1.1.js" ></script>
                                                                            
                                                 <div id="paid_distribuzioneSettori" align="center">Chart will load here</div>
                                                <script type="text/javascript">
                                                var dataString2 = '';
                                                $.ajax({
                                                  url: 'appdata/json_data_dashboard.php?object=grafico_distribuzione_settori&mercato=hampers&country=uk&source=paid',
                                                  async: false,
                                                  dataType: "text",
												  
                                                  success: function(output) {
                                                 dataString2 = output;
                                                  }
                                                });
                                                //alert(dataString);
												
                                                if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                                var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Pie2D.swf", "ChartId", "98%", "400px", "0", "0");
                                                //chart.setXMLData( dataString );  
												chart.setJSONData( dataString2 );  												
                                                chart.render("paid_distribuzioneSettori");
                                                </script>
                                                <p></p>           
                </section>
                        <!-- End Hicharts-->
                    <div class="row m-t-lg">
                      <div class="col-md-6">
                        <section class="panel">
                          <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Distribuzione Traffico a Pagamento</header>
                          <p class="text-center" style=" font-size: 14px; background-color: rgba(173, 171, 171, 0.14); margin: 0 auto;">Come si distribuiscono i Competitors con attive campagne adv?</p>	           
                          <div class="text-center clearfix">
                            <div class="m-t-lg padder">
                              
                                        <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Col3D1.js" ></script>
                                        <div id="paid_marketshare" align="center">Chart will load here</div>
                                        <script type="text/javascript">
											var dataString2 = '';
                                                $.ajax({
                                                  url: 'appdata/json_data_dashboard.php?object=grafico_keyword_traffic_share&mercato=hampers&country=uk&source=paid',
                                                  async: false,
                                                  dataType: "text",
                                                  success: function(output) {
                                                 dataString2 = output;
                                                  }
                                                });
                                                //alert(dataString);
                                            if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                            var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Column3D.swf", "ChartId", "98%", "400", "0", "0");
                                            //chart.setXMLData( dataString );
											chart.setJSONData( dataString2 );
                                            chart.render("paid_marketshare");
                                        </script>
                                        <p></p>           
                          <!--<footer class="panel-footer text-sm">Check more data</footer>-->
                        </section>
                      </div>
                      <div class="col-md-6">
                        <section class="panel">
                          <header class="panel-heading" style="text-align:center; margin-bottom: 15px; font-size: 21px;font-variant: small-caps; font-weight: 500;">Distribuzione Visibilità - Paid</header>
                          <p class="text-center" style=" font-size: 14px; background-color: rgba(173, 171, 171, 0.14); margin: 0 auto;">Come si distribuisce la Visibilità tra i tuoi Competitors Organici?</p>	
                            <div class="text-center clearfix">
                            <div class="m-t-lg padder">
                            <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Bar2D1.js" ></script>        
                                        <div id="paid_DistribuzioneVisibility" align="center">Chart will load here</div>
                                        <script type="text/javascript">
                                                var dataString = '';
                                                $.ajax({
                                                  url: 'appdata/json_data_dashboard.php?object=grafico_visibility_sum_by_type&mercato=hampers&country=uk&source=paid',
                                                  async: false,
                                                  dataType: "text",
                                                  success: function(output) {
                                                 dataString = output;
                                                  }
                                                });
                                                //alert(dataString);

                                            if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                            var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Bar2D.swf", "ChartId", "98%", "400", "0", "0");
                                           chart.setJSONData( dataString );    
                                           chart.render("paid_DistribuzioneVisibility");
                                        </script>
                                        <p></p>           
                            <!--<footer class="panel-footer text-sm">Check more data</footer>  -->
                        </section>
                      </div>
                    </div>
                    <section class="panel">
                      <header class="panel-heading bg-light">
                        <ul class="nav nav-tabs nav-justified">
                          <li class="active"><a href="#tab_paid_top20assoluti" data-toggle="tab">Top 20 - Assoluti</a></li>
                          <li><a href="#tab_paid_top20settore" data-toggle="tab">Top 20 - Di Settore</a></li>
                          <li><a href="#tab_paid_trendsettore" data-toggle="tab">Search Trends - Specialisti del Settore</a></li>
                         
                        </ul>
                      </header>
                      <div class="panel-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab_paid_top20assoluti">
                          
                          <section>
                           
                            <div class="text-center clearfix" style="padding-top: 19px;">
                              <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Bar2D1.4.js" ></script>        
                                        <div id="paid_top20assoluti" align="center">Chart will load here</div>
                                        <script type="text/javascript">
                                            if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                            var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Bar2D.swf", "ChartId", "98%", "400", "0", "0");
                                           chart.setXMLData( dataString );         
                                           chart.render("paid_top20assoluti");
                                        </script>
                                        <p></p>           
                            </div>
                          </section>
                          
                          </div>
                          
                          <div class="tab-pane" id="tab_paid_top20settore">
                              <section>
                                
                                <div class="text-center clearfix" style="padding-top: 19px;">
                                  <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Bar2D1.5.js" ></script>        
                                        <div id="paid_top20settore" align="center">Chart will load here</div>
                                        <script type="text/javascript">
                                            if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                            var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Bar2D.swf", "ChartId", "98%", "400", "0", "0");
                                           chart.setXMLData( dataString );         
                                           chart.render("paid_top20settore");
                                        </script>
                                        <p></p>           
                                </div>
                             </section>                                                    
                          </div>

                          <div class="tab-pane" id="tab_paid_trendsettore">
                            <section>                                    
                          <div class="text-center clearfix" style="min-height: 100px;">   
                                        
                                                    <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/MSLine4.js" ></script>
                                                    <div id="paid_domainTrend" align="center">Chart will load here</div>
                                                    <script type="text/javascript">
                                                        if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                                        var chart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/MSLine.swf", "ChartId", "95%", "500px", "0", "0");
                                                       chart.setXMLData( dataString );         
                                                       chart.render("paid_domainTrend");
                                                    </script>
                                                    <p></p>                                                                                                 
                                    </div>
                                </div>
                            </div>
                      </div>
                    </section>
                </div>
              </div>            </aside>
            <aside class="b-l aside-lg bg-light">
              <section class="wrapper">
                <div class="text-center m-b">
                  <div class="inline">
                  <a href="http://#" target="_blank" title:"Scarica l'Analisi Completa del tuo Mercato Target!"><img src="/Webmarketanalyzer/images/pdf_report_download.png" width="148px;" alt="Report Download" style="margin-bottom: 10px;"></a>
                  <br>
                  <p style="font-size: 13px;text-align: left; font-size: 14px; width: 75%;margin: 0 auto; padding: 10px;">Scarica l'Analisi con tutti i dettagli del tuo Mercato!</p>
                  <hr style="border: 1px solid #999999;">
                  <img src="/Webmarketanalyzer/images/dictionary-icon.png" width="148px;" alt="Wiki" />
                  <br>
                   <!-- <div class="easypiechart" data-percent="100" data-line-width="25" data-track-color="#eee" data-bar-color="#afcf6f" data-scale-color="#ddd" data-loop="false" data-size="180">
                      <span class="h2">95</span>%
                      <div class="easypie-text">Processing</div>
                    </div>-->
                  </div>
                </div>
                <div class="panel-group m-b" id="accordion2">
                  <div class="panel">
                    <div class="panel-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                        KEYWORDS</a>
                    </div>
                    <div id="collapseOne" class="panel-collapse in">
                      <div class="panel-body text-sm">
                        Indicazioni per la lettura del grafico
                      </div>
                    </div>
                  </div>
                  
                  <div class="panel">
                    <div class="panel-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        ORGANIC - COMPETITORS                      </a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body text-sm">
                        Indicazioni per la lettura del grafico</div>
                    </div>
                  </div>
                  
                  <div class="panel">
                    <div class="panel-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                        ORGANIC - COMPETITORS                      </a>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body text-sm">
                        Indicazioni per la lettura del grafico</div>
                    </div>
                  </div>
                  
                  <div class="panel">
                    <div class="panel-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                        ORGANIC - COMPETITORS                      </a>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                      <div class="panel-body text-sm">
                        Indicazioni per la lettura del grafico</div>
                    </div>
                  </div>
                  
                  <div class="panel">
                    <div class="panel-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
                        ORGANIC - COMPETITORS</a>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                      <div class="panel-body text-sm">
                        Indicazioni per la lettura del grafico</div>
                    </div>
                  </div>
                  
                  <div class="panel">
                    <div class="panel-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">PAID - COMPETITORS</a>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                      <div class="panel-body text-sm">
                        Indicazioni per la lettura del grafico
                        
                      </div>
                    </div>
                  </div>
                </div>
              </section>                      
            </aside>
          </section>
        </section>
      </section>
      <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
    </section>
    <!-- /.vbox -->
  </section>

  
                                                      <script type="text/javascript" src="MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Gallery/Data/String/js/Bubble3.js" ></script>        

                                                            <script type="text/javascript">
														if (GALLERY_RENDERER && GALLERY_RENDERER.search(/javascript|flash/i)==0)  FusionCharts.setCurrentRenderer(GALLERY_RENDERER); 
                                                              var mychart = new FusionCharts("MyJs/FusionChartsSuiteXTE/FusionCharts_XT/Charts/Bubble.swf", "ChartId", "95%", "600px", "0", "0");
                                                         mychart.setXMLData( dataString );       
                                                         mychart.render("bublechart");

														 //mychart.addEventListener( "Rendered", function(evt, args) {
														 //	alert ( evt.sender.id + " chart has been resized." );
														 //	$('#bublechart').css('display','block');
														 // }); 
                                                      </script>


		

		
</body>
</html>
