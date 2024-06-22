<?php
    $title = "Modify student";

    ob_start();
?>
<form method="post" action="update.php" >
        <lable for="name">Full name</lable><br>
        <input type="text" id="name" name="name" value="<?php echo $data[1] ;?>"><br>

        <lable for="email">Email</lable><br>
        <input type="text" id="email" name="email" value="<?php echo $data[2]; ?>"><br>

        <input type="hidden" value="<?php echo $data[0] ?>" name="id">

        <button type="submit">MODIFY</button>
</form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>
