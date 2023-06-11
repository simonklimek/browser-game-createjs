<?php
//Include the PHP functions to be used on the page
include('common.php');

//Output header and navigation
outputHeader("My Game Website - Home");
outputNavigation("Home");
?>

<!--  Home container test -->
<div class="section-home mypattern">
    <section>
        <div class="row text-center">
            <div class="col-8 mx-auto">
                <br>
                <h1>Welcome to the Banks game</h1>
                <h5>The best gaming experience <time datetime="2018-11-16 17:00">these days</time> !</h5>
                <br>
                <article>
                    <p>Game based on top view shooter type game. The aim is to shoot as many ballons as possible. There is no time limit. The points are granted one for each accurate shoot. The map grid is x= 0-400pt y= 0-300pt. To drop a bomb type command x:y and hit the button Drop. The bomb will smash the ballons at possition x:y and grant you the score.

                    </p>
                </article>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-4 mx-auto">
                <br>
                <button class="btn btn-success" onclick="window.location.href='profile.php'">Create account now!</button>
            </div>
        </div>
    </section>
</div>



<?php
//Output the footer and scripts
outputFooter();
outputScripts();
?>
