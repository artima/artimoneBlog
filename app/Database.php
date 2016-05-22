<?php
/**
 * Created by PhpStorm.
 * User: Mitra
 * Date: 22/05/2016
 * Time: 12:14
 */

namespace App;


class Database
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPDO()
    {
        $pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $count = $pdo->exec('INSERT  INTO article SET titre="Nom titre", date="' . date('Y-m-d H:i:s') . '"');
        $this->pdo;
        return 
    }

    public function query($statement)
    {
        $this->getPDO()
    }

}