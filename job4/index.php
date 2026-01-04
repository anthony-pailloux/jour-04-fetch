<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Job 04</h1>
    <p>Créez une base de données "utilisateurs" contenant une table "utilisateurs" et ayant comme champs "id", "nom", "prenom" et "email".</p>
    <p>Ajoutez des utilisateurs directement dans phpmyadmin.</p>
    <p>Créez une page users.php qui se connecte à la base de données, récupère l'ensemble des utilisateurs et affiche ces informations au format json.</p>
    <p>Dans votre page index.php, créez un tableau &lt;table&gt; permettant de contenir ces informations ainsi qu'un &lt;button&gt; "update". Lorsque l'on clique sur ce bouton, le tableau doit se mettre à jour et contenir l'ensemble des informations des utilisateurs présents dans la base de données.</p>
    <p>Vous pouvez tester votre code en ajoutant/supprimant des utilisateurs à l'aide de phpmyadmin entre deux clics.</p>
    
    <!-- Bouton pour mettre à jour le tableau -->
    <button id="update">Update</button>
    
    <!-- Tableau pour afficher les utilisateurs -->
    <table id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
        </thead>
        <!-- Corps du tableau où les utilisateurs seront affichés -->
        <tbody></tbody>
    </table>
</body>
</html>

