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

// ****************LOGIN & REGISTER****************





