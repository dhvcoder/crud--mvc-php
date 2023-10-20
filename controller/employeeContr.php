<?php 
class EmployeeContr {
    private $db ;
    private $connection;

    public function __construct()
    {
        require_once  __DIR__ . "/../model/employee.php";
        require_once  __DIR__ . "/../config/database.php";
        $this->db = new Dbh();
        $this->connection=$this->db->Connect();
    }
    public function addEmployee() {
        if(isset($_POST['submit'])){
            $employee = new Employee($this->connection);
            $employee->setName($_POST['name']);
            $employee->setAge($_POST['age']);
            $save = $employee->insert();
            if ($save){
                header("Location: index.php?page_layout=indexContr&action=danhsach");
            }else {
                echo "that baij";
            }   
        } 
    }
    public function getAllUser() {
        $employee = new Employee($this->connection);
        $employees = $employee->getAll();
        return $employees;
    }

    public function deleteUser() {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];
            $employee = new Employee($this->connection);
            $delete = $employee->delete($id);
            if($delete){
                header("Location: index.php?page_layout=indexContr&action=danhsach");
                exit();
            }
        }
    }
    public function getByID($id) {
        $employee = new Employee($this->connection);
        $getbyID = $employee->getbyID($id);
        return $getbyID;
    }
    
    public function Update() {
        if (isset($_POST['id_up']) && isset($_POST['name_up']) && isset($_POST['age_up']) && isset($_POST['submit_up'])) {
            $id = $_POST['id_up'];
            $name = $_POST['name_up'];
            $age = $_POST['age_up'];
            $employee = new Employee($this->connection);
            $employee->setID($id);
            $employee->setName($name);
            $employee->setAge($age);
            
            $update = $employee->update();
            if($update){
                header("Location: index.php?page_layout=indexContr&action=danhsach");
                exit();
            }
        }
    }
    
    
    
    
}
   
    $user = new EmployeeContr();
    $user->addEmployee();
    $user->deleteUser();
    $user->Update();
    
    
    
?>
