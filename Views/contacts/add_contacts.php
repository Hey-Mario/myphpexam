<div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Nouveau Contact</div>
<hr>

<div class="container w-75">
<form action="/mine/PHP/index.php?page=Ctrl_contacts&action=add" method="post" class="form">
    <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" required class="form-control"><br>
    <label for="email">Email :</label><input type="email" name="email" id="email" class="form-control" required><br>
    <label for="tel">Telephone :</label><input type="number" name="tel" id="tel" class="form-control" required><br>
    <div class="text-center">
        <div class="mb-3">
        <button type="submit" name="add" class="btn btn-primary">Enregistrer</button>
        </div>
        <div class="col">
        <a href="/mine/PHP/index.php?page=Ctrl_contacts" class="btn btn-dark">Liste des contacts</a>
        </div>
    </div>
</form>
</div>