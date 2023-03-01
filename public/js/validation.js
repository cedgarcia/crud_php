function validation() {
  var form = document.getElementById("form");
  var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  var email = document.getElementById("email").value;
  var text = document.getElementById("text");
  var register = document.getElementById("registerbutton");
  if (email.match(pattern)) {
    register.removeAttribute("disabled");
    form.classList.add("valid");
    form.classList.remove("invalid");
    text.innerHTML = "Your Email address is valid";
    text.style.color = "green";
  } else {
    register.setAttribute("disabled", " disabled");
    form.classList.add("invalid");
    form.classList.remove("valid");
    text.innerHTML = "Please enter a valid email address";
    text.style.color = "red";
  }
}
