<div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Modification d'un Prof</div>
<hr>

<div class="container w-75">
    <form action="/mine/PHP/index.php?page=Ctrl_profs&action=edit" method="post" class="form" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $prof['id'] ?>"><br>
    <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" value="<?= $prof['nom']?>" required class="form-control"><br>
    <label for="email">Email :</label><input type="email" name="email" id="email" class="form-control" value="<?= $prof['email']?>" required><br>
    <label for="tel" class="form-label">Telephone :</label><input type="text" min=1 name="tel" id="tel" required class="form-control" value="<?= $prof['tel']?>"><br>
    <label for="photo" class="form-label">Inserer votre photo :</label><input type="file" name="photo" id="photo" required class="form-control" value="<?= $prof['photo']?>"><br>
        
    <div class="text-center">
        <div class="mb-3">
        <button type="submit" name="update" class="btn btn-success">Valider</button>
        </div>
        <div class="col">
        <a href="/mine/PHP/index.php?page=Ctrl_profs" class="btn btn-dark">Liste des profs</a>
        </div>
    </div>
</form>
</div>