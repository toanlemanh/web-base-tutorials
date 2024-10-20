<?php 
   require("./models/Employee.php");
class EmployeeController {
    protected $employee;
    public function __construct () {
        $this->employee = new Employee();
    }
    public function index () {
        $employee = new Employee();
        $employees = $employee->all();
        require("./views/index.php");
    }
    public function view () {

    }
    /**
     * GET to createEmployee view
     * @return void
     */
    public function create () {
        $errors = [];
        require("./views/createEmployee.php");
    }
    /**
     * POST to createEmployee view
     * @return void
     */
    public function store () {
        $errors = [];
        if (strlen($_POST['firstname']) === 0) {
            $errors['firstname'] = "First name is required";
        }

        if (strlen($_POST['lastname']) === 0) {
            $errors['lastname'] = "Last name is required";
        }

        if (count($errors) === 0) {
            $isCreated = $this->employee->create($_POST);
            if ($isCreated) {
                header('location: index.php?controller=employee&action=index');
            }
        }
        
        require('./views/createEmployee.php');
    }
    /**
     * GET to editEmployee view
     * @return void
     */
    public function edit () {

    }
    /**
     * POST to editEmployrr view
     * @return void
     */
    public function update() {

    }
    /**
     * GET in this index view
     * @return void
     */
    public function delete(){

    }
}