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
$user = new User(['name'=>'Lucas']);
print_r($user);
echo('fim');


