<?php

class Metabot
{
    public $id;
    public $name;
    public $owner;

    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    static function get_all()
    {
        $db = new mysqli('localhost', 'root', '', 'metabot');

        if($db->connect_errno > 0){
            die('Unable to connect to database [' . $db->connect_error . ']');
        }

        $sql = "select * from metabot";
        $result = $db->query($sql);

        if(!$result){
            die('There was an error running the query [' . $db->error . ']');
        }

        $metabots = [];
        while($row = $result->fetch_assoc()){
           $metabots[] = new Metabot($row['id'], $row['name']);        
        }

        return $metabots;
    }
}

