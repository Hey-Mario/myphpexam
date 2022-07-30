<div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Liste  des professeurs</div>
<hr>
<table class="table table-striped table-borderless table-success">
    <thead class="text-center text-dark bg-success">
    <tr>
        <th>Photo</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Module</th>
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <th colspan="2">Action</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody class="text-center">
    <?php foreach($profs as $prof) { ?>
    <tr>
        <td><img src="./assets/pictures/<?= $prof['photo']?>" alt="" width="50" height="50" class="rounded-circle"></td>
        <td><?= $prof['nom']?></td>
        <td><?= $prof['email']?></td>
        <td><?= $prof['tel']?></td>
        <td><?= $prof['module']?></td>
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <td><a href="./index.php?page=Ctrl_profs&view=edit&id=<?= $prof['id']?>" class="btn btn-sm bg-dark"><img src="./assets/img/edit.png" class=""></a></td>
        <td><a href="./index.php?page=Ctrl_profs&action=delete&id=<?= $prof['id']?>" class="btn btn-sm bg-dark"><img src="./assets/img/trash.png" class=""></a></td>
        <?php } ?>
    </tr>
    <?php } ?>
    </tbody>
</table>
<div class="text-center mb-3">
<?php if ($_SESSION["status"] == 'admin') {?>
<a href="./index.php?page=Ctrl_profs&view=add" class="btn btn-success">Ajouter un prof</a>
<?php } ?>

</div>