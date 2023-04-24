<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function logged()
    {

        return view('home_user');
    }

    public function autors()
    {

        return view('autors');
    }

     
    public function m1()
    {

        return view('m1.html');
    }
    public function m2()
    {

        return view('m2.html');
    }
    public function m3()
    {

        return view('m3.html');
    }
    public function m4()
    {

        return view('m4.html');
    }
    public function m5()
    {

        return view('m5.html');
    }
    public function m6()
    {

        return view('m6.html');
    }
    public function m7()
    {

        return view('m7.html');
    }
    public function m8()
    {

        return view('m8.html');
    }
    
    public function m9()
    {

        return view('m9.html');
    }
    public function curriculum_anthony()
    {

        return view('curriculum_anthony.html');
    }

    public function curriculum_jorge()
    {

        return view('curriculum_jorge.html');
    }
  
  

    public function login()
    {

        $user = $this->request->getPost('user');
        $password = $this->request->getPost('password');


        $User = new UserModel();

        $dataU = $User->getUser(['user' => $user]);

        if (count($dataU) > 0 && password_verify($password, $dataU[0]['password'])) {

            $data = [

                "user" => $dataU[0]['user']

            ];
            $session = session();
            $session->set($data);
            echo "Sesión establecida";

            return redirect()->to(base_url('/public/homeuser'));

        } else {

            // Mostrar el mensaje de alerta
            session()->setFlashdata('alert', 'Usuario y/o Contraseña incorrectos, intentelo nuevamente.');

            // Redireccionar a la página principal
            return redirect()->to(base_url('/public'));
        }

    }



    public function register()
    {

        $name = $this->request->getPost('name');
        $lastname = $this->request->getPost('lastname');
        $phone = $this->request->getPost('phone');
        $adress = $this->request->getPost('adress');
        $email = $this->request->getPost('email');
        $user = $this->request->getPost('user');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $Usuario = new UserModel();
        $Usuario->registerUser($name, $lastname, $phone, $adress, $email, $user, $password);

        /* MIRAR LO DEL ALERT*/

        // Mostrar el mensaje de alerta
        session()->setFlashdata('alert', 'Usuario registrado exitosamente.');

        // Redireccionar a la página principal
        return redirect()->to(base_url('/public'));
    }

}