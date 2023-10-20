<?php
class Employee {
    private $connection;
    private $id ;
    private $name;
    private $age;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($id) {
        $this->id = $id;
    }

    public function insert() {
        $query = "INSERT INTO username (name, age) VALUES (:name, :age)";
        $stm = $this->connection->prepare($query);
        $result = $stm->execute(array(
            ":name" => $this->name,
            ":age"  => $this->age,
        ));
        $this->connection=NULL;
        return $result; // Trả về kết quả thực hiện truy vấn
    }
    public function getAll(){
        $query = "SELECT * FROM username";
        $stm = $this->connection->prepare($query);
        $stm->execute();
        $result = $stm->fetchAll();;
        $this->connection=NULL;
        return $result;
    }
    public function delete($id){
        $query = "DELETE FROM username WHERE id = :id";
        $stm = $this->connection->prepare($query);
        $result = $stm->execute(array(
            "id" => $id
        ));
    //     if (!$result) {
    //      echo "Error: " . implode(" ", $stm->errorInfo());
    //  }
        $this->connection = null;
        return $result;
    }
    public function getbyID($id){
        $query = "SELECT * FROM username WHERE id = :id ";
        $stm = $this->connection->prepare($query);
        $stm->execute(array(
            ":id" => $id
        ));
        $result = $stm->fetch();
        $this->connection=NULL;
        return $result;
    }
    public function update() {
        $query = "UPDATE username SET name = (:name), age = (:age) WHERE id = (:id)";
        $stm = $this->connection->prepare($query);
        $result = $stm->execute(array(
            ":name" => $this->name,
            ":id" => $this->id,
            ":age" => $this->age
        ));
        if (!$result) {
            echo "Error: " . implode(" ", $stm->errorInfo());
        }
        $this->connection=NULL ;
        return $result;
    }
    
}

?>