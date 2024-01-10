function signin() {

    var email = document.getElementById("em2");
    var pass = document.getElementById("pw2");

    var fd = new FormData();
    fd.append("em", email.value);
    fd.append("pw", pass.value);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text)
            if (text == "SignIn successful") {
                window.location = "home.html"
            } else {
                document.getElementById("msg2").innerHTML = text;
            }
        } else {}
    };

    r.open("POST", "login.php", true);
    r.send(fd);

}

function signup1() {

    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("yemail");
    var password = document.getElementById("address");
    var mobile = document.getElementById("mobilenumber");
    var gen = document.getElementById("postal-code");
    var f = new FormData();
    f.append("fname", fname.value);
    f.append("lname", lname.value);
    f.append("email", email.value);
    f.append("password", password.value);
    f.append("mobile", mobile.value);
    f.append("gen", gen.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text)
            if (text == "Account Create successful") {

            } else {

            }
        } else {}
    };

    r.open("POST", "signup_process1.php", true);
    r.send(f);
}

function dbup() {

    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("yemail");
    var password = document.getElementById("address");


    var f = new FormData();
    f.append("fname", fname.value);
    f.append("lname", lname.value);
    f.append("email", email.value);
    f.append("password", password.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text)
            if (text == "Account Create successful") {

            } else {

            }
        } else {}
    };

    r.open("POST", "deliveryboyupdate.php", true);
    r.send(f);
}

function fb() {

    var fname = document.getElementById("fname");
    var rate;


    if (document.getElementById("star1").checked) {
        rate = 1;
    } else if (document.getElementById("star2").checked) {
        rate = 2;
    } else if (document.getElementById("star3").checked) {
        rate = 3;
    } else if (document.getElementById("star4").checked) {
        rate = 4;
    } else if (document.getElementById("star5").checked) {
        rate = 5;
    }


    var f = new FormData();
    f.append("fname", fname.value);
    f.append("col", rate);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text)
            if (text == "Account Create successful") {

            } else {

            }
        } else {}
    };

    r.open("POST", "rating.php", true);
    r.send(f);
}

function fb1() {

    var fname = document.getElementById("fname");

    var f = new FormData();
    f.append("fname", fname.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text)
            if (text == "Account Create successful") {

            } else {

            }
        } else {}
    };

    r.open("POST", "report.php", true);
    r.send(f);
}

function tr() {

    var fname = document.getElementById("tracking-number");


    var f = new FormData();
    f.append("fname", fname.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text)

        } else {}
    };

    r.open("POST", "tracking.php", true);
    r.send(f);
}

function signout() {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "suc") {
                window.location = "login.html"
            } else {}
        } else {}
    };

    r.open("GET", "signout.php", true);
    r.send();
}