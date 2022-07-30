<div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Modification d'un contact</div>
<hr>

<div class="container w-75">
    <form action="/mine/PHP/index.php?page=Ctrl_contacts&action=edit" method="post" class="form">
        <input type="hidden" name="id" value="<?= $contact['id'] ?>"><br>
        <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" value="<?= $contact['nom'] ?>" required class="form-control"><br>
        <label for="email">Email :</label><input type="email" name="email" id="email" class="form-control" value="<?= $contact['email'] ?>" required><br>
        <label for="tel">Telephone :</label><input type="number" name="tel" id="tel" class="form-control" value="<?= $contact['tel'] ?>" required><br>
        <div class="text-center">
            <div class="mb-3">
                <button type="submit" name="update" class="btn btn-success">Valider</button>
            </div>
            <div class="col">
                <a href="/mine/PHP/index.php?page=Ctrl_contacts" class="btn btn-dark">Liste des contacts</a>
            </div>
        </div>
    </form>
</div>