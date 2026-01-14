<?php
require "connexion.php";

$stmt = mysqli_prepare(
    $conn,
    "INSERT INTO skill_matrix (nom, competence, niveau) VALUES (?, ?, ?)"
);
mysqli_stmt_bind_param($stmt, "sss",
    $_POST['nom'], $_POST['competence'], $_POST['niveau']
);
mysqli_stmt_execute($stmt);

header("Location: user.php");
