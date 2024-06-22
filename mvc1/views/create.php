<?php
    $title = "Add student";

    ob_start();
?>

<form method="post" action="store.php">
        <lable for="name">Full name</lable><br>
        <input type="text" id="name" name="name"><br>

        <lable for="email">Email</lable><br>
        <input type="email" id="eamil" name="email"><br>

        <button type="submit" name="ajouter">ADD</button>
</form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>
