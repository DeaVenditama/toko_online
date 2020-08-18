<?php namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
	protected $table = 'komentar';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'id_barang', 'id_user', 'komentar', 'created_date','created_by','updated_date','updated_by'
	];
	protected $returnType = 'App\Entities\Komentar';
	protected $useTimestamps = false;
}