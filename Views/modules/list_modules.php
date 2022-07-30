<div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Liste  des modules</div>
<hr>
<table class="table table-striped table-borderless table-success">
    <thead class="text-center text-dark bg-success">
    <tr>
        <th>Nom</th>
        <th>Code</th>
        <th>Heure</th>
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <th colspan="2">Action</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody class="text-center">
    <?php foreach($modules as $module) { ?>
    <tr>
        <td><?= $module['nom']?></td>
        <td><?= $module['code']?></td>
        <td><?= $module['heure']?></td>
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <td><a href="./index.php?page=Ctrl_modules&view=edit&id=<?= $module['id']?>" class="btn btn-sm bg-dark"><img src="./assets/img/edit.png" class=""></a></td>
        <td><a href="./index.php?page=Ctrl_modules&action=delete&id=<?= $module['id']?>" class="btn btn-sm bg-dark"><img src="./assets/img/trash.png" class=""></a></td>
        <?php } ?>
    </tr>
    <?php } ?>
    </tbody>
</table>
<div class="text-center mb-3">
<?php if ($_SESSION["status"] == 'admin') {?>
<a href="./index.php?page=Ctrl_modules&view=add" class="btn btn-success">Ajouter un module</a>
<?php } ?>

</div>