<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP jQuery&Ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="homepage.php">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <div class="container mt-5" id="form">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5">Inscription</h1>
                <hr />
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Addresse Email</label>
                        <input type="email" class="form-control" id="login" aria-describedby="emailHelp" required>
                        <div class="elem orm-text text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" required>
                        <div class="elem form-text text-danger"></div>
                    </div>
                    <div class="mb-3 form-check">
                        <small><a href="">Politique de confidentialité</a></small>
                        <hr />
                        <input type="checkbox" class="form-check-input" id="checkbox" required>
                        <label class="form-check-label" for="exampleCheck1">J'accepte</label>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary btn-lg" id="btnData">S'enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <!-- PIED DE PAGE -->
    </footer>
    <script>
        let element = document.getElementById("checkbox");
        // Par exemple pour détecter un clic sur un lien
        element.addEventListener("click", function(e) {
            e.preventDefault(); // Annule l'évènement
            e.stopPropagation(); // Empèche l'évènement de remonter vers les éléments parents
            console.log(e.target); // contient l'élément sur lequel on a cliqué
            console.log(e.currentTarget); // contient l'élément sur lequel on a greffé l'écouteur
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/lib/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>