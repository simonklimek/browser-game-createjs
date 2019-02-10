<?php
//Include the PHP functions to be used on the page
include('common.php');

//Output header and navigation
outputHeaderGame("My Game Website - Game");
outputNavigation("Game");
?>

<section class=" section-game">
    <div class="container">
        <div class="row">
            <!-- LEFT STATS BOX  -->
            <div class="col-lg-6">
                <!--  PLAYER STATS BOX-->
                <div class="container stat-box">
                    <!-- TOP BAR WITH STATS OF LOGGED USER / DISPLAY ONLY IF IT's LOGGED -->
                    <div class="row text-center">
                        <div class="col-12 mx-auto">
                            <p>Choose position on the map x:(0-400) y:(0-300) and type in the command window and hit Drop!<br>
                                example: 150:50</p>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-4 text-center">
                            <p>available weapons:<br>
                                <select id="selection">
                                    <option value="boom">boom</option>
                                    <option value="jump">kaboom</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-8"><img src="assets/big-tank.png" class="img-fluid" /> </div>
                    </div>
                    <br>
                    <!--  COMMAND LINE FOR CONTROLING THE GAME  -->
                    <div class="row">
                        <div class="col-8">
                            <input class="form-control form-control-lg" id="command-line" type="text" placeholder=">>> X : Y">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn-lg btn-warning" onclick="sendCommand()">Drop</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- GAME CANVAS -->
            <div class="col-lg-6">

                <div class="canvasHolder">
                    <canvas id="canvas" width="480" height="320"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
//Output the footer and scripts
outputFooter();
outputScripts();
?>
