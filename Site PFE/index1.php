<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Département informatique | UCD</title>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="assetes/css/style.css">
  <link rel="stylesheet" href="assetes/css/bootstrap.css">
 

   
</head>
<body>
      <header>
          <nav class="ed-navbar navbar navbar-expand-lg position-fixed navbar-dark w-100">
            <div class="container-fluid">
                <a class="navbar-brand mx-4 py-3" href="index1.php"><img src="assetes/img/logofsa.png" style="width:300px;height: 80px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                     <li class="nav-item pe-4">
                       <a class="nav_link nav-link active" aria-current="page" href="#">Accueil</a>
                     </li>
                     <li class="nav-item pe-4">
                       <a class="nav-link active" aria-current="page" href="#">Département</a>
                     </li>
                     <li class="nav-item pe-4">
                       <a class="nav-link active" href="#">Formations</a>
                     </li>
                     <li class="nav-item pe-4">
                       <a class="nav-link active" href="#">Etudiant</a>
                     </li>
                     <li class="nav-item pe-4">
                       <a class="nav-link active" href="#">Personel</a>
                     </li>
                     <?php 
                     if(!empty($_SESSION)){
                      $nom=$_SESSION['nom'];
                        echo "<li class='nav-item pe-4'>
                       <a class='btn-co' style='text-decoration: none; color: inherit;color:var(--bs-teal);font-size:25px;' href='login.php'>".$nom."</a>
                     </li>";
                     }else{
                      ?>
                     
                     <li class="nav-item pe-4">
                       <a class="btn btn-connect rounded-0" href="login.php">Se Connecter</a>
                     </li>
                  <?php } ?>
                
                    </ul>
              
            </div>
          </div>
        </nav>
      </header>
      <section class="bg-pic d-flex justify-content-center align-items-center pt-5">
        <div class="container my-5 py-5">
          
                <div class="row justify-content-md-center">
                  <div class="col col-lg-2"></div>
                  <div class="col-md-auto">
                    
                  </div>
                  <div class="col col-lg-2"></div>
                 </div>
                
            
         
          
        </div>
      </section>
      <section class="annonce py-5">

      

        <div class="container swiper">
          <div class="slide-content">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                   <div class="card-group">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title text-center">Licence Professionnel</h5>
                              <p class="card-text text-center pt-3">Concours d'accès en première année du cycle d'ingénieur à la FS El Jadida 2022-2023</p>
                            </div>
                            <div class="card-footer">
                              <small>01/07/2022</small>
                          </div>
                        </div>
                  </div>
            </div>
            <div class="swiper-slide">
                   <div class="card-group">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title text-center">Master</h5>
                              <p class="card-text text-center pt-3">Concours d'accès en Master en Business Intelligence et Big Data Analytics à la FS El Jadida 2022-2023</p>
                            </div>
                            <div class="card-footer">
                              <small>06/07/2022</small>
                          </div>
                        </div>
                  </div>
            </div>
            <div class="swiper-slide">
                   <div class="card-group">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title text-center">Résultat bourse</h5>
                              <p class="card-text text-center pt-3">Liste des étudiant ayant la bourse pour l'année universitaire 2022/2023</p>
                            </div>
                            <div class="card-footer">
                              <small>09/10/2022</small>
                          </div>
                        </div>
                  </div>
            </div>
            
            
               
          </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <h3>Bienvenue au département d'informatique</h3>
          <p class="text-center">Le département d'informatique est l'un des composantes de la faculté des sciences qui fait partie de L'université Chouaib doukkali, plus de 500 étudiants inscrit en licence ,100 en master, 5 formations dont 2 parcous de master informatique et presque 45 enseignants-chercheurs.  <p>

            
          </div>
          
        </div>
      </section>
      <section class="evenement py-3">
        <h3>Evènements</h3>
        <div class="container slider">
          
              <!--<div class="row">
                <div class="col-3">
                  <div class="card card-eve">
                    <img src="https://picsum.photos/200" class="card-img-top">
                    <div class="card-body">
                      <h5 class="text-center">Titre 1</h5>
                    </div>
                  </div>
                </div>
                
                
              </div>

          <div class="time-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                   <div class="card-group">
                          <div class="card card-eve">
                            <div class="card-body">
                              <img src="https://picsum.photos/200" class="card-img-top">
                              <h5 class="card-title text-center">Card title 1</h5>
                            </div>
                            
                          </div>
                    </div>
                </div>
            

            </div>
          
        </div>-->
            <div class="slide-track">
              <div class="card-group slide">
                          <div class="card card-eve bg-transparent border-0">
                            <div class="card-body">
                              <img src="assetes/img/koora.jpg" class="card-img-top">
                              <h5 class="card-title text-center">Organisation d'un tournoi intra faculté de mini-foot masculin</h5>
                            </div>
                            
                          </div>
                    </div>
                    <div class="card-group slide">
                          <div class="card card-eve bg-transparent border-0">
                            <div class="card-body">
                              <img src="assetes/img/book.jpg" class="card-img-top">
                              <h5 class="card-title text-center">تنظيم  نادي الإبداع والفنون يوم الكتاب تحت شعار 《الكتاب بوابة العلم 》</h5>
                            </div>
                            
                          </div>
                    </div>
                    <div class="card-group slide">
                          <div class="card card-eve bg-transparent border-0">
                            <div class="card-body">
                              <img src="assetes/img/romitef.jpg" class="card-img-top">
                              <h5 class="card-title text-center">ROMITEF</h5>
                            </div>
                            
                          </div>
                    </div>
                    <div class="card-group slide">
                          <div class="card card-eve bg-transparent border-0">
                            <div class="card-body">
                              <img src="assetes/img/cere.jpg" class="card-img-top">
                              <h5 class="card-title text-center">La cérémonie de clôture du premier cycle de coaching C4EE</h5>
                            </div>
                            
                          </div>
                    </div>
                     <div class="card-group slide">
                          <div class="card card-eve bg-transparent border-0">
                            <div class="card-body">
                              <img src="assetes/img/koora.jpg" class="card-img-top">
                              <h5 class="card-title text-center">Organisation d'un tournoi intra faculté de mini-foot masculin</h5>
                            </div>
                            
                          </div>
                    </div>
                    <div class="card-group slide">
                          <div class="card card-eve bg-transparent border-0">
                            <div class="card-body">
                              <img src="assetes/img/book.jpg" class="card-img-top">
                              <h5 class="card-title text-center">تنظيم  نادي الإبداع والفنون يوم الكتاب تحت شعار 《الكتاب بوابة العلم 》</h5>
                            </div>
                            
                          </div>
                    </div>
                    <div class="card-group slide">
                          <div class="card card-eve bg-transparent border-0">
                            <div class="card-body">
                              <img src="assetes/img/romitef.jpg" class="card-img-top">
                              <h5 class="card-title text-center">ROMITEF</h5>
                            </div>
                            
                          </div>
                    </div>
                    <div class="card-group slide">
                          <div class="card card-eve bg-transparent border-0">
                            <div class="card-body">
                              <img src="assetes/img/cere.jpg" class="card-img-top">
                              <h5 class="card-title text-center">La cérémonie de clôture du premier cycle de coaching C4EE</h5>
                            </div>
                            
                          </div>
                    </div>

            </div> 
       </div>  
      </section>
     <!-- <section class="contact py-5">
        <h2 class="text-center">Contacter-nous</h2>
        <div class="container contacte">
             <form class="needs-validation left-side" novalidate>
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="validationCustom01">Nom</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Votre nom" required>
                            <div class="valid-feedback">
                              OK
                            </div>
                             <div class="invalid-feedback">
                              Saisir un nom
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationCustom02">Prénom</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Votre prénom"required>
                            <div class="invalid-feedback">
                              Saisir un prénom
                            </div>
                            <div class="valid-feedback">
                              OK
                            </div>
                          </div>
                          <div class="col-md-6"></div>
                          
                            <div class="col-md-6 mb-3">
                                                  <label class="validationCustom03">Email</label>
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                              </div>
                              <input type="text" class="form-control" id="validationCustom03" placeholder="Username" required>
                              <div class="invalid-feedback">
                              Sasir votre email
                            </div>
                            </div>
                            
                          </div>
                        </div>
                          
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="validationCustom04">test</label>
                             <textarea class="form-control" aria-label="With textarea" placeholder="Text" required></textarea>
                            <div class="invalid-feedback">
                              Ecrire un message
                            </div>
                          
                          </div>
                        </div>
                        
                        <button class="btn btn-primary" type="submit">Envoyer</button>
                     </form>
                    
                      <div class="right-side">
                        <div class="phone-number">
                          <div class="phone">Télé</div>
                          <div class="phone1">0600000000</div>
                          </div>
                         <div class="Email">
                          <div class="email1">Email </div>
                          <div class="email2">DPinfo@hotmail.com</div>
                           
                         </div> 
                         <div class="location">
                          <div class="loc1">Localisation </div>
                          <div class="loc2">Route Ben Maachou, 24000, El Jadida,Maroc</div>
                           
                         </div>
                        
                      </div>
                        
                      
         
          
        </div>
        
      </section>-->
     
      <section class="contact-us py-5" id="contact">
            <div class="container">
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 align-self-center">
                  <div class="row">
                    <div class="col-lg-12">
                      <form id="contact" action="" method="post">
                        <div class="row">
                          <div class="col-lg-12">
                            <h2>Contactez nous</h2>
                          </div>
                          <div class="col-lg-4">
                            <fieldset>
                              <input name="name" type="text" placeholder="VOTRE NOM" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-4">
                            <fieldset>
                            <input name="email" type="text" pattern="[^ @]*@[^ @]*" placeholder="VOTRE EMAIL" required="">
                          </fieldset>
                          </div>
                          <div class="col-lg-4">
                            <fieldset>
                              <input name="subject" type="text" placeholder="SUJET" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" type="text" class="form-control" placeholder="VOTRE MESSAGE..." required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="button">ENVOYER VOTRE MESSAGE</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
      </section>
     <!-- Remove the container if you want to extend the Footer to full width. -->

  <!-- Footer -->
  <footer class="text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h2 class="text-uppercase mx-auto font-weight-bold">
              UCD
            </h2>
            <p class="text-uppercase font-weight-bold">
              Université Chouaiab Doukkali
              <br>
              Département d'informatique
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">lien utiles</h6>
            <p>
              <a href="http://www.ucd.ac.ma/" class="text-white">UCD</a>
            </p>
            <p>
              <a href="http://www.enssup.gov.ma/en" class="text-white">ENSSUP</a>
            </p>
            <p>
              <a href="https://www.men.gov.ma/Ar/Pages/Accueil.aspx" class="text-white">Ministère de l'Education Nationale</a>
            </p>
            <p>
              <a href="http://alwadifa-maroc.com/" class="text-white">Alwadifa</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contacter-nous</h6>
            <p><i class="fas fa-home mr-3"></i> Route Ben Maachou, 24000, El Jadida,Maroc</p>
            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> 0611558844</p>
            <p><i class="fas fa-print mr-3"></i> 0528272887</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold" id="contact-h6">Follow us</h6>
            <ul>
                <li><a href="#!"><i class="fab fa-facebook-square fa-2x"></i></a>           
                <a href="#!"><i class="fab fa-youtube-square fa-2x"></i></a></li>
              <li>  <a href="#!"><i class="fab fa-google-plus-square fa-2x"></i></a>
                <a href="#!"><i class="fab fa-twitter-square fa-2x"></i></a></li>
                <li><a href="#!"><i class="fab fa-instagram-square fa-2x"></i></a>
                <a href="#!"><i class="fab fa-linkedin fa-2x"></i></a></li>
             </ul>   
            
            
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

   
  </footer>
  <!-- Footer -->

<!-- End of .container -->
</body>






<script src="assetes/js/bootstrap.js"></script>
<!--Swiper JS -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="assetes/js/javascript.js"></script>
<!--Icones script-->
<script src="https://kit.fontawesome.com/dd37a9cc4c.js" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
  