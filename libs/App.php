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

        public function SelectQueryExecuter($query){

            $rows=$this->link->query($query);

            return $rows;
        }

        public function Validate($array){

            if(in_array("",$array)){
                echo "Empty";
                return 0;
            }else{
                return 1;
            }

        }

        public function InsertQuery($query,$valueArray,$path){

            if($this->Validate($valueArray)==0){
                echo "<script>alert('ONE OR MORE FIELDS ARE EMPTY')</script>";
            }
            else{
                $insertRecord=$this->link->query($query);
                
                header("location:".$path."");
            }

        }

        public function UpdateQuery($query,$valueArray,$path){

            if($this->Validate($valueArray)==0){
                echo "ONE OR MORE FIELDS ARE EMPTY";
            }
            else{
                $UpdateRecord=$this->link->query($query);
                
                header("location:".$path."");
            }

        }

         public function DeleteQuery($query,$path){

                $UpdateRecord=$this->link->query($query);
                
                header("location:".$path."");
          
        }

        
         public function Register($query,$valueArray){

            if($this->Validate($valueArray)==0){
                echo "ONE OR MORE FIELDS ARE EMPTY";
            }
            else{
                
                $register_user=$this->link->prepare($query);
                $register_user->execute($valueArray);

                header("location:http://localhost/RESTORAN_PROJECT/auth/login.php");
                exit;
            }

        }
        
        public function Login($query,$data,$path){

                $login_user=$this->link->query($query);

                $fetch=$login_user->fetch(PDO::FETCH_OBJ);
                //retrives user data 

                if($login_user->rowCount()>0){

                    if(password_verify($data['password'],$fetch->password)){

                            $_SESSION['email']=$fetch->email;
                            $_SESSION['username']=$fetch->username;
                            $_SESSION['id']=$fetch->userId;


                            
                            header("location: $path");
                            exit;
                            //checks whether the provided password matches with hashed password in the database 

                    }else{
                        echo "INVALID USERNAME OR PASSWORD";
                    }
                }

        }

        public function StartingSession(){

            session_start();
        }

        public function ValidateSession($path){

            if(isset($_SESSION['id'])){
                header("location:".$path."");
            }
        }

    }

?>