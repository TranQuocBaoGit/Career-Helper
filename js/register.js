var name = document.forms["vform"]["name"];
var email = document.forms["vform"]["email"];
var password = document.forms["vform"]["password"];
var conf_password = document.forms["vform"]["confirm-password"];

var name_error = document.getElementById("name_error");
var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");

name.addEventListener("blur",nameVerify, true);
email.addEventListener("blur",emailVerify, true);
password.addEventListener("blur",passwordVerify, true);