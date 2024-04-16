<?php

namespace App\Models;

class AuthModel
{
    protected $ionAuth;
    protected $db;
    protected $table;

    public function __construct()
    {
        $this->ionAuth = config('Config\IonAuth');
        $this->db = db_connect(empty($dbGroup = $this->ionAuth->databaseGroupName) ? NULL : $dbGroup);
    }

    public function getUsers($select = [], $where = [])
    {
        $this->table = $this->ionAuth->tables['users'];
        return $this->db->table($this->table)->select($select)->where($where)->get()->getResult();
    }

    public function getUsersGroupByUserId($userId = 0)
    {
        return $this->db->table($this->ionAuth->tables['users_groups'])->select(['group_id as id','name', 'description'])->join($this->ionAuth->tables['groups'], $this->ionAuth->tables['users_groups'] . ".group_id = " . $this->ionAuth->tables['groups'] . ".id")->where('user_id', $userId)->get()->getResult();
    }
}
