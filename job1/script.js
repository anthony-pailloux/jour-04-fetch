// Ajout d'un gestionnaire d'événement sur le clic du bouton
// Lorsque que je clique sur le bouton avec l'id "button", j'execute la fonction suivante
document.getElementById("button").onclick = () => {
  // Utilisation de l'API Fetch pour récupérer le contenu du fichier "expression.txt"
  fetch("expression.txt")
    // conversion de la réponse HTTP en texte grâce à la méthode text()
    .then(response => response.text())
    // ajout du texte récupéré dans le body de la page HTML grâce à la méthode innerHTML
    .then(text => document.body.innerHTML += `<p>${text}</p>`);
};