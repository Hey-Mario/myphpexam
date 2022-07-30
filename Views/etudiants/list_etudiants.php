<div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Liste  des etudiants</div>
<hr>
<table class="table table-striped table-borderless table-success">
    <thead class="text-center text-dark bg-success">
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
    <tbody class="text-center">
    <?php foreach($etudiants as $etudiant) { ?>
    <tr>
        <td><?= $etudiant['photo']?></td>
        <td><?= $etudiant['nom']?></td>
        <td><?= $etudiant['prenom']?></td>
        <td><?= $etudiant['date_naissance']?></td>
        <td><?= $etudiant['email']?></td>
        <td><?= $etudiant['cin']?></td>
        <td><?= $etudiant['tel']?></td>
        <td><?= $etudiant['comptefb']?></td>
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <td><a href="/mine/PHP/index.php?page=Ctrl_etudiants&view=edit&id=<?= $etudiant['id']?>" class="btn btn-sm bg-dark"><img src="/mine/PHP/assets/img/edit.png" class=""></a></td>
        <td><a href="/mine/PHP/index.php?page=Ctrl_etudiants&action=delete&id=<?= $etudiant['id']?>" class="btn btn-sm bg-dark"><img src="/mine/PHP/assets/img/trash.png" class=""></a></td>
        <?php } ?>
    </tr>
    <?php } ?>
    </tbody>
</table>
<div class="text-center mb-3">
<?php if ($_SESSION["status"] == 'admin') {?>
<a href="/mine/PHP/index.php?page=Ctrl_etudiants&view=add" class="btn btn-success">Ajouter un etudiant</a>
<?php } ?>

</div>