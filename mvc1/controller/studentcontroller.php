<?php
    require_once 'model/student.php';
    function listStudentAction(){
        $students = list_student();
        require_once 'views/list_student.php';
    }
    function createAction(){
        require_once 'views/create.php';
    }
    function storeAction(){
        add();
        header('location:index.php');
    }
    function destroyAction(){

        destroy($_GET["id"]);
        header('location:index.php');
    }

    function editAction(){
        $data = veiw($_GET["id"]);
        require_once 'views/edit.php';
    }

    function updateAction(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $id = $_POST['id'];

        edit($id,$name,$email);
        header('location:index.php');
    }
?>
