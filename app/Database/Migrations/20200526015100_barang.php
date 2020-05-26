<?php namespace App\Database\Migrations; 

class Barang extends \CodeIgniter\Database\Migration{

	public function up(){
		$this->forge->addField([
			'id'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE
			],
			'nama'=>[
				'type'=>'TEXT',
			],
			'harga'=>[
				'type'=>'INT',
				'constraint'=>11,
			],
			'stok'=>[
				'type'=>'INT',
				'constraint'=>11,	
			],
			'gambar'=>[
				'type'=>'TEXT',
			],
			'created_by'=>[
				'type' => 'INT',
				'constraint' => 11,
			],
			'created_date'=>[
				'type' => 'DATETIME',
			],
			'updated_by'=>[
				'type' => 'INT',
				'constraint' => 11,
				'null' => TRUE,
			],
			'updated_date'=>[
				'type'=>'DATETIME',
				'null'=>TRUE,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('barang');
	}

	public function down(){
		$this->forge->dropTable('barang');
	}
}
?>