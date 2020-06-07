<?php namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
	protected $table = 'barang';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'nama','harga','stok','gambar','created_date','created_by','updated_date','updated_by'
	];
	protected $returnType = 'App\Entities\Barang';
	protected $useTimestamps = false;
}