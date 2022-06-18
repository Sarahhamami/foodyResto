<?php
class DB{
    private  $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database='gestion_livraison';
    private $db;
            public function __construct($servername=null, $username=null, $password=null, $database=null){
                if ($servername!=null){
                $this->servername= $servername;
                $this->username= $username;
                $this->password=$password;
                $this->database=$database;
               }
                try{
                    
                    $this->db = new PDO("mysql:host=".$this->servername.";dbname=".$this->database, $this->username, $this->password);
                
                }catch(PDOException $e){
                    die ("ERROR CONNECTION!");
                }
                //On établit la connexion
                
            }

            public function query($sql){
                    $req=$this->db->prepare($sql);
                    $req->execute();
                    return $req->fetch(PDO::FETCH_OBJ);
            }

        }
?>