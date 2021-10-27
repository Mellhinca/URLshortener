function slice() {
  var url = ' ';
  var charac = 'ABCDEFGHIKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  for (var i = 0; i < arguments[0]; i++){
        url += charac.charAt(Math.floor(Math.random() * 62));
      document.getElementById("URLout").value = url;
  }
}

window.jQuery || document.write('<script src="http://mysite.com/jquery.min.js"><\/script>')


function checkPasswordMatch() {
var password = $("#password").val();
var confirmPassword = $("#confirmpassword").val();
if (password != confirmPassword)
    $("#divCheckPasswordMatch").html("Passwords do not match!");
else
 $("#divCheckPasswordMatch").html("Passwords match.");
}

jQuery(document).ready(function () {
    $("#password, #confirmpassword").keyup(checkPasswordMatch);
});



