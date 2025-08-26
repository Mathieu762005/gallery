<?php
session_start();
require_once 'data/users.php';

function gallery($nombre, $sexe, $users)
{
    $i = 0;
    foreach ($users as $user) {
        if ($user['sexe'] == $sexe && $i < $nombre) {
            echo '<div class="col-md-3 text-center mb-4">';
            echo '<img src="assets/img/' . $user['photo'] . '" alt="' . $user['prenom'] . ' ' . $user['nom'] . '" class="img-fluid rounded shadow">';
            echo '<p class="mt-2">' . $user['prenom'] . ' ' . $user['nom'] . '</p>';
            echo '</div>';
            $i++;
        }
    }
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Ma Galerie</a>
            </div>
        </nav>
    </header>

    <main class="py-5">
        <div class="container">
            <h1 class="mb-4 text-center">Gallery</h1>
            <div class="row">
                <?php gallery(2, 'Homme', $users); ?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>