<?php
    class DbManager {
        protected $bdd;

        private $host = 'localhost';
        private $database = 'sherlock_contact';
        private $username= 'root';
        private $password = '';

        public function __construct(){
            try {
                $this->bdd = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database . ';charset=UTF8', $this->username, $this->password);
                $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(Exception $ex) {
                die('Error '. $ex->getMessage());
            }
        }
    }
?>
