<div id="container_contact" class="bg-image">
<div class="container">
<div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Liste  des contacts</div>
<hr>
<table class="table table-striped table-borderless bg-transparant">
    <thead class="text-center text-dark bg-primary">
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Telephone</th>
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <th colspan="2">Action</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody class="text-center">
    <?php foreach($contacts as $contact) { ?>
    <tr>
        <td><?= $contact['nom']?></td>
        <td><?= $contact['email']?></td>
        <td><?= $contact['tel']?></td>
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <td><a href="./index.php?page=Ctrl_contacts&view=edit&id=<?= $contact['id']?>" class="btn btn-sm btn-warning"><img src="./assets/img/edit.png" class=""></a></td>
        <td><a href="./index.php?page=Ctrl_contacts&action=delete&id=<?= $contact['id']?>" class="btn btn-sm btn-danger"><img src="./assets/img/trash.png" class=""></a></td>
        <?php } ?>
    </tr>
    <?php } ?>
    </tbody>
</table>
<div class="text-center mb-3">
<?php if ($_SESSION["status"] == 'admin') {?>
<a href="./index.php?page=Ctrl_contacts&view=add" class="btn btn-primary">Ajouter un contact</a>
<?php } ?>

</div>
</div>
</div>