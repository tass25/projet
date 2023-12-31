// Sélection de la barre de navigation et configuration du bouton de menu
let navbar = document.querySelector('.header .navbar');
document.querySelector('#menu-btn').onclick = () => {
    // Active ou désactive la classe 'active' sur la barre de navigation pour afficher ou masquer le menu
    navbar.classList.toggle('active');
};

// Configuration des boutons de contrôle de la vidéo dans la section 'about'
document.querySelectorAll('.about .video-container .controls .control-btn').forEach(btn => {
    btn.onclick = () => {
        // Récupère la source de la vidéo à partir de l'attribut 'data-src' du bouton cliqué
        let src = btn.getAttribute('data-src');
        // Met à jour la source de l'élément vidéo pour changer la vidéo affichée
        document.querySelector('.about .video-container .video').src = src;
    };
});

// ***************LOGIN & REGISTER***************

// Sélection et configuration du popup de connexion
let loginPopup = document.getElementById('login-popup');
let loginBtn = document.getElementById('login-btn1');
let closePopupBtn = document.getElementById('close-popup');

// Ouvre le popup de connexion lorsque le bouton de connexion est cliqué
loginBtn.onclick = () => {
    loginPopup.style.display = 'flex';
};

// Ferme le popup de connexion lorsque le bouton de fermeture est cliqué
closePopupBtn.onclick = () => {
    loginPopup.style.display = 'none';
};

// Ferme le popup de connexion en cliquant en dehors du popup
window.onclick = (event) => {
    if (event.target === loginPopup) {
        loginPopup.style.display = 'none';
    }
};

// Gestion de la soumission du formulaire de connexion
let loginFormPopup = document.getElementById('login-form-popup');
loginFormPopup.addEventListener('submit', (event) => {
    event.preventDefault();
    alert('Connexion réussie !');
    loginPopup.style.display = 'none';
});

// Gestion de la soumission du formulaire d'inscription
document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche la soumission automatique du formulaire
    // Récupération et validation des champs du formulaire
    var fn = document.forms["registerForm"]["firstName"].value;
    var ln = document.forms["registerForm"]["lastName"].value;
    var bd = document.forms["registerForm"]["birthDate"].value;
    var ph = document.forms["registerForm"]["phone"].value;
    var em = document.forms["registerForm"]["email"].value;
    var pwd = document.forms["registerForm"]["password"].value;
    var cpwd = document.forms["registerForm"]["confirmPassword"].value;
    // Validation des champs
    if (fn === "" || ln === "" || bd === "" || ph === "" || em === "" || pwd === "" || cpwd === "") {
        alert("Tous les champs doivent être remplis");
        return false;
    }
});

// Redirection après soumission du formulaire d'inscription
document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('registerForm').addEventListener('submit', function(e) {
        e.preventDefault(); 
        window.location.href = 'index.html'; // Redirige vers 'index.html' après l'inscription
    });
});

// Redirection après soumission du formulaire de connexion
document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault(); 
        window.location.href = 'index.html'; // Redirige vers 'index.html' après la connexion
    });
});