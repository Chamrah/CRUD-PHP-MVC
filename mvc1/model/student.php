<?php 
        function database_connection(){
            return new PDO("mysql:host=localhost;dbname=mydb","root","ziadox123");;
        }
        function list_student(){
            $conn = database_connection();

            $data = $conn->query("SELECT * FROM etudiant")->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        function add(){
            $name = $_POST['name'];
            $email = $_POST['email'];

            $conn = database_connection();
            $sqlstate = $conn -> prepare('insert into etudiant values(NULL,?,?)');
            return $sqlstate -> execute([$name,$email]);
        }
        function destroy($id){
            $conn = database_connection();
            $query = $conn->prepare('DELETE FROM etudiant WHERE ID=?');
            $exe = $query->execute([$id]);
        }

        function veiw($id){
            $conn = database_connection();
            $res = $conn->prepare("SELECT * FROM etudiant WHERE ID=?");
            $res->execute([$id]);
            return $res->fetch(PDO::FETCH_NUM);
        }
        function edit($id,$name,$email){
            $conn = database_connection();
            $sqlstate = $conn -> prepare('UPDATE etudiant SET nom = ? , email = ? WHERE ID = ?');
            return $sqlstate -> execute([$name,$email,$id]);
        }
?>
