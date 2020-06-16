<?php namespace App\Database\Migrations;

class TransaksiAlterAlamat extends \CodeIgniter\Database\Migration {

	public function up()
	{
		$fields = [
			'alamat'=>[
				'type'=>'TEXT'
			],
			'ongkir'=>[
				'type'=>'INT',
			],
			'status'=>[
				'type'=>'INT',
				'constraint'=>1,
			],
		];

		$this->forge->addColumn('transaksi', $fields);
		
	}
	public function down()
	{
		$this->forge->dropColumn('transaksi', ['alamat','ongkir','status']);
	}
}