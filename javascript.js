  // password length validator
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".register-form");
    const password1 = document.getElementById("password1");
    const password2 = document.getElementById("password2");
    const passwordError = document.getElementById("passwordError");
    const passwordWarning = document.getElementById("password2short"); // Assuming this is the correct ID for password length warnings
  
    form.addEventListener("submit", function (event) {
      let valid = true;
  
      // Check password length
      if (password1.value.length < 6) {
        passwordWarning.textContent = "Password should be longer than 6 characters.";
        passwordWarning.style.display = "block";
        valid = false;
      } else {
        passwordWarning.style.display = "none";
      }
  
      // Check if passwords match
      if (password1.value !== password2.value) {
        passwordError.textContent = "Passwords do not match. Please try again.";
        password1.style.borderColor = "red";
        password2.style.borderColor = "red";
        valid = false;
      } else {
        passwordError.textContent = "";
        password1.style.borderColor = "green";
        password2.style.borderColor = "green";
      }
  
      // Prevent form submission if there are any validation errors
      if (!valid) {
        event.preventDefault();
        event.stopPropagation();
      }
    });
  });
  
  function openAnotherPage() {
    document.getElementById("thanks-for-contact").innerHTML =
      "Thanks for the registration!";
    setTimeout(function () {
      window.location.href = "another_page.php";
    }, 2000); // Redirect after 2 seconds
  }

  document.addEventListener('DOMContentLoaded', function() {
    const logoutLink = document.querySelector('a[href="logout.php"]');
    if (logoutLink) {
      logoutLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior
        fetch('logout.php') // Send a request to the logout endpoint
          .then(response => {
            window.location.href = 'index.php'; // Redirect after successful logout
          })
          .catch(error => console.error('Error:', error));
      });
    }
  });
  
