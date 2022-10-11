<?php


class LoginModel extends Model
{


    function get()
    {
        $query = $this->db->connect()->prepare("SELECT email, password
        FROM members;");   
        try {
            $query->execute();
            $loginh = $query->fetchAll();
            print_r($login);
            return $loginh;
        } catch (PDOException $e) {
            return [];
        }
    }
}
    

//     function getById($id)
//     {
//         $query = $this->db->connect()->prepare("SELECT id, name, last_name, email, gender_id, avatar, age, phone_number, city, street_address, state, postal_code
//         FROM employees e
//         WHERE id = $id;");

//         try {
//             $query->execute();
//             $employee = $query->fetch();
//             return $employee;
//         } catch (PDOException $e) {
//             return [];
//         }
//     }

//     function create($employee)
//     {
//         $query = $this->db->connect()->prepare("INSERT INTO employees (name, last_name, email, gender_id, city, street_address, state, age, postal_code, phone_number)
//         VALUES
//         (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

//         $query->bindParam(1, $employee["name"]);
//         $query->bindParam(2, $employee["last_name"]);
//         $query->bindParam(3, $employee["email"]);
//         $query->bindParam(4, $employee["gender_id"]);
//         $query->bindParam(5, $employee["city"]);
//         $query->bindParam(6, $employee["street_address"]);
//         $query->bindParam(7, $employee["state"]);
//         $query->bindParam(8, $employee["age"]);
//         $query->bindParam(9, $employee["postal_code"]);
//         $query->bindParam(10, $employee["phone_number"]);

//         try {
//             $query->execute();
//             return [true];
//         } catch (PDOException $e) {
//             return [false, $e];
//         }
//     }

//     function update($employee)
//     {
//         $query = $this->db->connect()->prepare("UPDATE employees
//         SET name = ?, last_name = ?, email = ?, gender_id = ?, city = ?, street_address = ?, state = ?, age = ?, postal_code = ?, phone_number = ? 
//         WHERE id = ?;");

//         $query->bindParam(1, $employee["name"]);
//         $query->bindParam(2, $employee["last_name"]);
//         $query->bindParam(3, $employee["email"]);
//         $query->bindParam(4, $employee["gender_id"]);
//         $query->bindParam(5, $employee["city"]);
//         $query->bindParam(6, $employee["street_address"]);
//         $query->bindParam(7, $employee["state"]);
//         $query->bindParam(8, $employee["age"]);
//         $query->bindParam(9, $employee["postal_code"]);
//         $query->bindParam(10, $employee["phone_number"]);
//         $query->bindParam(11, $employee["id"]);

//         try {
//             $query->execute();
//             return [true];
//         } catch (PDOException $e) {
//             return [false, $e];
//         }
//     }

//     function delete($id)
//     {
//         $query = $this->db->connect()->prepare("DELETE FROM employees WHERE id = ?");
//         $query->bindParam(1, $id);

//         try {
//             $query->execute();
//             return [true];
//         } catch (PDOException $e) {
//             return [false, $e];
//         }
//     }
//  }


//  $pruebaInstancia = new LoginModel();
//  $pruebaInstancia->get();