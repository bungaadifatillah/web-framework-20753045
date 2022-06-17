<?php
namespace App\Controllers;
class Auth extends BaseController {
	public function index() {
		$UserModel = new \App\Models\UserModel();
		$auth = $this->request->getPost('auth');
		if($auth){
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');
			if($username == '' or $password == '') {
				$err = "Silahkan Masukkan Username dan Password";
			}
			if(empty($err)){
				$datauser = $UserModel->where("username", $username)->first();
				if($datauser['password']!=md5($password)) {
					$err = "Password Salah!";
		   		}
		   	}
		   if(empty($err)){
		   	$usersesi = [
		   		'user_id'=>$datauser['user_id'],
		   		'username'=>$datauser['username'],
		   		'password'=>$datauser['password'],
		   	];
		   	session()->set($usersesi);
		   	return redirect()->to('pages');
		    }
		    if($err){
		    	session()->setFlashdata('username', $username);
		    	session()->setFlashdata('error', $err);
		    	return redirect()->to("auth");
		    }
		}
		echo view('index');
	}
}