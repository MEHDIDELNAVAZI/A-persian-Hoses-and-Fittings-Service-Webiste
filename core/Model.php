<?php

namespace Core;

use mysqli;

class Model
{
    public $query, $table_name, $mysqli, $result, $error;
    public function __construct()
    {

        define("ROOT", dirname(__DIR__));
        include  ROOT . "/core/conf.php";
        $this->mysqli = new mysqli(servername, username, password, Db_name);
        $this->mysqli->set_charset('utf8');
    }
    public function __invoke($input)
    {
        $this->table_name = $input;
    }

    public function SQL_inject($input)
    {
        return trim($this->mysqli->real_escape_string($input));
    }

    public function SQL_injects($input = [])
    {
        for ($i = 0; $i < count($input); $i++) {
            $input[$i] = trim($this->mysqli->real_escape_string($input[$i]));
            return $input;
        }
    }


    public function  Query_runner($query)
    {
        return  $this->mysqli->query($query);
    }


    public function INSERT($col = [], $val = [])
    {
        $table_name  = $this->table_name;
        $col = $this->Datamaker($col);
        $val = $this->Datamaker($val, 1);
        $this->query = "INSERT INTO  `$table_name` ($col) VALUES  ($val) ";
        if ($this->query) {
            return $this->query;
        } else {
            return $this->query;
        }
    }

    public function Get_last_id()
    {
        return  $this->mysqli->insert_id;
    }

    public function get_error()
    {
        return  $this->error;
    }

    public function  __destruct()
    {
        $this->mysqli->close();
    }

    public function SELECT($where = [], $order = '', $limit = '')
    {
        $table_name = $this->table_name;
        $this->query = "SELECT * FROM  `$table_name`";
        if (count($where) == 3) {
            $sighnarray = ['=', '!=', '<', '<=', '>', '>=', 'LIKE'];
            if (in_array($where[1], $sighnarray)) {
                $this->query .= "WHERE  $where[0]  $where[1] '$where[2]' ";
            }
        }

        if ($order != '') {
            $this->query .= "ORDER BY" . $order;
        }

        if ($limit != '') {
            $this->query .= "LIMIT" . $limit;
        }
        return  $this->query;
    }


    public function Fetchassoc($query)
    {
        return   mysqli_fetch_assoc($query);
    }

    public function getrow($query)
    {
        return   mysqli_num_rows($query);
    }


    private function Datamaker($input = [], $flag = 0)
    {
        $output = "";
        if ($flag == 0) {
            for ($i = 0; $i < count($input); $i++) {
                $output .= $input[$i];
            }
        } else {
            for ($i = 0; $i < count($input); $i++) {
                $output .= '`' . $input[$i] . '`,';
            }
        }
        return  substr($output, 0, -1);  // returns "output but the last index is , we dont want that " 

    }


    public function  has_password($password)
    {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        return  $hashed_password;
    }
}
