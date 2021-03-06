<html>
<head>
<title>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="layout.css">
<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  //$('[data-toggle="tooltip"]').tooltip({'container': 'body'});
    
  //$('.jumbotron').css('margin-top', ($(window).height()/2)-$('.jumbotron').height());
  
  $('.content-row').each(function(){
     // $(this).css('margin-top', ($(window).height()/2)-$(this).height());
   });
  
});
</script>
</head>
<body id="top" style="padding-top:70px">
<div>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" style="padding:0">
          <img src="img/refugees-welcome2.png" style="height:40px;margin:5px;margin-left:20px" />
        </a> 
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
 
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
        <ul class="nav navbar-nav">
          <li><a href="#top">Start</a></li>
          <li><a href="#dasprojekt">Das Projekt</a></li>
          <li><a href="#dieapp">Die App</a></li>
          <li><a href="#dasteam">Das Team</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://heteria.de/board" target="parent" >Forum</a></li>
          <li><a href="#" data-toggle="modal" data-target="#kontakt">Kontakt</a></li>
          <li><a href="#top">Impressum</a></li>
        </ul>        
      <div>
    </div>
  </nav>
	<section id="start">
    <div class="row">
      <div class="container">
        <div class="col-md-12">
          <div class="jumbotron" style="margin:0">
            <h1>RefugeeHelp VB</h1>
            <p id="subtitle" style="margin-top:30px">Die Smarthpone App zur Orientierung und Integration im Vogelsberg!</p>
            <!--<img src="img/refugees-welcome.png" style="width:300px;margin:20px 0px 0px 20px" />-->
            <p>
              <div class="container">
                <div class="col-sm-12">
                  <a id="btn-learn-more" class="btn btn-info btn-lg" href="#dasprojekt" role="button" style="width:250px;height:50px">
                    <span class="glyphicon glyphicon-plus"></span>&nbsp;Mehr erfahren
                  </a>
                </div>
                <div class="col-sm-12">
                  <a class="btn btn-success btn-lg" href="http://heteria.de/board" target="blank" role="button" style="width:250px;height:50px">
                    <span class="glyphicon glyphicon-wrench"></span>&nbsp;Mitmachen
                  </a>
                </div>
                <div class="col-sm-12">              
                  <a class="btn btn-warning btn-lg" href="#" role="button" style="width:250px;height:50px">
                    <span class="glyphicon glyphicon-euro"></span>&nbsp;Unterst&uuml;tzen
                  </a>
                </div>
              </div>              
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    	<div class="col-md-12" style="text-align:center">
    	  
    	</div>
      <div class=col-md-12>
        &nbsp;
      </div>
  
<!--
      <div class="container support-container">
        <div class="col-md-2">
          <img src="img/logo3.gif" />
        </div>
        <div class="col-md-2">
          <img src="img/bild.jpg" />
        </div>
        <div class="col-md-2">
          <img src="img/vr-bank_logo.gif" />
        </div>
        <div class="col-md-2">
          <img src="img/logo_vogelsbergkreis.png" />
        </div>
        <div class="col-md-2">
          <img src="img/logo.gif" />
        </div>        
      </div>
