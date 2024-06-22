<?php
    $title = "List of students";

    ob_start();
?>
<table>
    <tr style="border-bottom: 1px solid">
        <td>ID</td>
        <td>FULL NAME</td>
        <td>EMAIL</td>
        <td>OPERATION</td>
    </tr>
    <?php
        foreach ($students as $row){
    ?>
        <tr style="border-bottom: 1px solid">
            <td><?php echo $row['ID'] ?></td>
            <td><?php echo $row['NOM'] ?></td>
            <td><?php echo $row['EMAIL'] ?></td>                   
            <td>
                <a href="edit.php?id=<?php echo $row['ID'] ?>" style="background-color:blue;text-decoration:none;padding:2px;border-radius:3px;margin-right:3px;color:white;">Modifier</a>
                <a href="delete.php?id=<?php echo $row['ID'] ?>" style="background-color:red;text-decoration:none;padding:2px;border-radius:3px;margin-right:3px;color:white;">Supprimer</a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>
