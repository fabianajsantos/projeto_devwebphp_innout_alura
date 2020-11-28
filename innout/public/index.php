<?php


require_once(dirname(__FILE__, 2) . '\src\config\config.php');
require_once(dirname(__FILE__, 2) . '\src\models\User.php');

/*
//testando a conexao
//chamando um metodo estatico de uma classe  ::
//Database::getConnection();*/


/*testando o retorno do banco
//metodo para executar consulta no banco
$sql = 'select * from users';
$result = Database::getResultFromQuery($sql);

while ($row = $result->fetch_assoc()){//array associativo que mostra cada uma das linhas
print_r($row);
echo '<br>';
}*/


//testando importacao da classe model
                //$user = new User(['name' => 'Lucas', 'email' => 'lucas@gmail.com']); 
                //echo $user->getSelect();
                //pode ser substituído por:
                echo  User::getSelect(['id' => 1], 'name, email');
                //echo  User::getSelect(['name' => 'Chaves'], 'name, email');
                echo '<br>';
                echo  User::getSelect(['name' => 'Chaves', 'email '=> 'chaves@gmail.com']); //criterios usados como filtro para o select do model
                
                //$user->set('email', 'lucasalterado@gmail.com');
//print_r($user->get('email')); nao funcionou :(//
//print_r($user);


