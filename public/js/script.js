
      function Tombollogin(){
        var x = document.getElementById("kotakputih");
        x.style.transform = "translateY(0%)";
        x.style.transition = "transform 1.3s";
        var y = document.getElementById("kotakhitam");
        y.style.visibility = "visible";
        var z = document.getElementById("kotaklogin");
        z.style.visibility = "visible";
        var p = document.getElementById("kotakdaftar");
        p.style.visibility = "hidden";
        var c = document.getElementById("navbar");
        c.style.zIndex = "1";
      }
      function ValidateInputan(){
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (password.length >= 6 && email.match(mailformat)){
            var elem = document.getElementById("tombolmasuk");
            elem.style.color = "white";
            elem.style.backgroundColor = " #FF7A00";
            elem.style.cursor = "pointer";
            elem.disabled = false;
        }
        else{
            var elem = document.getElementById("tombolmasuk");
            elem.style.color = "rgb(167, 167, 167)";
            elem.style.backgroundColor = "#e2e2e2";
            elem.style.cursor = "not-allowed";
            elem.disabled = true;
        }
    }
    function ValidateLogin(){
        var alert = document.getElementById("alert");
        alert.style.display = "block";
        var kotakputih = document.getElementById("kotakputih");
        var button = document.getElementById("tombolmasuk");
        kotakputih.style.height = "333px";
        button.style.marginTop = "0px";
        alert("mantap");
    }
    function Tombolcloselogin(){
        var x = document.getElementById("kotakputih");
        x.style.transform = "translateY(-200%)";
        x.style.transition = "transform 1.3s";
        x.style.visibility = "visible";
        var z = document.getElementById("kotakhitam");
        z.style.visibility = "hidden";
        var c = document.getElementById("kotaklogin");
        c.style.visibility = "hidden";
    }
    function Tombolclosedaftar(){
        var x = document.getElementById("msform");
        x.style.transform = "translateY(-200%)";
        x.style.transition = "transform 1.3s";
        x.style.visibility = "visible";
        var z = document.getElementById("kotakhitam");
        z.style.visibility = "hidden";
        var c = document.getElementById("kotakdaftar");
        c.style.visibility = "hidden";
    }
    function Gantidaftar(){
        var x = document.getElementById("kotakputih");
        x.style.transform = "translateY(-200%)";
        x.style.transition = "transform 1.3s";
        x.style.visibility = "visible";
        var z = document.getElementById("kotaklogin");
        z.style.visibility = "hidden";
        var l = document.getElementById("kotakdaftar");
        l.style.visibility = "visible";
        var p = document.getElementById("msform");
        p.style.visibility = "visible";
        p.style.transform = "translateY(0%)";
        p.style.transition = "transform 1.3s";
        p.style.transitionDelay = "1s";
    }
    
    function Gantilogin(){
        var x = document.getElementById("kotakputih");
        x.style.transform = "translateY(0%)";
        x.style.transition = "transform 1.3s";
        x.style.visibility = "visible";
        x.style.transitionDelay = "1s";
        var z = document.getElementById("kotaklogin");
        z.style.visibility = "visible";
        var l = document.getElementById("kotakdaftar");
        l.style.visibility = "hidden";
        var p = document.getElementById("msform");
        p.style.visibility = "visible";
        p.style.transform = "translateY(-200%)";
        p.style.transition = "transform 1.3s";
    }

    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }
    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        return valid; // return the valid status
    }
    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        for (j = 0; j <= n; j++) {
            x[j].className += " active";
        }
    }