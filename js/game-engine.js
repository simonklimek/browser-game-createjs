
var stage;
var smoke;
var bitmap;
var holder;
var currScore = 0;
var startView;

function Main() {

    // Canvas reference
    var canvas = document.getElementById("canvas");
    // CreateJS stage
    stage = new createjs.Stage(canvas);

    // SpriteSheet: copy/paste from the ZOE JSON output
    var data = new createjs.SpriteSheet({"images": ["Smoke.png"], "animations": {"kaboom": [10, 19], "boom": [0, 9]}, "frames": {"height": 94, "regX": 0, "count": 20, "regY": 0, "width": 96}});
    smoke = new createjs.Sprite(data);

    // add banks logo to the stage
    function addStartView(){
        startView = new createjs.Bitmap("titleBg.png");
        startView.x = 0;
        stage.addChild(startView);
    }
    // add score to the stage
    function addScore() {
        scores = new createjs.Text(currScore, 'bold 15px Arial', '#fff');
        scores.maxWidth = 1000;    //fix for Chrome 17
        scores.x = 240;
        scores.y = 21;
        stage.addChild(scores);
    }
    // add balloons to the stage
    function addCarousel(){
        holder = stage.addChild(new createjs.Container());
        holder.x = 250;
        holder.y = 150;

        for (var i=0; i<25; i++) {
            var shape = new createjs.Shape();
            shape.graphics.beginFill(createjs.Graphics.getHSL(Math.random()*360,100,50)).drawCircle(0,0,30);
            shape.x = Math.random()*300-150;
            shape.y = Math.random()*300-150;

            holder.addChild(shape);
        }
    }

    function drawEverything(){
        addStartView();
        addScore();
        addCarousel();
    }

    drawEverything();

    createjs.Ticker.on("tick", handleTick);
}

function sendCommand() {

    readTheCommands();
    dropAPoint();

    // read the command window for position to drop a bomb
    function readTheCommands(){
        var commandData = document.getElementById("command-line").value;
        var posOfx = commandData.indexOf(":");
        var endOfy = commandData.length;
        xTarget = commandData.slice(0,posOfx);
        yTarget = commandData.slice(posOfx+1,endOfy);
    }
    // drops the bomb at given position and choose explosive type
    function dropAPoint() {
        var gunType = document.getElementById('selection').value;
        stage.removeChild(bitmap);
        stage.addChild(smoke);
        // Set the smoke position (equal to command coordinates)
        smoke.x = xTarget;
        smoke.y = yTarget;
        smoke.gotoAndPlay(gunType);
    }
}

// fcuntion for adding the score to JSON when bomb hit the balloon
function addScore(){
    var emailScore = sessionStorage.loggedInUserEmail;

    var user = JSON.parse(localStorage[emailScore]);
    localStorage[emailScore] = JSON.stringify({email: user.email, name: user.name, password: user.password, score: currScore});
}

// ticker for animation - rotate the holder with balloons and check "hit test" every time it's tick
function handleTick(event) {

    holder.rotation += 3;
    var l = holder.getNumChildren();
    for (var i=0; i<l; i++) {
        var child = holder.getChildAt(i);
        child.alpha = 0.1;
        // hit test for balloons and bomb position
        var ps = child.globalToLocal(smoke.x, smoke.y);
        if (child.hitTest(ps.x, ps.y)) { currScore += 1; child.alpha = 1;  scores.text = currScore; addScore();}
    }

    stage.update(event);
}
