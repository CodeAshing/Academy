<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Samrib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Component/Slider/slider.css">    
    <link rel="stylesheet" href="Component/About/about.css"> 
    <link rel="stylesheet" href="Component/Depart/depart.css"> 
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
  </head>
  <body>

     <div w3-include-html="Component/Navbar/Navbar.html"></div>      
     <div w3-include-html="Component/Slider/Slider.html"></div>          
     <div id="about" class="pl5" w3-include-html="Component/About/About.html"></div>        
     <div id="depart" w3-include-html="Component/Depart/Depart.html"></div>
     <div id="contact" w3-include-html="Component/Footer/Footer.html"></div>
     
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="connect.js"></script> 
      <script type="text/javascript">
      $(function(){
        $(".menu a").on('click',function(){
          $("html, body").animate({
            scrollTop: $($.attr(this,'href')).offset().top
            },500);
        });
      });
      </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
           AOS.init();
      </script>
      <script>
        includeHTML();
      </script> 
  </body>
</html>
