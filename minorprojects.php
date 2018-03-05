<script>$(document.body).addClass('profile-page');</script>

<style>

    img.mine {
        border-radius: 50%;
        border:1px solid rgba(168, 165, 16, 0.55);
    }

    .img {
        border-radius: 100%;
        display: flex;
        flex: 0 0 150px;
        width: 150px;
        height: 150px;
        justify-content: center;
        overflow: hidden;
        position: relative;
    }

    .img img.mine {
        height: 100%;
    }

    .img_overlay {
        align-items: center;
        bottom: 0;
        display: flex;
        justify-content: center;
        left: 0;
        opacity: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: opacity 0.25s;
        z-index: 1;
    }

    .img_overlay:hover {
        opacity: 1;
    }

    .img_overlay {
        background-color: rgba(92, 92, 92, 0.55);
        background: linear-gradient(65deg, rgba(92, 92, 92, 0.55), rgba(168, 165, 16, 0.55));
        color: #fafafa;
        font-size: 24px;
    }

</style>

<div class="wrapper">
	<div class="header header-filter" style="height:0px; background-image: url('resources/images/print10.png');">
        <div class="text-center">
            <br><br><br><br><h1 class="text-center" style="color: white;">Minor projects</h1>
        </div>
    </div>

	<div class="main main-raised">
        <div class="container">

            <div class="row">
                <center>
                    <div class="col-md-3">
                        <h5>14/11/2017</h5>
                        <a class="img" href="resources/p5js/drawnn.html" target="_blank">
                            <div class="img_overlay">DrawNN</div>
                            <img class="mine" src="resources/images/drawnn.png"/>
                        </a>
                        <h6>Draw your own Deep Neural Network</h6>
                        <span class="label label-default">p5.js</span>
                    </div>
                </center>

                <center>
                    <div class="col-md-3">
                        <h5>25/10/2017</h5>
                        <a class="img" href="resources/p5js/10print.html" target="_blank">
                            <div class="img_overlay">10 PRINT</div>
                            <img class="mine" src="resources/images/10print.png"/>
                        </a>
                        <h6>A one-line Commodore 64 BASIC program</h6>
                        <span class="label label-default">p5.js</span>
                    </div>
                </center>
            </div>

            <br>

        </div>
	</div>
</div>