// Lorsque je clique sur le bouton "update", j'exécute la fonction suivante
document.getElementById("update").onclick = () => {
  // Je récupère le contenu du fichier users.php avec fetch
  fetch("users.php")
    // Je convertis la réponse en JSON
    .then(response => response.json())
    // Je mets à jour le tableau avec les utilisateurs
    .then(users => {
      const tbody = document.querySelector("#table tbody");
      // Je vide le tableau
      tbody.innerHTML = "";
      
      // Si users est un tableau, j'affiche les utilisateurs
      if (Array.isArray(users)) {
        users.forEach(user => {
          // Je crée une ligne de tableau
          const row = document.createElement("tr");
          // Je remplis la ligne avec les données de l'utilisateur
          row.innerHTML = `
            <td>${user.id}</td>
            <td>${user.nom}</td>
            <td>${user.prenom}</td>
            <td>${user.email}</td>
          `;
          // J'ajoute la ligne au tableau
          tbody.appendChild(row);
        });
      } else {
        // Si c'est une erreur, j'affiche le message d'erreur
        tbody.innerHTML = `<tr><td>${users.error}</td></tr>`;
      }
    });
};

