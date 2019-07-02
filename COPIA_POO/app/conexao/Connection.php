<?php
    class Connection {

        private static $conexao;

        public function conectar(){
            try{
                if (!isset(self::$conexao)) {
                    //Não é $Conexao
                    self::$conexao = new pdo("mysql:host=localhost; dbname=tcc_atualizado","root",""); //;
                }

            }catch(PDOException $e){
                echo "Erro ao conectar ao banco ".$e->getMessage(); //método
            }
            return self::$conexao; //;
        }
    }


//        //atributos
//        public $connection;
//
//        public function __construct(){
//            $this->connection = new PDO("mysql:host=localhost;dbname=tcc;", "root", "");
//        }
//
//        public function getConnection(){
//            return $this->$conexao;
//        }




//Teste
//$conexao = new Connection();
//$conexao->getConnection();

