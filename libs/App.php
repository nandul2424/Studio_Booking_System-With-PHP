<?php 

    require("../config/config.php");


    class App{

        public $host=HOST;
        public $dbname=DBNAME;
        public $user=USER;
        public $pass=PASS;

        public $link;

        public function __construct()
        {
            $this->Connect();
            //connect to the databse server and to the database
            //every time this class is initiated.
        }

        public function Connect(){

            $dsn="mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8mb4";

            $this->link=new PDO($dsn,$this->user,$this->pass);

            if(!($this->link)){
                echo "DATABASE CONNECTION IS FAILED";
            }else{
                echo "DATABASE IS CONNECTED";
            }
        }

        
    }

?>