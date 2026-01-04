// Fonction qui prend une chaîne JSON et une clé, et retourne la valeur de cette clé
function jsonValueKey(jsonString, key) {
    // Je convertis la chaîne JSON en objet et je récupère la valeur de la clé
    try { return JSON.parse(jsonString)[key]; }
    // Si erreur, je retourne null
    catch { return null; }
}

// Chaîne de caractères au format JSON
const data = `{
    "name": "La Plateforme_",
    "address": "8 rue d'hozier",
    "city": "Marseille",
    "nb_staff": "11",
    "creation": "2019"
}`;

// J'appelle la fonction avec la chaîne JSON et la clé "city", puis j'affiche le résultat
console.log(jsonValueKey(data, "city"));
