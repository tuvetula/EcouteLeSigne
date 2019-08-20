var content = document.querySelector('#hamburger-content');
var sidebarBody = document.querySelector('#hamburger-sidebar-body');
var button = document.querySelector('#hamburger-button');
var overlay = document.querySelector('#hamburger-overlay');
var activatedClass = 'hamburger-activated';

//Le contenu d'hamburger-content = contenu de hamburger-sidebar-body
sidebarBody.innerHTML = content.innerHTML;

//Evenement click sur bouton hamburger (Ajoute la class "hamburger-activated")
button.addEventListener('click', function(e) {
    e.preventDefault();
    this.parentNode.classList.add(activatedClass);
});

//Si le parent du bouton contient la class "hamburger-activated" et qu'on appui sur la touche echap alors suppression de la classe
button.addEventListener('keydown', function(e) {
    if (this.parentNode.classList.contains(activatedClass)) {
        if (e.repeat === false && e.which === 27)
            this.parentNode.classList.remove(activatedClass);
    }
});

overlay.addEventListener('click', function(e) {
    e.preventDefault();
    this.parentNode.classList.remove(activatedClass);
});