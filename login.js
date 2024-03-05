// Add event listener to the form
var form = document.querySelector("form");
form.addEventListener("submit", function(e) {
  e.preventDefault();
  
  // Get the values of the username and password fields
  var username = document.querySelector("#username").value;
  var password = document.querySelector("#password").value;
  
  // Perform some kind of validation or authentication here
  if (username === "admin" && password === "password") {
    // Redirect to the dashboard or show a success message
    window.location.href = "dashboard.html";
  } else {
    // Show an error message
    alert("Invalid username or password!");
  }
});
