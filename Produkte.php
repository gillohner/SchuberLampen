<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "test");
?>

<!doctype html>
<html lang="de">
    <head>
        <!-- Titel der Website -->
        <title>Produkte | Schuber Lampen</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="scss/bootstrap.css">
        
        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
         crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <!-- My CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- My Javascript -->
        <script src="js/js.js"></script>

        <!-- Favicon -->
        <link rel="icon" href="Images/Logos/Schuber_Lampen_Logo_No_Text.png" type="image/x-icon"/>                                                          
    </head>
    <body>
        <!-- Beginn Header-->
        <?php
            include("Header.php");
         ?>
        <!-- Beginn Main -->
        <main>
            <div class="container-fluid main d-none d-lg-block">
              
                <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="2500">
                        <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" width="900" length="300" src="Images/Carousel/03_carousel.jpg">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="900" length="300" src="Images/Carousel/01_carousel.jpg">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="900" length="300" src="Images/Carousel/02_carousel.jpg">
                        </div>
                    </div>
                </div>
                <div class="covertext">
                    <div class="col-lg-10" style="float:none; margin:0 auto;">
                      <h1 class="title" >Produkte</h1>
                      <h3 class="subtitle" style="text-shadow: 2px 2px 5px black">All unsere Produkte der diesjährigen Serie finden Sie in der folgenden Auflistung:</h3>
                    </div>
                    <div class="col-xs-12 explore">
                      <a href="Images/Produkte/Produktliste.pdf"><button type="button" class="btn btn-lg explorebtn">Download Produktetabelle</button></a>
                    </div>
                </div>
            </div>
            <!-- Beginn Produktauflistung -->
            <div class="container" style="margin-top: 60px">
                <h1 class="featurette-heading" style="margin-bottom: 30px">Deckenlampen:<br></h1>
                <div class="row">
                    <!-- Camille -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="camille">
                            <img class="card-img-top" alt="Camille " style="height: 225px; width: 100%; display: block;" src="Images/Produkte/Camille.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Camille</h1>
                                <p class="card-text">Bronzene deckenlampe. Ausgestattet mit unserer neuesten SmartSchuber™ Technologie.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>1299 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalcamille">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Denovo -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="Denovo">
                            <img class="card-img-top" alt="Denovo " style="height: 225px; width: 100%; display: block;" src="Images/Produkte/Denovo.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Denovo</h1>
                                <p class="card-text">Kleine moderne Deckenlampe. Ausgestattet mit unserer neuesten SmartSchuber™ Technologie.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>549 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modaldenovo">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Noch 2 auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Edan -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="edan">
                            <img class="card-img-top" alt="edan" style="height: 225px; width: 100%; display: block;" src="Images/Produkte/Edan.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Edan</h1>
                                <p class="card-text">Orangene Deckenlampe im Retro-style. Perfekt geeignet für Personen die einen nostalgischen Look bevorzugen.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>549 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modaledan">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Nicht auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Felix -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="Felix">
                            <img class="card-img-top" alt="Felix" style="height: 225px; width: 100%; display: block;" src="Images/Produkte/Felix.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Felix</h1>
                                <p class="card-text">Ausgefaltetes Design inspiriert durch Vogelkäfige. Ausgestattet mit unserer neuesten SmartSchuber™ Technologie</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>999 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalfelix">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pierre -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="Pierre">
                            <img class="card-img-top" alt="Pierre" style="height: 225px; width: 100%; display: block;" src="Images/Produkte/Pierre.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Pierre</h1>
                                <p class="card-text">Stoffbezogene, deckenmontierte Lampe. Ausgestattet mit unserer neuesten SmartSchuber™ Technologie</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>899 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalpierre">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Natasha -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="natasha">
                            <img class="card-img-top" alt="Natasha" style="height: 225px; width: 100%; display: block;" src="Images/Produkte/lampe.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Natasha</h1>
                                <p class="card-text">Hölzernes Design für eine moderne Einrichtung. Für stylische Einrichtungen geeignet.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>1399 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalnatasha">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Noch 1 auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="featurette-heading" style="margin-bottom: 30px; margin-top: 60px">Stehlampen:<br></h1>
                <div class="row">
                    <!-- Samuel -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="Samuel">
                            <img class="card-img-top" alt="Samuel" style="height: 400px; width: 100%; display: block;" src="Images/Produkte/stehlampe.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Samuel</h1>
                                <p class="card-text">Stoffbezogene, freistehende Designerlampe. Ausgestattet mit unserer neuesten SmartSchuber™ Technologie</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>499 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalsamuel">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Noch 12 auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hutomo -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="Hutomo">
                            <img class="card-img-top" alt="Hutomo" style="height: 400px; width: 100%; display: block;" src="Images/Produkte/Hutomo.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Hutomo</h1>
                                <p class="card-text">Moderne, freistehende Lampe aus Aluminium. Ausgestattet mit unserer neuesten SmartSchuber™ Technologie</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>1099 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalhutomo">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jonny -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="Jonny">
                            <img class="card-img-top" alt="Jonny" style="height: 400px; width: 100%; display: block;" src="Images/Produkte/Jonny.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Jonny</h1>
                                <p class="card-text">Simple und freistehende Aluminiumlampe. Ausgestattet mit unserer neuesten SmartSchuber™ Technologie</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>399 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modaljonny">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Kari -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="Kari">
                            <img class="card-img-top" alt="Kari" style="height: 400px; width: 100%; display: block;" src="Images/Produkte/Kari.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Kari</h1>
                                <p class="card-text">Schreibtisch und Deckenbeleuchtung in einer Lampe. Ausgestattet mit unserer neuesten SmartSchuber™ Technologie</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>799 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalkari">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Nathan -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="Nathan">
                            <img class="card-img-top" alt="Nathan" style="height: 400px; width: 100%; display: block;" src="Images/Produkte/Nathan_small.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Nathan</h1>
                                <p class="card-text">Stoffbezogen, freistehende Zimmerlampe. Ausgestattet mit unserer neuesten SmartSchuber™ Technologie</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>899 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalnathan">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sven -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="Sven">
                            <img class="card-img-top" alt="Sven" style="height: 400px; width: 100%; display: block;" src="Images/Produkte/Sven.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Sven</h1>
                                <p class="card-text">Moderne und verstellbare Stehlampe. Das simple und cleane Design passt sich so gut wie jeder einwandfrei an.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>399 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalsven">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Steve -->
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow" id="Steve">
                            <img class="card-img-top" alt="Steve" style="height: 400px; width: 100%; display: block;" src="Images/Produkte/Steve.jpg">    
                            <div class="card-body">
                                <h1 class="card-text">Steve</h1>
                                <p class="card-text">Stoffbezogen, freistehende Wohnzimmerlampe. Ausgestattet mit unserer neuesten SmartSchuber™ Technologie</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" disabled>599 CHF</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalsteve">Mehr erfahren</button>
                                    </div>
                                    <small class="text-muted">Auf Lager</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Ende Produktauflistung -->
            <hr class="featurette-divider" style="margin-bottom: 35px">
            <!-- Beginn Text-/Bildblock-->
            <div class="row featurette" style="margin-bottom: 60px">
                <div class="col-md-7">
                  <h2 class="featurette-heading">Bestellungen <span class="text-muted">zu ihnen nach Hause.</span></h2>
                  <p class="lead">Jegliche Produkte werden <strong>gratis</strong> mit der schweizerischen Post versendet. Benutzen sie für die Bestellungen bitte unser <a href="Kontaktformular.html">Kontaktformular</a> oder schreiben sie eine Mail an <a href="mailto:bestellungen@schuber.ch">bestellungen@schuber.ch</a></p>
                </div>
                <div class="col-md-5">
                  <img class="featurette-image img-fluid mx-auto" alt="Schweizerische Post" style="width: 100%; height: 100%;" src="Images/Else/Post.jpg">
                </div>
            </div>
            <!-- Ende Text-/Bildblock-->
            </div>
        </main>
        <!-- Ende Main -->
        <!-- Beginn Footer -->
        <?php include("Footer.php");?>
        <!-- Ende Footer -->

        <!-- Beginn Modal Camille -->
        <div class="modal fade" id="modalcamille" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/Camille.jpg" alt="camille" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                            <div class="col-lg-7">
                                <h2 class="h2-responsive product-name">
                                    <strong>Camille</strong>
                                </h2>
                                <h4 style="color: black;"class="h4-responsive">
                                    <span class="green-text">
                                        <strong>1299 CHF</strong>
                                    </span>
                                </h4>

                                <!-- Beginn Akkordion Wrapper-->
                                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                                    <!-- Accordion card -->
                                    <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading2">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse2"
                                            aria-expanded="false" aria-controls="caollapseToo2">
                                            <h5 class="mb-0">
                                            SmartSchuber™️ <i class="fa fa-angle-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2"
                                        data-parent="#accordionEx">
                                        <div class="card-body">
                                            Diese Lampe ist ausgestattet mit unserer neuesten SmartSchuber™ Technologie.
                                            Diese ermöglicht es ihnen die Lampe ganz einfach von ihrem iOS oder Android Smartphone zu steuern.
                                            <br>
                                            Erfahren sie mehr über <a href="Smartschuber.html">SmartSchuber™</a>
                                        </div>
                                        </div>

                                    </div>
                                    <!-- Accordion card -->

                                    <!-- Accordion card -->
                                    <div class="card">

                                            <!-- Card header -->
                                            <div class="card-header" role="tab" id="heading1">
                                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse1" aria-expanded="true"
                                                    aria-controls="collapseOne1">
                                                    <h5 class="mb-0">
                                                    Montage <i class="fa fa-angle-down rotate-icon"></i>
                                                    </h5>
                                                </a>
                                            </div>
            
                                            <!-- Card body -->
                                            <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1"
                                            data-parent="#accordionEx">
                                                <div class="card-body">
                                                    Mithilfe der beigelegten Halterung kann die Lampe sehr einfach an die Decke montiert werden.
                                                    <br>
                                                    <strong>Benötigte Utensilien:</strong>
                                                    <br>
                                                    <ul>
                                                        <li>Bohrer</li>
                                                        <li>10mm Bohraufsatz</li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Ende Accordion wrapper -->
                                <br>
                                <!-- Beginn Warenkorbhinzufügen -->
                                <form action="WarenkorbHinzufuegen.php" method="post">
                                    Anzahl: <input class="btn btn-sm btn-outline secondary" type="number" name="Anzahl" value="1" style="width: 4em">
                                    <input class="btn btn-sm btn-outline-secondary" type="submit" value="Zum Warenkorb hinzufügen">
                                </form>
                                <!-- Ende Warenkorbhinzufügen -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ende Modal Camille -->

        <!-- Beginn Modal Denovo -->
        <div class="modal fade" id="modaldenovo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/Denovo.jpg" alt="camille" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Denovo</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>549 CHF</strong>
                                </span>
                            </h4>
    
                            <!-- Beginn Akkordion Wrapper-->
                            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
    
                                <!-- Accordion card -->
                                <div class="card">
    
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading3">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse3"
                                        aria-expanded="false" aria-controls="caollapseToo2">
                                        <h5 class="mb-0">
                                        SmartSchuber™️ <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Diese Lampe ist ausgestattet mit unserer neuesten SmartSchuber™ Technologie.
                                            Diese ermöglicht es ihnen die Lampe ganz einfach von ihrem iOS oder Android Smartphone zu steuern.
                                            <br>
                                            Erfahren sie mehr über <a href="Smartschuber.html">SmartSchuber™</a>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Accordion card -->
    
                                <!-- Accordion card -->
                                <div class="card">

                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading4">
                                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse4" aria-expanded="true"
                                            aria-controls="collapseOne1">
                                            <h5 class="mb-0">
                                            Montage <i class="fa fa-angle-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse4" class="collapse show" role="tabpanel" aria-labelledby="heading4"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Mithilfe der beigelegten Halterung kann die Lampe sehr einfach an die Decke montiert werden.
                                            <br>
                                            <strong>Benötigte Utensilien:</strong>
                                            <br>
                                            <ul>
                                                <li>Bohrer</li>
                                                <li>10mm Bohraufsatz</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        <!-- Ende Modal Denovo -->

        <!-- Beginn Modal Edan -->
        <div class="modal fade" id="modaledan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/Edan.jpg" alt="Denovo" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Edan</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>549 CHF</strong>
                                </span>
                            </h4>
    
                            <!-- Beginn Akkordion Wrapper-->
                            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
    
                                <!-- Accordion card -->
                                <div class="card">
    
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="heading6">
                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse6" aria-expanded="true"
                                                aria-controls="collapseOne1">
                                                <h5 class="mb-0">
                                                Montage <i class="fa fa-angle-down rotate-icon"></i>
                                                </h5>
                                            </a>
                                        </div>
        
                                        <!-- Card body -->
                                        <div id="collapse6" class="collapse show" role="tabpanel" aria-labelledby="heading6"
                                        data-parent="#accordionEx">
                                            <div class="card-body">
                                                Mithilfe der beigelegten Halterung kann die Lampe sehr einfach an die Decke montiert werden.
                                                <br>
                                                <strong>Benötigte Utensilien:</strong>
                                                <br>
                                                <ul>
                                                    <li>Bohrer</li>
                                                    <li>10mm Bohraufsatz</li>
                                                </ul>
                                            </div>
                                        </div>
        
                                    </div>
                                    <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        <!-- Ende Modal Edan -->

        <!-- Beginn Modal Felix -->
        <div class="modal fade" id="modalfelix" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/Felix.jpg" alt="felix" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Felix</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>999 CHF</strong>
                                </span>
                            </h4>
    
                            <!-- Beginn Akkordion Wrapper-->
                            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
    
                                <!-- Accordion card -->
                                <div class="card">
    
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading7">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse7"
                                        aria-expanded="false" aria-controls="caollapseToo2">
                                        <h5 class="mb-0">
                                        SmartSchuber™️ <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Diese Lampe ist ausgestattet mit unserer neuesten SmartSchuber™ Technologie.
                                            Diese ermöglicht es ihnen die Lampe ganz einfach von ihrem iOS oder Android Smartphone zu steuern.
                                            <br>
                                            Erfahren sie mehr über <a href="Smartschuber.html">SmartSchuber™</a>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Accordion card -->
    
                                <!-- Accordion card -->
                                <div class="card">

                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading8">
                                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse8" aria-expanded="true"
                                            aria-controls="collapseOne1">
                                            <h5 class="mb-0">
                                            Montage <i class="fa fa-angle-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse8" class="collapse show" role="tabpanel" aria-labelledby="heading8"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Mithilfe der beigelegten Halterung kann die Lampe sehr einfach an die Decke montiert werden.
                                            <br>
                                            <strong>Benötigte Utensilien:</strong>
                                            <br>
                                            <ul>
                                                <li>Bohrer</li>
                                                <li>10mm Bohraufsatz</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        <!-- Ende Modal Felix -->

        <!-- Beginn Modal Pierre -->
        <div class="modal fade" id="modalpierre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/Pierre.jpg" alt="pierre" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Pierre</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>899 CHF</strong>
                                </span>
                            </h4>
    
                            <!-- Beginn Akkordion Wrapper-->
                            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
    
                                <!-- Accordion card -->
                                <div class="card">
    
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading9">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse9"
                                        aria-expanded="false" aria-controls="caollapseToo2">
                                        <h5 class="mb-0">
                                        SmartSchuber™️ <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Diese Lampe ist ausgestattet mit unserer neuesten SmartSchuber™ Technologie.
                                            Diese ermöglicht es ihnen die Lampe ganz einfach von ihrem iOS oder Android Smartphone zu steuern.
                                            <br>
                                            Erfahren sie mehr über <a href="Smartschuber.html">SmartSchuber™</a>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Accordion card -->
    
                                <!-- Accordion card -->
                                <div class="card">

                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading10">
                                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse10" aria-expanded="true"
                                            aria-controls="collapseOne1">
                                            <h5 class="mb-0">
                                            Montage <i class="fa fa-angle-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse10" class="collapse show" role="tabpanel" aria-labelledby="heading10"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Mithilfe der beigelegten Halterung kann die Lampe sehr einfach an die Decke montiert werden.
                                            <br>
                                            <strong>Benötigte Utensilien:</strong>
                                            <br>
                                            <ul>
                                                <li>Bohrer</li>
                                                <li>10mm Bohraufsatz</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        <!-- Ende Modal Pierre -->

        <!-- Beginn Modal Natasha -->
        <div class="modal fade" id="modalnatasha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/lampe.jpg" alt="natasha" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Natasha</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>1399 CHF</strong>
                                </span>
                            </h4>
    
                                <!-- Accordion card -->
                                <div class="card">

                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading11">
                                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse11" aria-expanded="true"
                                            aria-controls="collapseOne1">
                                            <h5 class="mb-0">
                                            Montage <i class="fa fa-angle-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse11" class="collapse show" role="tabpanel" aria-labelledby="heading11"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Mithilfe der beigelegten Halterung kann die Lampe sehr einfach an die Decke montiert werden.
                                            <br>
                                            <strong>Benötigte Utensilien:</strong>
                                            <br>
                                            <ul>
                                                <li>Bohrer</li>
                                                <li>10mm Bohraufsatz</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
        </div>
        <!-- Ende Modal Natasha -->

        <!-- Beginn Modal Samuel -->
        <div class="modal fade" id="modalsamuel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/stehlampe.jpg" alt="felix" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Samuel</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>499 CHF</strong>
                                </span>
                            </h4>

                                <!-- Accordion card -->
                                <div class="card">
    
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading12">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse12"
                                        aria-expanded="false" aria-controls="caollapseToo2">
                                        <h5 class="mb-0">
                                        SmartSchuber™️ <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Diese Lampe ist ausgestattet mit unserer neuesten SmartSchuber™ Technologie.
                                            Diese ermöglicht es ihnen die Lampe ganz einfach von ihrem iOS oder Android Smartphone zu steuern.
                                            <br>
                                            Erfahren sie mehr über <a href="Smartschuber.html">SmartSchuber™</a>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
        </div>
        <!-- Ende Modal Samuel -->

        <!-- Beginn Modal Hutomo -->
        <div class="modal fade" id="modalhutomo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/Hutomo.jpg" alt="hutomo" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Hutomo</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>1099 CHF</strong>
                                </span>
                            </h4>

                                <!-- Accordion card -->
                                <div class="card">
    
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading14">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse14"
                                        aria-expanded="false" aria-controls="caollapseToo2">
                                        <h5 class="mb-0">
                                        SmartSchuber™️ <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Diese Lampe ist ausgestattet mit unserer neuesten SmartSchuber™ Technologie.
                                            Diese ermöglicht es ihnen die Lampe ganz einfach von ihrem iOS oder Android Smartphone zu steuern.
                                            <br>
                                            Erfahren sie mehr über <a href="Smartschuber.html">SmartSchuber™</a>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
        </div>
        <!-- Ende Modal Hutomo -->

        <!-- Beginn Modal Jonny -->
        <div class="modal fade" id="modaljonny" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/Jonny.jpg" alt="hutomo" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Jonny</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>399 CHF</strong>
                                </span>
                            </h4>

                                <!-- Accordion card -->
                                <div class="card">
    
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading15">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse15"
                                        aria-expanded="false" aria-controls="caollapseToo2">
                                        <h5 class="mb-0">
                                        SmartSchuber™️ <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse15" class="collapse" role="tabpanel" aria-labelledby="heading15"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Diese Lampe ist ausgestattet mit unserer neuesten SmartSchuber™ Technologie.
                                            Diese ermöglicht es ihnen die Lampe ganz einfach von ihrem iOS oder Android Smartphone zu steuern.
                                            <br>
                                            Erfahren sie mehr über <a href="Smartschuber.html">SmartSchuber™</a>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
        </div>
        <!-- Ende Modal Jonny -->

        <!-- Beginn Modal Kari -->
        <div class="modal fade" id="modalkari" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/Kari.jpg" alt="hutomo" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Kari</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>799 CHF</strong>
                                </span>
                            </h4>

                                <!-- Accordion card -->
                                <div class="card">
    
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading16">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse16"
                                        aria-expanded="false" aria-controls="caollapseToo2">
                                        <h5 class="mb-0">
                                        SmartSchuber™️ <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse16" class="collapse" role="tabpanel" aria-labelledby="heading16"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Diese Lampe ist ausgestattet mit unserer neuesten SmartSchuber™ Technologie.
                                            Diese ermöglicht es ihnen die Lampe ganz einfach von ihrem iOS oder Android Smartphone zu steuern.
                                            <br>
                                            Erfahren sie mehr über <a href="Smartschuber.html">SmartSchuber™</a>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
        </div>
        <!-- Ende Modal Kari -->

        <!-- Beginn Modal Nathan -->
        <div class="modal fade" id="modalnathan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/Nathan.jpg" alt="hutomo" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Nathan</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>899 CHF</strong>
                                </span>
                            </h4>

                                <!-- Accordion card -->
                                <div class="card">
    
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading17">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse17"
                                        aria-expanded="false" aria-controls="caollapseToo2">
                                        <h5 class="mb-0">
                                        SmartSchuber™️ <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse17" class="collapse" role="tabpanel" aria-labelledby="heading17"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Diese Lampe ist ausgestattet mit unserer neuesten SmartSchuber™ Technologie.
                                            Diese ermöglicht es ihnen die Lampe ganz einfach von ihrem iOS oder Android Smartphone zu steuern.
                                            <br>
                                            Erfahren sie mehr über <a href="Smartschuber.html">SmartSchuber™</a>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
        </div>
        <!-- Ende Modal Nathan -->

        <!-- Beginn Modal Sven -->
        <div class="modal fade" id="modalsven" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/Sven.jpg" alt="hutomo" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Sven</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>399 CHF</strong>
                                </span>
                            </h4>

                                <!-- Accordion card -->
                                <div class="card">
    
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading18">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse18"
                                        aria-expanded="false" aria-controls="caollapseToo2">
                                        <h5 class="mb-0">
                                        SmartSchuber™️ <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse18" class="collapse" role="tabpanel" aria-labelledby="heading18"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Diese Lampe ist ausgestattet mit unserer neuesten SmartSchuber™ Technologie.
                                            Diese ermöglicht es ihnen die Lampe ganz einfach von ihrem iOS oder Android Smartphone zu steuern.
                                            <br>
                                            Erfahren sie mehr über <a href="Smartschuber.html">SmartSchuber™</a>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
        </div>
        <!-- Ende Modal Sven -->

        <!-- Beginn Modal Steve -->
        <div class="modal fade" id="modalsteve" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Beginn Produktbild -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <img src="Images/Produkte/Steve.jpg" alt="hutomo" width="100%">
                                </div>
                                <!-- Ende Produktbild-->
                            </div>
                        <div class="col-lg-7">
                            <h2 class="h2-responsive product-name">
                                <strong>Steve</strong>
                            </h2>
                            <h4 style="color: black;"class="h4-responsive">
                                <span class="green-text">
                                    <strong>599 CHF</strong>
                                </span>
                            </h4>

                                <!-- Accordion card -->
                                <div class="card">
    
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="heading19">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse19"
                                        aria-expanded="false" aria-controls="caollapseToo2">
                                        <h5 class="mb-0">
                                        SmartSchuber™️ <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                    </div>
    
                                    <!-- Card body -->
                                    <div id="collapse19" class="collapse" role="tabpanel" aria-labelledby="heading19"
                                    data-parent="#accordionEx">
                                        <div class="card-body">
                                            Diese Lampe ist ausgestattet mit unserer neuesten SmartSchuber™ Technologie.
                                            Diese ermöglicht es ihnen die Lampe ganz einfach von ihrem iOS oder Android Smartphone zu steuern.
                                            <br>
                                            Erfahren sie mehr über <a href="Smartschuber.html">SmartSchuber™</a>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- Accordion card -->
    
                            </div>
                            <!-- Ende Accordion wrapper -->
                        </div>
                        </div>
                    </div>
                    </div>
        </div>
        <!-- Ende Modal Steve -->

        <!-- Beginn Back to top Button -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
        <script>
        $(document).ready(function(){

            // Der Button wird mit JavaScript erzeugt und vor dem Ende des body eingebunden.
            var back_to_top_button = ['<a style="color: black" href="#top" class="back-to-top"><i class="fa fa-chevron-circle-up fa-3x"></i></a>'].join("");
            $("body").append(back_to_top_button)

            // Der Button wird ausgeblendet
            $(".back-to-top").hide();

            // Funktion für das Scroll-Verhalten
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) { // Wenn 100 Pixel gescrolled wurde
                        $('.back-to-top').fadeIn();
                    } else {
                        $('.back-to-top').fadeOut();
                    }
                });

                $('.back-to-top').click(function () { // Klick auf den Button
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });

        });
        </script>
        <!-- Ende Back to top Button -->
    </body>
</html>