-->
    </div>
  </section>
	<section id="dasprojekt" style="clear:both">
    <div class="container ">
      <div class="row content-row">
        <div class="col-lg-12">
           <h1 class="headline" style="color:#fff">
            Das Projekt
           </h1>
         </div>
      </div>
      <div class="row content-row">
           <div class="content-box col-md-4">
              <h2>
                Zeitgem&auml;&szlig;
              </h2>
              <span>
                Der Besitz von Fl&uuml;chtlingen ist gering. Smartphones - die in den Heimatl&auml;ndern mittlerweile auch zum
                Alltagsgegenstand geworden sind - werden dennoch oft mitgebracht.
              </span>
            <div style="text-align:center">
              <img src="img/zeitgemaess.png" />
            </div>               
           </div>
        <div class="content-box col-md-4">
            <h2>
              Einzigartig
            </h2>
            <span>
              Deutschlandweit ist uns bisher kein (<b>!</b>) vergleichbares Projekt bekannt. Eine Chance f&uuml;r den
              beschaulichen Vogelsberg, neue Wege in Sachen Integrationspolitik zu gehen. 
            </span>
            <div style="text-align:center">
              <img src="img/einzigartig.png" />
            </div>
         </div>
         <div class="content-box col-md-4">
            <h2>
              Gemeinschaftlich
            </h2>
            <span>
              Jeder hat die M&ouml;glichkeit, sich inhaltlich zu beteiligen. Besuchen Sie unser Diskussionsforum und lesen
              Sie nach, wo Sie sich einbringen k&ouml;nnen. <b><u>Integration</u></b> ist ein <b><u>Gemeinschaftsprojekt</u></b>!
            </span>
            <div style="text-align:center">
              <img src="img/gemeinschaft.png" />
            </div>
         </div>           
      </div>
      <div class="row content-row">
         <div class="content-box col-md-4">
              <h2>
                N&uuml;tzlich
              </h2>
              <span>
                Alle in der App enthaltenen Informationen sind <b><u>sinnvoll</u></b> strukturiert, <b><u>schnell</u></b> erreichbar, <b><u>gut</u></b> recherchiert, <b><u>mehrsprachig</u></b>
                abrufbar und werden <b><u>nachhaltig</u></b> von unserem Projektteam gepflegt.
              </span>
              <div style="text-align:center">
                <img src="img/nuetzlich.png" />
              </div>              
           </div>
           <div class="content-box col-md-4">
              <h2>
                St&auml;ndig verf&uuml;gbar
              </h2>
              <span>
                Fl&uuml;chtlinge haben die M&ouml;glichkeit, sich auch au&szlig;erhalb der &Ouml;ffnungszeiten von Betreuungsstellen &uuml;ber
                verschieden, wichtige Themen zu informieren. Besonders bei medizinischen Notf&auml;llen ist schnelle Hilfe unverizchtbar.  
              </span>
            <div style="text-align:center">
              <img src="img/verfuegbar.png" />
            </div>              
           </div>      
        <div class="col-md-4 content-box" style="padding-left:30px;padding-top:50px;text-align:left">
          <button type="button" class="btn btn-info btn-lg" style="height:50px">
            <span class="glyphicon glyphicon-file"></span> Offizielle Projektbeschreibung
          </button>
          </a>
        </div>
      </div>
    </div>
  </section>
	<section id="dieapp">
    <div class="container">
      <div class="row">
         <div class="col-lg-12">
           <h1 class="headline" style="color:#fff">
            Die App
           </h1>
         </div>
      </div>
      <div class="row countdown">
        <span class="count">
          00  
        </span>
        <span class="count-text">
          Tage
        </span>
        <span class="count">
          00  
        </span>
        <span class="count-text">
          Stunden
        </span>
        <span class="count">
          00  
        </span>
        <span class="count-text">
          Minuten
        </span>                
      </div>
      <div class="row content-row">
        <div class="col-md-9 content-box">
           <h2>
            Projektfortschritt (<u>Umsetzungsphase</u>)
           </h2> 
           <span>
            Inhalte
           </span>           
           <div class="progress">
             <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
               <span class="sr-only">&nbsp;</span>
             </div>
           </div>
           <span>
            Benutzeroberfl&auml;che
           </span>           
           <div class="progress">
             <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
               <span class="sr-only">&nbsp;</span>
             </div>
           </div>
           <span>
            Schnittstellen
           </span>           
           <div class="progress">
             <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
               <span class="sr-only">&nbsp;</span>
             </div>
           </div>
           <span>
            Android-Programmierung
           </span>           
           <div class="progress">
             <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
               <span class="sr-only">&nbsp;</span>
             </div>
           </div>                                        
        </div>
        <div class="col-md-3 content-box">
          Bilder...
        </div>        
      </div>
      <div class="row content-row">
        <div class="col-md-8 content-box">
          <h2>
            Version 0.1
          </h2>
          <div class="media content-box">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="img/medizin.png" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Medizinische Versorgung</h4>
              <ul>
                <li>Richtiges Verhalten in Notfallsituationen</li>
                <li>Allgemeine Informationen &uuml;ber unser Gesundheitssystem</li> 
                <li>Adressen von Allgemein- und Fachmedizinern</li>
              </ul>
            </div>
          </div>
          <div class="media content-box">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="img/oeffi.png" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">&Ouml;ffentliche Verkehrsmittel</h4>
              <ul>
                <li>Vereinfachte Fahrpl&auml;ne</li>
                <li>Hilfe und Tips zum Ticketkauf</li>
                <li>Einfach erkl&auml;rte Routen zu wichtigen Einrichtungen</li>
                <li>Optimiert auf alle - auch schlecht angebundene - Unterbringungsstandorte</li>
              </ul>
            </div>
          </div>
          <div class="media content-box">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="img/veranstaltung.png" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Veranstaltungskalender</h4>
              <ul>
                <li>Hinweis auf besuchenswerte Veranstaltungen um Kontakt mit Einheimischen aufzunehmen</li>
                <li>Termine und &Ouml;ffnungszeiten der Lernzentren und &Auml;mter</li>
              </ul>
            </div>
          </div>                             
        </div>
        <div class="col-md-4 content-box">
          <h2>
            Release Plan
          </h2>
          <table>
            <tr>
              <td style="width:400px">
                <span class="glyphicon glyphicon-ok"></span>&nbsp;<b>Fertigstellung</b>
              </td>
              <td>
                <i>31.07.2015</i>
              </td>
            </tr>
            <tr>
              <td>
                <span class="glyphicon glyphicon-eye-open"></span>&nbsp;<b>Beta-Testphase</b>
              </td>
              <td>
                <i>01.08.2015</i>
              </td>
            </tr>
            <tr>
              <td>
                <span class="glyphicon glyphicon-phone"></span>&nbsp;<b>Ver&ouml;ffentlichung</b>
              <td>
                <i>???</i>
              </td>
            </tr>              
          </table>              
        </div>        
      </div>
    </div>  
  </section>
	<section id="dasteam">
    <div class="container">
      <div class="row">
         <h1 class="headline" style="color:#fff">
          Das Projektteam
         </h1>
      </div>
      <div class="row">
        <div class="col-md-12 content-box">
          <h2>
           Entwicklerteam
          </h2>
          <div class="container">
            <div class="row">
              <div class="col-md-4 content-box">
                <div class="thumbnail">
                  <img src="img/nopic.jpg" alt="..." />
                  <div class="caption">
                    <h3>Sebastian Koine</h3>
                    <ul>
                      <li>Fachinformatiker (Anwendungsentwicklung)</li>
                      <li>Webseite</li>
                      <li>Schnittstellen / Webservices</li>
                      <li>Datenbankprogrammierung</li>
                    </ul>
                    <p>
                      <a href="#" class="btn btn-primary" role="button">
                        <span class="glyphicon glyphicon-envelope"></span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 content-box">
                <div class="thumbnail">
                  <img src="img/nopic.jpg" alt="..." />
                  <div class="caption">
                    <h3>Felix Ebert</h3>
                    <ul>
                      <li>Student (Informatik)</li>
                      <li>Benutzeroberfl&auml;che</li>
                      <li>Usability</li>
                    </ul>
                    <p>
                      <a href="#" class="btn btn-primary" role="button">
                        <span class="glyphicon glyphicon-envelope"></span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 content-box">
                <div class="thumbnail">
                  <img src="img/nopic.jpg" alt="..." />
                  <div class="caption">
                    <h3>Nico Sch&uuml;tz</h3>
                    <ul>
                      <li>Student (Informatik)</li>
                      <li>Android Backend</li>
                      <li>Schnittstellenkommunikation</li>
                    </ul>
                    <p>
                      <a href="#" class="btn btn-primary" role="button">
                        <span class="glyphicon glyphicon-envelope"></span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>                            
            </div>          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 content-box">
          <h2>
           Experten / Lernpaten
          </h2>
          <div class="container">
            <div class="row">
              <div class="col-md-4 content-box">
                <div class="thumbnail">
                  <img src="img/nopic.jpg" alt="..." />
                  <div class="caption">
                    <h3>Tilla Lotz</h3>
                    <p></p>
                    <p>
                      <a href="#" class="btn btn-primary" role="button">
                        <span class="glyphicon glyphicon-envelope"></span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 content-box">
                <div class="thumbnail">
                  <img src="img/nopic.jpg" alt="..." />
                  <div class="caption">
                    <h3>Ralf M&uuml;ller</h3>
                    <p></p>
                    <p>
                      <a href="#" class="btn btn-primary" role="button">
                        <span class="glyphicon glyphicon-envelope"></span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>              
            </div>          
          </div>
        </div>
      </div>            
    </div> 
  </section>
</div>

<div class="modal fade" id="kontakt" tabindex="-1" role="dialog" aria-labelledby="KontaktLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="KontaktLabel">Kontakt</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label for="email">Ihre E-Mail Adresse</label>
          <input type="text" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="comment">Text</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Abschicken</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
