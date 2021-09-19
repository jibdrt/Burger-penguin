<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <a id="slide-button" class="menu-button btn mb-2" href="#"><i class="fas fa-map-marker-alt"></i> Menu</a>
   <div id="local-navbar" class="local-navbar card card-body">                
            <a href="#" class="close-icon"><i class="fas fa-caret-left"></i></a>
            <a href="#running-routes" class="local-navbar-icon"><i class="fas fa-map-marker-alt"></i> Running Routes</a>
            <a href="#group-runs" class="local-navbar-icon"><i class="fas fa-map-marker-alt"></i> Group Runs</a>
            <a href="#running-clubs" class="local-navbar-icon"><i class="fas fa-map-marker-alt"></i> Running Clubs</a>
            <a href="#swimming-pools" class="local-navbar-icon"><i class="fas fa-map-marker-alt"></i> Swimming Pools</a>
   </div>

  <div class="div_scroll">

    <div class="topgap"></div>
        <div class="spaceproject"></div>

              <div class="content name">
                  <h1>
                        <div class="switch_project">
                            <span class="bgc">PORTFOLIO</span>

                        </div>
                        <br>
                      <span class="bgc">J</span>
                      <span class="bgc">E</span>
                      <span class="bgc">A</span>
                      <span class="bgc">N</span>
                      <span class="bgc sep">-</span>
                      <br class="brmobile">
                      <span class="bgc">B</span>
                      <span class="bgc">A</span>
                      <span class="bgc project">P</span>
                      <span class="bgc">T</span>
                      <span class="bgc">I</span>
                      <span class="bgc">S</span>
                      <span class="bgc">T</span>
                      <span class="bgc">E</span>
                      <div></div>
                      <div id="sidespace"></div>
                      <span class="dot">
                        <span class="bgc">D</span>
                        <span class="bgc">R</span>
                        <span class="bgc">U</span>
                        <span class="bgc">E</span>
                        <span class="bgc">T</span>
                      </span>
                      <br>
                      <span class="about">A PROPOS</span>
                  </h1>
              </div>

    </div>





    <canvas class="frame"></canvas>
    <script src="main.js"></script>





<div></div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>


                $(document).ready(function(){

 /*                    ---------------------------------------------------- */

                    $(".about").click(function(){
                        $("#sidespace").load("sidepage.php").toggle(1000);
                    });
                    $("#sidespace").click(function(){
                        $("#sidecontent").toggle(1000);
                    });

/*                     ---------------------------------------------------- */

                    $('.switch_project').hover(function(){
                        $(this).text('PROJECTS').slideDown(200);
                        },function(){
                        $(this).text('PORTFOLIO').slideDown(200);
                        });

/*                     ---------------------------------------------------- */

                        $('.switch_project').click(function(){
                            $('.spaceproject').load("projectpage.php").toggle(1200);
                        });
                });
        </script>

</body>
</html>