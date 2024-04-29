// hello world
document.addEventListener("DOMContentLoaded", function() {
function GreetingsOn() {
  document.getElementById("greetings").innerHTML = "Hello, World!";
}

function GreetingsOff() {
  document.getElementById("greetings").innerHTML = "";
}

// password length validator
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".register-form");
  const password1 = document.getElementById("password1");
  const passwordWarning = document.getElementById("password2short");

  form.addEventListener("submit", function (event) {
    if (password1.value.length < 6) {
      passwordWarning.textContent = "Password should be longer than 6 characters.";
      event.preventDefault(); // Prevent form submission
    } else {
      passwordWarning.style.display = "none";
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".register-form");
  const password1 = document.getElementById("password1");
  const password2 = document.getElementById("password2");
  const passwordError = document.getElementById("passwordError");
  const submit = document.getElementById("submit");

  function checkPasswordsMatch() {
    if (password1.value !== password2.value) {
      passwordError.textContent = "Passwords do not match. Please try again.";
      password1.style.borderColor = "red";
      password2.style.borderColor = "red";
      return false;
    } else {
      passwordError.textContent = "";
      password1.style.borderColor = "green";
      password2.style.borderColor = "green";
      return true;
    }
  }

  form.addEventListener("submit", function (event) {
    if (!form.checkValidity() || !checkPasswordsMatch()) {
      event.preventDefault(); // Prevent form submission if validation fails
      event.stopPropagation();
    } else {
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


document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".register-form");
  const submitButton = document.getElementById("submit");

  form.addEventListener("submit", function (event) {
    if (!form.checkValidity()) {
      event.preventDefault(); // Prevent form submission
      event.stopPropagation(); // Stop the event from propagating further
      // Optionally, add any custom behavior here
    }
  });
});


document.addEventListener("DOMContentLoaded", function() {
  // Display error message if it exists in the session
  const errorMessageDiv = document.getElementById("errorMessage");
  const errorMessage = "<?php echo $_SESSION['error_message'] ?? ''; ?>";
  if (errorMessage !== "") {
    errorMessageDiv.textContent = errorMessage;
    // <?php unset($_SESSION['error_message']); ?> // Clear the session error message after displaying
  }
});










});