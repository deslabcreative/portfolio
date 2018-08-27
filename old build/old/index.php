<!Doctype html>
<meta charset="utf-8" />
<html>
  <!-- Site Designed & Developed by Deslab Creative, www.deslab.co.nz  -  This website is property of Kokich Electrical Whangarei -->
  <head>
    <title>Kokich Electrical</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta descripton="Kokich Electrical, Electricians located in Whangarei who can take care of all your Electrical needs for both Commercial and Home projects." />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="normalize.css" />
  </head>
  <body>
    <header>
      <div class="logo black"></div>
      <div class="hamburger">Menu</div>
      <nav class="nav">
          <a href="index.php" class="menu active" title="Home Page, Learn more about Kokich Electrical">Home</a>
          <a href="services.php" class="menu" title="Learn more about our services">Services</a>
          <a href="team.php" class="menu" title="Home Page, Learn more about Kokich Electrical">Team</a>
          <a href="contact.php" class="menu" title="Home Page, Learn more about Kokich Electrical">Contact</a>
          <a href="testimonials.php" class="menu" title="Home Page, Learn more about Kokich Electrical">Testimonials</a>

      </nav>
    </header>
    <!-- Pre Loading Images to the Cache so when users scroll the images dont take long to load -->
    <div class="post-loader" style="background-image: url('images/team-two.jpg');"></div> <!-- Loading The Prev Image -->
    <div class="pre-loader" style="background-image: url('images/team-one.jpg');"></div> <!-- Loading The Next Image -->
    <!-- Where all the content that is changed with Jquery is placed -->
    <section class="view">
      <section class="side left light">
        <h1 class="title">Kokich Electrical</h1>
        <h2 class="sub-title">Home & Commercial Electrians located in Whangarei</h2>
        <div class="hr"></div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Wario cream bun disaster mustachio um yesbaby um yesbaby helllloooo, helllloooo French café patron mustachio wario goose um
          yesbaby um yesbaby musketeer che guevara cream bun disaster, um yesbaby cesar romero mustachio cappuccino catcher che guevara
        </p>
      </section>
      <section class="right dark" style="background-image: url('images/team-two.jpg'); background-repeat: no-repeat; background-size: cover; background-position: 50%, 50%;">
      </section>
    </section>
  </body>
  <!--  Below is all the Jquery & Javascript, to ensure great load times and a great and memorable user experience -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript">


  $(document).ready(function() {



  	height = $( window ).height();
  	width = $( window ).width();
    welcomeHeight = height - '5vw';
    // Mobile
  	if ($( window ).width() < $( window ).height()){

      $(window).scroll(function() {

        if ($(document).scrollTop() <= height / 5 ) {
          $(".left").css({'width':'85%'});
        	$(".right").css({'background-image':'url("images/team-two.jpg")'});
          $(".pre-loader").css({'background-image':'url("images/team-one.jpg")'});
          $(".post-loader").css({'background-image':'url("images/ceiling.jpg")'});
      	  $(".left p").text("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Wario cream bun disaster mustachio um yesbaby um yesbaby helllloooo, helllloooo French café patron mustachio wario goose um yesbaby um yesbaby musketeer che guevara cream bun disaster, um yesbaby cesar romero mustachio cappuccino catcher che guevara");
        }
        else if ($(document).scrollTop() > height / 5 && $(document).scrollTop() < height * 1.2 ) {
          $("h1").text("Kokich Electrical");
          $("h2").text("Home & Commercial Electrians located in Whangarei");
          $(".left").css({'width':'85%'});
        	$(".right").css({'background-image':'url("images/team-one.jpg")'});
          $(".pre-loader").css({'background-image':'url("images/ceiling.jpg")'});
          $(".post-loader").css({'background-image':'url("images/team-two.jpg")'});
      	  $(".left p").text("Elaborated Text");
        }

        else if ($(document).scrollTop() >= height * 1.2 && $(document).scrollTop() < height * 2.4 ) {
          $("h1").text("Services");
          $("h2").text("No job too big or too small");
          $(".left").css({'width':'85%'});
        	$(".right").css({'width':'85%', 'background-image':'url("images/ceiling.jpg")'});
          $(".pre-loader").css({'background-image':'url("images/deslab-white.png")'});
          $(".post-loader").css({'background-image':'url("images/team-one.jpg")'});
          $(".left p").html('');
          $(".right").html('');
      	  $(".left p").text("We offer a large  range of products and services ranging from general electrical (such as new housing and house rewires) services to commercial washing and drying equipment, commercial kitchen dishwashers and ovens. Retro fitting high bay lights to save on your power bill.  Fitting the latest in led down lights to modernise your home and living areas. Laundry servicing and maintenance. Installation and repairs to commercial laundry equipment. Electrical maintenance and repairs such as hot water, electrical emergency’s and new switch boards etc");
        }


        else if ($(document).scrollTop() >= height * 2.4 && $(document).scrollTop() < height * 3.6 ) {
          $("h1").text("Testimonials");
          $("h2").text("See what our clients are saying:");
          $(".left").css({'width':'85%'});
        	$(".right").css({'width':'85%', 'background':'#000', 'height':'10vh', 'backgroundPosition':'center', 'backgroundRepeat':'no-repeat', 'backgroundSize':'cover'});
      	  $(".left p").html('<a class="sub-title t-one active">Bob Doe</a><br><a class="sub-title t-two">Felipe Rodriquez</a><br><a class="sub-title t-three">Helen Williams</a><a class="copyright" title="Leave us a review on facebook" href="https://www.facebook.com/kokichelectricalwhangarei/">Leave us a review on facebook</a>');
          $(".right").html('<div class="testimonials-right dark"><p>Robbie and the team did a great job with blah blah blah. Would highly recommend Kokich Electrical to anyone.</p></div>');
          $(".t-one").click(function() {
            $(".active").removeClass("active");
            $(".t-one").addClass("active");
            $(".testimonials-right").html('<p>Robbie and the team did a great job with blah blah blah. Would highly recommend Kokich Electrical to anyone.</p>');
          });
          $(".t-two").click(function() {
            $(".active").removeClass("active");
            $(".t-two").addClass("active");
            $(".testimonials-right").html('<p>The second body of text which tells information</p>');
          });
          $(".t-three").click(function() {
            $(".active").removeClass("active");
            $(".t-three").addClass("active");
            $(".testimonials-right").html('<p>The third. Absolutely great to work with etc etc etc.</p>');
          });
        }
        else if ($(document).scrollTop() >= height * 3.6 && $(document).scrollTop() < height * 5.0 ) {
          $(".left").css({'width':'0%'});
        	$(".right").css({'width':'85%','paddingLeft':'7.5%', 'background':'#000', 'height':'80vh'});
      	  $(".right").html('<footer><div class="footer-left-column"><a class="footerLink">About</a><br><a class="footerLink">Services</a><br><a class="footerLink">Contact</a></div><div class="footer-right-column"><h2>Get in touch:</h2><br><form action="#" method="post"><input type="text" name="name" alt="Your Name, So we can make our first contact with you more personal" placeholder="Your Name"></input><input type="email" name="email" alt="Email Address, So we can make contact with you to answer your query." placeholder="Email Address"></input><textarea name="enquiry" placeholder="Enquiry"></textarea><input type="submit" name="submit" value="Send"></input></form></div><span class="copyright">© Kokich Electrical 2018</span><a href="http://www.deslab.co.nz" title="This website was proudly made by Deslab Creative - Award Winning Web & Graphic Design in Whangarei, New Zealand"><img src="images/deslab-white.png" class="deslab"></img></a></footer>');
        }
      });
    }else{

      // DESKTOP

     	height = $( window ).height();
     	width = $( window ).width();
     	welcomeHeight = height - '5vw';


      $(window).scroll(function() {

      	if ($(document).scrollTop() <= height / 5 ) {
          $(".left").css({'width':'42.5%'});
        	$(".right").css({'width':'42.5%', 'background-image':'url("images/team-two.jpg")'});
          $(".pre-loader").css({'background-image':'url("images/team-one.jpg")'});
          $(".post-loader").css({'background-image':'url("images/ceiling.jpg")'});
      	  $(".left p").text("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Wario cream bun disaster mustachio um yesbaby um yesbaby helllloooo, helllloooo French café patron mustachio wario goose um yesbaby um yesbaby musketeer che guevara cream bun disaster, um yesbaby cesar romero mustachio cappuccino catcher che guevara");
        }
        else if ($(document).scrollTop() > height / 5 && $(document).scrollTop() < height * 1.2 ) {
          $("h1").text("Kokich Electrical");
          $("h2").text("Home & Commercial Electrians located in Whangarei");
          $(".left").css({'width':'67.5%'});
        	$(".right").css({'width':'17.5%', 'background-image':'url("images/team-one.jpg")'});
          $(".pre-loader").css({'background-image':'url("images/ceiling.jpg")'});
          $(".post-loader").css({'background-image':'url("images/team-two.jpg")'});
      	  $(".left p").text("Elaborated Text");
        }

        else if ($(document).scrollTop() >= height * 1.2 && $(document).scrollTop() < height * 2.4 ) {
          $("h1").text("Services");
          $("h2").text("No job too big or too small");
          $(".left").css({'width':'42.5%'});
        	$(".right").css({'width':'42.5%', 'background-image':'url("images/ceiling.jpg")'});
          $(".pre-loader").css({'background-image':'url("images/deslab-white.png")'});
          $(".post-loader").css({'background-image':'url("images/team-one.jpg")'});
          $(".left p").html('');
          $(".right").html('');
      	  $(".left p").text("We offer a large  range of products and services ranging from general electrical (such as new housing and house rewires) services to commercial washing and drying equipment, commercial kitchen dishwashers and ovens. Retro fitting high bay lights to save on your power bill.  Fitting the latest in led down lights to modernise your home and living areas. Laundry servicing and maintenance. Installation and repairs to commercial laundry equipment. Electrical maintenance and repairs such as hot water, electrical emergency’s and new switch boards etc");
        }


        else if ($(document).scrollTop() >= height * 2.4 && $(document).scrollTop() < height * 3.6 ) {
          $("h1").text("Testimonials");
          $("h2").text("See what our clients are saying:");
          $(".left").css({'width':'42.5%'});
        	$(".right").css({'width':'42.5%', 'paddingLeft':'0%', 'background':'#000', 'backgroundPosition':'center', 'backgroundRepeat':'no-repeat', 'backgroundSize':'cover'});
      	  $(".left p").html('<a class="sub-title t-one active">Bob Doe</a><br><a class="sub-title t-two">Felipe Rodriquez</a><br><a class="sub-title t-three">Helen Williams</a><a class="copyright" title="Leave us a review on facebook" href="https://www.facebook.com/kokichelectricalwhangarei/">Leave us a review on facebook</a>');
          $(".right").html('<div class="testimonials-right dark"><p>Robbie and the team did a great job with blah blah blah. Would highly recommend Kokich Electrical to anyone.</p></div>');
          $(".t-one").click(function() {
            $(".active").removeClass("active");
            $(".t-one").addClass("active");
            $(".testimonials-right").html('<p>Robbie and the team did a great job with blah blah blah. Would highly recommend Kokich Electrical to anyone.</p>');
          });
          $(".t-two").click(function() {
            $(".active").removeClass("active");
            $(".t-two").addClass("active");
            $(".testimonials-right").html('<p>The second body of text which tells information</p>');
          });
          $(".t-three").click(function() {
            $(".active").removeClass("active");
            $(".t-three").addClass("active");
            $(".testimonials-right").html('<p>The third. Absolutely great to work with etc etc etc.</p>');
          });

        }
        else if ($(document).scrollTop() >= height * 3.6 && $(document).scrollTop() < height * 5.0 ) {
          $(".left").css({'width':'0%'});
        	$(".right").css({'width':'85%', 'paddingLeft':'7.5%', 'background':'#000'});
      	  $(".right").html('<footer><div class="footer-left-column"><a class="footerLink">About</a><br><a class="footerLink">Services</a><br><a class="footerLink">Contact</a></div><div class="footer-right-column"><h2>Get in touch:</h2><br><form action="#" method="post"><input type="text" name="name" alt="Your Name, So we can make our first contact with you more personal" placeholder="Your Name"></input><input type="email" name="email" alt="Email Address, So we can make contact with you to answer your query." placeholder="Email Address"></input><textarea name="enquiry" placeholder="Enquiry"></textarea><input type="submit" name="submit" value="Send"></input></form></div><span class="copyright">© Kokich Electrical 2018</span><a href="http://www.deslab.co.nz" title="This website was proudly made by Deslab Creative - Award Winning Web & Graphic Design in Whangarei, New Zealand"><img src="images/deslab-white.png" class="deslab"></img></a></footer>');
        }
    });
  }
  });

  </script>
</html>
