<?php
include ('cnx.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Spaghettito</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="shortcut icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,900;0,600;0,700;1,400;1,900;1,600;1,700|Poppins:300,300i,400,400i,900,900i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <audio controls autoplay hidden>
    <source src="assets/music/TarantellaNapoletana.mp3" type="audio/mp3">
  </audio>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+33 29489794892 </span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Lun-Sam: 11-14h 19-23h</span></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Spaghettito</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Revenir en haut</a></li>
          <li><a class="nav-link scrollto" href="#about">Notre établissement</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#book-a-table">Réserver</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Réserver une Tabolito</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bienvenue dans le monde des <span>Spaghettito</span></h1>
          <h2>Spaghettito olala muy bien la pata</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Le Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Réserver une Tabolito</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in"
          data-aos-delay="200">
          <a href="https://video.twimg.com/ext_tw_video/1558492910022279169/pu/vid/720x1280/Az7z5MmGUD1-8pZa.mp4?tag=12"
            class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Notre restaurant</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i>Bienvenue sur le site du célèbre restaurant Spaghettito. Ici vous
                pourrez réserver toutes sortes de Spaghettito servi à votre Tabolito. Si vous aussi vous voulez passez un
                agréable moment dans notre restaurant n'hésitez pas l'ombre d'une seconde.

                Vous serez accueilli dans une ambiance chaleureuse, l’hiver en salle et l’été en terrasse.

                Nous faisons aussi de la livraison à domicile retrouvez nous sur Delivrelaba , UberDrink, Nourridora,
                Allo Pesto. </li>
            </ul>

            <ul>
              <li><i class="bi bi-check-circle"></i>Benvenuti nel sito del famoso ristorante Spaghettito. Qui potrete
                gustare tutti libretto i tipi di Spaghettito serviti al vostro Tabolito. Se anche voi volete trascorrere un
                momento piacevole nel nostro ristorante, non esitate un secondo.

                Sarete accolti in una calda atmosfera in inverno nella sala da pranzo e in estate sulla terrazza.

                Facciamo anche consegne a domicilio, ci trovate su Delivrelaba, UberDrink, Nourridora, Allo Pesto. </li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Olalala el menutïtô</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-starters">Entrées</li>
              <li data-filter=".filter-salads">Salades et Plats</li>
              <li data-filter=".filter-specialty">Extras de la Tabolito</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Spaghettito de la matino </a><span>9.99€</span>
            </div>
            <div class="menu-ingredients">
              Tomatatetito, Patos, Chocolatéto, Ketchuphé, Oeufito, Avoinito
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/crepes.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Crepo de la apres mido a la Tabolito </a><span>7.99€</span>
            </div>
            <div class="menu-ingredients">
              Tomatatetito, Patos, Chocolatéto
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Pata cuita</a><span>2.99€</span>
            </div>
            <div class="menu-ingredients">
              Tranche de Pain
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Spaghettito de la Tabolito </a><span>14.99€</span>
            </div>
            <div class="menu-ingredients">
              Tomatito, Patos, Ketchuphé, Oeufito
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Caesarito</a><span>8.99€</span>
            </div>
            <div class="menu-ingredients">
              El Parmesanito Grande Fromagito Granado, Caprio, Moutardétito, Tabasco, Citrone, Ailito, Huilé, Poivrio,
              Ragito, Oeufito
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Pouelto a la Provancial</a><span>19.99€</span>
            </div>
            <div class="menu-ingredients">
              Pouleto grillé avec el herbi de provancial, Patatétitos grilletos
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Mozzarella sur un bâton</a><span>4.99€</span>
            </div>
            <div class="menu-ingredients">
              Mozzatouriti, Bâton (bois)
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Saladi Grecos</a><span>11.99€</span>
            </div>
            <div class="menu-ingredients">
              Epinardé, Romarin crous-tillanté, Tomatito, Olivieto Grecos
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Spaghettito Origanélito</a><span>19.99€</span>
            </div>
            <div class="menu-ingredients">
              Épinardé frais avec champignonété, œufito dur et vinaigrettetito chaudé au baconito.
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a>Homarito Jeanno</a><span>112.99€</span>
            </div>
            <div class="menu-ingredients">
              Homarito au bain Marie-Jeanno
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Réserver une Tabolito</p>
        </div>

        <div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-12 col-md-6 mx-auto" >

					<form id="contact-form" role="form" action="book-a-table.php" method="post">
				
          <p></p>

						<div class="form-group">
							<input type="text" placeholder="Votre nom" class="form-control" name="nom" id="nom" pattern="[a-zA-Z]+" required>
						</div>

            <p></p>

						
						<div class="form-group">
							<input type="text" placeholder="Votre prénom" class="form-control" name="prenom" id="prenom" pattern="[a-zA-Z]+" required>
						</div>

            <p></p>

									
						<div class="form-group">
							<input type="email" placeholder="Email" class="form-control" name="email" id="email" required>
						</div>

            <p></p>

                        
            <div class="form-group">
            <input type="text" placeholder="Nombre de personne(s)" class="form-control" name="pers" id="pers" required>
          </div>

          <p></p>

						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="msg" id="msg"></textarea>	
						</div>

            <p></p>
                        
             <div class="form-group">
                <input type="date" class="form-control" name="date" id="date" requireds>
            </div>

						<div id="cf-submit">
              
            <p></p>

						<input class="form-control form-control-lg" type="submit" id="contact-submit" value="Soumettre">
						</div>	
                        



						
					</form>
				</div>
				<!-- ./End Contact Form -->
			</div> <!-- end row -->
			
		</div> <!-- end container -->
    </section> <!-- end section -->


      </div>
    </section><!-- End Book A Table Section -->


  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
