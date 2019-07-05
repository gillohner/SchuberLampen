<!doctype html>
<html lang="de">
    <head>
        <!-- Titel der Website -->
        <title>Home | Schuber Lampen</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="scss/bootstrap.css">
        
        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
         <!-- Ende Header -->
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
                      <h1 class="title" >Schuber Lampen</h1>
                      <h3 class="subtitle" style="text-shadow: 2px 2px 5px black">Das Schweizweit beste Sortiment an modernen Designerlampen.</h3>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 60px">
            <!-- Beginn Text-/Bildblock-->
            <div class="row featurette" style="margin-bottom: 60px">
                <div class="col-md-7">
                  <h2 class="featurette-heading">Schuber Lampen <span class="text-muted">AG</span></h2>
                  <p class="lead">Die Schuber Lampen AG widmet sich als Teil der Schuber Holding seit 10 Jahren der Herstellung von modischen Lampen für das bewusste Wohnen.</p>
                  <p class="lead">Zusammen mit internationalen Spezialisten entwickeln wir zeitlose Designs verbunden mit höchstem Komfort. Für ein einmaliges Lichterlebnis!</p>
                  <p class="lead">In unserem Showroom in Rümlang finden Sie alle unsere Produkte der diesjährigen Serie ausgestellt. Kommen Sie vorbei und lassen Sie Sich inspirieren!</p>
                </div>
                <div class="col-md-5">
                  <img class="featurette-image img-fluid mx-auto" alt="Showroom" style="width: 100%; height: 100%;" src="Images/Else/showroom.jpg">
                </div>
            </div>
            <!-- Ende Text-/Bildblock-->
          </div>
        </main>
        <!-- Beginn Footer -->
        <?php include("Footer.php");?>
        <!-- Ende Footer -->
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