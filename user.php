<!DOCTYPE html>
<html>
<body>
    <?php
    
    $conn = new mysqli("localhost", "user", "pass", "base");
    $resultat = $conn->query("SELECT * FROM apercus");
    ?>
    
    <h1>Hello user!</h1>
    
    <h3>Espace base de données</h3>

<table border ="1" cellpadding="5">
    <tr>
        <th>Nom</th>
        <th>Compétence</th>
        <th>Niveau</th>
    </tr>

   <h4>Ajouter une ligne</h4>
<form method="post" action="add.php">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="competence" placeholder="Compétence" required>
    <input type="text" name="niveau" placeholder="Niveau" required>
    <button type="submit">Ajouter</button>
</form>

