<?php

class Login extends Controller {
    public function index(){
        $this->view('Login/index');
    }

    public function auth(){
       $id =  $this->model('LoginAuth')->authLogin();

       
    }

}