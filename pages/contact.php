<!doctype html>
<html lang="ro">
    <head>
        <!-- Title -->
        <title>Contact | Radicalhair.ro</title>
        <link rel="icon" href="../src/img/icons/faviconRH.ico" type="image/icon">
        <!-- SEO tags -->
        <meta name="description" content="Afla datele de contact pentru radicalhair.ro si vezi cum poti lua legatura cu noi. Vezi care sunt datele de contact pentru radicalhair.ro si cum poti intra in legatura cu echipa.">
        <meta property="fb:app_id" content="194832381205668">
        <meta property="article:publisher" content="https://www.facebook.com/otiungur/">
        <meta property="article:author" content="Otilia Ungur">
        <meta property="og:locale" content="ro_RO">
        <meta property="og:site_name" content="RadicalHair">
        <meta property="og:title" content="Contact | radicalhair.ro">
        <meta property="og:description" content="Afla datele de contact pentru radicalhair.ro si vezi cum poti lua legatura cu noi. Vezi care sunt datele de contact pentru radicalhair.ro si cum poti intra in legatura cu echipa.">
        <meta name="cXenseParse:pageclass" content="frontpage">
        <meta name="cXenseParse:url" content="https://www.radicalhair.ro/contact.php">

        <!-- Required meta tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Reset -->
        <link rel="stylesheet" href="../src/css/reset.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300" rel="stylesheet" type="text/css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Animate CSS -->
        <link rel="stylesheet" href="../src/css/animate.css">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="../src/css/style.css">

    <body>     
        
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ro_RO/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your customer chat code -->
        <div class="fb-customerchat"
        attribution=setup_tool
        page_id="925455287626494"
        logged_in_greeting="Buna ziua! Cum va putem ajuta?"
        logged_out_greeting="Va multumim pentru vizita!">
        </div>
        
        <!-- Header section --> 
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand" href="../index.html"><span class="radical">RADICAL</span><span class="hair">HAIR</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav float-right">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Acasa</a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Servicii</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./booking.html">Rezervari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./termeni.html">T &amp; C</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link active" href="./contact.php">Contact</a>
                    </li>  
                </ul>
            </div>
        </nav>

        <section id="contact">
            <div class="container">
                <div class="row js--wp-1">  
                    <div class="contact-split">
                        <div class="contact-wrap js--nav-scroll">
                            <h1 class="animatedslow infinite pulse">Detalii contact</h1>
                            <h2>RADICAL HAIR SRL</h2>
                            <p>Adresa: Str. Ion ionescu de la brad<br>Timisoara, Judetul Timis</p>
                            <br>
                            <p>TELEFON:  +40 (744) 156 384</p>
                            <p>office@radicalhair.ro</p>
                            <br>
                            <p><a href="https://www.facebook.com/otiungur/">viziteaza-ne pagina de facebook aici</a><p>
                            <br>
                            <h2>Pogram:</h2>
                            <p>L-V: 09:00 - 18:00</p>
                            <p>Sambata: 09:00 - 12:00</p>
                            <p>Duminica: <span class="red">Inchis</span></p>
                        </div>
                    </div>
                    <div class="contact-split">
                        <div class="contact-wrap" id="form">

                            <h1>Formular Contact</h1>
                            
                            <form method="post" action="mailer.php" class="contact-form">
                                <!-- Form validation -->
                                <div class="form-row">
                                    <?php
                                        if($_GET['success'] == 1) {
                                            echo "<div class=\"alert alert-success\" role=\"alert\">Mesajul a fost trimis cu succes!</div>";
                                        }

                                        if($_GET['success'] == -1) {
                                            echo "<div class=\"alert alert-danger\" role=\"alert\">Te rugam sa completezi toate campurile marcate cu <span class=\"red\">* </span></div>";
                                        }
                                    ?>
                                </div>

                                <!-- Form layout -->
                                <div class="form-row">
                                    <label for="name"><span class="red">* </span> Nume si Prenume</label>
                                    <input type="text" name="name" id="name" placeholder="Numele si Prenumele" required>
                                </div>
                                <div class="form-row">
                                    <label for="email"><span class="red">* </span> Adresa de email</label>
                                    <input type="email" name="email" id="email" placeholder="Adresa de Email" required>
                                </div>
                                <div class="form-row">
                                    <label><span class="red">* </span> Mesajul tau</label>
                                    <textarea name="message" id="message"></textarea>
                                </div>
                                <div class="form-row">
                                    <label>&nbsp;</label>
                                    <button type="submit" class="btn btn-custom">Trimite</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
 
        <!-- Footer Section -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 map">
                        <iframe id="map" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJcznwW7tnRUcRYM_PcCeWolI&key=AIzaSyC_HHMaB8iF1LSnMUPs3ogB1ZT_Vrapdyw" allowfullscreen></iframe>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div>
                            <h2 class="animatedslow infinite pulse">Contact:</h2>
                            <p>TELEFON:  +40 (744) 156 384</p>
                            <P>ADRESA: Strada Dr. Grigore T. Popa Nr 15, Timisoara</P>
                            <p>Salon Radical Hair</p>
                        </div>
                        <div>
                            <h2>Orar</h2>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td>Luni - Vineri</td>
                                        <td>09:00 - 18:00</td>
                                    </tr>
                                    <tr>
                                        <td>Sambata</td>
                                        <td>09:00 - 12:00</td>
                                    </tr>
                                    <tr>
                                        <td>Duminica</td>
                                        <td><span class="red">Inchis</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>&copy; Copyright 2018 SC RADICALHAIR SRL</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll Up Buton -->
        <a href="#" class="scrollup"></a>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Jquery plugins -->
          <!-- waypoint for scrolling effects -->
          <script type="text/javascript" src="../src/javascript/jquery.waypoints.min.js"></script>
        <!-- JavaScript -->
        <script type="text/javascript" src="../src/javascript/index.js"></script>
        
        <!-- Google analytics -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122325580-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-122325580-1');
        </script>

    </body>
</html>