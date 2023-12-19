let navbar =document.querySelector('.header .navbar');
document.querySelector('#menu-btn').onclick=()=>{
    navbar.classList.toggle('active');
}
document.querySelectorAll('.about .video-container .controls .control-btn ').forEach(btn =>{
btn.onclick = () =>{
    let src = btn.getAttribute('data-src');
    document.querySelector('.about .video-container .video').src = src;
}

})

//****************LOGIN & REGISTER************/
// Inside your existing script.js file
let loginPopup = document.getElementById('login-popup');
let loginBtn = document.getElementById('login-btn1');
let closePopupBtn = document.getElementById('close-popup');
let loginFormPopup = document.getElementById('login-form-popup');

// Open the login popup when the login button is clicked
loginBtn.onclick = () => {
  loginPopup.style.display = 'flex';
};

// Close the login popup when the close button is clicked
closePopupBtn.onclick = () => {
  loginPopup.style.display = 'none';
};

// Close the login popup when clicking outside the popup
window.onclick = (event) => {
  if (event.target === loginPopup) {
    loginPopup.style.display = 'none';
  }
};

// Handle form submission (you can modify this based on your authentication logic)
loginFormPopup.addEventListener('submit', (event) => {
  event.preventDefault();

  // Perform authentication logic here
  // You can send a request to your server for authentication

  // For simplicity, let's just display a message
  alert('Login successful!');

  // Close the popup after successful login
  loginPopup.style.display = 'none';
});


document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevents form from submitting the default way

    var fn = document.forms["registerForm"]["firstName"].value;
    var ln = document.forms["registerForm"]["lastName"].value;
    var bd = document.forms["registerForm"]["birthDate"].value;
    var ph = document.forms["registerForm"]["phone"].value;
    var em = document.forms["registerForm"]["email"].value;
    var pwd = document.forms["registerForm"]["password"].value;
    var cpwd = document.forms["registerForm"]["confirmPassword"].value;


    // Simple validation example
    if (fn === "" || ln === "" || bd === "" || ph === "" || em === "" || pwd === "" || cpwd === "") {
        alert("Fields must be filled out");
        return false;
    }

});

document.addEventListener('DOMContentLoaded', (event) => {
  document.getElementById('registerForm').addEventListener('submit', function(e) {
      e.preventDefault(); 
      window.location.href = 'index.html';
  });
});

document.addEventListener('DOMContentLoaded', (event) => {
  document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault(); 
      window.location.href = 'index.html';
  });
});