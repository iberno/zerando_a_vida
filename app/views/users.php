<?php require('partials/header.php'); ?>

<?php foreach ($users as $user) : ?>
    <li>
        <?= $user->name; ?>
    </li>
<?php endforeach; ?>



<?php require('partials/footer.php'); ?>