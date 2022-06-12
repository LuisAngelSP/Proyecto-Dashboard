<?php 

    class Conectar{
        
        protected $dbh;
        protected function conexion(){

            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=crud","root","");
                return $conectar;


            }catch(Exception $e){
                print "¡ERROR BD!" . $e->getMessage()."<br>";
                die();
            }
        }

        public function set_name(){

            # con esta funcion nos va a ayudar a no tener problemas con las tildes o ñ

            return $this->dbh->query("SET NAMES 'utf8'");
        }



    }




?>