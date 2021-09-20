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

                      <div class="about">
                          <span>A</span>
                          <span>&nbsp;</span>
                          <span>P</span>
                          <span>R</span>
                          <span>O</span>
                          <span>P</span>
                          <span>O</span>
                          <span>S</span>
                      </div>
                  </h1>
              </div>

    </div>




    <canvas class="frame"></canvas>
    <script src="main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


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