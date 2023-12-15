<?php
    
    class connect{
        var $db=null;
        public function __construct(){
            $host="localhost";
            $port="5432";
            $databasename="webmobile";
            $user = "postgres";
            $pass = "123456789a";
            $dns = "pgsql:host=".$host.";port=".$port.";dbname=".$databasename.";user=".$user.";password=".$pass;
            $this->db = new PDO($dns);

        }
        public function getList($select){
            $results=$this->db->query($select);
            return $results;
        }
        public function getInstance($select){
            $results=$this->db->query($select);
            $results=$results->fetch();
            return $results;
        }
        public function exec($select){
            $results=$this->db->query($select);
            return $results;
        }
    }
?>