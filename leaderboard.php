<?php
//Include the PHP functions to be used on the page
include('common.php');

//Output header and navigation
outputHeaderLeaderboard("My Game Website - Leaderboard");
outputNavigation("Leaderboard");
?>

<div class="leaderboard text-center mypattern section-leaderboard">
    <div class="row">
        <div class="col-lg-8 mx-auto" style="padding-top: 130px;">
            <h2>leaderboard:</h2>
            <div class="table-wrapper-scroll-y shadowed">
                <!--  BOOTSTRAP STYLE TABLE WITH STRIPED STYLE BACKGROUND OF ROWS-->
                <table id="dtVerticalScrollExample" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>rank</th>
                        <th>player</th>
                        <th>total points</th>
                    </tr>
                    </thead>
                    <tbody id="dynamic-rank">
                    <!-- here's goes the function printRanking(); -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
//Output the footer and scripts
outputFooter();
outputScripts();
?>
