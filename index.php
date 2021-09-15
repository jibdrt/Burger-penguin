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

              <div class="content name">
                  <h1>
                        <div class="switch_project">
                            <span class="bgc">P</span>
                            <span class="bgc">O</span>
                            <span class="bgc">R</span>
                            <span class="bgc">T</span>
                            <span class="bgc">F</span>
                            <span class="bgc">O</span>
                            <span class="bgc">L</span>
                            <span class="bgc">I</span>
                            <span class="bgc">O</span>
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
                  </h1>
              </div>

    </div>




    <canvas class="frame"></canvas>
    <script src="main.js"></script>





<div></div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
                $(document).ready(function(){
                $(".project").click(function(){
                    $("#sidespace").load("sidepage.php").toggle(1000);
                });
                $("body").click(function(){
                    $("#sidecontent").toggle(1000);
                });
                });
        </script>
        <script>

            $(document).ready(function(){
                $('.switch_project').hover(function(){
                    $(this).text('PROJECTS').slideDown(200); //text to be shown on hover state
                    },function(){
                    $(this).text('PORTFOLIO').slideDown(200); //text to be seen when not in hover state
                    });
            });

        </script>
        <script>
            $(document).ready(function(){
                $('.switch_project').click(function(){
                    $('body').toggle(600).show(1200);
                });
            });
        </script>

</body>
</html>