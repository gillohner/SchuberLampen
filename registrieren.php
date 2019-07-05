<?php 
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=Users', 'root', '');
?>
<!DOCTYPE html> 
<html> 
<head>
    <!-- Titel der Website -->
    <title>Registrieren | Schuber Lampen</title>
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
    <!-- Beginn Main -->
    <!-- Beginn Slideshow -->
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
                <h1 class="title" >Registrierung</h1>
                <h3 class="subtitle" style="text-shadow: 2px 2px 5px black">Werden Sie teil des besten Lampenhändler der Schweiz.</h3>
            </div>
        </div>
    </div>
    <!-- Ende Slideshow -->
    <?php
        $showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
        
        if(isset($_GET['register'])) {
            $error = false;
            $vorname = $_POST['vorname'];
            $nachname = $_POST['nachname'];
            $email = $_POST['email'];
            $passwort = $_POST['passwort'];
            $passwort2 = $_POST['passwort2'];
            $strasse = $_POST['strasse'];
            $hausnummer = $_POST['hausnummer'];
            $ortschaft = $_POST['ortschaft'];
            $plz = $_POST['plz'];
            $geschlecht = $_POST['geschlecht'];
            $geburtstag = $_POST['geburtstag'];

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
                $error = true;
            }     
            if(strlen($passwort) == 0) {
                echo 'Bitte ein Passwort angeben<br>';
                $error = true;
            }
            if($passwort != $passwort2) {
                echo 'Die Passwörter müssen übereinstimmen<br>';
                $error = true;
            }
            
            //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
            if(!$error) { 
                $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
                $result = $statement->execute(array('email' => $email));
                $user = $statement->fetch();
                
                if($user !== false) {
                    echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
                    $error = true;
                }    
            }
            
            //Keine Fehler, wir können den Nutzer registrieren
            if(!$error) 
                {    
                    $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
                    
                    $statement = $pdo->prepare("INSERT INTO users (vorname, nachname, email, passwort, strasse, hausnummer, plz, ortschaft, geburtstag, geschlecht) VALUES (:vorname, :nachname, :email, :passwort, :strasse, :hausnummer, :plz, :ortschaft, :geburtstag, :geschlecht)");
                    $result = $statement->execute(array('vorname' => $vorname, 'nachname' => $nachname, 'email' => $email, 'passwort' => $passwort_hash, 'strasse' => $strasse, 'hausnummer' => $hausnummer, 'plz' => $plz, 'ortschaft' => $ortschaft, 'geburtstag' => $geburtstag, 'geschlecht' => $geschlecht));
                    
                    if($result) 
                    {  

                        $pdocart = new PDO('mysql:host=localhost;dbname=Cart', 'root', ''); 
                        $pdocart->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $createtable = "CREATE TABLE `CART: ".$email."` (
                            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                            Produktname VARCHAR(35),
                            Preis VARCHAR(5),
                            Anzahl int(35),
                            Total VARCHAR(5)
                        )";

                        $pdocart->exec($createtable);

                        echo "<script> 
                                alert('Sie wurden erfolgreich registriert');
                                window.open('login.php'); 
                        </script>"; 
                    } 
                    else 
                    {
                        echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
                    }
                } 
        }
        
        if($showFormular) {
    ?>
            <br>
            <center><div class="row featurette col-lg-7" style="margin-bottom: 30px">
                <div class="col-md-12 mb-md-0 mb-5">
                    <form action="?register=1" method="post" name="Register-form">

                        <!-- Beginn Row -->
                        <div class="row">

                            <!-- Beginn Column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="vorname">Vorname:</label>
                                    <input type="text" size="40" maxlength="50" name="vorname" class="form-control">
                                </div>
                            </div>
                            <!-- Ende Column -->

                            <!-- Beginn Column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="nachname">Nachname:</label>
                                    <input type="text" size="40" maxlength="50" name="nachname" class="form-control">
                                </div>
                            </div>
                            <!-- Ende Column -->

                        </div>
                        <!-- Ende Row --><br>

                        <!-- Beginn Row -->
                        <div class="row">

                            <!-- Beginn Column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email">E-Mail:</label>
                                    <input type="email" size="40" maxlength="50" name="email" class="form-control">
                                </div>
                            </div>
                            <!-- Ende Column -->

                            <!-- Beginn Column -->
                            <div class="col-md-5">
                                <div class="md-form mb-0">
                                    <label for="strasse">Strasse:</label>
                                    <input type="text" size="30" maxlength="20" name="strasse" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="md-form mb-0">
                                    <label for="hausnummer">Nr:</label>
                                    <input type="hausnummer" size="5" maxlength="10" name="hausnummer" class="form-control">
                                </div>
                            </div>
                            <!-- Ende Column -->

                        </div>
                        <!-- Ende Row --><br>
                        
                        <!-- Beginn Row -->
                        <div class="row">

                            <!-- Beginn Column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="ortschaft">Ortschaft:</label>
                                    <input type="text" size="40" maxlength="20" name="ortschaft" class="form-control">
                                </div>
                            </div>
                            <!-- Ende Column -->

                            <!-- Beginn Column -->
                            <div class="col-md-2">
                                <div class="md-form mb-0">
                                    <label for="plz">PLZ:</label>
                                    <input type="text" size="40" maxlength="10" name="plz" class="form-control">
                                </div>
                            </div>
                            <!-- Ende Column -->

                        </div>
                        <!-- Ende Row --><br>

                        <!-- Beginn Row -->
                        <div class="row">

                            <!-- Beginn Column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="passwort">Passwort:</label>
                                    <input type="password" size="40" maxlength="50" name="passwort" class="form-control">
                                </div>
                            </div>
                            <!-- Ende Column -->

                            <!-- Beginn Column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="passwort2">Passwort wiederholen:</label>
                                    <input type="password" size="40" maxlength="50" name="passwort2" class="form-control">
                                </div>
                            </div>
                            <!-- Ende Column -->

                        </div>
                        <!-- Ende Row --><br>

                        <!-- Beginn Row -->
                        <div class="row">

                            <!-- Beginn Column -->
                            <div class="col-md-3">
                                <div class="md-form mb-0">
                                    <label for="geburtstag">Geburtstag:</label>
                                    <input type="date" name="geburtstag" class="form-control">
                                </div>
                            </div>
                            <!-- Ende Column -->

                            <!-- Beginn Column -->
                            <div class="col-md-3">
                                <br><br>
                                <div class="md-form mb-0">
                                    <label for="männlich">Männlich:</label>
                                    <input type="radio" name="geschlecht" class="form-label" id="männlich" value="männlich">
                                </div>
                            </div>
                            <!-- Ende Column -->

                            <!-- Beginn Column -->
                            <div class="col-md-3">
                                <br><br>
                                <div class="md-form mb-0">
                                    <label for="weiblich">Weiblich:</label>
                                    <input type="radio" name="geschlecht" class="form-label" id="weiblich" value="weiblich">
                                </div>
                            </div>
                            <!-- Ende Column -->

                            <!-- Beginn Column -->
                            <div class="col-md-3">
                                <br><br>
                                <div class="md-form mb-0">
                                    <label for="sonstiges">Sonstiges:</label>
                                    <input type="radio" name="geschlecht" class="form-label" id="sonstiges" value="sonstiges">
                                </div>
                            </div>
                            <!-- Ende Column -->

                        </div>
                        <!-- Ende Row --><br>

                        <div class="text-center text-md-left">
                            <input type="submit" class="btn btn-secondary" style="color: white" value="Registrieren">
                        </div>
                    </form>
                </div>
            </div></center>
        <?php
        } //Ende von if($showFormular)
        ?>
    <!-- Ende Main -->
    <!-- Beginn Footer -->
    <?php include("Footer.php");?>
    <!-- Ende Footer -->
 
</body>
</html>