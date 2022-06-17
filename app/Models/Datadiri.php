<?php
namespace App\Models;
use CodeIgniter\Model;
class Datadiri extends Model {
	protected $table = 'Datadiri';
	protected $allowedFields = ['npm', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'nohp', 'email', 'jenis_kelamin', 'agama', 'sd', 'smp', 'sma', 'skill', 'skill2', 'skill3', 'pengalaman', 'pengalaman2', 'pengalaman3'];
	protected $primaryKey = 'npm';
}
?>