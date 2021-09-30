


<div id="contentproject" class="wrap">
    
    <div class="inner"></div>
    <div class="inner cards">




    <div class="inner"></div>
    <div class="inner"></div>
    
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

<script src="main.js"></script>