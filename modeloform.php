<?php
    


    if(isset($_POST['name']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $pass = $_POST['password'];
        
        
        ####CREATE USERS####
        $user = new User("Joao","3","123");
        $array_nome = array("".$user->getName());$array_password = array("".$user->getPassword());$array_nivel = array("".$user->getNivel());
        $user = new User("JP","1","123");
        $array_nome = array("".$user->getName());$array_password = array("".$user->getPassword());$array_nivel = array("".$user->getNivel());
        $user = new User("Alvaro","2","123");
        array_push($array_nome,"".$user->getName());array_push($array_nivel,"".$user->getNivel());array_push($array_password,"".$user->getPassword());
        $user = new User("Mario","1","123");
        array_push($array_nome,"".$user->getName());array_push($array_nivel,"".$user->getNivel());array_push($array_password,"".$user->getPassword());
        
        ####VERIFIYNG USER####
    
        $find = false;
        $position = 0;

        for($i=0; $i<sizeof($array_nome);$i++){
            if($name == $array_nome[$i]){
                for($cont=0; $cont<sizeof($array_password);$cont++){
                    if($pass == $array_password[$cont]){
                        $find = true;
                        $position = $i;
                        $i = (sizeof($array_nome[$i]))+1;
                        $cont = (sizeof($array_password[$cont]))+1;

                    }
                    else{
                        $find = false;
                    }
                }
            }
            else{
                $find = false;
            }
        }

        if($find == false){
            echo "<div class='container' style='color:red;'>Nome de Utilizador e Password incorretos!</div>";
        }
        else{
            ####CREATE TABLE####
            ?>
            <div class="container">
                <h3>Bem Vindo <?php echo $name; ?></h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Nivel</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                        <?php
                            if($array_nivel[$position] == "1"){
                                $nivel = 0;
                                while(sizeof($array_nivel)>$nivel){
                                    if($array_nivel[$nivel] == "1"){
                                        ?>
                                            <tr>
                                                <td><?php echo $array_nome[$nivel]; ?></td>
                                                <td>1</td>
                                            </tr>
                                        <?php
                                    }

                                    $nivel++;
                                    
                                }
                            }
                            else if($array_nivel[$position] == "2"){
                                $nivel = 0;
                                while(sizeof($array_nivel)>$nivel){
                                    if($array_nivel[$nivel] == "2" || $array_nivel[$nivel] == "1"){
                                        ?>
                                        <tr>
                                            <td><?php echo $array_nome[$nivel]; ?></td>
                                            <td><?php echo $array_nivel[$nivel]; ?></td>
                                        </tr>
                                        <?php
                                    }
                                    $nivel++;
                                }
                            }
                            else{
                                $nivel = 0;
                                while(sizeof($array_nivel)>$nivel){
                                    
                                        ?>
                                            <tr>
                                            <td><?php echo $array_nome[$nivel]; ?></td>
                                            <td><?php echo $array_nivel[$nivel]; ?></td>
                                        </tr>
                                        <?php
                                    $nivel++;
                                }
                            }
                        ?>
                        
                    
                    </tbody>
                </table>
            </div>
        <?php
        }        
    }

?>