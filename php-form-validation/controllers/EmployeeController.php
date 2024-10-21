<?php 
   require("./models/Employee.php");
class EmployeeController {
    protected $employeeModel;
    public function __construct () {
        $this->employeeModel = new Employee();
    }
    public function index () {
        $employeeModel = new Employee();
        $employees = $employeeModel->all();
        require("./views/index.php");
    }
    public function view () {
        $employeeModel = new Employee();
        if ($_GET['id']) {
            $employee = $employeeModel->first($_GET['id']);
            require("./views/viewEmployee.php");
        }
        echo "Sth wrong";
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
            $isCreated = $this->employeeModel->create($_POST);
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