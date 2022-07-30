<div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Nouveau Prof</div>

<hr>

<div class="container w-75">
    <form action="./index.php?page=Ctrl_profs&action=add" method="post" class="form" enctype="multipart/form-data">
        <label for="nom" class="form-label">Nom :</label><input type="text" name="nom" id="nom" required class="form-control"><br>
        <label for="email">Email :</label><input type="email" name="email" id="email" class="form-control" required><br>
        <label for="tel" class="form-label">Telephone :</label><input type="text" min=1 name="tel" id="tel" required class="form-control"><br>
        <label for="photo" class="form-label">Inserer votre photo :</label><input type="file" name="photo" id="photo" required class="form-control"><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Choisir votre module</option>
            <?php foreach($modules as $module) { ?>
            <option value="<?= $module['nom']?>"><?= $module['nom']?></option>
            <?php } ?>
        </select>
        <div class="text-center">
            <div class="mb-3">
                <button type="submit" name="add" class="btn btn-primary">Enregistrer</button>
            </div>
            <div class="col">
                <a href="./index.php?page=Ctrl_profs" class="btn btn-dark">Liste des profs</a>
            </div>
        </div>
    </form>
</div>