<?php
require "connexion.php";

$id = intval($_GET['id']);
mysqli_query($conn, "DELETE FROM skill_matrix WHERE id=$id");

header("Location: user.php");
