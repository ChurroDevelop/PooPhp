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

        public function store($data){
            // Sentencia SQL
            $sql = "INSERT INTO {$this->table}(";
            
            // Agregar los datos a ingresar
            foreach ($data as $key => $value) {
                $sql .= "{$key},";
            }
            // Eliminar la ultima coma
            $sql = trim($sql, ",");
            $sql .= ") VALUES (";
            
            // Agregar los VALUES
            foreach ($data as $key => $value) {
                $sql .= ":{$key},";
            }
            // Eliminar la ultima coma
            $sql = trim($sql, ",");
            $sql .= ")";

            $stm = $this->dataBase->prepare($sql);

            // Bindiar los valores para la consulta
            foreach ($data as $key => $value) {
                $stm->bindValue(":{$key}", $value);
            }


            // Manejo de errores
            try {
                if ($stm->execute()) {
                    echo "<p> SE AGREGO EL NUEVO USUARIO </p>";
                    return $this->dataBase->lastInsertId();
                }
            } catch (\Throwable $th) {
                echo "<p> ERROR: {$th} </p>";
            }
        }

        public function update($id, $data){
            // Sentencia sql
            $sql = "UPDATE {$this->table} SET ";

            foreach ($data as $key => $value) {
                $sql .= "{$key} = :{$key},";
            }
            $sql = trim($sql, ",");
            $sql .= " WHERE id = :id";

            $stm = $this->dataBase->prepare($sql);

            foreach ($data as $key => $value) {
                $stm->bindValue(":{$key}", $value);
            }

            $stm->bindValue(":id", $id);

            echo "<p> {$sql} </p>";

            try {
                echo "<p> SE MODIFICO EL USUARIO CON EL ID {$id}";
                $stm->execute();
            } catch (\Throwable $th) {
                echo "<p> ERROR {$th} </p>" ;
            }
        }

        public function destroy($id){
            $sql = "DELETE FROM {$this->table} WHERE id = :id";
            $stm = $this->dataBase->prepare($sql);
            $stm->bindValue(":id", $id);
            $stm->execute();
            echo "<p> SE ELIMINO EL USUARIO CON EL ID {$id} </p>";
        }
    }