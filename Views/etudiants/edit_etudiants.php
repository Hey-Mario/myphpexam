<div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Modification d'un etudiant</div>
<hr>

<div class="container w-75">
    <form action="/mine/PHP/index.php?page=Ctrl_etudiants&action=edit" method="post" class="form" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $etudiant['id'] ?>"><br>
    <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" required class="form-control" value="<?= $etudiant['nom'] ?>"><br>
    <label for="prenom" class="form-label">Prenom :</label><input type="text" name="prenom" id="prenom" required class="form-control" value="<?= $etudiant['prenom'] ?>"><br>
    <label for="email">Email :</label><input type="email" name="email" id="email" class="form-control" required value="<?= $etudiant['email'] ?>"><br>
    <label for="date_naissance" class="form-label">Date de naissance :</label><input type="date" name="date_naissance" required class="form-control" value="<?= $etudiant['date_naissance'] ?>"><br>
    <label for="tel">Telephone :</label><input type="number" name="tel" id="tel" class="form-control" min=1 required value="<?= $etudiant['tel'] ?>"><br>
    <label for="cin">CIN :</label><input type="number" name="cin" id="cin" class="form-control" min=1 required value="<?= $etudiant['cin'] ?>"><br>
    <label for="comptefb" class="form-label">Nom sur fb :</label><input type="text" name="comptefb" id="comptefb" required class="form-control" value="<?= $etudiant['comptefb'] ?>"><br>
    <label for="photo" class="form-label">Photo :</label><input type="file" name="photo" id="photo" required class="form-control" value="<?= $etudiant['photo'] ?>"><br>
    <label for="password" class="form-label">Password :</label><input type="password" name="password" id="password" required class="form-control" value="<?= $etudiant['password'] ?>"><br>
    <div class="text-center">
            <div class="mb-3">
                <button type="submit" name="update" class="btn btn-success">Valider</button>
            </div>
            <div class="col">
                <a href="/mine/PHP/index.php?page=Ctrl_etudiants" class="btn btn-dark">Liste des etudiants</a>
            </div>
        </div>
    </form>
</div>