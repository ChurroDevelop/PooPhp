<?php
    class Modelo{
        protected $id;
        protected $table;
        protected $dataBase;

        public function __construct($id, $table, PDO $connection)
        {
            $this->id = $id;
            $this->table = $table;
            $this->dataBase = $connection;
        }

        public function getAll(){
            $stm = $this->dataBase->prepare("SELECT * FROM {$this->table}");
            $stm->execute();
            return $stm->fetchAll();
        }
        
        public function getById($id){
            $stm = $this->dataBase->prepare("SELECT * FROM {$this->table} WHERE id = :id");
            $stm->bindValue(':id', $id);
            $stm->execute();
            return $stm->fetch();
        }
    }