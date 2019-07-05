<!doctype html>
<html lang="de">
    <head>
        <!-- Titel der Website -->
        <title>Kontakt | Schuber Lampen</title>
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
            <!--Section: Contact v.2-->
            <div class="" style="margin-bottom: 60px">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Kontaktieren sie uns</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Haben Sie fragen über eine unserer Lampen? Möchten Sie eine Bestellung tätigen? Nutzen sie doch unser Kontaktformular.</p>
            
                <center><div class="row featurette col-lg-8 ">
            
                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
            
                            <!--Grid row-->
                            <div class="row">
            
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Ihr Name:</label>
                                    </div>
                                </div>
                                <!--Grid column-->
            
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Ihre eMail:</label>
                                    </div>
                                </div>
                                <!--Grid column-->
            
                            </div>
                            <!--Grid row-->
            
                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="subject" class="form-control">
                                        <label for="subject" class="">Betreff:</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
            
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
            
                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                        <label for="message">Nachricht:</label>
                                    </div>
            
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
            
                                <!--Grid column-->
                                <div class="col-md-1">
                                    <div class="md-form mb-0">
                                        <input type="submit" class="btn btn-secondary" style="color: white" value="Senden">
                                    </div>
                                </div>
                                <!--Grid column-->
            
                                <!--Grid column-->
                                <div class="col-md-3">
                                    <div class="md-form mb-0">
                                        <input type="Reset" class="btn btn-secondary" style="color: white" value="Zurücksetzen">
                                    </div>
                                </div>
                                <!--Grid column-->
            
                            </div>
                            <!--Grid row-->
                        </form>
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->
            
                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>Kehlweg 19, Rümlang<p></p>
                            </li>
            
                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>041 555 25 05</p>
                            </li>
            
                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>info@schuber.ch</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
            
                </div>
                </center>
            </div>
            <!--Section: Contact v.2-->

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