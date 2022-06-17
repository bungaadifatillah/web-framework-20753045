<?php
namespace App\Controllers;
use App\Models\Login;
class Pages extends BaseController {
    public function __construct(){
        $this->data = new Login();   
    } 
    public function index(){
        echo view ('login',['login'=> $this->data->first()]);
    }
    function add(){
        echo view('login',['login'=> $this->data->findAll()]);
    }
}