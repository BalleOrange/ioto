function agrandirImage(img) {
    var modal = document.querySelector('.modal');
    var imageAgrandie = modal.querySelector('.imageAgrandie');
    imageAgrandie.src = img.src; // Remplacer par le chemin de l'image à agrandir
    modal.style.display = 'flex'; // Afficher la fenêtre modale
}

function masquerAgrandi(modal) {
    modal.style.display = 'none'; // Cacher la fenêtre modale
}