<?php namespace App\Database\Migrations;

class TransaksiAlterFk extends \CodeIgniter\Database\Migration {

	public function up()
	{
		
		$this->forge->dropForeignKey('transaksi','transaksi_id_barang_foreign');
		$this->forge->dropForeignKey('transaksi','transaksi_id_pembeli_foreign');

		$this->forge->addColumn('transaksi', [
    		'CONSTRAINT transaksi_id_pembeli_foreign FOREIGN KEY(id_pembeli) REFERENCES user(id) ON DELETE NO ACTION ON UPDATE CASCADE',
		]);

		$this->forge->addColumn('transaksi',[
			'CONSTRAINT transaksi_id_barang_foreign FOREIGN KEY(id_barang) REFERENCES barang(id) ON DELETE NO ACTION ON UPDATE CASCADE',
		]);
		
	}
	public function down()
	{
		$this->forge->addColumn('transaksi', [
    		'CONSTRAINT transaksi_id_pembeli_foreign FOREIGN KEY(id_pembeli) REFERENCES user(id)',
		]);

		$this->forge->addColumn('transaksi', [
    		'CONSTRAINT transaksi_id_barang_foreign FOREIGN KEY(id_barang) REFERENCES barang(id)',
		]);

	}
}