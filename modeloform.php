<?php
    
    if(isset($_POST['name']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $pass = $_POST['password'];
        $user = new User("Joao","3","123");
        $array_workers = array("".$user->getName(),"".$user->getNivel(),"".$user->getPassword());
        $user = new User("Alvaro","2","123");
        $array_director = array("".$user->getName(),"".$user->getNivel(),"".$user->getPassword());
        $user = new User("Mario","1","123");
        $array_admin = array("".$user->getName(),"".$user->getNivel(),"".$user->getPassword());

    
        if($name == $array_workers[0]){
            if($pass == $array_workers[2]){
                Workers($name,$array_workers);
            }
            else{
                echo "Nome de Utilizador e Password incorretos.!";
            }
        }
        else if($name == $array_director[0]){
            if($pass == $array_director[2]){
                Directors();
            }
            else{
                echo "Nome de Utilizador e Password incorretos.!";
            }
        }
        else if($name == $array_admin[0]){
            if($pass == $array_admin[2]){
                Admins();
            }
            else{
                echo "Nome de Utilizador e Password incorretos.!";
            }
        }
        else{
            echo "Nome de Utilizador e Password incorretos.!";
        }




        
    }

    function Workers($name,$array_workers){
        ?>
            <h3>Bem Vindo <?php echo $name; ?></h3>
            <table class="table">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nivel</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php ?></td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                </tbody>
            </table>
        <?php
    }
    function Directors(){

    }
    function Admins(){

    }
?>