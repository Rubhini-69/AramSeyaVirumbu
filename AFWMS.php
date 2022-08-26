<?php include 'mail.php';?>
<?php

    $message_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != ''){
      
      if(filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)){

      }
      
      $username = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
  
      $to = "dhyaneshdaxor@gmail.com";
      $body = "";
  
      $body .= "From: ".$username. "\r\n";
      $body .= "Email: ".$email. "\r\n";
      $body .= "Message: ".$message. "\r\n";
  
      //mail($to , $subject , $body);

      $message_sent = true;
    }    



?>
<head>

     <title>Automated Helping Machine</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>
     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="AFWMS.html" class="navbar-brand">அறம் செய விரும்பு</a>
               </div>
               <!-- MENU LINKS --> 
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                        
                         <li><a href="#about" class="smoothScroll">ABOUT</a></li>    
                         <li><a href="#requestHelp" class="smoothScroll">REQUEST HELP</a></li> 
                         <li><a href="#contact" class="smoothScroll">CONTACT US</a></li>                
                         <!-- <li><a  id="request_button"  data-toggle="modal" data-target="#request_modal" class="smoothScroll">REQUEST</a></li> -->

                    </ul>

               </div>

          </div>
     </section>




     <!-- HOME -->
     
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>HELP AND BE A HERO</h3>
                                             <h1>Our mission is to create a poverty free nation.</h1>                                             
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>FOOD FOR THE HOMELESS</h3>
                                             <h1>Don't let them sleep on an empty stomach.</h1>
                                             
                                        </div>
                                   </div>
                              </div>
                         </div>


                    </div>

          </div>
     </section>


     <!-- ABOUT -->
     
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>Read our story</h4>
                                   <h2>WE RISE BY GIVING OTHERS</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p> Hunger is
the most important problem still prevailing in the society as there are no schemes which
support homeless people. </p>

  <p>We are a non-profit organisation intending to help become this world a better place. Lets help people not to go bed with empty stomachs. 
     There is so much we can do make our society better. 
     Let's be effective and efficient to make out the most.
 We are united to build a poverty free nation by providing food, accomodation and fulfilling their needs through our system connected with Orphanages, Old age homes, Rotaract Clubs and Hotels in the respective regions.
And yeah, <b>giving opens the way for receiving! </b></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/AramSeiyaVirumbhu.jpg" class="img-responsive" alt="about">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


>

<!-- Request help -->

<section id="requestHelp" data-stellar-background-ratio="0.5">
<form onsubmit="return guestvalidateForm()" action="includes/signup.inc.php" name="guestform"  method="POST" class="wow fadeIn animated" id="contact-form" role="form">
<div class="wow fadeInUp" data-wow-delay="0.2s">
        <h2>REQUEST HELP</h2>
        <div class="wow fadeInUp" data-wow-delay="0.4s">
          <div class="inpform">
              <label for="request-location">Your Details</label><br>
                <input type="text" class="form-control" id="re-name" name="rename" placeholder="Full name" required/>
           </div>
           <div class="inpform">
                <input type="number" min="1000000000" max="9999999999" class="form-control" id="re-contact" name="recontact" placeholder="Contact number" required/>
           </div>
           <label for="request-location">Needy People's Details</label><br>
          <div class="inpform">
                <input type="number" min="1" class="form-control" id="re-age" name="reage" placeholder="Age" required/>
           </div>
          <div class="inpform">
               <label for="Category">Category</label><br>
               <select id="Category" name="recategory">
                    <option value="Children" name=Children>Children</option>
                    <option value="Old-age People"name=Old-age People>Old-age People</option>
                    <option value="Middle age" name=Middle age>Middle age</option>
                    <option value="Physically challenged" name=Physically challenged>Physically challenged</option>
                </select>
          <div class="inpform">
               <br>
                <input type="number" min="1" class="form-control" id="re-num" name="renum" placeholder="Number of Persons" required/>
           </div>
           <div class="inpform">
               <label for="Need">Need</label><br>
               <select id="Need" name="reneed">
                    <option value="Orphanage" name=Orphanage>Orphanage</option>
                    <option value="Old-age Home"name=Old-age Home>Old-age Home</option>
                    <option value="Rotaract Organization" name=Rotaract Organization>Rotaract Organization</option>
                    <option value="Food from Hotel" name=Food from Hotel>Food from Hotel</option>
                    <option value="Renovation" name=Renovation>Renovation</option>
                </select>
           <div class="inpform">
           <br>   
           <input type="address" class="form-control" id="re-address" name="readdress" placeholder="Address" required/>
           </div>
           <div class="inpform">
               <label for="request-location">Request Location</label><br>
               <select id="request-location" name="relocation">
                    <option value="Gandhipuram" name=Gandhipuram>Gandhipuram</option>
                    <option value="Thudiyalur"name=Thudiyalur>Thudiyalur</option>
                    <option value="Neelambur" name=Neelambur>Neelambur</option>
                    <option value="Ukadam" name=Ukadam>Ukadam</option>
                </select>
           </div>
           <br>
           <!-- <div>
               <p class="success"> <?php echo $success; ?></p>
               <p class="failed"> <?php echo $failed; ?></p>
          </div> -->
           <div class="modal-footer">
               <button name="resubmit"  id="subbtn" type="submit">SUBMIT</button>
           </div>
</div>
      </form>
          
          

</section>
     <!-- FOOTER -->
      <!-- CONTACT -->
    
      <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.477282844067!2d76.98747851488773!3d11.07776209211748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f81b7514a15f%3A0x155e29f8d14154fc!2sKumaraguru%20College%20of%20Technology!5e0!3m2!1sen!2sin!4v1654794403327!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>
                    </div>    


                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Find us</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Kumaraguru College of Technology<br> Coimbatore - 641 006</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Contact Us</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>+91 9489874074</p>
                                   <p><a href="mailto:contact@afwms.com">invictusihf026@gmail.com</a></p>
                              </address>
                         </div>
                    </div>


                    <div class="col-md-4 col-sm-4">
                         <!-- <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-google"></a></li>
                         </ul> -->

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.4s"> 
                              <p><br>Copyright &copy; 2022 <br>Automated Helping Machine
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
   <!--   <script src="js/smoothscroll.js"></script> -->
     <script src="js/custom.js"></script>

</body>
</html>