<?php namespace App\Models;
    use CodeIgniter\Model;


class UserModel extends Model  {

    public function getUser($data){

        $User = $this->db->table('users');
        $User ->where($data);

        return $User->get()->getResultArray();

    }


    public function registerUser($name, $lastname, $phone, $adress, $email, $user, $password) {
        $data = array(
            'name' => $name,
            'lastname' => $lastname,
            'phone'=> $phone,
            'adress'=> $adress,
            'email'=> $email,
            'user' => $user,
            'password' => $password
           
        );
        $this->db->table('users')->insert($data);
    }
    

}