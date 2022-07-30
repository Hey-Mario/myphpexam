<div id="container_etudiant" style="height: 100vh;" class="bg-image">
<div class="container">
<div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Liste  des etudiants</div>
<hr>
<table class="table table-striped table-borderless bg-transparant">
    <thead class="text-center text-dark bg-warning">
    <tr>
        <th>Photo</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date de Naissance</th>
        <th>Email</th>
        <th>CIN</th>
        <th>Telephone</th>
        <th>Nom sur Facebook</th>
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <th colspan="2">Action</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody class="text-center text-dark">
    <?php foreach($etudiants as $etudiant) { ?>
    <tr>
        <td><img src="./assets/pictures/<?= $etudiant['photo']?>" alt="" width="50" height="50" class="rounded-circle"></td>
        <td><?= $etudiant['nom']?></td>
        <td><?= $etudiant['prenom']?></td>
        <td><?= $etudiant['date_naissance']?></td>
        <td><?= $etudiant['email']?></td>
        <td><?= $etudiant['cin']?></td>
        <td><?= $etudiant['tel']?></td>
        <td><?= $etudiant['comptefb']?></td>
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <td><a href="./index.php?page=Ctrl_etudiants&view=edit&id=<?= $etudiant['id']?>" class="btn btn-sm bg-warning"><img src="./assets/img/edit.png" class=""></a></td>
        <td><a href="./index.php?page=Ctrl_etudiants&action=delete&id=<?= $etudiant['id']?>" class="btn btn-sm bg-danger"><img src="./assets/img/trash.png" class=""></a></td>
        <?php } ?>
    </tr>
    <?php } ?>
    </tbody>
</table>
<div class="text-center mb-3">
<?php if ($_SESSION["status"] == 'admin') {?>
<a href="./index.php?page=Ctrl_etudiants&view=add" class="btn btn-warning">Ajouter un etudiant</a>
<?php } ?>

</div>
</div>
</div>