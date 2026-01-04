// Lorsque je clique sur le bouton "filtrer", j'exécute la fonction suivante
document.getElementById("filtrer").onclick = () => {
  // Je récupère le contenu du fichier pokemon.json avec fetch
  fetch("pokemon.json")
    // Je convertis la réponse en JSON
    .then(response => response.json())
    // Je filtre les pokémons selon les critères et j'affiche les résultats
    .then(pokemons => {
      // Je récupère les valeurs des champs du formulaire
      const id = document.getElementById("id").value;
      const nom = document.getElementById("nom").value;
      const type = document.getElementById("type").value;
      
      // Je filtre les pokémons selon les critères
      // Si un champ est vide, je ne filtre pas sur ce critère
      const resultats = pokemons.filter(p => 
        (!id || p.id.toString() === id) &&
        (!nom || p.name.french.toLowerCase().includes(nom.toLowerCase())) &&
        (!type || p.type.includes(type))
      );
      
      // J'affiche les résultats sur la page
      const resultatsDiv = document.getElementById("resultats");
      resultatsDiv.innerHTML = resultats.length === 0 
        ? "<p>Aucun résultat trouvé.</p>"
        : `<ul>${resultats.map(p => `<li>ID: ${p.id} - Nom: ${p.name.french} - Type: ${p.type.join(", ")}</li>`).join("")}</ul>`;
    });
};

