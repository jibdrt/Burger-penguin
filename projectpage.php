


<div id="contentproject" class="wrap">
    
    <div class="inner"><button type="button" class="btn-close btn-close-white closebtn" aria-label="Close"></button></div>
    <div class="inner cards">
    <div></div>
    <div class="card cards_project" style="width: 8rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

    </div>
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
        height: 300px;
        border: none;
        border-color: #222222;
        background-color: #222222;
    }

    .txt{
        color: white;
        z-index: 99;
    }

    .cards__project{
margin-left: 200px !important;
    }

    .closebtn{
        z-index: 999;
        margin-top: 48px;
        margin-left: 48px;
        cursor: pointer;
        border: 1px red solid;
    }



</style>

<script src="main.js"></script>