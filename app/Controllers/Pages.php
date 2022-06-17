<?php
namespace App\Controllers;
use App\Models\Datadiri;
class Pages extends BaseController {
    public function __construct(){
        $this->data = new Datadiri();   
    } 
    public function index(){
        echo view ('cv',['data'=> $this->data->first()]);
    }
    function add(){
        echo view('add',['data'=> $this->data->findAll()]);
    }
    function save(){
        $this->data->insert([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getPost('agama'),
            'sd' => $this->request->getVar('sd'),
            'smp' => $this->request->getVar('smp'),
            'sma' => $this->request->getVar('sma'),
            'skill' => $this->request->getVar('skill'),
            'skill2' => $this->request->getVar('skill2'),
            'skill3' => $this->request->getVar('skill3'),
            'pengalaman' => $this->request->getVar('pengalaman'),
            'pengalaman2' => $this->request->getVar('pengalaman2'),
            'pengalaman3' => $this->request->getVar('pengalaman3'),
        ]);
        return redirect()->to('pages');
    }
    function delete($npm) {
        $this->data->delete($npm);
        return redirect()->to('pages');
    }
    function get_edit($npm) {
        $result =  $this->data->where(['npm' => $npm])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data = [
                'npm' => $i['npm'],
                'nama' => $i['nama'],
                'tempat_lahir' => $i['tempat_lahir'],
                'tanggal_lahir' => $i['tanggal_lahir'],
                'alamat' => $i['alamat'],
                'no_hp' => $i['no_hp'],
                'email' => $i['email'],
                'jenis_kelamin' => $i['jenis_kelamin'],
                'agama' => $i['agama'],
                'sd' => $i['sd'],
                'smp' => $i['smp'],
                'sma' => $i['sma'],
                'skill' => $i['skill'],
                'skill2' => $i['skill2'],
                'skill3' => $i['skill3'],
                'pengalaman' => $i['pengalaman'],
                'pengalaman2' => $i['pengalaman2'],
                'pengalaman3' => $i['pengalaman3'],
            ];
            return view('edit', $data);
        } else {
            echo "Data Was Not Found";
        }
    }
    function update() {
        $this->data->insert([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getPost('agama'),
            'sd' => $this->request->getVar('sd'),
            'smp' => $this->request->getVar('smp'),
            'sma' => $this->request->getVar('sma'),
            'skill' => $this->request->getVar('skill'),
            'skill2' => $this->request->getVar('skill2'),
            'skill3' => $this->request->getVar('skill3'),
            'pengalaman' => $this->request->getVar('pengalaman'),
            'pengalaman2' => $this->request->getVar('pengalaman2'),
            'pengalaman3' => $this->request->getVar('pengalaman3'),
        ]);
        return redirect()->to('pages');
    }
}