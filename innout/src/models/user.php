<?php
require_once(realpath(MODEL_PATH . '/Model.php'));



class User extends Model
{

    //especificando os valores que foram definidos no model
    protected static $tableName = 'users';
    protected static $columns = [

        'id',
        'name',
        'email',
        'password',
        'email',
        'start_date',
        'end_date',
        'is_admin',

    ];
}
