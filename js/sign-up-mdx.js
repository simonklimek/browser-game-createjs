

// sign up with local storage user profiles
function storeUser() {

  // Alert message for empty email field
  var x = document.forms["registration-form"]["femail"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }

  var usrObject = {};


  // read input fields and save in an object
  usrObject.email = document.getElementById("emailInput").value;
  usrObject.name = document.getElementById("nameInput").value;
  usrObject.password = document.getElementById("passwordInput").value;
  usrObject.score = 0;  // default val

  // store user with a JSON key: 'email'
  localStorage[usrObject.email] = JSON.stringify(usrObject);

  // inform user of result
  document.getElementById("signupresult").innerHTML = "Welcome " + usrObject.name + "! <br/> registration successful";

}


function login() {
  var email = document.getElementById("emailLoginInput").value; // get email address

  // user does not have account
  if (localStorage[email] === undefined) {
    // let user know that does not have account
    document.getElementById("loginFailure").innerHTML = "account does not exist";
    return;
  } else {
    var usrObject = JSON.parse(localStorage[email]);
    var password = document.getElementById("passwordLoginInput").value;

    // password validation
    if (password === usrObject.password) {
      document.getElementById("loginFailure").innerHTML = usrObject.name + " logged in";
      sessionStorage.loggedInUserEmail = usrObject.email;
    } else {
      document.getElementById("loginFailure").innerHTML = "Password incorrect, please try again";
    }
  }
}

// flipping card toggle

function flip() {
  $('.card').toggleClass('flipped');
}


// ranking handler invoked on page load
function printRanking(){
    var i;
    // console output
    console.log(">>>local storage");
    for (i = 0; i < localStorage.length; i++)   {
        console.log(localStorage.key(i) + "=[" + localStorage.getItem(localStorage.key(i)) + "]");
    }

    //sorting table of objects
    var users = Object.keys(localStorage)
        // .filter(key => key !== 'loggedInUsrEmail')
        .map(key => JSON.parse(localStorage[key]))
        .sort((a, b) => b.score - a.score)
        .slice(0, 10);

    // html output, content wrapped in table html markup
    for (var key in users) {
        var rank = 1 + parseInt(key);
        document.getElementById('dynamic-rank').innerHTML +='<tr><th>' + rank + '.</th><th>' + users[key].name + '</th><th>' + users[key].score + '</th></tr>';
    }

}
