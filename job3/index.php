<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Job 03</h1>
    <p>Téléchargez le fichier suivant : pokemon.json</p>
    <p>Créez un formulaire permettant de trier ces données.</p>
    <p>Il doit contenir les champs suivants :</p>
    <ul>
        <li>id (input type text)</li>
        <li>nom (input type text)</li>
        <li>type (liste déroulante &lt;select&gt;)</li>
        <li>filtrer (input type button)</li>
    </ul>
    <p>Lorsque l'on clique sur "filtrer", le script doit à l'aide de Fetch, récupérer le contenu du fichier et lister les éléments répondant aux critères sélectionnés en les affichant sur une page HTML.</p>
    
    <!-- Formulaire pour filtrer les pokémons -->
    <form id="form">
        <!-- Champ pour filtrer par ID -->
        <label for="id">ID :</label>
        <input type="text" id="id" name="id">
        
        <!-- Champ pour filtrer par nom -->
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        
        <!-- Liste déroulante pour filtrer par type -->
        <label for="type">Type :</label>
        <select id="type" name="type">
            <option value="">Tous</option>
            <option value="Grass">Grass</option>
            <option value="Poison">Poison</option>
            <option value="Fire">Fire</option>
            <option value="Water">Water</option>
            <option value="Bug">Bug</option>
            <option value="Electric">Electric</option>
            <option value="Normal">Normal</option>
            <option value="Flying">Flying</option>
            <option value="Ground">Ground</option>
            <option value="Fairy">Fairy</option>
            <option value="Fighting">Fighting</option>
            <option value="Psychic">Psychic</option>
            <option value="Rock">Rock</option>
            <option value="Ice">Ice</option>
            <option value="Steel">Steel</option>
            <option value="Ghost">Ghost</option>
            <option value="Dragon">Dragon</option>
        </select>
        
        <!-- Bouton pour lancer le filtrage -->
        <input type="button" id="filtrer" value="Filtrer">
    </form>
    
    <!-- Zone où les résultats seront affichés -->
    <div id="resultats"></div>
</body>
</html>