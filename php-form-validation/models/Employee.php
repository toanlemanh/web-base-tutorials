<?php 
require("./models/Model.php");
class Employee extends Model{
    // function all => get all element
    public function all(){
        // connect database
       
        // select all
        try {
            $query = "SELECT * FROM EMPLOYEE";
            $result = $this->dbConnection->query($query);
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (Exception) {
           die("Cannot query");
        }
        finally {
            $this->dbConnection->close();
        }
       
        
    }
    // function first => get element by id
    public function first($id){
        // connect database
       $query = "SELECT * FROM EMPLOYEE WHERE ID = ?";
        // select all
        try {
            $employee = new Employee();
            $stm = $employee->dbConnection->prepare($query);
            $result = $stm->execute([$id]);
            return $result;
        } catch (Exception) {
           die("Cannot query first");
        }
        finally {
            $this->dbConnection->close();
        }
       
        
    }

    // function create => post element
    public function create($data) {
        $query = "INSERT INTO EMPLOYEE (FIRSTNAME, LASTNAME) VALUE (?, ?)";
        try {
            $employee = new Employee();
            $stm = $employee->dbConnection->prepare($query);
            $result = $stm->execute([$data["firstname"], $data["lastname"]]);
            return $result;
        }
        catch (Exception) {
            die("Cannot create query");
        }
        finally {
            $employee->close();
        }
    }

    // function update => update element by id

    // function delete => delete element by id
}