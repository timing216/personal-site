// hello world

function GreetingsOn() {
  document.getElementById("greetings").innerHTML = "Hello, World!";
}

function GreetingsOff() {
  document.getElementById("greetings").innerHTML = "";
}

// function openAnotherPage() {
//   window.location.href = "another_page.php";
//   document.getElementById("thanks-for-contact").innerHTML =
//     "Thanks for contacting us!";
// }

document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".register-form");
  const password1 = document.getElementById("password1");
  const password2 = document.getElementById("password2");
  const passwordError = document.getElementById("passwordError");
  const submit = document.getElementById("submit");

  function checkPasswordsMatch() {
    console.log("Checking passwords:", password1.value, password2.value); // Debugging line
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
    console.log("Form submission triggered"); // Debugging line
    if (!form.checkValidity() || !checkPasswordsMatch()) {
      console.log("Form validation failed"); // Debugging line
      event.preventDefault(); // Prevent form submission if validation fails
      event.stopPropagation();
    } else {
      console.log("Form is valid and passwords match"); // Debugging line
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

// document.addEventListener("DOMContentLoaded", function () {
//   const form = document.querySelector(".input-form");
//   const password1 = document.getElementById("password1");
//   const password2 = document.getElementById("password2");
//   const submitButton = document.getElementById("submit");

//   function checkPasswordsMatch() {
//     if (password1.value !== password2.value) {
//       alert("Passwords do not match!");
//       return false; // Prevent form submission
//     }
//     return true;
//   }

//   form.addEventListener("submit", function (event) {
//     if (!form.checkValidity() || !checkPasswordsMatch()) {
//       event.preventDefault(); // Prevent form submission
//       event.stopPropagation(); // Stop the event from propagating further
//     }
//   });
// });

// function checkPasswordsMatch() {
//   if (password1.value !== password2.value) {
//     password1.style.borderColor = "red";
//     password2.style.borderColor = "red";
//     return false;
//   } else {
//     password1.style.borderColor = "green";
//     password2.style.borderColor = "green";
//     return true;
//   }
// }
// window.location.href = "another_page.html";
// document.getElementById("contact_us").hidden;
// const prev = document.querySelector(".prev");
// const next = document.querySelector(".next");
// const images = document.querySelector(".carousel").children;
// const totalImages = images.length;
// let index = 0;

// prev.addEventListener("click", () => {
//   nextImage("next");
// });

// next.addEventListener("click", () => {
//   nextImage("prev");
// });

// function nextImage(direction) {
//   if (direction == "next") {
//     index++;
//     if (index == totalImages) {
//       index = 0;
//     }
//   } else {
//     if (index == 0) {
//       index = totalImages - 1;
//     } else {
//       index--;
//     }
//   }

//   for (let i = 0; i < images.length; i++) {
//     images[i].classList.remove("main");
//   }
//   images[index].classList.add("main");
// }
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
