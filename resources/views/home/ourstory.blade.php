<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/profile.jpg" type="">
      <title>Samyak - Demo Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         
         <img src="images/ourstory.jpg" alt="">


         <div class="heading_container heading_center">
                                    <h2>
                                    OUR STORY
                                    </h2>
         </div>



   <div class="rte">
    <p><span style="font-weight: 400;font-size: 1.2em;">Samyak is a result of a joint venture,started out with the similar stories of three friends. The journey to Samyak is quite a flow of time. Bijay Awal, Rabin Khusu and Dinesh Malekar, having not much difference in their nature and personality, are all from engineering and IT background ,already working as civil engineer, programmer and web developer respectively. Eventually, they left their jobs in order to set out in the handicrafts business world.</span></p>
      <br>


            <p><span style="font-weight: 400;font-size: 1.2em;">Samyak literally means ‘right’,which clearly signifies our company’s essence as a whole. It’s our way of assuring customers that stopping here is absolutely the most righteous choice they could ever make and everything they came looking for is just right here in this home.</span></p>

      <br>

               <!-- <h2>Samyak literally means ‘right’,which clearly signifies our company’s essence as a whole. It’s our way of assuring customers that stopping here is absolutely the most righteous choice they could ever make and everything they came looking for is just right here in this home.</h2>
               <h3>We wish them to feel that Samyak is enough.</h3>
               --><br>
               <p><span style="font-weight: 400;font-size: 1.2em;">With humble beginnings and our goals deeply engraved in our mind and hearts, we continuously strive to provide the highest quality of handmade products from Nepal to all the handicrafts lovers out there.</span></p>
   </div>
</div>
      @include('home.footer') 
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved!!<br>
         
            BSc.CSIT Internship
  
         </p>
      </div>


      <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>

      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>