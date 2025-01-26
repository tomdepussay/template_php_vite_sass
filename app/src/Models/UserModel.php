<?php 

namespace App\Models;

use App\Core\Database;

class UserModel {

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function all(): array
    {
        return $this->db->query('SELECT * FROM user')->fetchAll(\PDO::FETCH_ASSOC);
    }
}