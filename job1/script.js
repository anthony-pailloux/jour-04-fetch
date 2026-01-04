// Lorsque je clique sur le bouton avec l'id "button", j'exécute la fonction suivante
document.getElementById("button").onclick = () => {
  // Je récupère le contenu du fichier "expression.txt" avec fetch
  fetch("expression.txt")
    // Je convertis la réponse en texte
    .then(response => response.text())
    // J'ajoute le texte dans un paragraphe <p> et je l'insert dans le corps de la page
    .then(text => document.body.innerHTML += `<p>${text}</p>`);
};