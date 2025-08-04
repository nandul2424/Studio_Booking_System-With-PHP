


<?php 

require("../config/config.php");

//these are some queries to insert, select , update and delete data in the database.(database crud operations)
//take it only if you need , otherwise implement them in your way . 
//for these, values should be passed to this valueArray and the query has to be implement by respective developer. 
//lastly, the redirecting path has to be specified relative with the file structure. 

class DBQueries{



        public $host=HOST;
        public $dbname=DBNAME;
        public $user=USER;
        public $pass=PASS;

        public $link;

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
}






?>
