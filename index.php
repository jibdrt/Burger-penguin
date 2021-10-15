<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>



  <div class="div_scroll">

    <div class="topgap"></div>
        <div class="spaceproject">
        <div id="contentproject" class="wrap">
                    <div class="inner">
                        <div class="cards"></div>
                    </div>  
                </div>

<style>

    .cards{
        display: grid;
        grid-template-columns: 1fr 2fr;
    }

    .wrap{
        display: grid;
        grid-template-rows: repeat(4, 1fr);
        margin-left: 1vw;
    }

    .inner{
        z-index: 0;
        width: 100vw;
        height: 800px;
        border: none;
        border-color: #222222;
        background-color: #222222;
    }

    .cards__project{
        margin-left: 200px !important;
    }

    .closebtn{
        z-index: 999;
        margin-top: 48px;
        margin-left: 48px;
        cursor: pointer !important;
        border: 1px red solid;
    }

    .cardtrial{
        height: 500px;
        width: 300px;
        border: 1px white solid;
    }


</style>
        </div>

              <div class="content name">

                  <h1>
                      <div id="backbtn_area"><p id="backbtn" class="bgc">RETOUR</p></div>
                        <div class="switch_project">
                            <div><p class="bgc">PROJETS</p></div>

                        </div>
                        <br>
                        <span class="bgc">JEAN</span>
                      <span class="bgc sep">-</span>
                      <br class="brmobile">
                      <span class="bgc">BAPTISTE</span>
                      <div></div>
                      <div id="sidespace"></div>
                      <span class="dot">
                        <span class="bgc">DRUET</span>
                      </span>
                      <br>

                      <div class="about">
                            A PROPOS
                      </div>
                  </h1>
              </div>

    </div>




<!--     <canvas class="frame"></canvas> -->
    <script src="main.js"></script>




<div></div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script
  src="https://code.jquery.com/ui/1.13.0-rc.2/jquery-ui.min.js"
  integrity="sha256-RQLbEU539dpygNMsBGZlplus6CkitaLy0btTCHcULpI="
  crossorigin="anonymous"></script>
        <script>


                $(document).ready(function(){

 /*                    ---------------------------------------------------- */

                    $(".about").click(function(){
                        $( "#sidespace" ).load("sidepage.php").show();
                    });
                    $("#sidespace").click(function(){
                        $("#sidecontent").toggle(1000);
                    });

/*                     ---------------------------------------------------- */

                    $('.about').hover(function(){
                        $(this).text('ABOUT').slideDown(200);
                        },function(){
                        $(this).text('A PROPOS').slideDown(200);
                        
                        });

/*                     ---------------------------------------------------- */


                        $('.switch_project').click(function(){
                            $('.spaceproject').load("projectpage.php").show("slide", { direction: "left" }, "slow");
                            $('#backbtn').show("slide", { direction: "right" }, 1000);

                        });

/*                     ---------------------------------------------------- */


                        $('#backbtn').click(function(){
                            $('.spaceproject').hide( "drop", { direction: "down" }, "slow" );

                        });


                        $('#backbtn').click(function(){
                            $('.spaceproject').hide( "drop", { direction: "down" }, "slow" );
                        $('#backbtn').hide( "slide", { direction: "right" }, "slow");
                        
                        });

                });

                
        </script>

</body>
</html>