<?php
//funcion de login, setear sesión

 //con el mismo constructo del modelo de login              session_start();

//Llamar a la funcion del modelo que devolverá true o false. Si devuelve true llamar a la vista para entrar a la principal




class LoginController
{
    use Controller;

    /* ~~~ CONTROLLER METHODS ~~~ */

    function login()
    {


    //     $employees = $this->model->get();
    //     if (isset($employees)) {
    //         $this->view->data = $employees;
    //         $this->view->render("employee/employeeDashboard");
    //     }

    header("Location:./views/main/main.php");
    //render
    }

   
}

//     function getEmployee($request)
//     {
//         $employee = null;
//         if (isset($request["id"])) {
//             $employee = $this->model->getById($request["id"]);
//         }

//         $this->view->action = $request["action"];
//         $this->view->data = $employee;
//         $this->view->render("employee/employee");
//     }

//     function createEmployee($request)
//     {
//         if (sizeof($_POST) > 0) {
//             $employee = $this->model->create($_POST);

//             if ($employee[0]) {
//                 header("Location: index.php?controller=Employee&action=getAllEmployees");
//             } else {
//                 echo $employee[1];
//             }
//         } else {
//             $this->view->action = $request["action"];
//             $this->view->render("employee/employee");
//         }
//     }

//     function updateEmployee($request)
//     {
//         if (sizeof($_POST) > 0) {
//             $employee = $this->model->update($_POST);

//             if ($employee[0]) {
//                 header("Location: index.php?controller=Employee&action=getAllEmployees");
//             } else {
//                 $this->action = $request["action"];
//                 $this->error = "The data entered is incorrect, check that there is no other employee with that email.";
//                 $this->view->render("employee/employee");
//             }
//         } else {
//             $this->view->render("employee/employee");
//         }
//     }

//     function deleteEmployee($request)
//     {
//         $action = $request["action"];
//         $employee = null;
//         if (isset($request["id"])) {
//             $employee = $this->model->delete($request["id"]);
//             header("Location: index.php?controller=Employee&action=getAllEmployees");
//         }
//     }
// }
