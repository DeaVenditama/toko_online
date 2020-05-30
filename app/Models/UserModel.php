<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'username','avatar','password','salt','created_date','created_by','updated_date','updated_by'
	];
	protected $returnType = 'App\Entities\User';
	protected $useTimestamps = false;
}