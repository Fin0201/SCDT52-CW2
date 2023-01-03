<?php

class Controllers {

    protected $db = null;
    protected $members = null;
    protected $products = null;

    public function __construct()
    {
        //----TEMP----//

        $type ='mysql';
        $server = '127.0.0.1';
        $db = 'shop';
        $port = '3306';
        $charset = 'latin1';

        $username = 'root';
        $password = '';
    
         //----TEMP----//

        $dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";
    
        try {
            $this->db = new DatabaseController($dsn, $username, $password); 
        }
        catch (PDOException $e) {
            throw new PDOException($e -> getMessage(), $e -> getCode());
            echo $e;
        }
    }

    public function members()
    {
        if ($this->members === null) {
            $this->members = new MemberController($this->db);
        }
        return $this->members;
    }

    public function products()
    {
        if ($this->products === null) {
            $this->products = new ProductController($this->db);
        }
        return $this->products;
    }
}